<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('store_id')->nullable();
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
            $table->unsignedBigInteger('commune_id')->index();
            $table->foreign('commune_id')->references('id')->on('communes')->onDelete('cascade');
            //json {name,phone,wilaya,commune,address}
            //$table->json('shipping_info');
            $table->string('name');
            $table->string('phone');
            $table->text('address');
            $table->integer('shipping_cost');
            $table->integer('grand_total');
            $table->enum('status', ['PENDING', 'PROCESSING', 'PREPARED', 'DISPATCHED','DELIVERED','CANCELED'])->default('PENDING');

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
        Schema::dropIfExists('orders');
    }
    
}
