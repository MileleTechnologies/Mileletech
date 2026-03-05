@extends('layouts.app')

@section('title', 'Engineering Services - Milele Technologies')

@section('content')

<!-- Hero Section -->
<div class="relative hero-section h-screen w-full overflow-hidden">
    <img
        src="{{ asset('images/HOME.jpg') }}"
        alt="Engineering Services"
        class="absolute inset-0 w-full h-full object-cover"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-blue-800/60"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Engineering Services</h1>
            <p class="text-xl md:text-2xl mb-8">Comprehensive Engineering Solutions for Modern Infrastructure</p>
            <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                <p class="text-lg font-medium">Mechanical • Electrical • Civil • Project Management</p>
            </div>
            <a href="javascript:void(0)" class="mt-8 inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full text-lg transition-colors shadow-lg" onclick="openQuoteModal()">
                GET ENGINEERING CONSULTATION
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
            <span class="text-gray-600">Engineering Services</span>
        </div>
    </div>
</div>

<!-- Main Content -->
<main class="container mx-auto px-4 py-12">
    <div class="flex flex-col lg:flex-row gap-12">
        <!-- Left Column - Service Details -->
        <div class="lg:w-2/3">
            <div class="prose max-w-none">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Build Your Future with Expert Engineering Solutions</h2>
                <p class="text-lg text-gray-700 mb-8 leading-relaxed">Milele Technologies delivers comprehensive engineering services across mechanical, electrical, civil, and project management disciplines. Our team of certified engineers combines technical expertise with practical experience to deliver infrastructure solutions that meet international standards and local requirements.</p>

                <!-- Service Overview -->
                <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-lg mb-12">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Why Choose Our Engineering Services?</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">Certified professional engineers</span>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">International standards compliance</span>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">Comprehensive project management</span>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">Cost-effective solutions</span>
                        </div>
                    </div>
                </div>

                <!-- Service Tabs -->
                <div class="mb-12">
                    <div class="package-tabs">
                        <div class="package-tab active" onclick="showService('mechanical')">Mechanical</div>
                        <div class="package-tab" onclick="showService('electrical')">Electrical</div>
                        <div class="package-tab" onclick="showService('civil')">Civil</div>
                        <div class="package-tab" onclick="showService('project')">Project Mgmt</div>
                        <div class="package-tab" onclick="showService('consulting')">Consulting</div>
                    </div>

                    <!-- Mechanical Engineering -->
                    <div id="service-mechanical" class="service-content">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-hard-hat" style="color: #1e3a8a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">Mechanical Engineering</h3>
                                    <p class="text-gray-700 text-lg">Expert mechanical engineering services covering equipment design, HVAC systems, and mechanical infrastructure development.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Core Services</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Equipment Design:</strong> Custom mechanical equipment and machinery
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>HVAC Systems:</strong> Heating, ventilation, and air conditioning
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Piping Systems:</strong> Industrial piping and fluid dynamics
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Mechanical Maintenance:</strong> Preventive and corrective maintenance
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Specializations</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Thermal Systems:</strong> Heat exchangers and thermal management
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Vibration Analysis:</strong> Mechanical vibration monitoring
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Structural Analysis:</strong> Mechanical stress and load analysis
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Energy Efficiency:</strong> Mechanical system optimization
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Electrical Engineering -->
                    <div id="service-electrical" class="service-content hidden">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-bolt" style="color: #1e3a8a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%; box-shadow: 0 0 10px rgba(0,0,0,0.2);"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">Electrical Engineering</h3>
                                    <p class="text-gray-700 text-lg">Comprehensive electrical engineering solutions including power distribution, lighting systems, and electrical safety compliance.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Electrical Services</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Power Distribution:</strong> Electrical panels and distribution systems
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Lighting Design:</strong> Energy-efficient lighting systems
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Electrical Safety:</strong> Safety audits and compliance
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Control Systems:</strong> Electrical control and automation
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Technical Expertise</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Load Analysis:</strong> Electrical load calculations and planning
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Grounding Systems:</strong> Proper grounding and surge protection
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Emergency Systems:</strong> Backup power and emergency lighting
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Energy Management:</strong> Power monitoring and optimization
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Civil Engineering -->
                    <div id="service-civil" class="service-content hidden">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-building" style="color: #1e3a8a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%; box-shadow: 0 0 10px rgba(0,0,0,0.2);"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">Civil Engineering</h3>
                                    <p class="text-gray-700 text-lg">Professional civil engineering services for infrastructure development, construction supervision, and structural design.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Civil Services</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Structural Design:</strong> Building and infrastructure design
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Construction Supervision:</strong> On-site project monitoring
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Site Planning:</strong> Land use and site development
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Infrastructure:</strong> Roads, drainage, and utilities
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Specializations</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Foundation Design:</strong> Structural foundation engineering
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Material Testing:</strong> Construction material analysis
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Surveying:</strong> Land surveying and mapping
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Environmental Compliance:</strong> Environmental impact assessment
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Management -->
                    <div id="service-project" class="service-content hidden">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-project-diagram" style="color: #1e3a8a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%; box-shadow: 0 0 10px rgba(0,0,0,0.2);"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">Engineering Project Management</h3>
                                    <p class="text-gray-700 text-lg">Professional project management services ensuring timely delivery, quality control, and budget management for engineering projects.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Management Services</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Project Planning:</strong> Comprehensive project scheduling
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Budget Management:</strong> Cost control and financial planning
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Quality Assurance:</strong> Quality control and testing
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Risk Management:</strong> Risk assessment and mitigation
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Delivery Excellence</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Stakeholder Management:</strong> Client and vendor coordination
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Resource Planning:</strong> Human and material resource allocation
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Progress Reporting:</strong> Regular project status updates
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Commissioning:</strong> Project handover and commissioning
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Technical Consulting -->
                    <div id="service-consulting" class="service-content hidden">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-hard-hat" style="color: #1e3a8a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">Technical Consulting & Advisory</h3>
                                    <p class="text-gray-700 text-lg">Expert technical consulting services providing strategic guidance and technical expertise for complex engineering challenges.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Consulting Services</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Feasibility Studies:</strong> Technical and economic viability
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Design Review:</strong> Engineering design validation
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Compliance Audits:</strong> Regulatory compliance verification
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Technical Training:</strong> Engineering staff training
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Advisory Services</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Technology Selection:</strong> Equipment and technology recommendations
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Process Optimization:</strong> Engineering process improvement
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Sustainability Consulting:</strong> Green engineering solutions
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Expert Witness:</strong> Technical expert testimony
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
                    <h3 class="text-3xl font-bold mb-8 text-gray-900">Our Engineering Process</h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">1</span>
                            </div>
                            <h4 class="font-bold mb-2">Requirements Analysis</h4>
                            <p class="text-gray-600 text-sm">Detailed analysis of project requirements and technical specifications</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">2</span>
                            </div>
                            <h4 class="font-bold mb-2">Design & Planning</h4>
                            <p class="text-gray-600 text-sm">Comprehensive engineering design and project planning</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">3</span>
                            </div>
                            <h4 class="font-bold mb-2">Implementation</h4>
                            <p class="text-gray-600 text-sm">Professional execution with quality control and monitoring</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">4</span>
                            </div>
                            <h4 class="font-bold mb-2">Commissioning</h4>
                            <p class="text-gray-600 text-sm">Project handover, testing, and ongoing support</p>
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
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Get Engineering Consultation</h3>

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
                            <label class="block text-sm font-medium text-gray-700 mb-1">Engineering Service Interest</label>
                            <select name="service" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="">Select a service</option>
                                <option value="engineering" selected>Engineering Services</option>
                                <option value="mechanical">Mechanical Engineering</option>
                                <option value="electrical">Electrical Engineering</option>
                                <option value="civil">Civil Engineering</option>
                                <option value="project">Project Management</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Project Details</label>
                            <textarea
                                placeholder="Tell us about your engineering requirements..."
                                name="message"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                rows="4"
                                required
                            ></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-md transition-colors">
                            REQUEST ENGINEERING CONSULTATION
                        </button>
                    </form>
                    <div class="mt-4 text-center">
                        <p class="text-sm text-gray-600">Or call us at <a href="tel:+255716693327" class="text-blue-600 font-medium">+255 716 693 327</a></p>
                    </div>
                </div>

                <!-- Why Choose Us -->
                <div class="bg-gray-50 p-6 rounded-b-xl">
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Why Choose Our Engineering Services?</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Licensed professional engineers</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">International standards compliance</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Proven project delivery</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Multi-disciplinary expertise</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Quality assurance guarantee</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="mt-8 bg-white p-6 rounded-xl shadow-lg">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Client Success Stories</h3>
                <div class="space-y-4">
                    <div class="border-l-4 border-blue-600 pl-4">
                        <p class="text-gray-700 italic">"Their engineering expertise delivered our complex infrastructure project on time and within budget. Outstanding technical capability!"</p>
                        <p class="text-gray-900 font-medium mt-2">- James Wilson, Project Director</p>
                    </div>
                    <div class="border-l-4 border-blue-600 pl-4">
                        <p class="text-gray-700 italic">"Professional engineering services with excellent project management. They handled all technical challenges with expertise."</p>
                        <p class="text-gray-900 font-medium mt-2">- Maria Santos, Operations Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- CTA Section -->
<section class="py-16 bg-blue-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Build Your Engineering Project?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Get in touch with our engineering experts today and discover how our comprehensive solutions can bring your infrastructure projects to life.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="javascript:void(0)" class="bg-white text-blue-600 hover:bg-gray-100 font-bold py-3 px-8 rounded-full text-lg transition-colors shadow-lg" onclick="openQuoteModal()">
                GET ENGINEERING CONSULTATION NOW
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

    // Set modal for Engineering consultation
    if (titleEl) titleEl.textContent = 'Engineering Services Consultation';
    if (descEl) descEl.textContent = 'Tell us about your engineering requirements and we\'ll provide a tailored solution for your infrastructure project.';
    if (serviceSelect) serviceSelect.value = 'engineering';

    modal.classList.remove('hidden');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
}
</script>
@endpush
