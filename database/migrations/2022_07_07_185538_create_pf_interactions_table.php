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
        Schema::create('pf_interactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pf_post_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name', 75)->require();
            $table->integer('like');

            $table->foreign('pf_post_id')
                ->references('id')
                ->on('pf_posts')
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
        Schema::dropIfExists('pf_interactions');
    }
};
