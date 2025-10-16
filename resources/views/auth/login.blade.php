<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - {{ config('app.name', 'Menti School of Technology') }}</title>
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
</head>
<body>
    <div class="container">
        <!-- Left image section -->
        <div class="image"></div>

        <!-- Right login form section -->
        <div class="content">
            <div class="signinform">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Header -->
                    <header>
                        <img src="{{ asset('images/menti-icon.png') }}" alt="Menti Logo" class="logo">
                        <h1>Hi, Welcome Back</h1>
                        <p>Please fill in your login details to continue</p>
                    </header>

                    <!-- Ghost SVG -->
                    <div class="ghost-container">
                        <svg width="200px" height="200px" viewBox="0 0 200 200" aria-labelledby="svg-title svg-desc">
                            <title id="svg-title">Floating Ghost</title>
                            <desc id="svg-desc">A smiling ghost that floats while looking at user interactions.</desc>
                            <style>
                                @keyframes float { from { transform: translate(0, 0px); } to { transform: translate(0, 8px); } }
                                @keyframes float-arm { from { transform: translate(-1px,0px);} to { transform: translate(1px,4px); } }
                                #ghost-body { animation: float 2s linear alternate infinite; }
                                .ghost-arm { animation: float-arm 3s linear alternate infinite; }
                                .pupil, #mouth, .ghost-arm { transition: all 0.25s; }
                            </style>
                            <g id="ghost-body" fill="white" stroke="#999" stroke-width="3" stroke-linejoin="round">
                                <path d="M 54,181 C 44,131 13,11 99,11 185,12 164,110 150,182 146,195 139,185 137,177 134,170 126,169 124,179 120,192 114,190 109,179 105,167 98,166 94,179 92,185 85,193 79,179 74,170 68,168 66,179 62,193 56,191 54,181 Z" />
                                <path id="eye-right" fill="#ffffee" d="M 69,71 C 69,64 73,54 84,55 96,56 100,62 100,70 100,79 89,83 84,83 78,83 69,80 69,71 Z" />
                                <path id="eye-left" fill="#ffffee" d="M 105,73 C 104,66 108,57 120,57 130,57 134,65 134,71 134,80 125,85 119,85 114,85 105,82 105,73 Z" />
                                <circle id="pupil-right" class="pupil" cx="84" cy="69" r="3" fill="rgba(0,0,0,0.25)" />
                                <circle id="pupil-left" class="pupil" cx="120" cy="71" r="3" fill="rgba(0,0,0,0.25)" />
                                <path id="mouth" d="M 75,115 C 79,120 91,126 101,125 110,125 126,118 127,114 125,117 117,125 101,125 85,126 79,117 75,115 Z" fill="#aa4040" stroke="#600" />
                                <path id="ghost-arm-right" class="ghost-arm" d="M 45,89 C 25,92 9,108 11,124 13,141 27,115 48,119" />
                                <path id="ghost-arm-left" class="ghost-arm" d="M 155,88 C 191,90 194,114 192,125 191,137 172,109 155,116" />
                            </g>
                        </svg>
                    </div>

                    <!-- Name Fields - Side by Side on large screens, stacked on mobile -->
                    <div class="name-fields">
                        <div class="form-group name-group">
                            <input type="text" id="first_name" name="first_name" class="form-input" placeholder="First Name" value="{{ old('first_name') }}" required>
                            @error('first_name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group name-group">
                            <input type="text" id="last_name" name="last_name" class="form-input" placeholder="Last Name" value="{{ old('last_name') }}" required>
                            @error('last_name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-input" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="email">
                        @error('email')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-input" placeholder="Password" required autocomplete="current-password">
                        @error('password')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Role Selector -->
                    <div class="form-group">
                        <select name="role" id="user" class="form-select" required>
                            <option value="" disabled selected>User Type</option>
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                            <option value="parent">Parent</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                    <!-- Remember me & Forgot password -->
                    <div class="form-options">
                        <label class="remember-me">
                            <input type="checkbox" id="remember_me" name="remember">
                            <span>Remember me</span>
                        </label>
                        
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-submit">
                        Log In
                    </button>

                    <!-- Sign Up Link -->
                    <div class="form-links">
                        <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Additional CSS for name fields layout -->
    <style>
        .logo {
            height: 80px;
            margin-bottom: 1rem;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
        }

        .ghost-container {
            text-align: center;
            margin: 1.5rem 0;
        }

        /* Name fields layout */
        .name-fields {
            display: grid;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        /* Default: stacked layout for mobile */
        .name-fields {
            grid-template-columns: 1fr;
        }

        /* Large screens: side by side */
        @media (min-width: 768px) {
            .name-fields {
                grid-template-columns: 1fr 1fr;
                gap: 1rem;
            }
        }

        .name-group {
            margin-bottom: 0;
        }

        /* Form options styling */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            color: var(--text-light);
            cursor: pointer;
        }

        .remember-me input[type="checkbox"] {
            width: auto;
            transform: scale(1.1);
        }

        .forgot-password {
            color: var(--primary-blue);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: var(--primary-purple);
        }

        /* Enhanced form input styles */
        .form-input, .form-select {
            width: 100%;
            padding: 1rem 1.25rem;
            font-size: 1rem;
            background: #f8fafc;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-family: inherit;
            color: var(--text-dark);
        }

        .form-input:focus, .form-select:focus {
            outline: none;
            border-color: var(--primary-blue);
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
            transform: translateY(-2px);
        }

        /* Enhanced responsive design */
        @media (max-width: 480px) {
            .form-options {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.75rem;
            }

            .forgot-password {
                align-self: flex-end;
            }

            .name-fields {
                gap: 0.75rem;
            }
        }

        /* Loading state for button */
        .btn-submit.loading {
            position: relative;
            color: transparent;
        }

        .btn-submit.loading::after {
            content: '';
            position: absolute;
            width: 1.25rem;
            height: 1.25rem;
            top: 50%;
            left: 50%;
            margin-top: -0.625rem;
            margin-left: -0.625rem;
            border: 2px solid transparent;
            border-top: 2px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
    </style>

    <!-- JavaScript for interactive elements -->
    <script>
        // Form submission loading state
        document.querySelector('form').addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('.btn-submit');
            submitBtn.classList.add('loading');
            submitBtn.disabled = true;
        });

        // Ghost interaction
        const ghost = document.querySelector('#ghost-body');
        const pupils = document.querySelectorAll('.pupil');
        const mouth = document.querySelector('#mouth');

        document.addEventListener('mousemove', (e) => {
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;
            
            // Move pupils based on mouse position
            pupils.forEach(pupil => {
                pupil.style.transform = `translate(${(x - 0.5) * 4}px, ${(y - 0.5) * 4}px)`;
            });
            
            // Smile when hovering over form
            if (e.target.closest('.signinform')) {
                mouth.setAttribute('d', 'M 75,115 C 79,118 91,122 101,122 110,122 126,118 127,115 125,118 117,122 101,122 85,122 79,118 75,115 Z');
            } else {
                mouth.setAttribute('d', 'M 75,115 C 79,120 91,126 101,125 110,125 126,118 127,114 125,117 117,125 101,125 85,126 79,117 75,115 Z');
            }
        });

        // Focus effects for form inputs
        const inputs = document.querySelectorAll('.form-input, .form-select');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
            });
        });
    </script>
</body>
</html>