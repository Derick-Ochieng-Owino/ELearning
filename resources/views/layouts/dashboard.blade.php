<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title','Mentis Dashboard')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* small helpers */
    .card { @apply bg-white shadow rounded p-4; }
  </style>
</head>
<body class="bg-gray-100 min-h-screen">
  <div class="flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r min-h-screen">
      <div class="p-4 font-bold text-xl">Mentis</div>
      <nav class="p-4 space-y-2">
        @auth
            @if(auth()->user()->role === 'super_admin')
                <a href="{{ route('super.dashboard') }}" class="block py-2 px-3 rounded hover:bg-gray-100">Super Admin</a>
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-3 rounded hover:bg-gray-100">Admin</a>
            @endif

            @if(in_array(auth()->user()->role, ['admin','super_admin']))
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-3 rounded hover:bg-gray-100">Admin Dashboard</a>
            @endif

            @if(auth()->user()->role === 'teacher')
                <a href="{{ route('teacher.dashboard') }}" class="block py-2 px-3 rounded hover:bg-gray-100">Teacher Dashboard</a>
            @endif

            @if(auth()->user()->role === 'student')
                <a href="{{ route('student.dashboard') }}" class="block py-2 px-3 rounded hover:bg-gray-100">Student Dashboard</a>
            @endif

            <a href="{{ route('home') }}" class="block py-2 px-3 rounded hover:bg-gray-100">Course Catalog</a>
            <form method="POST" action="{{ route('logout') }}" class="pt-4">
                @csrf
                <button class="w-full text-left py-2 px-3 rounded hover:bg-gray-100">Logout</button>
            </form>
        @endauth
      </nav>
    </aside>

    <!-- Page content -->
    <div class="flex-1">
      <header class="bg-white p-4 border-b flex justify-between items-center">
        <div>
            <h1 class="text-xl font-semibold">@yield('header','Dashboard')</h1>
            <p class="text-sm text-gray-500">@yield('subheader','Overview and quick actions')</p>
        </div>
        <div class="text-sm text-gray-700">@auth {{ auth()->user()->name }} • {{ auth()->user()->role }} @endauth</div>
      </header>

      <main class="p-6">
        @yield('content')
      </main>
    </div>
  </div>
</body>
</html>
