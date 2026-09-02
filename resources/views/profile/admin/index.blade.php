@extends('layouts.app')

@section('content')
<div
    class="relative min-h-screen bg-cover bg-center bg-fixed"
    style="background-image: url('{{ asset('assets/images/admin-bg.png') }}');"
>
    <div class="absolute inset-0 bg-black/30"></div>
 
    <div class="relative z-10 flex flex-col md:flex-row items-stretch justify-center gap-10 px-6 md:px-16 py-20 max-w-6xl mx-auto">
 
        {{-- Card Profile Admin --}}
        <div class="w-full max-w-md flex flex-col bg-white/10 backdrop-blur-2xl border border-white/20 rounded-[32px] p-10 shadow-2xl">
 
            <div class="flex items-center gap-5 mb-8">
                <div class="w-20 h-20 rounded-full bg-white flex items-center justify-center overflow-hidden shrink-0">
                    <svg class="w-12 h-12 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.2c-3.3 0-9.8 1.6-9.8 4.9v2.7h19.6v-2.7c0-3.3-6.5-4.9-9.8-4.9z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-white text-xl font-semibold">{{ $admin->name ?? 'Sudianto Faresky' }}</p>
                    <p class="text-white/60 text-base">{{ $admin->role ?? 'Admin' }}</p>
                </div>
            </div>
 
            <div class="space-y-4 mb-8 flex-1">
                <div class="flex items-center text-sm">
                    <span class="w-28 text-white/80">Username</span>
                    <span class="text-white/60 mr-3">:</span>
                    <span class="text-white">{{ $admin->username ?? 'Amos Mikhael' }}</span>
                </div>
                <div class="flex items-center text-sm">
                    <span class="w-28 text-white/80">Email</span>
                    <span class="text-white/60 mr-3">:</span>
                    <span class="text-white">{{ $admin->email ?? 'Amosganteng@gmail.com' }}</span>
                </div>
                <div class="flex items-center text-sm">
                    <span class="w-28 text-white/80">Password</span>
                    <span class="text-white/60 mr-3">:</span>
                    <span class="text-white">**********</span>
                </div>
            </div>
 
            <a
                href="/admin/profile/customize"
                class="block text-center w-full py-3.5 rounded-full bg-black/40 hover:bg-black/55 text-white font-medium transition"
            >
                Customize
            </a>
        </div>
 
        {{-- Card Other Users --}}
        <div class="w-full max-w-md flex flex-col bg-white/10 backdrop-blur-2xl border border-white/20 rounded-[32px] shadow-2xl overflow-hidden">
 
            <div class="text-center py-6 bg-white/10 border-b border-white/20">
                <p class="text-white text-lg font-semibold">Other Users</p>
            </div>
 
            <div class="p-10 flex flex-col flex-1">
                <div class="space-y-6 flex-1">
                @forelse ($otherUsers ?? [
                    ['name' => 'Vido Faresky', 'role' => 'Developer'],
                    ['name' => 'Davin Aurelio Yu', 'role' => 'President'],
                    ['name' => 'Amos Mikhael', 'role' => 'Kacung'],
                ] as $user)
                    <div class="flex items-center gap-5">
                        <div class="w-16 h-16 rounded-full bg-white flex items-center justify-center overflow-hidden shrink-0">
                            <svg class="w-10 h-10 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.2c-3.3 0-9.8 1.6-9.8 4.9v2.7h19.6v-2.7c0-3.3-6.5-4.9-9.8-4.9z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-medium text-base">{{ $user['name'] }}</p>
                            <p class="text-white/60 text-sm">{{ $user['role'] }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-white/60 text-sm text-center">Belum ada user lain.</p>
                @endforelse
                </div>
 
                <a
                    href="/admin/users"
                    class="block text-center w-full py-3.5 rounded-full bg-black/40 hover:bg-black/55 text-white font-medium transition mt-6"
                >
                    See All
                </a>
            </div>
        </div>
 
    </div>
</div>
    <div class="mx-auto max-w-5xl px-6 py-10">
        <h1 class="text-3xl font-bold text-gray-800">Profile</h1>
        <p class="mt-4 text-gray-600">
            This is the Profile page for Sudirection.
        </p>
    </div>
@endsection