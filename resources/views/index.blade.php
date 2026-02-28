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
    margin-bottom: 80px; /* Increased space for bottom nav on mobile */
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

    .grid {
        grid-template-columns: repeat(2, 1fr);
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
                                    <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="kilimanjaro-slopes">
                                        <a href="/viewsafar" class="text-gray-700 hover:text-blue-600 font-medium">View All Safaris</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="one-day-safari">
                                        <a href="daytrip" class="text-gray-700 hover:text-blue-600">Day Trip</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="moshi-excursions">
                                        <a href="lemosho" class="text-gray-700 hover:text-blue-600">Excursions in Moshi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-2/4 px-8">
                                <h2 class="text-3xl font-medium text-gray-800 mb-4">Tanzania Safari Adventures</h2>
                                <p class="text-gray-600 mb-6">
                                    Experience the incredible wildlife of Tanzania with our guided safari tours through some of Africa's most stunning national parks and conservation areas.
                                </p>
                                <a href="#" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                    Explore Safaris <span class="ml-1">→</span>
                                </a>
                            </div>
                            <div class="w-1/4 pl-4">
                                <img src="{{ asset('images/tents222.png') }}" alt="Tanzania Safari" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Climbing and Mountaineering -->
                <div class="group nav-item">
                    <a href="kilimajaro" class="font-semibold text-gray-800 nav-link">About us</a>
                    <div class="nav-dropdown hidden group-hover:block">
                        <div class="max-w-7xl mx-auto p-6 flex">
                            <div class="w-1/4 pr-4">
                                <div class="bg-gray-100 rounded-lg">
                                    <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="multi-day-safari">
                                        <a href="kilimajaro" class="text-gray-700 hover:text-blue-600 font-medium">Company overview</a>
                                    </div>
                                    <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="multi-day-safari">
                                        <a href="marangu" class="text-gray-700 hover:text-blue-600 font-medium">Vision & Mission</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="wildlife-photography">
                                        <a href="lemosho" class="text-gray-700 hover:text-blue-600">Core Values</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="serengeti-migration">
                                        <a href="rongai" class="text-gray-700 hover:text-blue-600">Our Team</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="serengeti-migration">
                                        <a href="rongai" class="text-gray-700 hover:text-blue-600">Why Choose Us</a>
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
                                <a href="kilimajaro" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                    Read More<span class="ml-1">→</span>
                                </a>
                                </div>
                                <div class="w-1/4 pl-4">
                                <img src="{{ asset('images/moutee.png') }}" alt="Hiking on Kilimanjaro" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                                </div>
                                </div>
                                </div>
                                </div>
                <!-- Zanzibar -->
                <div class="group nav-item">
                    <a href="zanzibar" class="font-semibold text-gray-800 nav-link">Services</a>
                    <div class="nav-dropdown hidden group-hover:block">
                        <div class="max-w-7xl mx-auto p-6 flex">
                            <div class="w-1/4 pr-4">
                                <div class="bg-gray-100 rounded-lg">
                                    <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="zanzibar-beaches">
                                        <a href="zanzibar" class="text-gray-700 hover:text-blue-600 font-medium">ICT solution</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="stone-town">
                                        <a href="zanzibar" class="text-gray-700 hover:text-blue-600">Software & Business system</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="spice-tours">
                                        <a href="zanzibar" class="text-gray-700 hover:text-blue-600">Printing and Branding</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="boat-trips">
                                        <a href="zanzibar" class="text-gray-700 hover:text-blue-600">Automation & Control</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="cultural-tours">
                                        <a href="zanzibar" class="text-gray-700 hover:text-blue-600">Cultural Tours</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-2/4 px-8">
                                <h2 class="text-3xl font-medium text-gray-800 mb-4">ICT SOLUTION</h2>
                                <p class="text-gray-600 mb-6">
                                    DWebsite design and hosting, software development and business 
operating systems, ICT solutions and consultancy, networking and 
structured cabling, social media management.
                                </p>
                                <a href="zanzibar" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                    Explore  <span class="ml-1">→</span>
                                </a>
                            </div>
                            <div class="w-1/4 pl-4">
                                <img src="{{ asset('images/vintage 3.png') }}"alt="Zanzibar Island" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
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
                                        <a href="about" class="text-gray-700 hover:text-blue-600 font-medium">Our Partners</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="our-story">
                                        <a href="about" class="text-gray-700 hover:text-blue-600">Our Clients</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="early-beginnings">
                                        <a href="about" class="text-gray-700 hover:text-blue-600">Testmonial</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="our-guides">
                                        <a href="guider" class="text-gray-700 hover:text-blue-600">Our Team</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-2/4 px-8">
                                <h2 class="text-3xl font-medium text-gray-800 mb-4">Parteners & Clients</h2>
                               <p class="text-gray-600 mb-6">
    Learn about our mission, vision, and the passionate team behind our exceptional Tanzania safari and adventure experiences.
</p>
                                <a href="about" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
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
                    <a href="#" class="font-semibold text-gray-800 nav-link">Blog</a>
                    <div class="nav-dropdown hidden group-hover:block">
                        <div class="max-w-7xl mx-auto p-6 flex">
                            <div class="w-1/4 pr-4">
                                <div class="bg-gray-100 rounded-lg">
                                    <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="travel-tips">
                                        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Tech News</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="wildlife-stories">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Articles</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="kilimanjaro-insights">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Case Study</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="culture-traditions">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Training & knowledge Base</a>
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
                              <a href="#" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
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
                    <a href="contact" class="font-semibold text-gray-800 nav-link">Careers</a>
                    <div class="nav-dropdown hidden group-hover:block">
                        <div class="max-w-7xl mx-auto p-6 flex">
                            <div class="w-1/4 pr-4">
                                <div class="bg-gray-100 rounded-lg">
                                    <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="contact-info">
                                        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Open position</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="office-locations">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Intership Program</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="booking-inquiries">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Apply Online</a>
                                    </div>
                                 
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="careers">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Career Opportunities</a>
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
<a href="careers" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
    View Opportunities <span class="ml-1">→</span>
</a>
                            </div>
                            <div class="w-1/4 pl-4">
                                <img src="{{ asset('images/tz.png') }}"alt="Contact Us" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>


                 <div class="group nav-item">
                    <a href="contact" class="font-semibold text-gray-800 nav-link">Project</a>
                    <div class="nav-dropdown hidden group-hover:block">
                        <div class="max-w-7xl mx-auto p-6 flex">
                            <div class="w-1/4 pr-4">
                                <div class="bg-gray-100 rounded-lg">
                                    <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="contact-info">
                                        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Completed Project</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="office-locations">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Case Study</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="booking-inquiries">
                                        <a href="#" class="text-gray-700 hover:text-blue-600"> Client Success Stories</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="partnerships">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Portifolio</a>
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
                                <a href="#" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
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
                    <a href="contact" class="font-semibold text-gray-800 nav-link">Contact us</a>
                    <div class="nav-dropdown hidden group-hover:block">
                        <div class="max-w-7xl mx-auto p-6 flex">
                            <div class="w-1/4 pr-4">
                                <div class="bg-gray-100 rounded-lg">
                                    <div class="p-4 border-l-4 border-blue-600 mb-2 bg-blue-50 sidebar-link" data-section="contact-info">
                                        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Contact form</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="office-locations">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Office Location</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="booking-inquiries">
                                        <a href="#" class="text-gray-700 hover:text-blue-600"> Support Request</a>
                                    </div>
                                    <div class="p-4 hover:bg-blue-50 hover:border-l-4 hover:border-blue-600 transition-all sidebar-link" data-section="partnerships">
                                        <a href="#" class="text-gray-700 hover:text-blue-600">Request Consultation</a>
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
                                <a href="#" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700">
                                    Contact Us Now<span class="ml-1">→</span>
                                </a>
                            </div>
                            <div class="w-1/4 pl-4">
                                <img src="{{ asset('images/tz.png') }}"alt="Contact Us" class="rounded-lg w-full h-auto object-cover shadow-md" loading="lazy">
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
                <a href="#" class="nav-link">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
                <a href="#" class="nav-link">
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
                <a href="#" class="nav-link">
                    <i class="fas fa-newspaper"></i>
                    <span>Blog</span>
                </a>
                <a href="#" class="nav-link">
                    <i class="fas fa-handshake"></i>
                    <span>Partners</span>
                </a>
                <a href="#" class="nav-link">
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
            loading="lazy"  <!-- Optional: Lazy-load offscreen images -->
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
               <a href="#booking" class="mt-8 inline-block" style="background: var(--ink); color: white; font-weight: bold; padding: 0.75rem 2rem; border-radius: 9999px; font-size: 1.125rem; transition: all 0.2s ease; box-shadow: var(--shadow-lg);" 
   onmouseover="this.style.background='#283593'" 
   onmouseout="this.style.background='var(--ink)'">
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

<script>
// Dynamic content for navigation dropdowns
const contentData = {
    // Home dropdown content
    'kilimanjaro-slopes': {
        title: 'Complete Safari Experience',
        description: 'Discover our comprehensive safari packages covering Tanzania\'s most spectacular national parks. From Serengeti\'s great migration to Ngorongoro\'s crater, experience the best of African wildlife.',
        buttonText: 'View All Safaris',
        buttonLink: '/viewsafar',
        image: '{{ asset("images/tents222.png") }}',
        imageAlt: 'Tanzania Safari Experience'
    },
    'one-day-safari': {
        title: 'Quick Safari Adventures',
        description: 'Perfect for tight schedules! Our day trips offer exciting wildlife encounters in just a few hours. Visit nearby national parks and return with unforgettable memories.',
        buttonText: 'Book Day Trip',
        buttonLink: 'daytrip',
        image: '{{ asset("images/HOME.jpg") }}',
        imageAlt: 'Day Safari Adventure'
    },
    'moshi-excursions': {
        title: 'Moshi Area Explorations',
        description: 'Explore the beauty around Moshi town with guided excursions to waterfalls, coffee plantations, and cultural villages. Experience local life and stunning landscapes.',
        buttonText: 'Explore Excursions',
        buttonLink: 'lemosho',
        image: '{{ asset("images/moutee.png") }}',
        imageAlt: 'Moshi Area Excursions'
    },
    
    // About us dropdown content
    'multi-day-safari': {
        title: 'Our Company Story',
        description: 'Founded with a vision to deliver excellence, Milele Technologies has grown into a leading multidisciplinary technology solutions provider in Tanzania.',
        buttonText: 'Learn More',
        buttonLink: 'kilimajaro',
        image: '{{ asset("images/logo222.png") }}',
        imageAlt: 'Milele Technologies Company'
    },
    'wildlife-photography': {
        title: 'Core Values & Principles',
        description: 'Innovation, integrity, and excellence drive everything we do. We are committed to delivering sustainable technology solutions that transform businesses.',
        buttonText: 'Our Values',
        buttonLink: 'lemosho',
        image: '{{ asset("images/vintage 3.png") }}',
        imageAlt: 'Core Values and Innovation'
    },
    'serengeti-migration': {
        title: 'Meet Our Expert Team',
        description: 'Our diverse team of engineers, developers, and consultants brings together decades of experience in ICT, engineering, and industrial solutions.',
        buttonText: 'Meet The Team',
        buttonLink: 'rongai',
        image: '{{ asset("images/calvin founder 3.png") }}',
        imageAlt: 'Expert Professional Team'
    },
    
    // Services dropdown content
    'zanzibar-beaches': {
        title: 'Comprehensive ICT Solutions',
        description: 'End-to-end information technology services including network infrastructure, cloud solutions, cybersecurity, and IT support for businesses of all sizes.',
        buttonText: 'Explore ICT Services',
        buttonLink: 'zanzibar',
        image: '{{ asset("images/tents222.png") }}',
        imageAlt: 'ICT Solutions and Services'
    },
    'stone-town': {
        title: 'Software & Business Systems',
        description: 'Custom software development, ERP systems, and business automation solutions designed to streamline your operations and boost productivity.',
        buttonText: 'Software Solutions',
        buttonLink: 'zanzibar',
        image: '{{ asset("images/vintage 3.png") }}',
        imageAlt: 'Software Development Solutions'
    },
    'spice-tours': {
        title: 'Professional Printing & Branding',
        description: 'High-quality printing services and comprehensive branding solutions including logo design, marketing materials, and corporate identity development.',
        buttonText: 'Branding Services',
        buttonLink: 'zanzibar',
        image: '{{ asset("images/logo222.png") }}',
        imageAlt: 'Professional Printing Services'
    },
    'boat-trips': {
        title: 'Automation & Control Systems',
        description: 'Industrial automation solutions including PLC programming, SCADA systems, and smart manufacturing technologies for enhanced efficiency.',
        buttonText: 'Automation Solutions',
        buttonLink: 'zanzibar',
        image: '{{ asset("images/moutee.png") }}',
        imageAlt: 'Automation Control Systems'
    },
    
    // Partners dropdown content
    'get-to-know-us': {
        title: 'Strategic Partnerships',
        description: 'We collaborate with leading technology providers and industry experts to deliver cutting-edge solutions that meet international standards.',
        buttonText: 'Our Partners',
        buttonLink: 'about',
        image: '{{ asset("images/logo222.png") }}',
        imageAlt: 'Strategic Technology Partners'
    },
    'our-story': {
        title: 'Valued Client Relationships',
        description: 'Serving diverse industries across Tanzania, our clients trust us for reliable, innovative, and cost-effective technology solutions.',
        buttonText: 'Client Portfolio',
        buttonLink: 'about',
        image: '{{ asset("images/tz.png") }}',
        imageAlt: 'Valued Client Portfolio'
    },
    'early-beginnings': {
        title: 'Success Stories & Testimonials',
        description: 'Hear from our satisfied clients about how our solutions have transformed their businesses and delivered measurable results.',
        buttonText: 'Read Testimonials',
        buttonLink: 'about',
        image: '{{ asset("images/calvin founder 3.png") }}',
        imageAlt: 'Client Success Stories'
    },
    'our-guides': {
        title: 'Expert Professional Team',
        description: 'Our certified professionals bring expertise in ICT, engineering, project management, and customer service to every project.',
        buttonText: 'Meet Our Team',
        buttonLink: 'guider',
        image: '{{ asset("images/moutee.png") }}',
        imageAlt: 'Professional Expert Team'
    },
    
    // Blog dropdown content
    'travel-tips': {
        title: 'Latest Technology News',
        description: 'Stay informed about the latest developments in ICT, emerging technologies, and digital transformation trends shaping the industry.',
        buttonText: 'Read Tech News',
        buttonLink: '#',
        image: '{{ asset("images/vintage 3.png") }}',
        imageAlt: 'Latest Technology News'
    },
    'wildlife-stories': {
        title: 'Expert Articles & Insights',
        description: 'In-depth articles written by our experts covering technology best practices, industry insights, and practical implementation guides.',
        buttonText: 'Browse Articles',
        buttonLink: '#',
        image: '{{ asset("images/calvin founder 3.png") }}',
        imageAlt: 'Expert Technology Articles'
    },
    'kilimanjaro-insights': {
        title: 'Detailed Case Studies',
        description: 'Real-world examples of how our solutions have helped businesses overcome challenges and achieve their technology goals.',
        buttonText: 'View Case Studies',
        buttonLink: '#',
        image: '{{ asset("images/tents222.png") }}',
        imageAlt: 'Technology Case Studies'
    },
    'culture-traditions': {
        title: 'Training & Knowledge Base',
        description: 'Comprehensive training resources, tutorials, and documentation to help you make the most of our technology solutions.',
        buttonText: 'Access Resources',
        buttonLink: '#',
        image: '{{ asset("images/logo222.png") }}',
        imageAlt: 'Training Resources'
    },
    
    // Careers dropdown content
    'contact-info': {
        title: 'Current Open Positions',
        description: 'Explore exciting career opportunities at Milele Technologies. We\'re looking for talented professionals passionate about technology and innovation.',
        buttonText: 'View Positions',
        buttonLink: '#',
        image: '{{ asset("images/tz.png") }}',
        imageAlt: 'Career Opportunities'
    },
    'office-locations': {
        title: 'Internship Programs',
        description: 'Kickstart your career with our comprehensive internship programs designed for students and recent graduates seeking hands-on experience.',
        buttonText: 'Apply for Internship',
        buttonLink: '#',
        image: '{{ asset("images/calvin founder 3.png") }}',
        imageAlt: 'Internship Programs'
    },
    'booking-inquiries': {
        title: 'Online Application Portal',
        description: 'Quick and easy online application process. Submit your resume and join our talent pool for future opportunities.',
        buttonText: 'Apply Online',
        buttonLink: '#',
        image: '{{ asset("images/logo222.png") }}',
        imageAlt: 'Online Application Portal'
    },
    'careers': {
        title: 'Career Development Opportunities',
        description: 'Grow with us! We offer continuous learning, professional development, and clear career progression paths for our team members.',
        buttonText: 'Career Growth',
        buttonLink: '#',
        image: '{{ asset("images/moutee.png") }}',
        imageAlt: 'Career Development'
    },
    
    // Project dropdown content
    'contact-info': {
        title: 'Successfully Completed Projects',
        description: 'Browse our portfolio of successfully delivered projects across various industries including hospitality, healthcare, education, and manufacturing.',
        buttonText: 'Completed Projects',
        buttonLink: '#',
        image: '{{ asset("images/tents222.png") }}',
        imageAlt: 'Completed Technology Projects'
    },
    'office-locations': {
        title: 'Detailed Case Studies',
        description: 'In-depth analysis of challenging projects and how our innovative solutions delivered exceptional results for our clients.',
        buttonText: 'Case Studies',
        buttonLink: '#',
        image: '{{ asset("images/vintage 3.png") }}',
        imageAlt: 'Project Case Studies'
    },
    'booking-inquiries': {
        title: 'Client Success Stories',
        description: 'Real stories from satisfied clients who have transformed their operations with our technology solutions and services.',
        buttonText: 'Success Stories',
        buttonLink: '#',
        image: '{{ asset("images/calvin founder 3.png") }}',
        imageAlt: 'Client Success Stories'
    },
    'partnerships': {
        title: 'Project Portfolio',
        description: 'Comprehensive showcase of our technical capabilities and expertise demonstrated through diverse projects across multiple sectors.',
        buttonText: 'View Portfolio',
        buttonLink: '#',
        image: '{{ asset("images/tz.png") }}',
        imageAlt: 'Project Portfolio Showcase'
    },
    
    // Contact us dropdown content
    'contact-info': {
        title: 'Contact Form',
        description: 'Send us a message directly through our secure contact form. We typically respond within 24 hours and will address your inquiry promptly.',
        buttonText: 'Send Message',
        buttonLink: '#',
        image: '{{ asset("images/logo222.png") }}',
        imageAlt: 'Contact Form'
    },
    'office-locations': {
        title: 'Visit Our Office',
        description: 'Stop by our headquarters in Arusha for a personal consultation. Our team is ready to discuss your technology needs in detail.',
        buttonText: 'Get Directions',
        buttonLink: '#',
        image: '{{ asset("images/tz.png") }}',
        imageAlt: 'Office Location'
    },
    'booking-inquiries': {
        title: 'Technical Support Request',
        description: 'Need immediate assistance? Submit a support request and our technical team will help resolve your issues quickly and efficiently.',
        buttonText: 'Request Support',
        buttonLink: '#',
        image: '{{ asset("images/calvin founder 3.png") }}',
        imageAlt: 'Technical Support'
    },
    'partnerships': {
        title: 'Request Consultation',
        description: 'Schedule a comprehensive consultation with our experts to explore how our solutions can transform your business operations.',
        buttonText: 'Book Consultation',
        buttonLink: '#',
        image: '{{ asset("images/vintage 3.png") }}',
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
                        const imageArea = dropdown.querySelector('.w-1\\/4');
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

</body>
</html>