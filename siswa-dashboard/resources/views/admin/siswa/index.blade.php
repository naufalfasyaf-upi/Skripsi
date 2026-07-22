<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List - Admin</title>
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
            <!-- Highlighted User Tab -->
            <a href="{{ route('admin.siswa.index') }}" class="flex items-center space-x-4 text-white font-bold text-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M3 5v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2zm12 4c0 1.66-1.34 3-3 3s-3-1.34-3-3 1.34-3 3-3 3 1.34 3 3zm-9 8c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1H6v-1z"/></svg>
                <span>User</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col bg-white overflow-y-auto">
        
        <!-- Top Navbar with Hamburger Menu -->
        <header class="h-20 flex items-center px-8 w-full bg-white">
            <button class="text-black focus:outline-none hover:text-gray-600 transition-colors">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </header>

        <!-- Gray Dashboard Container -->
        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 mt-2 rounded-lg flex flex-col">
            
            @if(session('success'))
                <div class="bg-green-500 text-white p-3 rounded mb-4 font-bold shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Controls (Dropdown & Add Button) -->
            <div class="flex gap-6 mb-8 items-center">
                <select onchange="window.location.href=this.value" class="border border-black rounded px-4 py-1.5 bg-white text-black font-semibold focus:outline-none w-48 shadow-sm">
                    <option value="{{ route('admin.siswa.index') }}" selected>Siswa</option>
                    <option value="{{ route('admin.guru.index') }}">Guru</option>
                </select>
                
                <a href="{{ route('admin.siswa.create') }}" class="border border-black bg-white text-black font-semibold py-1.5 px-6 rounded text-sm shadow-sm hover:bg-gray-50 transition-colors">
                    Tambah User
                </a>
            </div>

            <!-- Dark Table -->
            <div class="bg-[#383838] rounded-md overflow-hidden shadow-lg border border-gray-600">
                <table class="w-full text-left border-collapse text-white text-sm">
                    <thead>
                        <tr class="bg-[#4a4a4a]">
                            <th class="p-3 border border-gray-600 font-semibold w-16 text-center">No</th>
                            <th class="p-3 border border-gray-600 font-semibold">Nama</th>
                            <th class="p-3 border border-gray-600 font-semibold w-40 text-center">Nomor Induk</th>
                            <th class="p-3 border border-gray-600 font-semibold w-40 text-center">Kelas</th>
                            <th class="p-3 border border-gray-600 font-semibold w-24 text-center"></th>
                            <th class="p-3 border border-gray-600 font-semibold w-24 text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $index => $student)
                        <tr class="hover:bg-[#454545] transition-colors">
                            <td class="p-3 border border-gray-600 text-center">{{ $index + 1 }}</td>
                            <td class="p-3 border border-gray-600">{{ $student->name }}</td>
                            <!-- Displaying Nomor Induk (NISN) and Kelas as requested in the design notes -->
                            <td class="p-3 border border-gray-600 text-center">{{ $student->nisn }}</td>
                            <td class="p-3 border border-gray-600 text-center">{{ $student->class_name }}</td>
                            <td class="p-3 border border-gray-600 text-center">
                                <a href="#" class="text-gray-300 hover:text-white transition-colors">Edit</a>
                            </td>
                            <td class="p-3 border border-gray-600 text-center">
                                <form action="{{ route('admin.siswa.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus siswa ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-gray-300 hover:text-red-400 transition-colors">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                        <!-- Empty Rows to match the visual height of the Figma design -->
                        @for ($i = 0; $i < (8 - count($students)); $i++)
                        <tr>
                            <td class="p-5 border border-gray-600"></td>
                            <td class="p-5 border border-gray-600"></td>
                            <td class="p-5 border border-gray-600"></td>
                            <td class="p-5 border border-gray-600"></td>
                            <td class="p-5 border border-gray-600 text-center text-gray-400 text-xs">Edit</td>
                            <td class="p-5 border border-gray-600 text-center text-gray-400 text-xs">Hapus</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>

        </div>
    </main>

</body>
</html>