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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_id');
            $table->smallInteger('kind')->nullable();
            $table->unsignedBigInteger('sclass_id');
            $table->string('name_e', 50);
            $table->char('found_date', 20)->nullable();
            $table->integer('capacity')->nullable();
            $table->char('flag', 50)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('url', 80)->nullable();
            $table->string('guest_polo_shirt', 50)->nullable();
            $table->string('home_polo_shirt', 50)->nullable();
            $table->datetime('modify_time')->nullable();
            $table->text('introduce_en')->nullable();
            $table->string('area_en', 30)->nullable();
            $table->string('gymnasium_en', 50)->nullable();
            $table->unsignedBigInteger('venues_id')->nullable();
            $table->tinyInteger('conference')->default(0);
            $table->boolean('is_national')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
