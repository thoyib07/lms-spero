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
        Schema::create('direkturs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_panjang');
            $table->string('email')->unique();
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('no_hp');
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
        Schema::dropIfExists('direkturs');
    }
};
