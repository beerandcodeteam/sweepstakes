<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sweepstakes', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->foreignId('user_id')->constrained();
            $table->integer("number_of_winners")->default(1);
            $table->dateTime("end_date")->nullable();
            $table->text("description")->nullable();
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
        Schema::dropIfExists('sweepstakes');
    }
};
