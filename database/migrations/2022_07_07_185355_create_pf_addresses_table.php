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
        Schema::create('pf_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pf_details_id');
            $table->string('address',65)->nullable();
            $table->string('city',65)->nullable();
            $table->string('state',50)->nullable();
            $table->char('zip',10)->nullable();
            $table->string('country',65)->nullable();

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
        Schema::dropIfExists('pf_addresses');
    }
};
