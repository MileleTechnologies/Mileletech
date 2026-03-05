<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milele Technologiesi - ICT Solutions • Power Systems • Automation • Industrial Engineering</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Cinzel&display=swap');

:root {
    --ink: #1a237e;
    --ink-soft: #283593;
    --ink-muted: #5c6bc0;
    --bg: #f4f6fa;
    --white: #ffffff;
    --accent: #1a237e;
    --accent-light: #e8eaf6;
    --accent2: #ffc107;
    --accent2-light: #fff8e1;
    --border: rgba(20,30,60,0.10);
}

body {
    font-size: 16px;
    line-height: 1.6;
    background-color: var(--bg);
    margin-bottom: 0;
}

.container {
    padding-left: 1rem;
    padding-right: 1rem;
}
.font-cinzel {
font-family: 'Cinzel', serif;
}

/* Fix for logo text centering on mobile */
.flex.items-center span.font-cinzel {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 0 !important;
}

/* Typography scaling */
h1 {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
}

h2 {
    font-size: clamp(1.8rem, 4vw, 2.5rem);
}

h3 {
    font-size: clamp(1.2rem, 3vw, 1.8rem);
}

p {
    font-size: clamp(0.9rem, 2.5vw, 1rem);
}

/* Responsive Images */
img {
    max-width: 100%;
    height: auto;
    display: block;
}

/* Hero Section */
.hero-section {
    position: relative;
    height: 80vh;
    min-height: 600px;
    background-size: cover;
    background-position: center 30%;
    background-repeat: no-repeat;
}

.hero-section video {
    object-fit: cover;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    min-width: 100%;
    min-height: 100%;
    z-index: -1;
}

.hero-text {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    font-size: clamp(1.5rem, 4vw, 2.5rem);
}

/* Top Bar */
.top-bar {
    font-size: clamp(0.75rem, 2vw, 0.9rem);
}

.top-bar .container {
    flex-direction: column;
    gap: 1rem;
}

.top-bar .flex {
    flex-wrap: wrap;
    gap: 0.5rem;
}

/* Navigation */
.nav-link {
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    padding: 0.5rem 0.75rem;
    font-weight: 500;
    color: var(--ink-soft);
    transition: color 0.3s ease, background-color 0.2s ease;
    font-size: clamp(0.9rem, 2.5vw, 1rem);
}

.nav-link:hover {
    color: var(--accent);
}

.whatsapp-button {
    transition: background-color 0.3s ease;
}

.whatsapp-button:hover {
    background-color: #059669;
}

.custom-select {
    appearance: none;
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23333' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M2 5l4 4 4-4'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 0.5rem center;
    padding-right: 2rem;
}

/* Mega Menu Dropdown - Consistent Dimensions */
.nav-dropdown {
    transition: opacity 0.2s ease-in-out, max-height 0.3s ease;
    opacity: 0;
    pointer-events: none;
    position: absolute;
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

.nav-dropdown.active {
    opacity: 1;
    pointer-events: auto;
    max-height: 500px;
    width: 80vw;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: stretch;
}

.nav-item:hover .nav-dropdown,
.nav-item:focus-within .nav-dropdown,
.nav-item.active .nav-dropdown {
    opacity: 1;
    pointer-events: auto;
    max-height: 500px;
    display: flex;
}

.sidebar-link {
    transition: all 0.2s ease-in-out;
    padding: 0.5rem 1rem;
    border-left: 4px solid transparent;
}

.sidebar-link:hover {
    background-color: var(--accent-light);
    border-left-color: var(--accent);
}

/* Review Section */
.review-section {
    background-color: white;
    border-radius: 50%;
    width: clamp(150px, 30vw, 180px);
    height: clamp(150px, 30vw, 180px);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    font-size: clamp(0.8rem, 2vw, 0.9rem);
}

.review-section:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
}

.review-section img {
    max-width: 100%;
    height: auto;
}

.review-section a {
    color: #333;
    text-decoration: none;
    margin-top: 10px;
}

/* Social Icons */
.social-icon {
    transition: all 0.3s ease;
    font-size: clamp(1.5rem, 4vw, 2rem);
}

.social-icon:hover {
    transform: translateY(-2px);
}

/* Modal */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
    padding: 20px;
}

.modal-content {
    background-color: white;
    padding: 1.5rem;
    border-radius: 8px;
    max-width: 500px;
    margin: 5% auto;
    position: relative;
}

.close-button {
    position: absolute;
    right: 20px;
    top: 20px;
    font-size: 24px;
    cursor: pointer;
    color: #666;
}

.radio-group {
    display: flex;
    gap: 20px;
    margin: 10px 0;
    flex-wrap: wrap;
}

.radio-option {
    display: flex;
    align-items: center;
    gap: 5px;
}

/* Video Overlay */
.video-overlay {
    font-size: clamp(1.5rem, 5vw, 3rem);
}

/* Bottom Navigation for Mobile */
.bottom-nav {
    display: none;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: var(--white);
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
    border-top: 1px solid var(--border);
    z-index: 2000;
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
    font-size: 0.75rem;
    text-decoration: none;
    padding: 0.5rem;
}

.bottom-nav a i {
    font-size: 1.2rem;
    margin-bottom: 0.2rem;
}

.bottom-nav a:hover,
.bottom-nav a.active {
    color: var(--accent);
}

/* FAQ Dropdown */
.faq-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
}

.faq-content.active {
    max-height: 500px;
    padding-top: 1rem;
}

.faq-button svg {
    transition: transform 0.3s ease;
}

.faq-button.active svg {
    transform: rotate(180deg);
}

/* Media Queries */
@media (min-width: 640px) {
    .container {
        max-width: 640px;
    }

    .top-bar .container {
        flex-direction: row;
    }

    nav .container {
        flex-direction: row;
        align-items: center;
    }

    nav .flex {
        flex-direction: row;
    }

    .modal-content {
        padding: 2rem;
        max-width: 500px;
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 768px;
    }

    .hero-section {
        height: 100vh;
    }

    .grid-cols-1.md\:grid-cols-3 {
        grid-template-columns: repeat(3, 1fr);
    }

    .nav-dropdown {
        width: 80vw;
        max-height: 500px;
        left: 50%;
        transform: translateX(-50%);
    }

    .bottom-nav {
        display: none !important;
    }
}

@media (min-width: 1024px) {
    .container {
        max-width: 1024px;
    }

    .nav-dropdown {
        width: 80vw;
        max-height: 500px;
    }
}

