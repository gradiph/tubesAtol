<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelurahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelurahan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',30);
            $table->integer('id_kecamatan')->unsigned();
			
			$table->foreign('id_kecamatan')->references('id')->on('kecamatan');
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
			Schema::table('kelurahan',function(Blueprint $table) {
				$table->dropForeign('kelurahan_id_kecamatan_foreign');
			});
			Schema::drop('kelurahan');
		});
    }
}
