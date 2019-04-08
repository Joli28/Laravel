<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TestController extends Controller
{
    //
    public function getUsers()
    {
        $users=User::all();
        //return view('testview', $users);
        return view('testview')->with('users', $users);
    }
}
