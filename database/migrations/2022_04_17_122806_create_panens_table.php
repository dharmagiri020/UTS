<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panens', function (Blueprint $table) {
            $table->id('panenID');
            $table->foreignID('produkID');
            $table->foreignID('id_kelompok_tani');
            $table->foreignID('user_id');
            $table->date('perkiraanPanenDate');
            $table->double('perkiraanPanenJumlah');
            $table->date('PanenDate');
            $table->double('PanenJumlah');
            $table->string('satuan');
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
        Schema::dropIfExists('panens');
    }
}