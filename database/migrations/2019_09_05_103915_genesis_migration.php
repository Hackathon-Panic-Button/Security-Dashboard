<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GenesisMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
				Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
        });
	
			  Schema::create('buttons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location');
            $table->bigInteger('client_id')->unsigned();
						$table->integer("locked");
						$table->foreign('client_id')
            ->references('id')
						->on('clients')
						->onDelete('cascade');
        });

			  Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('signed');
            $table->timestamps();
            $table->bigInteger('button_id')->unsigned();
						$table->foreign('button_id')
            ->references('id')
            ->on('buttons');
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
