<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-72 bg-[#2a0a0a] text-white flex flex-col h-full shrink-0">
        <div class="flex flex-col items-center justify-center p-8 mt-12">
            <!-- User Profile Icon -->
            <div class="mb-4">
                <svg class="w-24 h-24 text-white" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </div>
            <!-- Dynamic Teacher Name & Subject (Falls back to Mockup text if not logged in) -->
            <h2 class="text-lg font-bold text-center tracking-wide">
                {{ auth('teacher')->user()->name ?? 'Naufal Fasya Faddillah' }}
            </h2>
            <p class="text-sm text-gray-300 mt-1">
                {{ auth('teacher')->user()->subject->name ?? 'Bahasa Indonesia' }}
            </p>
        </div>

        <nav class="flex-1 px-8 space-y-6 mt-8">
            <!-- Beranda (Active) -->
            <a href="#" class="flex items-center space-x-4 text-white font-bold text-lg transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Beranda</span>
            </a>
            <!-- Portfolio -->
            <a href="{{ route('guru.portfolio') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                <span>Portfolio</span>
            </a>
            <!-- Input Data -->
            <!-- <a href="#" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                <span>Input Data</span>
            </a> -->

            <!-- LOGOUT BUTTON -->
            <form action="{{ route('logout') }}" method="POST" class="pt-6 mt-6 border-t border-[#4a4a4a] w-full">
                @csrf
                <button type="submit" class="flex items-center space-x-4 text-red-400 hover:text-red-300 font-bold text-lg transition-colors w-full text-left">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
                    <span>Logout</span>
                </button>
            </form>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col bg-white overflow-y-auto">
        <header class="h-20 flex items-center px-8 w-full bg-white">
            <button class="text-black focus:outline-none">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </header>

        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 mt-2 rounded-lg flex flex-col relative">

            <!-- 4 Top Cards -->
            <!-- <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-[#2a0a0a] text-white p-6 rounded-2xl shadow-lg h-32 flex items-start">
                    <h3 class="text-lg font-semibold tracking-wide">Portofolio</h3>
                </div>
                <div class="bg-[#2a0a0a] text-white p-6 rounded-2xl shadow-lg h-32 flex items-start">
                    <h3 class="text-lg font-semibold tracking-wide">Izin</h3>
                </div>
                <div class="bg-[#2a0a0a] text-white p-6 rounded-2xl shadow-lg h-32 flex items-start">
                    <h3 class="text-lg font-semibold tracking-wide">Sakit</h3>
                </div>
                <div class="bg-[#2a0a0a] text-white p-6 rounded-2xl shadow-lg h-32 flex items-start">
                    <h3 class="text-lg font-semibold tracking-wide">Tanpa Keterangan</h3>
                </div>
            </div> -->
            <!-- A nice welcome banner to replace the empty space -->
            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
                <h2 class="text-3xl font-bold text-[#2a0a0a] mb-2">Selamat Datang, {{ auth()->user()->name }}!</h2>
                <p class="text-gray-600 text-lg">Gunakan menu di sebelah kiri untuk memberikan nilai kepada siswa Anda.</p>
            </div>
            <!-- Center Text Placeholder -->
            <!-- <div class="flex-1 flex items-center justify-center">
                <p class="text-xl font-bold text-black text-center">
                    Menu perwalian, ada menu untuk cek kelas
                </p>
            </div> -->

        </div>
    </main>

</body>
</html>