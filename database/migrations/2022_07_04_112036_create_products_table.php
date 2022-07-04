<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->id();
      $table->integer('subcategory_id')->unsigned();
      $table->integer('manufacturer_id')->unsigned();
      $table->string('product_name');
      $table->integer('price_in_idr')->default(0);
      $table->integer('price_in_usd')->default(0);
      $table->integer('discount')->default(0);
      $table->enum('discount_type', ['CURRENCY', 'PERCENT'])->nullable();
      $table->text('description')->nullable();
      $table->integer('weight')->unsigned()->default(0);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('products');
  }
};
