<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DateOfBirth');
            $table->string('gender');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->string('postcode');
            $table->string('homeTel');
            $table->string('mobTel');
            $table->string('workTel');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
