<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis Akademik</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-72 bg-[#2a0a0a] text-white flex flex-col h-full shrink-0">
        <div class="flex flex-col items-center justify-center p-8 mt-12">
            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mb-6">
                <svg class="w-16 h-16 text-[#2a0a0a]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            </div>
            <h2 class="text-xl font-bold text-center">{{ auth()->user()->name }}</h2>
            <p class="text-sm text-gray-300 mt-2">{{ auth()->user()->class_name }}</p>
        </div>

        <nav class="flex-1 px-8 space-y-6 mt-8">
            <a href="{{ route('dashboard') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                <span>Beranda</span>
            </a>
            <a href="{{ route('portofolio') }}" class="flex items-center space-x-4 text-white hover:text-gray-300 font-bold text-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                <span>Portfolio</span>
            </a>
            <a href="{{ route('analisis') }}" class="flex items-center space-x-4 text-white font-bold text-lg">
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
        <div class="flex-1 bg-[#dcdcdc] p-8 m-8 rounded-lg flex flex-col">
            
            <!-- Filter Dropdown -->
            <div class="mb-6">
                <select class="border border-gray-400 rounded px-4 py-2 bg-white text-sm font-semibold shadow-sm focus:outline-none">
                    <option>Seluruh Pelajaran</option>
                </select>
            </div>

            <!-- Analisis Table -->
            <div class="bg-[#383838] rounded-md overflow-hidden shadow-lg border border-gray-600 flex-1">
                <table class="w-full text-left border-collapse text-white text-sm">
                    <thead>
                        <tr class="bg-[#4a4a4a]">
                            <th class="p-4 border-b border-gray-600 font-semibold w-12 text-center">No</th>
                            <th class="p-4 border-b border-gray-600 font-semibold">Mata Pelajaran</th>
                            <th class="p-4 border-b border-gray-600 font-semibold text-center w-20">Semester<br>1</th>
                            <th class="p-4 border-b border-gray-600 font-semibold text-center w-20">Semester<br>2</th>
                            <th class="p-4 border-b border-gray-600 font-semibold text-center w-20">Semester<br>3</th>
                            <th class="p-4 border-b border-gray-600 font-semibold text-center w-20">Semester<br>4</th>
                            <th class="p-4 border-b border-gray-600 font-semibold text-center w-20">Semester<br>5</th>
                            <th class="p-4 border-b border-gray-600 font-semibold text-center w-20">Semester<br>6</th>
                            <th class="p-4 border-b border-gray-600 font-semibold text-center w-24">Performa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @forelse($analisisData as $subject => $grades)
                        <tr class="hover:bg-[#454545] transition-colors border-b border-gray-600">
                            <td class="p-4 text-center border-r border-gray-600">{{ $i++ }}</td>
                            <td class="p-4 border-r border-gray-600 font-medium">{{ $subject }}</td>
                            <td class="p-4 text-center border-r border-gray-600">{{ $grades[1] }}</td>
                            <td class="p-4 text-center border-r border-gray-600">{{ $grades[2] }}</td>
                            <td class="p-4 text-center border-r border-gray-600">{{ $grades[3] }}</td>
                            <td class="p-4 text-center border-r border-gray-600">{{ $grades[4] }}</td>
                            <td class="p-4 text-center border-r border-gray-600">{{ $grades[5] }}</td>
                            <td class="p-4 text-center border-r border-gray-600">{{ $grades[6] }}</td>
                            <td class="p-4 text-center font-bold text-green-400">{{ $grades['performa'] }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="p-8 text-center text-gray-400">Belum ada data nilai yang cukup untuk dianalisis.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </main>

</body>
</html>