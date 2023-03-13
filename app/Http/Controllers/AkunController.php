<?php

namespace App\Http\Controllers;

use App\Helper\AlertHelper;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AkunController extends Controller
{
    protected $title = 'akun';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->roles == 'Admin') {
            $list = User::all();
        } else {
            $list = User::where('id', Auth::user()->id)->get();
        }
        $data = [
            'title' => $this->title,
            'menu' => 'list ' . $this->title,
            'lists' => $list
        ];
        return view('backoffice.akun.list')->with($data);
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
        return view('backoffice.akun.create')->with($data);
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
            'email' => 'required|unique:users,email,' . $request->email,
            'name' => 'required',
            'password' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $store = new User();
            $store->name = $request->name;
            $store->email = $request->email;
            $store->password = bcrypt($request->password);
            $store->roles = 'Admin';
            // upload file
            if ($request->file()) {
                $file = $request->file('foto');
                $fileName = Carbon::now()->format('ymdhis') . '_' . Auth::user()->id . '_' . str::random(25) . '.' . $file->extension();
                $store->foto = $fileName;
                $file->move(public_path('files/akun'), $fileName);
            }
            $store->status = 'Aktif';
            $store->save();

            DB::commit();
            AlertHelper::addAlert(true);
            return redirect('backoffice/akun');
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
            'data' => User::findorfail(Crypt::decryptString($id)),
        ];
        return view('backoffice.akun.edit')->with($data);
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
            'email' => 'required|unique:users,email,' . $id,
            'name' => 'required',
            'password' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $update =  User::findorfail($id);
            $update->name = $request->name;
            $update->email = $request->email;
            $update->password = bcrypt($request->password);
            $update->roles = 'Admin';
            // upload file
            if ($request->file()) {
                $file = $request->file('foto');
                $fileName = Carbon::now()->format('ymdhis') . '_' . Auth::user()->id . '_' . str::random(25) . '.' . $file->extension();
                $update->foto = $fileName;
                $file->move(public_path('files/akun'), $fileName);
            }
            $update->status = isset($request->status) ? 'Aktif' : 'Tidak Aktif';
            $update->save();

            DB::commit();
            AlertHelper::addAlert(true);

            if (Auth::user()->roles == 'Admin') {
                return redirect('backoffice/akun');
            } else {
                return back();
            }
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
        DB::beginTransaction();
        try {
            $id = Crypt::decryptString($id);
            $destroy = User::findorfail($id);
            $destroy->delete();

            DB::commit();
            AlertHelper::deleteAlert(true);
            return back();
        } catch (\Throwable $err) {
            DB::rollBack();
            AlertHelper::deleteAlert(false);
            return back();
        }
    }

    public function profile($id)
    {
        $data = [
            'title' => $this->title,
            'menu' => 'rubah ' . $this->title,
            'data' => User::findorfail(Crypt::decryptString($id)),
        ];
        return view('backoffice.akun.profile')->with($data);
    }
}
