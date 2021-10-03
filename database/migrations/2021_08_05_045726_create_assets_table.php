<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->integer('category_id');
            $table->string('details',100);
            $table->double('price',10,2)->default(0.00);
            $table->string('image')->nullable();
            $table->integer('unit')->nullable();
            $table->string('status')->default('active');
            $table->string('buyingdate');
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
        Schema::dropIfExists('assets');
    }
}
