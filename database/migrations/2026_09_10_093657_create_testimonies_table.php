<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonies', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('testimony_avatar')->nullable();
            $table->string('testimony_name');
            $table->text('testimony_comment');
            $table->unsignedTinyInteger('testimony_start')->default(5); // rating 1-5
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonies');
    }
};
