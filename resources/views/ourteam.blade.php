@extends('layouts.app')

@section('title', 'Our Team - Milele Technologies')

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
        }

        .ourteam-page .footer {
            text-align: center;
            background: white;
            padding: 3rem 2rem;
            border-radius: 40px;
            box-shadow: 0 8px 30px rgba(0,40,60,0.08);
            margin-top: 3rem;
        }

        .ourteam-page .footer h3 {
            font-size: 2rem;
            font-weight: 600;
            color: var(--ink, #1a237e);
            margin-bottom: 1rem;
        }

        .ourteam-page .footer p {
            font-size: 1.2rem;
            color: #336f80;
            margin-bottom: 2rem;
        }

        .ourteam-page .cta-button {
            background: var(--ink, #1a237e);
            color: white;
            border: none;
            padding: 1rem 3rem;
            border-radius: 60px;
            font-size: 1.3rem;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 8px 18px rgba(0,90,110,0.3);
        }

        .ourteam-page .cta-button:hover {
            background: var(--accent2, #1e88e5);
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(0,70,90,0.3);
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
        <img src="{{ asset('images/HOME.jpg') }}" alt="Management team" class="absolute inset-0 w-full h-full object-cover" loading="lazy">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white px-4 max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Meet Our management team</h1>
                <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg inline-block px-6 py-3">
                    <p class="text-lg md:text-xl font-medium">
                        Seasoned leaders driving Milele Technologies — excellence in ICT, engineering &amp; infrastructure.
                        Multidisciplinary expertise committed to dependable, future-ready solutions across Tanzania.
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
                    George leads the technical execution of Milele's engineering & power systems, ICT infrastructure, and industrial automation projects. With deep expertise in electrical systems design, PLC controls, and multidisciplinary integration, he ensures every project meets rigorous safety and performance standards. George’s hands-on leadership guarantees seamless delivery across mechanical installations, HVAC, and instrumentation for corporate and industrial clients.
                </p>
                <div class="guide-specialties">
                    <div class="specialties-title">Specialties:</div>
                    <div class="specialties-list">
                        <span class="specialty-tag">Electrical systems design</span>
                        <span class="specialty-tag">PLC &amp; industrial automation</span>
                        <span class="specialty-tag">Power systems &amp; HVAC</span>
                        <span class="specialty-tag">Instrumentation &amp; control</span>
                        <span class="specialty-tag">Mechanical works supervision</span>
                    </div>
                    <p class="languages">Phone: +255 716 693 327 &nbsp; Email: george@mileletechnologies.com · Languages: English, Swahili</p>
                </div>
            </div>
        </div>

        <div class="guide-card">
            <div class="guide-image">
                <img src="{{ asset('images/augustine kiganga.png') }}" alt="Augustine Kiganga – Commercial &amp; Sales Director" onerror="this.src='{{ asset('images/LOGO MILELE.png') }}'">
            </div>
            <div class="guide-details">
                <h2 class="guide-name">Augustine Kiganga</h2>
                <p class="guide-title">Commercial &amp; Sales Director – Milele Technologies</p>
                <p class="guide-description">
                    Augustine drives business growth and client partnerships across Tanzania. He translates complex technical capabilities into value-driven solutions for hospitality, industrial, and institutional clients. With a sharp focus on relationship building and operational alignment, Augustine ensures that Milele’s ICT, branding, and engineering services match market needs and deliver long-term value.
                </p>
                <div class="guide-specialties">
                    <div class="specialties-title">Specialties:</div>
                    <div class="specialties-list">
                        <span class="specialty-tag">Corporate sales &amp; strategy</span>
                        <span class="specialty-tag">Client relationship management</span>
                        <span class="specialty-tag">ICT &amp; digital solutions consulting</span>
                        <span class="specialty-tag">Branding &amp; creative services</span>
                        <span class="specialty-tag">Business development</span>
                    </div>
                    <p class="languages">Phone: +255 787 830 611 &nbsp; Email: kiganga@mileletechnologies.com · Languages: English, Swahili</p>
                </div>
            </div>
        </div>

        <div class="guide-card">
            <div class="guide-image">
                <img src="{{ asset('images/daniel mayala.png') }}" alt="Daniel Mayala – Commercial &amp; Operations Director" onerror="this.src='{{ asset('images/LOGO MILELE.png') }}'">
            </div>
            <div class="guide-details">
                <h2 class="guide-name">Daniel Mayala</h2>
                <p class="guide-title">Commercial &amp; Operations Director – Milele Technologies</p>
                <p class="guide-description">
                    Daniel orchestrates day-to-day operations, ensuring that every mechanical, industrial, and construction project is delivered with precision. He bridges the gap between engineering teams and client expectations, optimizing workflows for electrical installations, commercial building projects, and industrial services. His operational rigor guarantees that Milele’s multidisciplinary teams work in sync, on time and within budget.
                </p>
                <div class="guide-specialties">
                    <div class="specialties-title">Specialties:</div>
                    <div class="specialties-list">
                        <span class="specialty-tag">Operations &amp; project management</span>
                        <span class="specialty-tag">Mechanical &amp; industrial installation</span>
                        <span class="specialty-tag">Commercial building services</span>
                        <span class="specialty-tag">Construction coordination</span>
                        <span class="specialty-tag">Supply chain &amp; logistics</span>
                    </div>
                    <p class="languages">Phone: +255 762 666 763 &nbsp; Email: dmayala@mileletechnologies.com · Languages: English, Swahili</p>
                </div>
            </div>
        </div>

        <div style="background: #e2f0f5; border-radius: 40px; padding: 2.5rem; margin: 2.5rem 0; text-align: center; border: 1px solid #b1dae9;">
            <h3 style="font-size: 2rem; color: #0a3445; margin-bottom: 1rem;">Integrated expertise – one team</h3>
            <p style="max-width: 800px; margin: 0 auto; font-size: 1.15rem; color: #1c5a6d;">
                From ICT and digital solutions to engineering, power systems, and industrial construction — our directors embody Milele’s commitment to end-to-end delivery.
                Proudly trusted by partners like Apex Electrics, Savannah Explore, Orangi Hotels, Maalum Zanzibar, Cherith Schools, Doron Training Center and more.
            </p>
            <div style="margin-top: 1.8rem; display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
                <span style="background: white; padding: 0.4rem 1.4rem; border-radius: 50px; font-weight: 500; color: #0f5064;">Apex Electrics LTD</span>
                <span style="background: white; padding: 0.4rem 1.4rem; border-radius: 50px; font-weight: 500; color: #0f5064;">Savannah Explore</span>
                <span style="background: white; padding: 0.4rem 1.4rem; border-radius: 50px; font-weight: 500; color: #0f5064;">Orangi Hotels</span>
                <span style="background: white; padding: 0.4rem 1.4rem; border-radius: 50px; font-weight: 500; color: #0f5064;">Maalum Zanzibar</span>
                <span style="background: white; padding: 0.4rem 1.4rem; border-radius: 50px; font-weight: 500; color: #0f5064;">Dytech Technology</span>
                <span style="background: white; padding: 0.4rem 1.4rem; border-radius: 50px; font-weight: 500; color: #0f5064;">Cherith Schools</span>
                <span style="background: white; padding: 0.4rem 1.4rem; border-radius: 50px; font-weight: 500; color: #0f5064;">GM engineering</span>
            </div>
        </div>

        <div class="guide-card" style="background: #ffffff; border: 1px solid #c2e0ec;">
            <div class="guide-image" style="background: #b6d7e6; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 600; color: #1a4d5e;">
                <span>Milele<br>Technologies</span>
            </div>
            <div class="guide-details">
                <h2 class="guide-name" style="font-size: 1.9rem;">Our vision &amp; mission</h2>
                <p class="guide-title" style="font-size: 1rem; border-bottom-color: #9ecfdf;">Preferred partner for future-ready technology &amp; engineering</p>
                <div style="display: flex; flex-wrap: wrap; gap: 1.5rem; margin: 1rem 0;">
                    <div style="flex: 1 1 200px;">
                        <h4 style="color: #0c5468;">Vision</h4>
                        <p style="color: #2b5d6b;">To be the preferred partner for businesses and industries seeking dependable, future-ready technology and engineering solutions.</p>
                    </div>
                    <div style="flex: 1 1 200px;">
                        <h4 style="color: #0c5468;">Mission</h4>
                        <p style="color: #2b5d6b;">Provide end-to-end ICT, automation, and engineering services that simplify operations, improve efficiency, and support sustainable business growth.</p>
                    </div>
                </div>
                <div class="guide-specialties" style="margin-top: 0.5rem;">
                    <span style="font-weight: 700;">Core services:</span> ICT &amp; digital solutions (web, software, networking) · engineering &amp; power systems (HVAC, PLC, electrical) · creative, printing &amp; branding · mechanical, industrial &amp; construction services.
                </div>
                <p class="languages" style="margin-top: 0.8rem;">P.O. Box 8102, Arusha, Tanzania · www.mileletechnologies.com</p>
            </div>
        </div>

        <div class="footer">
            <h3>Ready to build with Milele Technologies?</h3>
            <p>Talk to our commercial directors – from industrial automation to complete ICT infrastructure.</p>
            <a href="contact" class="cta-button">info@mileletechnologies.com</a>
            <p style="margin-top: 2rem; font-size: 1rem;">Technical Director: +255 716 693 327 | Sales: +255 787 830 611 | Operations: +255 762 666 763</p>
        </div>
    </div>
    </div>
@endsection
