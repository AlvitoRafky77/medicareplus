<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthServicesTable extends Migration
{
    public function up()
    {
        Schema::create('health_services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama layanan kesehatan
            $table->string('category'); // Kategori layanan (klinik, rumah sakit, dll.)
            $table->string('location'); // Lokasi layanan
            $table->text('description'); // Deskripsi layanan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('health_services');
    }
}
