@extends('layouts.app')

@section('content')
{{-- ============ HERO + MISSION + OFFER SECTION (satu background menyatu) ============ --}}
<div
    class="relative bg-cover bg-center bg-fixed"
    style="background-image: url('{{ asset('assets/images/about-us-bg1.png') }}');"
>
    <div class="absolute inset-0 bg-linear-to-b from-black/50 via-black/50 to-white"></div>
    <div class="glass-photo absolute inset-0"></div>
 
    <div class="relative z-10 px-6 md:px-10 pt-16 pb-32">
 
        {{-- Hero Title --}}
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h1 class="text-5xl md:text-6xl font-black tracking-wide mb-6">
                <span class="text-white">SUDI</span><span class="text-sky-400">RECTION</span>
            </h1>
            <p class="text-white/80 text-sm md:text-base leading-relaxed">
                Welcome to SUDIRECTION, your ultimate compass for effortless travel and unforgettable
                journeys. Designed for explorers, vacationers, and weekend wanderers, SUDIRECTION brings
                together everything you need to plan your next adventure in one seamless platform.
            </p>
        </div>
 
        {{-- Our Mission --}}
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-12 mb-24">
            <div class="flex-1 max-w-lg">
                <h2 class="text-white text-3xl font-bold mb-5">Our Mission</h2>
                <p class="text-white/80 text-sm leading-relaxed mb-6">
                    At SUDIRECTION, we believe that travel is more than just visiting a placeâ€”it's about
                    the connection you make with the world. Our platform is designed to provide travelers
                    with the most reliable information, from hidden natural wonders to the most comfortable
                    stays.
                </p>
                <div class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-full bg-sky-400 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </span>
                    <p class="text-sky-300 text-sm font-medium">Verified tourist attractions across 50+ countries.</p>
                </div>
            </div>
 
            <div class="flex-1 flex justify-center">
                <img
                    src="{{ asset('assets/images/Container.png') }}"
                    alt="Travel planning"
                    class="rounded-3xl shadow-2xl w-full max-w-md object-cover"
                >
            </div>
        </div>
 
        {{-- What We Offer --}}
        <div class="max-w-4xl mx-auto glass-ios rounded-4xl p-10 md:p-14">
 
            <div class="text-center mb-12">
                <h2 class="text-white text-3xl font-bold mb-3">What We Offer</h2>
                <span class="inline-block w-14 h-1 bg-sky-400 rounded-full"></span>
            </div>
 
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
            
                <div>
                    <div class="w-10 h-10 mx-auto mb-4 text-sky-400">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C7.6 2 4 5.6 4 10c0 5.4 7 11.5 7.3 11.7.2.2.5.3.7.3s.5-.1.7-.3C13 21.5 20 15.4 20 10c0-4.4-3.6-8-8-8zm0 11c-1.7 0-3-1.3-3-3s1.3-3 3-3 3 1.3 3 3-1.3 3-3 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-3">Detailed Destination Guides</h3>
                    <p class="text-white/70 text-sm leading-relaxed">
                        Curated information on history, culture, and must-visit spots in every city.
                    </p>
                </div>
 
                <div>
                    <div class="w-10 h-10 mx-auto mb-4 text-sky-400">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4 22V4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v18h4v-2h-2V9a1 1 0 0 0-1-1h-2V4a3 3 0 0 0-3-3H5a3 3 0 0 0-3 3v18h2zm3-15h2v2H7V7zm4 0h2v2h-2V7zM7 11h2v2H7v-2zm4 0h2v2h-2v-2zM7 15h2v2H7v-2zm4 0h2v2h-2v-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-3">Handpicked Stays</h3>
                    <p class="text-white/70 text-sm leading-relaxed">
                        Over 10 million accommodations ranging from luxury resorts to local homestays.
                    </p>
                </div>
 
                <div>
                    <div class="w-10 h-10 mx-auto mb-4 text-sky-400">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 12l-9-9-9 9 9 9 9-9zM12 5.4L18.6 12 12 18.6 5.4 12 12 5.4z"/>
                            <path d="M12 8l3 4-3 4-3-4z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold text-lg mb-3">Community Ratings</h3>
                    <p class="text-white/70 text-sm leading-relaxed">
                        Real reviews and ratings from travelers to ensure you make the best choice.
                    </p>
                </div>
 
            </div>
        </div>
    </div>
</div>
{{-- ============ MEET OUR TEAM SECTION ============ --}}
<div class="bg-sky-50 py-20 px-6">
    <div class="max-w-5xl mx-auto">
 
        <div class="flex items-center gap-4 mb-14">
            <span class="w-1.5 h-8 bg-sky-500 rounded-full"></span>
            <h2 class="text-3xl font-bold text-gray-700">Meet Our Team</h2>
        </div>
 
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-10">
 
            @php
                $team = $team ?? [
                    ['name' => 'AMOS MICHAEL LIM', 'role' => 'UI/UX Designer', 'photo' => 'team-amos.png'],
                    ['name' => 'Vido Faresky', 'role' => 'Fullstack Developer', 'photo' => 'team-vido.png'],
                    ['name' => 'Davin Aurelio Yu', 'role' => 'Front-End Developer', 'photo' => 'team-davin.png'],
                ];
            @endphp
 
            @foreach ($team as $member)
                <div class="text-center">
                    <div class="rounded-3xl overflow-hidden bg-linear-to-b from-sky-100 to-sky-400 mb-4 aspect-3/4 shadow-lg">
                        <img
                            src="{{ asset('assets/images/' . $member['photo']) }}"
                            alt="{{ $member['name'] }}"
                            class="w-full h-full object-cover"
                        >
                    </div>
                    <p class="font-bold text-gray-800">{{ $member['name'] }}</p>
                    <p class="text-sky-500 text-sm">{{ $member['role'] }}</p>
                </div>
            @endforeach
 
        </div>
    </div>
</div>
 
{{-- ============ QUOTE / JOIN THE JOURNEY SECTION ============ --}}
<div
    class="relative bg-cover bg-center py-24 px-6 text-center"
    style="background-image: url('{{ asset('assets/images/Section.png') }}');"
>
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="glass-photo absolute inset-0"></div>
 
    <div class="relative z-10 max-w-2xl mx-auto">
        <svg class="w-8 h-8 mx-auto mb-4 text-sky-500" fill="currentColor" viewBox="0 0 24 24">
            <path d="M2 21l21-9L2 3v7l15 2-15 2z"/>
        </svg>
        <p class="text-white text-xl md:text-2xl italic font-medium mb-8 drop-shadow">
            "The world is a book, and those who do not travel read only one page."
        </p>
        <a
            href="/join"
            class="inline-block px-8 py-3 rounded-full bg-linear-to-r from-sky-400/85 to-sky-600/85 backdrop-blur-md border border-white/20 text-white font-semibold shadow-lg hover:opacity-90 transition"
        >
            Join the Journey
        </a>
    </div>
</div>
 

@endsection