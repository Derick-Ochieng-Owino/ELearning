@extends('layouts.dashboard')

@section('header','Teacher Dashboard')
@section('subheader','Your courses and upcoming classes')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="card">
        <h3 class="font-semibold mb-2">Your Courses</h3>
        <ul>
            @foreach($courses as $c)
                <li class="py-2 border-b last:border-b-0">
                    <div class="flex justify-between">
                        <div>
                            <div class="font-medium">{{ $c['title'] }}</div>
                            <div class="text-sm text-gray-500">{{ $c['students'] }} students</div>
                        </div>
                        <div class="text-right"><div class="text-lg font-bold">{{ $c['progress'] }}</div></div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="card">
        <h3 class="font-semibold mb-2">Upcoming</h3>
        <ul>
            @foreach($upcoming as $u)
                <li class="py-2 border-b last:border-b-0">
                    <div class="font-medium">{{ $u['title'] }}</div>
                    <div class="text-sm text-gray-500">{{ $u['date'] }}</div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
