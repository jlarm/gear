<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->uuid();
            $table->string('name');
            $table->string('size')->nullable();
            $table->float('weight')->nullable();
            $table->string('color')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->string('status');
            $table->dateTime('sold_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
