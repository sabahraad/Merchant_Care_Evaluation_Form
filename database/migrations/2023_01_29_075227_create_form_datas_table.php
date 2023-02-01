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
        Schema::create('form_datas', function (Blueprint $table) {
            $table->id();
            $table->string('quality_evaluator');
            $table->string('agent_name');
            $table->string('interaction_date');
            $table->string('evaluation_date');
            $table->string('skill_group');
            $table->string('sampling_type');
            $table->string('case_no')->nullable();
            $table->string('order_no')->nullable();
            $table->string('category');
            $table->string('information_sub_category')->default('N/A');
            $table->string('complaint_sub_category')->default('N/A');
            $table->string('service_request_sub_category')->default('N/A');
            $table->string('greetings');
            $table->string('care_and_enthusiasm');
            $table->string('communication');
            $table->string('soft_skills');
            $table->string('interaction_handling_skills');
            $table->string('probing');
            $table->string('system_usage_and_action');
            $table->string('sop_followed');
            $table->string('correct_info');
            $table->string('fatal_error');
            $table->string('Fatal_reason')->default('N/A');
            $table->string('training_required');
            $table->string('training_agenda')->default('N/A');
            $table->string('behavior_training_topic')->default('N/A');
            $table->string('resolution_training_topic')->default('N/A');
            $table->string('comment')->nullable();
            

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
        Schema::dropIfExists('form_datas');
    }
};
