@extends('layouts.app')

@section('hide_footer', true)

@section('content')
<style>
    .typing-dot {
        width: 7px;
        height: 7px;
        border-radius: 9999px;
        display: inline-block;
        animation: typingBounce 1.2s ease-in-out infinite;
    }

    .typing-dot:nth-child(2) {
        animation-delay: .15s;
    }

    .typing-dot:nth-child(3) {
        animation-delay: .3s;
    }

    @keyframes typingBounce {
        0%,
        60%,
        100% {
            transform: translateY(0);
            opacity: .35;
        }

        30% {
            transform: translateY(-5px);
            opacity: 1;
        }
    }
</style>

{{-- Chat layout: mengisi minimal tinggi area (di bawah header layout), memanjang mengikuti konten --}}
<div class="min-h-[calc(100dvh-4rem)] max-w-5xl w-full mx-auto px-4 md:px-8 pt-6 md:pt-8 pb-28 flex flex-col gap-6">

    {{-- Banner Top --}}
    <section class="relative bg-slate-900/60 border border-white/10 rounded-2xl p-6 md:p-8 text-center shadow-lg overflow-hidden">
        <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-80 h-44 bg-sky-500/20 blur-3xl rounded-full pointer-events-none"></div>
        <div class="relative">
            <div class="mx-auto mb-3 w-11 h-11 rounded-2xl bg-sky-500/15 border border-sky-500/30 flex items-center justify-center shadow-lg">
                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z"/>
                </svg>
            </div>
            <h1 class="text-2xl md:text-3xl font-bold tracking-wide text-white mb-1">SUDIRECTION AI</h1>
            <p class="text-slate-400 text-xs md:text-sm mb-4">How can I help you today?</p>

            {{-- Suggestion Chips --}}
            <div class="flex flex-wrap justify-center gap-2 text-xs">
                <button type="button" onclick="sendQuickPrompt('Find nearby restaurants')"
                    class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 text-slate-300 hover:text-white px-3 py-1.5 rounded-full transition">
                    Find nearby restaurants
                </button>
                <button type="button" onclick="sendQuickPrompt('Find a cafe for studying')"
                    class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 text-slate-300 hover:text-white px-3 py-1.5 rounded-full transition">
                    Find a cafe for studying
                </button>
                <button type="button" onclick="sendQuickPrompt('Find the nearest hospital')"
                    class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 text-slate-300 hover:text-white px-3 py-1.5 rounded-full transition">
                    Find the nearest hospital
                </button>
                <button type="button" onclick="sendQuickPrompt('How do I get to school?')"
                    class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 text-slate-300 hover:text-white px-3 py-1.5 rounded-full transition">
                    How do I get to school?
                </button>
            </div>
        </div>
    </section>

    {{-- Chat History (memanjang mengikuti konten, halaman yang di-scroll) --}}
    <div id="chat-box" class="flex-1 flex flex-col gap-6 bg-slate-900/40 border border-white/10 rounded-2xl p-4 md:p-6">

        {{-- Empty State --}}
        <div id="empty-state" class="m-auto text-center py-10 px-4">
            <svg class="w-9 h-9 mx-auto text-sky-500/50" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/>
            </svg>
            <h3 class="mt-3 text-sm md:text-base font-semibold text-slate-200">Siap membantu Anda</h3>
            <p class="mt-1 text-xs md:text-sm text-slate-500">Pilih pertanyaan di atas, atau ketik pertanyaan Anda di bawah.</p>
        </div>
    </div>

</div>

{{-- Sticky Floating Input Bar (Selalu Menempel di Bawah Layar) --}}
<div class="fixed bottom-0 inset-x-0 bg-linear-to-t from-[#0f172a] via-[#0f172a]/95 to-transparent pt-6 pb-4 z-40">
    <div class="max-w-5xl mx-auto px-4 md:px-8">
        <form id="chat-form" class="relative flex items-center">
            <input type="text" id="user-input" maxlength="2000"
                class="w-full bg-slate-900/80 border border-slate-700/70 text-white placeholder-slate-500 text-sm rounded-full pl-5 pr-14 py-3.5 focus:outline-none focus:border-sky-500 focus:ring-2 focus:ring-sky-500/20 shadow-xl disabled:opacity-60 disabled:cursor-not-allowed transition"
                placeholder="Ask something..." required autocomplete="off">
            <button type="submit" id="btn-send" aria-label="Kirim pesan"
                class="absolute right-2 bg-sky-500 hover:bg-sky-600 active:scale-95 disabled:opacity-60 disabled:cursor-not-allowed text-white rounded-full w-10 h-10 flex items-center justify-center transition shadow-md">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"/>
                </svg>
            </button>
        </form>
    </div>
