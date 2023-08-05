<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->unsignedBigInteger('store_id')->index();
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
            $table->unsignedBigInteger('unite_id')->index();
            $table->foreign('unite_id')->references('id')->on('unites')->onDelete('cascade');
            //$table->string('name_ar')->nullable();
            $table->string('name');
            //$table->text('desc_ar')->nullable();
            $table->text('description')->nullable();
            $table->integer('price');
            $table->float('qty')->nullable();
            $table->float('min_qty')->default(0);
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
}
