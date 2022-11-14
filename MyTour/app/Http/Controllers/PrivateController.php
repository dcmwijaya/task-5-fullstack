<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PrivateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        return view('profile');
    }

    public function edit_profile()
    {
        // $msg2 = " Anda berhasil mengubah data profil!!";
        // return view('profile')->with('updateProfileNotif', $msg2);
    }
}