@media (min-width: 1280px) {
    .container {
        max-width: 1280px;
    }

    .nav-dropdown {
        width: 80vw;
        max-height: 500px;
    }
}

@media (max-width: 767px) {
    .nav-item {
        width: 100%;
    }

    body {
        padding-bottom: 80px;
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

    .grid {
        grid-template-columns: 1fr;
    }

    .grid-cols-1.md\:grid-cols-3 {
        grid-template-columns: 1fr;
    }

    .top-nav {
        display: none;
    }

    .bottom-nav {
        display: block !important;
    }
}

.gradient-overlay {
    background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.6) 100%);
}

.tour-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.itinerary-day {
    position: relative;
    padding-left: 2rem;
}

.itinerary-day:before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 4px;
    height: 100%;
    background: var(--accent2);
    border-radius: 4px;
}

.content-badge {
    background-color: var(--accent-light);
    color: var(--accent);
    border-radius: 0.5rem;
    padding: 0.25rem 0.75rem;
    font-weight: 600;
    font-size: 0.875rem;
    display: inline-block;
    margin-bottom: 1rem;
}

.content-highlight {
    border-left: 4px solid var(--accent2);
    padding-left: 1rem;
    margin: 1.5rem 0;
}

.testimonial-card {
    background-color: var(--accent-light);
    border-radius: 0.75rem;
}

.feature-icon {
    background-color: var(--accent-light);
    color: var(--accent);
    width: 3rem;
    height: 3rem;
    border-radius: 9999px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
}

.day-indicator {
    position: relative;
    z-index: 10;
}

.day-line {
    position: absolute;
    left: 20px;
    top: 0;
    bottom: 0;
    width: 2px;
    background-color: var(--accent2);
    z-index: 1;
}
h1.font-cinzel.font-bold.ml-14 {
    margin: 0 !important;
}

/* Dynamic content transitions */
.sidebar-content {
    transition: all 0.3s ease;
}

.sidebar-link.active {
    background-color: var(--accent-light) !important;
    border-left-color: var(--accent) !important;
}
</style>
</head>
<body class="font-sans text-gray-800 bg-gray-50">
<!-- Header/Navigation -->
<header class="bg-white shadow-sm sticky top-0 z-50">
<div class="container mx-auto px-4 py-4 flex items-center justify-between">
    <div class="flex items-center">
        <a href="/" class="flex items-center">
            <img src="images/LOGO MILELE.png" alt="" class="h-16">
            
            <span class="font-cinzel font-bold ml-2" style="color: #1a237e;">
                <span class="block">Milele</span>
                <span class="block w-full text-center">Technologies</span>
            </span>

        </a>
    </div>
    <nav class="bg-white py-4 shadow-sm top-nav">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Navigation Links -->
            <div class="nav-menu flex space-x-8 relative md:flex">
                <!-- Our Safaris -->
                <div class="group nav-item">
                    <a href="#" class="font-semibold text-gray-800 nav-link">Home</a>
                    <div class="nav-dropdown hidden group-hover:block">
                        <div class="max-w-7xl mx-auto p-6 flex">
                            <div class="w-1/4 pr-4">
                                <div class="bg-gray-100 rounded-lg">
                                    <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="hospitality">
                                        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Hospitality</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="tourism">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Tourism & Travel</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="healthcare">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Healthcare</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="education">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Education</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="manufacturing">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Manufacturing</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="government">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Government & NGOs</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="smes">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">SMEs & Corporates</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-2/4 px-8">
                                <h2 class="text-3xl font-medium text-gray-800 mb-4">Industries We Serve</h2>
                                <p class="text-gray-600 mb-6">
                                    Milele Technologies provides comprehensive technology solutions across diverse industries, delivering innovative ICT, engineering, and automation services tailored to each sector's unique needs and challenges.
                                </p>
                                <a href="/industries" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                    Explore Industries <span class="ml-1">→</span>
                                </a>
                            </div>
                            <div class="w-1/4 pl-4">
                                <img src="{{ asset('images/LOGO MILELE.png') }}" alt="Industries" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Climbing and Mountaineering -->
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
                <!-- Zanzibar -->
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
                                <a href="/services/ict-solutions" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                    Explore Services <span class="ml-1">→</span>
                                </a>
                            </div>
                            <div class="w-1/4 pl-4">
                                <img src="{{ asset('images/tents222.png') }}"alt="ICT Solutions" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Us -->
                <div class="group nav-item">
                    <a href="#" class="font-semibold text-gray-800 nav-link">Partners</a>
                    <div class="nav-dropdown hidden group-hover:block">
                        <div class="max-w-7xl mx-auto p-6 flex">
                            <div class="w-1/4 pr-4">
                                <div class="bg-gray-100 rounded-lg">
                                    <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="get-to-know-us">
                                        <a href="/partners" class="text-gray-700 hover:text-blue-600 font-medium">Our Partners</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="our-story">
                                        <a href="/partners" class="text-gray-700 hover:text-blue-600">Our Clients</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="early-beginnings">
                                        <a href="/partners" class="text-gray-700 hover:text-blue-600">Testmonial</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="our-guides">
                                        <a href="/expertteam" class="text-gray-700 hover:text-blue-600">Our Team</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-2/4 px-8">
                                <h2 class="text-3xl font-medium text-gray-800 mb-4">Parteners & Clients</h2>
                               <p class="text-gray-600 mb-6">
    Learn about our mission, vision, and the passionate team behind our exceptional Tanzania safari and adventure experiences.
</p>
                                <a href="/about" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                    About Our Parteners <span class="ml-1">→</span>
                                </a>
                            </div>
                            <div class="w-1/4 pl-4">
                                <img src="{{ asset('images/logo222.png') }}" alt="About Our Company" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
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
                                        <a href="/blog" class="text-gray-700 hover:text-blue-600 font-medium">Tech News</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="wildlife-stories">
                                        <a href="/blog" class="text-gray-700 hover:text-blue-600">Articles</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="kilimanjaro-insights">
                                        <a href="/blog" class="text-gray-700 hover:text-blue-600">Case Study</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="culture-traditions">
                                        <a href="/blog" class="text-gray-700 hover:text-blue-600">Training & knowledge Base</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="w-2/4 px-8">
                                <h2 class="text-3xl font-medium text-gray-800 mb-4">Get Tech Updates</h2>
                                <p class="text-gray-600 mb-6">
    Stay updated with the latest trends in ICT, engineering, and industrial 
    automation. At Milele Technologies Limited, we share expert insights on 
    digital transformation, power systems, networking solutions, and smart 
    engineering practices that help businesses operate efficiently and grow sustainably.
