<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat_Masuk;
use App\Disposisi;
use App\instansis;
use Session;
class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sm = Surat_Masuk::with('Disposisi')->get();
        return view('suratmasuk.index',compact('sm'));
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
        return view('suratmasuk.create',compact('disposisi','instansi'));
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
            'id_instansi' => 'required|',
            'id_disposisi' => 'required',
            'perihal' => 'required|',
            'ket_disposisi' => 'required|',
            'file' => 'required|'
        ]);
        $sm = new Surat_Masuk;
        $sm->no_surat = $request->no_surat;
        $sm->tgl_surat = $request->tgl_surat;
        $sm->id_instansi = $request->id_instansi;
        $sm->perihal = $request->perihal;
        $sm->id_disposisi = $request->id_disposisi;
        $sm->ket_disposisi = $request->ket_disposisi;
        $sm->file = $request->file;
        $sm->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$sm->nama</b>"
        ]);
        return redirect()->route('sm.index');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sm = Surat_Masuk::findOrFail($id);
        return view('suratmasuk.show',compact('sm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sm = Surat_Masuk::findOrFail($id);
        $disposisi = Disposisi::all();
        $instansi = instansis::all();
        $selectedDisposisi = Surat_Masuk::findOrFail($id)->id_disposisi;
        $selectedInstansi = Surat_Masuk::findOrFail($id)->id_instansi;
        return view('suratmasuk.edit',compact('sm','disposisi','instansi','selectedDisposisi','selectedInstansi'));
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
            'id_instansi' => 'required|',
            'perihal' => 'required|',
            'id_disposisi' => 'required',
            'ket_disposisi' => 'required|',
            'file' => 'required|'
        ]);
        $sm = Surat_Masuk::findOrFail($id);
        $sm->no_surat = $request->no_surat;
        $sm->tgl_surat = $request->tgl_surat;
        $sm->id_instansi = $request->id_instansi;
        $sm->perihal = $request->perihal;
        $sm->id_disposisi = $request->id_disposisi;
        $sm->ket_disposisi = $request->ket_disposisi;
        $sm->file = $request->file;
        $sm->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$sm->disposisi</b>"
        ]);
        return redirect()->route('sm.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Surat_Masuk::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('sm.index');
    }
}
