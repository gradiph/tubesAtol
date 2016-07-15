<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usaha', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
			$table->string('alamat');
			$table->float('lat');
			$table->float('lng');
            $table->string('telepon',14);
			$table->string('produk_unggulan');
			$table->string('deskripsi');
			$table->integer('id_skala')->unsigned();
			$table->integer('id_sektor')->unsigned();
			$table->integer('id_kelurahan')->unsigned();
			$table->enum('status',['Aktif','Tidak Aktif']);
			
			$table->foreign('id_skala')->references('id')->on('skala_usaha');
			$table->foreign('id_sektor')->references('id')->on('sektor_usaha');
			$table->foreign('id_kelurahan')->references('id')->on('kelurahan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::transaction(function(){
			Schema::table('usaha',function(Blueprint $table) {
				$table->dropForeign('usaha_id_skala_foreign');
				$table->dropForeign('usaha_id_sektor_foreign');
				$table->dropForeign('usaha_id_kelurahan_foreign');
			});
			Schema::drop('usaha');
		});
    }
}
