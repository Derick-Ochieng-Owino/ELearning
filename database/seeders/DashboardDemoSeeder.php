<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Course;
use App\Models\CourseModule;
use App\Models\Lesson;
use App\Models\Assignment;

class DashboardDemoSeeder extends Seeder
{
    public function run()
    {
        // Users
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('password'),
                'role' => 'super_admin',
            ]
        );

        User::firstOrCreate(
            ['email' => 'teacher@example.com'],
            [
                'name' => 'Teacher User',
                'password' => bcrypt('password'),
                'role' => 'teacher',
            ]
        );

        User::firstOrCreate(
            ['email' => 'student@example.com'],
            [
                'name' => 'Student User',
                'password' => bcrypt('password'),
                'role' => 'student',
            ]
        );

        // Courses
        $htmlCourse = Course::firstOrCreate(
            ['title' => 'HTML & CSS Basics'], // attributes to match
            [
                'description' => 'Learn the foundations of web development.',
                'slug' => Str::slug('HTML & CSS Basics'),
                'author_id' => User::where('email', 'admin@example.com')->first()->id
            ]
        );

        $laravelCourse = Course::firstOrCreate(
            ['title' => 'Laravel Fundamentals'],
            [
                'description' => 'Learn Laravel, the PHP framework.',
                'slug' => Str::slug('Laravel Fundamentals'),
                'author_id' => User::where('email', 'admin@example.com')->first()->id
            ]
        );

        // Course Modules
        $htmlModule1 = CourseModule::firstOrCreate(
            ['title' => 'HTML Basics', 'course_id' => $htmlCourse->id],
            ['sort_order' => 1]
        );

        $htmlModule2 = CourseModule::firstOrCreate(
            ['title' => 'CSS Fundamentals', 'course_id' => $htmlCourse->id],
            ['sort_order' => 2]
        );

        $laravelModule1 = CourseModule::firstOrCreate(
            ['title' => 'Laravel Models & Migrations', 'course_id' => $laravelCourse->id],
            ['sort_order' => 1]
        );

        // Lessons
        $lesson1 = Lesson::firstOrCreate(
            ['title' => 'Introduction to HTML', 'module_id' => $htmlModule1->id]
        );

        $lesson2 = Lesson::firstOrCreate(
            ['title' => 'Introduction to CSS', 'module_id' => $htmlModule2->id]
        );

        $lesson3 = Lesson::firstOrCreate(
            ['title' => 'Laravel Models', 'module_id' => $laravelModule1->id]
        );

        // Assignments
        Assignment::firstOrCreate(
            ['title' => 'HTML Practice', 'lesson_id' => $lesson1->id],
            [
                'description' => 'Create a basic HTML page.',
                'due_date' => now()->addWeek(),
                'points' => 10,
                'course_id' => $htmlCourse->id
            ]
        );

        Assignment::firstOrCreate(
            ['title' => 'CSS Practice', 'lesson_id' => $lesson2->id],
            [
                'description' => 'Style your HTML page using CSS.',
                'due_date' => now()->addWeek(),
                'points' => 10,
                'course_id' => $htmlCourse->id
            ]
        );

        Assignment::firstOrCreate(
            ['title' => 'Laravel Models Exercise', 'lesson_id' => $lesson3->id],
            [
                'description' => 'Create models and migrations for a sample app.',
                'due_date' => now()->addWeek(),
                'points' => 15,
                'course_id' => $laravelCourse->id
            ]
        );
    }
}
