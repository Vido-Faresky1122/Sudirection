@props(['active' => false, 'tab' => 'favorites', 'type' => 'accommodations'])

<a href="{{ route('profile.show', ['tab' => $tab, 'type' => $type]) }}" class="flex-1 py-3 text-center text-sm font-medium transition-all
          {{ $active
    ? 'text-white border-b-2 border-white bg-white/10'
    : 'text-white/60 hover:text-white' }}">
    {{ $slot }}
</a>