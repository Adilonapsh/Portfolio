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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('app_name');
            $table->string('app_icon');
            $table->string('app_url');
            $table->string('app_url_fork');
            $table->string('app_photos');
            $table->string('short_desc');
            $table->text('desc');
            $table->json('tags');
            $table->json('feature');
            $table->string('slug');
            $table->boolean('visible_in_landing');
            $table->boolean('link_to_app');
            $table->timestamps();
        });
    }

    /***
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
