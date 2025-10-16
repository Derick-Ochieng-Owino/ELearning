<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->foreignId('lesson_id')->nullable()->constrained('lessons')->onDelete('set null');
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('instructions')->nullable();
            $table->timestamp('due_date')->nullable(); // rename to due_date to match seeder
            $table->integer('points')->default(0);
            $table->timestamps();
        });

        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assignment_id')->constrained('assignments')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('file_url')->nullable();
            $table->text('content')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->integer('grade')->nullable();
            $table->foreignId('graded_by')->nullable()->constrained('users')->onDelete('set null');
            $table->text('feedback')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('submissions');
        Schema::dropIfExists('assignments');
    }
};
