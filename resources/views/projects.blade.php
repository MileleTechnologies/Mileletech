@extends('layouts.app')

@section('title', 'Projects - Milele Technologies')

@section('content')
<div class="relative hero-section h-screen w-full overflow-hidden" style="min-height: 600px;">
    <img
        src="{{ asset('images/HOME.jpg') }}"
        alt="Projects Background"
        class="absolute inset-0 w-full h-full object-cover"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Projects</h1>
            <p class="text-2xl md:text-3xl mb-8">Web Design • Electrical Fence • Printing & Graphics • Networking</p>

            <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                <center>
                    <p class="text-xl font-medium">Explore our completed projects and live deployments</p>
                </center>
            </div>

            <br>
            <center>
                <div class="mt-8 flex flex-col sm:flex-row justify-center gap-3">
                    <a href="#webdesign" class="inline-block bg-white text-blue-700 px-6 py-3 rounded-md font-semibold transition-colors hover:bg-blue-50">Web Design <span class="ml-1">→</span></a>
                    <a href="#networking" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md font-semibold transition-colors hover:bg-blue-700">Networking <span class="ml-1">→</span></a>
                </div>
            </center>
        </div>
    </div>
</div>

<div class="bg-gray-100 py-3">
    <div class="container mx-auto px-4">
        <div class="flex items-center text-sm">
            <a href="/" class="text-gray-600 hover:text-blue-600">Home</a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-800 font-medium">Projects</span>
        </div>
    </div>
</div>

