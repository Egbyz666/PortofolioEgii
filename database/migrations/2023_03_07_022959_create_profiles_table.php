<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nama',30);
            $table->string('status',30);
            $table->string('jenisKelamin',30);
            $table->string('alamat',100);
            $table->string('tempatLahir',50);
            $table->date('tanggalLahir',50);
            $table->string('fbAccount',50);
            $table->string('igAccount',50);
            $table->string('about',50);
            $table->string('foto',100);
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
        Schema::dropIfExists('profiles');
    }
}
