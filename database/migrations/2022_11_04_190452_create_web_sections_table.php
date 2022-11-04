<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_sections', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('img');
            $table->string('urlRedirect')->nullable();
            $table->longText('content');
            $table->boolean('show')->default(true);
            $table->date('fecha_public');
            $table->date('fecha_vigencia');
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
        Schema::dropIfExists('web_sections');
    }
};
