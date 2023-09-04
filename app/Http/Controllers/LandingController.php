<?php

namespace App\Http\Controllers;

use App\Models\User;

class LandingController extends Controller
{
    //
    public function index()
    {

        $user = User::where('id', 7)->first();
        // dd($user);
        return view('landing')->with('user', $user);
    }
}
