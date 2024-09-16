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
        Schema::table('job_list', function (Blueprint $table) {
            $table->string('title');
            $table->integer('salary')->default(0);
            $table->string('currency')->default('BDT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_list', function (Blueprint $table) {
            $table->dropColumn(['title', 'salary', 'currency']);
        });
    }
};
