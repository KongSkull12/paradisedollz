@php
    $user = auth()->user();

    $memberRoute = $user?->isAdmin()
        ? 'admin.dashboard'
        : 'member.dashboard';

    $links = [
        ['route' => 'our-story', 'label' => __('Our Story')],
        ['route' => 'work-from-home', 'label' => __('Work From Home')],
        ['route' => 'work-from-paradise', 'label' => __('Work From Paradise')],
        ['route' => 'perks', 'label' => __('Perks')],
        ['route' => 'multistreaming', 'label' => __('Multistreaming')],
        ['route' => $memberRoute, 'label' => __('Members'), 'auth' => true],
    ];
@endphp

<nav
    class="fixed left-0 right-0 top-0 z-50 transition-all duration-300"
    x-bind:class="transparent && !scrolled && !navOpen ? 'border-b border-transparent bg-transparent' : (transparent ? 'border-b border-white/[0.06] bg-[rgba(8,8,8,0.95)] backdrop-blur-md' : 'border-b border-boss-pink/20 bg-white/[0.97] shadow-sm backdrop-blur-md')"
    {{ $attributes }}
>
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between md:h-20">
            <a
                href="{{ route('home') }}"
                class="font-display text-boss-gold transition-colors duration-300"
                x-bind:class="transparent ? 'text-[1.15rem] tracking-[0.02em] sm:text-[1.25rem]' : 'text-[0.82rem] uppercase tracking-[0.28em]'"
            >
                {{ config('app.name') }}
            </a>

            <div class="hidden flex-wrap items-center justify-end gap-x-6 gap-y-2 lg:flex">
                @foreach ($links as $link)
                    @if (($link['auth'] ?? false) && ! auth()->check())
                        @continue
                    @endif

                    @php($active = request()->routeIs($link['route']))
                    <a
                        href="{{ route($link['route']) }}"
                        class="text-[0.62rem] uppercase tracking-[0.12em] transition-colors duration-200 hover:text-boss-gold"
                        x-bind:class="transparent ? '{{ $active ? 'text-boss-gold' : 'text-boss-ivory/55' }}' : '{{ $active ? 'text-boss-gold' : 'text-boss-dark' }}'"
                    >
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </div>

            <div class="flex items-center gap-2 sm:gap-3">
                <a
                    href="{{ route('home') }}#apply"
                    class="hidden items-center px-4 py-2.5 text-[0.62rem] font-semibold uppercase tracking-[0.1em] transition-all hover:opacity-90 md:inline-flex sm:px-5"
                    x-bind:class="transparent ? 'bg-boss-gold text-boss-ink' : 'bg-boss-gold text-white hover:bg-boss-gold-hover'"
                >
                    {{ __('Apply Now') }}
                </a>

                <button
                    type="button"
                    class="p-2 transition-colors lg:hidden"
                    x-bind:class="transparent ? 'text-boss-ivory/55' : 'text-boss-dark'"
                    @click="navOpen = !navOpen"
                    aria-label="{{ __('Menu') }}"
                >
                    <div class="flex w-6 flex-col items-center justify-center gap-1">
                        <span
                            class="block h-[2px] w-5 origin-center rounded-full bg-current transition-all"
                            :class="navOpen ? 'translate-y-[6px] rotate-45' : ''"
                        ></span>
                        <span
                            class="block h-[2px] w-5 rounded-full bg-current transition-all"
                            :class="navOpen ? 'scale-0 opacity-0' : ''"
                        ></span>
                        <span
                            class="block h-[2px] w-5 origin-center rounded-full bg-current transition-all"
                            :class="navOpen ? '-translate-y-[6px] -rotate-45' : ''"
                        ></span>
                    </div>
                </button>
            </div>
        </div>

        <div
            x-cloak
            x-show="navOpen"
            x-transition
            class="lg:hidden"
            x-bind:class="transparent ? 'border-t border-white/[0.06] bg-[rgba(8,8,8,0.98)] pb-5 pt-1' : 'border-t border-boss-pink/30 bg-white py-4'"
        >
            @foreach ($links as $link)
                @if (($link['auth'] ?? false) && ! auth()->check())
                    @continue
                @endif

                <a
                    href="{{ route($link['route']) }}"
                    class="block px-2 py-3 text-[0.68rem] uppercase tracking-[0.12em] transition-colors hover:text-boss-gold"
                    x-bind:class="transparent ? 'border-b border-white/[0.05] text-boss-ivory/60 last:border-b-0' : 'border-b border-boss-cream text-boss-dark hover:bg-boss-cream'"
                    @click="navOpen = false"
                >
                    {{ $link['label'] }}
                </a>
            @endforeach

            <div class="px-2 pt-4">
                <a
                    href="{{ route('home') }}#apply"
                    class="block py-3 text-center text-[0.7rem] uppercase tracking-[0.12em]"
                    x-bind:class="transparent ? 'bg-boss-gold text-boss-ink font-semibold' : 'bg-boss-gold py-3 text-white hover:bg-boss-gold-hover'"
                    @click="navOpen = false"
                >
                    {{ __('Apply Now') }}
                </a>
            </div>
        </div>
    </div>
</nav>
