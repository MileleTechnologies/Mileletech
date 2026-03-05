@extends('layouts.app')

@section('title', 'Automation & Control - Milele Technologies')

@section('content')

<!-- Hero Section -->
<div class="relative hero-section h-screen w-full overflow-hidden">
    <img
        src="{{ asset('images/HOME.jpg') }}"
        alt="Automation & Control"
        class="absolute inset-0 w-full h-full object-cover"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-blue-800/60"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Automation & Control</h1>
            <p class="text-xl md:text-2xl mb-8">Smart Industrial Solutions for Enhanced Efficiency</p>
            <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                <p class="text-lg font-medium">PLC • SCADA • Robotics • IoT Integration</p>
            </div>
            <a href="javascript:void(0)" class="mt-8 inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full text-lg transition-colors shadow-lg" onclick="openQuoteModal()">
                GET AUTOMATION CONSULTATION
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
            <span class="text-gray-600">Automation & Control</span>
        </div>
    </div>
</div>

<!-- Main Content -->
<main class="container mx-auto px-4 py-12">
    <div class="flex flex-col lg:flex-row gap-12">
        <!-- Left Column - Service Details -->
        <div class="lg:w-2/3">
            <div class="prose max-w-none">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Transform Your Operations with Smart Automation</h2>
                <p class="text-lg text-gray-700 mb-8 leading-relaxed">Milele Technologies delivers cutting-edge automation and control solutions that revolutionize industrial processes, enhance productivity, and reduce operational costs. Our expertise spans from PLC programming to advanced robotics and IoT integration, providing comprehensive automation for modern industries.</p>

                <!-- Service Overview -->
                <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-lg mb-12">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Why Choose Our Automation Solutions?</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">Increased operational efficiency by up to 40%</span>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">Reduced human error and improved safety</span>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">24/7 monitoring and predictive maintenance</span>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">Scalable solutions for growing operations</span>
                        </div>
                    </div>
                </div>

                <!-- Service Tabs -->
                <div class="mb-12">
                    <div class="package-tabs">
                        <div class="package-tab active" onclick="showService('plc')">PLC Programming</div>
                        <div class="package-tab" onclick="showService('scada')">SCADA Systems</div>
                        <div class="package-tab" onclick="showService('robotics')">Industrial Robotics</div>
                        <div class="package-tab" onclick="showService('iot')">IoT Integration</div>
                    </div>

                    <!-- PLC Programming -->
                    <div id="service-plc" class="service-content">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-robot"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">PLC Programming & Integration</h3>
                                    <p class="text-gray-700 text-lg">Custom programmable logic controller solutions that form the backbone of modern industrial automation systems.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">PLC Services</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>PLC Programming:</strong> Custom logic development for all major brands
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>System Integration:</strong> Seamless PLC integration with existing systems
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
                                                <strong>Commissioning:</strong> System testing, calibration, and startup support
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Advanced Features</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Real-time Control:</strong> Millisecond-precision process control
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Data Logging:</strong> Comprehensive process data recording
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Remote Monitoring:</strong> Web-based PLC monitoring capabilities
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Backup Systems:</strong> Redundant PLC configurations
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SCADA Systems -->
                    <div id="service-scada" class="service-content hidden">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-desktop"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">SCADA Systems</h3>
                                    <p class="text-gray-700 text-lg">Supervisory Control and Data Acquisition systems that provide comprehensive oversight and control of industrial processes.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">SCADA Solutions</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>System Design:</strong> Custom SCADA architecture for your processes
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Data Acquisition:</strong> Real-time data collection from multiple sources
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Control Interface:</strong> Intuitive operator interface design
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Remote Monitoring:</strong> Web-based and mobile access capabilities
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Control Features</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Process Control:</strong> Automated control loops and setpoints
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Alarm Management:</strong> Intelligent alarm systems and notifications
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Trend Analysis:</strong> Historical data analysis and reporting
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Recipe Management:</strong> Automated process recipe control
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Industrial Robotics -->
                    <div id="service-robotics" class="service-content hidden">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-robot"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">Industrial Robotics</h3>
                                    <p class="text-gray-700 text-lg">Advanced robotic solutions for manufacturing, assembly, and material handling applications.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Robot Systems</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Robot Selection:</strong> Optimal robot selection for your applications
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Programming:</strong> Custom robot programming and path planning
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Integration:</strong> Robot integration with production systems
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Vision Systems:</strong> Machine vision for robot guidance
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Applications</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Assembly Automation:</strong> Precision assembly operations
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Material Handling:</strong> Automated material transport and sorting
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Quality Control:</strong> Automated inspection and testing
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Safety Systems:</strong> Comprehensive safety and collision avoidance
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- IoT Integration -->
                    <div id="service-iot" class="service-content hidden">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-network-wired"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">IoT Integration & Smart Solutions</h3>
                                    <p class="text-gray-700 text-lg">Internet of Things solutions that connect your industrial processes to the digital world for enhanced monitoring and control.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">IoT Solutions</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Sensor Networks:</strong> Comprehensive sensor deployment
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Data Platforms:</strong> Cloud-based IoT data management
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Connectivity:</strong> Wireless and wired IoT connectivity solutions
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Mobile Apps:</strong> Custom mobile applications for monitoring
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Smart Features</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Predictive Analytics:</strong> AI-powered failure prediction
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Remote Control:</strong> Remote equipment operation and monitoring
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Energy Optimization:</strong> Smart energy management systems
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
                    <h3 class="text-3xl font-bold mb-8 text-gray-900">Our Automation Implementation Process</h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">1</span>
                            </div>
                            <h4 class="font-bold mb-2">Process Analysis</h4>
                            <p class="text-gray-600 text-sm">Detailed analysis of current processes and automation opportunities</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">2</span>
                            </div>
                            <h4 class="font-bold mb-2">Solution Design</h4>
                            <p class="text-gray-600 text-sm">Custom automation architecture tailored to your requirements</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">3</span>
                            </div>
                            <h4 class="font-bold mb-2">Implementation</h4>
                            <p class="text-gray-600 text-sm">Professional installation with minimal production disruption</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">4</span>
                            </div>
                            <h4 class="font-bold mb-2">Optimization</h4>
                            <p class="text-gray-600 text-sm">Continuous monitoring and performance optimization</p>
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
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Get Automation Consultation</h3>

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
                            <label class="block text-sm font-medium text-gray-700 mb-1">Automation Service Interest</label>
                            <select name="service" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="">Select a service</option>
                                <option value="automation" selected>Automation & Control</option>
                                <option value="plc">PLC Programming</option>
                                <option value="scada">SCADA Systems</option>
                                <option value="robotics">Industrial Robotics</option>
                                <option value="iot">IoT Integration</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Project Details</label>
                            <textarea
                                placeholder="Tell us about your automation requirements..."
                                name="message"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                rows="4"
                                required
                            ></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-md transition-colors">
                            REQUEST AUTOMATION CONSULTATION
                        </button>
                    </form>
                    <div class="mt-4 text-center">
                        <p class="text-sm text-gray-600">Or call us at <a href="tel:+255716693327" class="text-blue-600 font-medium">+255 716 693 327</a></p>
                    </div>
                </div>

                <!-- Why Choose Us -->
                <div class="bg-gray-50 p-6 rounded-b-xl">
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Why Choose Our Automation Services?</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Certified automation engineers</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Cutting-edge technology</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Proven track record</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Custom solutions</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">24/7 technical support</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="mt-8 bg-white p-6 rounded-xl shadow-lg">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Client Success Stories</h3>
                <div class="space-y-4">
                    <div class="border-l-4 border-blue-600 pl-4">
                        <p class="text-gray-700 italic">"The automation solutions they implemented increased our production efficiency by 40%. Excellent service and support!"</p>
                        <p class="text-gray-900 font-medium mt-2">- Michael Chen, Operations Manager</p>
                    </div>
                    <div class="border-l-4 border-blue-600 pl-4">
                        <p class="text-gray-700 italic">"Their PLC programming expertise transformed our manufacturing process. Highly professional and reliable team."</p>
                        <p class="text-gray-900 font-medium mt-2">- Robert Kim, Production Director</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- CTA Section -->
<section class="py-16 bg-blue-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Automate Your Operations?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Get in touch with our automation experts today and discover how our smart solutions can revolutionize your industrial processes.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="javascript:void(0)" class="bg-white text-blue-600 hover:bg-gray-100 font-bold py-3 px-8 rounded-full text-lg transition-colors shadow-lg" onclick="openQuoteModal()">
                GET AUTOMATION CONSULTATION NOW
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

    // Set modal for Automation consultation
    if (titleEl) titleEl.textContent = 'Automation & Control Consultation';
    if (descEl) descEl.textContent = 'Tell us about your automation requirements and we\'ll provide a tailored solution for your industrial processes.';
    if (serviceSelect) serviceSelect.value = 'automation';

    modal.classList.remove('hidden');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
}
</script>
@endpush
