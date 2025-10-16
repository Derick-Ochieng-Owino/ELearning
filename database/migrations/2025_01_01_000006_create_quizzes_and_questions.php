<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
public function up() {
Schema::create('quizzes', function (Blueprint $table) {
$table->id();
$table->foreignId('course_id')->nullable()->constrained('courses')->onDelete('cascade');
$table->string('title');
$table->integer('time_limit')->nullable();
$table->integer('passing_score')->default(50);
$table->timestamps();
});


Schema::create('questions', function (Blueprint $table) {
$table->id();
$table->foreignId('quiz_id')->constrained('quizzes')->onDelete('cascade');
$table->enum('type', ['mcq','checkbox','fill','essay'])->default('mcq');
$table->text('content');
$table->integer('points')->default(1);
$table->json('metadata')->nullable();
$table->timestamps();
});


Schema::create('options', function (Blueprint $table) {
$table->id();
$table->foreignId('question_id')->constrained('questions')->onDelete('cascade');
$table->text('text');
$table->boolean('is_correct')->default(false);
$table->timestamps();
});


Schema::create('quiz_attempts', function (Blueprint $table) {
$table->id();
$table->foreignId('quiz_id')->constrained('quizzes')->onDelete('cascade');
$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
$table->timestamp('started_at')->nullable();
$table->timestamp('finished_at')->nullable();
$table->decimal('score', 8, 2)->nullable();
$table->json('result_json')->nullable();
$table->timestamps();
});
}
public function down(){
Schema::dropIfExists('quiz_attempts');
Schema::dropIfExists('options');
Schema::dropIfExists('questions');
Schema::dropIfExists('quizzes');
}
};