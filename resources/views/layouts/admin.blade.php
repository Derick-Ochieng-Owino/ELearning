<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mentis Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 text-white min-h-screen">
        <div class="p-4 text-2xl font-bold border-b border-gray-700">
            Mentis Admin
        </div>
        <nav class="p-4 space-y-2">
            <a href="{{ route('admin.dashboard') }}" class="block py-2 px-3 rounded hover:bg-gray-700">🏠 Dashboard</a>
            <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">👥 Users</a>
            <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">📊 Reports</a>
            <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">⚙ Settings</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Topbar -->
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold">Admin Dashboard</h1>
            <div>
                <span class="mr-4">👤 {{ auth()->user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded">Logout</button>
                </form>
            </div>
        </header>

        <!-- Content -->
        <main class="p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>
