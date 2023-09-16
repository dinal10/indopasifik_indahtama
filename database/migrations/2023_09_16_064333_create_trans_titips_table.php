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
        Schema::create('trans_titips', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_kendaraan')->index();
            $table->date('tgl_titip')->nullable();
            $table->double('harga_sewa',10,0)->nullable();
            $table->date('tgl_berakhir')->nullable();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trans_titips');
    }
};
