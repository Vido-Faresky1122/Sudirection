@extends('layouts.app')

@section('content')
    <div class="w-full bg-[#070b19] text-white font-sans min-h-screen">

        <section class="relative w-full h-112.5 md:h-137.5 bg-cover bg-center overflow-hidden flex items-end pb-8"
            style="background-image: url('{{ asset('assets/images/gracehotel.png') }}');">

            <div class="absolute inset-0 bg-linear-to-t from-[#070b19] via-transparent to-black/30"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-8 w-full flex items-center gap-3 overflow-x-auto pb-2">
                <div
                    class="w-20 h-14 md:w-28 md:h-18 rounded-lg overflow-hidden border-2 border-cyan-400 shrink-0 shadow-md">
                    <img src="{{ asset('assets/images/gracehotel-1.png') }}" class="w-full h-full object-cover"
                        alt="Grace Hotel 1">
                </div>
                <div
                    class="w-20 h-14 md:w-28 md:h-18 rounded-lg overflow-hidden border border-white/30 shrink-0 shadow-md opacity-80 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('assets/images/gracehotel-2.png') }}" class="w-full h-full object-cover"
                        alt="Grace Hotel 2">
                </div>
                <div
                    class="w-20 h-14 md:w-28 md:h-18 rounded-lg overflow-hidden border border-white/30 shrink-0 shadow-md opacity-80 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('assets/images/gracehotel-3.png') }}" class="w-full h-full object-cover"
                        alt="Grace Hotel 3">
                </div>
                <div
                    class="w-20 h-14 md:w-28 md:h-18 rounded-lg overflow-hidden border border-white/30 shrink-0 shadow-md opacity-80 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('assets/images/gracehotel-4.png') }}" class="w-full h-full object-cover"
                        alt="Grace Hotel 4">
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
                        <span>Luxury Hotel</span>
                        <span>•</span>
                        <span>Boutique</span>
                        <span>•</span>
                        <span>Infinity Pool</span>
                    </div>

                    <h1 class="text-3xl md:text-5xl font-black tracking-tight text-white uppercase">Grace Hotel, Auberge
                        Resorts Collection</h1>

                    <div class="flex items-center gap-4 text-xs">

                        <div
                            class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#0a1f18] border border-[#14532d] text-emerald-400 font-semibold">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                            <span class="text-white font-bold">Available</span>
                        </div>

                        <span class="text-slate-400 text-sm">Concierge 24/7</span>

                        <div class="h-4 w-px bg-slate-700/60"></div>

                        <div
                            class="flex items-center gap-2 px-4 py-1.5 rounded-full bg-linear-to-r from-[#6b8e5d] to-[#2d4d43] text-white font-medium shadow-sm">
                            <div class="w-5 h-5 rounded-full bg-[#183634] flex items-center justify-center">
                                <svg class="w-3 h-3 text-[#5eead4]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 3v18m-6-6l6 6 6-6M5 9c2-2 5-3 7-3s5 1 7 3" />
                                </svg>
                            </div>
                            <span class="font-bold">Resort</span>
                        </div>

                    </div>

                    <div class="flex items-center gap-2 text-xs text-slate-400 pt-2 border-t border-slate-800">
                        <svg class="w-4 h-4 text-cyan-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Imerovigli, Santorini 847 00, Greece</span>
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
                    <h3 class="text-lg font-bold text-white">About Grace Hotel</h3>
                    <p class="text-xs md:text-sm text-slate-300 leading-relaxed">
                        Grace Hotel is one of the Cyclades islands in the Aegean Sea. It was devastated by a volcanic
                        eruption
                        in the 16th century BC, forever shaping its rugged landscape. The giant, water-filled caldera is
                        overlooked by white cubiform houses clinging to cliffs above. Known for majestic sunsets,
                        breathtaking beaches, and exquisite local wines, Grace Hotel is a dream destination for travelers
                        seeking a perfect blend of adventure and history.
                    </p>
                    <div class="pt-4 flex flex-wrap items-center justify-between gap-4 border-t border-slate-800 text-xs">
                        <div class="flex items-center gap-2">
                            <span class="text-slate-400">Price:</span>
                            <span class="font-bold text-white">$$$ • Premium</span>
                        </div>
                    </div>
                </div>

                <div class="bg-[#0e1629]/80 backdrop-blur-md border border-slate-800 rounded-2xl p-6 space-y-4 shadow-xl">
                    <h3 class="text-base font-bold text-white">Included Facilities</h3>
                    <div class="space-y-3">

                        <div
                            class="flex items-center gap-3 px-4 py-3.5 rounded-2xl bg-[#131b2e] border border-slate-700/40 text-sm text-slate-200">
                            <svg class="w-5 h-5 text-cyan-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071a10 10 0 0114.142 0M1.414 8.414a15 15 0 0121.172 0" />
                            </svg>
                            <span class="font-medium">Infinity Pool</span>
                        </div>

                        <div
                            class="flex items-center gap-3 px-4 py-3.5 rounded-2xl bg-[#131b2e] border border-slate-700/40 text-sm text-slate-200">
                            <svg class="w-5 h-5 text-cyan-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="9" stroke-width="2" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 7v10M12 7h4a3 3 0 010 6h-4" />
                            </svg>
                            <span class="font-medium">Luxury Spa & Wellness</span>
                        </div>

                        <div
                            class="flex items-center gap-3 px-4 py-3.5 rounded-2xl bg-[#131b2e] border border-slate-700/40 text-sm text-slate-200">
                            <svg class="w-5 h-5 text-cyan-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 3v6a3 3 0 003 3h0a3 3 0 003-3V3M9 12v9M18 3v18M15 6h6" />
                            </svg>
                            <span class="font-medium">Fine Dining Restaurant</span>
                        </div>

                        <div
                            class="flex items-center gap-3 px-4 py-3.5 rounded-2xl bg-[#131b2e] border border-slate-700/40 text-sm text-slate-200">
                            <svg class="w-5 h-5 text-cyan-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                            <span class="font-medium">24/7 Room Service</span>
                        </div>

                        <div
                            class="flex items-center gap-3 px-4 py-3.5 rounded-2xl bg-[#131b2e] border border-slate-700/40 text-sm text-slate-200">
                            <svg class="w-5 h-5 text-cyan-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="9" stroke-width="2" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 10l4 4m0-4l-4 4" />
                            </svg>
                            <span class="font-medium">Private Balconies</span>
                        </div>

                        <div
                            class="flex items-center gap-3 px-4 py-3.5 rounded-2xl bg-[#131b2e] border border-slate-700/40 text-sm text-slate-200">
                            <svg class="w-5 h-5 text-cyan-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071a10 10 0 0114.142 0M1.414 8.414a15 15 0 0121.172 0" />
                            </svg>
                            <span class="font-medium">Free High-speed WiFi</span>
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

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <a href="#"
                        class="group relative h-64 rounded-2xl overflow-hidden border border-white/10 flex shadow-xl transition-all duration-300 hover:-translate-y-1 hover:border-cyan-400/50">
                        <div class="w-1/2 relative overflow-hidden">
                            <img src="{{ asset('assets/images/mbs.png') }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                alt="Marina Bay Sanda">
                        </div>
                        <div class="w-1/2 bg-[#0099d8] p-4 flex flex-col justify-between text-white relative">
                            <button type="button" onclick="event.stopPropagation();"
                                class="absolute top-3 right-3 text-white/80 hover:text-white z-10">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                            </button>
                            <div>
                                <h3 class="text-base font-bold leading-tight group-hover:text-cyan-100 transition-colors">
                                    Marina Bay Sanda</h3>
                                <p class="text-[10px] text-white/80">Singapore</p>
                            </div>
                            <div class="space-y-3">
                                <span
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#1b3b6f] text-[10px] font-semibold">
                                    <svg class="w-3 h-3 text-cyan-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                    Hotel
                                </span>
                                <div
                                    class="w-full py-2 rounded-lg bg-black/20 group-hover:bg-black/40 text-[10px] font-semibold text-center block transition-all">
                                    View Stay ➔
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-64 rounded-2xl overflow-hidden border border-white/10 flex shadow-xl transition-all duration-300 hover:-translate-y-1 hover:border-cyan-400/50">
                        <div class="w-1/2 relative overflow-hidden">
                            <img src="{{ asset('assets/images/fsr.png') }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                alt="Four Seasons Resort">
                        </div>
                        <div class="w-1/2 bg-[#0099d8] p-4 flex flex-col justify-between text-white relative">
                            <button type="button" onclick="event.stopPropagation();"
                                class="absolute top-3 right-3 text-white/80 hover:text-white z-10">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                            </button>
                            <div>
                                <h3 class="text-base font-bold leading-tight group-hover:text-cyan-100 transition-colors">
                                    Four Seasons Resort</h3>
                                <p class="text-[10px] text-white/80">Bali, Indonesia</p>
                            </div>
                            <div class="space-y-3">
                                <span
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#274838] text-[10px] font-semibold">
                                    <svg class="w-3 h-3 text-emerald-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 3v18m-6-6l6 6 6-6M5 9c2-2 5-3 7-3s5 1 7 3" />
                                    </svg>
                                    Resort
                                </span>
                                <div
                                    class="w-full py-2 rounded-lg bg-black/20 group-hover:bg-black/40 text-[10px] font-semibold text-center block transition-all">
                                    View Stay ➔
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-64 rounded-2xl overflow-hidden border border-white/10 flex shadow-xl transition-all duration-300 hover:-translate-y-1 hover:border-cyan-400/50">
                        <div class="w-1/2 relative overflow-hidden">
                            <img src="{{ asset('assets/images/theritz.png') }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                alt="The Ritz">
                        </div>
                        <div class="w-1/2 bg-[#0099d8] p-4 flex flex-col justify-between text-white relative">
                            <button type="button" onclick="event.stopPropagation();"
                                class="absolute top-3 right-3 text-white/80 hover:text-white z-10">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                            </button>
                            <div>
                                <h3 class="text-base font-bold leading-tight group-hover:text-cyan-100 transition-colors">
                                    The Ritz</h3>
                                <p class="text-[10px] text-white/80">Paris, France</p>
                            </div>
                            <div class="space-y-3">
                                <span
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#1b3b6f] text-[10px] font-semibold">
                                    <svg class="w-3 h-3 text-cyan-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                    Hotel
                                </span>
                                <div
                                    class="w-full py-2 rounded-lg bg-black/20 group-hover:bg-black/40 text-[10px] font-semibold text-center block transition-all">
                                    View Stay ➔
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-64 rounded-2xl overflow-hidden border border-white/10 flex shadow-xl transition-all duration-300 hover:-translate-y-1 hover:border-cyan-400/50">
                        <div class="w-1/2 relative overflow-hidden">
                            <img src="{{ asset('assets/images/mbs.png') }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                alt="Marina Bay Sanda">
                        </div>
                        <div class="w-1/2 bg-[#0099d8] p-4 flex flex-col justify-between text-white relative">
                            <button type="button" onclick="event.stopPropagation();"
                                class="absolute top-3 right-3 text-white/80 hover:text-white z-10">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                            </button>
                            <div>
                                <h3 class="text-base font-bold leading-tight group-hover:text-cyan-100 transition-colors">
                                    Marina Bay Sanda</h3>
                                <p class="text-[10px] text-white/80">Singapore</p>
                            </div>
                            <div class="space-y-3">
                                <span
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#1b3b6f] text-[10px] font-semibold">
                                    <svg class="w-3 h-3 text-cyan-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                    Hotel
                                </span>
                                <div
                                    class="w-full py-2 rounded-lg bg-black/20 group-hover:bg-black/40 text-[10px] font-semibold text-center block transition-all">
                                    View Stay ➔
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-64 rounded-2xl overflow-hidden border border-white/10 flex shadow-xl transition-all duration-300 hover:-translate-y-1 hover:border-cyan-400/50">
                        <div class="w-1/2 relative overflow-hidden">
                            <img src="{{ asset('assets/images/fsr.png') }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                alt="Four Seasons Resort">
                        </div>
                        <div class="w-1/2 bg-[#0099d8] p-4 flex flex-col justify-between text-white relative">
                            <button type="button" onclick="event.stopPropagation();"
                                class="absolute top-3 right-3 text-white/80 hover:text-white z-10">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                            </button>
                            <div>
                                <h3 class="text-base font-bold leading-tight group-hover:text-cyan-100 transition-colors">
                                    Four Seasons Resort</h3>
                                <p class="text-[10px] text-white/80">Bali, Indonesia</p>
                            </div>
                            <div class="space-y-3">
                                <span
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#274838] text-[10px] font-semibold">
                                    <svg class="w-3 h-3 text-emerald-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 3v18m-6-6l6 6 6-6M5 9c2-2 5-3 7-3s5 1 7 3" />
                                    </svg>
                                    Resort
                                </span>
                                <div
                                    class="w-full py-2 rounded-lg bg-black/20 group-hover:bg-black/40 text-[10px] font-semibold text-center block transition-all">
                                    View Stay ➔
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-64 rounded-2xl overflow-hidden border border-white/10 flex shadow-xl transition-all duration-300 hover:-translate-y-1 hover:border-cyan-400/50">
                        <div class="w-1/2 relative overflow-hidden">
                            <img src="{{ asset('assets/images/theritz.png') }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                alt="The Ritz">
                        </div>
                        <div class="w-1/2 bg-[#0099d8] p-4 flex flex-col justify-between text-white relative">
                            <button type="button" onclick="event.stopPropagation();"
                                class="absolute top-3 right-3 text-white/80 hover:text-white z-10">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                            </button>
                            <div>
                                <h3 class="text-base font-bold leading-tight group-hover:text-cyan-100 transition-colors">
                                    The Ritz</h3>
                                <p class="text-[10px] text-white/80">Paris, France</p>
                            </div>
                            <div class="space-y-3">
                                <span
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#1b3b6f] text-[10px] font-semibold">
                                    <svg class="w-3 h-3 text-cyan-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                    Hotel
                                </span>
                                <div
                                    class="w-full py-2 rounded-lg bg-black/20 group-hover:bg-black/40 text-[10px] font-semibold text-center block transition-all">
                                    View Stay ➔
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

        </section>

    </div>
@endsection