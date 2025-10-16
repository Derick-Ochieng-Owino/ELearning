<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('module_id')->constrained('course_modules')->onDelete('cascade');
            $table->string('title');
            $table->text('content_html')->nullable();
            $table->string('video_url')->nullable();
            $table->integer('duration')->nullable(); // in minutes
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('lessons');
    }
};
