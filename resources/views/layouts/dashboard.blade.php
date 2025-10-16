<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Mentis Dashboard')</title>
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* CSS from your sidebar.css */
        :root{
            --body-color: #E4E9F7;
            --sidebar-color: #FFF;
            --primary-color: #5efffaff;
            --primary-color-light: #F6F5FF;
            --toggle-color: #DDD;
            --text-color: #707070;

            --tran-02: all 0.2s ease;
            --tran-03: all 0.3s ease;
            --tran-04: all 0.4s ease;
            --tran-05: all 0.5s ease;
        }

        body{
            background: var(--body-color);
            transition: var(--tran-05);
            font-family: 'Poppins', sans-serif;
        }

        body.dark{
            --body-color: #18191A;
            --sidebar-color: #242526;
            --primary-color: #62a9faff;
            --primary-color-light: #3A3B3C;
            --toggle-color: #FFF;
            --text-color: #CCC;
        }

        .sidebar{
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            padding: 10px 14px;
            background: var(--sidebar-color);
            transition: var(--tran-05);
            z-index: 100;
            border-right: 1px solid #e5e7eb;
        }

        .sidebar.close{
            width: 88px;
        }

        .sidebar .text{
            font-size: 16px;
            font-weight: 500;
            color: var(--text-color);
            transition: var(--tran-05);
            white-space: nowrap;
        }

        .sidebar.close .text{
            opacity: 0;
        }

        .sidebar .image{
            min-width: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sidebar li{
            height: 50px;
            margin-top: 10px;
            list-style: none;
            display: flex;
            align-items: center;
        }

        .sidebar li .icon{
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 60px;
            font-size: 20px;
        }

        .sidebar li .icon,
        .sidebar li .text{
            color: var(--text-color); 
            transition: var(--tran-02);
        }

        .sidebar header{
            position: relative;
        }

        .sidebar .image-text img{
            width: 40px;
            border-radius: 6px;
        }

        .sidebar header .image-text{
            display: flex;
            align-items: center;
        }

        header .image-text .header-text{
            display: flex;
            flex-direction: column;
        }

        .header-text .name{
            font-weight: 600;
        }

        .header-text .profession{
            margin-top: -2px;
        }

        .sidebar header .toggle{
            position: absolute;
            top: 50%;
            right: -15%;
            transform: translateY(-50%) rotate(180deg);
            height: 25px;
            width: 25px;
            background: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: var(--sidebar-color);
            font-size: 22px;
            transition: var(--tran-04);
            cursor: pointer;
        }

        .sidebar.close header .toggle{
            transform: translateY(-50%);
        }

        body.dark .sidebar header .toggle{
            color: var(--text-color);
        }

        .sidebar .menu{
            margin-top: 35px;
        }

        .sidebar .search-box{
            background: var(--primary-color-light);
            border-radius: 6px;
            transition: var(--tran-05);
        }

        .search-box input{
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            background: var(--primary-color-light);
            transition: var(--tran-05);
            padding: 0 10px;
        }

        .sidebar li a{
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            text-decoration: none;
            border-radius: 6px;
            transition: var(--tran-04);
        }

        .sidebar li a:hover{
            background: var(--primary-color);
        }

        .sidebar li a:hover .icon,
        .sidebar li a:hover .text{
            color: var(--sidebar-color)
        }

        body.dark .sidebar li a:hover .icon,
        body.dark .sidebar li a:hover .text{
            color: var(--text-color)
        }

        .toggle-switch {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            width: 60px;
            cursor: pointer;
            border-radius: 6px;
            background: var(--primary-color-light);
            z-index: 1200;
        }

        .sidebar .menu-bar{
            height: calc(100% - 50px);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .menu-bar .mode {
            position: relative;
            height: 60px;
            border-radius: 6px;
            background: var(--primary-color-light);
            z-index: 1100;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
        }

        .menu-bar .mode .moon-sun{
            height: 60px;
            width: 60px;
            display: flex;
            align-items: center;
        }

        .menu-bar .mode i{
            position: absolute;
            transition: var(--tran-03);
        }

        .menu-bar .mode i.sun{
            opacity: 0;
        }

        body.dark .menu-bar .mode i.sun{
            opacity: 1;
        }

        body.dark .menu-bar .mode i.moon{
            opacity: 0;
        }

        .menu-bar .mode .toggle-switch{
            position: absolute;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            min-width: 60px;
            cursor: pointer;
            border-radius: 6px;
            background: var(--primary-color-light);
            transition: var(--tran-05);
        }

        .mode .toggle-switch .switch{
            position: relative;
            height: 22px;
            width: 44px;
            border-radius: 25px;
            background: var(--toggle-color);
        }

        .switch {
            position: relative;
            height: 24px;
            width: 50px;
            border-radius: 25px;
            background: var(--toggle-color);
            display: flex;
            align-items: center;
            padding: 3px;
        }

        .switch::before {
            content: '';
            position: absolute;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            left: 5px;
            background: var(--sidebar-color);
            transition: 0.3s;
        }

        body.dark .switch::before{
            left: 24px;
        }

        .main-content {
            position: relative;
            min-height: 100vh;
            left: 250px;
            width: calc(100% - 250px); 
            background-color: var(--body-color);
            transition: var(--tran-05);
        }

        .sidebar.close ~ .main-content{
            left: 88px;
            width: calc(100% - 88px);
        }

        /* Dashboard specific styles */
        .card { 
            @apply bg-white shadow rounded p-4; 
            background: var(--sidebar-color);
            border: 1px solid var(--toggle-color);
        }

        .card-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
            width: 100%;
            padding: 16px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .mainpage {
            flex: 1;
            padding: 20px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }

        .left-column {
            display: grid;
            grid-template-rows: 1fr 1fr;
            gap: 20px;
        }

        .right-column {
            display: grid;
            grid-template-rows: repeat(3, 1fr);
            gap: 20px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 250px;
            }
            .main-content {
                width: calc(100% - 250px);
            }
            .mainpage {
                grid-template-columns: 1fr;
            }
            .left-column,
            .right-column {
                grid-template-rows: unset;
                display: flex;
                flex-direction: column;
            }
        }

        body.dark .card{
            background-color: var(--sidebar-color);
            color: var(--text-color);
        }

        /* Header styles */
        .dashboard-header {
            background: var(--sidebar-color);
            padding: 1rem;
            border-bottom: 1px solid var(--toggle-color);
            display: flex;
            justify-content: between;
            align-items: center;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-color);
        }

        .user-role {
            background: var(--primary-color);
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 0.375rem;
            font-size: 0.75rem;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('images/menti-icon.png') }}" alt="Furaha Icon">
                </span>
                <div class="text header-text">
                    <span class="name">MENTIS</span>
                    <span class="profession">ELearning</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <!-- Dynamic navigation based on user role -->
                    @auth
                        @if(auth()->user()->role === 'super_admin')
                            <li class="nav-link">
                                <a href="{{ route('super.dashboard') }}">
                                    <i class='bx bx-crown icon'></i>
                                    <span class="text nav-text">Super Admin</span>
                                </a>
                            </li>
                        @endif

                        @if(in_array(auth()->user()->role, ['admin','super_admin']))
                            <li class="nav-link">
                                <a href="{{ route('admin.dashboard') }}">
                                    <i class='bx bx-home-alt icon'></i>
                                    <span class="text nav-text">Admin Dashboard</span>
                                </a>
                            </li>
                        @endif

                        @if(auth()->user()->role === 'teacher')
                            <li class="nav-link">
                                <a href="{{ route('teacher.dashboard') }}">
                                    <i class='bx bx-home-alt icon'></i>
                                    <span class="text nav-text">Teacher Dashboard</span>
                                </a>
                            </li>
                        @endif

                        @if(auth()->user()->role === 'student')
                            <li class="nav-link">
                                <a href="{{ route('student.dashboard') }}">
                                    <i class='bx bx-home-alt icon'></i>
                                    <span class="text nav-text">Student Dashboard</span>
                                </a>
                            </li>
                        @endif

                        <!-- Common navigation items -->
                        <li class="nav-link">
                            <a href="{{ route('home') }}">
                                <i class='bx bx-book icon'></i>
                                <span class="text nav-text">Course Catalog</span>
                            </a>
                        </li>

                        <!-- Additional navigation items -->
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-bar-chart-alt-2 icon'></i>
                                <span class="text nav-text">Financials</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-book icon'></i>
                                <span class="text nav-text">Academics</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="{{ route('admin.users.index') }}">
                                <i class='bx bx-user icon'></i>
                                <span class="text nav-text">Users</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-bell icon'></i>
                                <span class="text nav-text">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-cog icon'></i>
                                <span class="text nav-text">Settings</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-lock icon'></i>
                                <span class="text nav-text">Security</span>
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>

            <div class="bottom-content">
                <li class="nav-link">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" style="background: none; border: none; display: flex; align-items: center; width: 100%; cursor: pointer;">
                            <i class='bx bx-log-out icon'></i>
                            <span class="text nav-text">Log Out</span>
                        </button>
                    </form>
                </li>

                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <section class="main-content">
        <!-- Header -->
        <header class="dashboard-header">
            <div>
                <h1 class="text-xl font-semibold text-gray-800 dark:text-gray-200">@yield('header','Dashboard')</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400">@yield('subheader','Overview and quick actions')</p>
            </div>
            <div class="user-info">
                @auth 
                    <span class="text-gray-700 dark:text-gray-300">{{ auth()->user()->name }}</span>
                    <span class="user-role">{{ ucfirst(auth()->user()->role) }}</span>
                @endauth
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="p-6">
            @yield('content')
        </main>
    </section>

    <script>
        // Your JavaScript from script.js
        const body = document.querySelector("body"),
            sidebar = document.querySelector(".sidebar"),
            toggle = document.querySelector(".toggle"),
            searchBtn = document.querySelector(".search-box"),
            modeSwitch = document.querySelector(".toggle-switch"),
            modeText = document.querySelector(".mode-text");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
            console.log('Toggle clicked');
        });

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        });

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if(body.classList.contains("dark")){
                modeText.innerText = "Light Mode"
            }else{
                modeText.innerText = "Dark Mode"
            }
        });
    </script>
</body>
</html>