<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('member_id')->unsigned();
            $table->bigInteger('service_id')->unsigned();
            $table->string('temp');
            $table->string('seat_no');
            $table->string('time');
            $table->string('date');
            $table->bigInteger('created_by')->unsigned();
            $table->timestamps();
        });

        Schema::table('attendances', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('attendances', function (Blueprint $table) {
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });

        Schema::table('attendances', function (Blueprint $table) {
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
