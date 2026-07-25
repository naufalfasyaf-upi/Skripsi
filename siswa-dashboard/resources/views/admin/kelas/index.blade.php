<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kelas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-72 bg-[#2a0a0a] text-white flex flex-col h-full shrink-0">
        <div class="flex flex-col items-center justify-center p-8 mt-12">
            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mb-6 shadow-md">
                <svg class="w-16 h-16 text-[#2a0a0a]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            </div>
            <h2 class="text-xl font-bold text-center tracking-wide">Admin</h2>
        </div>

        <nav class="flex-1 px-8 space-y-6 mt-8">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Beranda</span>
            </a>
            <a href="{{ route('admin.siswa.index') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M3 5v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2zm12 4c0 1.66-1.34 3-3 3s-3-1.34-3-3 1.34-3 3-3 3 1.34 3 3zm-9 8c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1H6v-1z"/></svg>
                <span>User</span>
            </a>
            <!-- Active state for Kelas menu -->
            <a href="{{ route('admin.kelas.index') }}" class="flex items-center space-x-4 text-white font-bold text-lg transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/></svg>
                <span>Kelas</span>
            </a>

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
        <header class="h-20 flex items-center px-8 w-full bg-white shadow-sm">
            <h1 class="text-2xl font-bold text-[#2a0a0a]">Manajemen Kelas</h1>
        </header>

        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 mt-4 rounded-lg flex flex-col gap-8">

            <!-- Success Message -->
            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded font-bold shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form Tambah Kelas -->
            <div class="bg-white p-6 rounded-md shadow-md">
                <h2 class="text-lg font-bold text-[#2a0a0a] mb-4">Tambah Kelas Baru</h2>
                <form action="{{ route('admin.kelas.store') }}" method="POST" class="flex gap-4 items-end">
                    @csrf
                    <div class="flex-1">
                        <label class="block text-gray-700 font-semibold mb-2">Nama Kelas (Contoh: XII IPA 1)</label>
                        <input type="text" name="name" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                        @error('name') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="bg-[#2a0a0a] text-white font-bold py-2 px-6 rounded hover:bg-[#3d1515] transition-colors h-[42px]">
                        Simpan
                    </button>
                </form>
            </div>

            <!-- Dark Table for Kelas -->
            <div class="bg-[#383838] rounded-md overflow-hidden shadow-lg border border-gray-600">
                <table class="w-full text-left border-collapse text-white text-sm">
                    <thead>
                        <tr class="bg-[#4a4a4a]">
                            <th class="p-4 border border-gray-600 font-semibold w-16 text-center">No</th>
                            <th class="p-4 border border-gray-600 font-semibold">Nama Kelas</th>
                            <th class="p-4 border border-gray-600 font-semibold w-32 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($kelasList as $index => $kelas)
                        <tr class="hover:bg-[#454545] transition-colors">
                            <td class="p-4 border border-gray-600 text-center">{{ $index + 1 }}</td>
                            <td class="p-4 border border-gray-600 font-bold">{{ $kelas->name }}</td>
                            <td class="p-4 border border-gray-600 text-center">
                                <form action="{{ route('admin.kelas.destroy', $kelas->id) }}" method="POST" onsubmit="return confirm('Hapus kelas ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-1 px-3 rounded transition-colors text-xs">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="p-6 border border-gray-600 text-center text-gray-400">Belum ada data kelas.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </main>

</body>
</html>