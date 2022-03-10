<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributedSkills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributed_skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('composite_skill_id');
            $table->unsignedBigInteger('atomic_skill_id');
            $table->tinyInteger('priority');
            $table->timestamps();

            $table->foreign('composite_skill_id')
                ->references('id')
                ->on('skills')
                ->onDelete('cascade');
            $table->foreign('atomic_skill_id')
                ->references('id')
                ->on('skills')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distributed_skills');
    }
}
