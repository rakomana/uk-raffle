<?php

namespace App\Http\Controllers;

use App\User;
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
        $competition = $user->product()->paginate(1);

        return view('account', compact('user', 'competition'));
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
