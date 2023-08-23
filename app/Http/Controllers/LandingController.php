<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class LandingController extends Controller
{
    //
    function index() {

        $user = User::get();
        dd($user);
        return view('landing');
    }
}
