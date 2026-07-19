<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa Analisis</title>
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
            <a href="{{ route('analisis') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/></svg>
                <span>Analisis</span>
            </a>
            <form action="{{ route('logout') }}" method="POST" class="mt-8">
                @csrf
                <button type="submit" class="flex items-center space-x-4 text-red-400 hover:text-red-300 font-bold text-lg px-8">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
                    <span>Logout</span>
                </button>
            </form>
        </nav>
    </aside>

    <main class="flex-1 flex flex-col bg-white overflow-y-auto">
        <header class="h-20 flex items-center px-8 w-full bg-white">
            <button class="text-black focus:outline-none">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </header>

        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 rounded-lg flex flex-col">
            
            <div class="mb-6">
                <select class="border border-gray-400 rounded px-4 py-2 bg-white text-sm font-semibold shadow-sm focus:outline-none">
                    <option value="Seluruh Pelajaran">Seluruh Pelajaran</option>
                </select>
            </div>

            <div class="bg-[#383838] rounded-md overflow-hidden shadow-lg border border-gray-600">
                <table class="w-full text-left border-collapse text-white text-sm">
                    <thead>
                        <tr class="bg-[#4a4a4a]">
                            <th class="p-3 border border-gray-600 font-semibold w-12 text-center">No</th>
                            <th class="p-3 border border-gray-600 font-semibold">Mata Pelajaran</th>
                            <th class="p-3 border border-gray-600 font-semibold w-24 text-center">Semester 1</th>
                            <th class="p-3 border border-gray-600 font-semibold w-24 text-center">Semester 2</th>
                            <th class="p-3 border border-gray-600 font-semibold w-24 text-center">Semester 3</th>
                            <th class="p-3 border border-gray-600 font-semibold w-24 text-center">Semester 4</th>
                            <th class="p-3 border border-gray-600 font-semibold w-24 text-center">Semester 5</th>
                            <th class="p-3 border border-gray-600 font-semibold w-28 text-center">Performa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $index = 1; @endphp
                        @foreach($analisisData as $data)
                        <tr class="hover:bg-[#454545] transition-colors">
                            <td class="p-3 border border-gray-600 text-center">{{ $index++ }}</td>
                            <td class="p-3 border border-gray-600">{{ $data['mata_pelajaran'] }}</td>
                            <td class="p-3 border border-gray-600 text-center">{{ $data['semester_1'] }}</td>
                            <td class="p-3 border border-gray-600 text-center">{{ $data['semester_2'] }}</td>
                            <td class="p-3 border border-gray-600 text-center">{{ $data['semester_3'] }}</td>
                            <td class="p-3 border border-gray-600 text-center">{{ $data['semester_4'] }}</td>
                            <td class="p-3 border border-gray-600 text-center">{{ $data['semester_5'] }}</td>
                            <td class="p-3 border border-gray-600 text-center font-bold text-green-400">{{ $data['performa'] }}</td>
                        </tr>
                        @endforeach
                        
                        <!-- Empty rows filler to match the Figma visual design height -->
                        @for ($i = 0; $i < (12 - count($analisisData)); $i++)
                        <tr>
                            <td class="p-5 border border-gray-600"></td>
                            <td class="p-5 border border-gray-600"></td>
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