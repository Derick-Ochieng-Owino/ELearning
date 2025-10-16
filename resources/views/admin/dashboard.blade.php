@extends('layouts.dashboard')

@section('header','Admin Dashboard')
@section('subheader','Manage courses, users and reports')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    @foreach($cards as $c)
        <div class="card">
            <div class="text-sm text-gray-500">{{ $c['title'] }}</div>
            <div class="text-2xl font-bold">{{ $c['value'] }}</div>
            <div class="text-sm text-gray-400">{{ $c['desc'] }}</div>
        </div>
    @endforeach
</div>

<div class="mt-6 card">
    <h3 class="font-semibold mb-2">Recent Users</h3>
    <ul>
        @foreach($recentUsers as $u)
            <li class="py-2 border-b last:border-b-0">{{ $u['name'] }} — <span class="text-gray-500">{{ $u['email'] }}</span></li>
        @endforeach
    </ul>
</div>
@endsection
