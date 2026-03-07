@extends('layouts.app')

@section('title', 'Innovation Hub - Milele Technologies')

@section('meta_description', 'Explore Milele Technologies Innovation Hub - Pioneering research and development, smart technologies, AI solutions, and IoT innovations for tomorrow\'s world.')

@section('content')

<!-- Hero Section -->
<div class="relative hero-section h-screen w-full overflow-hidden">
    <img 
        src="{{ asset('images/eng.jpg') }}" 
        alt="Innovation Hub" 
        class="absolute inset-0 w-full h-full object-cover"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-blue-800/70"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Innovation Hub</h1>
            <p class="text-xl md:text-2xl mb-8">Where Tomorrow's Solutions Are Engineered Today</p>
            <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                <p class="text-lg font-medium">Research & Development • Smart Technologies • AI & IoT Solutions</p>
            </div>
            <a href="javascript:void(0)" class="mt-8 inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full text-lg transition-colors shadow-lg" onclick="openInnovationModal()">
                COLLABORATE WITH US
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
            <span class="text-gray-600">Innovation Hub</span>
        </div>
    </div>
</div>

<!-- Main Content -->
<main class="container mx-auto px-4 py-12">
    
    <!-- Introduction -->
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-4xl font-bold mb-6 text-gray-900">Shaping the Future Through Innovation</h2>
        <p class="text-lg text-gray-700 leading-relaxed">
            At Milele Technologies, our Innovation Hub is dedicated to pushing the boundaries of technology. 
            We combine cutting-edge research with practical applications to develop solutions that address 
            tomorrow's challenges today.
        </p>
    </div>

    <!-- Research & Development Section -->
    <section class="mb-20" id="research">
        <div class="flex flex-col lg:flex-row items-center gap-12 mb-12">
            <div class="lg:w-1/2">
                <div class="bg-blue-100 inline-block px-4 py-2 rounded-full text-blue-700 font-semibold mb-4">
                    Pillar 1: Innovation Foundation
                </div>
                <h2 class="text-4xl font-bold mb-6 text-gray-900">Research & Development</h2>
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                    Our R&D department is the engine of innovation at Milele Technologies. We invest heavily in 
                    exploring emerging technologies, conducting experiments, and transforming theoretical concepts 
                    into practical, scalable solutions.
                </p>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-2 rounded-full mr-4">
                            <i class="fas fa-flask text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Technology Exploration</h3>
                            <p class="text-gray-600">Continuous research into emerging tech trends and their potential applications</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-2 rounded-full mr-4">
                            <i class="fas fa-microscope text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Proof of Concept</h3>
                            <p class="text-gray-600">Rapid prototyping and validation of innovative ideas</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-2 rounded-full mr-4">
                            <i class="fas fa-chart-line text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Market Analysis</h3>
                            <p class="text-gray-600">Identifying market gaps and opportunities for technological intervention</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2">
                <img src="{{ asset('images/jpg') }}" alt="Research Laboratory" class="rounded-xl shadow-2xl" loading="lazy">
            </div>
        </div>

        <!-- R&D Focus Areas -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition">
                <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-robot text-3xl text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Emerging Technologies</h3>
                <p class="text-gray-600">Exploring blockchain, edge computing, and quantum computing applications</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition">
                <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-cogs text-3xl text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Process Automation</h3>
                <p class="text-gray-600">Developing intelligent automation solutions for business efficiency</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition">
                <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-database text-3xl text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Data Science</h3>
                <p class="text-gray-600">Advanced analytics and predictive modeling for business intelligence</p>
            </div>
        </div>
    </section>

    <!-- Smart Technologies Section -->
    <section class="mb-20 bg-gradient-to-br from-gray-50 to-blue-50 p-8 md:p-12 rounded-3xl" id="smart-tech">
        <div class="text-center mb-12">
            <div class="bg-blue-100 inline-block px-4 py-2 rounded-full text-blue-700 font-semibold mb-4">
                Pillar 2: Intelligent Systems
            </div>
            <h2 class="text-4xl font-bold mb-4 text-gray-900">Smart Technologies</h2>
            <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                Creating intelligent environments through connected systems and smart infrastructure
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Smart Building Solutions -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="h-48 bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center">
                    <i class="fas fa-building text-6xl text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Smart Building Solutions</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span>Automated lighting and climate control</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span>Smart energy management systems</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span>Intelligent access control</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span>Predictive maintenance systems</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Smart City Solutions -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="h-48 bg-gradient-to-r from-green-500 to-green-600 flex items-center justify-center">
                    <i class="fas fa-city text-6xl text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Smart City Solutions</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mt-1 mr-3"></i>
                            <span>Intelligent traffic management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mt-1 mr-3"></i>
                            <span>Smart parking systems</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mt-1 mr-3"></i>
                            <span>Public safety monitoring</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mt-1 mr-3"></i>
                            <span>Waste management optimization</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Solutions Section -->
    <section class="mb-20" id="ai-solutions">
        <div class="flex flex-col-reverse lg:flex-row items-center gap-12">
            <div class="lg:w-1/2">
                <img src="{{ asset('images/.jpg') }}" alt="AI Solutions" class="rounded-xl shadow-2xl" loading="lazy">
            </div>
            <div class="lg:w-1/2">
                <div class="bg-indigo-100 inline-block px-4 py-2 rounded-full text-indigo-700 font-semibold mb-4">
                    Pillar 3: Artificial Intelligence
                </div>
                <h2 class="text-4xl font-bold mb-6 text-gray-900">AI Solutions</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Leveraging machine learning and deep learning to create intelligent systems that learn, adapt, and make decisions.
                </p>
                
                <div class="space-y-6">
                    <div class="bg-white p-5 rounded-lg shadow-md">
                        <h3 class="font-bold text-xl mb-2 flex items-center">
                            <i class="fas fa-brain text-indigo-600 mr-3"></i>
                            Machine Learning
                        </h3>
                        <p class="text-gray-600 ml-8">Predictive models, pattern recognition, and data-driven decision making</p>
                    </div>
                    
                    <div class="bg-white p-5 rounded-lg shadow-md">
                        <h3 class="font-bold text-xl mb-2 flex items-center">
                            <i class="fas fa-eye text-indigo-600 mr-3"></i>
                            Computer Vision
                        </h3>
                        <p class="text-gray-600 ml-8">Image recognition, object detection, and visual quality inspection</p>
                    </div>
                    
                    <div class="bg-white p-5 rounded-lg shadow-md">
                        <h3 class="font-bold text-xl mb-2 flex items-center">
                            <i class="fas fa-comment text-indigo-600 mr-3"></i>
                            Natural Language Processing
                        </h3>
                        <p class="text-gray-600 ml-8">Chatbots, sentiment analysis, and language understanding</p>
                    </div>
                    
                    <div class="bg-white p-5 rounded-lg shadow-md">
                        <h3 class="font-bold text-xl mb-2 flex items-center">
                            <i class="fas fa-chart-bar text-indigo-600 mr-3"></i>
                            Predictive Analytics
                        </h3>
                        <p class="text-gray-600 ml-8">Forecasting, trend analysis, and business intelligence</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- IoT Solutions Section -->
    <section class="mb-20" id="iot-solutions">
        <div class="bg-gradient-to-br from-indigo-50 to-blue-50 text-gray-900 rounded-3xl p-8 md:p-12 border border-blue-100">
            <div class="text-center mb-10">
                <div class="bg-blue-600 inline-block px-4 py-2 rounded-full text-white font-semibold mb-4">
                    Pillar 4: Connected World
                </div>
                <h2 class="text-4xl font-bold mb-4 text-gray-900">Internet of Things (IoT)</h2>
                <p class="text-xl text-gray-700">Connecting devices, collecting data, and creating intelligent ecosystems</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition border border-gray-100">
                    <i class="fas fa-industry text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Industrial IoT</h3>
                    <p class="text-gray-600">Smart manufacturing, predictive maintenance, and process optimization</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition border border-gray-100">
                    <i class="fas fa-tint text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Smart Agriculture</h3>
                    <p class="text-gray-600">Soil monitoring, automated irrigation, and crop management</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition border border-gray-100">
                    <i class="fas fa-heartbeat text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Healthcare IoT</h3>
                    <p class="text-gray-600">Remote patient monitoring and smart medical devices</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition border border-gray-100">
                    <i class="fas fa-truck text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Logistics & Supply Chain</h3>
                    <p class="text-gray-600">Asset tracking, fleet management, and inventory optimization</p>
                </div>
            </div>

            <!-- IoT Features -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-start space-x-4 bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="bg-blue-100 rounded-lg p-4">
                        <i class="fas fa-microchip text-2xl text-blue-600"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-xl mb-2 text-gray-900">Sensor Integration</h4>
                        <p class="text-gray-600">Custom sensor networks for real-time data collection and monitoring</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="bg-blue-100 rounded-lg p-4">
                        <i class="fas fa-cloud-upload-alt text-2xl text-blue-600"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-xl mb-2 text-gray-900">Cloud Connectivity</h4>
                        <p class="text-gray-600">Secure data transmission and cloud-based analytics platforms</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Innovation Process -->
    <section class="mb-20">
        <h2 class="text-4xl font-bold text-center mb-12">Our Innovation Process</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="text-center relative">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">1</div>
                <h3 class="font-bold text-xl mb-2">Ideation</h3>
                <p class="text-gray-600">Brainstorming and conceptualizing innovative solutions</p>
                <div class="hidden md:block absolute top-8 left-full w-full h-0.5 bg-blue-200"></div>
            </div>
            <div class="text-center relative">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">2</div>
                <h3 class="font-bold text-xl mb-2">Prototyping</h3>
                <p class="text-gray-600">Rapid development of proof-of-concept models</p>
                <div class="hidden md:block absolute top-8 left-full w-full h-0.5 bg-blue-200"></div>
            </div>
            <div class="text-center relative">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">3</div>
                <h3 class="font-bold text-xl mb-2">Testing</h3>
                <p class="text-gray-600">Rigorous validation and performance optimization</p>
                <div class="hidden md:block absolute top-8 left-full w-full h-0.5 bg-blue-200"></div>
            </div>
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">4</div>
                <h3 class="font-bold text-xl mb-2">Deployment</h3>
                <p class="text-gray-600">Scalable implementation and continuous improvement</p>
            </div>
        </div>
    </section>

