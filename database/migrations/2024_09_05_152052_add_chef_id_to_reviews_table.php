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
        Schema::table('reviews', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('chef_id')->after('id')->nullable();

            // Vincolo di chiave esterna
            $table->foreign('chef_id')->references('id')->on('chefs')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {

            $table->dropForeign('reviews_chef_id_foreign');

            $table->dropColumn('chef_id');
        });
    }
};
