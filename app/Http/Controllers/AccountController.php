<?php

namespace App\Http\Controllers;

use App\User;
use App\Option;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateUserDataRequest;
use Illuminate\Database\ConnectionInterface as DB;

class AccountController extends Controller
{
	private $user;
	private $db;

	/**
	* Inject models into the constructor
	*
	* @param User $user
	* @param DB $db
	*
	*/
	public function __construct(
		User $user,
		 DB $db
		)
	{
		$this->user = $user;
		$this->db = $db;
	}

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return view
     */
    public function showUserData(Request $request)
    {
    	//load all user relationships
        $user = $request->user()->load('billing');
        $competition = $user->product()->get();

        // get user option
        $user_option = $user->option()->get(); 
        
        if($user_option->isEmpty())
        {
            return view('account', compact('user', 'competition'));
        }

        foreach($user_option as $user_option) 
        {
           $user_check_option = $user_option->pivot->option_id;
        }
        
        // check if option is correct
        $option = Option::where('id', $user_check_option)->firstOrFail();

        if($option->correct)
        {
            //show which product the user has won
            $product_user_won = $option->question()->get();

            foreach ($product_user_won as $key => $value) {
                //dispay the results after closing date
                $products_user_won = Product::where('id', $value->product_id)->firstOrFail();
            }
        }
        
        return view('account', compact('user', 'competition', 'products_user_won'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateUserDataRequest  $request
     * @return redirect back
     */
    public function updateAccount(UpdateUserDataRequest $request)
    {
    	$this->db->beginTransaction();

        $user = $request->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->update();

        if($user->isDirty('email'))
        {
        	//send email verification
        }

        $this->db->commit();

        return redirect()->back()->with('success', 'user data successfully updated');
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
