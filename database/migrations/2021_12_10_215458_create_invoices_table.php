<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
//            $table->foreign(\App\Models\Proforma::class);
            $table->unsignedBigInteger('proforma_id')->nullable();
            $table->string('bl_num');
            $table->string('vessel');
            $table->string('no_of_container');
            $table->string('port_of_loading');
            $table->string('port_of_discharge');
            $table->string('final_destination');
            $table->string('payment_terms');
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
        Schema::dropIfExists('invoices');
    }
}