</main>

<!-- Collaboration CTA -->
<section class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-16 px-4 text-center">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold mb-4">Ready to Innovate Together?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Partner with us to bring your innovative ideas to life. Let's create the future together.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <button onclick="openInnovationModal()" class="bg-white text-blue-600 hover:bg-gray-100 font-bold py-3 px-8 rounded-full text-lg transition-colors shadow-lg">
                START A PROJECT
            </button>
            <a href="#research" class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-600 font-bold py-3 px-8 rounded-full text-lg transition-colors">
                EXPLORE MORE
            </a>
        </div>
    </div>
</section>

<!-- Innovation Modal -->
<div id="innovationModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-hidden="true">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="fixed inset-0 bg-black opacity-50" onclick="closeInnovationModal()"></div>
        <div class="relative bg-white rounded-2xl max-w-2xl w-full p-8">
            <button onclick="closeInnovationModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                <i class="fas fa-times text-2xl"></i>
            </button>
            
            <h3 class="text-3xl font-bold mb-2">Innovation Collaboration</h3>
            <p class="text-gray-600 mb-6">Let's discuss how we can bring your innovative ideas to life</p>
            
            <form action="{{ route('innovation.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <input type="text" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Organization</label>
                        <input type="text" name="organization" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                        <input type="tel" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Innovation Area</label>
                    <select name="innovation_area" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                        <option value="">Select an area</option>
                        <option value="research">Research & Development</option>
                        <option value="smart-tech">Smart Technologies</option>
                        <option value="ai">AI Solutions</option>
                        <option value="iot">IoT Solutions</option>
                        <option value="other">Other Innovation</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Project Idea</label>
                    <textarea 
                        name="project_idea" 
                        rows="4" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Tell us about your innovative idea or project..."
                        required
                    ></textarea>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-md transition-colors">
                    SUBMIT INNOVATION PROPOSAL
                </button>
            </form>
        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
/* Smooth scrolling for anchor links */
html {
    scroll-behavior: smooth;
}

/* Custom animations */
.hover\:shadow-xl:hover {
    transform: translateY(-2px);
    transition: all 0.3s ease;
}

/* Process line connector */
@media (min-width: 768px) {
    .md\:block.absolute.top-8.left-full.w-full.h-0\.5.bg-blue-200 {
        width: calc(100% - 2rem);
        left: 2rem;
    }
}

/* Modal animation */
#innovationModal {
    transition: opacity 0.3s ease;
}

#innovationModal.show {
    opacity: 1;
    visibility: visible;
}

/* Card hover effects */
.bg-white\/10 {
    transition: all 0.3s ease;
}

.bg-white\/10:hover {
    transform: scale(1.02);
}
</style>
@endpush

@push('scripts')
<script>
function openInnovationModal() {
    const modal = document.getElementById('innovationModal');
    modal.classList.remove('hidden');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
}

function closeInnovationModal() {
    const modal = document.getElementById('innovationModal');
    modal.classList.add('hidden');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = 'auto';
}

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeInnovationModal();
    }
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>
@endpush