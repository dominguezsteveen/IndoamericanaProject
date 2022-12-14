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
        Schema::create('admin_programas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->unique();
            $table->string('meta_titulo')->nullable();
            $table->string('img');
            $table->string('urlRedirect')->unique();
            $table->longText('content')->nullable();
            $table->longText('descripcion');
            $table->integer('orden')->nullable();
            $table->boolean('show')->default(true);
            $table->boolean('show_tab')->default(true);
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
        Schema::dropIfExists('admin_programas');
    }
};
