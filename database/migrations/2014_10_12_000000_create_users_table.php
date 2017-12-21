<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');            
            $table->string('password'); 
            $table->string('email')->unique();          
            $table->string('lokasi')->nullable();
            $table->string('alamat')->nullable();
            $table->string('peringkat');
            $table->string('subjek');
            $table->string('telefon');
            $table->string('gambar')->nullable();
            $table->enum('kategori',['pusatTuisyen','tutorPersendirian']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
