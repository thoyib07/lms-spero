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
        Schema::create('agensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('direktur_id')->references('id')->on('direkturs')->onDelete('cascade');
            $table->string('logo')->nullable();
            $table->string('nama_usaha');
            $table->string('alamat');
            $table->string('nib');
            $table->string('telepon');
            $table->string('status_verifikasi')->default(2);
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
        Schema::dropIfExists('agensis');
    }
};
