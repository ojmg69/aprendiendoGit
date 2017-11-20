<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index( Request $request)// solicita request y se puede poner otras variables
    {
    	//dd($request);
		$users= User::all(); //SELECT * FROM users
		//return $users;
		 return view('users.index')->with('users',$users);

	}
	    public function getUser( Request $request,$id){// solicita
		//dd($request);
		$user= User::find($id); //SELECT * FROM users where id=$id
		return $user;

	}
}
