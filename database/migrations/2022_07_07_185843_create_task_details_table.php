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
        Schema::create('task_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task_id');
            $table->string('type', 35)->required();
            $table->string('priority', 15)->require();
            $table->string('status', 20)->require();
            $table->char('color_priority', 15)->require();
            $table->char('color_head', 15)->require();

            $table->foreign('task_id')
                ->references('id')
                ->on('tasks')
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
        Schema::dropIfExists('task_details');
    }
};
