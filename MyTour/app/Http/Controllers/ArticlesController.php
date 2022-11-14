<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $msg1 = " Anda berhasil masuk!!";
        return view('profile')->with('LoginNotif', $msg1);
    }

    public function edit_profile()
    {
        $msg2 = " Anda berhasil mengubah data profil!!";
        return view('profile')->with('updateProfileNotif', $msg2);
    }
}