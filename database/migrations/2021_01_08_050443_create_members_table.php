<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('fullname');
            $table->string('gender');
            $table->string('slug');
            $table->string('phonenumber');
            $table->string('kin_contact');
            $table->string('email')->unique();
            $table->string('address_type');
            $table->string('address');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('country')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('baptized_date')->nullable();
            $table->string('join_date')->nullable();
            $table->string('image')->default('default.png');
            // $table->integer('group_id')->default('2');
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
        Schema::dropIfExists('members');
    }
}
