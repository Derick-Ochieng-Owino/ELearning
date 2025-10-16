@extends('layouts.dashboard')

@section('header','Edit User')
@section('subheader','Update user details')

@section('content')
<div class="card">
    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="block text-sm">Name</label>
            <input name="name" value="{{ old('name',$user->name) }}" class="border p-2 w-full" />
        </div>
        <div class="mb-3">
            <label class="block text-sm">Email</label>
            <input name="email" value="{{ old('email',$user->email) }}" class="border p-2 w-full" />
        </div>
        <div class="mb-3">
            <label class="block text-sm">Role</label>
            <select name="role" class="border p-2 w-full">
                @foreach(['student','teacher','admin','super_admin'] as $r)
                    <option value="{{ $r }}" @if(old('role',$user->role)==$r) selected @endif>{{ $r }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="block text-sm">Password (leave blank to keep)</label>
            <input name="password" type="password" class="border p-2 w-full" />
        </div>
        <div class="mb-3">
            <label class="block text-sm">Confirm Password</label>
            <input name="password_confirmation" type="password" class="border p-2 w-full" />
        </div>
        <div><button class="bg-blue-600 text-white px-4 py-2 rounded">Save</button></div>
    </form>
</div>
@endsection
