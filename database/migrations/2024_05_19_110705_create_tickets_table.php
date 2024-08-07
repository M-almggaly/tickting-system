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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->string('title');
            $table->text('summary');
            $table->text('build_platform');
            $table->text('steps_reproduce');
            $table->text('expected_result');
            $table->text('actual_result');
            $table->text('support_documentation')->nullable();
            $table->unsignedBigInteger('department');
            $table->string('image');
            $table->string('new_or_repeated')->default('1');
            $table->string('severity')->default('لم يحدد');
            $table->string('status')->default('قيد الانتظار');
            $table->timestamps();
            $table->foreign('department')->references('id')->on('departments');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
