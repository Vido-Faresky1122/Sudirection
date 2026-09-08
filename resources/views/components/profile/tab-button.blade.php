@props(['active' => false, 'tab' => 'favorites', 'type' => 'accommodations'])

<a href="{{ route('profile.show', ['tab' => $tab, 'type' => $type]) }}" class="w-full py-3.5 rounded-full border text-white font-normal text-sm text-center transition-all shadow-md block
          {{ $active
    ? 'bg-white/30 border-white/40 shadow-lg'
    : 'bg-white/10 backdrop-blur-md border-white/20 hover:bg-white/20' }}">
    {{ $slot }}
</a>