<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\instansis;
use Session;
class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = instansis::all();
        return view('instansi.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instansi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_instansi' => 'required|max:255',
            'kab_kota' => 'required|max:255',
            'telp' => 'required|max:255',
            'email' => 'required|max:255|unique:instansis',
            'alamat' => 'required|max:255',
            'kepala' => 'required|max:255',
            'nip_kepala' => 'required|max:255',
        ]);
        $a = new instansis;
        $a->nama_instansi = $request->nama_instansi;
        $a->kab_kota = $request->kab_kota;
        $a->telp = $request->telp;
        $a->email = $request->email;
        $a->alamat = $request->alamat;
        $a->kepala = $request->kepala;
        $a->nip_kepala = $request->nip_kepala;
        $a->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$a->nama</b>"
        ]);
        return redirect()->route('instansi.index');    }

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
        $a = instansis::findOrFail($id);
        return view('instansi.edit',compact('a'));
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
        $this->validate($request,[
            'nama_instansi' => 'required|max:255',
            'kab_kota' => 'required|max:255',
            'telp' => 'required|max:255',
            'email' => 'required|max:255',
            'alamat' => 'required|max:255',
            'kepala' => 'required|max:255',
            'nip_kepala' => 'required|max:255',
            ]);
        $a = instansis::findOrFail($id);
        $a->nama_instansi = $request->nama_instansi;
        $a->kab_kota = $request->kab_kota;
        $a->telp = $request->telp;
        $a->email = $request->email;
        $a->alamat = $request->alamat;
        $a->kepala = $request->kepala;
        $a->nip_kepala = $request->nip_kepala;
        $a->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$a->nama</b>"
        ]);
        return redirect()->route('instansi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = instansis::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('instansi.index');
    }
}