</p>
                              <a href="/blog" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
    Explore Articles <span class="ml-1">→</span>
</a>
                            </div>
                            <div class="w-1/4 pl-4">
                                <img src="{{ asset('images/calvin founder 3.png') }}" alt="Travel Blog" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact -->
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
    Join Milele Technologies Limited and become part of a multidisciplinary team 
    delivering ICT, engineering, automation, and infrastructure solutions. 
    We are always looking for passionate professionals and ambitious graduates 
    ready to grow, innovate, and contribute to impactful projects.
</p>
<a href="/careers" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
    View Opportunities <span class="ml-1">→</span>
</a>
                            </div>
                            <div class="w-1/4 pl-4">
                                <img src="{{ asset('images/net.jpeg') }}"alt="Contact Us" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>


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
                                        <a href="/projects#printing-graphics" class="text-gray-700 hover:text-blue-600"> Client Success Stories</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="partnerships">
                                        <a href="/projects#networking" class="text-gray-700 hover:text-blue-600">Portifolio</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="w-2/4 px-8">
                                <h2 class="text-3xl font-medium text-gray-800 mb-4">Project & Portifolio</h2>
                               <p class="text-gray-600 mb-6">
    At Milele Technologies Limited, every project is executed with precision, 
    innovation, and technical excellence. We have successfully delivered 
    power systems, structured cabling, automation solutions, HVAC installations, 
    and digital transformation projects that enhance efficiency and long-term performance.
</p>
                                <a href="/projects" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                    Explore The Projects<span class="ml-1">→</span>
                                </a>
                            </div>
                            <div class="w-1/4 pl-4">
                                <img src="{{ asset('images/tz.png') }}"alt="Contact Us" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>


                   <div class="group nav-item">
                    <a href="/contact" class="font-semibold text-gray-800 nav-link">Contact us</a>
                    <div class="nav-dropdown hidden group-hover:block">
                        <div class="max-w-7xl mx-auto p-6 flex">
                            <div class="w-1/4 pr-4">
                                <div class="bg-gray-100 rounded-lg">
                                    <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="contact-info">
                                        <a href="/contact#contact-form" class="text-gray-700 hover:text-blue-600 font-medium">Contact form</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="office-locations">
                                        <a href="/contact#contact-form" class="text-gray-700 hover:text-blue-600">Office Location</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="booking-inquiries">
                                        <a href="/contact#contact-form" class="text-gray-700 hover:text-blue-600"> Support Request</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="partnerships">
                                        <a href="/contact#contact-form" class="text-gray-700 hover:text-blue-600">Request Consultation</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="w-2/4 px-8">
                                <h2 class="text-3xl font-medium text-gray-800 mb-4">Get In Touch With Us</h2>
                               <p class="text-gray-600 mb-6">
    We're here to help! Whether you need technical support, want to discuss a project, 
    or have questions about our services, our team is ready to assist. Reach out through 
    our contact form, visit our office, or request a consultation to explore how we can 
    support your technology needs.
</p>
                                <a href="/contact" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                    Contact Us Now<span class="ml-1">→</span>
                                </a>
                            </div>
                            <div class="w-1/4 pl-4">
                                <img src="{{ asset('images/techsupport.jpg') }}"alt="Contact Us" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>



                
        </nav>
            <div class="flex items-center gap-3">
    <!-- Innovation Hub Button - Styled like the MileleTech buttons -->
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
                <a href="#" class="nav-link">
                    <i class="fas fa-cogs"></i>
                    <span>Services</span>
                </a>
                <a href="#" class="nav-link">
                    <i class="fas fa-briefcase"></i>
                    <span>Projects</span>
                </a>
                <a href="/blog" class="nav-link">
                    <i class="fas fa-newspaper"></i>
                    <span>Blog</span>
                </a>
                <a href="#" class="nav-link">
                    <i class="fas fa-handshake"></i>
                    <span>Partners</span>
                </a>
                <a href="/contact" class="nav-link">
                    <i class="fas fa-envelope"></i>
                    <span>Contact</span>
                </a>
            </div>
        </div>


    <!-- Hero Section -->
    <div class="relative hero-section h-screen w-full overflow-hidden">
        <!-- Background Image (replaces the CSS background) -->
        <img
            src="{{ asset('images/HOME.jpg') }}"
            alt="Background Lion"
            class="absolute inset-0 w-full h-full object-cover"
            loading="lazy"
        >
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white px-4 max-w-4xl mx-auto">
                <h1 class="font-cinzel font-bold ml-14">Milele Technologies</h1>
                
            <p class="text-2xl md:text-3xl mb-8">
                ICT Solutions • Power Systems • Automation • Industrial Engineering
            </p>

            <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                <center>
                <p class="text-xl font-medium">
                    Innovative, Reliable & Future-Ready Technology Solutions
                </p>
                </center>
                </div>
                <br>
                <center>
               <a href="javascript:void(0)" class="mt-8 inline-block" style="background: var(--ink); color: white; font-weight: bold; padding: 0.75rem 2rem; border-radius: 9999px; font-size: 1.125rem; transition: all 0.2s ease; box-shadow: var(--shadow-lg);" 
   onmouseover="this.style.background='#283593'" 
   onmouseout="this.style.background='var(--ink)'" onclick="openQuoteModal()">
    GET A QUOTE
</a>
                </center>
            </div>
        </div>
    </div>

    <!-- Breadcrumbs -->
    <div class="bg-gray-100 py-3">
    <div class="container mx-auto px-4">
        <div class="flex items-center text-sm">
            <a href="/" class="text-blue-600 hover:underline">Home</a>
            <span class="mx-2 text-blue-400">›</span>

            <a href="/services" class="text-blue-600 hover:underline">Our Services</a>
            <span class="mx-2 text-blue-400">›</span>

            <a href="/solutions" class="text-blue-600 hover:underline">Solutions</a>
            <span class="mx-2 text-blue-400">›</span>

            <span class="text-blue-600">Corporate & Industrial Technology</span>
        </div>
    </div>
