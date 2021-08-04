<?php

namespace App\Http\Controllers;

use App\User;
use App\Option;
use App\Product;
use App\Competition;
use App\UserProduct;
use App\Enums\Payment;
use App\Traits\PaidProduct;
use Illuminate\Http\Request;
use App\Notifications\Competition\NotifyLoser;
use App\Http\Requests\EnterCompetitionRequest;
use App\Notifications\Competition\NotifyWinner;
use Illuminate\Database\ConnectionInterface as DB;

class CompetitionController extends Controller
{
    private $paidProduct;
    private $product;
    private $user;
    private $db;

    /**
     *   Inject models into the constructor
     * 
     * @param DB $db
     * @param User $user
     * @param Product $product
     * @param PaidProduct $paidProduct
     * @param UserProduct $userProduct
     */
    public function __construct(
        DB $db,
        User $user,
        Product $product,
        PaidProduct $paidProduct,
        UserProduct $userProduct
    ) {
        $this->db = $db;
        $this->user = $user;
        $this->product = $product;
        $this->paidProduct = $paidProduct;
        $this->userProduct = $userProduct;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userEnterCompetition(EnterCompetitionRequest $request)
    {
        $this->db->beginTransaction();

        $user = $request->user();

        if ($user->product->contains($request->product_id)) {
            throw new \ErrorException('you already Entered the competition');
        }

        // user enter competition on a specific item
        $user->product()->attach($request->product_id, ['quantity' => $request->quantity]);

        $this->db->commit();

        return response()->json(['success' => true, 'message', 'Entered competition successfully']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = $this->product->all();

        return view('competition', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $carts  = $product->users;

        $competitors = $this->paidProduct->sort($carts);
    
        return view('competition-detail', compact('product', 'competitors'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function getRandomWinner(Product $product)
    {
        $carts = $product->users;

        //convert array to an object
        $competitors = $this->paidProduct->sort($carts);

        $winner_id = $competitors->random()->id;
    
        $winner = $this->user->findOrFail($winner_id);

        #update winner and notify via email
        #update loosers and notify via email
        foreach($competitors as $competitor)
        {
            if($competitor->id == $winner->id)
            {
                $competitor->pivot->status = Payment::Win;

                $winner->notify(new NotifyWinner(
                    $product
                ));

            }else {
                $competitor->pivot->status = Payment::Lost;
                //cron jobs
            }
            $competitor->pivot->save();
        }
        #track order

        session()->put('winner'.$product->id, [
            'winner_id' => $winner_id,
            'winner_name' => $winner->name,
        ]);
    
        return redirect()->back();
    }

    /**
     * get winners
     * @return view
    */
    public function indexWinners()
    {
        $competitions = $this->userProduct->all();
        
        return view('winners', compact('competitions'));
    }
}
