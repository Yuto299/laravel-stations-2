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
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); // IDカラム
            $table->text('title')->comment('タイトル');
            $table->text('image_url')->comment('画像');
            $table->integer('published_year')->comment('公開年');
            $table->boolean('is_showing')->default(false)->comment('上映中状況');
            $table->text('description')->comment('概要');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
