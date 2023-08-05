<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            //maybe store or customer
            //$table->integer('reportable_id')->nullable();

            $table->unsignedBigInteger('reporting_customer_id')->nullable();
            //$table->unsignedBigInteger('reporting_store_id')->nullable();

            //$table->foreign('reporting_customer_id')->references('id')->on('customers')->onDelete('cascade');
            //$table->foreign('reporting_store_id')->references('id')->on('stores')->onDelete('cascade');

            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('store_id')->nullable();

            //$table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            //$table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');

            //store model or none
            $table->integer('reportable_type')->nullable();
            $table->string('report_type');
            $table->text('content');
            $table->text('image')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
