@extends('layouts.app')

@section('content')
<div class="w-full bg-[#ecf9ff] text-slate-800 font-sans">

  <section class="relative w-full min-h-137.5 md:min-h-162.5 bg-cover bg-center flex items-center overflow-hidden"
           style="background-image: url('{{ asset('assets/images/esb-ny-amrik.png') }}');">
    
    <div class="absolute inset-0 bg-linear-to-r from-slate-900/80 via-slate-900/40 to-transparent"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-8 w-full py-20 flex justify-between items-center">
      <div class="max-w-2xl text-white space-y-6">
        
        <div class="inline-flex items-center space-x-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-xs font-semibold uppercase tracking-wider">
          <svg class="w-3.5 h-3.5 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
          </svg>
          <span>Places</span>
        </div>

        <h1 class="text-4xl md:text-6xl font-black tracking-tight leading-tight">
          Discover <span class="text-[#00c0ff]">Your Next</span> Adventure
        </h1>

        <p class="text-sm md:text-base text-white/80 max-w-lg leading-relaxed">
          Explore iconic landmarks, breathtaking natural wonders, and unforgettable attractions from around the world.
        </p>

        <div class="pt-2">
          <div class="inline-flex items-center space-x-3 px-5 py-2.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-xs font-semibold text-white cursor-pointer btn-shimmer">  
          <span>Search</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
          </div>
        </div>

      </div>

      <div class="hidden lg:block relative z-10 select-none">
        <span class="text-7xl font-black tracking-widest text-transparent uppercase opacity-30 [text-stroke:2px_white] [writing-mode:vertical-lr]">
          SUDIRECTION
        </span>
      </div>
    </div>

    <div class="absolute bottom-0 inset-x-0 h-40 bg-linear-to-t from-[#ecf9ff] via-[#ecf9ff]/70 to-transparent"></div>
  </section>

  <section class="max-w-7xl mx-auto px-8 py-10 relative z-10">
    <div class="mb-10 space-y-1">
      <h2 class="text-3xl font-extrabold text-[#00c0ff] tracking-tight">
        Find your perfect place
      </h2>
      <p class="text-xs text-slate-500 font-medium">
        Ratings and reviews are based on Google Maps
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      
      <a href="#" class="group relative h-64 rounded-2xl overflow-hidden shadow-lg bg-cover bg-center transition-all duration-300 hover:-translate-y-1 block">
        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
             style="background-image: url('{{ asset('assets/images/tokyo-tower.png') }}');"></div>
        <div class="absolute inset-0 bg-linear-to-t from-[#0088cc]/90 via-black/20 to-transparent"></div>
        
        <button type="button" class="absolute top-4 right-4 text-white/80 hover:text-white transition-colors z-10" onclick="event.stopPropagation();">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
        </button>

        <div class="absolute bottom-4 inset-x-5 text-white flex justify-between items-end">
          <div class="space-y-1">
            <span class="text-[11px] uppercase tracking-wider font-semibold opacity-90 flex items-center gap-1">
              <svg class="w-3 h-3 text-cyan-300" fill="currentColor" viewBox="0 0 20 20"><path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9z"/></svg>
              Japan
            </span>
            <h3 class="text-2xl font-bold uppercase tracking-tight">Tokyo</h3>
            <p class="text-xs opacity-80 max-w-xs line-clamp-1">Experience tradition and the future</p>
            <div class="flex items-center space-x-1 text-xs pt-1">
              <span class="text-yellow-400">★</span>
              <span class="font-bold">4.8</span>
            </div>
          </div>

          <div class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-white group-hover:text-cyan-600 transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </div>
        </div>
      </a>

      <a href="#" class="group relative h-64 rounded-2xl overflow-hidden shadow-lg bg-cover bg-center transition-all duration-300 hover:-translate-y-1 block">
        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
             style="background-image: url('{{ asset('assets/images/santorini.png') }}');"></div>
        <div class="absolute inset-0 bg-linear-to-t from-[#0088cc]/90 via-black/20 to-transparent"></div>
        
        <button type="button" class="absolute top-4 right-4 text-white/80 hover:text-white transition-colors z-10" onclick="event.stopPropagation();">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
        </button>

        <div class="absolute bottom-4 inset-x-5 text-white flex justify-between items-end">
          <div class="space-y-1">
            <span class="text-[11px] uppercase tracking-wider font-semibold opacity-90 flex items-center gap-1">
              <svg class="w-3 h-3 text-cyan-300" fill="currentColor" viewBox="0 0 20 20"><path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9z"/></svg>
              Greece
            </span>
            <h3 class="text-2xl font-bold uppercase tracking-tight">SANTORINI</h3>
            <p class="text-xs opacity-80 max-w-xs line-clamp-1">Enjoy spectacular view of the Aegean Sea</p>
            <div class="flex items-center space-x-1 text-xs pt-1">
              <span class="text-yellow-400">★</span>
              <span class="font-bold">4.7</span>
            </div>
          </div>

          <div class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-white group-hover:text-cyan-600 transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </div>
        </div>
      </a>

      <a href="#" class="group relative h-64 rounded-2xl overflow-hidden shadow-lg bg-cover bg-center transition-all duration-300 hover:-translate-y-1 block">
        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
             style="background-image: url('{{ asset('assets/images/seoul.png') }}');"></div>
        <div class="absolute inset-0 bg-linear-to-t from-[#0088cc]/90 via-black/20 to-transparent"></div>
        
        <button type="button" class="absolute top-4 right-4 text-white/80 hover:text-white transition-colors z-10" onclick="event.stopPropagation();">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
        </button>

        <div class="absolute bottom-4 inset-x-5 text-white flex justify-between items-end">
          <div class="space-y-1">
            <span class="text-[11px] uppercase tracking-wider font-semibold opacity-90 flex items-center gap-1">
              <svg class="w-3 h-3 text-cyan-300" fill="currentColor" viewBox="0 0 20 20"><path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9z"/></svg>
              South Korea
            </span>
            <h3 class="text-2xl font-bold uppercase tracking-tight">Seoul</h3>
            <p class="text-xs opacity-80 max-w-xs line-clamp-1">Experience tradition and the future</p>
            <div class="flex items-center space-x-1 text-xs pt-1">
              <span class="text-yellow-400">★</span>
              <span class="font-bold">4.6</span>
            </div>
          </div>

          <div class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-white group-hover:text-cyan-600 transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </div>
        </div>
      </a>

      <a href="#" class="group relative h-64 rounded-2xl overflow-hidden shadow-lg bg-cover bg-center transition-all duration-300 hover:-translate-y-1 block">
        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
             style="background-image: url('{{ asset('assets/images/bern.png') }}');"></div>
        <div class="absolute inset-0 bg-linear-to-t from-[#0088cc]/90 via-black/20 to-transparent"></div>
        
        <button type="button" class="absolute top-4 right-4 text-white/80 hover:text-white transition-colors z-10" onclick="event.stopPropagation();">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
        </button>

        <div class="absolute bottom-4 inset-x-5 text-white flex justify-between items-end">
          <div class="space-y-1">
            <span class="text-[11px] uppercase tracking-wider font-semibold opacity-90 flex items-center gap-1">
              <svg class="w-3 h-3 text-cyan-300" fill="currentColor" viewBox="0 0 20 20"><path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9z"/></svg>
              Switzerland
            </span>
            <h3 class="text-2xl font-bold uppercase tracking-tight">Bern</h3>
            <p class="text-xs opacity-80 max-w-xs line-clamp-1">Relax among breathtaking mountains</p>
            <div class="flex items-center space-x-1 text-xs pt-1">
              <span class="text-yellow-400">★</span>
              <span class="font-bold">4.5</span>
            </div>
          </div>

          <div class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-white group-hover:text-cyan-600 transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </div>
        </div>
      </a>

    </div>

    <div class="mt-10 flex justify-center">
      <button type="button" class="btn-shimmer px-8 py-3 rounded-full bg-[#39d0ff] text-white font-bold text-xs uppercase tracking-wider">
        Discover more places
      </button>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-8 pb-10 relative z-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <a href="#" class="relative h-72 rounded-2xl overflow-hidden shadow-md bg-linear-to-br from-[#0f172a] to-[#1e293b] text-white flex flex-col justify-between p-5 border border-slate-700/50 hover:border-cyan-500/50 hover:scale-[1.02] transition-all duration-300">
        <button type="button" class="self-end text-slate-400 hover:text-white transition-colors" onclick="event.stopPropagation();">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
        </button>

        <div class="space-y-1.5">
          <span class="text-[10px] uppercase font-bold tracking-wider text-cyan-400 flex items-center gap-1">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9z"/></svg>
            Paris, France
          </span>
          <h4 class="text-lg font-extrabold">Eiffel Tower</h4>
          <div class="flex items-center space-x-1 text-xs">
            <span class="text-yellow-400">★</span>
            <span class="font-bold">4.7</span>
            <span class="text-slate-400 text-[10px]">(12.4k)</span>
          </div>
          <p class="text-xs text-slate-300 line-clamp-2 pt-1 leading-relaxed">
            An iconic symbol of romance and one of the world's most famous landmarks.
          </p>
        </div>
      </a>

      <a href="#" class="relative h-72 rounded-2xl overflow-hidden shadow-md bg-linear-to-br from-[#0f172a] to-[#1e293b] text-white flex flex-col justify-between p-5 border border-slate-700/50 hover:border-cyan-500/50 hover:scale-[1.02] transition-all duration-300">
        <button type="button" class="self-end text-slate-400 hover:text-white transition-colors" onclick="event.stopPropagation();">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
        </button>

        <div class="space-y-1.5">
          <span class="text-[10px] uppercase font-bold tracking-wider text-cyan-400 flex items-center gap-1">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9z"/></svg>
            New York, USA
          </span>
          <h4 class="text-lg font-extrabold">Statue of Liberty</h4>
          <div class="flex items-center space-x-1 text-xs">
            <span class="text-yellow-400">★</span>
            <span class="font-bold">4.7</span>
            <span class="text-slate-400 text-[10px]">(9.8k)</span>
          </div>
          <p class="text-xs text-slate-300 line-clamp-2 pt-1 leading-relaxed">
            A timeless symbol of freedom standing proudly in New York Harbor.
          </p>
        </div>
      </a>

      <a href="#" class="relative h-72 rounded-2xl overflow-hidden shadow-md bg-linear-to-br from-[#0f172a] to-[#1e293b] text-white flex flex-col justify-between p-5 border border-slate-700/50 hover:border-cyan-500/50 hover:scale-[1.02] transition-all duration-300">
        <button type="button" class="self-end text-slate-400 hover:text-white transition-colors" onclick="event.stopPropagation();">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
        </button>

        <div class="space-y-1.5">
          <span class="text-[10px] uppercase font-bold tracking-wider text-cyan-400 flex items-center gap-1">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9z"/></svg>
            Bali, Indonesia
          </span>
          <h4 class="text-lg font-extrabold">Tanah Lot</h4>
          <div class="flex items-center space-x-1 text-xs">
            <span class="text-yellow-400">★</span>
            <span class="font-bold">4.6</span>
            <span class="text-slate-400 text-[10px]">(11.5k)</span>
          </div>
          <p class="text-xs text-slate-300 line-clamp-2 pt-1 leading-relaxed">
            A stunning seaside temple surrounded by the beauty of the Indian Ocean.
          </p>
        </div>
      </a>

      <a href="#" class="relative h-72 rounded-2xl overflow-hidden shadow-md bg-linear-to-br from-[#0f172a] to-[#1e293b] text-white flex flex-col justify-between p-5 border border-slate-700/50 hover:border-cyan-500/50 hover:scale-[1.02] transition-all duration-300">
        <button type="button" class="self-end text-slate-400 hover:text-white transition-colors" onclick="event.stopPropagation();">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
        </button>

        <div class="space-y-1.5">
          <span class="text-[10px] uppercase font-bold tracking-wider text-cyan-400 flex items-center gap-1">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9z"/></svg>
            East Java, Indonesia
          </span>
          <h4 class="text-lg font-extrabold">Mount Bromo</h4>
          <div class="flex items-center space-x-1 text-xs">
            <span class="text-yellow-400">★</span>
            <span class="font-bold">4.9</span>
            <span class="text-slate-400 text-[10px]">(7.5k)</span>
          </div>
          <p class="text-xs text-slate-300 line-clamp-2 pt-1 leading-relaxed">
            Experience breathtaking sunrise views above a dramatic volcanic landscape.
          </p>
        </div>
      </a>

    </div>

    <div class="mt-12 flex justify-center">
      <button type="button" class="btn-shimmer px-8 py-3 rounded-full bg-[#39d0ff] text-white font-bold text-xs uppercase tracking-wider">
        View all stays
      </button>
    </div>
  </section>

  <section class="relative w-full h-87.5 md:h-112.5 bg-cover bg-center overflow-hidden flex items-end"
           style="background-image: url('{{ asset('assets/images/totr-ny-amrik.png') }}');">
    <div class="absolute top-0 inset-x-0 h-40 bg-linear-to-b from-[#ecf9ff] via-[#ecf9ff]/70 to-transparent"></div>
  </section>

</div>
@endsection