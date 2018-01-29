<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ScoreCard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dma',100)->nullable($value = true);
            $table->string('partner',100)->nullable($value = true);
            $table->string('tech_user_id',30)->nullable($value = true);
            $table->string('tech_name',100)->nullable($value = true);
            $table->char('total_score',30)->nullable($value = true);
            $table->char('am',10)->nullable($value = true);
            $table->char('cx',10)->nullable($value = true);
            $table->char('qual',10)->nullable($value = true);
            $table->char('staffing',10)->nullable($value = true);
            $table->char('closed',10)->nullable($value = true);
            $table->char('scheduled',10)->nullable($value = true);
            $table->char('goal',10)->nullable($value = true);
            $table->char('vs_goal',10)->nullable($value = true);
            $table->char('score',10)->nullable($value = true);
            $table->char('cat_score',10)->nullable($value = true);
            $table->char('plan_score',10)->nullable($value = true);
            $table->char('surveys',10)->nullable($value = true);
            $table->char('pc',10)->nullable($value = true);
            $table->char('p_d',10)->nullable($value = true);
            $table->char('total',10)->nullable($value = true);
            $table->char('nps_p',10)->nullable($value = true);
            $table->char('cb',10)->nullable($value = true);
            $table->char('decas',10)->nullable($value = true);
            $table->char('added',10)->nullable($value = true);
            $table->char('elegible',10)->nullable($value = true);
            $table->char('actual',10)->nullable($value = true);
            $table->char('delta',10)->nullable($value = true);
            $table->char('sold',10)->nullable($value = true);
            $table->char('qs',10)->nullable($value = true);
            $table->char('qcs',10)->nullable($value = true);
            $table->char('i90',10)->nullable($value = true);           
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
        Schema::drop('scores');
    }
}
