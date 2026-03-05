@extends('layouts.app')

@section('title', 'Expert Team - Milele Technologies')

@section('content')
    <div class="ourteam-page">
    <style>
        .ourteam-page {
            color: #1e2b37;
            line-height: 1.5;
        }

        .ourteam-page .ourteam-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 2rem 1.5rem;
        }

        .ourteam-page .guide-card {
            display: flex;
            flex-wrap: wrap;
            background: white;
            border-radius: 28px;
            box-shadow: 0 20px 35px -8px rgba(0,35,45,0.15);
            margin-bottom: 3rem;
            overflow: hidden;
            transition: all 0.2s ease;
            border: 1px solid rgba(26, 35, 126, 0.12);
        }

        .ourteam-page .guide-card:hover {
            box-shadow: 0 28px 40px -12px rgba(0,70,90,0.25);
            transform: scale(1.01);
        }

        .ourteam-page .guide-image {
            flex: 1 1 280px;
            max-width: 320px;
            background: #d9e2e6;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ourteam-page .guide-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .ourteam-page .guide-details {
            flex: 3 1 500px;
            padding: 2rem 2.2rem;
            background: #ffffff;
        }

        .ourteam-page .guide-name {
            font-size: 2rem;
            font-weight: 700;
            color: var(--ink, #1a237e);
            letter-spacing: -0.02em;
            margin-bottom: 0.3rem;
            line-height: 1.2;
        }

        .ourteam-page .guide-title {
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--accent2, #1e88e5);
            margin-bottom: 1.25rem;
            border-bottom: 2px solid rgba(30, 136, 229, 0.25);
            padding-bottom: 0.75rem;
        }

        .ourteam-page .guide-description {
            color: #254d5a;
            margin-bottom: 1.6rem;
            font-size: 0.98rem;
            white-space: pre-line;
        }

        .ourteam-page .guide-specialties {
            background: rgba(30, 136, 229, 0.06);
            padding: 1.2rem 1.5rem;
            border-radius: 20px;
            margin-top: 1.2rem;
        }

        .ourteam-page .specialties-title {
            font-weight: 700;
            color: var(--ink, #1a237e);
            margin-bottom: 0.6rem;
            font-size: 1.05rem;
        }

        .ourteam-page .specialties-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem 0.8rem;
            margin-bottom: 0.5rem;
        }

        .ourteam-page .specialty-tag {
            background: white;
            border-radius: 40px;
            padding: 0.4rem 1.1rem;
            font-size: 0.85rem;
            font-weight: 500;
            color: #1a237e;
            box-shadow: 0 2px 6px rgba(0,0,0,0.02);
            border: 1px solid rgba(26, 35, 126, 0.18);
        }

        .ourteam-page .languages {
            margin-top: 0.8rem;
            font-size: 0.95rem;
            font-weight: 500;
            color: #1e5f6b;
            border-top: 1px dashed rgba(30, 136, 229, 0.35);
            padding-top: 0.75rem;
            word-break: break-word;
        }

        .ourteam-page .languages a {
            color: inherit;
            text-decoration: underline;
        }

        @media (max-width: 800px) {
            .ourteam-page .guide-card {
                flex-direction: column;
            }
            .ourteam-page .guide-image {
                max-width: 100%;
                height: 280px;
            }
        }
    </style>

    <div class="relative hero-section h-screen w-full overflow-hidden" style="min-height: 600px;">
        <img src="{{ asset('images/HOME.jpg') }}" alt="Expert Team" class="absolute inset-0 w-full h-full object-cover" loading="lazy">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white px-4 max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Meet Our Expert Team</h1>
                <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                    <p class="text-lg md:text-xl font-medium">
                        Specialists delivering ICT, engineering &amp; software solutions for Milele Technologies.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="ourteam-container">
        <div class="guide-card">
            <div class="guide-image">
                <img src="{{ asset('images/george lyimo.png') }}" alt="George Lyimo – Technical Director" onerror="this.src='{{ asset('images/LOGO MILELE.png') }}'">
            </div>
            <div class="guide-details">
                <h2 class="guide-name">George Lyimo</h2>
                <p class="guide-title">Technical Director – Milele Technologies</p>
                <p class="guide-description">
                    George leads the technical execution of Milele's engineering & power systems, ICT infrastructure, and industrial automation projects. With deep expertise in electrical systems design, PLC controls, and multidisciplinary integration, he ensures every project meets rigorous safety and performance standards.
                </p>
                <div class="guide-specialties">
                    <div class="specialties-title">Specialties:</div>
                    <div class="specialties-list">
                        <span class="specialty-tag">Electrical systems design</span>
                        <span class="specialty-tag">PLC &amp; industrial automation</span>
                        <span class="specialty-tag">Power systems &amp; HVAC</span>
                        <span class="specialty-tag">Instrumentation &amp; control</span>
                    </div>
                    <p class="languages">Phone: +255 716 693 327 &nbsp; Email: george@mileletechnologies.com</p>
                </div>
            </div>
        </div>

        <div class="guide-card">
            <div class="guide-image">
                <img src="{{ asset('images/michael flavian.png') }}" alt="Michael Flavian – Full-Stack Software Developer" onerror="this.src='{{ asset('images/LOGO MILELE.png') }}'">
            </div>
            <div class="guide-details">
                <h2 class="guide-name">Michael Flavian</h2>
                <p class="guide-title">Full-Stack Software Developer | Open to New Opportunities</p>
                <p class="guide-description">
                    Michael builds scalable web and mobile applications, APIs, and business systems. He focuses on clean architecture, performance, and reliable delivery across modern frameworks.
                </p>
                <div class="guide-specialties">
                    <div class="specialties-title">Expertise:</div>
                    <div class="specialties-list">
                        <span class="specialty-tag">Laravel</span>
                        <span class="specialty-tag">PHP</span>
                        <span class="specialty-tag">Next.js</span>
                        <span class="specialty-tag">React</span>
                        <span class="specialty-tag">Flutter</span>
                        <span class="specialty-tag">Spring Boot</span>
                        <span class="specialty-tag">Angular</span>
                        <span class="specialty-tag">Python</span>
                    </div>
                    <p class="languages">
                        Phone: +255 758 553 532 &nbsp; Email: michael@mileletechnologies.com<br>
                        GitHub: <a href="https://github.com/flavy-hash" target="_blank" rel="noopener noreferrer">https://github.com/flavy-hash</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
