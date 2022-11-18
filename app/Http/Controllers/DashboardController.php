<?php
//Contoh :
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function index(){
        $arrData = ["Mahasiswa 1", "Mahasiswa 2", "Mahasiswa 3", "Mahasiswa 4"];
        return view('pages.Beranda')->with('Mahasiswa', $arrData);
    }

    public function tampil(){
        return "Data Mahasiswa";
    }
}