<main class="container mx-auto px-4 py-12">
    <div class="max-w-6xl mx-auto">
        <section class="scroll-mt-24">
            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-diagram-project text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-gray-900">Our Completed Projects</h2>
                        <p class="text-gray-700 mt-2">We deliver end-to-end solutions across web design, electrical works, printing & graphics, and networking. Explore a selection of our completed work below. Click any live website to open it directly.</p>
                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="#webdesign" class="inline-flex items-center rounded-lg bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 font-semibold transition-colors">Web Design <span class="ml-2">→</span></a>
                            <a href="#electrical-fence" class="inline-flex items-center rounded-lg bg-white hover:bg-blue-50 text-blue-700 px-5 py-3 font-semibold border border-blue-200 transition-colors">Electrical Fence <span class="ml-2">→</span></a>
                            <a href="#printing-graphics" class="inline-flex items-center rounded-lg bg-white hover:bg-blue-50 text-blue-700 px-5 py-3 font-semibold border border-blue-200 transition-colors">Printing & Graphics <span class="ml-2">→</span></a>
                            <a href="#networking" class="inline-flex items-center rounded-lg bg-white hover:bg-blue-50 text-blue-700 px-5 py-3 font-semibold border border-blue-200 transition-colors">Networking <span class="ml-2">→</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="webdesign" class="project-section scroll-mt-24">
            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-laptop-code text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Web Design</h2>
                        <p class="text-gray-700 mt-2">Full website design & development projects with structured service architecture, lead generation, and performance optimization.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <a href="https://www.pyanatravelandtours.com" target="_blank" rel="noopener" class="group border border-gray-200 rounded-xl overflow-hidden hover:border-blue-200 transition-colors">
                        <img src="{{ asset('images/HOME.jpg') }}" alt="Pyana Travel & Tours" class="h-44 w-full object-cover">
                        <div class="p-6">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-blue-700">Pyana Travel & Tours</h3>
                                    <div class="text-sm text-gray-600 mt-1">www.pyanatravelandtours.com</div>
                                </div>
                                <span class="text-xs font-bold text-blue-700 bg-blue-50 px-3 py-1 rounded-full">Live</span>
                            </div>
                            <div class="mt-4 text-sm text-gray-700">Full website design & development, service categorization, inquiry forms, CMS setup, SEO structure.</div>
                        </div>
                    </a>

                    <a href="https://www.mtasafaris.com" target="_blank" rel="noopener" class="group border border-gray-200 rounded-xl overflow-hidden hover:border-blue-200 transition-colors">
                        <img src="{{ asset('images/logo.jpg') }}" alt="Maasai Tribe Adventure Safaris" class="h-44 w-full object-cover">
                        <div class="p-6">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-blue-700">Maasai Tribe Adventure Safaris</h3>
                                    <div class="text-sm text-gray-600 mt-1">www.mtasafaris.com</div>
                                </div>
                                <span class="text-xs font-bold text-blue-700 bg-blue-50 px-3 py-1 rounded-full">Live</span>
                            </div>
                            <div class="mt-4 text-sm text-gray-700">Corporate website, multi-page service architecture, lead forms, SEO & performance optimization.</div>
                        </div>
                    </a>

                    <a href="https://www.babylonlodge.com" target="_blank" rel="noopener" class="group border border-gray-200 rounded-xl overflow-hidden hover:border-blue-200 transition-colors">
                        <img src="{{ asset('images/HOME.jpg') }}" alt="Babylon Lodge" class="h-44 w-full object-cover">
                        <div class="p-6">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-blue-700">Babylon Lodge</h3>
                                    <div class="text-sm text-gray-600 mt-1">www.babylonlodge.com</div>
                                </div>
                                <span class="text-xs font-bold text-blue-700 bg-blue-50 px-3 py-1 rounded-full">Live</span>
                            </div>
                            <div class="mt-4 text-sm text-gray-700">Brand-focused design, service modules, inquiry integration, responsive framework.</div>
                        </div>
                    </a>

                    <a href="https://www.everydaysafaris.com" target="_blank" rel="noopener" class="group border border-gray-200 rounded-xl overflow-hidden hover:border-blue-200 transition-colors">
                        <img src="{{ asset('images/logo.jpg') }}" alt="Everyday Safaris" class="h-44 w-full object-cover">
                        <div class="p-6">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-blue-700">Everyday Safaris</h3>
                                    <div class="text-sm text-gray-600 mt-1">www.everydaysafaris.com</div>
                                </div>
                                <span class="text-xs font-bold text-blue-700 bg-blue-50 px-3 py-1 rounded-full">Live</span>
                            </div>
                            <div class="mt-4 text-sm text-gray-700">Website redesign, custom service modules, inquiry systems, hosting deployment.</div>
                        </div>
                    </a>

                    <a href="https://www.apexelectrics.co.tz" target="_blank" rel="noopener" class="group border border-gray-200 rounded-xl overflow-hidden hover:border-blue-200 transition-colors">
                        <img src="{{ asset('images/HOME.jpg') }}" alt="Apex Electrics" class="h-44 w-full object-cover">
                        <div class="p-6">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-blue-700">Apex Electrics</h3>
                                    <div class="text-sm text-gray-600 mt-1">www.apexelectrics.co.tz</div>
                                </div>
                                <span class="text-xs font-bold text-blue-700 bg-blue-50 px-3 py-1 rounded-full">Live</span>
                            </div>
                            <div class="mt-4 text-sm text-gray-700">Corporate website development, service portfolio structure, CMS integration.</div>
                        </div>
                    </a>

                    <a href="https://maalum.mileletechnologies.com/" target="_blank" rel="noopener" class="group border border-gray-200 rounded-xl overflow-hidden hover:border-blue-200 transition-colors">
                        <img src="{{ asset('images/MAALUM.png') }}" alt="Maalum Natural Swimming Pool" class="h-44 w-full object-cover">
                        <div class="p-6">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-blue-700">Maalum Natural Swimming Pool</h3>
                                    <div class="text-sm text-gray-600 mt-1">maalum.mileletechnologies.com</div>
                                </div>
                                <span class="text-xs font-bold text-blue-700 bg-blue-50 px-3 py-1 rounded-full">Live</span>
                            </div>
                            <div class="mt-4 text-sm text-gray-700">A modern, responsive web application for managing waiver forms and bookings at the Maalum Natural Swimming Pool in Zanzibar. The system provides a multi-language interface, digital signature capture, and automated PDF generation with email notification.</div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section id="electrical-fence" class="project-section scroll-mt-24">
            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-bolt text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Electrical Fence</h2>
                        <p class="text-gray-700 mt-2">Security and perimeter solutions delivered for hospitality and corporate facilities.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border border-gray-200 rounded-xl overflow-hidden">
                        <img src="{{ asset('images/electrical fence.jpeg') }}" alt="Electrical Fence Projects" class="h-44 w-full object-cover">
                        <div class="p-6">
                            <div class="text-lg font-bold text-gray-900">Selected sites</div>
                            <div class="mt-3 text-sm text-gray-700 space-y-2">
                                <div>Babylon Lodge</div>
                                <div>Bouganvilla Group of Company</div>
                                <div>Doron Training Center</div>
                                <div>Leny Hotel</div>
                                <div>Under The Shade Safari Lodge</div>
                            </div>
                            <div class="mt-4 text-xs text-gray-500">Direct website links can be added once provided.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="printing-graphics" class="project-section scroll-mt-24">
            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-print text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Printing & Graphics</h2>
                        <p class="text-gray-700 mt-2">Branding, large format printing, and event/exhibition graphics delivered for diverse organizations.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border border-gray-200 rounded-xl overflow-hidden">
                        <img src="{{ asset('images/HOME.jpg') }}" alt="Printing & Graphics Projects" class="h-44 w-full object-cover">
                        <div class="p-6">
                            <div class="text-lg font-bold text-gray-900">Selected projects</div>
                            <div class="mt-3 text-sm text-gray-700 space-y-2">
                                <div>Osborn Exhibition</div>
                                <div>Under The Shade Safari Lodge</div>
                                <div>Charity Junior School</div>
                                <div>TPHPA</div>
                            </div>
                            <div class="mt-4 text-xs text-gray-500">Direct website links can be added once provided.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="networking" class="project-section scroll-mt-24">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-network-wired text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Networking</h2>
                        <p class="text-gray-700 mt-2">Network infrastructure and support services delivered for hospitality facilities.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border border-gray-200 rounded-xl overflow-hidden">
                        <img src="{{ asset('images/net.jpeg') }}" alt="Networking Projects" class="h-44 w-full object-cover">
                        <div class="p-6">
                            <div class="text-lg font-bold text-gray-900">Sites served</div>
                            <div class="mt-3 text-sm text-gray-700 space-y-2">
                                <div>Under The Shade</div>
                                <div>Bouganvilla (Orange Collection)</div>
                                <div>Babylon</div>
                                <div>SGA Hotel</div>
                            </div>
                            <div class="mt-4 text-xs text-gray-500">Direct website links can be added once provided.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
