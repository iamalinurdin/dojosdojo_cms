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
    Schema::create('coupons', function (Blueprint $table) {
      $table->id();
      $table->string('coupon')->unique();
      $table->integer('max_usage')->unsigned()->default(100);
      $table->integer('usage')->unsigned()->default(0);
      $table->dateTime('start');
      $table->dateTime('finish');
      $table->integer('discount')->default(0);
      $table->enum('discount_type', ['CURRENCY', 'PERCENT']);
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
    Schema::dropIfExists('coupons');
  }
};
