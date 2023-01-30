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
        Schema::table('posts', function (Blueprint $table) {
            //Añadir campo writer_id que sera la clave agen de la tabla writers
            $table->unsignedBigInteger('writer_id')->nullable();
            $table->foreign('writer_id')->references('id')->on('writers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['writer_id']);
            $table->dropColumn('writer_id');
        });
    }
};
