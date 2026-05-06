@php
    $explore = [
        ['route' => 'our-story', 'label' => __('Our Story')],
        ['route' => 'work-from-home', 'label' => __('Work From Home')],
        ['route' => 'work-from-paradise', 'label' => __('Work From Paradise')],
        ['route' => 'perks', 'label' => __('Perks')],
        ['route' => 'multistreaming', 'label' => __('Multistreaming')],
    ];
@endphp

<footer class="bg-boss-dark py-16 text-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-12 grid grid-cols-1 gap-12 md:grid-cols-4">
            <div class="md:col-span-2">
                <p class="mb-4 font-display text-[0.85rem] uppercase tracking-[0.35em] text-boss-gold">
                    ✦ {{ config('app.name') }} ✦
                </p>
                <p class="max-w-sm text-[0.875rem] leading-relaxed text-white/50">
                    {{ __('Building empires, one member at a time. Model, travel, and create the life you deserve.') }}
                </p>
                <div class="mt-6 flex gap-5">
                    <a
                        href="https://instagram.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-white/30 transition-colors hover:text-boss-gold"
                        aria-label="Instagram"
                    >
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="3.5" y="3.5" width="17" height="17" rx="5" ry="5" stroke-linecap="round" stroke-linejoin="round"></rect>
                            <circle cx="12" cy="12" r="4" stroke-linecap="round" stroke-linejoin="round"></circle>
                            <circle cx="17.5" cy="6.75" r="1.2" fill="currentColor"></circle>
                        </svg>
                    </a>
                    <a
                        href="https://youtube.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-white/30 transition-colors hover:text-boss-gold"
                        aria-label="YouTube"
                    >
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M23.5 6.2a3 3 0 00-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 00.6 6.2 31.56 31.56 0 000 12a31.56 31.56 0 00.6 5.8 3 3 0 002.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 002.1-2.1 31.56 31.56 0 00.6-5.8 31.56 31.56 0 00-.6-5.8zM9.75 15.02V8.98L15.5 12l-5.75 3.02z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <p class="mb-5 text-[0.65rem] uppercase tracking-[0.2em] text-white/30">{{ __('Explore') }}</p>
                <ul class="space-y-3">
                    @foreach ($explore as $item)
                        <li>
                            <a href="{{ route($item['route']) }}" class="text-[0.8rem] text-white/50 transition-colors hover:text-boss-gold">
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <p class="mb-5 text-[0.65rem] uppercase tracking-[0.2em] text-white/30">{{ __('Members') }}</p>
                <ul class="space-y-3">
                    @auth
                        @if (auth()->user()->isAdmin())
                            <li><a href="{{ route('admin.dashboard') }}" class="text-[0.8rem] text-white/50 transition-colors hover:text-boss-gold">{{ __('Dashboard') }}</a></li>
                            <li><a href="{{ route('admin.courses.index') }}" class="text-[0.8rem] text-white/50 transition-colors hover:text-boss-gold">{{ __('Academy') }}</a></li>
                        @else
                            <li><a href="{{ route('member.dashboard') }}" class="text-[0.8rem] text-white/50 transition-colors hover:text-boss-gold">{{ __('Dashboard') }}</a></li>
                            <li><a href="{{ route('member.courses.index') }}" class="text-[0.8rem] text-white/50 transition-colors hover:text-boss-gold">{{ __('Academy') }}</a></li>
                        @endif
                    @else
                        <li><a href="{{ route('login') }}" class="text-[0.8rem] text-white/50 transition-colors hover:text-boss-gold">{{ __('Log in') }}</a></li>
                    @endauth
                    <li>
                        <a href="{{ route('home') }}#apply" class="text-[0.8rem] text-boss-gold transition-colors hover:text-white">{{ __('Apply Now') }} -></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex flex-col items-center justify-between gap-4 border-t border-white/10 pt-8 md:flex-row">
            <p class="text-[0.75rem] text-white/25">&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('All rights reserved.') }}</p>
            <div class="flex items-center gap-6">
                <p class="flex items-center gap-1 text-[0.75rem] text-white/25">
                    {{ __('Made with') }}
                    <svg class="h-3 w-3 shrink-0 text-boss-rose" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 21s-7-4.5-9.75-10.125C.75 9.375 3 6 6.375 6c2.25 0 3.75 1.5 5.625 3.375C13.875 7.5 15.375 6 17.625 6 21 6 23.25 9.375 21.75 10.875 19 16.5 12 21 12 21z"/></svg>
                    {{ __('for members worldwide') }}
                </p>
                @auth
                    @if (auth()->user()->isAdmin())
                        <a href="{{ route('admin.dashboard') }}" class="text-[0.65rem] tracking-[0.1em] text-white/[0.08] transition-colors hover:text-white/45">{{ __('Admin') }}</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</footer>
