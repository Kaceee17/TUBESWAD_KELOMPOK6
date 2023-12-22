<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
        //mengambil data dari request
        $data = $request->all();

        //memasukkan data ke tabel model "Admin"
        Admin::create([

        'nama' => $data['nama'],
        'username' => $data['username'],
        'address' => $data['address'],
        'level' => $data['level'],
        'actions' => $data['actions'],
        ]);
        return redirect()->route('admin.index'); 
    }

    public function index(){
        $admin = Admin::all();

        return view('admin/index', compact('admin'));
    }
    //
}
