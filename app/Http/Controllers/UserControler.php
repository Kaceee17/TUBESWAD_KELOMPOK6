<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(){
        return view('user.daftar');
    }

    public function store(Request $request){
        //mengambil data dari request
        $data = $request->all();

        //memasukkan data ke tabel model "Showroom"
        User::create([

        'name' => $data['name'],
        'email' => $data['email'],
        'password' => $data['password'],
        ]);
        return redirect()->route('user.tabel'); 
    }

    public function index()
    {
        // Mengambil semua data pengguna dari tabel users
        $users = User::all();

        // Mengirim data pengguna ke tampilan (view)
        return view('user.index', ['users' => $users]);
    }
}