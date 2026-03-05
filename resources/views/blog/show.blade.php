@extends('layouts.app')

@section('title', $post['title'] . ' - Milele Technologies')

@section('content')
<div class="relative hero-section h-screen w-full overflow-hidden" style="min-height: 520px;">
    <img
        src="{{ $post['image'] }}"
        alt="{{ $post['title'] }}"
        class="absolute inset-0 w-full h-full object-cover"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4xl mx-auto">
            <div class="inline-flex items-center rounded-full bg-white/15 px-4 py-2 text-sm font-bold">
                {{ $post['category'] }} • {{ $post['date'] }}
            </div>
            <h1 class="mt-5 text-3xl md:text-5xl font-bold">{{ $post['title'] }}</h1>
            <p class="mt-4 text-xl md:text-2xl text-white/90">{{ $post['excerpt'] }}</p>
        </div>
    </div>
</div>

<div class="bg-gray-100 py-3">
    <div class="container mx-auto px-4">
        <div class="flex items-center text-sm">
            <a href="/" class="text-gray-600 hover:text-blue-600">Home</a>
            <span class="mx-2 text-gray-400">/</span>
            <a href="{{ route('blog.index') }}" class="text-gray-600 hover:text-blue-600">Blog</a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-800 font-medium">{{ $post['title'] }}</span>
        </div>
    </div>
</div>

<main class="container mx-auto px-4 py-12">
    <div class="max-w-4xl mx-auto">
        <article class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
            <div class="p-8 md:p-10">
                <div class="prose max-w-none">
                    @foreach ($post['content'] as $block)
                        @if ($block['type'] === 'h2')
                            <h2 class="text-2xl font-bold text-gray-900 mt-8">{{ $block['text'] }}</h2>
                        @elseif ($block['type'] === 'p')
                            <p class="text-gray-700 leading-relaxed mt-4">{{ $block['text'] }}</p>
                        @elseif ($block['type'] === 'list')
                            <ul class="mt-4 list-disc pl-6 text-gray-700">
                                @foreach ($block['items'] as $item)
                                    <li class="mt-2">{{ $item }}</li>
                                @endforeach
                            </ul>
                        @elseif ($block['type'] === 'callout')
                            <div class="mt-6 rounded-xl border border-blue-100 bg-blue-50 p-5">
                                <div class="font-bold text-blue-900">{{ $block['title'] }}</div>
                                <div class="mt-2 text-sm text-blue-900/90">{{ $block['text'] }}</div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="mt-10 pt-8 border-t border-gray-100 flex flex-col sm:flex-row gap-3 sm:items-center sm:justify-between">
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center justify-center rounded-lg bg-white hover:bg-blue-50 text-blue-700 px-6 py-3 font-semibold border border-blue-200 transition-colors">
                        Back to Blog <span class="ml-2">→</span>
                    </a>
                    <a href="/contact#contact-form" class="inline-flex items-center justify-center rounded-lg bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 font-semibold transition-colors">
                        Request Consultation <span class="ml-2">→</span>
                    </a>
                </div>
            </div>
        </article>
    </div>
</main>
@endsection
