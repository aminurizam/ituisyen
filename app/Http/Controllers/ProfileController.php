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

    public function edit($id)
    {
    	$user = User::findOrFail($id);
//        $id = Auth::id();
        $profiles = User::where('id',$id)->get();
        return view('profile-edit', compact('profiles'));
    }

    public function update(Request $request, $id)
    {
    	$user = User::findOrFail($id);
    	$this->validate($request, [
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->telefon = $request->telefon;
    	$user->peringkat = $request->peringkat;
    	$user->subjek = $request->subjek;
    	$user->alamat = $request->alamat;
    	$user->lokasi = $request->lokasi;

    	if ($request->hasFile('gambar')){
            $this->validate($request, [
                'gambar' => 'required|image'
            ]);
            $gambar = '/gambar/profile_' . time() . $user->id . '.' . $request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path('gambar/'), $gambar);
            $user->gambar = $gambar;
    }
    	// $user->gambar = $request->gambar;
    	// dd($user);
    	$user->save();

    	return redirect()->route('profile');

    }

    

}
