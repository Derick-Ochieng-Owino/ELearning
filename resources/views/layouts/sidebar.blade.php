<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <title>@yield('title', 'Dashboard')</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('images/Furaha-icon.png') }}" alt="Furaha Icon">
                </span>

                <div class="text header-text">
                    <span class="name">FURAHA</span>
                    <span class="profession">SCHOOL</span>
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
                    <li class="nav-link">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
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

    <section class="home">
        @yield('content')
    </section>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
