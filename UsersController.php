<?php

namespace App\Http\Controllers;

// salah kapital tidak bisa ke import librarynya
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        $data = DB::table('users')
            ->get();
        return view('data_users', ['data' => $data]);
    }
    // public function cari_user(){

    // }

    public function barang()
    {
        $data = DB::table('barangs')->paginate(10);
        return view('data_barang', ['data' => $data]);
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $data = DB::table('barangs')
            ->where('nm_barang', 'like', "%" . $cari . "%")
            ->paginate();

        return view('data_barang', ['data' => $data]);
    }
};