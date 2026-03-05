@extends('layouts.app')

@section('title', 'Services - Milele Technologies')

@section('content')


    <!-- Hero Section -->
    <div class="relative hero-section h-screen w-full overflow-hidden">
        <img
            src="{{ asset('images/HOME.jpg') }}"
            alt="Technology Solutions"
            class="absolute inset-0 w-full h-full object-cover"
            loading="lazy"
        >
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/70 to-blue-800/50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white px-4 max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-7xl font-bold mb-6">Our Services</h1>
                <p class="text-2xl md:text-3xl mb-8">Comprehensive Technology Solutions for Your Business</p>
                <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                    <p class="text-xl font-medium">ICT • Power Systems • Automation • Engineering</p>
                </div>
                <a href="javascript:void(0)" class="mt-8 inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full text-lg transition-colors shadow-lg" onclick="openQuoteModal()">
                    GET A CONSULTATION
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
                <span class="text-gray-600">Services</span>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Left Column - Services Details -->
            <div class="lg:w-2/3">
                <div class="prose max-w-none">
                    <h2 class="text-4xl font-bold mb-8 text-gray-900">Our Technology Services</h2>
                    <p class="text-xl text-gray-700 mb-8 leading-relaxed">Milele Technologies delivers end-to-end technology solutions across ICT infrastructure, power systems, industrial automation, and engineering services. Our expert team ensures seamless integration, optimal performance, and scalable growth for your organization.</p>

                    <!-- Service Tabs -->
                    <div class="mb-12">
                        <div class="package-tabs">
                            <div class="package-tab active" onclick="showService('ict')">ICT Solutions</div>
                            <div class="package-tab" onclick="showService('power')">Power Systems</div>
                            <div class="package-tab" onclick="showService('automation')">Automation</div>
                            <div class="package-tab" onclick="showService('engineering')">Engineering</div>
                        </div>

                        <!-- ICT Solutions -->
                        <div id="service-ict" class="service-content">
                            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                                <div class="flex items-start gap-6 mb-6">
                                    <div class="service-icon">
                                        <i class="fas fa-network-wired" style="color: #1e3a8a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold mb-4 text-gray-900">ICT Solutions</h3>
                                        <p class="text-gray-700 text-lg">Comprehensive information and communication technology infrastructure and services to power your digital transformation.</p>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                    <div>
                                        <h4 class="text-xl font-bold mb-4 text-blue-700">Core Services</h4>
                                        <div class="space-y-4">
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Network Infrastructure:</strong> Structured cabling, routers, switches, Wi-Fi, and network design
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Cloud Solutions:</strong> Cloud migration, hybrid cloud, and managed cloud services
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Cybersecurity:</strong> Network security, data protection, and compliance solutions
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>IT Support:</strong> 24/7 helpdesk, remote support, and on-site technical assistance
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold mb-4 text-blue-700">Specialized Solutions</h4>
                                        <div class="space-y-4">
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>VoIP Systems:</strong> Business telephony and unified communications
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Video Surveillance:</strong> CCTV installation and monitoring systems
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Access Control:</strong> Biometric and card-based security systems
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Smart Office:</strong> IoT integration and workplace automation
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Power Systems -->
                        <div id="service-power" class="service-content hidden">
                            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                                <div class="flex items-start gap-6 mb-6">
                                    <div class="service-icon">
                                        <i class="fas fa-bolt" style="color: #1e3a8a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold mb-4 text-gray-900">Power Systems</h3>
                                        <p class="text-gray-700 text-lg">Reliable power solutions including solar systems, backup power, and energy management for uninterrupted operations.</p>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                    <div>
                                        <h4 class="text-xl font-bold mb-4 text-green-700">Power Solutions</h4>
                                        <div class="space-y-4">
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Solar Power Systems:</strong> Design, installation, and maintenance of solar PV systems
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Backup Power:</strong> UPS systems, generators, and battery storage solutions
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Power Distribution:</strong> Electrical panels, wiring, and load management
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Energy Monitoring:</strong> Power usage analytics and optimization systems
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold mb-4 text-green-700">Maintenance & Support</h4>
                                        <div class="space-y-4">
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Preventive Maintenance:</strong> Regular inspections and system health checks
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Emergency Support:</strong> 24/7 power system troubleshooting and repairs
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>System Upgrades:</strong> Modernization and capacity expansion services
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Compliance Testing:</strong> Electrical safety and regulatory compliance
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Automation -->
                        <div id="service-automation" class="service-content hidden">
                            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                                <div class="flex items-start gap-6 mb-6">
                                    <div class="service-icon">
                                        <i class="fas fa-robot" style="color: #1e3a8a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold mb-4 text-gray-900">Automation & Control</h3>
                                        <p class="text-gray-700 text-lg">Industrial automation solutions to enhance efficiency, reduce costs, and improve operational control.</p>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                    <div>
                                        <h4 class="text-xl font-bold mb-4 text-purple-700">Automation Systems</h4>
                                        <div class="space-y-4">
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>PLC Programming:</strong> Programmable logic controller design and implementation
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>SCADA Systems:</strong> Supervisory control and data acquisition solutions
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>HMI Development:</strong> Human-machine interface design and programming
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Process Control:</strong> Automated manufacturing and process optimization
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold mb-4 text-purple-700">Smart Solutions</h4>
                                        <div class="space-y-4">
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Building Automation:</strong> Smart building management systems
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>IoT Integration:</strong> Internet of Things sensor networks and analytics
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Robotics:</strong> Industrial robot integration and programming
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Data Analytics:</strong> Real-time monitoring and predictive maintenance
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Engineering -->
                        <div id="service-engineering" class="service-content hidden">
                            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                                <div class="flex items-start gap-6 mb-6">
                                    <div class="service-icon">
                                        <i class="fas fa-hard-hat" style="color: #1e3a8a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold mb-4 text-gray-900">Engineering Services</h3>
                                        <p class="text-gray-700 text-lg">Comprehensive engineering solutions including mechanical, electrical, and civil engineering services.</p>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                    <div>
                                        <h4 class="text-xl font-bold mb-4 text-orange-700">Engineering Disciplines</h4>
                                        <div class="space-y-4">
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Mechanical Engineering:</strong> Equipment design, HVAC systems, and mechanical maintenance
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Electrical Engineering:</strong> Power distribution, lighting, and electrical safety
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Civil Engineering:</strong> Infrastructure design, construction supervision
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Project Management:</strong> Engineering project planning and execution
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold mb-4 text-orange-700">Technical Services</h4>
                                        <div class="space-y-4">
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Feasibility Studies:</strong> Technical analysis and project viability assessment
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Design & Drafting:</strong> CAD design, technical drawings, and specifications
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Quality Assurance:</strong> Engineering standards compliance and testing
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <i class="fas fa-check-circle"></i>
                                                <div>
                                                    <strong>Consulting:</strong> Technical advisory and engineering consultation
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Benefits Section -->
                    <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-lg mb-12">
                        <h3 class="text-2xl font-bold mb-6 text-gray-800">Why Choose Our Services</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-2 rounded-full mr-4">
                                    <i class="fas fa-check-circle text-blue-600"></i>
                                </div>
                                <span class="text-gray-700">Certified professionals with industry expertise</span>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-2 rounded-full mr-4">
                                    <i class="fas fa-check-circle text-blue-600"></i>
                                </div>
                                <span class="text-gray-700">24/7 technical support and maintenance</span>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-2 rounded-full mr-4">
                                    <i class="fas fa-check-circle text-blue-600"></i>
                                </div>
                                <span class="text-gray-700">Customized solutions for your specific needs</span>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-2 rounded-full mr-4">
                                    <i class="fas fa-check-circle text-blue-600"></i>
                                </div>
                                <span class="text-gray-700">Cutting-edge technology and best practices</span>
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
                                <span class="text-gray-700">Competitive pricing and value-driven solutions</span>
                            </div>
                        </div>
                    </div>

                    <!-- Process Section -->
                    <div class="mb-12">
                        <h3 class="text-3xl font-bold mb-8 text-gray-900">Our Service Process</h3>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            <div class="text-center">
                                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-blue-600 font-bold text-xl">1</span>
                                </div>
                                <h4 class="font-bold mb-2">Consultation</h4>
                                <p class="text-gray-600 text-sm">Understanding your requirements and challenges</p>
                            </div>
                            <div class="text-center">
                                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-blue-600 font-bold text-xl">2</span>
                                </div>
                                <h4 class="font-bold mb-2">Solution Design</h4>
                                <p class="text-gray-600 text-sm">Creating customized technology solutions</p>
                            </div>
                            <div class="text-center">
                                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-blue-600 font-bold text-xl">3</span>
                                </div>
                                <h4 class="font-bold mb-2">Implementation</h4>
                                <p class="text-gray-600 text-sm">Professional installation and deployment</p>
                            </div>
                            <div class="text-center">
                                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-blue-600 font-bold text-xl">4</span>
                                </div>
                                <h4 class="font-bold mb-2">Support & Maintenance</h4>
                                <p class="text-gray-600 text-sm">Ongoing support and optimization</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Contact Sidebar -->
            <div class="lg:w-1/3">
                <div class="bg-white rounded-xl shadow-lg sticky top-24">
                    <!-- Contact Form -->
                    <div class="p-6" id="contact">
                        <h3 class="text-2xl font-bold mb-4 text-gray-800">Request a Consultation</h3>

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
                                <label class="block text-sm font-medium text-gray-700 mb-1">Service Interest</label>
                                <select name="service" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                                    <option value="">Select a service</option>
                                    <option value="ict">ICT Solutions</option>
                                    <option value="power">Power Systems</option>
                                    <option value="automation">Automation & Control</option>
                                    <option value="engineering">Engineering Services</option>
                                    <option value="consulting">Consulting</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Project Details</label>
                                <textarea
                                    placeholder="Tell us about your project requirements..."
                                    name="message"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                    rows="4"
                                    required
                                ></textarea>
                            </div>
                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-md transition-colors">
                                REQUEST CONSULTATION
                            </button>
                        </form>
                        <div class="mt-4 text-center">
                            <p class="text-sm text-gray-600">Or call us at <a href="tel:+255716693327" class="text-blue-600 font-medium">+255 716 693 327</a></p>
                        </div>
                    </div>

                    <!-- Why Choose Us -->
                    <div class="bg-gray-50 p-6 rounded-b-xl">
                        <h3 class="text-xl font-bold mb-4 text-gray-800">Why Choose Milele Technologies?</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                                <span class="text-gray-700">Local expertise with global standards</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                                <span class="text-gray-700">Multilingual technical team</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                                <span class="text-gray-700">24/7 support availability</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                                <span class="text-gray-700">Proven track record</span>
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
                    <h3 class="text-xl font-bold mb-4 text-gray-800">What Our Clients Say</h3>
                    <div class="space-y-4">
                        <div class="border-l-4 border-blue-600 pl-4">
                            <p class="text-gray-700 italic">"Milele Technologies transformed our IT infrastructure. Their team is professional, knowledgeable, and always available when we need them."</p>
                            <p class="text-gray-900 font-medium mt-2">- Sarah Johnson, CEO</p>
                        </div>
                        <div class="border-l-4 border-blue-600 pl-4">
                            <p class="text-gray-700 italic">"The automation solutions they implemented increased our production efficiency by 40%. Excellent service and support!"</p>
                            <p class="text-gray-900 font-medium mt-2">- Michael Chen, Operations Manager</p>
                        </div>
                        <div class="border-l-4 border-blue-600 pl-4">
                            <p class="text-gray-700 italic">"Reliable power solutions and outstanding technical support. They've been our trusted technology partner for years."</p>
                            <p class="text-gray-900 font-medium mt-2">- Grace Mwangi, Facility Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your Technology Infrastructure?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Get in touch with our experts today and discover how our comprehensive services can help your business thrive in the digital age.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#contact" class="bg-white text-blue-600 hover:bg-gray-100 font-bold py-3 px-8 rounded-full text-lg transition-colors shadow-lg">
                    GET STARTED NOW
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
/* Service-specific styles */
.service-card {
    transition: all 0.3s ease;
    border: 1px solid var(--border);
}

