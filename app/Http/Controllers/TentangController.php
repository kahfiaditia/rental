<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Helper\AlertHelper;

class TentangController extends Controller
{
    protected $title = 'Tentang';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => $this->title,
            'menu' => 'list ' . $this->title,
            'tentang' => TentangModel::all()
        ];
        return view('backoffice.tentang.data')->with($data);
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
            'menu' => 'list ' . $this->title,
        ];
        return view('backoffice.tentang.create')->with($data);
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
            'nama' => 'required',
            'foto' => 'required',
            'email1' => 'required',
            'telp1' => 'required',
            'alamat' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $store = new TentangModel();
            $store->nama = $request->nama;
            $store->email1 = $request->email1;
            $store->email2 = $request->email2;
            $store->telp1 = $request->telp1;
            $store->telp2 = $request->telp2;
            $store->alamat = $request->alamat;
            $store->kecamatan = $request->kecamatan;
            $store->Provinsi = $request->Provinsi;
            
            if ($request->file()) {
                $file = $request->file('foto');
                $fileName = Carbon::now()->format('ymdhis') . '_' . Auth::user()->id . '_' . str::random(25) . '.' . $file->extension();
                $store->image = $fileName;
                $file->move(public_path('files/logo'), $fileName);
            }
            $store->user_created = Auth::user()->id;
            $store->save();

            DB::commit();
            AlertHelper::addAlert(true);
            return redirect('backoffice/tentang');
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
            'menu' => 'list ' . $this->title,
            'data' => TentangModel::findorfail(Crypt::decryptString($id)),
        ];
        return view('backoffice.tentang.edit')->with($data);
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
            'nama' => 'required',
            'email1' => 'required',
            'telp1' => 'required',
            'alamat' => 'required',
            
        ]);
        DB::beginTransaction();
        try {
            $update = TentangModel::findorfail($id);
            $update->nama = $request->nama;
            $update->email1 = $request->email1;
            $update->email2 = $request->email2;
            $update->telp1 = $request->telp1;
            $update->telp2 = $request->telp2;
            $update->alamat = $request->alamat;
            $update->kecamatan = $request->kecamatan;
            $update->Provinsi = $request->Provinsi;

            // upload file
            if ($request->file()) {
                $file = $request->file('foto');
                $fileName = Carbon::now()->format('ymdhis') . '_' . Auth::user()->id . '_' . str::random(25) . '.' . $file->extension();
                $update->image = $fileName;
                $file->move(public_path('files/logo'), $fileName);
            }
            
            $update->save();

            DB::commit();
            AlertHelper::addAlert(true);

            return redirect('backoffice/tentang');
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
