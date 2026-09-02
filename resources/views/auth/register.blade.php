@extends('layouts.app')

@section('content')
    <div
    class="relative min-h-screen bg-cover bg-center bg-fixed"
    style="background-image: url('{{ asset('assets/images/register-mount.png') }}');"
>
    <div class="absolute inset-0 bg-black/10"></div>
 
    <div class="relative z-10 flex flex-col md:flex-row items-center justify-center gap-28 px-6 md:px-16 py-20 max-w-7xl mx-auto">
 
        <div class="max-w-lg text-center md:text-left">
            <h1 class="text-5xl italic font-black text-sky-400 drop-shadow-lg leading-none mb-4">
                First Timer?
            </h1>
            <p class="text-white text-lg leading-relaxed drop-shadow">
                Buat akun dan temukan destinasi menakjubkan,
                pengalaman tak terlupakan, dan petualangan baru
                di seluruh dunia.
            </p>
        </div>
 
        <div class="w-full max-w-sm bg-white/10 backdrop-blur-2xl border border-white/25 rounded-[40px] p-8 shadow-2xl">
            <form method="POST" action="/register" class="space-y-4">
                @csrf
 
                <div>
                    <input
                        type="text"
                        name="name"
                        placeholder="name..."
                        value="{{ old('name') }}"
                        required
                        autofocus
                        class="w-full px-5 py-4 rounded-full bg-white/25 text-white placeholder-white/80 outline-none focus:bg-white/40 transition"
                    >
                    @error('name')
                        <p class="text-red-200 text-xs mt-1 ml-4">{{ $message }}</p>
                    @enderror
                </div>
 
                <div>
                    <input
                        type="email"
                        name="email"
                        placeholder="email..."
                        value="{{ old('email') }}"
                        required
                        class="w-full px-5 py-4 rounded-full bg-white/25 text-white placeholder-white/80 outline-none focus:bg-white/40 transition"
                    >
                    @error('email')
                        <p class="text-red-200 text-xs mt-1 ml-4">{{ $message }}</p>
                    @enderror
                </div>
 
                <div>
                    <input
                        type="password"
                        name="password"
                        placeholder="password...."
                        required
                        class="w-full px-5 py-4 rounded-full bg-white/25 text-white placeholder-white/80 outline-none focus:bg-white/40 transition"
                    >
                    @error('password')
                        <p class="text-red-200 text-xs mt-1 ml-4">{{ $message }}</p>
                    @enderror
                </div>
 
                <div>
                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="confirm password..."
                        required
                        class="w-full px-5 py-4 rounded-full bg-white/25 text-white placeholder-white/80 outline-none focus:bg-white/40 transition"
                    >
                </div>
 
                <button
                    type="submit"
                    class="w-full py-4 rounded-full bg-white/60 hover:bg-white/75 text-gray-800 font-semibold transition"
                >
                    Sign Up
                </button>
            </form>
 
            <p class="text-center text-white text-xs mt-4">
                Already have an account?
                <a href="/login" class="font-bold hover:underline">Log in</a>
            </p>
 
            <div class="text-center text-white text-xl my-5">OR</div>
 
            <form method="GET" action="/auth/google">
                <button
                    type="submit"
                    class="w-full flex items-center justify-center gap-3 py-3.5 rounded-full border-[1.5px] border-white/60 text-white font-bold hover:bg-white/10 transition"
                >
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5">
                    Sign up with google
                </button>
            </form>
        </div>
 
    </div>
</div>
    <div class="mx-auto max-w-5xl px-6 py-10">
        <h1 class="text-3xl font-bold text-gray-800">About Us</h1>
        <p class="mt-4 text-gray-600">
            This is the About Us page for Sudirection.
        </p>
    </div>


@endsection
