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
        Schema::create('pf_socials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pf_details_id');
            $table->string('facebook',255)->nullable();
            $table->string('twitter',255)->nullable();
            $table->string('instagram',255)->nullable();
            $table->string('github',255)->nullable();

            $table->foreign('pf_details_id')
                ->references('id')
                ->on('pf_details')
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
        Schema::dropIfExists('pf_socials');
    }
};
