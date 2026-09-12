@extends('layouts.app')

@section('hide_footer', true)

@section('content')
    <div class="relative min-h-screen w-full flex items-center justify-center p-8 bg-cover bg-center overflow-hidden font-sans text-white"
        style="background-image: url('{{ asset('assets/images/profile-bg.png') }}');">

        <div class="absolute inset-0 bg-slate-900/30 backdrop-blur-md"></div>

        <div class="relative z-10 w-full max-w-5xl flex flex-col md:flex-row items-center justify-center gap-12">

            <div
                class="w-full max-w-md h-[480px] glass-ios rounded-[40px] px-8 md:px-10 py-12 flex flex-col justify-between shrink-0">

                <div class="flex items-center gap-5">
                    <div
                        class="w-16 h-16 rounded-full bg-white/20 border border-white/30 flex items-center justify-center shrink-0">
                        <svg class="w-10 h-10 text-slate-200" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    </div>

                    <div>
                        <h2 class="text-xl font-medium tracking-wide text-white">
                            {{ auth()->user()->name ?? 'Vido Faresky' }}</h2>
                        <p class="text-xs text-slate-300 font-light">{{ auth()->user()->role ?? 'Common user' }}</p>
                    </div>
                </div>

                <div class="space-y-6 text-sm font-light text-slate-200 my-8">
                    <div class="flex items-center">
                        <span class="w-28 shrink-0">Username</span>
                        <span class="w-6 text-center">:</span>
                        <span class="font-normal text-white">{{ auth()->user()->username ?? 'Vido Faresky' }}</span>
                    </div>

                    <div class="flex items-center">
                        <span class="w-28 shrink-0">Email</span>
                        <span class="w-6 text-center">:</span>
                        <span class="font-normal text-white">{{ auth()->user()->email ?? 'Vidoganteng@gmail.com' }}</span>
                    </div>

                    <div class="flex items-center">
                        <span class="w-28 shrink-0">Password</span>
                        <span class="w-6 text-center">:</span>
                        <span class="font-normal text-white tracking-widest">••••••••••</span>
                    </div>
                </div>

                <div>
                    <button
                        class="w-full py-3.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white font-normal text-sm btn-shimmer shadow-md text-center">
                        Customize
                    </button>
                </div>

            </div>

            <div class="relative w-full max-w-md h-[480px] shrink-0">

                <a href="{{ route('profile.users.index', ['tab' => 'favorites', 'type' => request('type', 'accommodations')]) }}"
                    class="absolute -top-16 left-0 right-0 w-full py-3.5 rounded-full border text-white font-normal text-sm text-center transition-all shadow-md block z-20 {{ request('tab', 'favorites') === 'favorites' ? 'bg-black/40 border-white/40' : 'bg-white/10 backdrop-blur-md border-white/20 btn-shimmer' }}">
                    Favorites
                </a>

                <div
                    class="w-full h-full glass-ios rounded-[40px] px-8 md:px-10 py-12 block overflow-hidden">

                    <div class="flex border-b border-white/20 mb-6">
                        <a href="{{ route('profile.users.index', ['tab' => request('tab', 'favorites'), 'type' => 'accommodations']) }}"
                            class="flex-1 py-3 text-center text-sm font-medium transition-all {{ request('type', 'accommodations') === 'accommodations' ? 'text-white border-b-2 border-white bg-white/10' : 'text-white/60 hover:text-white' }}">
                            Accommodations
                        </a>
                        <a href="{{ route('profile.users.index', ['tab' => request('tab', 'favorites'), 'type' => 'places']) }}"
                            class="flex-1 py-3 text-center text-sm font-medium transition-all {{ request('type') === 'places' ? 'text-white border-b-2 border-white bg-white/10' : 'text-white/60 hover:text-white' }}">
                            Places
                        </a>
                    </div>

                    <div class="space-y-4 h-[320px] overflow-y-auto pr-2">
                        @forelse ($items ?? [] as $item)
                            <x-profile.item-card :image="$item['image']" :title="$item['title']" :location="$item['location']"
                                :rating="$item['rating']" :isFavorite="$item['isFavorite'] ?? false" />
                        @empty
                            <p class="text-center text-white/60 text-sm py-12">No data found.</p>
                        @endforelse
                    </div>

                </div>

                <a href="{{ route('profile.users.index', ['tab' => 'histories', 'type' => request('type', 'accommodations')]) }}"
                    class="absolute -bottom-16 left-0 right-0 w-full py-3.5 rounded-full border text-white font-normal text-sm text-center transition-all shadow-md block z-20 {{ request('tab') === 'histories' ? 'bg-black/40 border-white/40' : 'bg-white/10 backdrop-blur-md border-white/20 btn-shimmer' }}">
                    Histories
                </a>

            </div>

        </div>

    </div>
@endsection