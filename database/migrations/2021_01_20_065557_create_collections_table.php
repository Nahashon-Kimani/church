<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_id')->unsigned();
            $table->string('date');
            $table->string('amount');
            $table->string('slug');
            $table->bigInteger('giving_category_id')->unsigned();
            $table->bigInteger('created_by')->unsigned();
            $table->timestamps();
        });

        Schema::table('collections', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('collections', function (Blueprint $table) {
            $table->foreign('giving_category_id')->references('id')->on('giving_categories')->onDelete('cascade');
        });

        Schema::table('collections', function (Blueprint $table) {
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collections');
    }
}
