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
        Schema::create('pf_segurities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_id');

            $table->boolean('address_is_public')->default(false);
            $table->boolean('phone_is_public')->default(false);
            $table->boolean('email_is_public')->default(false);
            $table->boolean('birthday_is_public')->default(false);
            $table->boolean('social_is_public')->default(false);
            $table->boolean('interaction_is_public')->default(false);
            $table->boolean('post_is_public')->default(false);
            $table->boolean('follow_is_public')->default(false);
            $table->boolean('followers_is_public')->default(false);
            $table->boolean('friends_is_public')->default(false);
            $table->boolean('gallery_is_public')->default(false);

            $table->foreign('profile_id')
                ->references('id')
                ->on('profiles')
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
        Schema::dropIfExists('pf_segurities');
    }
};
