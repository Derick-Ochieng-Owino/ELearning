<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menti School of Technology</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                        },
                        secondary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                        }
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 50%, #0369a1 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #0ea5e9;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <!-- Header/Navigation -->
    <header class="sticky top-0 z-50 bg-white shadow-sm">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-primary-500 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">M</span>
                    </div>
                    <span class="text-xl font-bold text-secondary-700">Menti School</span>
                </div>
                
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="nav-link text-secondary-600 font-medium hover:text-primary-500">Home</a>
                    <a href="#about" class="nav-link text-secondary-600 font-medium hover:text-primary-500">About</a>
                    <a href="#programs" class="nav-link text-secondary-600 font-medium hover:text-primary-500">Programs</a>
                    <a href="#testimonials" class="nav-link text-secondary-600 font-medium hover:text-primary-500">Testimonials</a>
                    <a href="#contact" class="nav-link text-secondary-600 font-medium hover:text-primary-500">Contact</a>
                </nav>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="text-secondary-600 font-medium hover:text-primary-500">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 bg-primary-500 text-white font-medium rounded-lg hover:bg-primary-600 transition">Apply Now</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="gradient-bg text-white py-20 md:py-28">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">Shape Your Future in Technology</h1>
                    <p class="text-lg md:text-xl mb-8 text-blue-100 max-w-lg">Master in-demand tech skills through innovative education and hands-on learning experiences at Menti School of Technology.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('register') }}" class="px-6 py-3 bg-white text-primary-600 font-semibold rounded-lg hover:bg-gray-100 transition text-center">Start Your Journey</a>
                        <a href="#programs" class="px-6 py-3 bg-transparent border border-white rounded-lg hover:bg-white hover:text-primary-600 transition text-center">Explore Programs</a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative">
                        <div class="w-80 h-80 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm">
                            <div class="w-64 h-64 bg-white/20 rounded-full flex items-center justify-center">
                                <img src="{{ asset('images/menti-icon.png') }}" alt="Menti Logo" class="w-40 h-40">
                            </div>
                        </div>
                        <div class="absolute -top-4 -right-4 w-32 h-32 bg-yellow-400 rounded-lg transform rotate-12 opacity-90 shadow-lg"></div>
                        <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-green-400 rounded-full opacity-80 shadow-lg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl md:text-4xl font-bold text-primary-600 mb-2">95%</div>
                    <div class="text-secondary-600">Job Placement Rate</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold text-primary-600 mb-2">2,000+</div>
                    <div class="text-secondary-600">Graduates</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold text-primary-600 mb-2">50+</div>
                    <div class="text-secondary-600">Industry Partners</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold text-primary-600 mb-2">4.9/5</div>
                    <div class="text-secondary-600">Student Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-secondary-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold text-secondary-800 mb-6">About Menti School</h2>
                    <p class="text-secondary-600 mb-6">Menti School of Technology is a premier institution dedicated to providing cutting-edge education in technology and computer science. Our mission is to bridge the gap between academic learning and industry requirements.</p>
                    <p class="text-secondary-600 mb-8">We combine theoretical foundations with practical, hands-on experience to prepare students for the rapidly evolving tech industry. Our curriculum is designed in collaboration with industry experts to ensure relevance and effectiveness.</p>
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-secondary-700">Industry-Relevant Curriculum</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-secondary-700">Expert Instructors</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-secondary-700">Hands-On Projects</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-secondary-700">Career Support</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&q=80" alt="Students collaborating" class="rounded-xl shadow-lg">
                        <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-primary-100 rounded-xl -z-10"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-800 mb-4">Our Programs</h2>
                <p class="text-secondary-600 max-w-2xl mx-auto">Choose from our comprehensive range of technology programs designed to launch your career in the digital economy.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Program Card 1 -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover border border-gray-100">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3">Software Engineering</h3>
                    <p class="text-secondary-600 mb-6">Master full-stack development, software architecture, and agile methodologies through project-based learning.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-primary-600 font-medium">12 Months</span>
                        <a href="#" class="text-primary-600 font-medium flex items-center">
                            Learn More
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Program Card 2 -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover border border-gray-100">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3">Data Science</h3>
                    <p class="text-secondary-600 mb-6">Master data analysis, machine learning, and AI to extract insights and solve complex real-world problems.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-primary-600 font-medium">10 Months</span>
                        <a href="#" class="text-primary-600 font-medium flex items-center">
                            Learn More
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Program Card 3 -->
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover border border-gray-100">
                    <div class="w-16 h-16 bg-red-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3">Cybersecurity</h3>
                    <p class="text-secondary-600 mb-6">Learn to protect digital assets, secure networks, and defend against modern cyber threats in our intensive program.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-primary-600 font-medium">14 Months</span>
                        <a href="#" class="text-primary-600 font-medium flex items-center">
                            Learn More
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-primary-600 text-primary-600 font-medium rounded-lg hover:bg-primary-50 transition">
                    View All Programs
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-primary-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-800 mb-4">Student Success Stories</h2>
                <p class="text-secondary-600 max-w-2xl mx-auto">Hear from our graduates about their transformative experiences at Menti School of Technology.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-primary-600 font-semibold">JS</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-secondary-800">Jessica Smith</h4>
                            <p class="text-secondary-500 text-sm">Software Engineer at TechCorp</p>
                        </div>
                    </div>
                    <p class="text-secondary-600">"The Software Engineering program completely transformed my career. The hands-on projects gave me the confidence and skills needed to excel in my current role."</p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-primary-600 font-semibold">AR</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-secondary-800">Alex Rodriguez</h4>
                            <p class="text-secondary-500 text-sm">Data Scientist at DataInsights</p>
                        </div>
                    </div>
                    <p class="text-secondary-600">"The Data Science curriculum was perfectly balanced between theory and practice. I landed my dream job just two months after graduation!"</p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-primary-600 font-semibold">MP</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-secondary-800">Michael Park</h4>
                            <p class="text-secondary-500 text-sm">Security Analyst at SecureNet</p>
                        </div>
                    </div>
                    <p class="text-secondary-600">"The Cybersecurity program provided real-world scenarios that prepared me for the challenges I face daily. The instructors were industry experts who genuinely cared about our success."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 gradient-bg text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Launch Your Tech Career?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto text-blue-100">Join thousands of students who have transformed their careers with Menti School of Technology.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('register') }}" class="px-8 py-3 bg-white text-primary-600 font-semibold rounded-lg hover:bg-gray-100 transition">Apply Now</a>
                <a href="#contact" class="px-8 py-3 bg-transparent border border-white rounded-lg hover:bg-white hover:text-primary-600 transition">Request Info</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-secondary-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-primary-500 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold">M</span>
                        </div>
                        <span class="text-xl font-bold">Menti School</span>
                    </div>
                    <p class="text-gray-400 mb-4">Shaping the future of technology through innovative education.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Programs</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Software Engineering</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Data Science</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Cybersecurity</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">UX/UI Design</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Cloud Computing</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Events</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Support</a></li>
                    </ul>
                </div>
                
                <div id="contact">
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>123 Tech Avenue, Innovation City</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>(123) 456-7890</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>info@mentischool.edu</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Menti School of Technology. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>