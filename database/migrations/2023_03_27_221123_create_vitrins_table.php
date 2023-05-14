<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitrinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitrins', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->default(0);
            $table->integer('userid');
            $table->string('username');
            $table->string('productcat')->nullable();
            $table->string('productcaten')->nullable();
            $table->integer('danesh')->default(0);
            $table->integer('taeed')->default(0);
            $table->integer('konsers')->default(0);
            $table->integer('esalat')->default(0);
            $table->bigInteger('phonenumber');
            $table->string('brandname');
            $table->string('brandnameen')->nullable();
            $table->string('desc');
            $table->string('descen')->nullable();
            $table->integer('size')->default(1);
            $table->text('logo')->nullable();
            $table->text('catalog')->nullable();
            $table->text('baner')->nullable();
            $table->string('country')->nullable();
            $table->string('countryen')->nullable();
            $table->string('state')->nullable();
            $table->string('stateen')->nullable();
            $table->string('city')->nullable();
            $table->string('cityen')->nullable();
            $table->string('prop1')->nullable();
            $table->string('prop1en')->nullable();
            $table->string('prop2')->nullable();
            $table->string('prop2en')->nullable();
            $table->string('prop3')->nullable();
            $table->string('prop3en')->nullable();
            $table->string('prop4')->nullable();
            $table->string('prop4en')->nullable();
            $table->string('prop5')->nullable();
            $table->string('prop5en')->nullable();
            $table->text('cert1')->nullable();
            $table->text('cert1en')->nullable();
            $table->text('cert2')->nullable();
            $table->text('cert2en')->nullable();
            $table->text('cert3')->nullable();
            $table->text('cert3en')->nullable();
            $table->text('cert4')->nullable();
            $table->text('cert4en')->nullable();
            $table->text('cert5')->nullable();
            $table->text('cert5en')->nullable();
            $table->text('aboutus')->nullable();
            $table->text('aboutusen')->nullable();
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
        Schema::dropIfExists('vitrins');
    }
}
