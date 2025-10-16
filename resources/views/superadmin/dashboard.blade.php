@extends('layouts.app') <!-- or your base layout -->

@section('content')
<h1>Super Admin Dashboard</h1>

<div class="cards">
    @foreach($cards as $card)
        <div class="card">
            <h2>{{ $card['title'] }}</h2>
            <p>{{ $card['value'] }}</p>
            <small>{{ $card['desc'] }}</small>
        </div>
    @endforeach
</div>

<div class="actions">
    @foreach($actions as $action)
        <a href="{{ $action['url'] }}">{{ $action['label'] }}</a>
    @endforeach
</div>
@endsection
