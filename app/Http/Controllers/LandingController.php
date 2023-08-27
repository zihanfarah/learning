<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class LandingController extends Controller
{
    //
    function index() {

        $user = User::where('id', 7)->first();
        // dd($user); 
        return view('landing')->with('user', $user);
    }
}
