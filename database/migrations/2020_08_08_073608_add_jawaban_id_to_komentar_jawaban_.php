<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJawabanIdToKomentarJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar_jawaban_', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('jawaban_id')->nullable();
            $table->unsignedBigInteger('profil_id')->nullable();

            $table->foreign('jawaban_id')->references('id')->on('jawaban');
            $table->foreign('profil_id')->references('id')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komentar_jawaban_', function (Blueprint $table) {
            //
            $table->dropForeign(['profil_id'],['jawaban_id']);
            $table->dropColumn(['profil_id'],['jawaban_id']);
        });
    }
}