</div>

 <!-- Milele Technologies Section -->
    <div class="relative py-20 bg-white">
        <div class="relative container mx-auto px-4">
            <div class="flex justify-center items-center mb-12 flex-col md:flex-row">
                <div id="reviewSection" class="review-section" onclick="redirectToReviews()">
                    <img src="{{ asset('images/LOGO MILELE.png') }}" alt="Milele Technologies" class="h-28 mx-auto mb-3" loading="lazy">
             
                </div>
                <div class="flex gap-6 mt-4 md:ml-8 md:mt-0">
                    <a href="https://www.instagram.com/mileletechnologies" class="social-icon text-pink-500 hover:text-pink-600"><i class="fab fa-instagram text-3xl"></i></a>
                    <a href="https://www.facebook.com/mileletechnologies" class="social-icon text-blue-600 hover:text-blue-700"><i class="fab fa-facebook text-3xl"></i></a>
                    <a href="https://www.linkedin.com/company/mileletechnologies" class="social-icon text-blue-500 hover:text-blue-600"><i class="fab fa-linkedin text-3xl"></i></a>
                    <a href="https://twitter.com/mileletechnologies" class="social-icon text-gray-800 hover:text-gray-900"><i class="fab fa-x-twitter text-3xl"></i></a>
                </div>
            </div>
            <div class="text-center p-8 w-full">
                <h2 class="text-4xl font-bold mb-10">Transform Your Business With Innovative Technology Solutions</h2>
                <div class="flex items-center justify-center mb-10">
                    <img src="{{ asset('images/tz.png') }}" alt="Tanzania Flag" class="h-6 mr-3" loading="lazy">
                    <p class="text-xl font-semibold">Leading technology solutions provider based in Tanzania</p>
                </div>
                <div class="space-y-6 text-lg text-gray-800">
                    <p>
                        Milele Technologies Limited is a premier multidisciplinary technology company based in Tanzania, specializing in providing cutting-edge ICT solutions, engineering services, automation systems, and industrial infrastructure. Our mission is to cater to businesses of all sizes by offering comprehensive, scalable, and innovative technology solutions, ensuring that every organization can leverage the power of technology to achieve their goals.
                    </p>
                    <p>
                        At Milele Technologies, our operations are driven by a dedicated force of highly skilled local technology specialists across Tanzania, each bringing authentic technical expertise, industry knowledge, and on-the-ground experience to every project we undertake. What sets us apart is not just our local strength but our diverse, multilingual global team of expert technology consultants, strategically positioned across various time zones to ensure round-the-clock, seamless support for clients worldwide. Our commitment to technical excellence, innovation, and customer satisfaction allows us to deliver solutions that are not only transformative but deeply integrated with the unique needs and objectives of each client.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Why Choose Milele Technologies</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="flex items-start space-x-4 p-6 bg-white rounded-lg shadow-md">
                    <div class="bg-blue-100 p-3 rounded-full">
                        <i class="fas fa-network-wired text-blue-500 text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Advanced Infrastructure</h3>
                        <p class="text-gray-700">We provide state-of-the-art network infrastructure, cloud solutions, and IT systems designed for optimal performance and reliability</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-6 bg-white rounded-lg shadow-md">
                    <div class="bg-green-100 p-3 rounded-full">
                        <i class="fas fa-microchip text-green-500 text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Smart Automation</h3>
                        <p class="text-gray-700">Our team of automation experts designs and implements intelligent control systems that optimize efficiency and reduce operational costs</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-6 bg-white rounded-lg shadow-md">
                    <div class="bg-yellow-100 p-3 rounded-full">
                        <i class="fas fa-certificate text-yellow-500 text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Certified Professionals</h3>
                        <p class="text-gray-700">Our team holds industry certifications and is continuously trained on the latest technologies and best practices in ICT and engineering</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-6 bg-white rounded-lg shadow-md">
                    <div class="bg-purple-100 p-3 rounded-full">
                        <i class="fas fa-shield-alt text-purple-500 text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Quality Assurance</h3>
                        <p class="text-gray-700">We implement rigorous testing and quality control measures to ensure every solution meets international standards and client expectations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="py-16 bg-white">
         <div class="max-w-7xl mx-auto px-4">
             <div class="text-center mb-12">
                 <div class="inline-block">
                     <div class="w-16 h-1 bg-blue-500 mx-auto mb-4"></div>
                     <h2 class="text-4xl font-bold text-gray-900">Industries We Serve</h2>
                 </div>
                 <p class="mt-4 max-w-3xl mx-auto text-gray-600 text-lg">
                     We deliver reliable ICT, automation, power systems, and engineering solutions tailored to the operational needs of each industry helping organizations modernize, secure, and scale.
                 </p>
             </div>
 
             <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
                 <div class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all transform hover:-translate-y-1 h-full">
                     <div class="flex items-start gap-4">
                         <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                             <i class="fas fa-hotel text-blue-600 text-xl"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-gray-900">Hospitality</h3>
                             <p class="mt-1 text-gray-600 text-sm leading-relaxed">Property management, POS, guest Wi‑Fi, surveillance, and digital experiences for hotels, resorts, and restaurants.</p>
                         </div>
                     </div>
                 </div>
 
                 <div class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all transform hover:-translate-y-1 h-full">
                     <div class="flex items-start gap-4">
                         <div class="flex-shrink-0 w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                             <i class="fas fa-plane-departure text-green-600 text-xl"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-gray-900">Tourism & Travel</h3>
                             <p class="mt-1 text-gray-600 text-sm leading-relaxed">Booking platforms, tour operations tools, payments integration, and customer engagement systems that convert.</p>
                         </div>
                     </div>
                 </div>
 
                 <div class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all transform hover:-translate-y-1 h-full">
                     <div class="flex items-start gap-4">
                         <div class="flex-shrink-0 w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center">
                             <i class="fas fa-hospital text-red-600 text-xl"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-gray-900">Healthcare</h3>
                             <p class="mt-1 text-gray-600 text-sm leading-relaxed">Secure hospital systems, connectivity, device integration, and data protection to support compliant operations.</p>
                         </div>
                     </div>
                 </div>
 
                 <div class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all transform hover:-translate-y-1 h-full">
                     <div class="flex items-start gap-4">
                         <div class="flex-shrink-0 w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
                             <i class="fas fa-graduation-cap text-yellow-600 text-xl"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-gray-900">Education</h3>
                             <p class="mt-1 text-gray-600 text-sm leading-relaxed">Learning platforms, smart classrooms, network infrastructure, and campus security for modern institutions.</p>
                         </div>
                     </div>
                 </div>
 
                 <div class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all transform hover:-translate-y-1 h-full">
                     <div class="flex items-start gap-4">
                         <div class="flex-shrink-0 w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                             <i class="fas fa-industry text-purple-600 text-xl"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-gray-900">Manufacturing</h3>
                             <p class="mt-1 text-gray-600 text-sm leading-relaxed">Automation, SCADA/PLC, IoT monitoring, and predictive maintenance to increase output and reduce downtime.</p>
                         </div>
                     </div>
                 </div>
 
                 <div class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all transform hover:-translate-y-1 h-full">
                     <div class="flex items-start gap-4">
                         <div class="flex-shrink-0 w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center">
                             <i class="fas fa-landmark text-indigo-600 text-xl"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-gray-900">Government & NGOs</h3>
                             <p class="mt-1 text-gray-600 text-sm leading-relaxed">Robust systems for service delivery, secure data management, connectivity, and citizen engagement solutions.</p>
                         </div>
                     </div>
                 </div>
 
                 <div class="border border-blue-100 rounded-2xl p-7 shadow-sm hover:shadow-lg transition-all transform hover:-translate-y-1 sm:col-span-2 lg:col-span-3" style="background: linear-gradient(90deg, #2563eb 0%, #4f46e5 100%);">
                     <div class="flex flex-col md:flex-row md:items-center gap-6">
                         <div class="flex items-start gap-4 flex-1">
                             <div class="flex-shrink-0 w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center">
                                 <i class="fas fa-briefcase text-white text-xl"></i>
                             </div>
                             <div class="flex-1">
                                 <h3 class="text-lg font-bold text-white">SMEs & Corporates</h3>
                                 <p class="mt-1 text-white text-sm" style="opacity: 0.92;">Cloud, cybersecurity, ERP/business systems, and infrastructure services designed for growth and operational resilience.</p>
                             </div>
                         </div>
                         <div class="md:flex-shrink-0">
                             <a href="/industries" class="inline-block bg-white text-blue-700 px-6 py-3 rounded-md font-semibold transition-colors hover:bg-blue-50">Explore Industries <span class="ml-1">→</span></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 <div class="py-16 bg-gray-50">
         <div class="max-w-7xl mx-auto px-4">
             <div class="text-center mb-12">
                 <div class="inline-block">
                     <div class="w-16 h-1 bg-blue-500 mx-auto mb-4"></div>
                     <h2 class="text-4xl font-bold text-gray-900">Products / Solutions</h2>
                 </div>
                 <p class="mt-4 max-w-3xl mx-auto text-gray-600 text-lg">
                     Equip your business with trusted hardware and smart solutions professionally supplied, installed, and supported by Milele Technologies.
                 </p>
             </div>

             <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
                 <div class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all transform hover:-translate-y-1 h-full">
                     <div class="flex items-start gap-4">
                         <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                             <i class="fas fa-network-wired text-blue-600 text-xl"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-gray-900">Networking Equipment</h3>
                             <p class="mt-1 text-gray-600 text-sm leading-relaxed">Routers, switches, Wi‑Fi, structured cabling, and network design for secure, high‑performance connectivity.</p>
                         </div>
                     </div>
                 </div>

                 <div class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all transform hover:-translate-y-1 h-full">
                     <div class="flex items-start gap-4">
                         <div class="flex-shrink-0 w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center">
                             <i class="fas fa-video text-red-600 text-xl"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-gray-900">CCTV & Surveillance</h3>
                             <p class="mt-1 text-gray-600 text-sm leading-relaxed">HD/IP cameras, NVR/DVR, remote monitoring, and storage—designed for reliable coverage and visibility.</p>
                         </div>
                     </div>
                 </div>

                 <div class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all transform hover:-translate-y-1 h-full">
                     <div class="flex items-start gap-4">
                         <div class="flex-shrink-0 w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center">
                             <i class="fas fa-fingerprint text-indigo-600 text-xl"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-gray-900">Access Control & Biometrics</h3>
                             <p class="mt-1 text-gray-600 text-sm leading-relaxed">Biometric attendance, door access systems, time tracking, and audit-ready reporting for modern workplaces.</p>
                         </div>
                     </div>
                 </div>

                 <div class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all transform hover:-translate-y-1 h-full">
                     <div class="flex items-start gap-4">
                         <div class="flex-shrink-0 w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                             <i class="fas fa-building text-green-600 text-xl"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-gray-900">Smart Office Solutions</h3>
                             <p class="mt-1 text-gray-600 text-sm leading-relaxed">Meeting room AV, collaboration tools, access automation, and office networking to boost productivity.</p>
                         </div>
                     </div>
                 </div>

                 <div class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all transform hover:-translate-y-1 h-full sm:col-span-2 lg:col-span-1">
                     <div class="flex items-start gap-4">
                         <div class="flex-shrink-0 w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
                             <i class="fas fa-print text-yellow-600 text-xl"></i>
                         </div>
                         <div class="flex-1">
                             <h3 class="text-lg font-bold text-gray-900">Printing Systems</h3>
                             <p class="mt-1 text-gray-600 text-sm leading-relaxed">Office printers, copiers, scanners, consumables, and managed print services with dependable support.</p>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="text-center mt-10">
                 <a href="javascript:void(0)" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 font-semibold transition-colors" onclick="openQuoteModal({ type: 'product' })">Request a Product Quote <span class="ml-1">→</span></a>
             </div>
         </div>
     </div>

	<div class="py-16 bg-gray-50" id="testimonialsSection">
        	<div class="container mx-auto px-4">
            	<div class="text-center mb-12">
                	<div class="inline-block">
                    	<div class="w-16 h-1 bg-blue-500 mx-auto mb-4"></div>
                    	<h2 class="text-4xl font-bold">What Our Clients Say</h2>
                	</div>
            	</div>
            
            <!-- Statistics Counter Section -->
            <div class="text-center mb-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all cursor-pointer">
                        <div class="text-3xl font-bold text-blue-600 mb-2" data-target="200">0</div>
                        <div class="text-gray-600">Projects Completed</div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all cursor-pointer">
                        <div class="text-3xl font-bold text-blue-600 mb-2" data-target="150">0</div>
                        <div class="text-gray-600">Happy Customers</div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all cursor-pointer">
                        <div class="text-3xl font-bold text-blue-600 mb-2" data-target="50">0</div>
                        <div class="text-gray-600">Customer Testimonials</div>
                    </div>
                </div>
            </div>
            
            <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/girl.jpeg') }}" alt="Client" class="w-16 h-16 rounded-full object-cover mr-4" loading="lazy">
                        <div>
                            <h3 class="font-bold text-lg">Winnifrida Mlay</h3>
                            <div class="text-yellow-400">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-gray-700">
                        "Milele Technologies transformed our entire IT infrastructure. Their team was professional, knowledgeable, and delivered exceptional results. Highly recommended!"
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/passport.jpeg') }}" alt="Client" class="w-16 h-16 rounded-full object-cover mr-4" loading="lazy">
                        <div>
                            <h3 class="font-bold text-lg">Michael Flavian</h3>
                            <div class="text-yellow-400">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-gray-700">
                        "The automation solutions implemented by Milele Technologies increased our production efficiency by 40%. Excellent work from start to finish."
                    </p>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="{{ route('reviews') }}" class="inline-block bg-blue-600 text-white hover:bg-ffc107 px-8 py-3 rounded-md font-semibold transition-colors">
                    READ MORE TESTIMONIALS
                </a>
            </div>
        </div>
    </div>

