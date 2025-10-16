@extends('layouts.dashboard')

@section('header','Manage Users')
@section('subheader','Create, edit or delete system users')

@section('content')
@if(session('success')) <div class="p-3 bg-green-100 text-green-800 rounded mb-4">{{ session('success') }}</div> @endif
@if(session('error')) <div class="p-3 bg-red-100 text-red-800 rounded mb-4">{{ session('error') }}</div> @endif

<div class="card">
    <table class="w-full">
        <thead class="text-left text-sm text-gray-500">
            <tr><th class="py-2">Name</th><th>Email</th><th>Role</th><th>Since</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @foreach($users as $u)
            <tr class="border-t">
                <td class="py-2">{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->role }}</td>
                <td>{{ $u->created_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('admin.users.edit', $u) }}" class="text-blue-600 mr-2">Edit</a>
                    <form action="{{ route('admin.users.destroy', $u) }}" method="POST" class="inline" onsubmit="return confirm('Delete user?');">
                        @csrf @method('DELETE')
                        <button class="text-red-600">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
@endsection
