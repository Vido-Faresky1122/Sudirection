@extends('layouts.app')

@section('content')
    <div class="relative min-h-screen w-full flex items-center justify-center p-8 bg-cover bg-center overflow-hidden font-sans text-white"
        style="background-image: url('{{ asset('assets/images/admin-bg.png') }}');">

        <div class="absolute inset-0 bg-slate-900/30 backdrop-blur-md"></div>

        <div class="relative z-10 w-full max-w-5xl flex flex-col md:flex-row items-stretch justify-center gap-12">

            <div
                class="w-full max-w-md bg-white/10 backdrop-blur-2xl border border-white/20 rounded-[40px] px-8 md:px-10 py-12 shadow-2xl flex flex-col justify-between">

                <div class="flex items-center gap-5">
                    <div
                        class="w-16 h-16 rounded-full bg-white/20 border border-white/30 flex items-center justify-center shrink-0">
                        <svg class="w-10 h-10 text-slate-200" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    </div>

                    <div>
                        <h2 class="text-xl font-medium tracking-wide text-white">{{ $admin->name ?? 'Sudianto Faresky' }}
                        </h2>
                        <p class="text-xs text-slate-300 font-light">{{ $admin->role ?? 'Admin' }}</p>
                    </div>
                </div>

                <div class="space-y-6 text-sm font-light text-slate-200 my-8">
                    <div class="flex items-center">
                        <span class="w-28 shrink-0">Username</span>
                        <span class="w-6 text-center">:</span>
                        <span class="font-normal text-white">{{ $admin->username ?? 'Amos Mikhael' }}</span>
                    </div>

                    <div class="flex items-center">
                        <span class="w-28 shrink-0">Email</span>
                        <span class="w-6 text-center">:</span>
                        <span class="font-normal text-white">{{ $admin->email ?? 'Amosganteng@gmail.com' }}</span>
                    </div>

                    <div class="flex items-center">
                        <span class="w-28 shrink-0">Password</span>
                        <span class="w-6 text-center">:</span>
                        <span class="font-normal text-white tracking-widest">••••••••••</span>
                    </div>
                </div>

                <div>
                    <a href="/admin/profile/customize"
                        class="block w-full py-3.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white font-normal text-sm hover:bg-white/20 transition-all shadow-md text-center">
                        Customize
                    </a>
                </div>

            </div>

            <div
                class="w-full max-w-md bg-white/10 backdrop-blur-2xl border border-white/20 rounded-[40px] px-8 md:px-10 py-12 shadow-2xl flex flex-col justify-between">

                <div>
                    <div class="text-center pb-6 mb-6 border-b border-white/10">
                        <h3 class="text-lg font-medium tracking-wide text-white">Other Users</h3>
                    </div>

                    <div class="space-y-6">
                        @forelse ($otherUsers ?? [
                                ['name' => 'Vido Faresky', 'role' => 'Developer'],
                                ['name' => 'Davin Aurelio Yu', 'role' => 'President'],
                                ['name' => 'Amos Mikhael', 'role' => 'Kacung'],
                            ] as $user)
                            <div class="flex items-center gap-5">
                                <div
                                    class="w-12 h-12 rounded-full bg-white/20 border border-white/30 flex items-center justify-center shrink-0">
                                    <svg class="w-7 h-7 text-slate-200" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-sm font-normal text-white">{{ $user['name'] }}</p>
                                    <p class="text-xs text-slate-300 font-light">{{ $user['role'] }}</p>
                                </div>
                            </div>
                        @empty
                            <p class="text-xs text-slate-300 font-light text-center py-4">Belum ada user lain.</p>
                        @endforelse
                    </div>
                </div>

                <div class="pt-8">
                    <a href="/admin/users"
                        class="block w-full py-3.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white font-normal text-sm hover:bg-white/20 transition-all shadow-md text-center">
                        See All
                    </a>
                </div>

            </div>

        </div>

    </div>
@endsection