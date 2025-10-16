<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        $cards = [
            ['title'=>'System Uptime','value'=>'99.99%','desc'=>'Last 30 days'],
            ['title'=>'Total Users','value'=>420,'desc'=>'All roles'],
            ['title'=>'Storage','value'=>'12.4 GB','desc'=>'Used / 100 GB'],
        ];

        $actions = [
            ['label'=>'Manage Users','url'=>route('admin.dashboard')],
            ['label'=>'System Settings','url'=>'#'],
            ['label'=>'View Logs','url'=>'#'],
        ];

        return view('superadmin.dashboard', compact('cards','actions'));
    }
}
