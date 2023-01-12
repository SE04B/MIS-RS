<?php

namespace App\Http\Controllers;

use App\Models\DataPasien;
use Illuminate\Http\Request;

class DataPasienUpdateController extends Controller
{
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 100;
        if (strlen($katakunci)) {
            $dataPasien = DataPasien::where('nama', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('gender', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $dataPasien = DataPasien::orderBy('id', 'desc')->paginate($jumlahbaris);
        }
        return view('pages.UpdatePasien')->with('dataPasien', $dataPasien);
    }

    public function edit($id)
    {
        $dataPasien = DataPasien::where('id', $id)->first();
        return view('pages.UpdatePasien')->with('dataPasien', $dataPasien);
    }
}
