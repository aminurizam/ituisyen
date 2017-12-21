<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function index()
    {
        $profiles = User::where('id', Auth::user()->id)->get();

	    return view ('profile', compact('profiles'));
    }

    

}
