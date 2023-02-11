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
            $table->text('productcolor');
            $table->text('enproductcolor');
            $table->text('productvazn');
            $table->text('enproductvazn');
            $table->text('productjens');
            $table->text('enproductjens');
            $table->text('productpack');
            $table->text('enproductpack');
            $table->text('productcustom');
            $table->text('enproductcustom');
            $table->text('productdeliver');
            $table->text('enproductdeliver');
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
