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
        Schema::create('pf_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pf_post_id');
            $table->unsignedBigInteger('user_id');
            $table->string('author', 75)->require();
            $table->string('comment',225)->require();

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
        Schema::dropIfExists('pf_comments');
    }
};
