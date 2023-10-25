<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileCTRL extends Controller
{
    public function index(){
        
        $nama = "Wisnu Yogi";
        $bio = "Saya Adalah Mahasiswa UNSIKA Informatika";
        $hobi = ["Bermain Game","Mendengarkan Lagu","Travelling"];
        return view('biodata',['nama'=>$nama, 'bio'=>$bio, 'hobi'=>$hobi]);
    }
}
