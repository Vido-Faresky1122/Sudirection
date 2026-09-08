@props(['image' => '', 'title' => '', 'location' => '', 'rating' => '5.0', 'isFavorite' => false])

<div
    class="flex items-center justify-between p-3 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 shadow-sm">
    <div class="flex items-center gap-3">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-14 h-12 object-cover rounded-xl">
        <div>
            <h4 class="text-sm font-semibold text-white">{{ $title }}</h4>
            <p class="text-xs text-white/60">{{ $location }}</p>
        </div>
    </div>

    <div class="flex items-center gap-3">
        <div class="flex items-center gap-1 text-xs text-white">
            <span>{{ $rating }}</span>
            <span class="text-yellow-400">★</span>
        </div>
        <button class="text-white/80 hover:text-white">
            <svg class="w-5 h-5" fill="{{ $isFavorite ? 'currentColor' : 'none' }}" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
            </svg>
        </button>
    </div>
</div>