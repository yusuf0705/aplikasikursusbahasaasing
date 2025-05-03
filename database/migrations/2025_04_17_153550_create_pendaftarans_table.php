<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('pendaftarans', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });
    // }
    public function up()
{
    Schema::create('pendaftarans', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->enum('gender', ['Laki-laki', 'Perempuan']);
        $table->date('tanggal_lahir');
        $table->string('telepon');
        $table->text('alamat');
        $table->string('program');
        $table->integer('durasi');
        $table->integer('harga');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
