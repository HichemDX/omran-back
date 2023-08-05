<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
  {
    Schema::create('store_ratings', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('store_id');
      $table->unsignedInteger('rating');
      $table->text('comment')->nullable();
      $table->timestamps();

      $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::dropIfExists('store_ratings');
  }
}
