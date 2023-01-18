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
            $table->integer('publish')->default(0);
            $table->string('title');
            $table->string('entitle')->nullable();
            $table->integer('userid');
            $table->text('username');
            $table->integer('categoryid');
            $table->text('categoryname');
            $table->text('encategoryname')->nullable();
            $table->text('desc');
            $table->text('endesc')->nullable();
            $table->text('image');
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
