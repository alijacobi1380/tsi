<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceticketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicetickets', function (Blueprint $table) {
            $table->id();
            $table->integer('sid')->default(0);
            $table->text('title');
            $table->text('senderid');
            $table->text('sendername');
            $table->longText('desc');
            $table->text('file')->nullable();
            $table->text('date');
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
        Schema::dropIfExists('servicetickets');
    }
}
