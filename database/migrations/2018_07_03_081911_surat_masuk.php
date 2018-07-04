<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SuratMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_surat');
            $table->date('tgl_surat');
            $table->string('pengirim');
            $table->string('perihal');
            $table->string('tertuju');
            $table->string('alamat');
            $table->unsignedinteger('id_disposisi');
            $table->foreign('id_disposisi')->references('id')->on('disposisis')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('ket_disposisi');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_masuk');
    }
}