</div>

<script>
    const chatForm = document.getElementById('chat-form');
    const btnSend = document.getElementById('btn-send');
    const chatBox = document.getElementById('chat-box');
    const userInput = document.getElementById('user-input');
    const emptyState = document.getElementById('empty-state');

    const AI_FALLBACK = 'Maaf, saya tidak dapat menemukan jawaban yang sesuai. Silakan coba lagi dengan pertanyaan yang lebih jelas.';

    const ICONS = {
        stars: '<svg class="w-3.5 h-3.5 text-sky-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z"/></svg>',
        starGold: `<svg class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z"/></svg>`,
        send: '<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>',
        refresh: '<svg class="w-4 h-4 animate-spin" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0 1 12.35-5.85L19.5 8.25M19.5 8.25V3.75M19.5 8.25H15M19.5 12a7.5 7.5 0 0 1-12.35 5.85L4.5 15.75M4.5 15.75v4.5M4.5 15.75H9"/></svg>',
        refreshSm: '<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0 1 12.35-5.85L19.5 8.25M19.5 8.25V3.75M19.5 8.25H15M19.5 12a7.5 7.5 0 0 1-12.35 5.85L4.5 15.75M4.5 15.75v4.5M4.5 15.75H9"/></svg>',
        mapPin: '<svg class="w-8 h-8 text-sky-500/50" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>',
        warning: '<svg class="w-5 h-5 text-orange-400/70" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0zm-9 3.75h.008v.008H12v-.008z"/></svg>'
    };

    let isProcessing = false;

    function getTime() {
        const now = new Date();
        return now.getHours().toString().padStart(2, '0') + ':' + now.getMinutes().toString().padStart(2, '0');
    }

    function escapeHtml(value) {
        const div = document.createElement('div');
        div.textContent = value ?? '';
        return div.innerHTML;
    }

    function scrollToBottom() {
        window.scrollTo({
            top: document.body.scrollHeight,
            behavior: 'smooth'
        });
    }

    function hideEmptyState() {
        if (emptyState) {
            emptyState.remove();
        }
    }

    function appendUserMessage(text) {
        hideEmptyState();

        const row = document.createElement('div');
        row.className = 'flex flex-col items-end w-full';

        const bubble = document.createElement('div');
        bubble.className = 'bg-sky-500 text-white text-xs md:text-sm px-4 py-3 rounded-2xl rounded-tr-none max-w-[85%] sm:max-w-[75%] md:max-w-[65%] shadow-lg';

        const p = document.createElement('p');
        p.className = 'whitespace-pre-line break-words';
        p.textContent = text;

        const time = document.createElement('span');
        time.className = 'text-[10px] text-white/70 block text-right mt-1';
        time.textContent = getTime();

        bubble.appendChild(p);
        bubble.appendChild(time);
        row.appendChild(bubble);
        chatBox.appendChild(row);
        scrollToBottom();
    }

    function buildAiHeader() {
        return `
            <div class="flex items-center gap-2 mb-1 text-sky-400 font-semibold text-xs">
                ${ICONS.stars}
                Sudirection AI
            </div>`;
    }

    function buildAiAvatar() {
        const avatar = document.createElement('div');
        avatar.className = 'mt-1 shrink-0 w-7 h-7 rounded-xl bg-sky-500/15 border border-sky-500/30 flex items-center justify-center shadow';
        avatar.innerHTML = ICONS.stars;
        return avatar;
    }

    function buildTextBubble(text) {
        const row = document.createElement('div');
        row.className = 'flex items-start gap-3 w-full';

        const bubble = document.createElement('div');
        bubble.className = 'bg-slate-900/90 border border-slate-700/70 text-slate-200 text-xs md:text-sm px-4 py-3 rounded-2xl rounded-tl-none max-w-[85%] sm:max-w-[80%] md:max-w-[70%] shadow';
        bubble.innerHTML = buildAiHeader();

        const p = document.createElement('p');
        p.className = 'whitespace-pre-line break-words';
        p.textContent = text;

        const time = document.createElement('span');
        time.className = 'text-[10px] text-slate-500 block mt-1';
        time.textContent = getTime();

        bubble.appendChild(p);
        bubble.appendChild(time);
        row.appendChild(buildAiAvatar());
        row.appendChild(bubble);
        return row;
    }

    function buildLocationCard(data) {
        const directionUrl = 'https://www.google.com/maps/dir/?api=1&destination=' + encodeURIComponent(data.name || '');
        const image = data.image
            ? `<img src="${escapeHtml(data.image)}" class="w-full h-44 object-cover" alt="${escapeHtml(data.name || 'Tempat')}" onerror="this.style.display='none'">`
            : `<div class="w-full h-44 flex items-center justify-center bg-slate-800/60">
                   ${ICONS.mapPin}
               </div>`;

        const row = document.createElement('div');
        row.className = 'flex items-start gap-3 w-full';

        const wrap = document.createElement('div');
        wrap.className = 'flex flex-col w-full gap-3 max-w-[85%] sm:max-w-[80%] md:max-w-[75%]';

        wrap.innerHTML = `
            <div class="bg-slate-900/90 border border-slate-700/70 text-slate-200 text-xs md:text-sm px-4 py-3 rounded-2xl rounded-tl-none shadow">
                ${buildAiHeader()}
                <p class="whitespace-pre-line break-words">${escapeHtml(data.text || 'Saya menemukan beberapa pilihan. Berikut rekomendasinya:')}</p>
                <span class="text-[10px] text-slate-500 block mt-1">${escapeHtml(getTime())}</span>
            </div>

            <div class="bg-slate-900/90 border border-slate-700/70 rounded-2xl overflow-hidden shadow-lg">
                ${image}
                <div class="p-4 space-y-3">
                    <div class="flex justify-between items-center gap-2">
                        <h3 class="font-semibold text-sm text-white break-words">${escapeHtml(data.name || 'Tempat')}</h3>
                        <span class="shrink-0 bg-sky-950 text-sky-400 border border-sky-500/30 text-[10px] px-2 py-0.5 rounded-full">${escapeHtml(data.category || 'Tempat')}</span>
                    </div>
                    <div class="flex items-center text-[11px] text-slate-300 gap-1 flex-wrap">
                        ${ICONS.starGold}
                        <span class="font-bold text-white">${escapeHtml(data.rating || '4.8')}</span>
                        <span class="text-slate-500">(${escapeHtml(data.reviews || '1,240')} reviews) &bull; ${escapeHtml(data.distance || '0.6 km away')}</span>
                    </div>
                    <div class="flex justify-between items-center text-[11px] border-t border-slate-800 pt-2 flex-wrap gap-2">
                        <span class="bg-emerald-950 text-emerald-400 border border-emerald-500/30 px-2 py-0.5 rounded-full text-[10px]">${escapeHtml(data.status || 'Open Now')}</span>
                        <span class="text-slate-500">${escapeHtml(data.hours || '06:00 AM - 10:00 PM')}</span>
                    </div>
                    <div class="grid grid-cols-2 gap-2 pt-1">
                        <a href="${escapeHtml(data.maps_url || '#')}" target="_blank" rel="noopener noreferrer"
                           class="bg-slate-800 hover:bg-slate-700 text-slate-300 text-xs py-2 rounded-xl text-center border border-slate-700 transition">
                            View Place
                        </a>
                        <a href="${escapeHtml(directionUrl)}" target="_blank" rel="noopener noreferrer"
                           class="bg-sky-500 hover:bg-sky-600 text-white text-xs py-2 rounded-xl text-center flex items-center justify-center gap-1 transition shadow">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"/>
                            </svg>
                            Get Direction
                        </a>
                    </div>
                </div>
            </div>`;

        row.appendChild(buildAiAvatar());
        row.appendChild(wrap);
        return row;
    }

    function buildErrorCard(data) {
        const lastQuery = (data && data.last_query) || 'Beri saya rekomendasi tempat terdekat';

        const row = document.createElement('div');
        row.className = 'flex items-start gap-3 w-full';

        const card = document.createElement('div');
        card.className = 'bg-slate-900/90 border border-slate-700/70 rounded-2xl p-4 max-w-[85%] sm:max-w-[80%] md:max-w-[70%] w-full space-y-3 shadow';
        card.innerHTML = buildAiHeader();

        const p = document.createElement('p');
        p.className = 'text-xs text-slate-300 break-words';
        p.textContent = (data && data.message) || "Maaf, saya tidak menemukan hasil yang cocok. Silakan perjelas pertanyaan Anda.";

        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'flex items-center justify-center gap-1 w-full bg-sky-500 hover:bg-sky-600 text-white text-xs py-2 rounded-xl text-center transition';
        btn.innerHTML = ICONS.refreshSm;
        btn.appendChild(document.createTextNode(' Coba Lagi'));
        btn.addEventListener('click', () => sendQuickPrompt(lastQuery));

        card.appendChild(p);
        card.appendChild(btn);
        row.appendChild(buildAiAvatar());
        row.appendChild(card);
        return row;
    }

    function buildRequestError(message) {
        const row = document.createElement('div');
        row.className = 'flex items-start gap-3 w-full';

        const card = document.createElement('div');
        card.className = 'bg-slate-900/90 border border-orange-700/40 rounded-2xl p-4 max-w-[85%] sm:max-w-[80%] md:max-w-[70%] w-full space-y-3 shadow';
        card.innerHTML = buildAiHeader();

        const box = document.createElement('div');
        box.className = 'flex items-start gap-2';
        box.appendChild(Object.assign(document.createElement('div'), { innerHTML: ICONS.warning }));

        const p = document.createElement('p');
        p.className = 'text-xs text-slate-300 break-words';
        p.textContent = message || 'Terjadi kesalahan saat memproses pesan Anda. Silakan coba lagi.';

        box.appendChild(p);
        card.appendChild(box);
        row.appendChild(buildAiAvatar());
        row.appendChild(card);
        return row;
    }

    function appendTypingIndicator() {
        const row = document.createElement('div');
        row.id = 'typing-indicator';
        row.className = 'flex items-start gap-3 w-full';

        const bubble = document.createElement('div');
        bubble.className = 'bg-slate-900/90 border border-slate-700/70 px-4 py-3 rounded-2xl rounded-tl-none shadow flex items-center gap-1.5';
        bubble.innerHTML = '<span class="typing-dot bg-sky-500"></span><span class="typing-dot bg-sky-500"></span><span class="typing-dot bg-sky-500"></span>';

        row.appendChild(buildAiAvatar());
        row.appendChild(bubble);
        chatBox.appendChild(row);
        scrollToBottom();
    }

    function removeTypingIndicator() {
        const typing = document.getElementById('typing-indicator');
        if (typing) {
            typing.remove();
        }
    }

    function appendAiMessage(payload) {
        let data = null;

        if (payload && typeof payload === 'object') {
            data = payload;
        } else if (typeof payload === 'string') {
            try {
                data = JSON.parse(payload);
            } catch (e) {
                data = null;
            }
        }

        if (data && data.type === 'location_card') {
            chatBox.appendChild(buildLocationCard(data));
        } else if (data && data.type === 'error_card') {
            chatBox.appendChild(buildErrorCard(data));
        } else {
            const text = (typeof payload === 'string' && payload.trim() !== '') ? payload : AI_FALLBACK;
            chatBox.appendChild(buildTextBubble(text));
        }

        scrollToBottom();
    }

    function setProcessing(state) {
        isProcessing = state;
        userInput.disabled = state;
        btnSend.disabled = state;
        btnSend.innerHTML = state ? ICONS.refresh : ICONS.send;
    }

    function sendQuickPrompt(text) {
        if (isProcessing) {
            return;
        }
        userInput.value = text;
        chatForm.dispatchEvent(new Event('submit'));
    }

    chatForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const message = userInput.value.trim();
        if (!message || isProcessing) {
            return;
        }

        appendUserMessage(message);
        userInput.value = '';
        setProcessing(true);
        appendTypingIndicator();

        try {
            const response = await fetch('{{ route('chat.send') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ message: message })
            });

            let data = null;
            try {
                data = await response.json();
            } catch (error) {
                data = null;
            }

            if (!response.ok || !data || data.status !== 'success') {
                throw new Error((data && data.message) || 'Terjadi kesalahan pada server.');
            }

            removeTypingIndicator();
            appendAiMessage(data.response);
        } catch (error) {
            removeTypingIndicator();
            chatBox.appendChild(buildRequestError(error.message));
            scrollToBottom();
        } finally {
            setProcessing(false);
            userInput.focus();
        }
    });
</script>
@endsection