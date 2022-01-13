<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromeniBrojTelefonaPrimalacs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('primalacs', function (Blueprint $table) {
            $table->renameColumn('brojTelefona', 'brTelefona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('primalacs', function (Blueprint $table) {
            $table->renameColumn('brTelefona', 'brojTelefona');
        });
    }
}
