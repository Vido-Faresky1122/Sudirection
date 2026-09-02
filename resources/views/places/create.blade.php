@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-[#070b19] text-white p-8 md:p-12 font-sans">

        <div class="max-w-7xl mx-auto space-y-12">

            <div
                class="relative w-full rounded-2xl bg-[#393e4d] overflow-hidden min-h-90 flex flex-col items-center justify-center border border-white/5 shadow-2xl">

                <div class="flex flex-col items-center justify-center space-y-4 text-center z-10 p-6">
                    <div class="w-14 h-14 rounded-full bg-white/10 flex items-center justify-center backdrop-blur-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>

                    <button type="button"
                        class="btn-shimmer px-6 py-2.5 bg-white text-slate-900 rounded-full font-bold text-xs hover:bg-slate-200 transition-all shadow-md">
                        Upload Main Image
                    </button>

                    <span class="text-[11px] text-gray-400 tracking-wide">
                        Recommended size: 1920x1080px
                    </span>
                </div>

                <div class="absolute bottom-6 inset-x-6 flex items-center justify-between z-10">
                    <button type="button"
                        class="btn-shimmer w-14 h-14 rounded-xl bg-white/10 border border-white/10 flex items-center justify-center text-white hover:bg-white/20 transition-all backdrop-blur-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>

                    <button type="button"
                        class="btn-shimmer px-6 py-2 bg-white/20 border border-white/10 rounded-full text-xs font-semibold text-white hover:bg-white/30 transition-all backdrop-blur-md">
                        Change
                    </button>
                </div>

            </div>

            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight mb-8">
                    Create New Place
                </h1>

                <form class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12">
                    @csrf

                    <div class="space-y-6">

                        <div class="space-y-2">
                            <label class="block text-[11px] font-bold tracking-wider uppercase text-gray-400">
                                Place Name
                            </label>
                            <input type="text" placeholder="e.g. Sunset Villa Santorini"
                                class="w-full px-4 py-3.5 bg-[#121829] border border-white/5 rounded-xl text-sm placeholder-gray-500 focus:outline-none focus:border-cyan-500/50 focus:ring-1 focus:ring-cyan-500/50 transition-all" />
                        </div>

                        <div class="space-y-2">
                            <label class="block text-[11px] font-bold tracking-wider uppercase text-gray-400">
                                Location
                            </label>
                            <div class="relative">
                                <input type="text" placeholder="Search for destination..."
                                    class="w-full pl-4 pr-10 py-3.5 bg-[#121829] border border-white/5 rounded-xl text-sm placeholder-gray-500 focus:outline-none focus:border-cyan-500/50 focus:ring-1 focus:ring-cyan-500/50 transition-all" />
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 text-gray-400 absolute right-4 top-1/2 -translate-y-1/2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                        </div>

                    </div>

                    <div class="space-y-6 flex flex-col justify-between">

                        <div class="space-y-2 flex-1 flex flex-col">
                            <label class="block text-[11px] font-bold tracking-wider uppercase text-gray-400">
                                Description
                            </label>
                            <textarea rows="9" placeholder="Tell travelers about your unique place..."
                                class="w-full p-4 bg-[#121829] border border-white/5 rounded-xl text-sm placeholder-gray-500 focus:outline-none focus:border-cyan-500/50 focus:ring-1 focus:ring-cyan-500/50 transition-all resize-none flex-1"></textarea>
                        </div>

                    </div>
                    <div class="lg:col-span-2 flex justify-end">
                        <button type="submit"
                            class="btn-shimmer px-15 py-4 bg-cyan-500 text-md text-white rounded-full font-bold btn-shimmer">
                            Create Place
                        </button>
                    </div>
                </form>
            </div>

        </div>

    </div>
@endsection