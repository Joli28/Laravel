<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Joli extends Controller
{
     function index()
    {
         $data=DB::table('employees')
         ->join('orders''users.id')
       ->get()
       ->toArray();

       echo"<pre>";
       print_r($data);
    }
}
