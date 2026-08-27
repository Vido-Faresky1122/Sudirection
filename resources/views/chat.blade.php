<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUDIRECTION AI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navyDark: '#030816',
                        navyCard: '#111936',
                        navyBorder: '#1e294b',
                        navyInput: '#0d1428',
                        accentBlue: '#0077ff'
                    }
                }
            }
        }
    </script>
</head>

<body class="min-h-screen bg-navyDark text-white flex flex-col font-sans antialiased">

    <!-- Header / Navbar Top -->
    <header class="w-full border-b border-navyBorder/50 bg-[#070e20]/80 backdrop-blur sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center text-xs tracking-wider text-gray-300 font-medium">
            <div class="flex gap-8">
                <a href="#" class="hover:text-white transition">HOME</a>
                <a href="#" class="hover:text-white transition">ABOUT US</a>
            </div>
            <div class="flex gap-8">
                <a href="#" class="hover:text-white transition">DIRECTIONAI</a>
                <a href="#" class="hover:text-white transition">PROFILE</a>
            </div>
        </div>
    </header>

    <!-- Content Area (Full Page Container) -->
    <main class="flex-1 max-w-5xl w-full mx-auto p-4 md:p-6 pb-28 flex flex-col gap-6">

        <!-- Banner Top -->
        <div class="bg-navyCard/60 border border-navyBorder rounded-2xl p-6 text-center shadow-lg">
            <h1 class="text-2xl md:text-3xl font-bold tracking-wide text-white mb-1">SUDIRECTION AI</h1>
            <p class="text-gray-400 text-xs md:text-sm mb-4">How can I help you today?</p>

            <!-- Suggestion Chips -->
            <div class="flex flex-wrap justify-center gap-2 text-xs">
                <button type="button" onclick="sendQuickPrompt('Find nearby restaurants')"
                    class="bg-navyInput hover:bg-navyBorder border border-navyBorder text-gray-300 px-3 py-1.5 rounded-full transition">
                    Find nearby restaurants
                </button>
                <button type="button" onclick="sendQuickPrompt('Find a cafe for studying')"
                    class="bg-navyInput hover:bg-navyBorder border border-navyBorder text-gray-300 px-3 py-1.5 rounded-full transition">
                    Find a cafe for studying
                </button>
                <button type="button" onclick="sendQuickPrompt('Find the nearest hospital')"
                    class="bg-navyInput hover:bg-navyBorder border border-navyBorder text-gray-300 px-3 py-1.5 rounded-full transition">
                    Find the nearest hospital
                </button>
                <button type="button" onclick="sendQuickPrompt('How do I get to school?')"
                    class="bg-navyInput hover:bg-navyBorder border border-navyBorder text-gray-300 px-3 py-1.5 rounded-full transition">
                    How do I get to school?
                </button>
            </div>
        </div>

        <!-- Chat History List (Tanpa Inner Scroll, Mengikuti Layar Browser) -->
        <div id="chat-box" class="bg-navyCard/30 border border-navyBorder rounded-2xl p-4 md:p-6 space-y-6">
            <!-- Pesan akan otomatis bertambah ke bawah -->
        </div>

    </main>

    <!-- Sticky Floating Input Bar (Selalu Menempel di Bawah Layar Browser) -->
    <div class="fixed bottom-0 left-0 right-0 bg-linear-to-t from-navyDark via-navyDark/90 to-transparent pt-6 pb-4 z-40">
        <div class="max-w-5xl mx-auto px-4 md:px-6">
            <form id="chat-form" class="relative flex items-center">
                <input type="text" id="user-input"
                    class="w-full bg-navyCard border border-navyBorder text-white placeholder-gray-500 text-sm rounded-full pl-5 pr-14 py-3.5 focus:outline-none focus:border-accentBlue shadow-2xl"
                    placeholder="Ask something..." required autocomplete="off">
                <button type="submit" id="btn-send"
                    class="absolute right-2 bg-accentBlue hover:bg-blue-600 text-white rounded-full w-9 h-9 flex items-center justify-center transition shadow-md">
                    <i class="bi bi-send-fill text-xs"></i>
                </button>
            </form>
        </div>
    </div>

    <script>
        const chatForm = document.getElementById('chat-form');
        const btnSend = document.getElementById('btn-send');
        const chatBox = document.getElementById('chat-box');
        const userInput = document.getElementById('user-input');

        function getTime() {
            const now = new Date();
            return now.getHours().toString().padStart(2, '0') + ':' + now.getMinutes().toString().padStart(2, '0');
        }

        function appendMessage(sender, message) {
            const messageElement = document.createElement('div');
            messageElement.classList.add('flex', 'flex-col', 'w-full', 'mb-2');

            if (sender === 'User') {
                messageElement.classList.add('items-end');
                messageElement.innerHTML = `
                    <div class="bg-[#182a4d] border border-blue-900/50 text-gray-200 text-xs md:text-sm px-4 py-3 rounded-2xl rounded-tr-none max-w-[80%] shadow">
                        <p class="whitespace-pre-line">${message}</p>
                        <span class="text-[10px] text-gray-400 block text-right mt-1">${getTime()}</span>
                    </div>
                `;
            } else {
                messageElement.classList.add('items-start');

                let contentHtml = '';
                let parsedData = null;

                if (typeof message === 'object') {
                    parsedData = message;
                } else if (typeof message === 'string') {
                    try {
                        parsedData = JSON.parse(message);
                    } catch (e) {
                        parsedData = null;
                    }
                }

                if (parsedData && parsedData.type === 'location_card') {
                    contentHtml = `
                        <div class="bg-navyCard/90 border border-navyBorder text-gray-200 text-xs md:text-sm px-4 py-3 rounded-2xl rounded-tl-none max-w-[85%] w-full mb-2">
                            <div class="flex items-center gap-2 mb-1 text-accentBlue font-semibold text-xs">
                                <i class="bi bi-stars"></i> Sudirection AI
                            </div>
                            <p>${parsedData.text || "I found a few options. Here's a recommendation:"}</p>
                            <span class="text-[10px] text-gray-400 block mt-1">${getTime()}</span>
                        </div>

                        <div class="bg-navyCard border border-navyBorder rounded-2xl overflow-hidden max-w-[85%] w-full shadow-lg">
                            ${parsedData.image ? `<img src="${parsedData.image}" class="w-full h-44 object-cover" alt="${parsedData.name}">` : ''}
                            <div class="p-4 space-y-3">
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold text-sm text-white">${parsedData.name}</h3>
                                    <span class="bg-blue-950 text-accentBlue border border-accentBlue/30 text-[10px] px-2 py-0.5 rounded-full">
                                        ${parsedData.category || 'Cafe'}
                                    </span>
                                </div>
                                <div class="flex items-center text-[11px] text-gray-300 gap-1">
                                    <i class="bi bi-star-fill text-yellow-400"></i>
                                    <span class="font-bold text-white">${parsedData.rating || '4.8'}</span>
                                    <span class="text-gray-400">(${parsedData.reviews || '1,240'} reviews) • ${parsedData.distance || '0.6 km away'}</span>
                                </div>
                                <div class="flex justify-between items-center text-[11px] border-t border-navyBorder/60 pt-2">
                                    <span class="bg-emerald-950 text-emerald-400 border border-emerald-500/30 px-2 py-0.5 rounded-full text-[10px]">
                                        ${parsedData.status || 'Open Now'}
                                    </span>
                                    <span class="text-gray-400">${parsedData.hours || '06:00 AM - 10:00 PM'}</span>
                                </div>
                                <div class="grid grid-cols-2 gap-2 pt-1">
                                    <a href="${parsedData.maps_url || '#'}" target="_blank" class="bg-navyInput hover:bg-navyBorder text-gray-300 text-xs py-2 rounded-xl text-center border border-navyBorder transition">
                                        View Place
                                    </a>
                                    <a href="https://www.google.com/maps/dir/?api=1&destination=${encodeURIComponent(parsedData.name)}" target="_blank" class="bg-accentBlue hover:bg-blue-600 text-white text-xs py-2 rounded-xl text-center flex items-center justify-center gap-1 transition shadow">
                                        <i class="bi bi-send-fill text-[10px]"></i> Get Direction
                                    </a>
                                </div>
                            </div>
                        </div>
                    `;
                } else if (parsedData && parsedData.type === 'error_card') {
                    contentHtml = `
                        <div class="bg-navyCard border border-navyBorder rounded-2xl p-4 max-w-[85%] w-full space-y-3">
                            <div class="flex items-center gap-2 text-accentBlue font-semibold text-xs">
                                <i class="bi bi-stars"></i> Sudirection AI
                            </div>
                            <p class="text-xs text-gray-300">${parsedData.message || "Sorry, I couldn't find a match. Please try rephrasing your question."}</p>
                            <button onclick="sendQuickPrompt('${parsedData.last_query || 'Find nearby cafes'}')" class="w-full bg-accentBlue hover:bg-blue-600 text-white text-xs py-2 rounded-xl text-center transition">
                                Try Again
                            </button>
                        </div>
                    `;
                } else {
                    contentHtml = `
                        <div class="bg-navyCard border border-navyBorder text-gray-200 text-xs md:text-sm px-4 py-3 rounded-2xl rounded-tl-none max-w-[85%]">
                            <div class="flex items-center gap-2 mb-1 text-accentBlue font-semibold text-xs">
                                <i class="bi bi-stars"></i> Sudirection AI
                            </div>
                            <p class="whitespace-pre-line">${message}</p>
                            <span class="text-[10px] text-gray-400 block mt-1">${getTime()}</span>
                        </div>
                    `;
                }

                messageElement.innerHTML = contentHtml;
            }

            chatBox.appendChild(messageElement);
            
            // Otomatis scroll layar utama ke paling bawah setiap pesan baru masuk
            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: 'smooth'
            });
        }

        function sendQuickPrompt(text) {
            userInput.value = text;
            chatForm.dispatchEvent(new Event('submit'));
        }

        chatForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const message = userInput.value.trim();
            if (!message) {
                return;
            }
            appendMessage('User', message);
            userInput.value = '';

            try {
                const response = await fetch('{{ route('chat.send') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        message: message
                    })
                });
                const data = await response.json();

                console.log('Response dari Laravel:', data);

                if (!response.ok) {
                    throw new Error(
                        data.message || 'Terjadi kesalahan pada server.'
                    );
                }
                appendMessage('AI', data.response);

            } catch (error) {
                console.error('Error:', error);
                appendMessage('AI', 'Error: ' + error.message);
            }
        });
    </script>
</body>

</html>