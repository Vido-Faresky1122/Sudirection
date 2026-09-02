@extends('layouts.app')

@section('content')
    <div class="w-full bg-[#070b19] text-white font-sans min-h-screen relative overflow-x-hidden">

        <section class="relative w-full h-162.5 bg-cover bg-center flex items-center justify-between px-8 md:px-16"
            style="background-image: url('{{ asset('assets/images/hhi.png') }}');">
            <div class="absolute inset-0 bg-linear-to-r from-black/80 via-black/40 to-transparent"></div>

            <div class="relative z-10 max-w-2xl space-y-6">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/20 border border-cyan-400/30 text-cyan-400 text-xs font-semibold uppercase tracking-wider">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    Accommodation
                </div>

                <h1 class="text-4xl md:text-6xl font-black tracking-tight leading-tight">
                    STAY ANYWHERE. <span class="text-cyan-400">FEEL AT HOME</span>
                </h1>

                <p class="text-slate-300 text-sm md:text-base leading-relaxed max-w-lg">
                    Discover exceptional accommodations across the world, carefully selected to make every journey as
                    memorable as the destination itself.
                </p>

                <div class="pt-2">
                    <button
                        class="px-6 py-3 rounded-full bg-white/10 backdrop-blur-md border border-white/20 hover:bg-white/20 text-white font-semibold text-sm flex items-center gap-3 transition-all cursor-pointer">
                        Search
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="hidden lg:block absolute right-8 top-1/2 -translate-y-1/2 pointer-events-none select-none">
                <h2 class="text-[120px] font-black text-white/5 tracking-widest rotate-90 transform origin-center">
                    SUDIRECTION
                </h2>
            </div>
        </section>

        <section class="relative w-full py-20 bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/airport.png') }}');">
            <div class="absolute inset-0 bg-[#070b19]/90 backdrop-blur-xs"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-8 space-y-10">
                <div>
                    <h2 class="text-3xl font-black tracking-tight text-white">Explore by destinations</h2>
                    <p class="text-xs text-slate-400 mt-1">Find your perfect stay</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                    <a href="#"
                        class="group relative h-48 rounded-2xl overflow-hidden border border-white/10 block shadow-lg">
                        <img src="{{ asset('assets/images/tokyo.png') }}"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            alt="Tokyo">
                        <div class="absolute inset-0 bg-linear-to-t from-[#005580]/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end text-white">
                            <div>
                                <h3 class="text-xl font-bold">Tokyo</h3>
                                <p class="text-[10px] text-slate-300">Experience tradition and the future</p>
                            </div>
                            <div
                                class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs group-hover:bg-cyan-400 group-hover:text-black transition-all">
                                ➔</div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-48 rounded-2xl overflow-hidden border border-white/10 block shadow-lg">
                        <img src="{{ asset('assets/images/newyork.png') }}"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            alt="New York">
                        <div class="absolute inset-0 bg-linear-to-t from-[#005580]/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end text-white">
                            <div>
                                <h3 class="text-xl font-bold">New York</h3>
                                <p class="text-[10px] text-slate-300">Modern skyscrapers surround you</p>
                            </div>
                            <div
                                class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs group-hover:bg-cyan-400 group-hover:text-black transition-all">
                                ➔</div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-48 rounded-2xl overflow-hidden border border-white/10 block shadow-lg">
                        <img src="{{ asset('assets/images/chongqing.png') }}"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            alt="Chong Qing">
                        <div class="absolute inset-0 bg-linear-to-t from-[#005580]/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end text-white">
                            <div>
                                <h3 class="text-xl font-bold">Chong Qing</h3>
                                <p class="text-[10px] text-slate-300">Modern skyscrapers surround you</p>
                            </div>
                            <div
                                class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs group-hover:bg-cyan-400 group-hover:text-black transition-all">
                                ➔</div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-48 rounded-2xl overflow-hidden border border-white/10 block shadow-lg">
                        <img src="{{ asset('assets/images/seoul.png') }}"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            alt="Seoul">
                        <div class="absolute inset-0 bg-linear-to-t from-[#005580]/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end text-white">
                            <div>
                                <h3 class="text-xl font-bold">Seoul</h3>
                                <p class="text-[10px] text-slate-300">Experience tradition and the future</p>
                            </div>
                            <div
                                class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs group-hover:bg-cyan-400 group-hover:text-black transition-all">
                                ➔</div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-48 rounded-2xl overflow-hidden border border-white/10 block shadow-lg">
                        <img src="{{ asset('assets/images/bali.png') }}"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            alt="Bali">
                        <div class="absolute inset-0 bg-linear-to-t from-[#005580]/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end text-white">
                            <div>
                                <h3 class="text-xl font-bold">Bali</h3>
                                <p class="text-[10px] text-slate-300">Escape to a tropical island paradise</p>
                            </div>
                            <div
                                class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs group-hover:bg-cyan-400 group-hover:text-black transition-all">
                                ➔</div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-48 rounded-2xl overflow-hidden border border-white/10 block shadow-lg">
                        <img src="{{ asset('assets/images/rome.png') }}"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            alt="Rome">
                        <div class="absolute inset-0 bg-linear-to-t from-[#005580]/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end text-white">
                            <div>
                                <h3 class="text-xl font-bold">Rome</h3>
                                <p class="text-[10px] text-slate-300">Stay surrounded by history and timeless beauty</p>
                            </div>
                            <div
                                class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs group-hover:bg-cyan-400 group-hover:text-black transition-all">
                                ➔</div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-48 rounded-2xl overflow-hidden border border-white/10 block shadow-lg">
                        <img src="{{ asset('assets/images/dubai.png') }}"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            alt="Dubai">
                        <div class="absolute inset-0 bg-linear-to-t from-[#005580]/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end text-white">
                            <div>
                                <h3 class="text-xl font-bold">Dubai</h3>
                                <p class="text-[10px] text-slate-300">Experience luxury beyond imagination</p>
                            </div>
                            <div
                                class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs group-hover:bg-cyan-400 group-hover:text-black transition-all">
                                ➔</div>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative h-48 rounded-2xl overflow-hidden border border-white/10 block shadow-lg">
                        <img src="{{ asset('assets/images/switzerland.png') }}"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            alt="Switzerland">
                        <div class="absolute inset-0 bg-linear-to-t from-[#005580]/90 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end text-white">
                            <div>
                                <h3 class="text-xl font-bold">Switzerland</h3>
                                <p class="text-[10px] text-slate-300">Relax among breathtaking mountain landscapes</p>
                            </div>
                            <div
                                class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs group-hover:bg-cyan-400 group-hover:text-black transition-all">
                                ➔</div>
                        </div>
                    </a>

                </div>

                <div class="mt-12 flex justify-center">
                    <button type="button"
                        class="btn-shimmer px-8 py-3 rounded-full bg-[#39d0ff] text-white font-bold text-xs uppercase tracking-wider">
                        View all destinations
                    </button>
                </div>
            </div>
        </section>

        <section class="relative w-full py-20 bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/totr-ny-amrik.png') }}');">
            <div class="absolute inset-0 bg-[#070b19]/90 backdrop-blur-xs"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-8 space-y-10">
                <div>
                    <h2 class="text-3xl font-black tracking-tight text-white">Featured stays</h2>
                    <p class="text-xs text-slate-400 mt-1">A section for individual accommodations</p>
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

                <div class="mt-12 flex justify-center">
                    <button type="button"
                        class="btn-shimmer px-8 py-3 rounded-full bg-[#39d0ff] text-white font-bold text-xs uppercase tracking-wider">
                        View all stays
                    </button>
                </div>
        </section>

        <section class="relative w-full py-16 bg-white text-slate-800">
            <div class="absolute -top-4 left-1/2 -translate-x-1/2 text-cyan-400">
                <svg class="w-8 h-8 rotate-90" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z" />
                </svg>
            </div>

            <div class="max-w-7xl mx-auto px-8 space-y-10">
                <h2 class="text-3xl font-black text-center tracking-tight text-slate-800">Browse by type</h2>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto">

                    <a href="#"
                        class="flex items-center gap-3 px-6 py-4 rounded-full bg-linear-to-r from-[#295b96] to-[#1e3e68] hover:from-[#336cb2] hover:to-[#254d80] text-white shadow-md transition-all transform hover:-translate-y-0.5">
                        <div class="w-8 h-8 rounded-full bg-[#173254] flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <span class="font-bold text-sm">Hotel</span>
                    </a>

                    <a href="#"
                        class="flex items-center gap-3 px-6 py-4 rounded-full bg-linear-to-r from-[#59784e] to-[#2c473b] hover:from-[#698e5c] hover:to-[#365749] text-white shadow-md transition-all transform hover:-translate-y-0.5">
                        <div class="w-8 h-8 rounded-full bg-[#1b3528] flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 3v18m-6-6l6 6 6-6M5 9c2-2 5-3 7-3s5 1 7 3" />
                            </svg>
                        </div>
                        <span class="font-bold text-sm">Resort</span>
                    </a>

                    <a href="#"
                        class="flex items-center gap-3 px-6 py-4 rounded-full bg-linear-to-r from-[#875932] to-[#402b1f] hover:from-[#9c673a] hover:to-[#4e3526] text-white shadow-md transition-all transform hover:-translate-y-0.5">
                        <div class="w-8 h-8 rounded-full bg-[#2b1b12] flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <span class="font-bold text-sm">Villas</span>
                    </a>

                    <a href="#"
                        class="flex items-center gap-3 px-6 py-4 rounded-full bg-linear-to-r from-[#4d4c8b] to-[#252454] hover:from-[#5b5a9e] hover:to-[#2e2d66] text-white shadow-md transition-all transform hover:-translate-y-0.5">
                        <div class="w-8 h-8 rounded-full bg-[#1a193d] flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                        </div>
                        <span class="font-bold text-sm">Apartment</span>
                    </a>

                </div>
            </div>
        </section>

    </div>
@endsection