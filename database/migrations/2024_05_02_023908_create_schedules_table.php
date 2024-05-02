<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id');
            $table->unsignedBigInteger('sclass_id');
            $table->char('match_season', 10);
            $table->smallInteger('round');
            $table->char('grouping', 10)->nullable();
            $table->unsignedBigInteger('home_team_id');
            $table->unsignedBigInteger('guest_team_id');
            $table->boolean('neutrality')->default(false);
            $table->datetime('match_time');
            $table->datetime('match_time2')->nullable();
            $table->smallInteger('match_state')->default(0);
            $table->smallInteger('weather_icon')->nullable();
            $table->char('temperature', 10)->nullable();
            $table->string('tv', 100)->nullable();
            $table->string('umpire', 50)->nullable();
            $table->boolean('visitor')->default(false);
            $table->smallInteger('home_score')->default(0);
            $table->smallInteger('guest_score')->default(0);
            $table->smallInteger('home_half_score')->default(0);
            $table->smallInteger('guest_half_score')->default(0);
            $table->smallInteger('home_red')->default(0);
            $table->smallInteger('guest_red')->default(0);
            $table->smallInteger('home_yellow')->default(0);
            $table->smallInteger('guest_yellow')->default(0);
            $table->datetime('bf_changetime')->nullable();
            $table->tinyInteger('shangpan')->nullable();
            $table->char('grouping2', 1)->nullable();
            $table->string('explain_en')->nullable();
            $table->boolean('bf_show')->default(false);
            $table->integer('sub_sclass_id')->nullable();
            $table->string('explain_list', 100)->nullable();
            $table->string('home_order_en', 15)->nullable();
            $table->string('guest_order_en', 15)->nullable();
            $table->unsignedBigInteger('venues_id')->nullable();
            $table->boolean('is_guess_red')->default(false);
            $table->boolean('is_live')->default(false);
            $table->tinyInteger('home_corner')->nullable();
            $table->tinyInteger('home_corner_half')->nullable();
            $table->tinyInteger('guest_corner')->nullable();
            $table->tinyInteger('guest_corner_half')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
