<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProformasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proformas', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->date('due_date');
            $table->string('country_of_origin');
            $table->string('port_of_loading');
            $table->string('shipment_period');
            $table->string('payment_terms');
            $table->string('insurance');
            $table->string('port_of_discharge');
            $table->string('final_destination');
            $table->string('inspection');
            $table->string('currency');
//            $table->foreign(\App\Models\Client::class);
             $table->unsignedBigInteger('client_id');
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
        Schema::dropIfExists('proformas');
    }
}
