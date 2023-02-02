<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('lowongan_id')->references('id')->on('lowongans')->onDelete('cascade');
            $table->string('judul_materi');
            $table->string('video_1');
            $table->string('intruksi_1');
            $table->string('penjelasan_1');
            $table->string('pertanyaan_1');
            $table->string('file_pdf');
            $table->string('video_2');
            $table->string('intruksi_2');
            $table->string('penjelasan_2');
            $table->string('instruksi_studi_kasus');
            $table->string('penjelasan_studi_kasus');
            $table->string('pertanyaan_studi_kasus');
            $table->string('praktekkan');
            $table->string('instruksi_essay');
            $table->string('urutan_materi');
            $table->string('status_aktif')->default(1);
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('materis');
    }
};
