<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-72 bg-[#2a0a0a] text-white flex flex-col h-full shrink-0">
        <div class="flex flex-col items-center justify-center p-8 mt-12">
            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mb-6 shadow-md">
                <svg class="w-16 h-16 text-[#2a0a0a]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            </div>
            <h2 class="text-xl font-bold text-center">{{ auth()->user()->full_name ?? 'Student Name' }}</h2>
            <p class="text-sm text-gray-300 mt-2">{{ auth()->user()->classes->last()->name ?? 'Belum Ada Kelas' }}</p>
        </div>

        <nav class="flex-1 px-8 space-y-6 mt-8">
            <a href="{{ route('dashboard') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Beranda</span>
            </a>
            <!-- Highlighted Portfolio Tab -->
            <a href="{{ route('portofolio') }}" class="flex items-center space-x-4 text-white font-bold text-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                <span>Portfolio</span>
            </a>
            <a href="{{ route('analisis') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg transition-colors">
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

    <!-- Main Content -->
    <main class="flex-1 flex flex-col bg-white overflow-y-auto">
        <header class="h-20 flex items-center px-8 w-full bg-white shadow-sm">
            <h1 class="text-2xl font-bold text-[#2a0a0a]">Portfolio Nilai Akademik</h1>
        </header>

        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 mt-4 rounded-lg flex flex-col">

            <!-- Filter Dropdowns -->
            <form method="GET" action="{{ route('portofolio') }}" class="flex gap-4 mb-6">
                
                <!-- Class Selection (Only shows classes the student is/was in) -->
                <select name="class_id" onchange="this.form.submit()" class="border rounded px-4 py-2 bg-white text-black font-semibold focus:outline-none shadow-sm w-48">
                    <option value="">-- Pilih Kelas --</option>
                    @foreach($classes as $kelas)
                        <option value="{{ $kelas->id }}" {{ $selectedClassId == $kelas->id ? 'selected' : '' }}>
                            {{ $kelas->name }}
                        </option>
                    @endforeach
                </select>

                <!-- Semester Selection (1 or 2 to match database ENUM) -->
                <select name="semester" onchange="this.form.submit()" class="border rounded px-4 py-2 bg-white text-black font-semibold focus:outline-none shadow-sm w-48">
                    <option value="">-- Pilih Semester --</option>
                    <option value="1" {{ $selectedSemester == '1' ? 'selected' : '' }}>Semester 1</option>
                    <option value="2" {{ $selectedSemester == '2' ? 'selected' : '' }}>Semester 2</option>
                </select>
                
            </form>

            <!-- Dark Grading Table -->
            <div class="bg-[#333] rounded overflow-hidden shadow-lg border border-[#444] flex-1 max-h-[60vh] overflow-y-auto">
                <table class="w-full text-left border-collapse text-white text-sm">
                    <thead class="bg-[#4a4a4a] sticky top-0 z-10">
                        <tr>
                            <th class="p-4 border border-[#555] font-semibold w-12 text-center">No</th>
                            <th class="p-4 border border-[#555] font-semibold">Mata Pelajaran</th>
                            <th class="p-4 border border-[#555] font-semibold">Guru Pengajar</th>
                            <th class="p-4 border border-[#555] font-semibold w-24 text-center">Tugas</th>
                            <th class="p-4 border border-[#555] font-semibold w-24 text-center">UTS</th>
                            <th class="p-4 border border-[#555] font-semibold w-24 text-center">UAS</th>
                            <th class="p-4 border border-[#555] font-semibold w-24 text-center">Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($selectedClassId && $selectedSemester && count($scores) > 0)
                            @foreach($scores as $index => $score)
                                <tr class="hover:bg-[#454545] transition-colors border-b border-[#555]">
                                    <td class="p-4 border-r border-[#555] text-center">{{ $index + 1 }}</td>
                                    <td class="p-4 border-r border-[#555] font-bold">{{ $score->teacher->subject->name ?? 'Mata Pelajaran' }}</td>
                                    <td class="p-4 border-r border-[#555]">{{ $score->teacher->name ?? '-' }}</td>
                                    <td class="p-4 border-r border-[#555] text-center">{{ $score->nilai_tugas ?? '-' }}</td>
                                    <td class="p-4 border-r border-[#555] text-center">{{ $score->nilai_uts ?? '-' }}</td>
                                    <td class="p-4 border-r border-[#555] text-center">{{ $score->nilai_uas ?? '-' }}</td>
                                    <td class="p-4 text-center font-bold text-green-400 bg-[#2a2a2a]">{{ $score->nilai_akhir ?? '-' }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="p-8 text-center text-gray-400">
                                    {{ (!$selectedClassId || !$selectedSemester) ? 'Silakan pilih Kelas dan Semester terlebih dahulu untuk melihat nilai.' : 'Belum ada nilai yang diinput oleh guru untuk semester ini.' }}
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </main>

</body>
</html>