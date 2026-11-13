@extends('layouts.app')

@section('hide_footer', true)

@section('content')
    <div class="relative min-h-screen w-full flex items-center justify-center p-8 bg-cover bg-center overflow-hidden font-sans text-white"
        style="background-image: url('{{ asset('assets/images/profile-bg.png') }}');">

        <div class="absolute inset-0 bg-slate-900/30 backdrop-blur-md"></div>

        <form action="#" method="POST" enctype="multipart/form-data"
            class="relative z-10 w-full max-w-4xl glass-ios rounded-[40px] px-8 md:px-16 py-12 md:py-16 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            @csrf
            @method('PATCH')

            {{-- Left: avatar --}}
            <div class="flex flex-col items-center">
                <div class="w-36 h-36 md:w-40 md:h-40 rounded-full bg-white overflow-hidden flex items-center justify-center shrink-0">
                    @if (!empty(auth()->user()->avatar))
                        <img id="avatar-preview" src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="Avatar"
                            class="w-full h-full object-cover">
                        <svg id="avatar-default" class="hidden w-full h-full text-slate-400 mt-6" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    @else
                        <img id="avatar-preview" src="" alt="Avatar" class="hidden w-full h-full object-cover">
                        <svg id="avatar-default" class="w-full h-full text-slate-400 mt-6" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    @endif
                </div>

                <input type="file" id="avatar" name="avatar" accept="image/*" class="hidden">
                <label for="avatar"
                    class="mt-10 w-44 py-2.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white font-normal text-sm btn-shimmer shadow-md text-center cursor-pointer">
                    Change
                </label>
                @error('avatar')
                    <p class="mt-2 text-xs text-red-200">{{ $message }}</p>
                @enderror

                <div class="mt-16 text-center">
                    <h2 class="text-base font-normal text-white">{{ auth()->user()->name }}</h2>
                    <p class="text-base font-light text-white/60">{{ auth()->user()->role ?? 'Common user' }}</p>
                </div>
            </div>

            {{-- Right: fields --}}
            <div class="flex flex-col justify-center">
                <div class="space-y-4 text-sm font-light text-slate-200">
                    <div>
                        <label for="username" class="block mb-1">Username</label>
                        <input type="text" id="username" name="username"
                            value="{{ old('username', auth()->user()->username ?? auth()->user()->name) }}"
                            class="w-full rounded-full bg-white/10 border border-white/10 px-4 py-2 text-sm text-white shadow-inner outline-none focus:ring-2 focus:ring-white/40">
                        @error('username')
                            <p class="mt-1 text-xs text-red-200">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block mb-1">Email</label>
                        <input type="email" id="email" name="email"
                            value="{{ old('email', auth()->user()->email) }}"
                            class="w-full rounded-full bg-white/10 border border-white/10 px-4 py-2 text-sm text-white shadow-inner outline-none focus:ring-2 focus:ring-white/40">
                        @error('email')
                            <p class="mt-1 text-xs text-red-200">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block mb-1">Password</label>
                        <input type="password" id="password" name="password" placeholder="**********"
                            autocomplete="new-password"
                            class="w-full rounded-full bg-white/10 border border-white/10 px-4 py-2 text-sm text-white placeholder-white/80 shadow-inner outline-none focus:ring-2 focus:ring-white/40">
                        @error('password')
                            <p class="mt-1 text-xs text-red-200">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-10 px-8 space-y-5">
                    <button type="submit"
                        class="w-full py-3.5 rounded-full bg-black/30 backdrop-blur-md border border-white/30 text-white font-normal text-sm btn-shimmer shadow-md text-center">
                        Save
                    </button>

                    <a href="{{ route('profile.users.index', ['id' => auth()->id()]) }}"
                        class="block w-full py-3.5 rounded-full bg-white/30 backdrop-blur-md border border-white/40 text-slate-600 font-normal text-sm text-center shadow-md transition-all hover:bg-white/40">
                        Cancel
                    </a>
                </div>

                @if (session('status'))
                    <p class="mt-4 text-center text-sm text-green-200">{{ session('status') }}</p>
                @endif
            </div>
        </form>
    </div>

    <script>
        document.getElementById('avatar')?.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (!file) return;
            const preview = document.getElementById('avatar-preview');
            const fallback = document.getElementById('avatar-default');
            preview.src = URL.createObjectURL(file);
            preview.classList.remove('hidden');
            fallback?.classList.add('hidden');
        });
    </script>
@endsection