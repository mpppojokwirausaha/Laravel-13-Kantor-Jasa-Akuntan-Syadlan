<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('no_whatsapp');
            $table->string('instagram');
            $table->string('tiktok');
            $table->text('address');
            $table->string('office_hours');
            $table->text('visi');
            $table->text('misi');
            $table->text('profile_desc');
            $table->string('profile_image')->nullable();
            $table->string('founder_name');
            $table->text('founder_desc');
            $table->string('founder_image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
