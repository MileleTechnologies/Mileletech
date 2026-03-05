@extends('layouts.app')

@section('title', 'Partners - Milele Technologies')

@section('content')
<div class="relative hero-section h-screen w-full overflow-hidden" style="min-height: 600px;">
    <img
        src="{{ asset('images/HOME.jpg') }}"
        alt="Partners Background"
        class="absolute inset-0 w-full h-full object-cover"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Partners</h1>
            <p class="text-2xl md:text-3xl mb-8">Trusted by organizations across Tanzania</p>

            <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                <center>
                    <p class="text-xl font-medium">A selection of partners & clients we've delivered solutions for</p>
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
            <span class="text-gray-800 font-medium">Partners</span>
        </div>
    </div>
</div>

<main class="container mx-auto px-4 py-12">
    <div class="max-w-6xl mx-auto">
        <section class="scroll-mt-24">
            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-handshake text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-gray-900">Our Partners & Clients</h2>
                        <p class="text-gray-700 mt-2">This page is built from the same list shown in our Completed Projects section. Where a website is available, you can open it directly.</p>
                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="#web-digital" class="inline-flex items-center rounded-lg bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 font-semibold transition-colors">Web & Digital <span class="ml-2">→</span></a>
                            <a href="#engineering-security" class="inline-flex items-center rounded-lg bg-white hover:bg-blue-50 text-blue-700 px-5 py-3 font-semibold border border-blue-200 transition-colors">Engineering & Security <span class="ml-2">→</span></a>
                            <a href="#printing-graphics" class="inline-flex items-center rounded-lg bg-white hover:bg-blue-50 text-blue-700 px-5 py-3 font-semibold border border-blue-200 transition-colors">Printing & Graphics <span class="ml-2">→</span></a>
                            <a href="#networking" class="inline-flex items-center rounded-lg bg-white hover:bg-blue-50 text-blue-700 px-5 py-3 font-semibold border border-blue-200 transition-colors">Networking <span class="ml-2">→</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="web-digital" class="scroll-mt-24">
            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-laptop-code text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Web & Digital</h2>
                        <p class="text-gray-700 mt-2">Organizations we have supported with websites and digital platforms.</p>
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
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section id="engineering-security" class="scroll-mt-24">
            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-bolt text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Engineering & Security</h2>
                        <p class="text-gray-700 mt-2">Sites and organizations we have supported through electrical fence and related works.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border border-gray-200 rounded-xl overflow-hidden">
                        <img src="{{ asset('images/electrical fence.jpeg') }}" alt="Electrical Fence" class="h-44 w-full object-cover">
                        <div class="p-6">
                            <div class="text-lg font-bold text-gray-900">Selected sites</div>
                            <div class="mt-3 text-sm text-gray-700 space-y-2">
                                <div>Babylon Lodge</div>
                                <div>Bouganvilla Group of Company</div>
                                <div>Doron Training Center</div>
                                <div>Leny Hotel</div>
                                <div>Under The Shade Safari Lodge</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="printing-graphics" class="scroll-mt-24">
            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-print text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Printing & Graphics</h2>
                        <p class="text-gray-700 mt-2">Branding, printing and graphics projects delivered for organizations and events.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border border-gray-200 rounded-xl overflow-hidden">
                        <img src="{{ asset('images/HOME.jpg') }}" alt="Printing & Graphics" class="h-44 w-full object-cover">
                        <div class="p-6">
                            <div class="text-lg font-bold text-gray-900">Selected projects</div>
                            <div class="mt-3 text-sm text-gray-700 space-y-2">
                                <div>Osborn Exhibition</div>
                                <div>Under The Shade Safari Lodge</div>
                                <div>Charity Junior School</div>
                                <div>TPHPA</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="networking" class="scroll-mt-24">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-network-wired text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Networking</h2>
                        <p class="text-gray-700 mt-2">Network infrastructure services delivered for hospitality and corporate clients.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border border-gray-200 rounded-xl overflow-hidden">
                        <img src="{{ asset('images/net.jpeg') }}" alt="Networking" class="h-44 w-full object-cover">
                        <div class="p-6">
                            <div class="text-lg font-bold text-gray-900">Sites served</div>
                            <div class="mt-3 text-sm text-gray-700 space-y-2">
                                <div>Under The Shade</div>
                                <div>Bouganvilla (Orange Collection)</div>
                                <div>Babylon</div>
                                <div>SGA Hotel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
