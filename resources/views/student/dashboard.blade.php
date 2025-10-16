@extends('layouts.dashboard')
@extends('layouts.sidebar')

@section('header','Student Dashboard')
@section('subheader','Courses you are enrolled in and recommendations')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="card">
        <h3 class="font-semibold mb-2">Enrolled Courses</h3>
        <ul>
            @foreach($enrolled as $e)
                <li class="py-3 border-b last:border-b-0">
                    <div class="font-medium">{{ $e['title'] }}</div>
                    <div class="w-full bg-gray-200 rounded h-3 mt-2 overflow-hidden">
                        <div class="bg-green-500 h-3" style="width: {{ $e['progress'] }}%"></div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="card">
        <h3 class="font-semibold mb-2">Recommended</h3>
        <ul>
            @foreach($recommend as $r)
                <li class="py-2 border-b last:border-b-0">
                    <div class="font-medium">{{ $r['title'] }}</div>
                    <div class="text-sm text-gray-500">{{ $r['desc'] }}</div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
