<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();;
            //depends on clients login
            $table->string('provider')->nullable();;
            $table->string('provider_id')->nullable();
            $table->string('fcm_token')->nullable();
            //unique key
            $table->string('key',255)->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('commune_id')->index()->nullable();
            $table->foreign('commune_id')->references('id')->on('communes')->onDelete('cascade');

            //address save as json {'wilaya':'','commune':'','address':''}
            $table->text('address')->nullable();
            $table->double('longitude')->nullable();
            $table->double('latitude')->nullable();
            $table->string('image')->nullable();
            $table->boolean('ban')->default(0);
            $table->boolean('validated')->default(0);
            $table->boolean('code')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('customers');
    }
}
