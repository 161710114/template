<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat_Keluar extends Model
{
	protected $table = 'surat_keluar';
    protected $fillable = ['no_surat', 'tgl_surat','pengirim','perihal','tertuju','alamat','id_disposisi','ket_disposisi','file'];

    public function Disposisi()
    {
    	return $this->belongsTo('App\Disposisi', 'id_disposisi');
    }

    public $timestamps = true;
}
