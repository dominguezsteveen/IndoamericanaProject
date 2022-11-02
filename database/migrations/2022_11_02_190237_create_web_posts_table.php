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
        Schema::create('web_posts', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('img');
            $table->string('urlRedirect');
            $table->longText('content');
            $table->integer('orden')->nullable();
            $table->boolean('show')->default(true);
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
        Schema::dropIfExists('web_posts');
    }
};
