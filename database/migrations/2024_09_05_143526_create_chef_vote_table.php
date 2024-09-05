<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chef_vote', function (Blueprint $table) {
            // Dati tabella Chef
            $table->unsignedBigInteger('chef_id');
            $table->foreign('chef_id')->references('id')->on('chefs');

            // Dati tabella Vote
            $table->unsignedBigInteger('vote_id');
            $table->foreign('vote_id')->references('id')->on('votes');

            //
            $table->primary(['chef_id', 'vote_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chef_vote');
    }
};
