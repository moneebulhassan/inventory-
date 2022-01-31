<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProformaItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proforma_items', function (Blueprint $table) {
            $table->id();
//            $table->foreign(\App\Models\Proforma::class);
//            $table->foreign(\App\Models\Product::class);
            $table->unsignedBigInteger('proforma_id');
            $table->unsignedBigInteger('product_id');
            $table->string('quantity');
            $table->string('price');

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
        Schema::dropIfExists('proforma_items');
    }
}
