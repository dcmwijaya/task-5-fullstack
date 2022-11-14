<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

    public function edit_profile(Request $reqdata)
    {
        $UpData = User::where('id', '=', $reqdata->user()->id)->first();
        if ($reqdata->hasFile('image')) {
            $UpData->update([
                'name' => $reqdata->name,
                'pekerjaan' => $reqdata->pekerjaan,
                'jenis_kelamin' => $reqdata->jenis_kelamin,
                'tinggal' => $reqdata->tinggal,
                'email' => $reqdata->email,
                'password' => bcrypt($reqdata->password),
                'image' => $reqdata->file('image')->move('img\profile', $reqdata->file('image')->getClientOriginalName())
            ]);
        } else {
            $UpData->update([
                'name' => $reqdata->name,
                'pekerjaan' => $reqdata->pekerjaan,
                'jenis_kelamin' => $reqdata->jenis_kelamin,
                'tinggal' => $reqdata->tinggal,
                'email' => $reqdata->email,
                'password' => bcrypt($reqdata->password),
                'image' => $UpData->image
            ]);
        }
        $msg = " Anda berhasil mengubah data profil!!";
        return view('profile')->with('updateProfileNotif', $msg);
    }
}