<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ScoreCardNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('scores');
        Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('dma',100)->nullable($value = true);
            $table->string('partner',100)->nullable($value = true);
            $table->string('tech_user_id',30)->nullable($value = true);
            $table->string('tech_name',100)->nullable($value = true);
            $table->char('total_score',30)->nullable($value = true);
            //Total Scores//
            $table->char('am',10)->nullable($value = true);
            $table->char('cx',10)->nullable($value = true);
            $table->char('qual',10)->nullable($value = true);
            //SDCP Completion on Production//
            $table->char('SDCP_closed',10)->nullable($value = true);
            $table->char('SDCP_scheduled',10)->nullable($value = true);
            $table->char('SDCP_%',10)->nullable($value= true);
            $table->char('SDCP_goal',10)->nullable($value = true);
            //SDCP Completion on Services//
            $table->char('SDCs_closed',10)->nullable($value = true);
            $table->char('SDCs_scheduled',10)->nullable($value = true);
            $table->char('SDCs_%',10)->nullable($value= true);
            $table->char('SDCs_goal',10)->nullable($value = true);
            //Post Call Surveys
            $table->char('pts',10)->nullable($value=true);
            $table->char('surveys',10)->nullable($value = true);
            $table->char('pc',10)->nullable($value = true);
            //NPS Production
            $table->char('nps_p_d',10)->nullable($value = true);
            $table->char('nps_p_total',10)->nullable($value = true);
            $table->char('nps_p',10)->nullable($value = true);
            //NPS Service
            $table->char('nps_s_d',10)->nullable($value = true);
            $table->char('nps_s_total',10)->nullable($value = true);
            $table->char('nps_s',10)->nullable($value = true);
            //CCK
            $table->char('cb',10)->nullable($value = true);
            $table->char('decas',10)->nullable($value = true);
            $table->char('cck_%',10)->nullable($value = true);
            $table->char('added',10)->nullable($value = true);
            $table->char('elegible',10)->nullable($value = true);
            $table->char('actual',10)->nullable($value = true);
            $table->char('cck_goal',10)->nullable($value = true);
            //Protection Plan
            $table->char('sold',10)->nullable($value = true);
            $table->char('PP_elegible',10)->nullable($value = true);
            $table->char('PP_%',10)->nullable($value = true);
            //AIQ Production
            $table->char('AIQ_P_qs',10)->nullable($value = true);
            $table->char('AIQ_P_closed',10)->nullable($value = true);
            $table->char('AIQ_P_%',10)->nullable($value = true);
            //AIQ SERVICE
            $table->char('AIQ_S_qs',10)->nullable($value = true);
            $table->char('AIQ_S_closed',10)->nullable($value = true);
            $table->char('AIQ_S_%',10)->nullable($value = true);
            //SELF QA
            $table->char('qcs',10)->nullable($value = true);
            $table->char('qa_closed',10)->nullable($value = true);
            $table->char('qa_%',10)->nullable($value = true);
            //SIN90
            $table->char('i90',10)->nullable($value = true);
            $table->char('i90_closed',10)->nullable($value = true);
            $table->char('i90_%',10)->nullable($value = true);  


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
        //
    }
}
