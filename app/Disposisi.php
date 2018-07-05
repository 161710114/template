<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    protected $table = 'disposisis';
    protected $fillable = ['disposisi'];
    	public function Surat_Masuk()
    {
    	return $this->hasMany('App\Surat_Masuk', 'id_disposisi');
    }

    public function Surat_Keluar()
    {
    	return $this->hasMany('App\Surat_Keluar', 'id_disposisi');
    }

     public $timestamps = true;
}
