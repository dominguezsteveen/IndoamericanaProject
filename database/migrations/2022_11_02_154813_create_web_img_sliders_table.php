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
        Schema::create('web_img_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('urlImg');
            $table->string('urlRedirect')->nullable();
            $table->boolean('show')->default(true);
            $table->integer('position')->nullable()->unique();
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
        Schema::dropIfExists('web_img_sliders');
    }
};
