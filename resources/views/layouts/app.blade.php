<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Milele Technologies')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --accent: #ffc107;
            --accent2: #1a237e;
            --accent-light: rgba(255, 193, 7, 0.1);
            --ink: #1a237e;
            --ink-soft: #283593;
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        body {
            font-size: 16px;
            line-height: 1.6;
            background-color: #fff;
            margin-bottom: 60px;
        }

        .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .font-cinzel {
            font-family: 'Cinzel', serif;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .flex.items-center span.font-cinzel {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 0 !important;
        }

        /* Navigation */
        .nav-item {
            position: static;
        }

        .nav-menu {
            position: relative;
        }

        .nav-dropdown {
            transition: opacity 0.2s ease-in-out, max-height 0.3s ease;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 100%;
            width: 100%;
            max-height: 0;
            overflow: hidden;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 1rem;
        }

        .nav-item:hover .nav-dropdown,
        .nav-item:focus-within .nav-dropdown,
        .nav-item.active .nav-dropdown {
            opacity: 1;
            pointer-events: auto;
            max-height: 500px;
            width: 80vw;
            display: flex;
        }

        .nav-link {
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--accent);
        }

        .sidebar-link {
            transition: all 0.3s ease;
        }

        .sidebar-link.active {
            background-color: var(--accent-light) !important;
            border-left-color: var(--accent) !important;
        }

        .sidebar-content {
            transition: all 0.3s ease;
        }

        /* Bottom Navigation */
        .bottom-nav {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: white;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            padding: 0.5rem 0;
        }

        .bottom-nav .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .bottom-nav a {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--ink-soft);
            font-size: 0.8rem;
            text-decoration: none;
            padding: 0.5rem;
        }

        .bottom-nav a i {
            font-size: 1.2rem;
            margin-bottom: 0.2rem;
        }

        .bottom-nav a:hover,
        .bottom-nav a.active {
            color: var(--accent2);
        }

        /* Media Queries */
        @media (min-width: 640px) {
            .container {
                max-width: 640px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 768px;
            }

            .bottom-nav {
                display: none;
            }
        }

        @media (min-width: 1024px) {
            .container {
                max-width: 1024px;
            }
        }

        @media (min-width: 1280px) {
            .container {
                max-width: 1280px;
            }
        }

        @media (max-width: 767px) {
            .nav-item {
                width: 100%;
            }

            .nav-link {
                display: block;
                padding: 0.5rem 1rem;
            }

            .nav-dropdown {
                display: none;
                position: static;
                width: 100%;
                max-height: 500px;
                transform: none;
            }

            .nav-item.active .nav-dropdown {
                display: block;
            }

            .nav-menu {
                display: none; /* Hide desktop nav on mobile */
            }

            .top-nav {
                display: none;
            }

            .bottom-nav {
                display: block !important;
            }
        }
    </style>
    @stack('styles')
