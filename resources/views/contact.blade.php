@extends('layouts.app')

@section('title', 'Contact Us - Milele Technologies')

@section('content')
<div class="relative hero-section h-screen w-full overflow-hidden" style="min-height: 600px;">
    <img
        src="{{ asset('images/HOME.jpg') }}"
        alt="Contact Background"
        class="absolute inset-0 w-full h-full object-cover"
        fetchpriority="high"
        loading="eager"
        decoding="async"
    >
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
            <p class="text-2xl md:text-3xl mb-8">Let's discuss your ICT, engineering, and automation needs</p>

            <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                <center>
                    <p class="text-xl font-medium">We typically respond within 24 hours</p>
                </center>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-100 py-3">
    <div class="container mx-auto px-4">
        <div class="flex items-center text-sm">
            <a href="/" class="text-gray-600 hover:text-blue-600">Home</a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-800 font-medium">Contact</span>
        </div>
    </div>
</div>

<main class="container mx-auto px-4 py-12">
    <div class="max-w-6xl mx-auto">
        @if (session('success'))
            <div class="mb-8 rounded-xl border border-green-200 bg-green-50 px-6 py-4 text-green-800 font-semibold">
                {{ session('success') }}
            </div>
        @endif

        <section class="scroll-mt-24">
            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-headset text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-gray-900">Get In Touch</h2>
                        <p class="text-gray-700 mt-2">Reach out for quotations, partnerships, support requests, or consultations. Our team is ready to help.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Leadership Team Cards from PDF -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <!-- Technical Director: George Lyimo -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-microchip text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <div class="text-lg font-bold text-gray-900">George Lyimo</div>
                        <div class="text-sm text-blue-600 font-medium mb-2">Technical Director</div>
                        <div class="mt-2 text-sm text-gray-700 space-y-1">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-phone-alt text-blue-500 w-4"></i>
                                <a href="tel:+255716693327" class="hover:text-blue-600">+255 716 693 327</a>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-envelope text-blue-500 w-4"></i>
                                <a href="mailto:george@mileletechnologies.com" class="hover:text-blue-600">george@mileletechnologies.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Commercial & Sales Director: Augustine Kiganga -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-chart-line text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <div class="text-lg font-bold text-gray-900">Augustine Kiganga</div>
                        <div class="text-sm text-blue-600 font-medium mb-2">Commercial & Sales Director</div>
                        <div class="mt-2 text-sm text-gray-700 space-y-1">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-phone-alt text-blue-500 w-4"></i>
                                <a href="tel:+255787830611" class="hover:text-blue-600">+255 787 830 611</a>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-envelope text-blue-500 w-4"></i>
                                <a href="mailto:kiganga@mileletechnologies.com" class="hover:text-blue-600">kiganga@mileletechnologies.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Commercial & Operations Director: Daniel Mayala -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-cogs text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <div class="text-lg font-bold text-gray-900">Daniel Mayala</div>
                        <div class="text-sm text-blue-600 font-medium mb-2">Commercial & Operations Director</div>
                        <div class="mt-2 text-sm text-gray-700 space-y-1">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-phone-alt text-blue-500 w-4"></i>
                                <a href="tel:+255762666763" class="hover:text-blue-600">+255 762 666 763</a>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-envelope text-blue-500 w-4"></i>
                                <a href="mailto:dmayala@mileletechnologies.com" class="hover:text-blue-600">dmayala@mileletechnologies.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Info Cards -->
        <section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
            <!-- Office Card -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900">Office</div>
                        <div class="mt-1 text-sm text-gray-600">P.O. Box 8102, Njiro Complex, Arusha</div>
                    </div>
                </div>
            </div>

            <!-- Email Card -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900">Email</div>
                        <div class="mt-1 text-sm text-blue-600">
                            <a href="mailto:info@mileletechnologies.com">info@mileletechnologies.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Website Card -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900">Website</div>
                        <div class="mt-1 text-sm text-blue-600">
                            <a href="https://www.mileletechnologies.com" target="_blank">www.mileletechnologies.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Support Card -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900">Support</div>
                        <div class="mt-1 text-sm text-gray-600">24/7 emergency support</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content Grid: Contact Form + Working Hours -->
        <section id="contact-form" class="grid grid-cols-1 lg:grid-cols-5 gap-8 scroll-mt-24">
            <!-- Contact Form - 3 columns -->
            <div class="lg:col-span-3">
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                            <i class="fas fa-paper-plane text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">Send a message</h2>
                            <p class="text-gray-700 mt-1">Fill the form below and we'll get back to you within 24 hours.</p>
                        </div>
                    </div>

                    <form action="{{ url('/contact') }}" method="POST" class="space-y-5">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-800 mb-2" for="name">Full name</label>
                                <input id="name" name="name" type="text" required class="w-full rounded-lg border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-600" />
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-800 mb-2" for="email">Email</label>
                                <input id="email" name="email" type="email" required class="w-full rounded-lg border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-600" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-2" for="subject">Subject</label>
                            <input id="subject" name="subject" type="text" required class="w-full rounded-lg border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-600" />
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-2" for="message">Message</label>
                            <textarea id="message" name="message" rows="6" required class="w-full rounded-lg border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-3 sm:items-center">
                            <button type="submit" class="inline-flex items-center justify-center rounded-lg bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 font-semibold transition-colors">
                                Send Message <span class="ml-2">→</span>
                            </button>
                            <a href="mailto:info@mileletechnologies.com" class="inline-flex items-center justify-center rounded-lg bg-white hover:bg-blue-50 text-blue-700 px-6 py-3 font-semibold border border-blue-200 transition-colors">
                                Email Us Directly
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Column: Working Hours Card (2 columns) -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Working Hours Card - Dedicated card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-8">
                        <div class="flex items-start gap-4 mb-6">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                                <i class="fas fa-clock text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900">Working Hours</h3>
                                <p class="text-gray-600 mt-1">We're here when you need us</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                <span class="font-medium text-gray-700">Monday - Friday</span>
                                <span class="text-gray-900 font-semibold">8:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                <span class="font-medium text-gray-700">Saturday</span>
                                <span class="text-gray-900 font-semibold">9:00 AM - 2:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                <span class="font-medium text-gray-700">Sunday</span>
                                <span class="text-gray-900 font-semibold">Closed</span>
                            </div>
                            <div class="flex justify-between items-center pt-2">
                                <span class="font-medium text-gray-700">Emergency Support</span>
                                <span class="text-green-600 font-semibold bg-green-50 px-3 py-1 rounded-full text-sm">24/7 Available</span>
                            </div>
                        </div>

                        <div class="mt-6 bg-blue-50 rounded-lg p-4">
                            <p class="text-sm text-gray-700">
                                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                                For urgent technical issues outside business hours, please call our emergency support line.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Quick Contact Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-6 bg-gradient-to-r from-blue-600 to-blue-700 text-white">
                        <h4 class="text-xl font-bold mb-2">Need immediate assistance?</h4>
                        <p class="text-blue-100">Call our technical team directly</p>
                    </div>
                    <div class="p-6 space-y-4">
                        <a href="tel:+255716693327" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-blue-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-phone-alt text-blue-600"></i>
                                <span class="font-medium">Technical Support</span>
                            </div>
                            <span class="text-blue-600">+255 716 693 327</span>
                        </a>
                        <a href="tel:+255787830611" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-blue-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-chart-line text-blue-600"></i>
                                <span class="font-medium">Sales Inquiry</span>
                            </div>
                            <span class="text-blue-600">+255 787 830 611</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Square Map Section - Njiro Complex Focus -->
        <section class="mt-10">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6 border-b border-gray-100">
                    <div class="flex items-center justify-between flex-wrap gap-4">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-map-marked-alt text-2xl text-blue-600"></i>
                            <h3 class="text-2xl font-bold text-gray-900">Our Location</h3>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-location-dot text-blue-600"></i> Njiro Complex Area
                            </span>
                            <a href="https://www.google.com/maps/search/?api=1&query=Njiro+Complex,Arusha,Tanzania" 
                               target="_blank" 
                               class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 font-medium">
                                <i class="fas fa-external-link-alt"></i>
                                View larger map
                            </a>
                        </div>
                    </div>
                    <p class="text-gray-600 mt-1">Visit our headquarters near Njiro Complex, Arusha, Tanzania</p>
                </div>
                
                <!-- Square Map Container (1:1 aspect ratio) - Centered on Njiro with surrounding areas -->
                <div class="aspect-square w-full bg-gray-100 relative">
                    <iframe
                        title="Milele Technologies Location - Njiro Complex, Arusha with Surrounding Areas"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510382.9087625485!2d36.416670949999996!3d-3.366667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371dae8b1e5c5b%3A0xc3b3e5a9d5b5b5b5!2sNjiro%20Complex!5e0!3m2!1sen!2stz!4v1700000000000!5m2!1sen!2stz"
                        class="w-full h-full"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    
                    <!-- Custom Map Marker Overlay -->
                    <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm rounded-lg shadow-lg p-3 text-sm max-w-[200px]">
                        <div class="font-bold text-blue-700 mb-1">📍 You are here</div>
                        <div class="text-gray-700 text-xs">Njiro Complex<br>Arusha, Tanzania</div>
                    </div>
                </div>
                
                <!-- Location Details with Njiro Complex Reference -->
                <div class="p-5 bg-gray-50 border-t border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="md:col-span-2 flex items-start gap-3">
                            <i class="fas fa-map-pin text-blue-600 text-xl mt-1"></i>
                            <div>
                                <div class="font-semibold text-gray-900">Headquarters</div>
                                <div class="text-gray-700">P.O. Box 8102, Njiro Complex, Arusha, Tanzania</div>
                                <div class="text-xs text-gray-500 mt-1">Located near Njiro Shopping Centre, opposite Njiro Roundabout</div>
                            </div>
                        </div>
                        <div class="flex md:justify-end items-center gap-2">
                            <a href="https://www.google.com/maps/dir/?api=1&destination=Njiro+Complex,Arusha,Tanzania" 
                               target="_blank"
                               class="inline-flex items-center gap-1 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-lg transition-colors text-sm font-medium w-full md:w-auto justify-center">
                                <i class="fas fa-directions"></i>
                                Get Directions
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Nearby Areas Grid (from your image) -->
                <div class="p-5 border-t border-gray-200">
                    <div class="text-sm font-medium text-gray-700 mb-3">
                        <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>
                        Nearby Areas:
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-2">
                        <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full text-xs text-center">Ngorongoro</span>
                        <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full text-xs text-center">Selela</span>
                        <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full text-xs text-center">Mbulumbulu</span>
                        <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full text-xs text-center">Karatu</span>
                        <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full text-xs text-center">Mto Wa Mbu</span>
                        <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full text-xs text-center">Makuyuni</span>
                        <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full text-xs text-center">Lake Manyara</span>
                        <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full text-xs text-center">Usa River</span>
                        <span class="bg-blue-100 text-blue-700 px-3 py-1.5 rounded-full text-xs text-center font-semibold">Njiro Complex</span>
                        <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full text-xs text-center">Boma Ng'ombe</span>
                        <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full text-xs text-center">Marangu</span>
                        <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full text-xs text-center">Taveta</span>
                        <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full text-xs text-center">Machame</span>
                        <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full text-xs text-center">Mererani</span>
                        <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full text-xs text-center">Manjali</span>
                    </div>
                </div>
                
                <!-- Map Data Attribution (from your image) -->
                <div class="px-5 pb-4 flex justify-between items-center text-xs text-gray-500">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-map"></i>
                        <span>Map data ©2026 Google</span>
                        <span class="mx-1">•</span>
                        <a href="#" class="hover:text-blue-600">Terms</a>
                    </div>
                    <div class="flex items-center gap-1">
                        <i class="fas fa-location-dot text-blue-600"></i>
                        <span>Njiro Complex, Arusha</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Section from PDF -->
        <section class="mt-10 bg-white rounded-xl shadow-lg p-8">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Our Trusted Partners & Clients</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="text-center p-3 bg-gray-50 rounded-lg text-sm font-medium text-gray-700">Apex Electrics LTD</div>
                <div class="text-center p-3 bg-gray-50 rounded-lg text-sm font-medium text-gray-700">Savannah Explore</div>
                <div class="text-center p-3 bg-gray-50 rounded-lg text-sm font-medium text-gray-700">Orangi Hotels</div>
                <div class="text-center p-3 bg-gray-50 rounded-lg text-sm font-medium text-gray-700">Lenny Hotel</div>
                <div class="text-center p-3 bg-gray-50 rounded-lg text-sm font-medium text-gray-700">Maalum Zanzibar</div>
                <div class="text-center p-3 bg-gray-50 rounded-lg text-sm font-medium text-gray-700">Under The Shade</div>
                <div class="text-center p-3 bg-gray-50 rounded-lg text-sm font-medium text-gray-700">Babylon Lodge</div>
                <div class="text-center p-3 bg-gray-50 rounded-lg text-sm font-medium text-gray-700">Dytech Technology</div>
                <div class="text-center p-3 bg-gray-50 rounded-lg text-sm font-medium text-gray-700">Cherith Junior Schools</div>
                <div class="text-center p-3 bg-gray-50 rounded-lg text-sm font-medium text-gray-700">Doron Training Center</div>
                <div class="text-center p-3 bg-gray-50 rounded-lg text-sm font-medium text-gray-700">Apex Prowler Safaris</div>
                <div class="text-center p-3 bg-gray-50 rounded-lg text-sm font-medium text-gray-700">GM Engineering</div>
            </div>
        </section>
    </div>
</main>
@endsection

@push('styles')
<style>
/* Hero section enhancements */
.hero-section {
    position: relative;
}

.hero-section::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 4rem;
    background: linear-gradient(to top, rgba(255,255,255,0.1), transparent);
    pointer-events: none;
}

/* Smooth transitions */
.bg-white {
    transition: all 0.3s ease;
}

/* Card hover effects */
.hover\:shadow-xl:hover {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Map container */
.aspect-square {
    aspect-ratio: 1 / 1;
}

iframe {
    filter: grayscale(0.2) contrast(1.1);
    transition: filter 0.3s ease;
}

iframe:hover {
    filter: grayscale(0) contrast(1);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .hero-section {
        min-height: 400px;
    }
}
</style>
@endpush