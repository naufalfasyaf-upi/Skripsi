<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased flex h-screen overflow-hidden">

    <!-- Sidebar (Same as Siswa) -->
    <aside class="w-72 bg-[#2a0a0a] text-white flex flex-col h-full shrink-0">
        <div class="flex flex-col items-center justify-center p-8 mt-12">
            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mb-6 shadow-md">
                <svg class="w-16 h-16 text-[#2a0a0a]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            </div>
            <h2 class="text-xl font-bold text-center tracking-wide">Admin</h2>
        </div>
        <nav class="flex-1 px-8 space-y-6 mt-8">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg><span>Beranda</span>
            </a>
            <a href="{{ route('admin.siswa.index') }}" class="flex items-center space-x-4 text-white font-bold text-lg transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M3 5v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2zm12 4c0 1.66-1.34 3-3 3s-3-1.34-3-3 1.34-3 3-3 3 1.34 3 3zm-9 8c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1H6v-1z"/></svg><span>User</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col bg-white overflow-y-auto">
        <header class="h-20 flex items-center px-8 w-full bg-white">
            <button class="text-black focus:outline-none"><svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M4 6h16M4 12h16M4 18h16"/></svg></button>
        </header>

        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 mt-2 rounded-lg flex flex-col">

            <!-- Top Controls -->
            <div class="flex gap-4 mb-8">
                <!-- Dropdown with GURU selected -->
                <select onchange="window.location.href=this.value" class="border border-black rounded px-4 py-1.5 bg-white text-black font-semibold focus:outline-none w-48 shadow-sm">
                    <option value="{{ route('admin.siswa.index') }}">Siswa</option>
                    <option value="{{ route('admin.guru.index') }}" selected>Guru</option>
                </select>

                <a href="#" class="border border-black rounded px-6 py-1.5 bg-white text-black font-semibold hover:bg-gray-100 transition-colors shadow-sm flex items-center">
                    Tambah User (Guru)
                </a>
            </div>

            <!-- Dark Table for Guru -->
            <div class="bg-[#383838] rounded-md overflow-hidden shadow-lg border border-gray-600">
                <table class="w-full text-left border-collapse text-white text-sm">
                    <thead>
                        <tr class="bg-[#4a4a4a]">
                            <th class="p-4 border border-gray-600 font-semibold w-16 text-center">No</th>
                            <th class="p-4 border border-gray-600 font-semibold">Nama</th>
                            <th class="p-4 border border-gray-600 font-semibold">NIP</th>
                            <th class="p-4 border border-gray-600 font-semibold">Mata Pelajaran</th>
                            <th class="p-4 border border-gray-600 font-semibold w-24 text-center"></th>
                            <th class="p-4 border border-gray-600 font-semibold w-24 text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $index => $teacher)
                        <tr class="hover:bg-[#454545] transition-colors">
                            <td class="p-4 border border-gray-600 text-center">{{ $index + 1 }}</td>
                            <td class="p-4 border border-gray-600">{{ $teacher->name }}</td>
                            <td class="p-4 border border-gray-600">{{ $teacher->nip }}</td>
                            <td class="p-4 border border-gray-600">{{ $teacher->subject }}</td>
                            <td class="p-4 border border-gray-600 text-center"><a href="#" class="text-gray-300 hover:text-white">Edit</a></td>
                            <td class="p-4 border border-gray-600 text-center"><a href="#" class="text-gray-300 hover:text-white">Hapus</a></td>
                        </tr>
                        @endforeach
                        
                        @for ($i = 0; $i < (8 - count($teachers)); $i++)
                        <tr>
                            <td class="p-6 border border-gray-600"></td>
                            <td class="p-6 border border-gray-600"></td>
                            <td class="p-6 border border-gray-600"></td>
                            <td class="p-6 border border-gray-600"></td>
                            <td class="p-6 border border-gray-600"></td>
                            <td class="p-6 border border-gray-600"></td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>