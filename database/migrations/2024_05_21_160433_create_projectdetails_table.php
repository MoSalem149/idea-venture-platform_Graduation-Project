<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectdetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ideatypes_id')->constrained()->onDelete('cascade');
            $table->foreignId('users_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->text('market_analysis')->nullable();
            $table->string('file_path')->nullable();
            $table->string('pitch_deck')->nullable();
            $table->string('photo')->nullable();
            $table->string('proto_type')->nullable();
            $table->string('business_splan')->nullable();
            $table->text('project_timeline')->nullable();
            $table->text('team_info')->nullable();
            $table->string('investment_proposal')->nullable();
            $table->text('invest_need');
            $table->text('use_of_funds_and_budget_allocation');
            $table->text('alignment_with_esg')->nullable();
            $table->text('feedback')->nullable();
            $table->text('refrence')->nullable();
            $table->text('exit_strategy')->nullable();
            $table->text('contact_info')->nullable();
            $table->text('behavioral_insights')->nullable();
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
        Schema::dropIfExists('projectdetails');
    }
}
