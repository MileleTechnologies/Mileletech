@extends('layouts.app')

@section('title', 'ICT Solutions - Milele Technologies')

@section('content')

<!-- Hero Section -->
<div class="relative hero-section h-screen w-full overflow-hidden">
    <img
        src="{{ asset('images/HOME.jpg') }}"
        alt="ICT Solutions"
        class="absolute inset-0 w-full h-full object-cover"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-blue-800/60"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">ICT Solutions</h1>
            <p class="text-xl md:text-2xl mb-8">Comprehensive Information & Communication Technology Services</p>
            <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                <p class="text-lg font-medium">Network Infrastructure • Cloud Solutions • Cybersecurity</p>
            </div>
            <a href="javascript:void(0)" class="mt-8 inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full text-lg transition-colors shadow-lg" onclick="openQuoteModal()">
                GET ICT CONSULTATION
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
            <span class="text-gray-600">ICT Solutions</span>
        </div>
    </div>
</div>

<!-- Main Content -->
<main class="container mx-auto px-4 py-12">
    <div class="flex flex-col lg:flex-row gap-12">
        <!-- Left Column - Service Details -->
        <div class="lg:w-2/3">
            <div class="prose max-w-none">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Transform Your Business with Advanced ICT Solutions</h2>
                <p class="text-lg text-gray-700 mb-8 leading-relaxed">Milele Technologies delivers cutting-edge ICT infrastructure and services designed to modernize your operations, enhance productivity, and drive digital transformation. Our comprehensive solutions ensure seamless connectivity, robust security, and scalable growth for organizations of all sizes.</p>

                <!-- Service Overview -->
                <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-lg mb-12">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Why Choose Our ICT Solutions?</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">24/7 technical support and monitoring</span>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">Industry-leading security protocols</span>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">Scalable solutions for growing businesses</span>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check-circle text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">Cost-effective and future-proof technology</span>
                        </div>
                    </div>
                </div>

                <!-- Service Tabs -->
                <div class="mb-12">
                    <div class="package-tabs">
                        <div class="package-tab active" onclick="showService('network')">Network Infrastructure</div>
                        <div class="package-tab" onclick="showService('cloud')">Cloud Solutions</div>
                        <div class="package-tab" onclick="showService('security')">Cybersecurity</div>
                        <div class="package-tab" onclick="showService('voip')">VoIP & Communication</div>
                    </div>

                    <!-- Network Infrastructure -->
                    <div id="service-network" class="service-content">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-network-wired" style="color: #1e3a8a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">Network Infrastructure</h3>
                                    <p class="text-gray-700 text-lg">Comprehensive network solutions including structured cabling, wireless networks, and enterprise connectivity for seamless business operations.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Network Services</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Structured Cabling:</strong> Cat6, fiber optic, and copper cabling systems
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Network Design:</strong> Enterprise network architecture and planning
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Switches & Routers:</strong> Enterprise-grade network equipment
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Network Security:</strong> Firewalls, VPNs, and access control
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
                                                <strong>Wi-Fi Solutions:</strong> Enterprise wireless networks with coverage optimization
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Network Monitoring:</strong> 24/7 network performance monitoring
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Load Balancing:</strong> Optimized network traffic distribution
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Network Segmentation:</strong> Secure network zone separation
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cloud Solutions -->
                    <div id="service-cloud" class="service-content hidden">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-cloud" style="color: #1e3a8a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">Cloud Solutions</h3>
                                    <p class="text-gray-700 text-lg">Strategic cloud services including migration, hybrid cloud setup, and managed cloud solutions for scalable business operations.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Cloud Services</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Cloud Migration:</strong> Seamless transition to cloud platforms
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Hybrid Cloud:</strong> On-premise and cloud integration
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Cloud Storage:</strong> Secure data storage and backup solutions
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>SaaS Integration:</strong> Software-as-a-Service implementation
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Managed Services</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Cloud Monitoring:</strong> 24/7 performance and security monitoring
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Backup & Recovery:</strong> Automated cloud backups and disaster recovery
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Cost Optimization:</strong> Cloud resource management and cost control
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Compliance Management:</strong> Regulatory compliance and data governance
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cybersecurity -->
                    <div id="service-security" class="service-content hidden">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-shield-alt" style="color: #1e3a8a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">Cybersecurity</h3>
                                    <p class="text-gray-700 text-lg">Protect your digital assets with comprehensive security solutions designed to prevent, detect, and respond to cyber threats.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Security Solutions</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Network Security:</strong> Next-generation firewalls and intrusion detection
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Endpoint Protection:</strong> Antivirus, anti-malware, and device security
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Data Encryption:</strong> Data-at-rest and data-in-transit encryption
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Identity Management:</strong> Access control and user authentication
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Security Services</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Security Audits:</strong> Comprehensive vulnerability assessments
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Penetration Testing:</strong> Proactive security testing and validation
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Security Training:</strong> Employee awareness and best practices
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Incident Response:</strong> 24/7 security monitoring and response
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- VoIP & Communication -->
                    <div id="service-voip" class="service-content hidden">
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="service-icon">
                                    <i class="fas fa-phone" style="color: #1e3a8a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold mb-4 text-gray-900">VoIP & Unified Communications</h3>
                                    <p class="text-gray-700 text-lg">Modernize your communication systems with VoIP technology that reduces costs and enhances collaboration capabilities.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Communication Systems</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>VoIP Phone Systems:</strong> Business telephony with advanced features
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Video Conferencing:</strong> High-quality video and audio collaboration
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Unified Messaging:</strong> Integrated voicemail, email, and fax
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Mobile Integration:</strong> Seamless mobile device connectivity
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold mb-4 text-blue-700">Features & Benefits</h4>
                                    <div class="space-y-4">
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Cost Savings:</strong> Reduced telecommunication expenses
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Scalability:</strong> Easy system expansion and modification
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Advanced Features:</strong> Auto-attendant, call routing, voicemail
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <div>
                                                <strong>Remote Work Support:</strong> Enable seamless remote collaboration
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
                    <h3 class="text-3xl font-bold mb-8 text-gray-900">Our ICT Implementation Process</h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">1</span>
                            </div>
                            <h4 class="font-bold mb-2">Assessment</h4>
                            <p class="text-gray-600 text-sm">Comprehensive analysis of your current infrastructure and requirements</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">2</span>
                            </div>
                            <h4 class="font-bold mb-2">Design</h4>
                            <p class="text-gray-600 text-sm">Custom ICT solution architecture tailored to your business needs</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">3</span>
                            </div>
                            <h4 class="font-bold mb-2">Implementation</h4>
                            <p class="text-gray-600 text-sm">Professional installation with minimal disruption to operations</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">4</span>
                            </div>
                            <h4 class="font-bold mb-2">Support</h4>
                            <p class="text-gray-600 text-sm">Ongoing maintenance, monitoring, and technical support</p>
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
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Get ICT Consultation</h3>

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
                            <label class="block text-sm font-medium text-gray-700 mb-1">ICT Service Interest</label>
                            <select name="service" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="">Select a service</option>
                                <option value="ict" selected>ICT Solutions</option>
                                <option value="network">Network Infrastructure</option>
                                <option value="cloud">Cloud Solutions</option>
                                <option value="security">Cybersecurity</option>
                                <option value="voip">VoIP Systems</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Project Details</label>
                            <textarea
                                placeholder="Tell us about your ICT requirements..."
                                name="message"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                rows="4"
                                required
                            ></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-md transition-colors">
                            REQUEST ICT CONSULTATION
                        </button>
                    </form>
                    <div class="mt-4 text-center">
                        <p class="text-sm text-gray-600">Or call us at <a href="tel:+255716693327" class="text-blue-600 font-medium">+255 716 693 327</a></p>
                    </div>
                </div>

                <!-- Why Choose Us -->
                <div class="bg-gray-50 p-6 rounded-b-xl">
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Why Choose Our ICT Services?</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Certified network engineers</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">24/7 technical support</span>
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
                            <span class="text-gray-700">Cost-effective solutions</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="mt-8 bg-white p-6 rounded-xl shadow-lg">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Client Success Stories</h3>
                <div class="space-y-4">
                    <div class="border-l-4 border-blue-600 pl-4">
                        <p class="text-gray-700 italic">"Milele Technologies transformed our network infrastructure. Their team is professional, knowledgeable, and always available when we need them."</p>
                        <p class="text-gray-900 font-medium mt-2">- Sarah Johnson, CEO</p>
                    </div>
                    <div class="border-l-4 border-blue-600 pl-4">
                        <p class="text-gray-700 italic">"The cloud migration was seamless, and their ongoing support has been exceptional. Highly recommended!"</p>
                        <p class="text-gray-900 font-medium mt-2">- Michael Chen, IT Director</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- CTA Section -->
<section class="py-16 bg-blue-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your ICT Infrastructure?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Get in touch with our ICT experts today and discover how our comprehensive solutions can help your business thrive in the digital age.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="javascript:void(0)" class="bg-white text-blue-600 hover:bg-gray-100 font-bold py-3 px-8 rounded-full text-lg transition-colors shadow-lg" onclick="openQuoteModal()">
                GET ICT CONSULTATION NOW
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

    // Set modal for ICT consultation
    if (titleEl) titleEl.textContent = 'ICT Solutions Consultation';
    if (descEl) descEl.textContent = 'Tell us about your ICT infrastructure needs and we\'ll provide a tailored solution for your business.';
    if (serviceSelect) serviceSelect.value = 'ict';

    modal.classList.remove('hidden');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
}
</script>
@endpush
