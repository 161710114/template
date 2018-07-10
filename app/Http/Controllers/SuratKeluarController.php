<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat_Keluar;
use App\Disposisi;
use App\instansis;
use Session;
class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sk = Surat_Keluar::with('Disposisi')->get();
        return view('suratkeluar.index',compact('sk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disposisi = Disposisi::all();
        $instansi = instansis::all();
        return view('suratkeluar.create',compact('disposisi','instansi'));
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
            'no_surat' => 'required|',
            'tgl_surat' => 'required|',
            'pengirim' => 'required|',
            'perihal' => 'required|',
            'id_instansi' => 'required|',
            'alamat' => 'required|',
            'id_disposisi' => 'required',
            'ket_disposisi' => 'required|',
            'file' => 'required|'
        ]);
        $sk = new Surat_Keluar;
        $sk->no_surat = $request->no_surat;
        $sk->tgl_surat = $request->tgl_surat;
        $sk->pengirim = $request->pengirim;
        $sk->perihal = $request->perihal;
        $sk->id_instansi = $request->id_instansi;
        $sk->alamat = $request->alamat;
        $sk->id_disposisi = $request->id_disposisi;
        $sk->ket_disposisi = $request->ket_disposisi;
        $sk->file = $request->file;
        $sk->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$sk->nama</b>"
        ]);
        return redirect()->route('sk.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sk = Surat_Keluar::findOrFail($id);
        return view('suratkeluar.show',compact('sk'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sk = Surat_Keluar::findOrFail($id);
        $disposisi = Disposisi::all();
        $instansi = instansis::all();
        $selectedDisposisi = Surat_Keluar::findOrFail($id)->id_disposisi;
        $selectedInstansi = Surat_Keluar::findOrFail($id)->id_instansi;
        return view('suratkeluar.edit',compact('sk','disposisi','instansi','selectedDisposisi','selectedInstansi'));
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
            'no_surat' => 'required|',
            'tgl_surat' => 'required|',
            'pengirim' => 'required|',
            'perihal' => 'required|',
            'id_instansi' => 'required|',
            'alamat' => 'required|',
            'id_disposisi' => 'required',
            'ket_disposisi' => 'required|',
            'file' => 'required|'
        ]);
        $sk = Surat_Keluar::findOrFail($id);
        $sk->no_surat = $request->no_surat;
        $sk->tgl_surat = $request->tgl_surat;
        $sk->pengirim = $request->pengirim;
        $sk->perihal = $request->perihal;
        $sk->id_instansi = $request->id_instansi;
        $sk->alamat = $request->alamat;
        $sk->id_disposisi = $request->id_disposisi;
        $sk->ket_disposisi = $request->ket_disposisi;
        $sk->file = $request->file;
        $sk->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$sk->disposisi</b>"
        ]);
        return redirect()->route('sk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Surat_Keluar::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('sk.index');
    }
}
