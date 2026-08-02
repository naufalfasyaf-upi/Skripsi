<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Pengajaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom dark theme inputs for the table */
        .score-input {
            width: 100%;
            background-color: transparent;
            border: 1px solid #555;
            color: white;
            text-align: center;
            padding: 4px;
            border-radius: 4px;
            outline: none;
        }
        .score-input:focus {
            border-color: #aaa;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased flex h-screen overflow-hidden">

    <!-- Sidebar -->
   <aside id="sidebar" class="w-72 bg-[#2a0a0a] text-white flex flex-col h-full shrink-0 transition-all duration-300 ease-in-out">
        <div class="flex flex-col items-center justify-center p-8 mt-12">
            <div class="mb-4">
                <svg class="w-24 h-24 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            </div>
            <h2 class="text-lg font-bold text-center tracking-wide">{{ auth('teacher')->user()->name }}</h2>
            <p class="text-sm text-gray-300 mt-1">{{ auth('teacher')->user()->subject->name ?? 'Mata Pelajaran' }}</p>
        </div>
        <nav class="flex-1 px-8 space-y-6 mt-8">
            <a href="{{ route('guru.dashboard') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Beranda</span>
            </a>
            <a href="{{ route('guru.portfolio') }}" class="flex items-center space-x-4 text-white font-bold text-lg transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                <span>Portfolio</span>
            </a>
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
         <!-- Top Navbar -->
        <header class="h-20 flex items-center px-8 w-full bg-white">
            <button id="sidebarToggle" class="text-black focus:outline-none hover:text-gray-600 transition-colors">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </header>
        <header class="h-20 flex items-center px-8 w-full bg-white shadow-sm">
            <h1 class="text-2xl font-bold text-[#2a0a0a]">Input Nilai Pengajaran</h1>
        </header>

        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 mt-4 rounded-lg flex flex-col">
            
            @if(session('success'))
                <div class="bg-green-500 text-white p-3 rounded mb-4 font-bold text-sm">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="bg-red-500 text-white p-3 rounded mb-4 font-bold text-sm">{{ session('error') }}</div>
            @endif

            <!-- Top Filters -->
            <form method="GET" action="{{ route('guru.portfolio') }}" class="flex flex-col gap-3 w-64 mb-6">
                <!-- Dynamic Kelas Selection (FIXED: Uses class_id instead of class name) -->
                <select name="class_id" onchange="this.form.submit()" class="border rounded px-3 py-2 bg-white text-black font-semibold focus:outline-none">
                    <option value="">-- Pilih Kelas --</option>
                    @foreach($kelasList as $kelas)
                        <option value="{{ $kelas->id }}" {{ $selectedClassId == $kelas->id ? 'selected' : '' }}>
                            {{ $kelas->name }}
                        </option>
                    @endforeach
                </select>

                <!-- Semester Selection -->
                <select name="semester" onchange="this.form.submit()" class="border rounded px-3 py-2 bg-white text-black font-semibold focus:outline-none">
                    <option value="">-- Pilih Semester --</option>
                    <option value="Semester 1" {{ $selectedSemester == 'Semester 1' ? 'selected' : '' }}>Semester 1</option>
                    <option value="Semester 2" {{ $selectedSemester == 'Semester 2' ? 'selected' : '' }}>Semester 2</option>
                </select>
            </form>

            <!-- Grading Table -->
            <div class="bg-[#333] rounded overflow-hidden shadow-lg border border-[#444] flex-1 max-h-[60vh] overflow-y-auto">
                <form method="POST" action="{{ route('guru.portfolio.store') }}">
                    @csrf
                    <!-- Pass the data safely to the POST request -->
                    <input type="hidden" name="semester" value="{{ $selectedSemester }}">
                    <input type="hidden" name="class_id" value="{{ $selectedClassId }}">

                    <table class="w-full text-left border-collapse text-white text-sm">
                        <thead class="bg-[#4a4a4a] sticky top-0 z-10">
                            <tr>
                                <th class="p-3 border border-[#555] font-semibold w-12 text-center">No</th>
                                <th class="p-3 border border-[#555] font-semibold">Nama Siswa</th>
                                <th class="p-3 border border-[#555] font-semibold w-32 text-center">Nilai Tugas</th>
                                <th class="p-3 border border-[#555] font-semibold w-32 text-center">Nilai UTS</th>
                                <th class="p-3 border border-[#555] font-semibold w-32 text-center">Nilai UAS</th>
                                <th class="p-3 border border-[#555] font-semibold w-32 text-center">Nilai Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($selectedClassId && $selectedSemester && count($students) > 0)
                                @foreach($students as $index => $student)
                                    @php
                                        // Fetch existing score if it exists, otherwise null
                                        $score = $scores->get($student->id);
                                    @endphp
                                    <tr class="hover:bg-[#454545] transition-colors border-b border-[#555]">
                                        <td class="p-3 border-r border-[#555] text-center">{{ $index + 1 }}</td>
                                        <!-- FIXED: Uses full_name instead of name -->
                                        <td class="p-3 border-r border-[#555] font-bold">{{ $student->full_name }}</td>
                                        
                                        <!-- Score Inputs mapped by Student ID -->
                                        <td class="p-2 border-r border-[#555]">
                                            <input type="number" name="scores[{{ $student->id }}][nilai_tugas]" value="{{ $score->nilai_tugas ?? '' }}" class="score-input">
                                        </td>
                                        <td class="p-2 border-r border-[#555]">
                                            <input type="number" name="scores[{{ $student->id }}][nilai_uts]" value="{{ $score->nilai_uts ?? '' }}" class="score-input">
                                        </td>
                                        <td class="p-2 border-r border-[#555]">
                                            <input type="number" name="scores[{{ $student->id }}][nilai_uas]" value="{{ $score->nilai_uas ?? '' }}" class="score-input">
                                        </td>
                                        <td class="p-2">
                                            <input type="number" name="scores[{{ $student->id }}][nilai_akhir]" value="{{ $score->nilai_akhir ?? '' }}" class="score-input bg-[#2a2a2a]">
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="p-6 text-center text-gray-400">
                                        {{ (!$selectedClassId || !$selectedSemester) ? 'Silakan pilih Kelas dan Semester terlebih dahulu.' : 'Tidak ada siswa di kelas ini.' }}
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    @if($selectedClassId && $selectedSemester && count($students) > 0)
                        <!-- Save Button pinned to bottom right -->
                        <div class="bg-[#333] p-4 border-t border-[#555] flex justify-end sticky bottom-0 z-10">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded transition-colors">
                                Simpan Nilai
                            </button>
                        </div>
                    @endif
                </form>
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