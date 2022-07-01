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
        Schema::create('latest_blogs', function (Blueprint $table) {
            $table->id();

            $table->string('author');
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('description');
        // php artisan migrate:fresh
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
        Schema::dropIfExists('latest_blogs');
    }
};
