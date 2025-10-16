<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Menti School') }} - Register</title>
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
</head>
<body>
    <div class="container">
        <!-- Left image section -->
        <div class="image"></div>

        <!-- Right content section -->
        <div class="content">
            <div class="signinform">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Header -->
                    <header>
                        <img src="{{ asset('images/menti-icon.png') }}" alt="Menti Logo" class="logo">
                        <h1>Create Account</h1>
                        <p>Join Menti School of Technology today</p>
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
                            <input type="text" id="first_name" name="first_name" class="form-input" placeholder="First Name" value="{{ old('first_name') }}" required autofocus>
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
                        <input type="email" id="email" name="email" class="form-input" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-input" placeholder="Password" required autocomplete="new-password">
                        @error('password')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-input" placeholder="Confirm Password" required autocomplete="new-password">
                        @error('password_confirmation')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Role Selector -->
                    <div class="form-group">
                        <select name="role" id="role" class="form-select" required>
                            <option value="" disabled selected>User Type</option>
                            <option value="student" {{ old('role') == 'student' ? 'selected' : '' }}>Student</option>
                            <option value="teacher" {{ old('role') == 'teacher' ? 'selected' : '' }}>Teacher</option>
                            <option value="parent" {{ old('role') == 'parent' ? 'selected' : '' }}>Parent</option>
                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                        </select>
                        @error('role')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Terms & Conditions -->
                    <div class="form-group terms-group">
                        <label class="terms-label">
                            <input type="checkbox" name="terms" id="terms" required>
                            <span class="terms-text">I agree to the <a href="#" class="terms-link">Terms & Conditions</a></span>
                        </label>
                        @error('terms')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-submit">
                        Create Account
                    </button>

                    <!-- Divider -->
                    <div class="divider">
                        <span>Or register with</span>
                    </div>

                    <!-- Social Login -->
                    <button type="button" class="btn-social">
                        <svg class="social-icon" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="currentColor" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="currentColor" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path fill="currentColor" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                        Continue with Google
                    </button>

                    <!-- Login Link -->
                    <div class="form-links">
                        <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Additional CSS for register page -->
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

        /* Terms & Conditions */
        .terms-group {
            margin-bottom: 1.5rem;
        }

        .terms-label {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            cursor: pointer;
            font-size: 0.9rem;
            color: var(--text-light);
        }

        .terms-label input[type="checkbox"] {
            width: auto;
            transform: scale(1.1);
            margin-top: 0.2rem;
        }

        .terms-text {
            line-height: 1.4;
        }

        .terms-link {
            color: var(--primary-blue);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .terms-link:hover {
            color: var(--primary-purple);
        }

        /* Divider */
        .divider {
            position: relative;
            text-align: center;
            margin: 1.5rem 0;
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e2e8f0;
            z-index: 1;
        }

        .divider span {
            background: white;
            padding: 0 1rem;
            position: relative;
            z-index: 2;
        }

        /* Social Login Button */
        .btn-social {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            padding: 0.875rem 1.5rem;
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--text-dark);
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
        }

        .btn-social:hover {
            border-color: var(--primary-blue);
            background: #f8fafc;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .social-icon {
            width: 1.25rem;
            height: 1.25rem;
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
            .name-fields {
                gap: 0.75rem;
            }

            .terms-label {
                font-size: 0.85rem;
            }

            .btn-social {
                padding: 0.75rem 1.25rem;
                font-size: 0.9rem;
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

        /* Error message styling */
        .error-message {
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: block;
            font-weight: 500;
        }

        /* Success message styling */
        .success-message {
            color: var(--accent-green);
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: block;
        }
    </style>

    <!-- JavaScript for interactive elements -->
    <!-- <script>
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

        // Password strength indicator (optional enhancement)
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('password_confirmation');

        function checkPasswordMatch() {
            if (passwordInput.value && confirmPasswordInput.value) {
                if (passwordInput.value !== confirmPasswordInput.value) {
                    confirmPasswordInput.style.borderColor = '#ef4444';
                } else {
                    confirmPasswordInput.style.borderColor = 'var(--accent-green)';
                }
            }
        }

        passwordInput.addEventListener('input', checkPasswordMatch);
        confirmPasswordInput.addEventListener('input', checkPasswordMatch);

        // Focus effects for form inputs
        const inputs = document.querySelectorAll('.form-input, .form-select');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.borderColor = 'var(--primary-blue)';
                this.style.boxShadow = '0 0 0 3px rgba(37, 99, 235, 0.1)';
                this.style.transform = 'translateY(-2px)';
            });
            
            input.addEventListener('blur', function() {
                this.style.borderColor = '#e2e8f0';
                this.style.boxShadow = 'none';
                this.style.transform = 'translateY(0)';
            });
        });

        // Terms checkbox styling
        const termsCheckbox = document.getElementById('terms');
        termsCheckbox.addEventListener('change', function() {
            if (this.checked) {
                this.parentElement.style.color = 'var(--text-dark)';
            } else {
                this.parentElement.style.color = 'var(--text-light)';
            }
        });
    </script> -->

    <script src="{{ asset('js/signin.js') }}"></script>
</body>
</html>