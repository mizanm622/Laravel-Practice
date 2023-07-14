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
            $table->string('ProductName');
            $table->tinyInteger('ProductId');
            $table->string('ProductCategory');
            $table->float('ProductPrice',8,2);
            $table->string('ProductImage');
            $table->integer('ProductQuantity');
            $table->text('ProductDescription');
            $table->boolean('PublicationStatus');
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
