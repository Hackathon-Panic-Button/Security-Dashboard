<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeHex extends Migration
{
    public function up()
    {
			Schema::table('buttons', function (Blueprint $table) {
            $table->string('hardwareId', 4);
        });

    }

    public function down()
    {
        //
    }
}
