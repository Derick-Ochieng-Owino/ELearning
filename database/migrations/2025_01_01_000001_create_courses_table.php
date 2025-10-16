<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2)->default(0);
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('courses');
    }
};