</head>
<body class="font-sans text-gray-800 bg-gray-50">
    <!-- Header Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/LOGO MILELE.png') }}" alt="Milele Technologies" class="h-16">
                    
                    <span class="font-cinzel font-bold ml-2" style="color: #1a237e;">
                        <span class="block">Milele</span>
                        <span class="block w-full text-center">Technologies</span>
                    </span>
                </a>
            </div>

            <nav class="bg-white py-4 shadow-sm top-nav">
                <div class="container mx-auto flex justify-between items-center">
                    <div class="nav-menu flex space-x-8 relative md:flex">
                        <!-- Home -->
                        <div class="group nav-item">
                            <a href="/" class="font-semibold text-gray-800 nav-link">Home</a>
                        </div>
                        
                        <!-- About us -->
                        <div class="group nav-item">
                            <a href="/about" class="font-semibold text-gray-800 nav-link">About us</a>
                            <div class="nav-dropdown hidden group-hover:block">
                                <div class="max-w-7xl mx-auto p-6 flex">
                                    <div class="w-1/4 pr-4">
                                        <div class="bg-gray-100 rounded-lg">
                                            <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="multi-day-safari">
                                                <a href="/about#overview" class="text-gray-700 hover:text-blue-600 font-medium">Company overview</a>
                                            </div>
                                            <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="multi-day-safari">
                                                <a href="/about#vision" class="text-gray-700 hover:text-blue-600 font-medium">Vision & Mission</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="wildlife-photography">
                                                <a href="/about#mission" class="text-gray-700 hover:text-blue-600">Core Values</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="serengeti-migration">
                                                <a href="/ourteam" class="text-gray-700 hover:text-blue-600">Our Team</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="serengeti-migration">
                                                <a href="/about" class="text-gray-700 hover:text-blue-600">Why Choose Us</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-2/4 px-8">
                                        <h2 class="text-3xl font-medium text-gray-800 mb-4">Milele Technologies Limited</h2>
                                        <p class="text-gray-600 mb-6">
                                            Milele Technologies Limited is a multidisciplinary ICT, engineering, and 
                                            infrastructure solutions company based in Tanzania. We specialize in delivering 
                                            integrated technology, electrical, mechanical, and industrial solutions to corporate, 
                                            hospitality, industrial, and institutional clients
                                        </p>
                                        <a href="/about" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                            Read More<span class="ml-1">→</span>
                                        </a>
                                    </div>
                                    <div class="w-1/4 pl-4">
                                        <img src="{{ asset('images/LOGO MILELE.png') }}" alt="Milele Technologies" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Services -->
                        <div class="group nav-item">
                            <a href="/services/ict-solutions" class="font-semibold text-gray-800 nav-link">Services</a>
                            <div class="nav-dropdown hidden group-hover:block">
                                <div class="max-w-7xl mx-auto p-6 flex">
                                    <div class="w-1/4 pr-4">
                                        <div class="bg-gray-100 rounded-lg">
                                            <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="ict-solutions">
                                                <a href="/services/ict-solutions" class="text-gray-700 hover:text-blue-600 font-medium">ICT Solutions</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="power-systems">
                                                <a href="/services/power-systems" class="text-gray-700 hover:text-blue-600">Power Systems</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="automation">
                                                <a href="/services/automation" class="text-gray-700 hover:text-blue-600">Automation & Control</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="engineering">
                                                <a href="/services/engineering" class="text-gray-700 hover:text-blue-600">Engineering Services</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-2/4 px-8">
                                        <h2 class="text-3xl font-medium text-gray-800 mb-4">Comprehensive Technology Solutions</h2>
                                        <p class="text-gray-600 mb-6">
                                            End-to-end information technology services including network infrastructure, cloud solutions, cybersecurity, and IT support for businesses of all sizes.
                                        </p>
                                        <a href="/services" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                            Explore Services <span class="ml-1">→</span>
                                        </a>
                                    </div>
                                    <div class="w-1/4 pl-4">
                                        <img src="{{ asset('images/tents222.png') }}" alt="ICT Solutions" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Partners -->
                        <div class="group nav-item">
                            <a href="#" class="font-semibold text-gray-800 nav-link">Partners</a>
                            <div class="nav-dropdown hidden group-hover:block">
                                <div class="max-w-7xl mx-auto p-6 flex">
                                    <div class="w-1/4 pr-4">
                                        <div class="bg-gray-100 rounded-lg">
                                            <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="get-to-know-us">
                                                <a href="/partners" class="text-gray-700 hover:text-blue-600 font-medium">Strategic Partnerships</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="our-story">
                                                <a href="/partners" class="text-gray-700 hover:text-blue-600">Valued Client Relationships</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="early-beginnings">
                                                <a href="/partners" class="text-gray-700 hover:text-blue-600">Success Stories</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="our-guides">
                                                <a href="/expertteam" class="text-gray-700 hover:text-blue-600">Expert Team</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-2/4 px-8">
                                        <h2 class="text-3xl font-medium text-gray-800 mb-4">Building Strong Partnerships</h2>
                                        <p class="text-gray-600 mb-6">
                                            We collaborate with leading technology providers and industry experts to deliver cutting-edge solutions that meet international standards.
                                        </p>
                                        <a href="/partners" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                            Our Partners <span class="ml-1">→</span>
                                        </a>
                                    </div>
                                    <div class="w-1/4 pl-4">
                                        <img src="{{ asset('images/logo222.png') }}" alt="Partnerships" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Blog -->
                        <div class="group nav-item">
                            <a href="/blog" class="font-semibold text-gray-800 nav-link">Blog</a>
                            <div class="nav-dropdown hidden group-hover:block">
                                <div class="max-w-7xl mx-auto p-6 flex">
                                    <div class="w-1/4 pr-4">
                                        <div class="bg-gray-100 rounded-lg">
                                            <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="travel-tips">
                                                <a href="/blog" class="text-gray-700 hover:text-blue-600 font-medium">Technology News</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="wildlife-stories">
                                                <a href="/blog" class="text-gray-700 hover:text-blue-600">Expert Articles</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="kilimanjaro-insights">
                                                <a href="/blog" class="text-gray-700 hover:text-blue-600">Case Studies</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="culture-traditions">
                                                <a href="/blog" class="text-gray-700 hover:text-blue-600">Training Resources</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-2/4 px-8">
                                        <h2 class="text-3xl font-medium text-gray-800 mb-4">Latest Technology Insights</h2>
                                        <p class="text-gray-600 mb-6">
                                            Stay updated with the latest trends in ICT, engineering, and industrial automation. Expert insights on digital transformation and smart engineering practices.
                                        </p>
                                        <a href="/blog" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                            Explore Articles <span class="ml-1">→</span>
                                        </a>
                                    </div>
                                    <div class="w-1/4 pl-4">
                                        <img src="{{ asset('images/calvin founder 3.png') }}" alt="Technology Blog" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Careers -->
                        <div class="group nav-item">
                            <a href="/careers" class="font-semibold text-gray-800 nav-link">Careers</a>
                            <div class="nav-dropdown hidden group-hover:block">
                                <div class="max-w-7xl mx-auto p-6 flex">
                                    <div class="w-1/4 pr-4">
                                        <div class="bg-gray-100 rounded-lg">
                                            <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="contact-info">
                                                <a href="/careers#open-positions" class="text-gray-700 hover:text-blue-600 font-medium">Open position</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="office-locations">
                                                <a href="/careers#internship-program" class="text-gray-700 hover:text-blue-600">Intership Program</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="booking-inquiries">
                                                <a href="/careers#apply-online" class="text-gray-700 hover:text-blue-600">Apply Online</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="careers">
                                                <a href="/careers#career-opportunities" class="text-gray-700 hover:text-blue-600">Career Opportunities</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-2/4 px-8">
                                        <h2 class="text-3xl font-medium text-gray-800 mb-4">Build Your Career With Us</h2>
                                        <p class="text-gray-600 mb-6">
                                            Join Milele Technologies Limited and become part of a multidisciplinary team delivering ICT, engineering, automation, and infrastructure solutions.
                                        </p>
                                        <a href="/careers" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                            View Opportunities <span class="ml-1">→</span>
                                        </a>
                                    </div>
                                    <div class="w-1/4 pl-4">
                                        <img src="{{ asset('images/tz.png') }}" alt="Contact Us" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project -->
                        <div class="group nav-item">
                            <a href="/projects" class="font-semibold text-gray-800 nav-link">Project</a>
                            <div class="nav-dropdown hidden group-hover:block">
                                <div class="max-w-7xl mx-auto p-6 flex">
                                    <div class="w-1/4 pr-4">
                                        <div class="bg-gray-100 rounded-lg">
                                            <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="contact-info">
                                                <a href="/projects" class="text-gray-700 hover:text-blue-600 font-medium">Completed Project</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="office-locations">
                                                <a href="/projects#webdesign" class="text-gray-700 hover:text-blue-600">Case Study</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="booking-inquiries">
                                                <a href="/projects#printing-graphics" class="text-gray-700 hover:text-blue-600">Client Success Stories</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="partnerships">
                                                <a href="/projects#networking" class="text-gray-700 hover:text-blue-600">Portifolio</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-2/4 px-8">
                                        <h2 class="text-3xl font-medium text-gray-800 mb-4">Project & Portifolio</h2>
                                        <p class="text-gray-600 mb-6">
                                            At Milele Technologies Limited, every project is executed with precision, innovation, and technical excellence.
                                        </p>
                                        <a href="/projects" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                            Explore The Projects<span class="ml-1">→</span>
                                        </a>
                                    </div>
                                    <div class="w-1/4 pl-4">
                                        <img src="{{ asset('images/tz.png') }}" alt="Contact Us" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact us -->
                        <div class="group nav-item">
                            <a href="/contact" class="font-semibold text-gray-800 nav-link">Contact us</a>
                            <div class="nav-dropdown hidden group-hover:block">
                                <div class="max-w-7xl mx-auto p-6 flex">
                                    <div class="w-1/4 pr-4">
                                        <div class="bg-gray-100 rounded-lg">
                                            <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="contact-contact-info">
                                                <a href="/contact#contact-form" class="text-gray-700 hover:text-blue-600 font-medium">Contact form</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="contact-office-locations">
                                                <a href="/contact#contact-form" class="text-gray-700 hover:text-blue-600">Office Location</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="contact-booking-inquiries">
                                                <a href="/contact#contact-form" class="text-gray-700 hover:text-blue-600">Support Request</a>
                                            </div>
                                            <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="contact-partnerships">
                                                <a href="/contact#contact-form" class="text-gray-700 hover:text-blue-600">Request Consultation</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-2/4 px-8">
                                        <h2 class="text-3xl font-medium text-gray-800 mb-4">Get In Touch With Us</h2>
                                        <p class="text-gray-600 mb-6">
                                            We're here to help! Whether you need technical support, want to discuss a project, or have questions about our services.
                                        </p>
                                        <a href="/contact" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                            Contact Us Now<span class="ml-1">→</span>
                                        </a>
                                    </div>
                                    <div class="w-1/4 pl-4">
                                        <img src="{{ asset('images/tz.png') }}" alt="Contact Us" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="flex items-center gap-3">
                <a href="/innovation-hub" class="btn-outline flex items-center">
                    <i class="fas fa-lightbulb mr-2" style="color: var(--accent2);"></i> 
                    Innovation Hub
                </a>
            </div>
        </div>
        
        <div class="bottom-nav">
            <div class="container">
                <a href="/" class="nav-link">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
                <a href="/about" class="nav-link">
                    <i class="fas fa-building"></i>
                    <span>AboutUs</span>
                </a>
                <a href="/services/ict-solutions" class="nav-link">
                    <i class="fas fa-cogs"></i>
                    <span>Services</span>
                </a>
                <a href="/projects" class="nav-link">
                    <i class="fas fa-briefcase"></i>
                    <span>Projects</span>
                </a>
                <a href="blog" class="nav-link">
                    <i class="fas fa-newspaper"></i>
                    <span>Blog</span>
                </a>
                <a href="parterns" class="nav-link">
                    <i class="fas fa-handshake"></i>
                    <span>Partners</span>
                </a>
                <a href="/contact" class="nav-link">
                    <i class="fas fa-envelope"></i>
                    <span>Contact</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <footer class="w-full bg-white text-gray-900 border-t border-gray-200" style="background-color:#ffffff !important;">
        <div class="container mx-auto px-4 py-14">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div>
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/LOGO MILELE.png') }}" alt="Milele Technologies" class="h-10 w-auto" loading="lazy">
                        <div class="leading-tight">
                            <div class="font-cinzel font-bold text-gray-900">Milele Technologies</div>
                            <div class="text-xs text-gray-600">Innovative • Reliable • Future-Ready</div>
                        </div>
                    </div>
                    <p class="mt-4 text-sm text-gray-700 leading-relaxed font-semibold">
                        We deliver ICT, power systems, automation, and engineering solutions to help organizations modernize operations and scale with confidence.
                    </p>
                    <div class="mt-5 flex items-center gap-4">
                        <a href="https://www.facebook.com/mileletechnologies" class="text-blue-600 hover:text-blue-700" aria-label="Facebook"><i class="fab fa-facebook text-xl"></i></a>
                        <a href="https://www.instagram.com/mileletechnologies" class="text-pink-600 hover:text-pink-700" aria-label="Instagram"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="https://www.linkedin.com/company/mileletechnologies" class="text-blue-700 hover:text-blue-800" aria-label="LinkedIn"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="https://twitter.com/mileletechnologies" class="text-gray-800 hover:text-black" aria-label="X"><i class="fab fa-x-twitter text-xl"></i></a>
                    </div>
                </div>

                <div>
                    <div class="text-gray-900 font-bold tracking-wide">Company</div>
                    <div class="mt-4 grid gap-2 text-sm">
                        <a href="/" class="text-gray-800 font-semibold hover:text-blue-700">Home</a>
                        <a href="/services/ict-solutions" class="text-gray-800 font-semibold hover:text-blue-700">Services</a>
                        <a href="/projects" class="text-gray-800 font-semibold hover:text-blue-700">Projects</a>
                        <a href="{{ route('reviews') }}" class="text-gray-800 font-semibold hover:text-blue-700">Reviews</a>
                        <a href="/contact" class="text-gray-800 font-semibold hover:text-blue-700">Contact</a>
                    </div>
                </div>

                <div>
                    <div class="text-gray-900 font-bold tracking-wide">Solutions</div>
                    <div class="mt-4 grid gap-2 text-sm">
                        <a href="/services/ict-solutions" class="text-gray-800 font-semibold hover:text-blue-700">ICT Solutions</a>
                        <a href="/services/power-systems" class="text-gray-800 font-semibold hover:text-blue-700">Power Systems</a>
                        <a href="/services/automation" class="text-gray-800 font-semibold hover:text-blue-700">Automation & Control</a>
                        <a href="/services/engineering" class="text-gray-800 font-semibold hover:text-blue-700">Engineering Services</a>
                    </div>
                </div>

                <div>
                    <div class="text-gray-900 font-bold tracking-wide">Contact</div>
                    <div class="mt-4 grid gap-3 text-sm">
                        <div class="flex gap-3 text-gray-800 font-semibold">
                            <i class="fas fa-location-dot mt-0.5 text-blue-600"></i>
                            <div>Arusha, Tanzania</div>
                        </div>
                        <div class="flex gap-3 text-gray-800 font-semibold">
                            <i class="fas fa-phone mt-0.5 text-blue-600"></i>
                            <div>+255 716 693 327</div>
                        </div>
                        <div class="flex gap-3 text-gray-800 font-semibold">
                            <i class="fas fa-envelope mt-0.5 text-blue-600"></i>
                            <div>info@mileletechnologies.com</div>
                        </div>
                        <div class="mt-2">
                            <a href="javascript:void(0)" class="inline-flex items-center justify-center w-full rounded-lg bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 font-semibold" onclick="if (typeof openQuoteModal === 'function') { openQuoteModal(); }">Request a Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 border-t border-gray-200 pt-6 flex flex-col md:flex-row gap-3 md:items-center md:justify-between">
                <div class="text-xs text-gray-600 font-semibold">© {{ date('Y') }} Milele Technologies Limited. All rights reserved.</div>
                <div class="flex items-center gap-4 text-xs text-gray-600 font-semibold">
                    <a href="/privacy" class="hover:text-blue-700">Privacy</a>
                    <a href="/terms" class="hover:text-blue-700">Terms</a>
                    <a href="/sitemap" class="hover:text-blue-700">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Dynamic content for navigation dropdowns
        const contentData = {
            // About us dropdown content
            'multi-day-safari': {
                title: 'Our Company Story',
                description: 'Founded with a vision to deliver excellence, Milele Technologies has grown into a leading multidisciplinary technology solutions provider in Tanzania.',
                buttonText: 'Learn More',
                buttonLink: '/about',
                image: '{{ asset("images/logo222.png") }}',
                imageAlt: 'Milele Technologies Company'
            },
            'wildlife-photography': {
                title: 'Core Values & Principles',
                description: 'Innovation, integrity, and excellence drive everything we do. We are committed to delivering sustainable technology solutions that transform businesses.',
                buttonText: 'Our Values',
                buttonLink: '/about#mission',
                image: '{{ asset("images/vintage 3.png") }}',
                imageAlt: 'Core Values and Innovation'
            },
            'serengeti-migration': {
                title: 'Meet Our Expert Team',
                description: 'Our diverse team of engineers, developers, and consultants brings together decades of experience in ICT, engineering, and industrial solutions.',
                buttonText: 'Meet The Team',
                buttonLink: '/ourteam',
                image: '{{ asset("images/calvin founder 3.png") }}',
                imageAlt: 'Expert Professional Team'
            },

            // Services dropdown content
            'ict-solutions': {
                title: 'Comprehensive ICT Solutions',
                description: 'End-to-end information technology services including network infrastructure, cloud solutions, cybersecurity, and IT support for businesses of all sizes.',
                buttonText: 'Explore ICT Services',
                buttonLink: '/services/ict-solutions',
                image: '{{ asset("images/ourexpert.jpg") }}',
                imageAlt: 'ICT Solutions and Services'
            },
            'power-systems': {
                title: 'Power Systems Solutions',
                description: 'Reliable power solutions including solar systems, backup power, and energy management for uninterrupted operations and cost optimization.',
                buttonText: 'Power Solutions',
                buttonLink: '/services/power-systems',
                image: '{{ asset("images/power.jpg") }}',
                imageAlt: 'Power Systems and Energy Solutions'
            },
            'automation': {
                title: 'Automation & Control Systems',
                description: 'Industrial automation solutions including PLC programming, SCADA systems, and smart manufacturing technologies for enhanced efficiency.',
                buttonText: 'Automation Solutions',
                buttonLink: '/services/automation',
                image: '{{ asset("images/auto.jpg") }}',
                imageAlt: 'Automation Control Systems'
            },
            'engineering': {
                title: 'Professional Engineering Services',
                description: 'Comprehensive engineering services across mechanical, electrical, civil, and project management disciplines for infrastructure development.',
                buttonText: 'Engineering Services',
                buttonLink: '/services/engineering',
                image: '{{ asset("images/eng.jpg") }}',
                imageAlt: 'Professional Engineering Solutions'
            },

            // Partners dropdown content
            'get-to-know-us': {
                title: 'Strategic Partnerships',
                description: 'We collaborate with leading technology providers and industry experts to deliver cutting-edge solutions that meet international standards.',
                buttonText: 'Our Partners',
                buttonLink: '/partners',
                image: '{{ asset("images/techsupport.jpg") }}',
                imageAlt: 'Strategic Technology Partners'
            },
            'our-story': {
                title: 'Valued Client Relationships',
                description: 'Serving diverse industries across Tanzania, our clients trust us for reliable, innovative, and cost-effective technology solutions.',
                buttonText: 'Client Portfolio',
                buttonLink: '/partners',
                image: '{{ asset("images/techsupport.jpg") }}',
                imageAlt: 'Valued Client Portfolio'
            },
            'early-beginnings': {
                title: 'Success Stories & Testimonials',
                description: 'Hear from our satisfied clients about how our solutions have transformed their businesses and delivered measurable results.',
                buttonText: 'Read Testimonials',
                buttonLink: '/partners',
                image: '{{ asset("images/techsupport.jpg") }}',
                imageAlt: 'Client Success Stories'
            },
            'our-guides': {
                title: 'Expert Professional Team',
                description: 'Our certified professionals bring expertise in ICT, engineering, project management, and customer service to every project.',
                buttonText: 'Meet Our Team',
                buttonLink: '/expertteam',
                image: '{{ asset("images/ourexpert.jpg") }}',
                imageAlt: 'Professional Expert Team'
            },

            // Blog dropdown content
            'travel-tips': {
                title: 'Latest Technology News',
                description: 'Stay informed about the latest developments in ICT, emerging technologies, and digital transformation trends shaping the industry.',
                buttonText: 'Read Tech News',
                buttonLink: '/blog',
                image: '{{ asset("images/techsupport.jpg") }}',
                imageAlt: 'Latest Technology News'
            },
            'wildlife-stories': {
                title: 'Expert Articles & Insights',
                description: 'In-depth articles written by our experts covering technology best practices, industry insights, and practical implementation guides.',
                buttonText: 'Browse Articles',
                buttonLink: '/blog',
                image: '{{ asset("images/techsupport.jpg") }}',
                imageAlt: 'Expert Technology Articles'
            },
            'kilimanjaro-insights': {
                title: 'Detailed Case Studies',
                description: 'Real-world examples of how our solutions have helped businesses overcome challenges and achieve their technology goals.',
                buttonText: 'View Case Studies',
                buttonLink: '/blog',
                image: '{{ asset("images/techsupport.jpg") }}',
                imageAlt: 'Technology Case Studies'
            },
            'culture-traditions': {
                title: 'Training & Knowledge Base',
                description: 'Comprehensive training resources, tutorials, and documentation to help you make the most of our technology solutions.',
                buttonText: 'Access Resources',
                buttonLink: '/blog',
                image: '{{ asset("images/techsupport.jpg") }}',
                imageAlt: 'Training Resources'
            },

            // Careers dropdown content
            'contact-info': {
                title: 'Current Open Positions',
                description: 'Explore exciting career opportunities at Milele Technologies. We\'re looking for talented professionals passionate about technology and innovation.',
                buttonText: 'View Positions',
                buttonLink: '/careers#open-positions',
                image: '{{ asset("images/techsupport.jpg") }}',
                imageAlt: 'Career Opportunities'
            },
            'office-locations': {
                title: 'Internship Programs',
                description: 'Kickstart your career with our comprehensive internship programs designed for students and recent graduates seeking hands-on experience.',
                buttonText: 'Apply for Internship',
                buttonLink: '/careers#internship-program',
                image: '{{ asset("images/loc.jpg") }}',
                imageAlt: 'Internship Programs'
            },
            'booking-inquiries': {
                title: 'Online Application Portal',
                description: 'Quick and easy online application process. Submit your resume and join our talent pool for future opportunities.',
                buttonText: 'Apply Online',
                buttonLink: '/careers#apply-online',
                image: '{{ asset("images/techsupport.jpg") }}',
                imageAlt: 'Online Application Portal'
            },
            'careers': {
                title: 'Career Development Opportunities',
                description: 'Grow with us! We offer continuous learning, professional development, and clear career progression paths for our team members.',
                buttonText: 'Career Growth',
                buttonLink: '/careers#career-opportunities',
                image: '{{ asset("images/techsupport.jpg") }}',
                imageAlt: 'Career Development'
            },

            // Project dropdown content
            'partnerships': {
                title: 'Project Portfolio',
                description: 'Comprehensive showcase of our technical capabilities and expertise demonstrated through diverse projects across multiple sectors.',
                buttonText: 'View Portfolio',
                buttonLink: '/projects',
                image: '{{ asset("images/techsupport.jpg") }}',
                imageAlt: 'Project Portfolio Showcase'
            },

            'contact-contact-info': {
                title: 'Contact Form',
                description: 'Send us a message directly through our secure contact form. We typically respond within 24 hours and will address your inquiry promptly.',
                buttonText: 'Send Message',
                buttonLink: '/contact#contact-form',
                image: '{{ asset("images/conctform.jpg") }}',
                imageAlt: 'Contact Form'
            },
            'contact-office-locations': {
                title: 'Visit Our Office',
                description: 'Stop by our headquarters in Arusha for a personal consultation. Our team is ready to discuss your technology needs in detail.',
                buttonText: 'Get Directions',
                buttonLink: '/contact#contact-form',
                image: '{{ asset("images/loc.jpg") }}',
                imageAlt: 'Office Location'
            },
            'contact-booking-inquiries': {
                title: 'Technical Support Request',
                description: 'Need immediate assistance? Submit a support request and our technical team will help resolve your issues quickly and efficiently.',
                buttonText: 'Request Support',
                buttonLink: '/contact#contact-form',
                image: '{{ asset("images/techsupport.jpg") }}',
                imageAlt: 'Technical Support'
            },
            'contact-partnerships': {
                title: 'Request Consultation',
                description: 'Schedule a consultation to discuss your project requirements and explore the best solutions for your business needs.',
                buttonText: 'Request Consultation',
                buttonLink: '/contact#contact-form',
                image: '{{ asset("images/techsupport.jpg") }}',
                imageAlt: 'Consultation Request'
            }
        };

        // Initialize dynamic content functionality
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarLinks = document.querySelectorAll('.sidebar-link');

            sidebarLinks.forEach(link => {
                link.addEventListener('mouseenter', function () {
                    const section = this.getAttribute('data-section');
                    const content = contentData[section];

                    if (content) {
                        const dropdown = this.closest('.nav-dropdown');
                        if (dropdown) {
                            const contentArea = dropdown.querySelector('.w-2\\/4');
                            if (contentArea) {
                                const h2 = contentArea.querySelector('h2');
                                const p = contentArea.querySelector('p');
                                const button = contentArea.querySelector('a');

                                contentArea.classList.add('sidebar-content');

                                if (h2) h2.textContent = content.title;
                                if (p) p.textContent = content.description;
                                if (button) {
                                    button.textContent = content.buttonText + ' →';
                                    button.setAttribute('href', content.buttonLink);
                                }

                                const imageArea = dropdown.querySelector('.w-1\/4.pl-4');
                                if (imageArea && content.image) {
                                    const img = imageArea.querySelector('img');
                                    if (img) {
                                        img.setAttribute('src', content.image);
                                        img.setAttribute('alt', content.imageAlt);
                                    }
                                }

                                dropdown.querySelectorAll('.sidebar-link').forEach(l => {
                                    l.classList.remove('active');
                                });
                                this.classList.add('active');
                            }
                        }
                    }
                });
            });

            const dropdowns = document.querySelectorAll('.nav-dropdown');
            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('mouseleave', function () {
                    this.querySelectorAll('.sidebar-link').forEach(l => {
                        l.classList.remove('active');
                    });
                });
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
            });

            const dropdowns = document.querySelectorAll('.nav-dropdown');
            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('mouseleave', function () {
                    this.querySelectorAll('.sidebar-link').forEach(l => {
                        l.classList.remove('active');
                    });
                });
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
