@extends('layouts.app')

@section('title', 'Power Systems - Milele Technologies')

@section('content')

<!-- Hero Section -->
<div class="relative hero-section h-screen w-full overflow-hidden">
    <img
        src="{{ asset('images/HOME.jpg') }}"
        alt="Power Systems"
        class="absolute inset-0 w-full h-full object-cover"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-blue-800/60"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Power Systems</h1>
            <p class="text-xl md:text-2xl mb-8">Reliable Energy Solutions for Uninterrupted Operations</p>
            <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                <p class="text-lg font-medium">Solar Power • Backup Systems • Energy Management</p>
            </div>
            <a href="javascript:void(0)" class="mt-8 inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full text-lg transition-colors shadow-lg" onclick="openQuoteModal()">
                GET POWER CONSULTATION
            </a>
        </div>
    </div>
</div>

<!-- Breadcrumbs -->
<div class="bg-gray-100 py-3">
    <div class="container mx-auto px-4">
        <div class="flex items-center text-sm">
            <a href="/" class="text-blue-600 hover:underline">Home</a>
            <span class="mx-2 text-gray-400">›</span>
            <a href="/services" class="text-blue-600 hover:underline">Services</a>
            <span class="mx-2 text-gray-400">›</span>
            <span class="text-gray-600">Power Systems</span>
        </div>
    </div>
</div>

