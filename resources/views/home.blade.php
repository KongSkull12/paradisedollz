<x-layouts.marketing :transparentNav="true" :title="__('Home')">
    @php
        $memberHref = auth()->check()
            ? (auth()->user()->isAdmin()
                ? route('admin.dashboard')
                : route('member.dashboard'))
            : route('login');

        $platformPills = [
            ['name' => 'Chaturbate', 'color' => '#FF8C00'],
            ['name' => 'Stripchat', 'color' => '#FF3E4D'],
            ['name' => 'OnlyFans', 'color' => '#00AFF0'],
            ['name' => 'Fansly', 'color' => '#9B6DFF'],
            ['name' => 'Babestation', 'color' => '#E91E8C'],
            ['name' => 'LiveJasmin', 'color' => '#FF6B35'],
            ['name' => 'BongaCams', 'color' => '#FF4444'],
            ['name' => 'Cam4', 'color' => '#22C55E'],
            ['name' => 'CamSoda', 'color' => '#06B6D4'],
            ['name' => 'MyFreeCams', 'color' => '#8B5CF6'],
            ['name' => 'Flirt4Free', 'color' => '#F472B6'],
            ['name' => 'Streamate', 'color' => '#F59E0B'],
        ];

        $benefits = [
            [
                'title' => __('Earn More, Faster'),
                'desc' => __('Our step-by-step platform tutorials have helped our models increase their income by an average of 3× in their first 90 days.'),
                'svg' =>
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.942" />',
            ],
            [
                'title' => __('Professional Training'),
                'desc' => __('Every course is packed with real walkthroughs of each streaming platform — no guessing, no wasted hours figuring things out alone.'),
                'svg' =>
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />',
            ],
            [
                'title' => __('Community of Models'),
                'desc' => __('Connect with fellow models in our course chat rooms. Share tips, ask questions, and grow together with women who understand your journey.'),
                'svg' =>
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />',
            ],
            [
                'title' => __('Safe & Supported'),
                'desc' => __('We prioritise your safety and privacy. All models receive onboarding support from our team before their first stream.'),
                'svg' =>
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 12.75 11.25 15 15.75 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.331 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />',
            ],
            [
                'title' => __('Multi-Platform Mastery'),
                'desc' => __('Don\'t put all your eggs in one basket. We train you across Chaturbate, Stripchat, OnlyFans, Babestation and more.'),
                'svg' =>
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.997 11.997 0 0 1 12 12c2.942 0 5.693-1.072 7.843-4.582z" />',
            ],
            [
                'title' => __('Dedicated Account Manager'),
                'desc' => __('Every model gets a personal manager who tracks your progress, helps troubleshoot issues, and celebrates your wins.'),
                'svg' =>
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M11.48 3.499a.75.75 0 0 1 1.04 0l2.292 2.103a13.036 13.036 0 0 1 4.074 11.93l-.086.478a75.697 75.697 0 0 1-3.086 13.065A2.25 2.25 0 0 1 13.596 21h-3.191a2.25 2.25 0 0 1-2.087-3.086 75.697 75.697 0 0 1-3.086-13.065A13.036 13.036 0 0 1 9.148 5.602L11.48 3.499Z" />',
            ],
        ];

        $aboutStats = [
            [
                'label' => __('Weekly Earnings Potential'),
                'value' => __('£800–£3,000+'),
                'sub' => __('depending on platform & hours'),
            ],
            [
                'label' => __('Platforms Covered'),
                'value' => (string) max(6, $publishedCoursesCount),
                'sub' => __('and growing every month'),
            ],
            [
                'label' => __('Models Trained'),
                'value' => '200+',
                'sub' => __('since we launched'),
            ],
            [
                'label' => __('Avg. Time to First Payout'),
                'value' => __('7 days'),
                'sub' => __('from completing Module 1'),
            ],
        ];

        $aboutBullets = [
            __('No experience needed — we train you from the start'),
            __('Work from home or anywhere in the world'),
            __('Multiple income streams across platforms'),
            __('Private community & direct manager support'),
        ];

        $statBadges = [
            ['value' => '200+', 'label' => __('Active Models')],
            ['value' => (string) max(1, $publishedCoursesCount), 'label' => __('Platform Courses')],
            ['value' => '3×', 'label' => __('Avg. Income Boost')],
        ];
    @endphp

    {{-- Hero — gradient shell (matches design system landing) --}}
    <section class="relative flex min-h-screen items-center overflow-hidden pt-[5.25rem]" style="background-color: #080808">
        <div
            class="pointer-events-none absolute inset-0"
            style="
                background: radial-gradient(ellipse 80% 60% at 50% 0%, rgba(201,169,110,0.08) 0%, transparent 70%),
                    radial-gradient(ellipse 60% 40% at 80% 60%, rgba(196,104,122,0.07) 0%, transparent 60%);
            "
        ></div>

        <div class="relative z-10 mx-auto w-full max-w-6xl px-6 py-16 text-center sm:py-24">
            <div
                class="mb-6 inline-flex items-center gap-2 rounded-full border px-4 py-2 uppercase"
                style="border-color: rgba(201,169,110,0.3); background-color: rgba(201,169,110,0.08); font-size: 0.72rem; letter-spacing: 0.15em; color: #c9a96e"
            >
                ✦ {{ __('Now Accepting New Models') }}
            </div>

            <h1 class="mx-auto mb-6 max-w-[48rem] px-2 font-display text-[clamp(2.65rem,7vw,5.35rem)] leading-[1.08] text-boss-ivory">
                {{ __('Turn Your Content Into a') }}
                <span class="italic text-boss-gold">{{ __('Career') }}</span>
            </h1>

            <p class="mx-auto mb-10 max-w-[36rem] text-[clamp(1rem,2vw,1.12rem)] leading-[1.8]" style="color: rgba(240,237,232,0.55)">
                {{ __('We are an elite streaming agency that trains, supports, and represents models across every major platform. Apply now and unlock our full training academy.') }}
            </p>

            <div class="flex flex-col justify-center gap-4 sm:flex-row">
                <a
                    href="#apply"
                    class="inline-flex items-center justify-center gap-3 px-8 py-4 font-medium uppercase transition-all hover:scale-[1.02] sm:justify-start"
                    style="background-color: #c9a96e; color: #0b0b0e; font-size: 0.85rem; letter-spacing: 0.12em"
                >
                    {{ __('Apply to Join') }}
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
                <a
                    href="{{ $memberHref }}"
                    class="inline-flex items-center justify-center gap-3 border px-8 py-4 uppercase transition-all hover:border-boss-gold/40"
                    style="border-color: rgba(240,237,232,0.15); color: rgba(240,237,232,0.6); font-size: 0.85rem; letter-spacing: 0.12em"
                >
                    {{ auth()->check() ? __('Members Area') : __('Member Login') }}
                </a>
            </div>

            <div class="mx-auto mt-20 grid max-w-xl grid-cols-3 gap-6">
                @foreach ($statBadges as $s)
                    <div class="text-center">
                        <p class="font-display text-[clamp(1.7rem,4vw,2.75rem)] leading-none text-boss-gold">{{ $s['value'] }}</p>
                        <p class="mt-2 text-[0.72rem] uppercase tracking-[0.1em]" style="color: rgba(240,237,232,0.4)">{{ $s['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- About --}}
    <section class="px-6 py-28" style="background-color: #0f0f12">
        <div class="mx-auto grid max-w-6xl items-center gap-16 md:grid-cols-2">
            <div>
                <p class="mb-4 text-[0.65rem] uppercase tracking-[0.3em] text-boss-gold">{{ __('About Us') }}</p>
                <h2 class="mb-6 font-display text-[clamp(2rem,4vw,3rem)] leading-tight text-boss-ivory">
                    {{ __('The Agency That') }} <em class="not-italic text-boss-gold">{{ __('Actually') }}</em> {{ __('Trains You') }}
                </h2>
                <p class="mb-4 text-[0.95rem] leading-[1.9]" style="color: rgba(240,237,232,0.55)">
                    {{ __('We were founded by former models who knew the industry lacked real, honest education. Most agencies just sign you up and leave you to figure it out. We do the opposite.') }}
                </p>
                <p class="mb-8 text-[0.95rem] leading-[1.9]" style="color: rgba(240,237,232,0.55)">
                    {{ __('Our Members Area gives you access to detailed video walkthroughs of every major streaming platform — from account setup to advanced earning strategies — plus a community of models who share what actually works.') }}
                </p>
                <div class="space-y-3">
                    @foreach ($aboutBullets as $item)
                        <div class="flex items-start gap-3">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-boss-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15.75 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span class="text-[0.88rem]" style="color: rgba(240,237,232,0.7)">{{ $item }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="grid grid-cols-2 gap-3">
                @foreach ($aboutStats as $card)
                    <div class="rounded-sm border border-white/[0.06] bg-boss-panel-strong p-5">
                        <p class="mb-3 text-[0.62rem] uppercase tracking-[0.12em]" style="color: rgba(240,237,232,0.35)">{{ $card['label'] }}</p>
                        <p class="font-display text-[1.75rem] leading-none text-boss-gold">{{ $card['value'] }}</p>
                        <p class="mt-2 text-[0.72rem]" style="color: rgba(240,237,232,0.32)">{{ $card['sub'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Benefits --}}
    <section class="px-6 py-28" style="background-color: #080808">
        <div class="mx-auto max-w-6xl">
            <div class="mb-16 text-center">
                <p class="mb-4 text-[0.65rem] uppercase tracking-[0.3em] text-boss-gold">{{ __('Why Join Us') }}</p>
                <h2 class="font-display text-[clamp(2rem,4vw,3rem)] leading-tight text-boss-ivory">{{ __('Everything You Need to Succeed') }}</h2>
            </div>
            <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($benefits as $b)
                    <div
                        class="group rounded-sm border border-white/[0.06] bg-boss-panel-strong p-6 transition-colors duration-300 hover:border-boss-gold/30"
                    >
                        <div class="mb-5 flex h-10 w-10 items-center justify-center rounded-sm bg-boss-gold/10">
                            <svg class="h-5 w-5 text-boss-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                {!! $b['svg'] !!}
                            </svg>
                        </div>
                        <h3 class="mb-3 font-display text-[1.1rem] text-boss-ivory">{{ $b['title'] }}</h3>
                        <p class="text-[0.85rem] leading-[1.8]" style="color: rgba(240,237,232,0.5)">{{ $b['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Academy preview — live data --}}
    <section class="px-6 py-28" style="background-color: #120e11">
        <div class="mx-auto max-w-6xl">
            <div class="mb-12 flex flex-col justify-between gap-6 md:flex-row md:items-end">
                <div>
                    <p class="mb-4 text-[0.65rem] uppercase tracking-[0.3em] text-boss-gold">{{ __('Training Courses') }}</p>
                    <h2 class="font-display text-[clamp(2rem,4vw,3rem)] leading-tight text-boss-ivory">
                        {{ __('Platform Courses') }}
                        <br />
                        {{ __('Inside the Academy') }}
                    </h2>
                </div>
                <p class="max-w-[380px] text-[0.85rem] leading-[1.7]" style="color: rgba(240,237,232,0.4)">
                    {{ __('Each course is a full walkthrough of a streaming platform — from first login to advanced earning strategies. New courses added regularly.') }}
                </p>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                @forelse ($previewCourses as $course)
                    @php
                        $pColor = $course->displayColor();
                        $pBg = $course->displayColorBackground(0.13);
                        $lessonChips = $course->lessons->take(3);
                    @endphp
                    <div class="relative overflow-hidden rounded-sm border border-white/[0.06] bg-boss-panel-strong p-6">
                        <span
                            class="absolute left-0 top-0 h-full w-1 rounded-l-sm"
                            style="background-color: {{ $pColor }}"
                        ></span>
                        <div class="mb-4 flex flex-wrap items-center gap-3 ps-3">
                            <span
                                class="rounded-full px-3 py-1 uppercase tracking-[0.1em]"
                                style="background-color: {{ $pBg }}; color: {{ $pColor }}; font-size: 0.7rem"
                            >{{ $course->displayPlatform() }}</span>
                            <span style="font-size: 0.72rem; color: rgba(240,237,232,0.3)">
                                {{ $course->lessons_count }} {{ $course->lessons_count === 1 ? __('lesson') : __('lessons') }}
                            </span>
                        </div>
                        <h3 class="mb-2 ps-3 font-display text-[1.25rem] text-boss-ivory">{{ $course->title }}</h3>
                        <p class="mb-4 line-clamp-2 ps-3 text-[0.83rem] leading-[1.7]" style="color: rgba(240,237,232,0.45)">{{ $course->description }}</p>
                        <div class="flex flex-wrap gap-2 ps-3">
                            @foreach ($lessonChips as $lesson)
                                @php($chip = \Illuminate\Support\Str::of($lesson->title)->before(':'))
                                <span
                                    class="rounded-full px-2 py-0.5"
                                    style="background-color: rgba(255,255,255,0.05); font-size: 0.68rem; color: rgba(240,237,232,0.35)"
                                >{{ $chip }}</span>
                            @endforeach
                        </div>
                    </div>
                @empty
                    <p class="col-span-full text-center text-[0.9rem]" style="color: rgba(240,237,232,0.35)">
                        {{ __('Published courses will appear here once they are live in the admin.') }}
                    </p>
                @endforelse
            </div>

            <div class="mt-10 text-center">
                <p class="mb-6 text-[0.85rem]" style="color: rgba(240,237,232,0.35)">{{ __('All courses are exclusive to approved models in the Members Area') }}</p>
                <a
                    href="#apply"
                    class="inline-flex items-center gap-3 px-8 py-4 font-medium uppercase transition-all hover:scale-[1.02]"
                    style="background-color: #c9a96e; color: #0b0b0e; font-size: 0.85rem; letter-spacing: 0.12em"
                >
                    {{ __('Apply for Access') }}
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Platform pills --}}
    <section class="border-y border-white/[0.06] px-6 py-16" style="background-color: #080808">
        <div class="mx-auto max-w-5xl">
            <p class="mb-10 text-center text-[0.65rem] uppercase tracking-[0.3em]" style="color: rgba(240,237,232,0.25)">{{ __('Platforms We Train You On') }}</p>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach ($platformPills as $p)
                    @php($pillBg = '#' . preg_replace('/^#/', '', $p['color']) . '22')
                    <div
                        class="flex items-center gap-2 rounded-full border border-white/[0.08] px-5 py-3"
                        style="background-color: {{ $pillBg }}"
                    >
                        <span class="h-2.5 w-2.5 rounded-full" style="background-color: {{ $p['color'] }}"></span>
                        <span class="text-[0.82rem]" style="color: rgba(240,237,232,0.6)">{{ $p['name'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="px-6 py-28" style="background-color: #080808">
        <div class="mx-auto max-w-3xl text-center">
            <p class="mb-6 text-[0.65rem] uppercase tracking-[0.3em] text-boss-gold">✦ {{ __('Ready to Begin?') }}</p>
            <h2 class="mb-6 font-display text-[clamp(2.1rem,5vw,3.65rem)] leading-[1.12] text-boss-ivory">{{ __('Your First Step Starts With an Application') }}</h2>
            <p class="mx-auto mb-10 max-w-[34rem] text-[1rem] leading-[1.85]" style="color: rgba(240,237,232,0.5)">{{ __('Fill in our short application form. We review all applications personally and respond within 48 hours.') }}</p>
            <a
                href="#apply"
                class="inline-flex items-center gap-3 px-10 py-5 font-medium uppercase shadow-glow transition-all hover:scale-[1.02]"
                style="background-color: #c9a96e; color: #0b0b0e; font-size: 0.9rem; letter-spacing: 0.15em"
            >
                {{ __('Apply Now — It\'s Free') }}
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </section>

    {{-- Application form --}}
    <section id="apply" class="scroll-mt-24 bg-boss-muted py-24 text-boss-dark">
        <div class="mx-auto max-w-xl px-4">
            <div class="mb-12 text-center">
                <p class="mb-4 text-[0.65rem] uppercase tracking-[0.3em] text-boss-gold">{{ __('Application') }}</p>
                <h2 class="font-display text-[clamp(1.8rem,3vw,2.5rem)] text-boss-dark">{{ __('Join the :name Family', ['name' => config('app.name')]) }}</h2>
            </div>

            @if (session('application_sent'))
                <div class="py-16 text-center">
                    <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full bg-boss-pink">
                        <svg class="h-10 w-10 text-boss-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15.75 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <h3 class="mb-4 font-display text-[2rem] text-boss-dark">{{ __('Application Received!') }}</h3>
                    <p class="text-[0.95rem] leading-relaxed text-boss-dark/60">{{ __('Thank you for applying. Our team will review your application and be in touch within 48 hours.') }}</p>
                </div>
            @else
                <form method="POST" action="{{ route('apply.store') }}" class="space-y-5">
                    @csrf
                    <div>
                        <label class="mb-2 block text-[0.68rem] uppercase tracking-[0.15em] text-boss-dark/70">{{ __('Full Name') }} *</label>
                        <input type="text" name="name" value="{{ old('name') }}" required placeholder="{{ __('Your full name') }}" class="w-full rounded-sm border border-boss-pink/90 bg-white px-4 py-3.5 text-[0.9rem] transition-colors placeholder:text-boss-dark/35 focus:border-boss-gold focus:outline-none" />
                        <x-input-error class="mt-1.5" :messages="$errors->get('name')" />
                    </div>
                    <div>
                        <label class="mb-2 block text-[0.68rem] uppercase tracking-[0.15em] text-boss-dark/70">{{ __('Email Address') }} *</label>
                        <input type="email" name="email" value="{{ old('email') }}" required placeholder="your@email.com" class="w-full rounded-sm border border-boss-pink/90 bg-white px-4 py-3.5 text-[0.9rem] transition-colors placeholder:text-boss-dark/35 focus:border-boss-gold focus:outline-none" />
                        <x-input-error class="mt-1.5" :messages="$errors->get('email')" />
                    </div>
                    <div>
                        <label class="mb-2 block text-[0.68rem] uppercase tracking-[0.15em] text-boss-dark/70">{{ __('Experience Level') }} *</label>
                        <select name="experience_level" required class="w-full appearance-none rounded-sm border border-boss-pink/90 bg-white px-4 py-3.5 text-[0.9rem] transition-colors focus:border-boss-gold focus:outline-none">
                            <option value="">{{ __('Select your experience level') }}</option>
                            <option value="none" {{ old('experience_level') === 'none' ? 'selected' : '' }}>{{ __('No Experience') }}</option>
                            <option value="1-2" {{ old('experience_level') === '1-2' ? 'selected' : '' }}>{{ __('1-2 Years') }}</option>
                            <option value="3+" {{ old('experience_level') === '3+' ? 'selected' : '' }}>{{ __('3+ Years') }}</option>
                            <option value="professional" {{ old('experience_level') === 'professional' ? 'selected' : '' }}>{{ __('Professional') }}</option>
                        </select>
                        <x-input-error class="mt-1.5" :messages="$errors->get('experience_level')" />
                    </div>
                    <div>
                        <label class="mb-2 block text-[0.68rem] uppercase tracking-[0.15em] text-boss-dark/70">{{ __('Instagram / TikTok Handle') }} <span class="text-boss-dark/35">({{ __('optional') }})</span></label>
                        <input type="text" name="social_handle" value="{{ old('social_handle') }}" placeholder="@yourhandle" class="w-full rounded-sm border border-boss-pink/90 bg-white px-4 py-3.5 text-[0.9rem] transition-colors placeholder:text-boss-dark/35 focus:border-boss-gold focus:outline-none" />
                        <x-input-error class="mt-1.5" :messages="$errors->get('social_handle')" />
                    </div>
                    <div class="flex items-start gap-3 bg-boss-cream/80 p-4">
                        <input type="checkbox" name="age_confirmed" id="age-check" value="1" class="mt-1 h-4 w-4 shrink-0 accent-boss-gold" @checked(old('age_confirmed')) />
                        <label for="age-check" class="text-[0.8rem] leading-relaxed text-boss-dark/70">{{ __('I confirm that I am 18 years of age or older and agree to be contacted regarding my application.') }}</label>
                    </div>
                    <x-input-error class="-mt-2" :messages="$errors->get('age_confirmed')" />
                    <button type="submit" class="w-full bg-boss-gold py-4 text-[0.75rem] uppercase tracking-[0.2em] text-boss-ink transition-all hover:bg-boss-gold-hover">{{ __('Submit Application') }}</button>
                    <p class="text-center text-[0.75rem] text-boss-dark/40">{{ __('We respond to all applications within 48 hours.') }}</p>
                </form>
            @endif
        </div>
    </section>
</x-layouts.marketing>
