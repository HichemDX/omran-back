<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            //depends on clients login
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('fcm_token')->nullable();
            //unique key
            $table->string('key',255)->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            //address save as json {'wilaya':'','commune':'','address':''}
            //$table->text('address')->nullable();
            $table->unsignedBigInteger('commune_id')->index()->nullable();
            $table->foreign('commune_id')->references('id')->on('communes')->onDelete('cascade');
            $table->text('address')->nullable();//{'wilaya':'','commune':'','address':''}
            $table->double('longitude')->nullable();
            $table->double('latitude')->nullable();
            $table->string('image')->nullable();
            $table->boolean('ban')->default(0);
            $table->enum('status', ['PENDING', 'ACCEPTED', 'REFUSED'])->default('PENDING');
            //minimum amount to let customer order from a store
            $table->string('password')->nullable();
            $table->boolean('validated')->default(0);
            $table->boolean('code')->nullable();
            $table->float('min_amount_order')->default(0);
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
        Schema::dropIfExists('stores');
    }
}
