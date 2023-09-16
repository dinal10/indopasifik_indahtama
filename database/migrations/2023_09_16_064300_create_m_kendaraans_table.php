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
        Schema::create('m_kendaraans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('merk');
            $table->string('jenis');
            $table->string('nama');
            $table->string('nopol');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_kendaraans');
    }
};
