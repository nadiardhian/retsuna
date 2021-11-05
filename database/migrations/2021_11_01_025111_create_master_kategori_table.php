<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('master_kategori', function (Blueprint $table) {
            $table->increments('id_kategori');
            $table->string('kategori',50)->nullable()->default('NULL');
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
        Schema::table('master_kategori', function (Blueprint $table) {
            //
        });
    }
}
