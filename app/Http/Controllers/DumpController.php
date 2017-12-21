<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class DumpController extends Controller
{
    
    public function regPT()
    {
        return view ('auth.registerPT');
    }


    public function regTP()
    {
        return view ('auth.registerTP');
    }

    public function index()
    {
    	$data = User::all();

    	return view('index', compact('data'));
    }

    public function tuisyenDetail($id)
    {
        $details = User::findOrFail($id);

        return view('index-details',compact('details'));

    }

}
