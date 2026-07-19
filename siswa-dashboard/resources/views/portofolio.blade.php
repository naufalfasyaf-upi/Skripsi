<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa Portfolio</title>
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
            <a href="#" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/></svg>
                <span>Analisis</span>
            </a>
        </nav>
    </aside>

    <main class="flex-1 flex flex-col bg-white overflow-y-auto">
        <header class="h-20 flex items-center px-8 w-full bg-white">
            <button class="text-black focus:outline-none">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </header>

        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 rounded-lg flex flex-col">
            
            <!-- Dropdown Filter -->
            <div class="mb-6">
                <select class="border border-gray-400 rounded px-4 py-2 bg-white text-sm font-semibold shadow-sm focus:outline-none">
                    <option value="Semester 1" {{ $semester == 'Semester 1' ? 'selected' : '' }}>Semester 1</option>
                    <option value="Semester 2" {{ $semester == 'Semester 2' ? 'selected' : '' }}>Semester 2</option>
                </select>
            </div>

            <!-- Dark Data Table -->
            <div class="bg-[#383838] rounded-md overflow-hidden shadow-lg border border-gray-600">
                <table class="w-full text-left border-collapse text-white text-sm">
                    <thead>
                        <tr class="bg-[#4a4a4a]">
                            <th class="p-3 border border-gray-600 font-semibold w-12 text-center">No</th>
                            <th class="p-3 border border-gray-600 font-semibold">Mata Pelajaran</th>
                            <th class="p-3 border border-gray-600 font-semibold w-24 text-center">Nilai Tugas</th>
                            <th class="p-3 border border-gray-600 font-semibold w-24 text-center">Nilai UTS</th>
                            <th class="p-3 border border-gray-600 font-semibold w-24 text-center">Nilai UAS</th>
                            <th class="p-3 border border-gray-600 font-semibold w-24 text-center">Nilai Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($student->grades as $index => $grade)
                        <tr class="hover:bg-[#454545] transition-colors">
                            <td class="p-3 border border-gray-600 text-center">{{ $index + 1 }}</td>
                            <td class="p-3 border border-gray-600">{{ $grade->mata_pelajaran }}</td>
                            <td class="p-3 border border-gray-600 text-center">{{ $grade->nilai_tugas }}</td>
                            <td class="p-3 border border-gray-600 text-center">{{ $grade->nilai_uts }}</td>
                            <td class="p-3 border border-gray-600 text-center">{{ $grade->nilai_uas }}</td>
                            <td class="p-3 border border-gray-600 text-center font-bold">{{ $grade->nilai_akhir }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="p-4 text-center text-gray-400 border border-gray-600">Belum ada data nilai untuk semester ini.</td>
                        </tr>
                        @endforelse
                        
                        <!-- Empty rows filler to match the Figma visual design height -->
                        @for ($i = 0; $i < (10 - count($student->grades)); $i++)
                        <tr>
                            <td class="p-5 border border-gray-600"></td>
                            <td class="p-5 border border-gray-600"></td>
                            <td class="p-5 border border-gray-600"></td>
                            <td class="p-5 border border-gray-600"></td>
                            <td class="p-5 border border-gray-600"></td>
                            <td class="p-5 border border-gray-600"></td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>

        </div>
    </main>

</body>
</html>