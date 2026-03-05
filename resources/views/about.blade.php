@extends('layouts.app')

@section('title', 'About Us - Milele Technologies')

@section('content')
<div class="relative hero-section h-screen w-full overflow-hidden" style="min-height: 600px;">
    <img
        src="{{ asset('images/HOME.jpg') }}"
        alt="About Milele Technologies"
        class="absolute inset-0 w-full h-full object-cover"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">About Us</h1>
            <p class="text-2xl md:text-3xl mb-8">Milele Technologies Limited</p>

            <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                <center>
                    <p class="text-xl font-medium">Dependable, future-ready technology and engineering solutions</p>
                </center>
            </div>

            <br>
            <center>
                <div class="mt-8 flex flex-col sm:flex-row justify-center gap-3">
                    <a href="#overview" class="inline-block bg-white text-blue-700 px-6 py-3 rounded-md font-semibold transition-colors hover:bg-blue-50">Company Overview <span class="ml-1">→</span></a>
                    <a href="#vision" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md font-semibold transition-colors hover:bg-blue-700">Vision <span class="ml-1">→</span></a>
                    <a href="#mission" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md font-semibold transition-colors hover:bg-blue-700">Mission <span class="ml-1">→</span></a>
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
            <span class="text-gray-800 font-medium">About Us</span>
        </div>
    </div>
</div>

<main class="container mx-auto px-4 py-12">
    <div class="max-w-6xl mx-auto">
        <section id="overview" class="scroll-mt-24">
            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                        <i class="fas fa-building text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Company Overview</h2>
                        <p class="text-gray-700 mt-3">Milele technologies Limited is a multidisciplinary ICT, engineering, and infrastructure solutions company based in Tanzania. We specialize in delivering integrated technology, electrical, mechanical, and industrial solutions to corporate, hospitality, industrial, and institutional clients.</p>
                        <p class="text-gray-700 mt-4">Our team combines technical expertise, operational excellence, and customer-focused service to ensure successful project delivery and long-term partnerships.</p>
                        <p class="text-gray-700 mt-4">At Milele Technologies, our operations are driven by a dedicated force of highly skilled local technology specialists across Tanzania, each bringing authentic technical expertise, industry knowledge, and on-the-ground experience to every project we undertake. What sets us apart is not just our local strength but our diverse, multilingual global team of expert technology consultants, strategically positioned across various time zones to ensure round-the-clock, seamless support for clients worldwide. Our commitment to technical excellence, innovation, and customer satisfaction allows us to deliver solutions that are not only transformative but deeply integrated with the unique needs and objectives of each client.</p>
                        <p class="text-gray-700 mt-4"> Milele Technologies Limited is a premier multidisciplinary technology company based in Tanzania, specializing in providing cutting-edge ICT solutions, engineering services, automation systems, and industrial infrastructure. Our mission is to cater to businesses of all sizes by offering comprehensive, scalable, and innovative technology solutions, ensuring that every organization can leverage the power of technology to achieve their goals.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <section id="vision" class="scroll-mt-24">
                <div class="bg-white rounded-xl shadow-lg p-8 h-full">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                            <i class="fas fa-eye text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900">Vision</h2>
                            <p class="text-gray-700 mt-3">To be the preferred partner for businesses and industries seeking dependable, future-ready technology and engineering solutions.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="mission" class="scroll-mt-24">
                <div class="bg-white rounded-xl shadow-lg p-8 h-full">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                            <i class="fas fa-bullseye text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900">Mission</h2>
                            <p class="text-gray-700 mt-3">To provide end-to-end ICT, automation, and engineering services that simplify operations, improve efficiency, and support sustainable business growth.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
@endsection
