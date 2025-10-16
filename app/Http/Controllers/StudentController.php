<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $enrolled = [
            ['title'=>'Intro to Mentis','progress'=>72],
            ['title'=>'Getting started with PHP','progress'=>30],
        ];

        $recommend = [
            ['title'=>'Git Basics','desc'=>'Version control fundamentals'],
            ['title'=>'CSS for Developers','desc'=>'Design clean UI'],
        ];

        return view('student.dashboard', compact('enrolled','recommend'));
    }
}
