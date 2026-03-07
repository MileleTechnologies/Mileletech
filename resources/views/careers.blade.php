@extends('layouts.app')

@section('title', 'Careers - Milele Technologies')

@section('content')
<section class="relative h-[420px] md:h-[520px] lg:h-[600px] bg-gradient-to-r from-blue-900 to-blue-700 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Careers</h1>
            <p class="text-lg md:text-xl mb-6">Build your career with a multidisciplinary team delivering ICT, engineering, automation, and power solutions.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-3">
                <a href="#apply-online" class="inline-block bg-white text-blue-700 px-6 py-3 rounded-md font-semibold transition-colors hover:bg-blue-50">Apply Online <span class="ml-1">→</span></a>
                <a href="#open-positions" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md font-semibold transition-colors hover:bg-blue-700">View Open Positions <span class="ml-1">→</span></a>
            </div>
        </div>
    </div>
</section>

<div class="bg-gray-100 py-3">
    <div class="container mx-auto px-4">
        <div class="flex items-center text-sm">
            <a href="/" class="text-gray-600 hover:text-blue-600">Home</a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-800 font-medium">Careers</span>
        </div>
    </div>
</div>

<main class="container mx-auto px-4 py-12">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col lg:flex-row gap-10">
            <aside class="lg:w-1/4">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4 sticky top-24">
                    <div class="space-y-2">
                        <a href="#open-positions" class="career-nav-link block px-4 py-3 rounded-lg font-semibold text-gray-800 hover:bg-blue-50 hover:text-blue-700 border-l-4 border-transparent" data-target="open-positions">Open Positions</a>
                        <a href="#internship-program" class="career-nav-link block px-4 py-3 rounded-lg font-semibold text-gray-800 hover:bg-blue-50 hover:text-blue-700 border-l-4 border-transparent" data-target="internship-program">Internship Program</a>
                        <a href="#apply-online" class="career-nav-link block px-4 py-3 rounded-lg font-semibold text-gray-800 hover:bg-blue-50 hover:text-blue-700 border-l-4 border-transparent" data-target="apply-online">Apply Online</a>
                        <a href="#career-opportunities" class="career-nav-link block px-4 py-3 rounded-lg font-semibold text-gray-800 hover:bg-blue-50 hover:text-blue-700 border-l-4 border-transparent" data-target="career-opportunities">Career Opportunities</a>
                    </div>
                </div>
            </aside>

            <div class="lg:w-3/4">
                @if (session('career_success'))
                    <div class="mb-8 rounded-xl border border-green-200 bg-green-50 px-6 py-4 text-green-800 font-semibold">
                        {{ session('career_success') }}
                    </div>
                @endif

                <section id="open-positions" class="career-section scroll-mt-24">
                    <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                        <div class="flex items-start gap-4 mb-6">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                                <i class="fas fa-briefcase text-xl"></i>
                            </div>
                            <div>
                                <h2 class="text-3xl font-bold text-gray-900">Open Positions</h2>
                                <p class="text-gray-700 mt-2">Explore current roles and submit your application. If you don’t see your role, you can still apply through the online portal.</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @forelse($jobPositions as $position)
                            <div class="border border-gray-200 rounded-xl p-6 hover:border-blue-200 transition-colors">
                                <div class="flex items-start justify-between gap-3">
                                    <div>
                                        <h3 class="text-lg font-bold text-gray-900">{{ $position->title }}</h3>
                                        <div class="text-sm text-gray-600 mt-1">{{ $position->employment_type }}</div>
                                    </div>
                                    <span class="text-xs font-bold text-blue-700 bg-blue-50 px-3 py-1 rounded-full">Open</span>
                                </div>
                                @if($position->description)
                                <p class="text-gray-700 mt-4 text-sm">{{ $position->description }}</p>
                                @endif
                                <a href="#apply-online" class="mt-4 inline-block text-blue-700 font-semibold hover:text-blue-800">Apply now →</a>
                            </div>
                            @empty
                            <p class="text-gray-500 col-span-2">No open positions at the moment. Check back soon or apply generally below.</p>
                            @endforelse
                        </div>

                        <div class="mt-8 rounded-xl bg-blue-50 border-l-4 border-blue-600 px-6 py-5">
                            <div class="font-bold text-gray-900">Tip</div>
                            <div class="text-gray-700 text-sm mt-1">Use the online application form and specify the role you’re applying for. Attach your CV for faster review.</div>
                        </div>
                    </div>
                </section>

                <section id="internship-program" class="career-section scroll-mt-24">
                    <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                        <div class="flex items-start gap-4 mb-6">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                                <i class="fas fa-user-graduate text-xl"></i>
                            </div>
                            <div>
                                <h2 class="text-3xl font-bold text-gray-900">Internship Program</h2>
                                <p class="text-gray-700 mt-2">Practical training for students and graduates to gain hands-on experience across our solutions and project teams.</p>
                            </div>
                        </div>

                        @if($internshipTracks->isNotEmpty())
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach($internshipTracks as $track)
                            <div class="rounded-xl border border-gray-200 p-6">
                                <div class="font-bold text-gray-900">{{ $track->title }}</div>
                                @if($track->description)
                                <div class="mt-4 text-sm text-gray-700">{{ $track->description }}</div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                        @else
                        <p class="text-gray-500">Internship program details coming soon.</p>
                        @endif

                        <div class="mt-6">
                            <a href="#apply-online" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 font-semibold transition-colors">Apply for Internship <span class="ml-1">→</span></a>
                        </div>
                    </div>
                </section>

                <section id="apply-online" class="career-section scroll-mt-24">
                    <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                        <div class="flex items-start gap-4 mb-6">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                                <i class="fas fa-file-signature text-xl"></i>
                            </div>
                            <div>
                                <h2 class="text-3xl font-bold text-gray-900">Apply Online</h2>
                                <p class="text-gray-700 mt-2">Submit your application and we’ll get back to you after review.</p>
                            </div>
                        </div>

                        <form action="{{ route('careers.apply') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-800 mb-1">Full Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" required class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 placeholder-gray-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30" placeholder="Your name">
                                    @error('name')
                                        <div class="mt-1 text-sm text-red-600 font-semibold">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-800 mb-1">Phone</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}" required class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 placeholder-gray-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30" placeholder="+255...">
                                    @error('phone')
                                        <div class="mt-1 text-sm text-red-600 font-semibold">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-800 mb-1">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}" required class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 placeholder-gray-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30" placeholder="you@example.com">
                                    @error('email')
                                        <div class="mt-1 text-sm text-red-600 font-semibold">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-800 mb-1">Application Type</label>
                                    <select name="application_type" required class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30">
                                        <option value="" disabled {{ old('application_type') ? '' : 'selected' }}>Select</option>
                                        <option value="Open Position" {{ old('application_type') === 'Open Position' ? 'selected' : '' }}>Open Position</option>
                                        <option value="Internship" {{ old('application_type') === 'Internship' ? 'selected' : '' }}>Internship</option>
                                        <option value="General" {{ old('application_type') === 'General' ? 'selected' : '' }}>General</option>
                                    </select>
                                    @error('application_type')
                                        <div class="mt-1 text-sm text-red-600 font-semibold">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="md:col-span-2">
                                    <label class="block text-sm font-semibold text-gray-800 mb-1">Position / Track (optional)</label>
                                    <input type="text" name="position" value="{{ old('position') }}" class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 placeholder-gray-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30" placeholder="e.g. ICT Support Engineer">
                                    @error('position')
                                        <div class="mt-1 text-sm text-red-600 font-semibold">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="md:col-span-2">
                                    <label class="block text-sm font-semibold text-gray-800 mb-1">Message</label>
                                    <textarea name="message" rows="5" required class="w-full rounded-lg border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 placeholder-gray-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-600/30" placeholder="Tell us about yourself and why you want to join...">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="mt-1 text-sm text-red-600 font-semibold">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="md:col-span-2">
                                    <label class="block text-sm font-semibold text-gray-800 mb-1">CV (optional)</label>
                                    <input type="file" name="cv" class="w-full text-sm" accept=".pdf,.doc,.docx">
                                    <div class="mt-1 text-xs text-gray-500">PDF/DOC/DOCX up to 5MB.</div>
                                    @error('cv')
                                        <div class="mt-1 text-sm text-red-600 font-semibold">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-col sm:flex-row gap-3 sm:justify-end">
                                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition-colors shadow-lg">Submit Application</button>
                            </div>
                        </form>
                    </div>
                </section>

                <section id="career-opportunities" class="career-section scroll-mt-24">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <div class="flex items-start gap-4 mb-6">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-700">
                                <i class="fas fa-chart-line text-xl"></i>
                            </div>
                            <div>
                                <h2 class="text-3xl font-bold text-gray-900">Career Opportunities</h2>
                                <p class="text-gray-700 mt-2">We offer growth opportunities across technical and business functions with continuous learning and real project exposure.</p>
                            </div>
                        </div>

                        @php
                            $lookFor = $careerOpportunities->where('section', 'what_we_look_for');
                            $departments = $careerOpportunities->where('section', 'departments');
                        @endphp
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="rounded-xl border border-gray-200 p-6">
                                <div class="font-bold text-gray-900">What we look for</div>
                                <div class="mt-4 space-y-2 text-sm text-gray-700">
                                    @forelse($lookFor as $item)
                                    <div class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-600"></i><span>{{ $item->label }}</span></div>
                                    @empty
                                    <p class="text-gray-400">Details coming soon.</p>
                                    @endforelse
                                </div>
                            </div>
                            <div class="rounded-xl border border-gray-200 p-6">
                                <div class="font-bold text-gray-900">Departments</div>
                                <div class="mt-4 space-y-2 text-sm text-gray-700">
                                    @forelse($departments as $item)
                                    <div class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-600"></i><span>{{ $item->label }}</span></div>
                                    @empty
                                    <p class="text-gray-400">Details coming soon.</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-center">
                            <a href="#apply-online" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 font-semibold transition-colors">Apply Now <span class="ml-1">→</span></a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script>
(function () {
    function setActiveLink() {
        const links = document.querySelectorAll('.career-nav-link');
        const sections = document.querySelectorAll('.career-section');

        let activeId = null;
        const fromTop = window.scrollY + 140;

        sections.forEach(section => {
            if (section.offsetTop <= fromTop) {
                activeId = section.getAttribute('id');
            }
        });

        links.forEach(link => {
            const target = link.getAttribute('data-target');
            if (target === activeId) {
                link.classList.add('bg-blue-50', 'text-blue-700');
                link.classList.remove('border-transparent');
                link.classList.add('border-blue-600');
            } else {
                link.classList.remove('bg-blue-50', 'text-blue-700');
                link.classList.add('border-transparent');
                link.classList.remove('border-blue-600');
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        setActiveLink();
        window.addEventListener('scroll', setActiveLink, { passive: true });
    });
})();
</script>
@endpush
