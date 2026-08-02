<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased flex h-screen overflow-hidden">

    <main class="flex-1 flex flex-col bg-white overflow-y-auto">
        <header class="h-20 flex items-center px-8 w-full bg-white shadow-sm justify-between">
            <h1 class="text-2xl font-bold text-[#2a0a0a]">Tambah Guru Baru</h1>
            <a href="{{ route('admin.guru.index') }}" class="text-blue-500 hover:underline font-semibold">Batal</a>
        </header>

        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 rounded-lg flex justify-center items-start">
            
            <form action="{{ route('admin.guru.store') }}" method="POST" class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl">
                @csrf
                
                <div class="grid grid-cols-2 gap-6">
                    <!-- Nama Lengkap -->
                    <div class="col-span-2">
                        <label class="block text-gray-700 font-bold mb-2">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Contoh: Budi Santoso, S.Pd" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                        @error('name') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <!-- NIP -->
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">NIP</label>
                        <input type="text" name="nip" value="{{ old('nip') }}" placeholder="Nomor Induk Pegawai" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                        @error('nip') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Password Login</label>
                        <input type="password" name="password" placeholder="Minimal 6 karakter" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                        @error('password') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <!-- Mata Pelajaran Dropdown (Uses subject_id) -->
                    <div class="col-span-2">
                        <label class="block text-gray-700 font-bold mb-2">Mata Pelajaran yang Diajarkan</label>
                        <select name="subject_id" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                            <option value="" disabled selected>-- Pilih Mata Pelajaran --</option>
                            @foreach($mapelList as $mapel)
                                <option value="{{ $mapel->id }}" {{ old('subject_id') == $mapel->id ? 'selected' : '' }}>
                                    {{ $mapel->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('subject_id') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="mt-8 flex justify-end">
                    <button type="submit" class="bg-[#2a0a0a] text-white font-bold py-2 px-8 rounded hover:bg-[#3d1515] transition-colors">
                        Simpan Akun Guru
                    </button>
                </div>
            </form>

        </div>
    </main>

</body>
</html>