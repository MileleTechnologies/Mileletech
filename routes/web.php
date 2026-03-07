<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteRequestController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\CareerApplicationController;
use App\Http\Controllers\ContactMessageController;

Route::get('/', function () {
    return view('index');
});

Route::get('/industries', function () {
    return view('industries');
});

Route::get('/careers', function () {
    return view('careers', [
        'jobPositions'        => \App\Models\JobPosition::where('is_active', true)->orderBy('sort_order')->get(),
        'internshipTracks'    => \App\Models\InternshipTrack::where('is_active', true)->orderBy('sort_order')->get(),
        'careerOpportunities' => \App\Models\CareerOpportunity::where('is_active', true)->orderBy('sort_order')->get(),
    ]);
})->name('careers');

Route::post('/careers/apply', [CareerApplicationController::class, 'store'])->name('careers.apply');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/guider', function () {
    return redirect('/ourteam');
})->name('guider');

Route::get('/ourteam', function () {
    return view('ourteam');
})->name('ourteam');

Route::get('/expertteam', function () {
    return view('expertteam');
})->name('expertteam');

Route::get('/partners', function () {
    return view('partners');
})->name('partners');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/innovation-hub', function () {
    return view('innovation');
})->name('innovation-hub');

Route::post('/innovation-hub', [\App\Http\Controllers\InnovationProposalController::class, 'store'])->name('innovation.store');

Route::post('/contact', function () {
    return app(ContactMessageController::class)->store(request());
})->name('contact.submit');

