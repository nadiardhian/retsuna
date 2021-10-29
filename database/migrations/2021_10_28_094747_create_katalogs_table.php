<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('katalogs', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->string('nama_barang',50)->nullable()->default('NULL');
            $table->string('deskripsi_barang',50)->nullable()->default('NULL');
            $table->blob('foto_barang')->nullable()->default('NULL');
            $table->timestamp('created_at')->nullable();
            $table->integer('created_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('katalogs', function (Blueprint $table) {
            //
        });
    }
}
