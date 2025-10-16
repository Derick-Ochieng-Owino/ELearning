<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $courses = [
            ['title'=>'Intro to Mentis','students'=>24,'progress'=>'64%'],
            ['title'=>'Advanced Laravel','students'=>12,'progress'=>'42%'],
        ];

        $upcoming = [
            ['title'=>'Live Class: Routing & Middleware','date'=>'2025-10-12 10:00'],
            ['title'=>'Office Hours','date'=>'2025-10-14 15:00'],
        ];

        return view('teacher.dashboard', compact('courses','upcoming'));
    }
}
