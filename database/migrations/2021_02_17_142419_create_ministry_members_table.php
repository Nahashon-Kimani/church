<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinistryMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ministry_members', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('member_id')->unsigned();
            $table->bigInteger('ministry_id')->unsigned();
            $table->string('status')->default('Active');
            $table->bigInteger('created_by')->unsigned();
            $table->timestamps();
        });

        Schema::table('ministry_members', function (Blueprint $table) {
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
        });
        Schema::table('ministry_members', function (Blueprint $table) {
            $table->foreign('ministry_id')->references('id')->on('ministries')->onDelete('cascade');
        });
        Schema::table('ministry_members', function (Blueprint $table) {
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
        Schema::dropIfExists('ministry_members');
    }
}
