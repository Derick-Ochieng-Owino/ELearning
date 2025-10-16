<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Dummy data for display - replace with real queries as you implement models
        $cards = [
            ['title'=>'Users','value'=>128,'desc'=>'Total registered users'],
            ['title'=>'Courses','value'=>12,'desc'=>'Published courses'],
            ['title'=>'Enrollments','value'=>320,'desc'=>'Active enrollments'],
        ];

        $recentUsers = [
            ['name'=>'Alice Johnson','email'=>'alice@example.com'],
            ['name'=>'Bob Smith','email'=>'bob@example.com'],
            ['name'=>'Cecilia Gomez','email'=>'cecilia@example.com'],
        ];

        return view('admin.dashboard', compact('cards','recentUsers'));
    }
}
