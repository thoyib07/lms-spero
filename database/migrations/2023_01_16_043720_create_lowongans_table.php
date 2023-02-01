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
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->enum('level', ['Sales', 'Team Leader', 'Area Koordinator']);
            $table->string('client');
            $table->string('kuota');
            $table->string('lokasi');
            $table->string('gaji')->nullable();
            $table->string('tahun_pengalaman');
            $table->string('skill_pekerjaan');
            $table->string('deskripsi_pekerjaan');
            $table->string('syarat_pekerjaan');
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
        Schema::dropIfExists('lowongans');
    }
};
