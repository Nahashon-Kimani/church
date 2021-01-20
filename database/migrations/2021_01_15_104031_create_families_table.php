<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('family_name');
            $table->string('slug');
            $table->bigInteger('family_head')->unsigned();
            $table->string('telephone');
            $table->string('emergency_no');
            $table->text('address');
            $table->string('status')->default('Active');
            $table->string('email')->nullable();
            $table->string('wedding_date')->nullable();
            $table->bigInteger('created_by')->unsigned();
            $table->timestamps();
        });

        Schema::table('families', function (Blueprint $table) {
            $table->foreign('family_head')->references('id')->on('members')->onDelete('cascade');
        });

        Schema::table('families', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('families');
    }
}
