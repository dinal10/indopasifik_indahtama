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
        Schema::create('trans_sewas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_titip')->index();
            $table->date('tgl_awal')->nullable();
            $table->date('tgl_akhir')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trans_sewas');
    }
};
