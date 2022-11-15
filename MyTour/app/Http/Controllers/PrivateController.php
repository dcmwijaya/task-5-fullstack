<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Articles;
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

    public function create_article(Request $reqdata)
    {
        if ($reqdata->hasFile('image')) {
            Articles::create([
                'user_id' => Auth::user()->id,
                'category_id' => $reqdata->category_id,
                'title' => $reqdata->title,
                'image' => $reqdata->image,
                'image' => $reqdata->file('image')->move('img\media', $reqdata->file('image')->getClientOriginalName()),
                'content' => $reqdata->content
            ]);
        } else {
            Articles::create([
                'user_id' => Auth::user()->id,
                'category_id' => $reqdata->category_id,
                'title' => $reqdata->title,
                'image' => "none",
                'content' => $reqdata->content
            ]);
        }
        $msg = " Anda berhasil menambahkan artikel!!";
        return redirect()->route('arsip')->with('createArticle', $msg);
    }

    public function edit_profile(Request $reqdata)
    {
        $UpData = User::where('id', '=', Auth::user()->id)->first();
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
        return redirect()->route('profile')->with('updateProfileNotif', $msg);
    }

    public function artikel()
    {
        return view('artikel');
    }

    public function arsip()
    {
        return view('arsip');
    }

    public function publikasi()
    {
        return view('publikasi');
    }

    public function kategori()
    {
        return view('kategori');
    }
}