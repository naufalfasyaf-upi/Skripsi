<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased flex h-screen overflow-hidden">

    <main class="flex-1 flex flex-col bg-white overflow-y-auto">
        <header class="h-20 flex items-center px-8 w-full bg-white shadow-sm justify-between">
            <h1 class="text-2xl font-bold text-[#2a0a0a]">Edit Data Siswa: {{ $siswa->full_name }}</h1>
            <a href="{{ route('admin.siswa.index') }}" class="text-blue-500 hover:underline font-semibold">Batal</a>
        </header>

        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 rounded-lg flex justify-center items-start">
            
            <form action="{{ route('admin.siswa.update', $siswa->id) }}" method="POST" class="bg-white p-8 rounded-lg shadow-md w-full max-w-4xl">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-2 gap-6">
                    <div class="col-span-2">
                        <label class="block text-gray-700 font-bold mb-2">Nama Lengkap</label>
                        <input type="text" name="full_name" value="{{ old('full_name', $siswa->full_name) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-bold mb-2">NISN</label>
                        <input type="text" name="nisn" value="{{ old('nisn', $siswa->nisn) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-bold mb-2">NIS</label>
                        <input type="text" name="nis" value="{{ old('nis', $siswa->nis) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                    </div>

                    <!-- RIWAYAT KELAS (3 Dropdowns) -->
                    <div class="col-span-2 bg-gray-50 p-4 rounded-lg border border-gray-200">
                        <label class="block text-[#2a0a0a] font-bold mb-4 text-lg border-b pb-2">Riwayat Kelas Siswa</label>
                        
                        @php
                            // Finds the student's specific class for each grade level to pre-select it
                            $classX = $siswa->classes->where('grade_level', 'X')->first();
                            $classXI = $siswa->classes->where('grade_level', 'XI')->first();
                            $classXII = $siswa->classes->where('grade_level', 'XII')->first();
                        @endphp

                        <div class="grid grid-cols-3 gap-4">
                            <!-- Dropdown Kelas X -->
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2 text-sm">Kelas X</label>
                                <select name="class_x" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]">
                                    <option value="">-- Belum Ada --</option>
                                    @foreach($kelasList->where('grade_level', 'X') as $kelas)
                                        <option value="{{ $kelas->id }}" {{ old('class_x', $classX->id ?? '') == $kelas->id ? 'selected' : '' }}>
                                            {{ $kelas->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Dropdown Kelas XI -->
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2 text-sm">Kelas XI</label>
                                <select name="class_xi" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]">
                                    <option value="">-- Belum Ada --</option>
                                    @foreach($kelasList->where('grade_level', 'XI') as $kelas)
                                        <option value="{{ $kelas->id }}" {{ old('class_xi', $classXI->id ?? '') == $kelas->id ? 'selected' : '' }}>
                                            {{ $kelas->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Dropdown Kelas XII -->
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2 text-sm">Kelas XII</label>
                                <select name="class_xii" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]">
                                    <option value="">-- Belum Ada --</option>
                                    @foreach($kelasList->where('grade_level', 'XII') as $kelas)
                                        <option value="{{ $kelas->id }}" {{ old('class_xii', $classXII->id ?? '') == $kelas->id ? 'selected' : '' }}>
                                            {{ $kelas->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $siswa->tempat_lahir) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                    </div>

                    <div class="col-span-2">
                        <label class="block text-gray-700 font-bold mb-2">Password Baru (Opsional)</label>
                        <input type="password" name="password" placeholder="Kosongkan jika tidak ingin diubah" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a] placeholder-gray-400">
                    </div>
                </div>

                <div class="mt-8 flex justify-end">
                    <button type="submit" class="bg-[#2a0a0a] text-white font-bold py-2 px-8 rounded hover:bg-[#3d1515] transition-colors">
                        Simpan Perubahan
                    </button>
                </div>
            </form>

        </div>
    </main>

</body>
</html>