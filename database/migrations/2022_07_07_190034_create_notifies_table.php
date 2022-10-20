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
        Schema::create('notifies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name', 75)->default('Welcome to PushCode!');
            $table->string('description', 500)->default('<p>Welcome to Push Code. Why not start by creating a new activity?</p>');
            $table->string('icon', 75)->default('icon.png');
            $table->string('location', 75)->default('app.activity');
            $table->string('is_read', 75)->default('0');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('notifies');
    }
};
