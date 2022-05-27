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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('orderId')->nullable();
            $table->string('oldFile')->nullable();
            $table->string('topic');
            $table->string('mode');
            $table->string('essay_number');
            $table->string('instructions');
            $table->string('amount')->nullable();
            $table->string('referenceId')->nullable();
            $table->boolean('assigned')->default(0);
            $table->boolean('completed')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
