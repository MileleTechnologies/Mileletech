@extends('layouts.app')

@section('title', 'Blog - Milele Technologies')

@section('content')
<div class="relative hero-section h-screen w-full overflow-hidden" style="min-height: 560px;">
    <img
        src="{{ asset('images/HOME.jpg') }}"
        alt="Blog Background"
        class="absolute inset-0 w-full h-full object-cover"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Blog</h1>
            <p class="text-2xl md:text-3xl mb-8">Technology insights, case studies, and practical resources</p>

            <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                <center>
                    <p class="text-xl font-medium">Latest updates from Milele Technologies</p>
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
            <span class="text-gray-800 font-medium">Blog</span>
        </div>
    </div>
</div>

<main class="container mx-auto px-4 py-12">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($posts as $post)
                        <a href="{{ route('blog.show', $post['slug']) }}" class="group bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow">
                            <div class="h-44 bg-gray-100 overflow-hidden">
                                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover group-hover:scale-[1.02] transition-transform" loading="lazy" />
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-3 text-xs">
                                    <div class="inline-flex items-center rounded-full bg-blue-50 text-blue-700 px-3 py-1 font-bold">{{ $post['category'] }}</div>
                                    <div class="text-gray-500 font-semibold">{{ $post['date'] }}</div>
                                </div>
                                <h2 class="mt-4 text-xl font-bold text-gray-900 group-hover:text-blue-700 transition-colors">{{ $post['title'] }}</h2>
                                <p class="mt-2 text-sm text-gray-700 leading-relaxed">{{ $post['excerpt'] }}</p>
                                <div class="mt-4 inline-flex items-center text-blue-700 font-bold">
                                    Read more <span class="ml-2">→</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            <aside class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-7">
                    <div class="text-lg font-bold text-gray-900">Explore</div>

                    <div class="mt-4 grid gap-2 text-sm">
                        <a href="{{ route('blog.index') }}" class="rounded-lg border border-gray-100 bg-gray-50 hover:bg-blue-50 px-4 py-3 font-semibold text-gray-800 hover:text-blue-700 transition-colors">All Posts</a>
                    </div>

                    <div class="mt-8">
                        <div class="text-lg font-bold text-gray-900">Need help with a project?</div>
                        <p class="mt-2 text-sm text-gray-700">Contact our team for consultation, quotations, and technical support.</p>
                        <div class="mt-4">
                            <a href="/contact#contact-form" class="inline-flex items-center justify-center w-full rounded-lg bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 font-semibold transition-colors">Contact Us <span class="ml-2">→</span></a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</main>
@endsection