<script>
// Animated Counter Function
function animateCounter() {
    const counters = document.querySelectorAll('[data-target]');
    const speed = 200; // Animation speed in milliseconds
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-target'));
                let count = 0;
                
                const updateCounter = () => {
                    const increment = target / speed;
                    count += increment;
                    
                    if (count < target) {
                        counter.innerText = Math.ceil(count);
                        setTimeout(updateCounter, 10);
                    } else {
                        counter.innerText = target;
                    }
                };
                
                updateCounter();
                observer.unobserve(entry.target);
            }
        });
    });
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
}

// Initialize counter when page loads
document.addEventListener('DOMContentLoaded', animateCounter);

// Re-animate counter when hovering over testimonials section
document.getElementById('testimonialsSection').addEventListener('mouseenter', () => {
    // Reset counters to 0
    const counters = document.querySelectorAll('[data-target]');
    counters.forEach(counter => {
        counter.innerText = '0';
    });
    
    // Re-animate after a short delay
    setTimeout(() => {
        animateCounter();
    }, 100);
});
</script>
<script>
// Dynamic content for navigation dropdowns
const contentData = {
    // Industries dropdown content
    'hospitality': {
        title: 'Hospitality Industry Solutions',
        description: 'Comprehensive technology solutions for hotels, resorts, and restaurants including property management systems, POS solutions, guest WiFi networks, and digital marketing platforms.',
        buttonText: 'Explore Hospitality',
        buttonLink: '#',
        image: '{{ asset("images/LOGO MILELE.png") }}',
        imageAlt: 'Hospitality Technology Solutions'
    },
    'tourism': {
        title: 'Tourism & Travel Technology',
        description: 'Digital transformation for tourism operators with booking systems, tour management software, mobile apps, and integrated payment solutions for seamless customer experiences.',
        buttonText: 'Tourism Solutions',
        buttonLink: '#',
        image: '{{ asset("images/tents222.png") }}',
        imageAlt: 'Tourism Technology Solutions'
    },
    'healthcare': {
        title: 'Healthcare Technology Solutions',
        description: 'Secure and compliant healthcare IT systems including electronic health records, telemedicine platforms, medical device integration, and hospital management software.',
        buttonText: 'Healthcare IT',
        buttonLink: '#',
        image: '{{ asset("images/calvin founder 3.png") }}',
        imageAlt: 'Healthcare Technology Solutions'
    },
    'education': {
        title: 'Education Technology Solutions',
        description: 'Transform educational institutions with learning management systems, digital classrooms, student information systems, and e-learning platforms for modern education delivery.',
        buttonText: 'Education Tech',
        buttonLink: '#',
        image: '{{ asset("images/logo222.png") }}',
        imageAlt: 'Education Technology Solutions'
    },
    'manufacturing': {
        title: 'Manufacturing & Industrial Tech',
        description: 'Smart manufacturing solutions including industrial automation, IoT integration, quality control systems, and predictive maintenance for enhanced production efficiency.',
        buttonText: 'Manufacturing Solutions',
        buttonLink: '#',
        image: '{{ asset("images/moutee.png") }}',
        imageAlt: 'Manufacturing Technology Solutions'
    },
    'government': {
        title: 'Government & NGO Solutions',
        description: 'Secure and scalable technology solutions for public sector and NGOs including e-government platforms, data management systems, and citizen engagement tools.',
        buttonText: 'Public Sector Tech',
        buttonLink: '#',
        image: '{{ asset("images/tz.png") }}',
        imageAlt: 'Government Technology Solutions'
    },
    'smes': {
        title: 'SMEs & Corporate Solutions',
        description: 'Tailored technology solutions for businesses of all sizes including ERP systems, cloud infrastructure, cybersecurity, and digital transformation consulting.',
        buttonText: 'Business Solutions',
        buttonLink: '#',
        image: '{{ asset("images/vintage 3.png") }}',
        imageAlt: 'Business Technology Solutions'
    },
    
    // About us dropdown content
    'multi-day-safari': {
        title: 'Our Company Story',
        description: 'Founded with a vision to deliver excellence, Milele Technologies has grown into a leading multidisciplinary technology solutions provider in Tanzania.',
        buttonText: 'Learn More',
        buttonLink: '/about',
        image: '{{ asset("images/LOGO MILELE.png") }}',
        imageAlt: 'Milele Technologies Company'
    },
    'wildlife-photography': {
        title: 'Core Values & Principles',
        description: 'Innovation, integrity, and excellence drive everything we do. We are committed to delivering sustainable technology solutions that transform businesses.',
        buttonText: 'Our Values',
        buttonLink: '/about#mission',
        image: '{{ asset("images/LOGO MILELE.png") }}',
        imageAlt: 'Core Values and Innovation'
    },
    'serengeti-migration': {
        title: 'Meet Our Expert Team',
        description: 'Our diverse team of engineers, developers, and consultants brings together decades of experience in ICT, engineering, project management, and customer service to every project.',
        buttonText: 'Meet The Team',
        buttonLink: '/expertteam',
        image: '{{ asset("images/techsupport.jpg") }}',
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
        buttonLink: '/reviews',
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
        description: 'Explore exciting career opportunities at Milele Technologies. We’re looking for talented professionals passionate about technology and innovation.',
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
        image: '{{ asset("images/calvin founder 3.png") }}',
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
    'contact-info': {
        title: 'Successfully Completed Projects',
        description: 'Browse our portfolio of successfully delivered projects across various industries including hospitality, healthcare, education, and manufacturing.',
        buttonText: 'Completed Projects',
        buttonLink: '/projects',
        image: '{{ asset("images/techsupport.jpg") }}',
        imageAlt: 'Completed Technology Projects'
    },
    'office-locations': {
        title: 'Detailed Case Studies',
        description: 'In-depth analysis of challenging projects and how our innovative solutions delivered exceptional results for our clients.',
        buttonText: 'Case Studies',
        buttonLink: '/projects#webdesign',
        image: '{{ asset("images/techsupport.jpg") }}',
        imageAlt: 'Project Case Studies'
    },
    'booking-inquiries': {
        title: 'Client Success Stories',
        description: 'Real feedback and success stories from clients who trusted us for technology, engineering, and digital transformation solutions.',
        buttonText: 'View Stories',
        buttonLink: '/projects#printing-graphics',
        image: '{{ asset("images/techsupport.jpg") }}',
        imageAlt: 'Client Success Stories'
    },
    'partnerships': {
        title: 'Project Portfolio',
        description: 'Comprehensive showcase of our technical capabilities and expertise demonstrated through diverse projects across multiple sectors.',
        buttonText: 'View Portfolio',
        buttonLink: '/projects#networking',
        image: '{{ asset("images/techsupport.jpg") }}',
        imageAlt: 'Project Portfolio Showcase'
    },
    
    // Contact us dropdown content
    'contact-info': {
        title: 'Contact Form',
        description: 'Send us a message directly through our secure contact form. We typically respond within 24 hours and will address your inquiry promptly.',
        buttonText: 'Send Message',
        buttonLink: '/contact#contact-form',
        image: '{{ asset("images/conctform.jpg") }}',
        imageAlt: 'Contact Form'
    },
    'office-locations': {
        title: 'Visit Our Office',
        description: 'Stop by our headquarters in Arusha for a personal consultation. Our team is ready to discuss your technology needs in detail.',
        buttonText: 'Get Directions',
        buttonLink: '/contact#contact-form',
        image: '{{ asset("images/loc.jpg") }}',
        imageAlt: 'Office Location'
    },
    'booking-inquiries': {
        title: 'Technical Support Request',
        description: 'Need immediate assistance? Submit a support request and our technical team will help resolve your issues quickly and efficiently.',
        buttonText: 'Request Support',
        buttonLink: '/contact#contact-form',
        image: '{{ asset("images/techsupport.jpg") }}',
        imageAlt: 'Technical Support'
    },
    'partnerships': {
        title: 'Request Consultation',
        description: 'Schedule a comprehensive consultation with our experts to explore how our solutions can transform your business operations.',
        buttonText: 'Book Consultation',
        buttonLink: '/contact#contact-form',
        image: '{{ asset("images/techsupport.jpg") }}',
        imageAlt: 'Business Consultation'
    }
};

// Initialize dynamic content functionality
document.addEventListener('DOMContentLoaded', function() {
    // Add hover event listeners to all sidebar links
    const sidebarLinks = document.querySelectorAll('.sidebar-link');
    
    sidebarLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            const section = this.getAttribute('data-section');
            const content = contentData[section];
            
            if (content) {
                // Find the parent dropdown
                const dropdown = this.closest('.nav-dropdown');
                if (dropdown) {
                    // Find the content area (middle column)
                    const contentArea = dropdown.querySelector('.w-2\\/4');
                    if (contentArea) {
                        // Update content with smooth transition
                        const h2 = contentArea.querySelector('h2');
                        const p = contentArea.querySelector('p');
                        const button = contentArea.querySelector('a');
                        
                        // Add transition class
                        contentArea.classList.add('sidebar-content');
                        
                        // Update content
                        if (h2) h2.textContent = content.title;
                        if (p) p.textContent = content.description;
                        if (button) {
                            button.textContent = content.buttonText + ' →';
                            button.setAttribute('href', content.buttonLink);
                        }
                        
                        // Update image in the right column
                        const imageArea = dropdown.querySelector('.w-1\\/4.pl-4');
                        if (imageArea && content.image) {
                            const img = imageArea.querySelector('img');
                            if (img) {
                                img.setAttribute('src', content.image);
                                img.setAttribute('alt', content.imageAlt);
                            }
                        }
                        
                        // Update active state
                        // Remove active class from all links in this dropdown
                        dropdown.querySelectorAll('.sidebar-link').forEach(l => {
                            l.classList.remove('active');
                        });
                        // Add active class to current link
                        this.classList.add('active');
                    }
                }
            }
        });
    });
    
    // Reset content when mouse leaves dropdown
    const dropdowns = document.querySelectorAll('.nav-dropdown');
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('mouseleave', function() {
            // Remove active classes
            this.querySelectorAll('.sidebar-link').forEach(l => {
                l.classList.remove('active');
            });
        });
    });
});

