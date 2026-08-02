<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis Akademik</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside id="sidebar" class="w-72 bg-[#2a0a0a] text-white flex flex-col h-full shrink-0 transition-all duration-300 ease-in-out">
        <div class="flex flex-col items-center justify-center p-8 mt-12">
            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mb-6 shadow-md">
                <svg class="w-16 h-16 text-[#2a0a0a]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            </div>
            <!-- FIXED: Changed 'name' to 'full_name' -->
            <h2 class="text-xl font-bold text-center">{{ auth()->user()->full_name ?? 'Siswa' }}</h2>
            <!-- FIXED: Pulled the most recent class -->
            <p class="text-sm text-gray-300 mt-2">{{ auth()->user()->classes->last()->name ?? 'Belum Ada Kelas' }}</p>
        </div>

        <nav class="flex-1 px-8 space-y-6 mt-8">
            <a href="{{ route('dashboard') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Beranda</span>
            </a>
            <a href="{{ route('portofolio') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                <span>Portfolio</span>
            </a>
            <a href="{{ route('analisis') }}" class="flex items-center space-x-4 text-white font-bold text-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/></svg>
                <span>Analisis</span>
            </a>
            <form action="{{ route('logout') }}" method="POST" class="pt-6 mt-6 border-t border-[#4a4a4a] w-full">
                @csrf
                <button type="submit" class="flex items-center space-x-4 text-red-400 hover:text-red-300 font-bold text-lg transition-colors w-full text-left">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/>
                    </svg>
                    <span>Logout</span>
                </button>
            </form>
        </nav>
    </aside>

    <main class="flex-1 flex flex-col bg-white overflow-y-auto">
         <!-- Top Navbar -->
        <header class="h-20 flex items-center px-8 w-full bg-white">
            <button id="sidebarToggle" class="text-black focus:outline-none hover:text-gray-600 transition-colors">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </header>
        <header class="h-20 flex items-center px-8 w-full bg-white shadow-sm">
            <h1 class="text-2xl font-bold text-[#2a0a0a]">Analisis Akademik (Semester 1 - 6)</h1>
        </header>

        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 mt-4 rounded-lg flex flex-col">
            
            <!-- Filter Dropdown -->
            <div class="mb-6">
                <select class="border border-gray-400 rounded px-4 py-2 bg-white text-sm font-semibold shadow-sm focus:outline-none">
                    <option>Seluruh Pelajaran</option>
                </select>
            </div>

            <!-- Analisis Table -->
            <div class="bg-[#333] rounded-md overflow-hidden shadow-lg border border-[#444] flex-1 max-h-[65vh] overflow-y-auto">
                <table class="w-full text-left border-collapse text-white text-sm">
                    <thead class="bg-[#4a4a4a] sticky top-0 z-10">
                        <tr>
                            <th class="p-4 border border-[#555] font-semibold w-12 text-center">No</th>
                            <th class="p-4 border border-[#555] font-semibold">Mata Pelajaran</th>
                            <th class="p-4 border border-[#555] font-semibold text-center w-20">Semester<br>1</th>
                            <th class="p-4 border border-[#555] font-semibold text-center w-20">Semester<br>2</th>
                            <th class="p-4 border border-[#555] font-semibold text-center w-20">Semester<br>3</th>
                            <th class="p-4 border border-[#555] font-semibold text-center w-20">Semester<br>4</th>
                            <th class="p-4 border border-[#555] font-semibold text-center w-20">Semester<br>5</th>
                            <th class="p-4 border border-[#555] font-semibold text-center w-20">Semester<br>6</th>
                            <th class="p-4 border border-[#555] font-semibold text-center w-24">Rata-rata</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @forelse($analisisData as $subject => $grades)
                        <tr class="hover:bg-[#454545] transition-colors border-b border-[#555]">
                            <td class="p-4 text-center border-r border-[#555]">{{ $i++ }}</td>
                            <td class="p-4 border-r border-[#555] font-bold">{{ $subject }}</td>
                            <td class="p-4 text-center border-r border-[#555]">{{ $grades[1] }}</td>
                            <td class="p-4 text-center border-r border-[#555]">{{ $grades[2] }}</td>
                            <td class="p-4 text-center border-r border-[#555]">{{ $grades[3] }}</td>
                            <td class="p-4 text-center border-r border-[#555]">{{ $grades[4] }}</td>
                            <td class="p-4 text-center border-r border-[#555]">{{ $grades[5] }}</td>
                            <td class="p-4 text-center border-r border-[#555]">{{ $grades[6] }}</td>
                            <td class="p-4 text-center font-bold text-green-400 bg-[#2a2a2a]">{{ $grades['performa'] }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="p-8 text-center text-gray-400">Belum ada data nilai yang cukup untuk dianalisis.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </main>
    <!-- Sidebar Toggle Script -->
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            // Toggling -ml-72 slides the sidebar out of view to the left
            sidebar.classList.toggle('-ml-72');
        });
    </script>
</body>
</html>