<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArmadaModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Helper\AlertHelper;

class ArmadaController extends Controller
{
    protected $title = 'armada';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armada = ArmadaModel::all();
        $data = [
            'title' => $this->title,
            'menu' => 'list ' . $this->title,
            'armada' => $armada
        ];
        return view('backoffice.armada.data')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => $this->title,
            'menu' => 'tambah ' . $this->title,
        ];
        return view('backoffice.armada.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'merk' => 'required',
            'harga_12_all' => 'required',
            'harga_full' => 'required',
            'harga_full_all' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $store = new ArmadaModel();
            $store->merk = $request->merk;
            $store->model = $request->model;
            $store->layanan = $request->layanan;
            $store->harga_12 = $request->harga_12;
            $store->harga_12_all = $request->harga_12_all;
            $store->harga_full = $request->harga_full;
            $store->harga_full_all = $request->harga_full_all;
            $store->tagline1 = $request->tagline1;
            $store->tagline2 = $request->tagline2;
            $store->fitur1 = $request->fitur1;
            $store->fitur2 = $request->fitur2;
            $store->deskripsi = $request->deskripsi;
            // upload file
            if ($request->file()) {
                $file = $request->file('foto');
                $fileName = Carbon::now()->format('ymdhis') . '_' . Auth::user()->id . '_' . str::random(25) . '.' . $file->extension();
                $store->image = $fileName;
                $file->move(public_path('files/armada'), $fileName);
            }
            $store->user_created = Auth::user()->id;
            $store->aktif = '1';
            $store->save();

            DB::commit();
            AlertHelper::addAlert(true);
            return redirect('backoffice/armada');
        } catch (\Throwable $err) {
            DB::rollBack();
            throw $err;
            AlertHelper::addAlert(false);
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => $this->title,
            'menu' => 'rubah ' . $this->title,
            'data' => ArmadaModel::findorfail(Crypt::decryptString($id)),
        ];
        return view('backoffice.armada.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = Crypt::decryptString($id);
        $validated = $request->validate([
            'merk' => 'required',
            'harga_12_all' => 'required',
            'harga_full' => 'required',
            'harga_full_all' => 'required',
            'status' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $update = ArmadaModel::findorfail($id);
            $update->merk = $request->merk;
            $update->model = $request->model;
            $update->layanan = $request->layanan;
            $update->harga_12 = $request->harga_12;
            $update->harga_12_all = $request->harga_12_all;
            $update->harga_full = $request->harga_full;
            $update->harga_full_all = $request->harga_full_all;
            $update->tagline1 = $request->tagline1;
            $update->tagline2 = $request->tagline2;
            $update->fitur1 = $request->fitur1;
            $update->fitur2 = $request->fitur2;
            $update->deskripsi = $request->deskripsi;
            $update->aktif = $request->status;

            // upload file
            if ($request->file()) {
                $file = $request->file('foto');
                $fileName = Carbon::now()->format('ymdhis') . '_' . Auth::user()->id . '_' . str::random(25) . '.' . $file->extension();
                $update->image = $fileName;
                $file->move(public_path('files/armada'), $fileName);
            }
            $update->aktif = isset($request->status) ? 1 : 0;
            $update->save();

            DB::commit();
            AlertHelper::addAlert(true);

            return redirect('backoffice/armada');
        } catch (\Throwable $err) {
            DB::rollBack();
            throw $err;
            AlertHelper::addAlert(false);
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