.service-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
    border-color: var(--accent);
}

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
    align-items: start;
    gap: 0.75rem;
    margin-bottom: 1rem;
}

.service-feature i {
    color: var(--accent2);
    margin-top: 0.25rem;
    flex-shrink: 0;
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
    cursor: pointer;
    border-bottom: 3px solid transparent;
    transition: all 0.3s ease;
    font-weight: 500;
    color: var(--ink-soft);
    white-space: nowrap;
}

.package-tab:hover {
    color: var(--accent);
}

.package-tab.active {
    color: var(--accent);
    border-bottom-color: var(--accent);
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
        padding: 0.75rem 1rem;
        border-bottom: none;
        border-right: 3px solid transparent;
        text-align: left;
        white-space: normal;
    }
    
    .package-tab.active {
        border-right-color: var(--accent);
        border-bottom-color: transparent;
        background-color: var(--accent-light);
        border-radius: 0.5rem;
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

    // Show selected service content
    document.getElementById(`service-${serviceType}`).classList.remove('hidden');

    // Update active tab
    document.querySelectorAll('.package-tab').forEach(el => {
        el.classList.remove('active');
    });

    // Find the tab that was clicked
    const tabs = document.querySelectorAll('.package-tab');
    tabs.forEach(tab => {
        if (tab.textContent.toLowerCase().includes(serviceType.toLowerCase())) {
            tab.classList.add('active');
        }
    });
}

// Quote modal functions (inherited from layouts.app)
function openQuoteModal() {
    const modal = document.getElementById('quoteModal');
    if (!modal) return;

    const titleEl = document.getElementById('quoteModalTitle');
    const descEl = document.getElementById('quoteModalDescription');
    const serviceSelect = document.getElementById('quoteServiceSelect');

    // Set modal for service consultation
    if (titleEl) titleEl.textContent = 'Service Consultation';
    if (descEl) descEl.textContent = 'Tell us which service you\'re interested in and we\'ll provide a tailored consultation.';
    if (serviceSelect && !serviceSelect.value) {
        // Try to select the currently active service tab
        const activeTab = document.querySelector('.package-tab.active');
        if (activeTab) {
            const tabText = activeTab.textContent.trim().toLowerCase();
            if (tabText.includes('ict')) serviceSelect.value = 'ict';
            else if (tabText.includes('power')) serviceSelect.value = 'automation';
            else if (tabText.includes('automation')) serviceSelect.value = 'automation';
            else if (tabText.includes('engineering')) serviceSelect.value = 'engineering';
        }
    }

    modal.classList.remove('hidden');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
}
</script>
@endpush