</script>

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
                        <a href="/services" class="text-gray-800 font-semibold hover:text-blue-700">Services</a>
                        <a href="/projects" class="text-gray-800 font-semibold hover:text-blue-700">Projects</a>
                        <a href="{{ route('reviews') }}" class="text-gray-800 font-semibold hover:text-blue-700">Reviews</a>
                        <a href="/contact" class="text-gray-800 font-semibold hover:text-blue-700">Contact</a>
                    </div>
                </div>

                <div>
                    <div class="text-gray-900 font-bold tracking-wide">Solutions</div>
                    <div class="mt-4 grid gap-2 text-sm">
                        <a href="/services#ict" class="text-gray-800 font-semibold hover:text-blue-700">ICT Solutions</a>
                        <a href="/services#software" class="text-gray-800 font-semibold hover:text-blue-700">Software & Business Systems</a>
                        <a href="/services#automation" class="text-gray-800 font-semibold hover:text-blue-700">Automation & Control</a>
                        <a href="/services#engineering" class="text-gray-800 font-semibold hover:text-blue-700">Engineering Services</a>
                        <a href="/services#printing" class="text-gray-800 font-semibold hover:text-blue-700">Printing & Branding</a>
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
                            <a href="javascript:void(0)" class="inline-flex items-center justify-center w-full rounded-lg bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 font-semibold" onclick="openQuoteModal()">Request a Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 border-t border-gray-200 pt-6 flex flex-col md:flex-row gap-3 md:items-center md:justify-between">
                <div class="text-xs text-gray-600 font-semibold"> {{ date('Y') }} Milele Technologies Limited. All rights reserved.</div>
                <div class="flex items-center gap-4 text-xs text-gray-600 font-semibold">
                    <a href="/privacy" class="hover:text-blue-700">Privacy</a>
                    <a href="/terms" class="hover:text-blue-700">Terms</a>
                    <a href="/sitemap" class="hover:text-blue-700">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

