@extends('layouts.app')

@section('title', 'Testimonials & Reviews')

@section('content')
<div class="bg-white">
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
                <div>
                    <div class="text-sm font-semibold text-blue-700">Testimonials</div>
                    <h1 class="mt-2 text-3xl md:text-4xl font-bold text-gray-900">What Clients Say About Our Services</h1>
                    <p class="mt-3 text-gray-600 max-w-2xl">Read verified feedback across different services. You can also submit your own review with a rating and photo.</p>
                </div>
                <a href="javascript:void(0)" class="inline-flex items-center justify-center rounded-lg bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 font-semibold" onclick="openReviewModal()">Write a Review</a>
            </div>

            @if (session('testimonial_success'))
                <div class="mt-8 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-800 font-semibold">
                    {{ session('testimonial_success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mt-8 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-800">
                    <div class="font-semibold">Please fix the errors below and try again.</div>
                </div>
            @endif

            <div class="mt-10">
                    <div class="flex items-center justify-between gap-4">
                        <h2 class="text-xl font-bold text-gray-900">All Reviews</h2>
                        <div class="text-sm text-gray-600">{{ isset($testimonials) ? $testimonials->count() : 0 }} total</div>
                    </div>

                    <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                        @forelse ($testimonials as $t)
                            <div class="rounded-2xl border border-gray-200 bg-white shadow-sm p-6">
                                <div class="flex items-start gap-4">
                                    @if ($t->photo_path)
                                        <img src="{{ asset('storage/' . $t->photo_path) }}" alt="{{ $t->name }}" class="h-14 w-14 rounded-full object-cover ring-2 ring-gray-100" loading="lazy">
                                    @else
                                        <div class="h-14 w-14 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 font-bold">
                                            {{ strtoupper(substr($t->name, 0, 1)) }}
                                        </div>
                                    @endif

                                    <div class="flex-1">
                                        <div class="flex items-start justify-between gap-3">
                                            <div>
                                                <div class="font-bold text-gray-900">{{ $t->name }}</div>
                                                <div class="text-xs text-gray-600 mt-0.5">Service: <span class="font-semibold text-gray-800">{{ $t->service }}</span></div>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-yellow-400 text-sm leading-none">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        {{ $i <= (int) $t->rating ? '★' : '☆' }}
                                                    @endfor
                                                </div>
                                                <div class="text-xs text-gray-500 mt-1">{{ $t->created_at->format('M d, Y') }}</div>
                                            </div>
                                        </div>

                                        <p class="mt-4 text-gray-700">{{ $t->message }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="md:col-span-2 rounded-xl border border-gray-200 bg-gray-50 p-6 text-gray-700">
                                <div class="font-bold">No testimonials yet.</div>
                                <div class="mt-1">Be the first to share your experience.</div>
                            </div>
                        @endforelse
                    </div>
            </div>

            <div id="reviewModal" class="fixed inset-0 z-50 hidden" aria-hidden="true">
                <div class="absolute inset-0 bg-black/60" onclick="closeReviewModal()"></div>

                <div class="relative h-full w-full flex items-center justify-center p-4">
                    <div class="w-full max-w-2xl bg-white rounded-2xl shadow-2xl overflow-hidden ring-1 ring-black/5">
                        <div class="px-6 py-5 bg-gradient-to-r from-blue-700 to-indigo-900 text-white">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <div class="flex items-center gap-3">
                                        <div class="h-10 w-10 rounded-xl bg-white/15 flex items-center justify-center">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h3 class="text-xl font-semibold leading-tight">Write a Review</h3>
                                    </div>
                                    <p class="mt-2 text-sm text-white/85">Upload a photo (optional), rate the service, and share your feedback.</p>
                                </div>
                                <button type="button" class="text-white/80 hover:text-white" onclick="closeReviewModal()" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <form class="p-6" action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-800 mb-1">Your Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" required class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 placeholder-gray-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30" placeholder="Full name">
                                    @error('name')
                                        <div class="mt-1 text-sm text-red-600 font-semibold">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-800 mb-1">Service</label>
                                    <select name="service" required class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30">
                                        <option value="" disabled {{ old('service') ? '' : 'selected' }}>Select a service</option>
                                        <option value="ICT Solutions" {{ old('service') === 'ICT Solutions' ? 'selected' : '' }}>ICT Solutions</option>
                                        <option value="Software & Business Systems" {{ old('service') === 'Software & Business Systems' ? 'selected' : '' }}>Software & Business Systems</option>
                                        <option value="Automation & Control" {{ old('service') === 'Automation & Control' ? 'selected' : '' }}>Automation & Control</option>
                                        <option value="Engineering Services" {{ old('service') === 'Engineering Services' ? 'selected' : '' }}>Engineering Services</option>
                                        <option value="Printing & Branding" {{ old('service') === 'Printing & Branding' ? 'selected' : '' }}>Printing & Branding</option>
                                    </select>
                                    @error('service')
                                        <div class="mt-1 text-sm text-red-600 font-semibold">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-800 mb-1">Rating</label>
                                    <select name="rating" required class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30">
                                        <option value="" disabled {{ old('rating') ? '' : 'selected' }}>Select rating</option>
                                        <option value="5" {{ old('rating') == 5 ? 'selected' : '' }}>5 - Excellent</option>
                                        <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>4 - Very Good</option>
                                        <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>3 - Good</option>
                                        <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>2 - Fair</option>
                                        <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>1 - Poor</option>
                                    </select>
                                    @error('rating')
                                        <div class="mt-1 text-sm text-red-600 font-semibold">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-800 mb-1">Photo (optional)</label>
                                    <input type="file" name="photo" accept="image/*" class="w-full text-sm">
                                    <div class="mt-1 text-xs text-gray-500">JPG/PNG/WEBP up to 2MB.</div>
                                    @error('photo')
                                        <div class="mt-1 text-sm text-red-600 font-semibold">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-4">
                                <label class="block text-sm font-semibold text-gray-800 mb-1">Your Review</label>
                                <textarea name="message" rows="5" required class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 placeholder-gray-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30" placeholder="Write your testimonial...">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="mt-1 text-sm text-red-600 font-semibold">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-6 flex flex-col-reverse sm:flex-row gap-3 sm:justify-end">
                                <button type="button" class="px-5 py-3 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-50 font-semibold" onclick="closeReviewModal()">Cancel</button>
                                <button type="submit" class="px-5 py-3 rounded-lg bg-blue-600 text-white hover:bg-blue-700 font-semibold shadow-sm">Submit Review</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function openReviewModal() {
    const modal = document.getElementById('reviewModal');
    if (!modal) return;
    modal.classList.remove('hidden');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
}

function closeReviewModal() {
    const modal = document.getElementById('reviewModal');
    if (!modal) return;
    modal.classList.add('hidden');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeReviewModal();
});

document.addEventListener('DOMContentLoaded', function() {
    @if ($errors->any())
        openReviewModal();
    @endif
});
</script>
@endpush
