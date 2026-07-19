<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased flex h-screen overflow-hidden">

    <aside class="w-72 bg-[#2a0a0a] text-white flex flex-col h-full shrink-0">
        <div class="flex flex-col items-center justify-center p-8 mt-12">
            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mb-6">
                <svg class="w-16 h-16 text-[#2a0a0a]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            </div>
            <h2 class="text-xl font-bold text-center">{{ $student->name ?? 'Student Name' }}</h2>
            <p class="text-sm text-gray-300 mt-2">{{ $student->class_name ?? 'Class' }}</p>
        </div>

        <nav class="flex-1 px-8 space-y-6 mt-8">
            <a href="{{ route('dashboard') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Beranda</span>
            </a>
            <a href="{{ route('portofolio') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                <span>Portfolio</span>
            </a>
            <a href="{{ route('analisis') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/></svg>
                <span>Analisis</span>
            </a>
            <form action="{{ route('logout') }}" method="POST" class="mt-8">
                @csrf
                <button type="submit" class="flex items-center space-x-4 text-red-400 hover:text-red-300 font-bold text-lg px-8">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
                    <span>Logout</span>
                </button>
            </form>
        </nav>
    </aside>

    <main class="flex-1 flex flex-col bg-white overflow-y-auto">
        <header class="h-20 flex items-center px-8 w-full bg-white">
            <button class="text-black focus:outline-none">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </header>

        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 rounded-lg">
            <div class="grid grid-cols-4 gap-6">
                
                <div class="bg-[#2a0a0a] text-white rounded-2xl p-6 h-32 shadow-lg flex flex-col justify-between">
                    <span class="font-bold text-lg">Semester</span>
                    <span class="text-2xl font-semibold self-end">{{ $student->attendances->first()->semester ?? '-' }}</span>
                </div>
                
                <div class="bg-[#2a0a0a] text-white rounded-2xl p-6 h-32 shadow-lg flex flex-col justify-between">
                    <span class="font-bold text-lg">Izin</span>
                    <span class="text-2xl font-semibold self-end">{{ $student->attendances->first()->izin ?? '0' }}</span>
                </div>

                <div class="bg-[#2a0a0a] text-white rounded-2xl p-6 h-32 shadow-lg flex flex-col justify-between">
                    <span class="font-bold text-lg">Sakit</span>
                    <span class="text-2xl font-semibold self-end">{{ $student->attendances->first()->sakit ?? '0' }}</span>
                </div>

                <div class="bg-[#2a0a0a] text-white rounded-2xl p-6 h-32 shadow-lg flex flex-col justify-between">
                    <span class="font-bold text-lg">Tanpa Keterangan</span>
                    <span class="text-2xl font-semibold self-end">{{ $student->attendances->first()->tanpa_keterangan ?? '0' }}</span>
                </div>

            </div>
        </div>
    </main>

</body>
</html>