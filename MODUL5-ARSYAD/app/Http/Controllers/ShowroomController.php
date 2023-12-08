<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;

class ShowroomController extends Controller
{
    public function create(){
        return view('showroom.create');
    }

    public function store(Request $request){
        //mengambil data dari request
        $data = $request->all();

        //memasukkan data ke tabel model "Showroom"
        Showroom::create([

        'nama_mobil' => $data['nama_mobil'],
        'brand_mobil' => $data['brand_mobil'],
        'warna_mobil' => $data['warna_mobil'],
        'tipe_mobil' => $data['tipe_mobil'],
        'harga_mobil' => $data['harga_mobil'],
        ]);
        return redirect()->route('showroom.index'); 
    }

    public function index(){
        $showroom = Showroom::all();

        return view('showroom/index', compact('showroom'));
    }
    //
}
