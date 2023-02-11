<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('tid')->default(0);
            $table->text('title');
            $table->text('senderid');
            $table->text('sendername');
            $table->integer('status')->default(1);
            $table->integer('force');
            $table->integer('category');
            $table->text('desc');
            $table->text('file')->nullable();
            $table->text('date');
            $table->text('prdate');
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
        Schema::dropIfExists('tickets');
    }
}