Route::get('/blog', function () {
    $posts = [
        [
            'slug' => 'smart-networking-foundations-for-growing-businesses',
            'title' => 'Smart Networking Foundations for Growing Businesses',
            'category' => 'Technology News',
            'date' => 'March 2026',
            'excerpt' => 'A practical guide to building reliable networks: structured cabling, switching, Wi‑Fi, security, and monitoring—optimized for SMEs and institutions.',
            'image' => asset('images/HOME.jpg'),
            'content' => [
                ['type' => 'p', 'text' => 'A modern organization relies on stable connectivity to run ERPs, cloud tools, VoIP, CCTV, and access control. Networking problems typically show up as “slow internet”, but the root cause is often design, cabling, or unmanaged growth.'],
                ['type' => 'h2', 'text' => '1) Start with structured cabling'],
                ['type' => 'p', 'text' => 'Use proper labeling, patch panels, and tested cable runs. A tidy rack and correct segmentation reduces downtime and speeds up troubleshooting.'],
                ['type' => 'h2', 'text' => '2) Choose the right switching approach'],
                ['type' => 'p', 'text' => 'Managed switches enable VLANs, QoS, and better visibility. This is crucial for separating staff traffic from guests, IoT devices, and security systems.'],
                ['type' => 'h2', 'text' => '3) Secure Wi‑Fi and segment traffic'],
                ['type' => 'list', 'items' => [
                    'Separate guest Wi‑Fi from internal systems (VLANs).',
                    'Use strong authentication and rotate credentials.',
                    'Centralize management for access points when coverage grows.'
                ]],
                ['type' => 'callout', 'title' => 'Milele Tip', 'text' => 'If you run CCTV, access control, or intercom systems on the same network, traffic segmentation and QoS can prevent video dropouts and “offline” devices.'],
                ['type' => 'h2', 'text' => '4) Monitor and maintain'],
                ['type' => 'p', 'text' => 'Basic monitoring (uptime, bandwidth, device health) helps you catch issues before users report them. Maintenance includes firmware updates, backups, and periodic audits.'
                ]
            ]
        ],
        [
            'slug' => 'power-backup-and-solar-planning-for-business-continuity',
            'title' => 'Power Backup & Solar Planning for Business Continuity',
            'category' => 'Expert Articles',
            'date' => 'March 2026',
            'excerpt' => 'How to size backups, reduce outages, and design solar/UPS systems that keep critical operations running without overspending.',
            'image' => asset('images/tz.png'),
            'content' => [
                ['type' => 'p', 'text' => 'Power disruptions can damage equipment and interrupt operations. A good backup strategy focuses on what must stay online (critical loads) and for how long.'],
                ['type' => 'h2', 'text' => 'Identify critical loads'],
                ['type' => 'list', 'items' => [
                    'Networking & internet equipment',
                    'Security systems (CCTV, access control)',
                    'Servers / business systems',
                    'Essential lighting and communication'
                ]],
                ['type' => 'h2', 'text' => 'UPS vs inverter vs generator'],
                ['type' => 'p', 'text' => 'UPS covers short gaps and ensures clean power. Inverters/solar provide longer runtime. Generators are useful for extended outages. The best solution is often a hybrid design.'],
                ['type' => 'callout', 'title' => 'Planning Note', 'text' => 'Sizing depends on peak load, surge requirements, and desired runtime. If you share your load list, we can estimate an appropriate design and budget.'
                ]
            ]
        ],
        [
            'slug' => 'case-study-secure-surveillance-and-access-control-rollout',
            'title' => 'Case Study: Secure Surveillance & Access Control Rollout',
            'category' => 'Case Studies',
            'date' => 'March 2026',
            'excerpt' => 'An end-to-end approach: site survey, camera placement, network readiness, NVR configuration, and staff training for reliable security operations.',
            'image' => asset('images/calvin founder 3.png'),
            'content' => [
                ['type' => 'p', 'text' => 'Security projects succeed when they combine correct camera placement, stable power, network segmentation, and good operating procedures.'],
                ['type' => 'h2', 'text' => 'Project approach'],
                ['type' => 'list', 'items' => [
                    'Site survey and risk mapping',
                    'Camera coverage design (entry points, perimeters, critical rooms)',
                    'Network readiness and dedicated VLAN for surveillance',
                    'NVR configuration, retention policy, and user roles',
                    'Handover checklist and staff training'
                ]],
                ['type' => 'callout', 'title' => 'Outcome', 'text' => 'Improved incident response through clear footage, reliable uptime, and controlled access rights across departments.'
                ]
            ]
        ],
    ];

    return view('blog.index', [
        'posts' => $posts,
    ]);
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    $posts = [
        [
            'slug' => 'smart-networking-foundations-for-growing-businesses',
            'title' => 'Smart Networking Foundations for Growing Businesses',
            'category' => 'Technology News',
            'date' => 'March 2026',
            'excerpt' => 'A practical guide to building reliable networks: structured cabling, switching, Wi‑Fi, security, and monitoring—optimized for SMEs and institutions.',
            'image' => asset('images/HOME.jpg'),
            'content' => [
                ['type' => 'p', 'text' => 'A modern organization relies on stable connectivity to run ERPs, cloud tools, VoIP, CCTV, and access control. Networking problems typically show up as “slow internet”, but the root cause is often design, cabling, or unmanaged growth.'],
                ['type' => 'h2', 'text' => '1) Start with structured cabling'],
                ['type' => 'p', 'text' => 'Use proper labeling, patch panels, and tested cable runs. A tidy rack and correct segmentation reduces downtime and speeds up troubleshooting.'],
                ['type' => 'h2', 'text' => '2) Choose the right switching approach'],
                ['type' => 'p', 'text' => 'Managed switches enable VLANs, QoS, and better visibility. This is crucial for separating staff traffic from guests, IoT devices, and security systems.'],
                ['type' => 'h2', 'text' => '3) Secure Wi‑Fi and segment traffic'],
                ['type' => 'list', 'items' => [
                    'Separate guest Wi‑Fi from internal systems (VLANs).',
                    'Use strong authentication and rotate credentials.',
                    'Centralize management for access points when coverage grows.'
                ]],
                ['type' => 'callout', 'title' => 'Milele Tip', 'text' => 'If you run CCTV, access control, or intercom systems on the same network, traffic segmentation and QoS can prevent video dropouts and “offline” devices.'],
                ['type' => 'h2', 'text' => '4) Monitor and maintain'],
                ['type' => 'p', 'text' => 'Basic monitoring (uptime, bandwidth, device health) helps you catch issues before users report them. Maintenance includes firmware updates, backups, and periodic audits.'
                ]
            ]
        ],
        [
            'slug' => 'power-backup-and-solar-planning-for-business-continuity',
            'title' => 'Power Backup & Solar Planning for Business Continuity',
            'category' => 'Expert Articles',
            'date' => 'March 2026',
            'excerpt' => 'How to size backups, reduce outages, and design solar/UPS systems that keep critical operations running without overspending.',
            'image' => asset('images/tz.png'),
            'content' => [
                ['type' => 'p', 'text' => 'Power disruptions can damage equipment and interrupt operations. A good backup strategy focuses on what must stay online (critical loads) and for how long.'],
                ['type' => 'h2', 'text' => 'Identify critical loads'],
                ['type' => 'list', 'items' => [
                    'Networking & internet equipment',
                    'Security systems (CCTV, access control)',
                    'Servers / business systems',
                    'Essential lighting and communication'
                ]],
                ['type' => 'h2', 'text' => 'UPS vs inverter vs generator'],
                ['type' => 'p', 'text' => 'UPS covers short gaps and ensures clean power. Inverters/solar provide longer runtime. Generators are useful for extended outages. The best solution is often a hybrid design.'],
                ['type' => 'callout', 'title' => 'Planning Note', 'text' => 'Sizing depends on peak load, surge requirements, and desired runtime. If you share your load list, we can estimate an appropriate design and budget.'
                ]
            ]
        ],
        [
            'slug' => 'case-study-secure-surveillance-and-access-control-rollout',
            'title' => 'Case Study: Secure Surveillance & Access Control Rollout',
            'category' => 'Case Studies',
            'date' => 'March 2026',
            'excerpt' => 'An end-to-end approach: site survey, camera placement, network readiness, NVR configuration, and staff training for reliable security operations.',
            'image' => asset('images/calvin founder 3.png'),
            'content' => [
                ['type' => 'p', 'text' => 'Security projects succeed when they combine correct camera placement, stable power, network segmentation, and good operating procedures.'],
                ['type' => 'h2', 'text' => 'Project approach'],
                ['type' => 'list', 'items' => [
                    'Site survey and risk mapping',
                    'Camera coverage design (entry points, perimeters, critical rooms)',
                    'Network readiness and dedicated VLAN for surveillance',
                    'NVR configuration, retention policy, and user roles',
                    'Handover checklist and staff training'
                ]],
                ['type' => 'callout', 'title' => 'Outcome', 'text' => 'Improved incident response through clear footage, reliable uptime, and controlled access rights across departments.'
                ]
            ]
        ],
    ];

    $post = null;
    foreach ($posts as $p) {
        if ($p['slug'] === $slug) {
            $post = $p;
            break;
        }
    }

    if (!$post) {
        abort(404);
    }

    return view('blog.show', [
        'post' => $post,
    ]);
})->name('blog.show');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/services/ict-solutions', function () {
    return view('ict-solutions');
});

Route::get('/services/power-systems', function () {
    return view('power-systems');
});

Route::get('/services/automation', function () {
    return view('automation');
});

Route::get('/services/engineering', function () {
    return view('engineering');
});

Route::get('/reviews', [TestimonialController::class, 'index'])->name('reviews');

Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');

Route::post('/quote-request', [QuoteRequestController::class, 'store'])->name('quote.store');
