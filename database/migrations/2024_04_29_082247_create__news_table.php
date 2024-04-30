<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('News', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string("imageURL",255);
            $table->text("description");
            $table->string('category');
            $table->datetime("created_at");
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('News');
    }
};