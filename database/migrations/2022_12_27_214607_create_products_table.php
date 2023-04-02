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
            $table->text('enproductcolor')->nullable();
            $table->text('productvazn');
            $table->text('enproductvazn')->nullable();
            $table->text('productjens');
            $table->text('enproductjens')->nullable();
            $table->text('productpack');
            $table->text('enproductpack')->nullable();
            $table->text('productcustom');
            $table->text('enproductcustom')->nullable();
            $table->text('productdeliver');
            $table->text('enproductdeliver')->nullable();
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
