@extends('layouts.app')

@section('title', 'Industries We Serve - Milele Technologies')

@section('content')
<!-- Hero Section -->
<section class="relative h-96 bg-gradient-to-r from-blue-900 to-blue-700 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Industries We Serve</h1>
            <p class="text-xl md:text-2xl mb-8">Comprehensive Technology Solutions Across Diverse Sectors</p>
            <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                <p class="text-lg font-medium">Hospitality • Tourism • Healthcare • Education • Manufacturing • Government • SMEs</p>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumbs -->
<div class="bg-gray-100 py-3">
    <div class="container mx-auto px-4">
        <div class="flex items-center text-sm">
            <a href="/" class="text-gray-600 hover:text-blue-600">Home</a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-800 font-medium">Industries</span>
        </div>
    </div>
</div>

<!-- Main Content -->
<main class="container mx-auto px-4 py-12">
    <div class="max-w-6xl mx-auto">
        <!-- Introduction -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">Industry-Specific Technology Solutions</h2>
            <p class="text-lg text-gray-700 leading-relaxed max-w-4xl mx-auto">
                Milele Technologies provides comprehensive technology solutions across diverse industries, delivering innovative ICT, engineering, and automation services tailored to each sector's unique needs and challenges. Our expertise spans from hospitality and tourism to healthcare, education, manufacturing, government, and SME sectors.
            </p>
        </div>

        <!-- Industries Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Hospitality -->
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                    <div class="text-white text-center">
                        <i class="fas fa-hotel text-4xl mb-3" style="color: #1e3a8a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                        <h3 class="text-xl font-bold">Hospitality</h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="text-lg font-bold mb-3 text-gray-900">Hospitality Technology Solutions</h4>
                    <p class="text-gray-600 mb-4">
                        Comprehensive technology solutions for hotels, resorts, and restaurants including property management systems, POS solutions, guest WiFi networks, and digital marketing platforms.
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                            <span>Property Management Systems</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                            <span>POS & Payment Solutions</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                            <span>Guest WiFi & Networking</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                            <span>Digital Marketing Platforms</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tourism & Travel -->
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center">
                    <div class="text-white text-center">
                        <i class="fas fa-plane text-4xl mb-3" style="color: #14532d; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                        <h3 class="text-xl font-bold">Tourism & Travel</h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="text-lg font-bold mb-3 text-gray-900">Tourism & Travel Technology</h4>
                    <p class="text-gray-600 mb-4">
                        Digital transformation for tourism operators with booking systems, tour management software, mobile apps, and integrated payment solutions for seamless customer experiences.
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-green-600 mr-2"></i>
                            <span>Booking Management Systems</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-green-600 mr-2"></i>
                            <span>Tour Management Software</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-green-600 mr-2"></i>
                            <span>Mobile Travel Apps</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-green-600 mr-2"></i>
                            <span>Integrated Payment Solutions</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Healthcare -->
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center">
                    <div class="text-white text-center">
                        <i class="fas fa-heartbeat text-4xl mb-3" style="color: #991b1b; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                        <h3 class="text-xl font-bold">Healthcare</h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="text-lg font-bold mb-3 text-gray-900">Healthcare Technology Solutions</h4>
                    <p class="text-gray-600 mb-4">
                        Secure and compliant healthcare IT systems including electronic health records, telemedicine platforms, medical device integration, and hospital management software.
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-red-600 mr-2"></i>
                            <span>Electronic Health Records</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-red-600 mr-2"></i>
                            <span>Telemedicine Platforms</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-red-600 mr-2"></i>
                            <span>Medical Device Integration</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-red-600 mr-2"></i>
                            <span>Hospital Management Systems</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Education -->
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center">
                    <div class="text-white text-center">
                        <i class="fas fa-graduation-cap text-4xl mb-3" style="color: #4c1d95; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                        <h3 class="text-xl font-bold">Education</h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="text-lg font-bold mb-3 text-gray-900">Education Technology Solutions</h4>
                    <p class="text-gray-600 mb-4">
                        Transform educational institutions with learning management systems, digital classrooms, student information systems, and e-learning platforms for modern education delivery.
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-purple-600 mr-2"></i>
                            <span>Learning Management Systems</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-purple-600 mr-2"></i>
                            <span>Digital Classroom Solutions</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-purple-600 mr-2"></i>
                            <span>Student Information Systems</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-purple-600 mr-2"></i>
                            <span>E-Learning Platforms</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Manufacturing -->
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center">
                    <div class="text-white text-center">
                        <i class="fas fa-industry text-4xl mb-3" style="color: #92400e; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                        <h3 class="text-xl font-bold">Manufacturing</h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="text-lg font-bold mb-3 text-gray-900">Manufacturing & Industrial Tech</h4>
                    <p class="text-gray-600 mb-4">
                        Smart manufacturing solutions including industrial automation, IoT integration, quality control systems, and predictive maintenance for enhanced production efficiency.
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-orange-600 mr-2"></i>
                            <span>Industrial Automation</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-orange-600 mr-2"></i>
                            <span>IoT Integration</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-orange-600 mr-2"></i>
                            <span>Quality Control Systems</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-orange-600 mr-2"></i>
                            <span>Predictive Maintenance</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Government & NGOs -->
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center">
                    <div class="text-white text-center">
                        <i class="fas fa-landmark text-4xl mb-3" style="color: #312e81; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                        <h3 class="text-xl font-bold">Government & NGOs</h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="text-lg font-bold mb-3 text-gray-900">Government & NGO Solutions</h4>
                    <p class="text-gray-600 mb-4">
                        Secure and scalable technology solutions for public sector and NGOs including e-government platforms, data management systems, and citizen engagement tools.
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-indigo-600 mr-2"></i>
                            <span>E-Government Platforms</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-indigo-600 mr-2"></i>
                            <span>Data Management Systems</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-indigo-600 mr-2"></i>
                            <span>Citizen Engagement Tools</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-indigo-600 mr-2"></i>
                            <span>Secure Communication Systems</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SMEs & Corporates -->
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-teal-500 to-teal-600 flex items-center justify-center">
                    <div class="text-white text-center">
                        <i class="fas fa-building text-4xl mb-3" style="color: #134e4a; text-shadow: 0 2px 8px rgba(0,0,0,0.4); background: rgba(255,255,255,0.1); padding: 8px; border-radius: 50%;"></i>
                        <h3 class="text-xl font-bold">SMEs & Corporates</h3>
                    </div>
                </div>
                <div class="p-6">
                    <h4 class="text-lg font-bold mb-3 text-gray-900">SMEs & Corporate Solutions</h4>
                    <p class="text-gray-600 mb-4">
                        Tailored technology solutions for businesses of all sizes including ERP systems, cloud infrastructure, cybersecurity, and digital transformation consulting.
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-teal-600 mr-2"></i>
                            <span>ERP Systems</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-teal-600 mr-2"></i>
                            <span>Cloud Infrastructure</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-teal-600 mr-2"></i>
                            <span>Cybersecurity Solutions</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <i class="fas fa-check-circle text-teal-600 mr-2"></i>
                            <span>Digital Transformation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us -->
        <div class="bg-blue-50 border-l-4 border-blue-600 p-8 rounded-r-lg mb-16">
            <h3 class="text-2xl font-bold mb-6 text-gray-800 text-center">Why Choose Milele Technologies?</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="bg-blue-100 p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-award text-blue-600 text-xl"></i>
                    </div>
                    <h4 class="font-bold mb-2 text-gray-800">Industry Expertise</h4>
                    <p class="text-gray-600 text-sm">Deep understanding of unique industry requirements and challenges</p>
                </div>
                <div class="text-center">
                    <div class="bg-blue-100 p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-cogs text-blue-600 text-xl"></i>
                    </div>
                    <h4 class="font-bold mb-2 text-gray-800">Customized Solutions</h4>
                    <p class="text-gray-600 text-sm">Tailored technology solutions for specific industry needs</p>
                </div>
                <div class="text-center">
                    <div class="bg-blue-100 p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-shield-alt text-blue-600 text-xl"></i>
                    </div>
                    <h4 class="font-bold mb-2 text-gray-800">Security & Compliance</h4>
                    <p class="text-gray-600 text-sm">Industry-specific security standards and regulatory compliance</p>
                </div>
                <div class="text-center">
                    <div class="bg-blue-100 p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-headset text-blue-600 text-xl"></i>
                    </div>
                    <h4 class="font-bold mb-2 text-gray-800">24/7 Support</h4>
                    <p class="text-gray-600 text-sm">Round-the-clock technical support and maintenance</p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center">
            <h3 class="text-2xl font-bold mb-4 text-gray-900">Ready to Transform Your Industry?</h3>
            <p class="text-lg text-gray-700 mb-8 max-w-3xl mx-auto">
                Let us help you leverage technology to drive innovation, efficiency, and growth in your industry. Contact our experts today for a comprehensive consultation.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="javascript:void(0)" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full text-lg transition-colors shadow-lg" onclick="openQuoteModal()">
                    Get Industry Consultation
                </a>
                <a href="tel:+255716693327" class="bg-transparent border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-3 px-8 rounded-full text-lg transition-colors">
                    Call Us Now
                </a>
            </div>
        </div>
    </div>
</main>

@endsection

@push('scripts')
<script>
// Quote modal functions (inherited from layouts.app)
function openQuoteModal() {
    const modal = document.getElementById('quoteModal');
    if (!modal) return;

    const titleEl = document.getElementById('quoteModalTitle');
    const descEl = document.getElementById('quoteModalDescription');
    const serviceSelect = document.getElementById('quoteServiceSelect');

    // Set modal for Industry consultation
    if (titleEl) titleEl.textContent = 'Industry Technology Consultation';
    if (descEl) descEl.textContent = 'Tell us about your industry and technology needs, and we\'ll provide tailored solutions for your business sector.';
    if (serviceSelect) serviceSelect.value = 'industry';

    modal.classList.remove('hidden');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
}
</script>
@endpush
