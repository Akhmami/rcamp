<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('no_pendaftaran');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L','P']);
            $table->string('usia');
            $table->string('ukuran_baju');
            $table->string('asal_sekolah');
            $table->string('no_wa_ayah');
            $table->string('no_wa_ibu');
            $table->string('alamat');
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
        Schema::dropIfExists('participants');
    }
}
