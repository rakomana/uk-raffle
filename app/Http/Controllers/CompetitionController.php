<?php

namespace App\Http\Controllers;

use App\User;
use App\Option;
use App\Product;
use App\Competition;
use Illuminate\Http\Request;
use App\Http\Requests\EnterCompetitionRequest;
use Illuminate\Database\ConnectionInterface as DB;

class CompetitionController extends Controller
{
    private $user;
    private $product;
    private $db;

    /**
    *   Inject models into the constructor
    * 
    * @params User $user
    * @params Product $product
    * @params DB $db
    *
    */
    public function __construct(
        User $user,
        Product $product,
        DB $db
    )
    {
        $this->user = $user;
        $this->product = $product;
        $this->db = $db;
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

        if($user->product->contains($request->product_id))
        {
            return redirect()->back()->with('success', ' you already Entered the competition');
        }

        // user enter competition on a specific item
        $user->product()->attach($request->product_id, ['quantity' => $request->quantity]);

        // user 's lucky answer
        $option = Option::where('option', $request->option)->firstOrFail();
        $user->option()->attach($option);

        $this->db->commit();

        return redirect()->back()->with('success', 'Entered competition successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function show(Competition $competition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function edit(Competition $competition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competition $competition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competition $competition)
    {
        //
    }
}
