@extends('layouts.app')

@section('content')
    <div class="w-full bg-[#070b19] text-white font-sans min-h-screen">

        <section class="relative w-full h-112.5 md:h-137.5 bg-cover bg-center overflow-hidden flex items-end pb-8"
            style="background-image: url('{{ asset('assets/images/santorini.png') }}');">

            <div class="absolute inset-0 bg-linear-to-t from-[#070b19] via-transparent to-black/30"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-8 w-full flex items-center gap-3 overflow-x-auto pb-2">
                <div
                    class="w-20 h-14 md:w-28 md:h-18 rounded-lg overflow-hidden border-2 border-cyan-400 shrink-0 shadow-md">
                    <img src="{{ asset('assets/images/santorini-1.png') }}" class="w-full h-full object-cover"
                        alt="Santorini 1">
                </div>
                <div
                    class="w-20 h-14 md:w-28 md:h-18 rounded-lg overflow-hidden border border-white/30 shrink-0 shadow-md opacity-80 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('assets/images/santorini-2.png') }}" class="w-full h-full object-cover"
                        alt="Santorini 2">
                </div>
                <div
                    class="w-20 h-14 md:w-28 md:h-18 rounded-lg overflow-hidden border border-white/30 shrink-0 shadow-md opacity-80 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('assets/images/santorini-3.png') }}" class="w-full h-full object-cover"
                        alt="Santorini 3">
                </div>
                <div
                    class="w-20 h-14 md:w-28 md:h-18 rounded-lg overflow-hidden border border-white/30 shrink-0 shadow-md opacity-80 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('assets/images/santorini-4.png') }}" class="w-full h-full object-cover"
                        alt="Santorini 4">
                </div>
                <button
                    class="px-4 py-2.5 rounded-lg bg-black/60 backdrop-blur-md border border-white/20 text-xs font-semibold text-white flex items-center gap-2 shrink-0 hover:bg-black/80 transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    View All Photos
                </button>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-8 py-8 space-y-8">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <div
                    class="lg:col-span-2 bg-[#0e1629]/80 backdrop-blur-md border border-slate-800 rounded-2xl p-6 md:p-8 space-y-4 shadow-xl">
                    <div class="flex flex-wrap items-center gap-2 text-xs font-semibold text-cyan-400">
                        <span>Island</span>
                        <span>•</span>
                        <span>Beach</span>
                        <span>•</span>
                        <span>Cultural Heritage</span>
                    </div>

                    <h1 class="text-3xl md:text-5xl font-black tracking-tight text-white uppercase">SANTORINI</h1>

                    <div class="flex flex-wrap items-center gap-4 text-xs">
                        <div class="flex items-center gap-1 text-yellow-400 font-bold">
                            <span>★ 4.8</span>
                            <span class="text-slate-400 font-normal">(2,547 reviews)</span>
                        </div>
                        <span
                            class="px-2.5 py-0.5 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 text-[11px] font-semibold">
                            • Open Now
                        </span>
                        <span class="text-slate-400">08:00 AM - 10:00 PM</span>
                    </div>

                    <div class="flex items-center gap-2 text-xs text-slate-400 pt-2 border-t border-slate-800">
                        <svg class="w-4 h-4 text-cyan-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Santorini, Thira, South Aegean, Greece</span>
                    </div>
                </div>

                <div
                    class="bg-[#0e1629]/80 backdrop-blur-md border border-slate-800 rounded-2xl p-6 flex flex-col justify-between space-y-4 shadow-xl">
                    <div class="space-y-3">
                        <h3 class="text-sm font-semibold text-slate-300">Ready to explore?</h3>
                        <a href="#"
                            class="w-full py-3 px-4 rounded-xl bg-linear-to-r from-cyan-500 to-blue-600 btn-shimmer text-white font-bold text-xs flex items-center justify-center gap-2 shadow-lg shadow-cyan-500/20 text-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            Get Direction
                        </a>
                        <button type="button"
                            class="w-full py-3 px-4 rounded-xl bg-slate-800/80 btn-shimmer border border-slate-700 text-xs font-semibold flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                            Save to Favorites
                        </button>
                    </div>
                    <p class="text-[11px] text-slate-500 text-center">Plan, map and explore with Sudirection Assistant.</p>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <div
                    class="lg:col-span-2 bg-[#0e1629]/80 backdrop-blur-md border border-slate-800 rounded-2xl p-6 md:p-8 space-y-4 shadow-xl">
                    <h3 class="text-lg font-bold text-white">About Santorini</h3>
                    <p class="text-xs md:text-sm text-slate-300 leading-relaxed">
                        Santorini is one of the Cyclades islands in the Aegean Sea. It was devastated by a volcanic eruption
                        in the 16th century BC, forever shaping its rugged landscape. The giant, water-filled caldera is
                        overlooked by white cubiform houses clinging to cliffs above. Known for majestic sunsets,
                        breathtaking beaches, and exquisite local wines, Santorini is a dream destination for travelers
                        seeking a perfect blend of adventure and history.
                    </p>
                    <div class="pt-4 flex flex-wrap items-center justify-between gap-4 border-t border-slate-800 text-xs">
                        <div class="flex items-center gap-2">
                            <span class="text-slate-400">Place Type:</span>
                            <span
                                class="px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 font-medium">Tourist
                                Attraction</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-slate-400">Price:</span>
                            <span class="font-bold text-white">$$$ • Premium</span>
                        </div>
                    </div>
                </div>

                <div class="bg-[#0e1629]/80 backdrop-blur-md border border-slate-800 rounded-2xl p-6 space-y-4 shadow-xl">
                    <h3 class="text-sm font-bold text-white">Available Facilities</h3>
                    <div class="space-y-2.5">
                        <div
                            class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl bg-slate-800/50 border border-slate-700/50 text-xs text-slate-300">
                            <svg class="w-4 h-4 text-cyan-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071a10 10 0 0114.142 0M1.414 8.414a15 15 0 0121.172 0" />
                            </svg>
                            <span>Free High-speed WiFi</span>
                        </div>
                        <div
                            class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl bg-slate-800/50 border border-slate-700/50 text-xs text-slate-300">
                            <svg class="w-4 h-4 text-cyan-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span>Secure Public Parking</span>
                        </div>
                        <div
                            class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl bg-slate-800/50 border border-slate-700/50 text-xs text-slate-300">
                            <svg class="w-4 h-4 text-cyan-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z" />
                            </svg>
                            <span>Cliffside Restaurants</span>
                        </div>
                        <div
                            class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl bg-slate-800/50 border border-slate-700/50 text-xs text-slate-300">
                            <svg class="w-4 h-4 text-cyan-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <span>Public Restrooms</span>
                        </div>
                        <div
                            class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl bg-slate-800/50 border border-slate-700/50 text-xs text-slate-300">
                            <svg class="w-4 h-4 text-cyan-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span>Wheelchair Accessible</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="pt-8 space-y-6">
                <div class="space-y-1">
                    <span class="text-[11px] uppercase tracking-wider font-semibold text-cyan-400">Explore More
                        Wonders</span>
                    <h2 class="text-2xl font-black uppercase tracking-tight text-white">YOU MAY ALSO LIKE</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <a href="#"
                        class="group relative h-64 rounded-2xl overflow-hidden shadow-lg bg-cover bg-center transition-all duration-300 hover:-translate-y-1 block">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                            style="background-image: url('{{ asset('assets/images/tokyo-tower.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-[#0088cc]/90 via-black/20 to-transparent"></div>

                        <button type="button"
                            class="absolute top-4 right-4 text-white/80 hover:text-white transition-colors z-10"
                            onclick="event.stopPropagation();">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </button>

                        <div class="absolute bottom-4 inset-x-5 text-white flex justify-between items-end">
                            <div class="space-y-1">
                                <span
                                    class="text-[11px] uppercase tracking-wider font-semibold opacity-90 flex items-center gap-1">
                                    <svg class="w-3 h-3 text-cyan-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9z" />
                                    </svg>
                                    Japan
                                </span>
                                <h3 class="text-2xl font-bold uppercase tracking-tight">Tokyo</h3>
                                <p class="text-xs opacity-80 max-w-xs line-clamp-1">Experience tradition and the future</p>
                                <div class="flex items-center space-x-1 text-xs pt-1">
                                    <span class="text-yellow-400">★</span>
                                    <span class="font-bold">4.8</span>
                                </div>
                            </div>

                            <div
                                class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-white group-hover:text-cyan-600 transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-64 rounded-2xl overflow-hidden shadow-lg bg-cover bg-center transition-all duration-300 hover:-translate-y-1 block">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                            style="background-image: url('{{ asset('assets/images/santorini.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-[#0088cc]/90 via-black/20 to-transparent"></div>

                        <button type="button"
                            class="absolute top-4 right-4 text-white/80 hover:text-white transition-colors z-10"
                            onclick="event.stopPropagation();">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </button>

                        <div class="absolute bottom-4 inset-x-5 text-white flex justify-between items-end">
                            <div class="space-y-1">
                                <span
                                    class="text-[11px] uppercase tracking-wider font-semibold opacity-90 flex items-center gap-1">
                                    <svg class="w-3 h-3 text-cyan-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9z" />
                                    </svg>
                                    Greece
                                </span>
                                <h3 class="text-2xl font-bold uppercase tracking-tight">SANTORINI</h3>
                                <p class="text-xs opacity-80 max-w-xs line-clamp-1">Enjoy spectacular view of the Aegean Sea
                                </p>
                                <div class="flex items-center space-x-1 text-xs pt-1">
                                    <span class="text-yellow-400">★</span>
                                    <span class="font-bold">4.7</span>
                                </div>
                            </div>

                            <div
                                class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-white group-hover:text-cyan-600 transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-64 rounded-2xl overflow-hidden shadow-lg bg-cover bg-center transition-all duration-300 hover:-translate-y-1 block">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                            style="background-image: url('{{ asset('assets/images/seoul.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-[#0088cc]/90 via-black/20 to-transparent"></div>

                        <button type="button"
                            class="absolute top-4 right-4 text-white/80 hover:text-white transition-colors z-10"
                            onclick="event.stopPropagation();">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </button>

                        <div class="absolute bottom-4 inset-x-5 text-white flex justify-between items-end">
                            <div class="space-y-1">
                                <span
                                    class="text-[11px] uppercase tracking-wider font-semibold opacity-90 flex items-center gap-1">
                                    <svg class="w-3 h-3 text-cyan-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9z" />
                                    </svg>
                                    South Korea
                                </span>
                                <h3 class="text-2xl font-bold uppercase tracking-tight">Seoul</h3>
                                <p class="text-xs opacity-80 max-w-xs line-clamp-1">Experience tradition and the future</p>
                                <div class="flex items-center space-x-1 text-xs pt-1">
                                    <span class="text-yellow-400">★</span>
                                    <span class="font-bold">4.6</span>
                                </div>
                            </div>

                            <div
                                class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-white group-hover:text-cyan-600 transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-64 rounded-2xl overflow-hidden shadow-lg bg-cover bg-center transition-all duration-300 hover:-translate-y-1 block">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                            style="background-image: url('{{ asset('assets/images/bern.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-[#0088cc]/90 via-black/20 to-transparent"></div>

                        <button type="button"
                            class="absolute top-4 right-4 text-white/80 hover:text-white transition-colors z-10"
                            onclick="event.stopPropagation();">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </button>

                        <div class="absolute bottom-4 inset-x-5 text-white flex justify-between items-end">
                            <div class="space-y-1">
                                <span
                                    class="text-[11px] uppercase tracking-wider font-semibold opacity-90 flex items-center gap-1">
                                    <svg class="w-3 h-3 text-cyan-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9z" />
                                    </svg>
                                    Switzerland
                                </span>
                                <h3 class="text-2xl font-bold uppercase tracking-tight">Bern</h3>
                                <p class="text-xs opacity-80 max-w-xs line-clamp-1">Relax among breathtaking mountains</p>
                                <div class="flex items-center space-x-1 text-xs pt-1">
                                    <span class="text-yellow-400">★</span>
                                    <span class="font-bold">4.5</span>
                                </div>
                            </div>

                            <div
                                class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-white group-hover:text-cyan-600 transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

        </section>

    </div>
@endsection