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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->bigInteger('sub_category_id');
            $table->bigInteger('sub_sub_category_id')->nullable();
            $table->bigInteger('enterprise_id')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->double('price');
            $table->integer('quantity');
            $table->text('description');
            $table->string('sku');
            $table->string('code');
            $table->double('discount')->nullable();
            $table->string('image');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
