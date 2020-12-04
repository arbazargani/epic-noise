<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('slug', 200);
            $table->string('nationality', 200);
            $table->boolean('verified')->default(0);
            // $table->text('url')->nullable();
            // $table->text('youtube_url')->nullable();
            // $table->text('spotify_url')->nullable();
            // $table->text('soundhound_url')->nullable();
            // $table->text('deezer_url')->nullable();
            $table->json('artist_info')->nullable();
            $table->text('description')->nullable();
            
            $table->text('hash')->nullable();
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
        Schema::dropIfExists('artists');
    }
}
