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
            <h1 class="text-2xl font-bold text-[#2a0a0a]">Edit Data Siswa: {{ $siswa->name }}</h1>
            <a href="{{ route('admin.siswa.index') }}" class="text-blue-500 hover:underline font-semibold">Batal</a>
        </header>

        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 rounded-lg flex justify-center items-start">
            
            <form action="{{ route('admin.siswa.update', $siswa->id) }}" method="POST" class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl">
                @csrf
                @method('PUT') <!-- Required by Laravel for update routes -->
                
                <div class="grid grid-cols-2 gap-6">
                    <div class="col-span-2">
                        <label class="block text-gray-700 font-bold mb-2">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name', $siswa->name) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-bold mb-2">NISN</label>
                        <input type="text" name="nisn" value="{{ old('nisn', $siswa->nisn) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                        @error('nisn') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Password Baru</label>
                        <input type="password" name="password" placeholder="Kosongkan jika tidak ingin diubah" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a] placeholder-gray-400">
                        @error('password') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Kelas</label>
                        <select name="class_name" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]" required>
                            @foreach($kelasList as $kelas)
                                <option value="{{ $kelas->name }}" {{ $siswa->class_name == $kelas->name ? 'selected' : '' }}>
                                    {{ $kelas->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Tempat Lahir</label>
                        <input type="text" name="birth_place" value="{{ old('birth_place', $siswa->birth_place) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]">
                    </div>

                    <div class="col-span-2">
                        <label class="block text-gray-700 font-bold mb-2">Tanggal Lahir</label>
                        <input type="date" name="birthdate" value="{{ old('birthdate', $siswa->birthdate) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#2a0a0a]">
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