<!-- Main Content -->
<main class="container mx-auto px-4 py-12">
    <div class="flex flex-col lg:flex-row gap-12">
        <!-- Left Column - Service Details -->
        <div class="lg:w-2/3">
            <div class="prose max-w-none">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Power Your Business with Reliable Energy Solutions</h2>
                <p class="text-lg text-gray-700 mb-8 leading-relaxed">Milele Technologies provides comprehensive power systems solutions designed to ensure uninterrupted operations, reduce energy costs, and promote sustainability. From solar installations to backup power systems, we deliver reliable energy infrastructure tailored to your specific needs.</p>

                <!-- Service Overview -->
                <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-lg mb-12">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Why Choose Our Power Services?</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">Renewable energy expertise</span>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">Cost-effective solutions</span>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">24/7 monitoring and maintenance</span>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">Certified electrical engineers</span>
                        </div>
                    </div>
                </div>

                <!-- Service Tabs -->
                <div class="mb-12">
                    <div class="package-tabs">
                        <div class="package-tab active" onclick="showService('solar')">Solar Power</div>
                        <div class="package-tab" onclick="showService('backup')">Backup Power</div>
                        <div class="package-tab" onclick="showService('distribution')">Power Distribution</div>
                        <div class="package-tab" onclick="showService('management')">Energy Management</div>
                    </div>

                    <!-- Solar Power Systems -->
                    <div id="service-solar" class="service-content">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">Solar Power Systems</h3>
                                    <p class="text-gray-700 text-lg">Harness the power of the sun with our professional solar installation services, designed to reduce your energy costs and environmental footprint.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Solar Installation Services</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Site Assessment:</strong> Comprehensive solar feasibility studies
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>System Design:</strong> Custom solar system engineering
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Professional Installation:</strong> Expert solar panel installation
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Grid Connection:</strong> Seamless utility grid integration
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Solar Solutions</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Commercial Solar:</strong> Large-scale solar installations
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Residential Solar:</strong> Home solar system solutions
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Solar Water Heating:</strong> Solar thermal systems
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Maintenance Services:</strong> Ongoing solar system care
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Backup Power Systems -->
                    <div id="service-backup" class="service-content hidden">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-battery-full"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">Backup Power Systems</h3>
                                    <p class="text-gray-700 text-lg">Ensure business continuity with reliable backup power solutions that keep your operations running during grid outages and emergencies.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Backup Solutions</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>UPS Systems:</strong> Uninterruptible power supply units
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Generator Installation:</strong> Diesel and gas generators
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Battery Storage:</strong> Advanced battery backup systems
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Automatic Transfer Switches:</strong> Seamless power transfer
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Power Assurance</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Load Analysis:</strong> Critical power requirement assessment
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Redundancy Planning:</strong> Multi-level backup strategies
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Monitoring Systems:</strong> 24/7 backup power monitoring
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Maintenance Programs:</strong> Regular testing and servicing
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Power Distribution -->
                    <div id="service-distribution" class="service-content hidden">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-plug"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">Power Distribution & Electrical</h3>
                                    <p class="text-gray-700 text-lg">Professional electrical infrastructure services ensuring safe, efficient, and compliant power distribution throughout your facility.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Distribution Services</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Panel Installation:</strong> Electrical panel upgrades and installation
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Circuit Design:</strong> Optimized electrical circuit planning
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Wiring Services:</strong> Professional electrical wiring
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Safety Inspections:</strong> Comprehensive electrical safety checks
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Electrical Solutions</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Load Balancing:</strong> Optimal power load distribution
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Surge Protection:</strong> Power surge protection systems
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Grounding Systems:</strong> Proper electrical grounding
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Code Compliance:</strong> Electrical code compliance services
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Energy Management -->
                    <div id="service-management" class="service-content hidden">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">Energy Management & Monitoring</h3>
                                    <p class="text-gray-700 text-lg">Smart energy management solutions that help you monitor, control, and optimize your power consumption for maximum efficiency and cost savings.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Management Systems</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Energy Monitoring:</strong> Real-time power usage analytics
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Smart Meters:</strong> Advanced metering infrastructure
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Load Analysis:</strong> Detailed consumption pattern analysis
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Cost Optimization:</strong> Energy cost reduction strategies
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Optimization Features</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Predictive Maintenance:</strong> AI-powered system health monitoring
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Demand Response:</strong> Smart demand management
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Efficiency Reports:</strong> Detailed energy efficiency analytics
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Alert Systems:</strong> Real-time anomaly detection
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Process Section -->
                <div class="mb-12">
                    <h3 class="text-3xl font-bold mb-8 text-gray-900">Our Power System Implementation Process</h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">1</span>
                            </div>
                            <h4 class="font-bold mb-2">Energy Audit</h4>
                            <p class="text-gray-600 text-sm">Comprehensive assessment of your current power needs and consumption</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">2</span>
                            </div>
                            <h4 class="font-bold mb-2">System Design</h4>
                            <p class="text-gray-600 text-sm">Custom power solution architecture optimized for your requirements</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">3</span>
                            </div>
                            <h4 class="font-bold mb-2">Installation</h4>
                            <p class="text-gray-600 text-sm">Professional installation with minimal operational disruption</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">4</span>
                            </div>
                            <h4 class="font-bold mb-2">Monitoring</h4>
                            <p class="text-gray-600 text-sm">Ongoing performance monitoring and preventive maintenance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column - Contact Sidebar -->
        <div class="lg:w-1/3">
            <div class="bg-white rounded-xl shadow-lg sticky top-24">
                <!-- Contact Form -->
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Get Power Consultation</h3>

                    <form action="{{ route('quote.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input type="text" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <input type="tel" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Power Service Interest</label>
                            <select name="service" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="">Select a service</option>
                                <option value="power" selected>Power Systems</option>
                                <option value="solar">Solar Power</option>
                                <option value="backup">Backup Systems</option>
                                <option value="distribution">Power Distribution</option>
                                <option value="management">Energy Management</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Project Details</label>
                            <textarea
                                placeholder="Tell us about your power requirements..."
                                name="message"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                rows="4"
                                required
                            ></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-md transition-colors">
                            REQUEST POWER CONSULTATION
                        </button>
                    </form>
                    <div class="mt-4 text-center">
                        <p class="text-sm text-gray-600">Or call us at <a href="tel:+255716693327" class="text-blue-600 font-medium">+255 716 693 327</a></p>
                    </div>
                </div>

                <!-- Why Choose Us -->
                <div class="bg-gray-50 p-6 rounded-b-xl">
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Why Choose Our Power Services?</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Certified electrical engineers</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">24/7 emergency support</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Quality equipment warranty</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Energy efficiency experts</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Competitive pricing</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="mt-8 bg-white p-6 rounded-xl shadow-lg">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Client Success Stories</h3>
                <div class="space-y-4">
                    <div class="border-l-4 border-blue-600 pl-4">
                        <p class="text-gray-700 italic">"The solar installation has reduced our energy costs by 60%. Excellent service and support!"</p>
                        <p class="text-gray-900 font-medium mt-2">- Grace Mwangi, Facility Director</p>
                    </div>
                    <div class="border-l-4 border-blue-600 pl-4">
                        <p class="text-gray-700 italic">"Reliable power solutions and outstanding technical support. They've been our trusted partner for years."</p>
                        <p class="text-gray-900 font-medium mt-2">- David Kim, Operations Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- CTA Section -->
