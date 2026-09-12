@extends('layouts.app')

@section('content')
    <style>
        /* Efek Blur Fade-Out khusus untuk bagian bawah section Jendela Pesawat menuju warna Soft Sky Blue */
        .fade-to-sky-bottom {
            background: linear-linear(to bottom,
                    rgba(240, 249, 255, 0) 0%,
                    rgba(240, 249, 255, 0.5) 50%,
                    rgba(240, 249, 255, 0.95) 85%,
                    rgb(240, 249, 255) 100%);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
        }

        /* Animasi Awan / Strata Angin Ringan di Dalam Jendela */
        @keyframes windFly {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }

            40% {
                opacity: 0.4;
            }

            60% {
                opacity: 0.4;
            }

            100% {
                transform: translateX(-100%);
                opacity: 0;
            }
        }

        .wind-streak {
            position: absolute;
            height: 6px;
            background: linear-linear(90deg, transparent, rgba(255, 255, 255, 0.7), transparent);
            border-radius: 999px;
            filter: blur(3px);
            animation: windFly 3s linear infinite;
        }
    </style>

    {{-- Container Utama dengan Background Soft Sky Blue halus --}}
    <div
        class="relative w-full overflow-hidden bg-linear-to-b from-slate-900 via-sky-50/30 to-sky-100/50 font-sans text-slate-800">

        {{-- WRAPPER TERATAS (3 SECTION FOTO) --}}
        <div id="top-flight-wrapper" class="relative w-full">

            {{-- GARIS DOTTED & PESAWAT 1 --}}
            <div class="absolute left-1/2 -translate-x-1/2 top-28 bottom-64 z-10 pointer-events-none hidden md:block w-8">
                <div class="absolute left-1/2 -translate-x-1/2 top-0 bottom-0 border-r-2 border-dashed border-white/80">
                </div>
                <div id="plane-1" class="absolute left-1/2 top-0 -translate-x-1/2 text-white pointer-events-none">
                    <svg class="w-7 h-7 transform rotate-180 drop-shadow-md" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z" />
                    </svg>
                </div>
            </div>

            {{-- SECTION 1: HERO DUBAI (Normal / Tanpa Blur Bottom) --}}
            <section class="relative min-h-screen w-full bg-cover bg-center flex flex-col justify-between p-8 md:p-16"
                style="background-image: url('{{ asset('assets/images/dubai-land.png') }}');">
                <div class="absolute inset-0 bg-slate-900/20"></div>
                <div class="glass-photo absolute inset-0"></div>

                <div class="relative z-20 max-w-7xl mx-auto w-full grid grid-cols-1 md:grid-cols-2 gap-8 items-start pt-12">
                    <div class="text-white space-y-4 max-w-xl">
                        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">
                            WELCOME TO <br>
                            <span class="text-sky-400">SUDIRECTION</span>
                        </h1>
                        <p class="text-sm md:text-base text-slate-200 leading-relaxed font-light">
                            Discover extraordinary places with us. We provide the best recommendations for accommodations,
                            places to visit, and local insights to make your journey unforgettable.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 max-w-md md:ml-auto">
                        <a href="#"
                            class="relative rounded-2xl overflow-hidden shadow-lg border border-white/20 h-28 group block transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                                style="background-image: url('{{ asset('assets/images/displace-land.png') }}');"></div>
                            <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-all"></div>
                            <div class="glass-photo absolute inset-0"></div>
                            <span class="absolute bottom-3 left-3 text-xs font-semibold text-white z-10">Discover
                                Places</span>
                        </a>
                        <a href="#"
                            class="relative rounded-2xl overflow-hidden shadow-lg border border-white/20 h-28 group block transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                                style="background-image: url('{{ asset('assets/images/airplane-land.png') }}');"></div>
                            <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-all"></div>
                            <div class="glass-photo absolute inset-0"></div>
                            <span class="absolute bottom-3 left-3 text-xs font-semibold text-white z-10">Explore
                                Destination</span>
                        </a>
                        <a href="#"
                            class="relative rounded-2xl overflow-hidden shadow-lg border border-white/20 h-28 group block transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                                style="background-image: url('{{ asset('assets/images/accomm-land.png') }}');"></div>
                            <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-all"></div>
                            <div class="glass-photo absolute inset-0"></div>
                            <span
                                class="absolute bottom-3 left-3 text-xs font-semibold text-white z-10">Accommodations</span>
                        </a>
                        <a href="#"
                            class="relative rounded-2xl overflow-hidden shadow-lg border border-white/20 h-28 group block transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                                style="background-image: url('{{ asset('assets/images/souvenir-land.png') }}');"></div>
                            <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-all"></div>
                            <div class="glass-photo absolute inset-0"></div>
                            <span class="absolute bottom-3 left-3 text-xs font-semibold text-white z-10">Souvenir</span>
                        </a>
                    </div>
                </div>
            </section>

            {{-- SECTION 2: BRIDGE (Kurus & Round 100% Sempurna) --}}
            <section class="relative min-h-screen w-full bg-cover bg-center flex items-center justify-center p-6 md:p-12"
                style="background-image: url('{{ asset('assets/images/bridge-land.png') }}');">

                <div class="absolute inset-0 bg-slate-950/30"></div>
                <div class="glass-photo absolute inset-0"></div>

                {{-- Container dibuat max-w-4xl agar tiap kartu lebih kurus/ramping --}}
                <div
                    class="relative z-20 max-w-4xl w-full grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10 py-16 justify-items-center items-center">

                    {{-- KARTU 1: DISCOVER --}}
                    <div
                        class="relative w-full max-w-65 glass-ios rounded-full text-white flex flex-col justify-between items-center h-135 overflow-hidden p-2">
                        {{-- Judul Vertikal --}}
                        <div class="pt-8 text-center">
                            <h3
                                class="text-2xl font-extrabold tracking-widest uppercase [writing-mode:vertical-lr] rotate-180 mx-auto">
                                DISCOVER
                            </h3>
                        </div>

                        {{-- Inner Box Merah (Kurus & Rounded Full) --}}
                        <div
                            class="w-full bg-red-600/80 backdrop-blur-md border border-red-400/25 rounded-full p-6 text-center text-white shadow-lg flex flex-col items-center justify-center min-h-70 z-10">
                            <p class="text-[9px] tracking-widest text-white/80 uppercase font-semibold mb-2">TRAVEL THE
                                WONDERS</p>
                            <h4 class="font-extrabold text-xs mb-2 leading-tight">Explore Amazing Places</h4>
                            <p class="text-[10px] text-white/90 leading-relaxed font-light">Find beautiful destinations,
                                hidden gems, and unforgettable experiences.</p>
                        </div>
                    </div>

                    {{-- KARTU 2: LOCAL GUIDE --}}
                    <div
                        class="relative w-full max-w-65 glass-ios rounded-full text-white flex flex-col justify-between items-center h-135 overflow-hidden p-2">
                        {{-- Judul Vertikal --}}
                        <div class="pt-8 text-center">
                            <h3 class="text-2xl font-bold tracking-wider [writing-mode:vertical-lr] rotate-180 mx-auto">
                                Local Guide
                            </h3>
                        </div>

                        {{-- Inner Box Oranye (Kurus & Rounded Full) --}}
                        <div
                            class="w-full bg-amber-500/85 backdrop-blur-md border border-amber-300/30 rounded-full p-6 text-center text-slate-900 shadow-lg flex flex-col items-center justify-center min-h-70 z-10">
                            <h4 class="font-extrabold text-xs mb-2 leading-tight">Experience the Local Culture</h4>
                            <p class="text-[10px] text-slate-900/90 font-medium leading-relaxed">Discover traditional food,
                                culture, and the best places loved by locals.</p>
                        </div>

                        {{-- Mockup HP --}}
                        <img src="{{ asset('assets/images/hp-land.png') }}" alt="Local Guide Phone"
                            class="absolute -bottom-2 right-1/2 translate-x-1/2 w-24 drop-shadow-2xl z-20 pointer-events-none">
                    </div>

                    {{-- KARTU 3: PLAN YOUR JOURNEY --}}
                    <div
                        class="relative w-full max-w-65 bg-lime-500/85 backdrop-blur-md border border-lime-300/30 rounded-full text-slate-900 flex flex-col justify-between items-center h-135 shadow-2xl overflow-hidden p-6">
                        {{-- Judul Vertikal --}}
                        <div class="pt-6 text-center">
                            <h3
                                class="text-2xl font-extrabold tracking-wider [writing-mode:vertical-lr] rotate-180 mx-auto">
                                Plan Your Journey
                            </h3>
                        </div>

                        {{-- Teks Bawah --}}
                        <div class="text-center pb-8 z-10">
                            <p class="text-[11px] font-bold leading-relaxed tracking-wide">
                                Find it.<br>
                                Know it.<br>
                                Get There
                            </p>
                        </div>

                        {{-- Tiket Pesawat --}}
                        <img src="{{ asset('assets/images/ticket-land.png') }}" alt="Flight Ticket"
                            class="absolute bottom-2 right-1 w-28 transform -rotate-12 drop-shadow-2xl z-20">
                    </div>

                </div>
            </section>

            {{-- SECTION 3: IN AIRPLANE (JENDELA) - DENGAN BLUR BOTTOM & TEKS TENTENGAH --}}
            <section id="airplane-section"
                class="relative h-[85vh] w-full bg-cover bg-center flex flex-col items-center justify-center overflow-hidden"
                style="background-image: url('{{ asset('assets/images/inairplane-land.png') }}');">

                <div class="absolute inset-0 bg-slate-950/10"></div>
                <div class="glass-photo absolute inset-0"></div>

                {{-- Streak Awan --}}
                <div class="absolute inset-0 pointer-events-none z-10 overflow-hidden">
                    <div class="wind-streak w-64 top-1/4 left-10" style="animation-duration: 2.2s;"></div>
                    <div class="wind-streak w-96 top-1/3 left-1/3" style="animation-duration: 3.5s; animation-delay: 0.5s;">
                    </div>
                    <div class="wind-streak w-48 top-1/2 right-20" style="animation-duration: 1.8s; animation-delay: 0.2s;">
                    </div>
                    <div class="wind-streak w-80 top-2/3 left-20" style="animation-duration: 2.8s; animation-delay: 0.8s;">
                    </div>
                </div>

                {{-- Tulisan SUDIRECTION Pas Ditengah --}}
                <div class="relative z-20 text-center flex flex-col items-center justify-center px-4">
                    <h2 class="text-5xl md:text-8xl font-black text-white tracking-widest drop-shadow-2xl">
                        SUDI<span class="text-sky-400">RECTION</span>
                    </h2>
                    <div class="relative inline-block mt-4">
                        <p class="text-xs md:text-sm text-slate-200 tracking-widest uppercase font-light">YOUR JOURNEY
                            STARTS HERE.</p>
                        <div class="absolute left-1/2 -translate-x-1/2 -bottom-6 text-white">
                            <svg class="w-4 h-4 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Efek Blur khusus hanya di bawah foto background pesawat --}}
                <div class="absolute bottom-0 left-0 right-0 h-48 fade-to-sky-bottom pointer-events-none z-20"></div>
            </section>

        </div>

        {{-- AREA DENGAN BACKGROUND SOFT SKY BLUE (BUKAN PUTIH POLOS) --}}
        <div class="bg-linear-to-b from-sky-50 via-sky-300 to-sky-600">

            {{-- SECTION 4: ACCOMMODATION --}}
            <section class="relative py-16 px-8 md:px-16 max-w-7xl mx-auto">
                <div class="flex items-start gap-4 mb-10">
                    <div class="p-3 bg-sky-400/10 rounded-2xl text-sky-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-black uppercase tracking-wider text-slate-700">ACCOMMODATION
                        </h2>
                        <p class="text-sm text-slate-400 font-medium mt-1">Rediscover yourself in accomodations across the
                            world</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <a href="#"
                        class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-2xl h-48 cursor-pointer transform transition-all duration-300 hover:-translate-y-2 active:scale-95">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            style="background-image: url('{{ asset('assets/images/accomm-land.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="glass-photo absolute inset-0"></div>
                        <div class="absolute bottom-4 left-5 text-white z-10">
                            <h3 class="font-bold text-xl group-hover:text-sky-300 transition-colors">JAPAN</h3>
                            <p class="text-xs text-slate-300">11,200 accommodations</p>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-2xl h-48 cursor-pointer transform transition-all duration-300 hover:-translate-y-2 active:scale-95">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            style="background-image: url('{{ asset('assets/images/bridge-land.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="glass-photo absolute inset-0"></div>
                        <div class="absolute bottom-4 left-5 text-white z-10">
                            <h3 class="font-bold text-xl group-hover:text-sky-300 transition-colors">AMERICA</h3>
                            <p class="text-xs text-slate-300">18,500 accommodations</p>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-2xl h-48 cursor-pointer transform transition-all duration-300 hover:-translate-y-2 active:scale-95">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            style="background-image: url('{{ asset('assets/images/dubai-land.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="glass-photo absolute inset-0"></div>
                        <div class="absolute bottom-4 left-5 text-white z-10">
                            <h3 class="font-bold text-xl group-hover:text-sky-300 transition-colors">CHINA</h3>
                            <p class="text-xs text-slate-300">22,100 accommodations</p>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-2xl h-48 cursor-pointer transform transition-all duration-300 hover:-translate-y-2 active:scale-95">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            style="background-image: url('{{ asset('assets/images/airplane-land.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="glass-photo absolute inset-0"></div>
                        <div class="absolute bottom-4 left-5 text-white z-10">
                            <h3 class="font-bold text-xl group-hover:text-sky-300 transition-colors">KOREA</h3>
                            <p class="text-xs text-slate-300">9,800 accommodations</p>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-2xl h-48 cursor-pointer transform transition-all duration-300 hover:-translate-y-2 active:scale-95">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            style="background-image: url('{{ asset('assets/images/displace-land.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="glass-photo absolute inset-0"></div>
                        <div class="absolute bottom-4 left-5 text-white z-10">
                            <h3 class="font-bold text-xl group-hover:text-sky-300 transition-colors">FRANCE</h3>
                            <p class="text-xs text-slate-300">14,300 accommodations</p>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-2xl h-48 cursor-pointer transform transition-all duration-300 hover:-translate-y-2 active:scale-95">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            style="background-image: url('{{ asset('assets/images/souvenir-land.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="glass-photo absolute inset-0"></div>
                        <div class="absolute bottom-4 left-5 text-white z-10">
                            <h3 class="font-bold text-xl group-hover:text-sky-300 transition-colors">AUSTRALIA</h3>
                            <p class="text-xs text-slate-300">12,600 accommodations</p>
                        </div>
                    </a>
                </div>

                <div class="mt-10 text-center">
                    <button
                        class="px-8 py-3 rounded-full bg-sky-400/80 hover:bg-sky-500/80 text-white font-medium text-xs tracking-wider uppercase transition-all shadow-md hover:shadow-sky-300/50 active:scale-95 backdrop-blur-md border border-sky-300/30">
                        Find Places & Accommodations
                    </button>
                </div>
            </section>

            {{-- SECTION 5: TOURIST ATTRACTION --}}
            <section id="tourist-section" class="relative py-16 px-8 md:px-16 max-w-7xl mx-auto pb-24">

                {{-- GARIS DOTTED & PESAWAT 2 --}}
                <div class="absolute left-4 md:left-8 top-10 bottom-10 z-10 pointer-events-none hidden md:block w-8">
                    <div
                        class="absolute left-1/2 -translate-x-1/2 top-0 bottom-0 border-r-2 border-dashed border-sky-400/60">
                    </div>
                    <div id="plane-2" class="absolute left-1/2 top-0 -translate-x-1/2 text-sky-500 pointer-events-none">
                        <svg class="w-7 h-7 transform rotate-180 drop-shadow-md" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z" />
                        </svg>
                    </div>
                </div>

                <div class="flex items-start gap-4 mb-10 md:ml-8 relative z-20">
                    <div class="p-3 bg-sky-400/10 rounded-full text-sky-500">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                        </svg>
                    </div>
                    <div>
                        {{-- Judul dengan Underline Biru (Sesuai Gambar Referensi) --}}
                        <h2 class="inline-block text-2xl md:text-3xl font-black text-slate-700 relative pb-1">
                            Tourist Attraction
                        </h2>
                        <p class="text-sm text-slate-400 font-medium mt-1">Explore the most visited and unforgettable
                            destinations.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:ml-8 relative z-20">
                    <a href="#"
                        class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-2xl h-52 cursor-pointer transform transition-all duration-300 hover:-translate-y-2 active:scale-95">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            style="background-image: url('{{ asset('assets/images/dubai-land.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="glass-photo absolute inset-0"></div>
                        <div class="absolute bottom-4 left-5 text-white z-10">
                            <h3 class="font-bold text-xl group-hover:text-sky-300 transition-colors">BALI</h3>
                            <p class="text-xs text-slate-300">Indonesia</p>
                            <span
                                class="inline-block mt-2 text-[10px] bg-white/20 backdrop-blur-md px-3 py-1 rounded-full group-hover:bg-sky-500/80 transition-colors">3,5M
                                visits/year</span>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-2xl h-52 cursor-pointer transform transition-all duration-300 hover:-translate-y-2 active:scale-95">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            style="background-image: url('{{ asset('assets/images/displace-land.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="glass-photo absolute inset-0"></div>
                        <div class="absolute bottom-4 left-5 text-white z-10">
                            <h3 class="font-bold text-xl group-hover:text-sky-300 transition-colors">PARIS</h3>
                            <p class="text-xs text-slate-300">France</p>
                            <span
                                class="inline-block mt-2 text-[10px] bg-white/20 backdrop-blur-md px-3 py-1 rounded-full group-hover:bg-sky-500/80 transition-colors">7,8M
                                visits/year</span>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-2xl h-52 cursor-pointer transform transition-all duration-300 hover:-translate-y-2 active:scale-95">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            style="background-image: url('{{ asset('assets/images/accomm-land.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="glass-photo absolute inset-0"></div>
                        <div class="absolute bottom-4 left-5 text-white z-10">
                            <h3 class="font-bold text-xl group-hover:text-sky-300 transition-colors">TOKYO</h3>
                            <p class="text-xs text-slate-300">Japan</p>
                            <span
                                class="inline-block mt-2 text-[10px] bg-white/20 backdrop-blur-md px-3 py-1 rounded-full group-hover:bg-sky-500/80 transition-colors">5,2M
                                visits/year</span>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-2xl h-52 cursor-pointer transform transition-all duration-300 hover:-translate-y-2 active:scale-95">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            style="background-image: url('{{ asset('assets/images/bridge-land.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="glass-photo absolute inset-0"></div>
                        <div class="absolute bottom-4 left-5 text-white z-10">
                            <h3 class="font-bold text-xl group-hover:text-sky-300 transition-colors">SANTORINI</h3>
                            <p class="text-xs text-slate-300">Greece</p>
                            <span
                                class="inline-block mt-2 text-[10px] bg-white/20 backdrop-blur-md px-3 py-1 rounded-full group-hover:bg-sky-500/80 transition-colors">2,1M
                                visits/year</span>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-2xl h-52 cursor-pointer transform transition-all duration-300 hover:-translate-y-2 active:scale-95">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            style="background-image: url('{{ asset('assets/images/airplane-land.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="glass-photo absolute inset-0"></div>
                        <div class="absolute bottom-4 left-5 text-white z-10">
                            <h3 class="font-bold text-xl group-hover:text-sky-300 transition-colors">DUBAI</h3>
                            <p class="text-xs text-slate-300">UAE</p>
                            <span
                                class="inline-block mt-2 text-[10px] bg-white/20 backdrop-blur-md px-3 py-1 rounded-full group-hover:bg-sky-500/80 transition-colors">6,4M
                                visits/year</span>
                        </div>
                    </a>

                    <a href="#"
                        class="group relative rounded-3xl overflow-hidden shadow-md hover:shadow-2xl h-52 cursor-pointer transform transition-all duration-300 hover:-translate-y-2 active:scale-95">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            style="background-image: url('{{ asset('assets/images/souvenir-land.png') }}');"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="glass-photo absolute inset-0"></div>
                        <div class="absolute bottom-4 left-5 text-white z-10">
                            <h3 class="font-bold text-xl group-hover:text-sky-300 transition-colors">MALDIVES</h3>
                            <p class="text-xs text-slate-300">Sri Lanka</p>
                            <span
                                class="inline-block mt-2 text-[10px] bg-white/20 backdrop-blur-md px-3 py-1 rounded-full group-hover:bg-sky-500/80 transition-colors">1,8M
                                visits/year</span>
                        </div>
                    </a>
                </div>

                <div class="mt-10 text-center md:ml-8 relative z-20">
                    <button
                        class="px-8 py-3 rounded-full bg-sky-400/80 hover:bg-sky-500/80 text-white font-medium text-xs tracking-wider uppercase transition-all shadow-md hover:shadow-sky-300/50 active:scale-95 backdrop-blur-md border border-sky-300/30">
                        View All Places
                    </button>
                </div>
            </section>

        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const plane1 = document.getElementById('plane-1');
            const plane2 = document.getElementById('plane-2');
            const topWrapper = document.getElementById('top-flight-wrapper');
            const touristSection = document.getElementById('tourist-section');

            function updatePositions() {
                const scrollTop = window.scrollY;

                if (topWrapper && plane1) {
                    const wrapperTop = topWrapper.offsetTop;
                    const wrapperHeight = topWrapper.offsetHeight - 200;

                    if (scrollTop >= wrapperTop && scrollTop <= (wrapperTop + wrapperHeight)) {
                        let progress = (scrollTop - wrapperTop) / wrapperHeight;
                        let newTop = progress * (wrapperHeight - 30);
                        plane1.style.top = `${newTop}px`;
                    }
                }

                if (touristSection && plane2) {
                    const sectionTop = touristSection.offsetTop;
                    const sectionHeight = touristSection.offsetHeight;

                    if (scrollTop + (window.innerHeight / 2) >= sectionTop) {
                        let progress = (scrollTop + (window.innerHeight / 2) - sectionTop) / sectionHeight;
                        progress = Math.min(Math.max(progress, 0), 1);
                        let newTop = progress * (sectionHeight - 40);
                        plane2.style.top = `${newTop}px`;
                    }
                }
            }

            window.addEventListener('scroll', updatePositions);
            updatePositions();
        });
    </script>
@endsection