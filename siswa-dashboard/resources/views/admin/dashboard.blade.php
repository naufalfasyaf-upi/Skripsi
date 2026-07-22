<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-72 bg-[#2a0a0a] text-white flex flex-col h-full shrink-0">
        <div class="flex flex-col items-center justify-center p-8 mt-12">
            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mb-6 shadow-md">
                <svg class="w-16 h-16 text-[#2a0a0a]" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </div>
            <h2 class="text-xl font-bold text-center tracking-wide">Admin</h2>
        </div>

        <nav class="flex-1 px-8 space-y-6 mt-8">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Beranda</span>
            </a>
            <a href="#" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg transition-colors">
                <!-- User/Contact Book Icon -->
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M3 5v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2zm12 4c0 1.66-1.34 3-3 3s-3-1.34-3-3 1.34-3 3-3 3 1.34 3 3zm-9 8c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1H6v-1z"/></svg>
                <span>User</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col bg-white overflow-y-auto">
        
        <!-- Top Navbar -->
        <header class="h-20 flex items-center px-8 w-full bg-white">
            <button class="text-black focus:outline-none hover:text-gray-600 transition-colors">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </header>

        <!-- Gray Dashboard Container -->
        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 mt-2 rounded-lg flex gap-6 items-start">
            
            <!-- Guru Card -->
            <a href="#" class="bg-[#2a0a0a] text-white w-64 h-32 rounded-2xl p-5 shadow-lg hover:bg-[#3d1515] transition-all transform hover:-translate-y-1 flex flex-col">
                <span class="font-bold text-lg tracking-wide">Guru</span>
            </a>

            <!-- Siswa Card -->
            <a href="{{ route('admin.siswa.index') }}" class="bg-[#2a0a0a] text-white w-64 h-32 rounded-2xl p-5 shadow-lg hover:bg-[#3d1515] transition-all transform hover:-translate-y-1 flex flex-col">
                <span class="font-bold text-lg tracking-wide">Siswa</span>
            </a>

        </div>
    </main>

</body>
</html>