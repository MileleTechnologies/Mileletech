@extends('layouts.app')

@section('title', 'Our Team - Milele Technologies')

@section('content')
    <div class="relative hero-section h-screen w-full overflow-hidden" style="min-height: 600px;">
        <img src="{{ asset('images/HOME.jpg') }}" alt="Our Team" class="absolute inset-0 w-full h-full object-cover" loading="lazy">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white px-4 max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Meet Our management team</h1>
                <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                    <p class="text-lg md:text-xl font-medium">
                        Leadership contacts for Milele Technologies Limited.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 py-3">
        <div class="container mx-auto px-4">
            <div class="flex items-center text-sm">
                <a href="/" class="text-gray-600 hover:text-blue-600">Home</a>
                <span class="mx-2 text-gray-400">/</span>
                <span class="text-gray-800 font-medium">Our Team</span>
            </div>
        </div>
    </div>

    <main class="container mx-auto px-4 py-12">
        <div class="max-w-6xl mx-auto">
            <div class="space-y-10">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-0">
                        <div class="md:col-span-1">
                            <img src="{{ asset('images/LOGO MILELE.png') }}" alt="George Lyimo" class="w-full h-full object-cover" loading="lazy">
                        </div>
                        <div class="md:col-span-2 p-8">
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">George Lyimo</h2>
                            <p class="text-blue-700 font-semibold mt-2">Technical Director</p>
                            <div class="mt-5 space-y-2 text-gray-800">
                                <div class="text-lg"><span class="font-semibold">Phone:</span> +255 716 693 327</div>
                                <div class="text-lg"><span class="font-semibold">Email:</span> george@mileletechnologies.com</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-0">
                        <div class="md:col-span-1">
                            <img src="{{ asset('images/LOGO MILELE.png') }}" alt="Augustine Kiganga" class="w-full h-full object-cover" loading="lazy">
                        </div>
                        <div class="md:col-span-2 p-8">
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Augustine Kiganga</h2>
                            <p class="text-blue-700 font-semibold mt-2">Commercial &amp; Sales Director</p>
                            <div class="mt-5 space-y-2 text-gray-800">
                                <div class="text-lg"><span class="font-semibold">Phone:</span> +255 787 830 611</div>
                                <div class="text-lg"><span class="font-semibold">Email:</span> kiganga@mileletechnologies.com</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-0">
                        <div class="md:col-span-1">
                            <img src="{{ asset('images/LOGO MILELE.png') }}" alt="Daniel Mayala" class="w-full h-full object-cover" loading="lazy">
                        </div>
                        <div class="md:col-span-2 p-8">
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Daniel Mayala</h2>
                            <p class="text-blue-700 font-semibold mt-2">Commercial &amp; Operations Director</p>
                            <div class="mt-5 space-y-2 text-gray-800">
                                <div class="text-lg"><span class="font-semibold">Phone:</span> +255 762 666 763</div>
                                <div class="text-lg"><span class="font-semibold">Email:</span> dmayala@mileletechnologies.com</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                    <div class="text-xl md:text-2xl font-bold text-gray-900">Address: P.O. Box 8102, Arusha, Tanzania</div>
                    <div class="mt-2 text-xl md:text-2xl font-bold text-gray-900">Website: www.mileletechnologies</div>
                </div>
            </div>
        </div>
    </main>
@endsection
