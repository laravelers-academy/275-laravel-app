<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('zoom_meetings', function (Blueprint $table) {
            $table->id();
            $table->longText('payload'); // Información retornada por Zoom
            $table->foreignId('account_id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('zoom_meetings');
    }

};
