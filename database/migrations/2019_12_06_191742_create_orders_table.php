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
            $table->bigIncrements('id');
            //$table->unsignedBigInteger('user_id');
            $table->integer('prix_total');
            $table->string('num_order');
            $table->string('nom_client');
            $table->string('prenom_client');
            $table->string('Adresse_client');
            $table->string('num_tel');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('admin_id')->nullable();
            $table->unsignedInteger('delivery_id')->nullable();
            
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