<!-- Quote Modal -->
    <div id="quoteModal" class="fixed inset-0 z-50 hidden" aria-hidden="true">
        <div class="absolute inset-0 bg-black/60" onclick="closeQuoteModal()"></div>

        <div class="relative h-full w-full flex items-center justify-center p-4">
            <div class="w-full max-w-2xl bg-white rounded-2xl shadow-2xl overflow-hidden ring-1 ring-black/5">
                <div class="px-6 py-5 bg-gradient-to-r from-blue-700 to-indigo-900 text-white">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-xl bg-white/15 flex items-center justify-center">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </div>
                                <h3 id="quoteModalTitle" class="text-xl font-semibold leading-tight">Request a Quote</h3>
                            </div>
                            <p id="quoteModalDescription" class="mt-2 text-sm text-white/85">
                                Tell us what you need and we’ll respond with a tailored estimate.
                            </p>
                        </div>
                        <button type="button" class="text-white/80 hover:text-white" onclick="closeQuoteModal()" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <form class="p-6" action="{{ route('quote.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Full Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" required placeholder="Your full name" class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 placeholder-gray-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30" />
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Phone Number</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" required placeholder="+255 ..." class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 placeholder-gray-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30" />
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Email Address</label>
                            <input type="email" name="email" value="{{ old('email') }}" required placeholder="you@company.com" class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 placeholder-gray-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30" />
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Service Interested In</label>
                            <select id="quoteServiceSelect" name="service" required class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30">
                                <option value="" disabled selected>Select a service</option>
                                <option value="product_quote" @selected(old('service') === 'product_quote')>Product Quote</option>
                                <option value="ict" @selected(old('service') === 'ict')>ICT Solutions</option>
                                <option value="software" @selected(old('service') === 'software')>Software Development</option>
                                <option value="automation" @selected(old('service') === 'automation')>Automation & Control</option>
                                <option value="engineering" @selected(old('service') === 'engineering')>Engineering Services</option>
                                <option value="networking" @selected(old('service') === 'networking')>Networking Equipment</option>
                                <option value="cctv" @selected(old('service') === 'cctv')>CCTV & Surveillance</option>
                                <option value="access_control" @selected(old('service') === 'access_control')>Access Control & Biometrics</option>
                                <option value="smart_office" @selected(old('service') === 'smart_office')>Smart Office Solutions</option>
                                <option value="printing" @selected(old('service') === 'printing')>Printing Systems</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="block text-sm font-semibold text-gray-800 mb-1">Project Details</label>
                        <textarea name="message" rows="5" required class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 placeholder-gray-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30" placeholder="What do you need? Include scope, location, and timeline...">{{ old('message') }}</textarea>
                        <p class="mt-2 text-xs text-gray-500">Tip: include your preferred timeline and budget range if available.</p>
                    </div>

                    <div class="mt-6 flex flex-col-reverse sm:flex-row gap-3 sm:justify-end">
                        <button type="button" class="px-5 py-3 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-50 font-semibold" onclick="closeQuoteModal()">Cancel</button>
                        <button type="submit" class="px-5 py-3 rounded-lg bg-blue-600 text-white hover:bg-blue-700 font-semibold shadow-sm">Submit Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@if (session('quote_success'))
    <div id="quoteSuccessToast" class="fixed z-[60] right-4 bottom-4 w-[min(28rem,calc(100%-2rem))]">
        <div class="rounded-xl bg-white shadow-2xl ring-1 ring-black/10 overflow-hidden">
            <div class="flex gap-4 p-4">
                <div class="h-10 w-10 rounded-xl bg-green-50 text-green-700 flex items-center justify-center">
                    <i class="fas fa-check"></i>
                </div>
                <div class="flex-1">
                    <div class="font-semibold text-gray-900">Quote request submitted</div>
                    <div class="text-sm text-gray-600">{{ session('quote_success') }}</div>
                </div>
                <button type="button" class="text-gray-500 hover:text-gray-800" onclick="document.getElementById('quoteSuccessToast')?.remove()" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="h-1 bg-green-600" id="quoteToastBar"></div>
        </div>
    </div>
