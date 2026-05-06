<x-app-layout>
<div class="bg-gray-50 text-gray-900 antialiased overflow-x-hidden">
    <main>

        {{-- ═══════════════════════════════════════════
             1. HERO SECTION
        ═══════════════════════════════════════════ --}}
        <section style="background: url('{{ asset('https://images.pexels.com/photos/9572637/pexels-photo-9572637.jpeg?_gl=1*17js3ki*_ga*MjczOTMwMzYwLjE3Nzc4OTQ1Nzk.*_ga_8JE65Q40S6*czE3Nzc4OTQ1NzkkbzEkZzEkdDE3Nzc4OTQ4OTgkajI2JGwwJGgw') }}') no-repeat center center; background-size: cover;" class="relative min-h-screen flex items-center overflow-hidden mesh-bg noise clip-diagonal">
            <div class="absolute inset-0 bg-black/80"></div>
            {{-- Decorative circles --}}
            <div class="absolute top-24 right-16 w-72 h-72 rounded-full bg-brand-600/5 blur-3xl pointer-events-none"></div>
            <div class="absolute bottom-20 left-10 w-96 h-96 rounded-full bg-brand-400/8 blur-3xl pointer-events-none"></div>

            {{-- Floating accent badge (top right) --}}
            <div class="absolute top-28 right-8 md:right-20 lg:right-32 hidden lg:flex items-center gap-2 bg-white rounded-full shadow-xl shadow-brand-100 px-4 py-2 border border-brand-100 animate-fade-in">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-500 opacity-60"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-brand-600"></span>
                </span>
                <span class="text-xs font-semibold text-gray-700">12,400+ writers active today</span>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 pb-32 grid lg:grid-cols-2 gap-12 items-center w-full">

                {{-- Left: Text --}}
                <div>
                    {{-- Pill tag --}}
                    <div class="inline-flex items-center gap-2 bg-brand-50 border border-brand-200 rounded-full px-4 py-1.5 mb-6 animate-fade-up">
                        <svg class="w-3.5 h-3.5 text-brand-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                        </svg>
                        <span class="text-xs font-semibold text-brand-700 uppercase tracking-wide">The #1 Blog Platform in 2025</span>
                    </div>

                    <h1 class="font-display text-5xl sm:text-6xl lg:text-7xl font-black leading-[1.05] text-white/90 mb-6 animate-fade-up-delay">
                        Take Full
                        <span class="relative inline-block">
                            <span class="relative z-10 text-brand-600">Control</span>
                            <svg class="absolute -bottom-1 left-0 w-full" viewBox="0 0 220 10" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M2 8 Q55 2 110 6 Q165 10 218 4" stroke="#e51717" stroke-width="3.5" stroke-linecap="round" fill="none" opacity="0.5"/>
                            </svg>
                        </span>
                        <br/>of Your Story.
                    </h1>

                    <p class="text-lg sm:text-xl text-gray-200 leading-relaxed max-w-lg mb-10 animate-fade-up-slow">
                        BlogCTL is the all-in-one publishing platform built for modern writers. Draft, publish, grow — all in one beautifully simple place.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-up-slow">
                        <button class="group relative px-8 py-4 text-base font-semibold text-black bg-gradient-to-r from-brand-600 to-brand-700 rounded-2xl shadow-xl shadow-brand-300/40 hover:shadow-2xl hover:shadow-brand-400/40 hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                            <span class="relative z-10 flex items-center gap-2 justify-center">
                                Start Writing Free
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-brand-500 to-brand-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </button>
                        <button class="group px-8 py-4 text-base font-semibold text-gray-700 bg-white border-2 border-gray-200 rounded-2xl hover:border-brand-300 hover:text-brand-600 transition-all duration-300 flex items-center gap-2 justify-center shadow-sm hover:shadow-md">
                            <svg class="w-5 h-5 text-brand-600" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm14.024-.983a1.125 1.125 0 010 1.966l-5.603 3.113A1.125 1.125 0 019 15.113V8.887c0-.857.921-1.4 1.671-.983l5.603 3.113z" clip-rule="evenodd"/>
                            </svg>
                            Watch Demo
                        </button>
                    </div>

                    {{-- Social proof --}}
                    <div class="flex items-center gap-4 mt-10 animate-fade-up-slow">
                        <div class="flex -space-x-2">
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-gradient-to-br from-brand-400 to-brand-600"></div>
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-gradient-to-br from-gray-400 to-gray-600"></div>
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-gradient-to-br from-amber-400 to-orange-500"></div>
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-gradient-to-br from-teal-400 to-cyan-600"></div>
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-brand-700 flex items-center justify-center text-white text-xs font-bold">+</div>
                        </div>
                        <div>
                            <div class="flex items-center gap-0.5 mb-0.5">
                                <svg class="w-3.5 h-3.5 text-amber-400" viewBox="0 0 24 24" fill="currentColor"><path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                                <svg class="w-3.5 h-3.5 text-amber-400" viewBox="0 0 24 24" fill="currentColor"><path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                                <svg class="w-3.5 h-3.5 text-amber-400" viewBox="0 0 24 24" fill="currentColor"><path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                                <svg class="w-3.5 h-3.5 text-amber-400" viewBox="0 0 24 24" fill="currentColor"><path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                                <svg class="w-3.5 h-3.5 text-amber-400" viewBox="0 0 24 24" fill="currentColor"><path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                            </div>
                            <p class="text-xs text-gray-500"><span class="font-semibold text-gray-700">4.9/5</span> from 2,400+ writers</p>
                        </div>
                    </div>
                </div>

                {{-- Right: Hero Visual --}}
                <div class="relative hidden lg:flex justify-center items-center animate-slide-left">
                    {{-- Main card --}}
                    <div class="relative w-full max-w-md">
                        <div class="glass-card rounded-3xl shadow-2xl shadow-brand-100 p-6 relative z-10">
                            {{-- Editor mock --}}
                            <div class="flex items-center gap-1.5 mb-5">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                                <span class="ml-2 text-xs text-gray-400 font-mono">new-post.md</span>
                            </div>
                            <div class="space-y-3">
                                <div class="h-3 w-3/4 bg-gray-200 rounded-full"></div>
                                <div class="h-2.5 w-full bg-gray-100 rounded-full"></div>
                                <div class="h-2.5 w-5/6 bg-gray-100 rounded-full"></div>
                                <div class="h-2.5 w-4/6 bg-gray-100 rounded-full"></div>
                                <div class="mt-4 h-2.5 w-full bg-gray-100 rounded-full"></div>
                                <div class="h-2.5 w-3/4 bg-gray-100 rounded-full"></div>
                            </div>
                            {{-- Publishing bar --}}
                            <div class="mt-6 flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="flex items-center gap-2">
                                    <div class="w-5 h-5 rounded-full bg-brand-100 flex items-center justify-center">
                                        <div class="w-2 h-2 rounded-full bg-brand-600"></div>
                                    </div>
                                    <span class="text-xs text-gray-500">Draft saved</span>
                                </div>
                                <button class="px-4 py-1.5 text-xs font-semibold text-white bg-brand-600 rounded-lg hover:bg-brand-700 transition-colors">
                                    Publish Now →
                                </button>
                            </div>
                        </div>

                        {{-- Floating stat bubble --}}
                        <div class="absolute -bottom-4 -left-6 glass-card rounded-2xl shadow-xl px-4 py-3 flex items-center gap-3 z-20">
                            <div class="w-9 h-9 rounded-xl bg-brand-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4.5 h-4.5 text-brand-600" style="width:18px;height:18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400">Total Views</p>
                                <p class="text-sm font-bold text-gray-800">1.2M <span class="text-brand-500 text-xs font-semibold">↑ 24%</span></p>
                            </div>
                        </div>

                        {{-- Floating notification --}}
                        <div class="absolute -top-5 -right-6 glass-card rounded-2xl shadow-xl px-4 py-3 flex items-center gap-3 z-20">
                            <div class="w-9 h-9 rounded-xl bg-green-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400">Post Published</p>
                                <p class="text-sm font-bold text-gray-800">Just now 🎉</p>
                            </div>
                        </div>

                        {{-- Decorative gradient circle behind card --}}
                        <div class="absolute inset-0 -z-10 translate-x-4 translate-y-4 rounded-3xl bg-gradient-to-br from-brand-200 to-brand-400 opacity-20 blur-xl"></div>
                    </div>
                </div>

            </div>

            {{-- Scroll indicator --}}
            <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
                <span class="text-xs text-gray-400 font-medium tracking-widest uppercase">Scroll</span>
                <svg class="w-4 h-4 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </div>
        </section>


        {{-- ═══════════════════════════════════════════
             MARQUEE STRIP
        ═══════════════════════════════════════════ --}}
        <div class="bg-brand-700 overflow-hidden py-3 select-none">
            <div class="flex animate-marquee whitespace-nowrap">
                <div class="flex gap-10 pr-10">
                    @foreach(['Draft & Publish', 'Rich Media Editor', 'SEO Optimized', 'Analytics Dashboard', 'Custom Domains', 'Reader Comments', 'Newsletter Integration', 'Team Collaboration', 'Version History', 'AI Writing Assistant'] as $tag)
                        <span class="flex items-center gap-2 text-white/90 text-sm font-medium">
                            <svg class="w-3.5 h-3.5 text-brand-300" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"/></svg>
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
                <div class="flex gap-10 pr-10" aria-hidden="true">
                    @foreach(['Draft & Publish', 'Rich Media Editor', 'SEO Optimized', 'Analytics Dashboard', 'Custom Domains', 'Reader Comments', 'Newsletter Integration', 'Team Collaboration', 'Version History', 'AI Writing Assistant'] as $tag)
                        <span class="flex items-center gap-2 text-white/90 text-sm font-medium">
                            <svg class="w-3.5 h-3.5 text-brand-300" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"/></svg>
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>


        {{-- ═══════════════════════════════════════════
             2. STATS SECTION
        ═══════════════════════════════════════════ --}}
        <section id="features" class="py-20 lg:py-28 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                {{-- Section header --}}
                <div class="text-center mb-14">
                    <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-600 bg-brand-50 px-4 py-1.5 rounded-full border border-brand-100 mb-4">Platform Stats</span>
                    <h2 class="font-display text-4xl sm:text-5xl font-black text-gray-900 mb-4">Numbers That Speak <br class="hidden sm:block"/> for Themselves</h2>
                    <p class="text-gray-500 text-lg max-w-xl mx-auto">Real metrics from real writers building their audience on BlogCTL every day.</p>
                </div>

                {{-- Stats grid --}}
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

                    @php
                    $stats = [
                        ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>', 'value' => '248K+', 'label' => 'Active Writers', 'delta' => '+18% this month', 'color' => 'brand'],
                        ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>', 'value' => '3.6M+', 'label' => 'Published Posts', 'delta' => '+32% this quarter', 'color' => 'blue'],
                        ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/>', 'value' => '97M+', 'label' => 'Reader Engagements', 'delta' => '+51% year-on-year', 'color' => 'green'],
                        ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/>', 'value' => '340%', 'label' => 'Avg. Audience Growth', 'delta' => 'Per creator, 12mo', 'color' => 'amber'],
                    ];
                    @endphp

                    @foreach($stats as $i => $stat)
                    <div class="group relative bg-gray-50 hover:bg-white rounded-3xl p-7 border border-gray-100 hover:border-brand-100 hover:shadow-xl hover:shadow-brand-50 hover:-translate-y-2 transition-all duration-300 cursor-default">
                        {{-- Icon --}}
                        <div class="w-12 h-12 rounded-2xl bg-brand-600/8 flex items-center justify-center mb-5 group-hover:bg-brand-50 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                {!! $stat['icon'] !!}
                            </svg>
                        </div>
                        <div class="font-display text-4xl font-black text-gray-900 mb-1 group-hover:text-brand-600 transition-colors duration-300">{{ $stat['value'] }}</div>
                        <div class="text-base font-semibold text-gray-700 mb-2">{{ $stat['label'] }}</div>
                        <div class="text-xs font-medium text-brand-600 bg-brand-50 inline-block px-2.5 py-1 rounded-full">{{ $stat['delta'] }}</div>

                        {{-- Decorative top-right accent --}}
                        <div class="absolute top-5 right-5 w-2 h-2 rounded-full bg-brand-200 group-hover:bg-brand-500 transition-colors duration-300"></div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>


        {{-- ═══════════════════════════════════════════
             3. BLOG PREVIEW SECTION
        ═══════════════════════════════════════════ --}}
        <section id="blogs" class="py-20 lg:py-28 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
                    <div>
                        <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-600 bg-brand-50 px-4 py-1.5 rounded-full border border-brand-100 mb-4">Latest Posts</span>
                        <h2 class="font-display text-4xl sm:text-5xl font-black text-gray-900">From the <span class="text-brand-600">Community</span></h2>
                    </div>
                    <button class="self-start sm:self-auto text-sm font-semibold text-brand-600 border border-brand-200 rounded-xl px-5 py-2.5 hover:bg-brand-600 hover:text-white hover:border-brand-600 transition-all duration-200 whitespace-nowrap">
                        View All Posts →
                    </button>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-7">

                    @php
                    $posts = [
                        ['cat' => 'Productivity', 'cat_color' => 'bg-brand-50 text-brand-700', 'title' => 'How I Write 10 Blog Posts a Week Without Burning Out', 'desc' => 'Discover the batching, scheduling, and mindset shifts that let me stay prolific without losing my creative edge.', 'author' => 'Sarah K.', 'read' => '6 min read', 'grad' => 'from-brand-400 to-rose-600'],
                        ['cat' => 'Growth', 'cat_color' => 'bg-blue-50 text-blue-700', 'title' => 'The SEO Playbook That Tripled My Blog Traffic in 90 Days', 'desc' => 'No fluff. Just the exact keyword strategy, link building approach, and content tweaks that actually moved the needle.', 'author' => 'Marcus T.', 'read' => '8 min read', 'grad' => 'from-blue-400 to-indigo-600'],
                        ['cat' => 'Monetization', 'cat_color' => 'bg-amber-50 text-amber-700', 'title' => 'From $0 to $4K/Month: My Honest Blogging Income Report', 'desc' => 'A transparent look at sponsorships, affiliate income, digital products, and the timeline it really takes to earn online.', 'author' => 'Priya M.', 'read' => '10 min read', 'grad' => 'from-amber-400 to-orange-500'],
                    ];
                    @endphp

                    @foreach($posts as $idx => $post)
                    <article class="group bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl hover:shadow-gray-200/60 hover:-translate-y-2 transition-all duration-400 flex flex-col">

                        {{-- Image placeholder --}}
                        <div class="relative h-52 bg-gradient-to-br {{ $post['grad'] }} overflow-hidden flex-shrink-0">
                            {{-- Decorative pattern --}}
                            <div class="absolute inset-0 opacity-20">
                                <div class="absolute top-4 left-4 w-24 h-24 rounded-full border-4 border-white/40"></div>
                                <div class="absolute bottom-6 right-6 w-16 h-16 rounded-full border-2 border-white/30"></div>
                                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 rounded-full bg-white/10"></div>
                            </div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-14 h-14 text-white/25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M13.5 12h.008v.008H13.5V12zm0 0h.008v.008H13.5V12z"/>
                                </svg>
                            </div>
                            <div class="absolute top-4 left-4">
                                <span class="text-xs font-bold {{ $post['cat_color'] }} px-3 py-1 rounded-full bg-white/90 backdrop-blur-sm">{{ $post['cat'] }}</span>
                            </div>
                            {{-- Overlay on hover --}}
                            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>

                        {{-- Content --}}
                        <div class="p-6 flex flex-col flex-1">
                            <h3 class="font-display text-xl font-bold text-gray-900 leading-snug mb-3 group-hover:text-brand-700 transition-colors duration-200">
                                {{ $post['title'] }}
                            </h3>
                            <p class="text-sm text-gray-500 leading-relaxed mb-5 flex-1">{{ $post['desc'] }}</p>

                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-7 h-7 rounded-full bg-gradient-to-br from-brand-400 to-brand-700 flex items-center justify-center text-white text-xs font-bold">
                                        {{ substr($post['author'], 0, 1) }}
                                    </div>
                                    <div>
                                        <p class="text-xs font-semibold text-gray-700">{{ $post['author'] }}</p>
                                        <p class="text-xs text-gray-400">{{ $post['read'] }}</p>
                                    </div>
                                </div>
                                <button class="group/btn flex items-center gap-1.5 text-sm font-semibold text-brand-600 hover:text-brand-700 transition-colors">
                                    Read
                                    <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </article>
                    @endforeach

                </div>
            </div>
        </section>


        {{-- ═══════════════════════════════════════════
             4. COMPARE SECTION
        ═══════════════════════════════════════════ --}}
        <section id="compare" class="py-20 lg:py-28 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="text-center mb-14">
                    <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-600 bg-brand-50 px-4 py-1.5 rounded-full border border-brand-100 mb-4">Why BlogCTL</span>
                    <h2 class="font-display text-4xl sm:text-5xl font-black text-gray-900 mb-4">
                        We're Simply <span class="text-brand-600">Different</span>
                    </h2>
                    <p class="text-gray-500 text-lg max-w-xl mx-auto">See why thousands of creators switch to BlogCTL and never look back.</p>
                </div>

                <div class="grid lg:grid-cols-2 gap-6 max-w-5xl mx-auto">

                    {{-- BlogCTL Column --}}
                    <div class="relative rounded-3xl overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-brand-600 to-brand-800"></div>
                        <div class="absolute inset-0 noise opacity-50"></div>
                        <div style="background: url('{{ asset('https://images.pexels.com/photos/4855455/pexels-photo-4855455.jpeg?_gl=1*11gkxxt*_ga*MjczOTMwMzYwLjE3Nzc4OTQ1Nzk.*_ga_8JE65Q40S6*czE3Nzc4OTQ1NzkkbzEkZzEkdDE3Nzc4OTQ1OTIkajQ3JGwwJGgw') }}') no-repeat center center; background-size: cover;" class="relative p-8 sm:p-10">
                            <div class="absolute inset-0 bg-black/10"></div>
                            <div class="flex items-center gap-3 mb-8">
                                <div class="w-10 h-10 rounded-xl bg-black/20 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-display text-2xl font-bold text-white">BlogCTL</h3>
                                    <p class="text-brand-200 text-sm">The modern choice</p>
                                </div>
                                <div class="ml-auto bg-white/20 text-white text-xs font-bold px-3 py-1 rounded-full">Recommended</div>
                            </div>

                            @php
                            $ctl_features = [
                                'Unlimited blogs & posts, always free',
                                'Built-in SEO tools & rich analytics',
                                'Custom domain support out of the box',
                                'AI-powered writing assistant included',
                                'Monetization tools & newsletter built-in',
                                'Real-time collaboration for teams',
                                'Zero ads on your content, ever',
                                'One-click export to any format',
                            ];
                            @endphp

                            <ul class="space-y-4">
                                @foreach($ctl_features as $feat)
                                <li class="flex items-start gap-3">
                                    <div class="w-5 h-5 rounded-full bg-white/20 flex-shrink-0 flex items-center justify-center mt-0.5">
                                        <svg class="w-3 h-3 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                                        </svg>
                                    </div>
                                    <span class="text-white/90 text-sm leading-relaxed">{{ $feat }}</span>
                                </li>
                                @endforeach
                            </ul>

                            <button class="mt-10 w-full py-4 bg-white text-brand-700 text-sm font-bold rounded-2xl hover:bg-brand-50 transition-colors shadow-lg">
                                Start Free with BlogCTL →
                            </button>
                        </div>
                    </div>

                    {{-- Others Column --}}
                    <div class="rounded-3xl bg-gray-50 border border-gray-200 p-8 sm:p-10">
                        <div class="flex items-center gap-3 mb-8">
                            <div class="w-10 h-10 rounded-xl bg-gray-200 flex items-center justify-center">
                                <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-display text-2xl font-bold text-gray-600">Others</h3>
                                <p class="text-gray-400 text-sm">The typical alternative</p>
                            </div>
                        </div>

                        @php
                        $others = [
                            'Posts capped behind paywalled tiers',
                            'SEO only with expensive add-ons',
                            'Custom domain requires premium plan',
                            'No AI assistance without extra cost',
                            'Monetization locked or limited',
                            'Solo mode only, no team features',
                            'Ads placed on your content by platform',
                            'Lock-in: exporting is painful',
                        ];
                        @endphp

                        <ul class="space-y-4">
                            @foreach($others as $feat)
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-gray-200 flex-shrink-0 flex items-center justify-center mt-0.5">
                                    <svg class="w-3 h-3 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </div>
                                <span class="text-gray-500 text-sm leading-relaxed">{{ $feat }}</span>
                            </li>
                            @endforeach
                        </ul>

                        <div class="mt-10 w-full py-4 bg-gray-200 text-gray-400 text-sm font-bold rounded-2xl text-center cursor-not-allowed select-none">
                            Limited & Frustrating
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- ═══════════════════════════════════════════
             5. ABOUT SECTION
        ═══════════════════════════════════════════ --}}
        <section id="about" class="py-20 lg:py-28 bg-gray-50 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                    {{-- Image side --}}
                    <div class="relative order-2 lg:order-1">
                        {{-- Main visual --}}
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl shadow-brand-100">
                            <div class="aspect-[4/3] bg-gradient-to-br from-brand-700 via-brand-600 to-rose-600 relative overflow-hidden">
                                {{-- Decorative circles --}}
                                <div class="absolute -top-12 -left-12 w-48 h-48 rounded-full bg-white/5"></div>
                                <div class="absolute -bottom-8 -right-8 w-40 h-40 rounded-full bg-white/5"></div>
                                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 rounded-full bg-white/5"></div>

                                {{-- Mock dashboard UI --}}
                                <div class="absolute inset-0 p-8 flex flex-col justify-between">
                                    <div class="flex items-center gap-2 mb-4">
                                        <div class="w-7 h-7 rounded-lg bg-white/20 flex items-center justify-center">
                                            <svg class="w-3.5 h-3.5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                            </svg>
                                        </div>
                                        <span class="text-white font-display font-bold text-lg">Blog<span class="text-brand-200">CTL</span></span>
                                    </div>
                                    <div class="space-y-2">
                                        <div class="h-2 w-full bg-white/20 rounded-full">
                                            <div class="h-2 w-4/5 bg-white/60 rounded-full"></div>
                                        </div>
                                        <div class="h-2 w-full bg-white/20 rounded-full">
                                            <div class="h-2 w-2/3 bg-white/40 rounded-full"></div>
                                        </div>
                                        <div class="h-2 w-full bg-white/20 rounded-full">
                                            <div class="h-2 w-11/12 bg-white/50 rounded-full"></div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-3">
                                        <div class="bg-white/15 rounded-xl p-3 text-center">
                                            <p class="text-2xl font-display font-bold text-white">89%</p>
                                            <p class="text-xs text-white/70 mt-0.5">Retention</p>
                                        </div>
                                        <div class="bg-white/15 rounded-xl p-3 text-center">
                                            <p class="text-2xl font-display font-bold text-white">4.3x</p>
                                            <p class="text-xs text-white/70 mt-0.5">Avg. Reach</p>
                                        </div>
                                        <div class="bg-white/15 rounded-xl p-3 text-center">
                                            <p class="text-2xl font-display font-bold text-white">$280</p>
                                            <p class="text-xs text-white/70 mt-0.5">Avg. Earn</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating team badge --}}
                        <div class="absolute -bottom-6 -right-4 sm:right-8 glass-card rounded-2xl shadow-xl px-5 py-4 flex items-center gap-4 z-10 max-w-56">
                            <div class="flex -space-x-2 flex-shrink-0">
                                <div class="w-8 h-8 rounded-full border-2 border-white bg-gradient-to-br from-brand-500 to-brand-700"></div>
                                <div class="w-8 h-8 rounded-full border-2 border-white bg-gradient-to-br from-teal-400 to-cyan-600"></div>
                                <div class="w-8 h-8 rounded-full border-2 border-white bg-gradient-to-br from-amber-400 to-orange-500"></div>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-800">Built by writers</p>
                                <p class="text-xs text-gray-500">for writers</p>
                            </div>
                        </div>

                        {{-- Background blob --}}
                        <div class="absolute -z-10 top-8 -left-8 w-72 h-72 rounded-full bg-brand-100 blur-3xl opacity-60 pointer-events-none"></div>
                    </div>

                    {{-- Text side --}}
                    <div class="order-1 lg:order-2">
                        <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-600 bg-brand-50 px-4 py-1.5 rounded-full border border-brand-100 mb-5">Our Story</span>
                        <h2 class="font-display text-4xl sm:text-5xl font-black text-gray-900 mb-6 leading-tight">
                            Built by Writers,<br/> for <span class="text-brand-600">Writers</span>.
                        </h2>
                        <p class="text-gray-600 text-lg leading-relaxed mb-6">
                            BlogCTL was born in 2022 out of frustration. Our founders — both prolific bloggers — were tired of platforms that treated creators as products instead of people.
                        </p>
                        <p class="text-gray-500 text-base leading-relaxed mb-8">
                            We built BlogCTL around one core belief: <strong class="text-gray-700 font-semibold">your words, your audience, your revenue</strong>. No algorithms suppressing your reach. No ads hijacking your readers. No arbitrary limits on your creativity.
                        </p>

                        {{-- Values --}}
                        <div class="space-y-4 mb-10">
                            @php
                            $values = [
                                ['title' => 'Creator-First Philosophy', 'desc' => 'Every feature is designed with writers in mind, not advertisers.'],
                                ['title' => 'Radical Transparency', 'desc' => 'We publish our roadmap, metrics, and decisions publicly.'],
                                ['title' => 'Long-term Thinking', 'desc' => 'We optimize for sustainable creator success, not viral vanity metrics.'],
                            ];
                            @endphp
                            @foreach($values as $val)
                            <div class="flex gap-4">
                                <div class="w-8 h-8 rounded-xl check-circle flex-shrink-0 flex items-center justify-center shadow-md shadow-brand-200/50 mt-0.5">
                                    <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">{{ $val['title'] }}</p>
                                    <p class="text-gray-500 text-sm mt-0.5">{{ $val['desc'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <button class="px-8 py-4 bg-brand-600 text-white text-sm font-bold rounded-2xl hover:bg-brand-700 shadow-lg shadow-brand-200 hover:shadow-xl hover:shadow-brand-300/40 hover:-translate-y-0.5 transition-all duration-200">
                            Read Our Full Story →
                        </button>
                    </div>

                </div>
            </div>
        </section>


        {{-- ═══════════════════════════════════════════
             6. TESTIMONIALS SLIDER SECTION
        ═══════════════════════════════════════════ --}}
        <section class="py-20 lg:py-28 bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
                    <div>
                        <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-600 bg-brand-50 px-4 py-1.5 rounded-full border border-brand-100 mb-4">Testimonials</span>
                        <h2 class="font-display text-4xl sm:text-5xl font-black text-gray-900">
                            Loved by <span class="text-brand-600">Creators</span>
                        </h2>
                    </div>
                    <div class="flex items-center gap-3 self-start sm:self-auto">
                        <button id="slider-prev" aria-label="Previous" class="w-11 h-11 rounded-2xl border-2 border-gray-200 flex items-center justify-center text-gray-600 hover:border-brand-500 hover:text-brand-600 hover:bg-brand-50 transition-all duration-200 group">
                            <svg class="w-5 h-5 group-hover:-translate-x-0.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button id="slider-next" aria-label="Next" class="w-11 h-11 rounded-2xl border-2 border-gray-200 flex items-center justify-center text-gray-600 hover:border-brand-500 hover:text-brand-600 hover:bg-brand-50 transition-all duration-200 group">
                            <svg class="w-5 h-5 group-hover:translate-x-0.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Slider viewport --}}
                <div class="relative overflow-hidden">
                    <div id="slider-track" class="flex gap-6" style="transform: translateX(0)">

                        @php
                        $testimonials = [
                            ['name' => 'Sarah Chen', 'role' => 'Tech Writer & YouTuber', 'text' => 'BlogCTL completely transformed my content workflow. I went from posting once a week to daily — and my audience grew 4x in just three months. The analytics alone are worth it.', 'rating' => 5, 'grad' => 'from-brand-500 to-rose-600'],
                            ['name' => 'Marcus Williams', 'role' => 'Freelance Journalist', 'text' => 'I\'ve tried every platform — Medium, Substack, Ghost. Nothing comes close to BlogCTL for pure writing experience combined with actual growth tools. It\'s the one I stick with.', 'rating' => 5, 'grad' => 'from-blue-500 to-indigo-600'],
                            ['name' => 'Priya Nair', 'role' => 'Lifestyle Blogger', 'text' => 'The monetization features alone paid for years of subscription in the first month. My newsletter subscribers converted to paying readers almost immediately. Incredible platform.', 'rating' => 5, 'grad' => 'from-amber-500 to-orange-600'],
                            ['name' => 'James Okafor', 'role' => 'Startup Founder & Writer', 'text' => 'We use BlogCTL for our entire company blog. The team collaboration is seamless, the SEO tools are best-in-class, and our organic traffic has doubled since switching. No regrets.', 'rating' => 5, 'grad' => 'from-teal-500 to-cyan-600'],
                            ['name' => 'Elena Vasquez', 'role' => 'Creative Writing Coach', 'text' => 'My students love BlogCTL. It\'s simple enough for beginners but powerful enough for pros. The community features help writers find their audience without fighting an algorithm.', 'rating' => 5, 'grad' => 'from-violet-500 to-purple-600'],
                        ];
                        @endphp

                        @foreach($testimonials as $t)
                        <div class="slider-card flex-none w-80 sm:w-96 bg-gray-50 rounded-3xl p-7 border border-gray-100 hover:border-brand-100 hover:shadow-xl hover:shadow-brand-50 transition-all duration-300 group">
                            {{-- Stars --}}
                            <div class="flex gap-1 mb-5">
                                @for($s = 0; $s < $t['rating']; $s++)
                                <svg class="w-4 h-4 text-amber-400" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                                </svg>
                                @endfor
                            </div>
                            {{-- Quote --}}
                            <p class="text-gray-700 text-sm leading-relaxed mb-6 relative">
                                <span class="text-brand-200 font-display text-4xl leading-none absolute -top-2 -left-1 select-none">"</span>
                                <span class="relative z-10 pl-5">{{ $t['text'] }}</span>
                            </p>
                            {{-- Author --}}
                            <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
                                <div class="w-10 h-10 rounded-2xl bg-gradient-to-br {{ $t['grad'] }} flex-shrink-0"></div>
                                <div>
                                    <p class="text-sm font-bold text-gray-800">{{ $t['name'] }}</p>
                                    <p class="text-xs text-gray-400">{{ $t['role'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                    {{-- Gradient fade edges --}}
                    <div class="absolute left-0 top-0 bottom-0 w-8 bg-gradient-to-r from-white to-transparent pointer-events-none z-10"></div>
                    <div class="absolute right-0 top-0 bottom-0 w-16 bg-gradient-to-l from-white to-transparent pointer-events-none z-10"></div>
                </div>

                {{-- Dots indicator --}}
                <div class="flex items-center justify-center gap-2 mt-8" id="slider-dots">
                    @foreach($testimonials as $i => $t)
                    <button class="slider-dot w-2 h-2 rounded-full transition-all duration-300 {{ $i === 0 ? 'bg-brand-600 w-6' : 'bg-gray-300' }}" data-index="{{ $i }}" aria-label="Go to slide {{ $i + 1 }}"></button>
                    @endforeach
                </div>

            </div>
        </section>


        {{-- ═══════════════════════════════════════════
             CTA BANNER
        ═══════════════════════════════════════════ --}}
        <section class="py-16 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative rounded-3xl overflow-hidden">
                    {{-- Background --}}
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-700 via-brand-600 to-rose-600"></div>
                    <div class="absolute inset-0 noise"></div>
                    {{-- Decorative --}}
                    <div class="absolute -top-20 -right-20 w-80 h-80 rounded-full bg-white/5 pointer-events-none"></div>
                    <div class="absolute -bottom-16 -left-16 w-64 h-64 rounded-full bg-white/5 pointer-events-none"></div>

                    <div class="relative text-center px-8 py-16 sm:py-20">
                        <h2 class="font-display text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-5 leading-tight">
                            Your Story Deserves<br/>to Be Heard.
                        </h2>
                        <p class="text-brand-100 text-lg sm:text-xl max-w-xl mx-auto mb-10">
                            Join 248,000+ writers publishing fearlessly on BlogCTL. No credit card required. Start in 60 seconds.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <button class="px-10 py-4 bg-white text-brand-700 text-base font-bold rounded-2xl hover:bg-brand-50 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200 shadow-lg">
                                Create Your Free Account
                            </button>
                            <button class="px-10 py-4 bg-white/10 text-white text-base font-semibold rounded-2xl border border-white/20 hover:bg-white/20 transition-all duration-200 backdrop-blur-sm">
                                See Pricing Plans
                            </button>
                        </div>
                        <p class="text-brand-200/80 text-xs mt-6">No credit card · Cancel anytime · Free forever tier available</p>
                    </div>
                </div>
            </div>
        </section>

    </main>





    {{-- ═══════════════════════════════════════════
         JAVASCRIPT
    ═══════════════════════════════════════════ --}}
    <script>
        /* ---- Mobile nav toggle ---- */
        (function () {
            const toggle = document.getElementById('menu-toggle');
            const menu   = document.getElementById('mobile-menu');
            const open   = document.getElementById('icon-open');
            const close  = document.getElementById('icon-close');

            toggle.addEventListener('click', () => {
                const isOpen = !menu.classList.contains('hidden');
                menu.classList.toggle('hidden');
                open.classList.toggle('hidden', !isOpen);
                close.classList.toggle('hidden', isOpen);
            });

            // Close on link click
            menu.querySelectorAll('a').forEach(a => {
                a.addEventListener('click', () => {
                    menu.classList.add('hidden');
                    open.classList.remove('hidden');
                    close.classList.add('hidden');
                });
            });
        })();

        /* ---- Testimonials slider ---- */
        (function () {
            const track     = document.getElementById('slider-track');
            const prevBtn   = document.getElementById('slider-prev');
            const nextBtn   = document.getElementById('slider-next');
            const dots      = document.querySelectorAll('.slider-dot');
            const cards     = document.querySelectorAll('.slider-card');
            const total     = cards.length;
            let current     = 0;
            let autoTimer;

            function cardWidth() {
                return cards[0].getBoundingClientRect().width + 24; // 24 = gap-6
            }

            function goTo(index) {
                current = (index + total) % total;
                track.style.transform = `translateX(-${current * cardWidth()}px)`;
                dots.forEach((d, i) => {
                    d.classList.toggle('bg-brand-600', i === current);
                    d.classList.toggle('w-6', i === current);
                    d.classList.toggle('bg-gray-300', i !== current);
                    d.classList.toggle('w-2', i !== current);
                });
            }

            function startAuto() {
                autoTimer = setInterval(() => goTo(current + 1), 4500);
            }

            function stopAuto() {
                clearInterval(autoTimer);
            }

            nextBtn.addEventListener('click', () => { stopAuto(); goTo(current + 1); startAuto(); });
            prevBtn.addEventListener('click', () => { stopAuto(); goTo(current - 1); startAuto(); });

            dots.forEach(d => {
                d.addEventListener('click', () => {
                    stopAuto();
                    goTo(parseInt(d.dataset.index));
                    startAuto();
                });
            });

            // Touch swipe
            let startX = 0;
            track.addEventListener('touchstart', e => { startX = e.touches[0].clientX; }, { passive: true });
            track.addEventListener('touchend', e => {
                const diff = startX - e.changedTouches[0].clientX;
                if (Math.abs(diff) > 40) { stopAuto(); goTo(current + (diff > 0 ? 1 : -1)); startAuto(); }
            }, { passive: true });

            startAuto();
        })();

        /* ---- Scroll-reveal (Intersection Observer) ---- */
        (function () {
            const elements = document.querySelectorAll('section');
            const obs = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.08 });

            elements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.7s ease, transform 0.7s ease';
                obs.observe(el);
            });
        })();
    </script>

</div>

</x-app-layout>