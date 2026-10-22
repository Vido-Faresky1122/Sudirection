<nav class="max-w-7xl mx-auto px-8 h-16 flex items-center justify-between font-semibold text-sm tracking-wider">
    <div class="flex items-center space-x-8">
        <a href="{{ route('landing') }}" class="link-shimmer text-white drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">HOME</a>
        <a href="{{ route('about-us') }}" class="link-shimmer text-white drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">ABOUT US</a>
    </div>

    <div class="flex items-center space-x-8">
        <a href="{{ route('chat.index') }}" class="link-shimmer text-white drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">DIRECTIONAI</a>
        @if (auth()->check())
            @if (auth()->user()->role === 'admin')
                <a href="{{ route('profile.admin') }}" class="link-shimmer text-white drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">PROFILE</a>
            @elseif (auth()->user()->role === 'user')
                <a href="{{ route('profile.users.index', ['id' => auth()->user()->id]) }}" class="link-shimmer text-white drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">PROFILE</a>
            @endif
        @else
            <a href="{{ route('login.view') }}" class="link-shimmer text-white drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">PROFILE</a>
        @endif
    </div>
</nav>