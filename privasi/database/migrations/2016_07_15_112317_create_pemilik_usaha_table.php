<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemilikUsahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilik_usaha', function (Blueprint $table) {
			$table->increments('id');
            $table->integer('id_users')->unsigned();
			$table->string('no_ktp',16);
			$table->string('no_hp',14);
			$table->string('alamat');
			$table->string('tempat_lahir',50);
			$table->date('tgl_lahir');
			$table->string('gambar_ktp');
			$table->string('gambar_foto');
			$table->enum('status',['Aktif','Menunggu','Non-Aktif'])->default('Menunggu');
			$table->string('token');
			
			$table->foreign('id_users')->references('id')->on('users');
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
			Schema::table('pemilik_usaha',function(Blueprint $table) {
				$table->dropForeign('pemilik_usaha_id_users_foreign');
			});
			Schema::drop('pemilik_usaha');
		});
    }
}
