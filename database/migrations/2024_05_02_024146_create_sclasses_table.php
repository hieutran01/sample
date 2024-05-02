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
        Schema::create('sclasses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sclass_id');
            $table->char('color', 7)->nullable();
            $table->string('name_e', 50);
            $table->string('name_es', 30);
            $table->char('name_s', 5);
            $table->smallInteger('kind');
            $table->smallInteger('mode');
            $table->smallInteger('count_round');
            $table->smallInteger('curr_round');
            $table->char('curr_match_season', 10);
            $table->string('sclass_pic', 50)->nullable();
            $table->tinyInteger('if_stop');
            $table->tinyInteger('sclass_type')->nullable();
            $table->smallInteger('count_group');
            $table->tinyInteger('bf_simply_disp');
            $table->smallInteger('sclass_sequence');
            $table->smallInteger('info_id');
            $table->tinyInteger('bf_if_disp');
            $table->datetime('modify_time')->nullable();
            $table->string('begin_season', 9)->nullable();
            $table->integer('sub_sclass_id')->nullable();
            $table->boolean('if_have_sub');
            $table->boolean('if_sort');
            $table->boolean('if_have_paper');
            $table->boolean('if_show_score');
            $table->char('rank_match_season', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sclasses');
    }
};
