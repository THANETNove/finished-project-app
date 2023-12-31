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
        Schema::create('performances', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('image')->nullable();
            $table->string('std_class')->nullable();
            $table->string('std_major')->nullable();
            $table->string('std_typesubject')->nullable();
            $table->string('term')->nullable();
            $table->string('std_year')->nullable();
            $table->string('project_name')->nullable();
            $table->string('keyword_name')->nullable();
            $table->text('project_into')->nullable();
            $table->string('unit1')->nullable();
            $table->string('unit2')->nullable();
            $table->string('unit3')->nullable();
            $table->string('unit4')->nullable();
            $table->string('unit5')->nullable();
            $table->string('unit6')->nullable();
            $table->string('project_all')->nullable();
            $table->string('person_name_1')->nullable();
            $table->string('person_name_2')->nullable();
            $table->string('person_name_3')->nullable();
            $table->string('person_name_4')->nullable();
            $table->string('person_name_5')->nullable();
            $table->string('person_name_6')->nullable();
            $table->string('person_name_7')->nullable();
            $table->string('person_name_8')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performances');
    }
};
