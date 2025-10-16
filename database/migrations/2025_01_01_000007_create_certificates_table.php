<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up() {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('course_id')->constrained('courses');
            $table->timestamp('issued_at')->nullable();
            $table->string('pdf_url')->nullable();
            $table->string('serial')->nullable()->unique();
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('certificates'); }
};