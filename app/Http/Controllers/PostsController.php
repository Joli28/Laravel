<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // @return
    public function index()
    {
        return view ('employees.index');
    }

}