<section class="py-16 bg-blue-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Optimize Your Power Systems?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Get in touch with our power experts today and discover how our energy solutions can reduce costs and ensure uninterrupted operations.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="javascript:void(0)" class="bg-white text-blue-600 hover:bg-gray-100 font-bold py-3 px-8 rounded-full text-lg transition-colors shadow-lg" onclick="openQuoteModal()">
                GET POWER CONSULTATION NOW
            </a>
            <a href="tel:+255716693327" class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-600 font-bold py-3 px-8 rounded-full text-lg transition-colors">
                CALL US NOW
            </a>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
.service-icon {
    width: 64px;
    height: 64px;
    background: linear-gradient(135deg, var(--accent) 0%, var(--ink-soft) 100%);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    margin-bottom: 1.5rem;
}

.service-feature {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
}

.service-feature i {
    color: var(--accent);
    margin-top: 0.125rem;
    flex-shrink: 0;
}

.service-feature div {
    flex: 1;
}

.package-tabs {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
    border-bottom: 2px solid var(--border);
    flex-wrap: wrap;
}

.package-tab {
    padding: 0.75rem 1.5rem;
    background: transparent;
    border: none;
    border-bottom: 3px solid transparent;
    cursor: pointer;
    font-weight: 600;
    color: var(--gray-600);
    transition: all 0.3s ease;
    position: relative;
}

.package-tab:hover {
    color: var(--accent);
    background-color: var(--accent-light);
}

.package-tab.active {
    color: var(--accent);
    border-bottom-color: var(--accent);
    background-color: var(--accent-light);
}

.service-content {
    display: block;
}

.service-content.hidden {
    display: none;
}

/* Responsive tabs for mobile */
@media (max-width: 767px) {
    .package-tabs {
        flex-direction: column;
        gap: 0.5rem;
        border-bottom: none;
        border-right: 2px solid var(--border);
        padding-right: 1rem;
        margin-bottom: 1rem;
    }
    
    .package-tab {
        border-bottom: none;
        border-right: 3px solid transparent;
        padding: 0.5rem 1rem;
    }
    
    .package-tab.active {
        border-right-color: var(--accent);
    }
    
    .package-tab:hover {
        background-color: var(--accent-light);
    }
}
</style>
@endpush

@push('scripts')
<script>
function showService(serviceType) {
    // Hide all service contents
    document.querySelectorAll('.service-content').forEach(el => {
        el.classList.add('hidden');
    });
    
    // Remove active class from all tabs
    document.querySelectorAll('.package-tab').forEach(el => {
        el.classList.remove('active');
    });
    
    // Show selected service content
    const selectedContent = document.getElementById('service-' + serviceType);
    if (selectedContent) {
        selectedContent.classList.remove('hidden');
    }
    
    // Add active class to clicked tab
    const activeTab = Array.from(document.querySelectorAll('.package-tab')).find(tab => 
        tab.getAttribute('onclick').includes(serviceType)
    );
    if (activeTab) {
        activeTab.classList.add('active');
    }
}

// Quote modal functions (inherited from layouts.app)
function openQuoteModal() {
    const modal = document.getElementById('quoteModal');
    if (!modal) return;

    const titleEl = document.getElementById('quoteModalTitle');
    const descEl = document.getElementById('quoteModalDescription');
    const serviceSelect = document.getElementById('quoteServiceSelect');

    // Set modal for Power consultation
    if (titleEl) titleEl.textContent = 'Power Systems Consultation';
    if (descEl) descEl.textContent = 'Tell us about your power requirements and we\'ll provide a tailored energy solution for your business.';
    if (serviceSelect) serviceSelect.value = 'power';

    modal.classList.remove('hidden');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
}
</script>
@endpush
