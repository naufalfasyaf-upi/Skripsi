<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased flex h-screen overflow-hidden">

    <main class="flex-1 flex flex-col bg-white overflow-y-auto">
        <header class="h-20 flex items-center px-8 w-full bg-white shadow-sm justify-between">
            <h1 class="text-2xl font-bold text-[#2a0a0a]">Tambah Kelas Baru</h1>
            <a href="{{ route('admin.kelas.index') }}" class="text-blue-500 hover:underline">Batal</a>
        </header>

        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 rounded-lg flex justify-center items-start">
            
            <form action="{{ route('admin.kelas.store') }}" method="POST" class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
                @csrf
                
                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2">Nama Kelas</label>
                    <input type="text" name="name" placeholder="Contoh: X IPA 1" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                    @error('name') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                </div>

                <div class="mb-8">
                    <label class="block text-gray-700 font-bold mb-2">Tingkat Kelas (Grade Level)</label>
                    <select name="grade_level" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                        <option value="" disabled selected>-- Pilih Tingkat Kelas --</option>
                        <option value="X">Kelas X (10)</option>
                        <option value="XI">Kelas XI (11)</option>
                        <option value="XII">Kelas XII (12)</option>
                    </select>
                    @error('grade_level') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                    <p class="text-xs text-gray-500 mt-2">*Tingkat kelas digunakan sistem untuk menghitung semester pada halaman Analisis.</p>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-[#2a0a0a] text-white font-bold py-2 px-8 rounded hover:bg-[#3d1515] transition-colors w-full">
                        Simpan Kelas
                    </button>
                </div>
            </form>

        </div>
    </main>

</body>
</html>