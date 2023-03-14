<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArmadaModel;
use App\Models\TentangModel;


class FrontEndController extends Controller
{
    public function index()
    {
        $data = [
            'armada' => ArmadaModel::whereNotNull('harga_12')->get(),
            'mobil' => ArmadaModel::where('aktif',1)->get(),
            'tentang' => TentangModel::all()
        ];
        return view('index')->with($data);
    }

    // public function armada($id)
    // {
    //     $id = Crypt::decryptString($id);
    //     $data = [
    //         'armada' => ArmadaModel::where('aktif', 1)->get(),
    //         // 'team' => TeamModel::where('aktif', 1)->get(),
    //         // 'setting' => SettingModel::where('id', 1)->get(),
    //         // 'kategori' => KategoriModel::groupBy('kategori')->get(),
    //     ];
    //     return view('frontend.armada')->with($data);
    // }
}
