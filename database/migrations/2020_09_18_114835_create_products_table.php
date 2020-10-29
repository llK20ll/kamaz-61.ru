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
            $table->integer('category_id');
            $table->string('model');

            $table->double('price')->default(0);
            $table->text('image')->nullable();

            $table->text('card_params')->nullable();

            $table->text('vehicle_characteristics_params')->nullable();
            $table->text('weight_parameters_loads_params')->nullable();
            $table->text('engine_params')->nullable();
            $table->text('gearbox_params')->nullable();
            $table->text('cabin_params')->nullable();
            $table->text('chassis_characteristics_params')->nullable();
            $table->text('additionally_params')->nullable();
            $table->text('semi_trailer_characteristics_params')->nullable();
            $table->text('compatible_tractors_params')->nullable();
            $table->text('trailer_characteristics_params')->nullable();

            $table->double('new_price')->nullable();
            
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
