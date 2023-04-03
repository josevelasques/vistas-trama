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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('code');
            $table->string('name', 100);
            $table->string('description', 200)->nullable();
            $table->float('price', 12, 2);
            $table->unsignedSmallInteger('added_percentage');
            $table->float('sale_price', 12, 2);
            $table->unsignedBigInteger('stock');
            $table->unsignedBigInteger('minimum_stock');
            $table->string('presentation', 100);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->text('image')->nullable();
            $table->string('status', 16)->default('ACTIVO');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