@endif

<script>
function openQuoteModal(opts) {
    const modal = document.getElementById('quoteModal');
    if (!modal) return;

    const titleEl = document.getElementById('quoteModalTitle');
    const descEl = document.getElementById('quoteModalDescription');
    const serviceSelect = document.getElementById('quoteServiceSelect');

    const type = opts && typeof opts === 'object' ? opts.type : null;
    if (type === 'product') {
        if (titleEl) titleEl.textContent = 'Product Quote';
        if (descEl) descEl.textContent = 'Tell us the product/solution you need and we’ll respond with a tailored estimate.';
        if (serviceSelect && !serviceSelect.value) serviceSelect.value = 'product_quote';
    } else {
        if (titleEl) titleEl.textContent = 'Request a Quote';
        if (descEl) descEl.textContent = 'Tell us what you need and we’ll respond with a tailored estimate.';
    }

    modal.classList.remove('hidden');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
}

function closeQuoteModal() {
    const modal = document.getElementById('quoteModal');
    if (!modal) return;
    modal.classList.add('hidden');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeQuoteModal();
});

document.addEventListener('DOMContentLoaded', function() {
    @if ($errors->any())
        openQuoteModal();
    @endif

    @if (session('quote_success'))
        closeQuoteModal();
        const toast = document.getElementById('quoteSuccessToast');
        const bar = document.getElementById('quoteToastBar');
        if (toast && bar) {
            let p = 100;
            const interval = setInterval(() => {
                p -= 2;
                bar.style.width = p + '%';
                if (p <= 0) {
                    clearInterval(interval);
                    toast.remove();
                }
            }, 80);
        }
    @endif
});
</script>

</body>
</html>