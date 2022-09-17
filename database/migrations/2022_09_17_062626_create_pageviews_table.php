<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pageviews', function (Blueprint $table) {
            // user, page, type, page_id, ip
            $table->id();
            $table->string('user')->nullable();
            $table->string('page')->nullable();
            $table->string('type')->nullable();
            $table->string('page_id')->nullable();
            $table->longText('ip')->nullable();
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
        Schema::dropIfExists('pageviews');
    }
}
