<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    private array $articles = [
        'top-5-digital-signage-trends-2026' => [
            'category' => 'Trends',
            'read_time' => '6 min read',
            'title' => 'Top 5 Digital Signage Trends for 2026',
            'excerpt' => 'Discover the latest trends shaping the future of digital signage, from AI-powered content to interactive displays.',
            'author' => 'Sarah Johnson',
            'date' => 'April 15, 2026',
            'image' => 'icons/signage16img.jpg',
            'author_initial' => 'S',
            'intro' => 'Digital signage is moving beyond simple screen networks. Businesses now expect smarter content, stronger analytics, faster updates, and display experiences that adapt to real customer behavior.',
            'sections' => [
                ['heading' => 'Smarter Content Automation', 'body' => 'AI-assisted planning is helping teams create, rotate, and test content faster. Retailers, offices, and venues can keep screens fresh without rebuilding campaigns manually every day.'],
                ['heading' => 'Interactive Display Experiences', 'body' => 'Touch, QR, and mobile-connected journeys are becoming more common. These interactions help customers browse products, request support, and move through spaces with less friction.'],
                ['heading' => 'Cloud-Based Screen Control', 'body' => 'Cloud platforms make it easier to manage multiple locations from one dashboard. Teams can publish updates, monitor playback, and adjust schedules without visiting each site.'],
                ['heading' => 'Data-Led Campaign Decisions', 'body' => 'More signage networks are being measured against footfall, time slots, offers, and sales results. This helps businesses decide what to show and when to show it.'],
                ['heading' => 'Commercial-Grade Reliability', 'body' => 'As screens become part of daily operations, businesses are choosing displays and media players designed for long operating hours. Reliability is becoming just as important as design.'],
            ],
            'closing' => 'The strongest signage strategies in 2026 will combine reliable hardware, flexible software, and content that can respond quickly to business needs.',
        ],
        'retail-digital-signage-guide' => [
            'category' => 'Retail',
            'read_time' => '7 min read',
            'title' => 'How to Choose the Right Digital Signage for Retail',
            'excerpt' => 'A comprehensive guide to selecting the perfect digital signage solution for your retail environment.',
            'author' => 'Michael Chen',
            'date' => 'April 10, 2026',
            'image' => 'icons/page17img.jpg',
            'author_initial' => 'M',
            'intro' => 'Selecting the right digital signage solution for your retail business requires careful consideration of multiple factors. This guide will help you make an informed decision that aligns with your business goals.',
            'sections' => [
                ['heading' => 'Understand Your Objectives', 'body' => 'Before evaluating hardware and software options, define what you want to achieve. Your goal may be sales uplift, brand awareness, wayfinding, queue management, or a better customer experience.'],
                ['heading' => 'Consider Display Location and Environment', 'body' => 'Indoor displays have different requirements than window-facing or outdoor installations. Assess lighting, viewing distance, mounting position, and customer movement before choosing a screen.'],
                ['heading' => 'Evaluate Content Management Needs', 'body' => 'Decide how frequently your team will update offers, videos, menus, and campaigns. A cloud CMS is helpful when multiple screens or locations need quick centralized updates.'],
                ['heading' => 'Budget for Total Cost of Ownership', 'body' => 'Beyond the display, include media players, software licenses, installation, maintenance, content creation, and power usage. This gives a more realistic view of the investment.'],
                ['heading' => 'Plan for Scalability', 'body' => 'Choose a setup that can grow from one store to many stores. A scalable platform helps you add screens, groups, and schedules without changing the entire system later.'],
                ['heading' => 'Prioritize Reliability and Support', 'body' => 'Retail screens often run for long hours, so commercial-grade hardware matters. Responsive support and proper setup reduce downtime during important store hours.'],
            ],
            'closing' => 'By evaluating these factors carefully, you can select a digital signage solution that delivers measurable value for your retail business.',
        ],
        'cloud-digital-signage-roi' => [
            'category' => 'Technology',
            'read_time' => '6 min read',
            'title' => 'Maximizing ROI with Cloud-Based Digital Signage',
            'excerpt' => 'Learn how cloud technology can transform your digital signage network and increase your return on investment.',
            'author' => 'Emily Rodriguez',
            'date' => 'April 5, 2026',
            'image' => 'icons/article2img.jpg',
            'author_initial' => 'E',
            'intro' => 'Cloud-based signage gives businesses a faster way to manage content, reduce manual effort, and keep every screen aligned with current campaigns.',
            'sections' => [
                ['heading' => 'Centralize Screen Management', 'body' => 'A cloud platform lets teams update multiple displays from one place. This reduces travel, manual USB updates, and delays between campaign planning and screen publishing.'],
                ['heading' => 'Reduce Operational Time', 'body' => 'Scheduling tools help automate repeated messages, daily offers, and time-based campaigns. Staff can focus on business operations instead of screen-by-screen updates.'],
                ['heading' => 'Improve Campaign Agility', 'body' => 'When prices, offers, or announcements change, cloud signage can push updates quickly. This helps stores and offices respond to market needs in real time.'],
                ['heading' => 'Track and Optimize Usage', 'body' => 'Reporting and playback visibility help teams understand what content is active. Better visibility makes it easier to refine campaigns and avoid outdated messaging.'],
                ['heading' => 'Support Multi-Location Growth', 'body' => 'Cloud systems are useful when a business expands into more branches. Screens can be grouped by location, category, or campaign without creating separate workflows.'],
            ],
            'closing' => 'Cloud signage improves ROI by reducing operational effort, increasing publishing speed, and making content easier to manage across locations.',
        ],
        'healthcare-digital-signage-best-practices' => [
            'category' => 'Healthcare',
            'read_time' => '8 min read',
            'title' => 'Digital Signage Best Practices for Healthcare',
            'excerpt' => 'Explore how hospitals and clinics are using digital signage to improve patient experience and communication.',
            'author' => 'Dr. James Park',
            'date' => 'April 28, 2026',
            'image' => 'icons/article3img.jpg',
            'author_initial' => 'J',
            'intro' => 'Healthcare spaces need clear, calm, and timely communication. Digital signage can help patients, visitors, and staff move through facilities with more confidence.',
            'sections' => [
                ['heading' => 'Prioritize Clear Wayfinding', 'body' => 'Hospitals and clinics often have complex layouts. Digital directories and directional screens reduce confusion and help visitors reach departments faster.'],
                ['heading' => 'Use Calm and Readable Design', 'body' => 'Healthcare content should avoid visual clutter. Large text, simple contrast, and steady layouts make messages easier to read for patients of all ages.'],
                ['heading' => 'Share Real-Time Updates', 'body' => 'Screens can display appointment guidance, queue updates, health notices, and emergency information. This reduces pressure on front-desk teams.'],
                ['heading' => 'Segment Content by Area', 'body' => 'Reception screens, waiting rooms, pharmacies, and staff zones need different messaging. A structured CMS helps publish the right message in the right place.'],
                ['heading' => 'Maintain Reliability', 'body' => 'Healthcare signage should run consistently during operating hours. Commercial displays, stable media players, and tested schedules help avoid interruptions.'],
            ],
            'closing' => 'Well-planned healthcare signage improves navigation, reduces anxiety, and keeps communication consistent across busy medical environments.',
        ],
        'digital-signage-content-creation-guide' => [
            'category' => 'Content',
            'read_time' => '10 min read',
            'title' => 'The Ultimate Guide to Content Creation for Digital Signage',
            'excerpt' => 'Tips and strategies for creating engaging content that captures attention and drives action.',
            'author' => 'Lisa Thompson',
            'date' => 'April 20, 2026',
            'image' => 'icons/article4img.jpg',
            'author_initial' => 'L',
            'intro' => 'Strong signage content is short, visual, and built for the environment where it appears. The best screens communicate one clear message at a time.',
            'sections' => [
                ['heading' => 'Start with One Goal', 'body' => 'Each screen should have a clear purpose such as promotion, guidance, awareness, or announcement. Too many messages reduce attention and impact.'],
                ['heading' => 'Keep Text Short', 'body' => 'People usually see signage while moving. Short headlines, simple wording, and strong visual hierarchy make content easier to understand quickly.'],
                ['heading' => 'Design for Viewing Distance', 'body' => 'A lobby screen, retail shelf display, and outdoor window display all need different sizing. Test content at the real distance before publishing.'],
                ['heading' => 'Use Motion Carefully', 'body' => 'Animation can attract attention, but overuse can distract customers. Smooth transitions and short loops usually work better than busy effects.'],
                ['heading' => 'Refresh Content Regularly', 'body' => 'Updated content keeps screens useful. Schedule seasonal campaigns, offers, safety notices, and announcements so displays never feel stale.'],
            ],
            'closing' => 'Great signage content is not just attractive; it is readable, timely, and matched to the business goal behind the screen.',
        ],
        'airport-wayfinding-case-study' => [
            'category' => 'Case Study',
            'read_time' => '12 min read',
            'title' => 'Case Study: Transforming Airport Wayfinding',
            'excerpt' => 'How Metro Airport increased passenger satisfaction by 40% with strategic digital signage deployment.',
            'author' => 'David Martinez',
            'date' => 'April 15, 2026',
            'image' => 'icons/article5img.jpg',
            'author_initial' => 'D',
            'intro' => 'Airports depend on fast, accurate communication. A well-planned signage network can reduce confusion, improve passenger flow, and support real-time operational updates.',
            'sections' => [
                ['heading' => 'The Challenge', 'body' => 'Passengers were struggling to find terminals, gates, baggage areas, and service counters during peak hours. Static signs could not keep up with frequent operational changes.'],
                ['heading' => 'The Signage Strategy', 'body' => 'Digital wayfinding screens were placed at decision points such as entrances, intersections, check-in zones, and baggage claim areas. Content was grouped by passenger journey stage.'],
                ['heading' => 'Real-Time Messaging', 'body' => 'Screens displayed gate directions, service alerts, queue guidance, and location-specific instructions. This helped staff communicate changes without relying only on announcements.'],
                ['heading' => 'Content and Visibility', 'body' => 'Layouts used large typography, high contrast, and simple arrows. Screens were positioned for visibility from walking paths and waiting areas.'],
                ['heading' => 'Measured Improvement', 'body' => 'The airport reported smoother passenger movement, fewer repeated direction queries, and improved satisfaction after deploying digital signage across key zones.'],
            ],
            'closing' => 'Airport wayfinding works best when screen placement, content structure, and real-time updates are planned together.',
        ],
    ];

    public function index()
    {
        return view('pages.blog.index', [
            'featuredArticle' => $this->articles['top-5-digital-signage-trends-2026'],
            'articles' => array_filter(
                $this->articles,
                fn ($slug) => $slug !== 'top-5-digital-signage-trends-2026',
                ARRAY_FILTER_USE_KEY
            ),
        ]);
    }

    public function show(string $blogSlug = 'retail-digital-signage-guide')
    {
        abort_unless(isset($this->articles[$blogSlug]), 404);

        return view('pages.blog.show', [
            'article' => $this->articles[$blogSlug],
        ]);
    }
}
