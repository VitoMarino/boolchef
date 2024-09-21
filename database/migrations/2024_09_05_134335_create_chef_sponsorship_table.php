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
        Schema::create('chef_sponsorship', function (Blueprint $table) {

            // Dati tabella Chef
            $table->unsignedBigInteger('chef_id');
            $table->foreign('chef_id')->references('id')->on('chefs');

            // Dati tabella Sponsorship
            $table->unsignedBigInteger('sponsorship_id');
            $table->foreign('sponsorship_id')->references('id')->on('sponsorships');

            //
            $table->primary(['chef_id', 'sponsorship_id']);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chef_sponsorship');
    }
};
