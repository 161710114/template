<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat_Masuk extends Model
{
	protected $table = 'surat_masuk';
    protected $fillable = ['no_surat', 'tgl_surat','id_instansi','perihal','id_disposisi','ket_disposisi','file'];

    public function Disposisi()
    {
    	return $this->belongsTo('App\Disposisi', 'id_disposisi');
    }

    public function Instansi()
    {
    	return $this->belongsTo('App\instansis', 'id_instansi');
    }

    public $timestamps = true;
}
