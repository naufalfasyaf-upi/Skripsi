<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#dcdcdc] font-sans antialiased h-screen flex items-center justify-center">

    <!-- Wrapping everything in a form tag so it's ready for backend logic later -->
    <!-- Update the form action and method -->
    <form action="{{ route('login.post') }}" method="POST" class="w-full max-w-4xl flex flex-col items-end px-4">
        @csrf <!-- THIS IS REQUIRED -->
        
        <!-- Add a spot to show login errors right above the dark brown container -->
        @error('username')
            <div class="w-full text-red-500 font-bold mb-4 text-center">{{ $message }}</div>
        @enderror
        
        <!-- Dark Brown Container -->
        <div class="bg-[#2a0a0a] w-full rounded-2xl py-20 px-10 flex items-center justify-center shadow-xl">
            
            <div class="flex items-center w-full max-w-2xl">
                <!-- Left Side: User Icon -->
                <div class="w-1/3 flex justify-center">
                    <svg class="text-white w-32 h-32" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </div>

                <!-- Right Side: Inputs -->
                <div class="w-2/3 flex flex-col gap-6 pl-8">
                    <!-- Username Input -->
                    <div class="flex items-center justify-between">
                        <label for="username" class="text-white font-semibold text-xl w-1/3">Username</label>
                        <input type="text" id="username" name="username" class="w-2/3 rounded-full px-4 py-2 text-black focus:outline-none focus:ring-2 focus:ring-gray-400" required>
                    </div>

                    <!-- Password Input -->
                    <div class="flex items-center justify-between">
                        <label for="password" class="text-white font-semibold text-xl w-1/3">Password</label>
                        <input type="password" id="password" name="password" class="w-2/3 rounded-full px-4 py-2 text-black focus:outline-none focus:ring-2 focus:ring-gray-400" required>
                    </div>
                </div>
            </div>

        </div>

        <!-- Floating Login Button -->
        <div class="mt-6 mr-8">
            <button type="submit" class="bg-white text-black font-bold py-2 px-12 rounded-lg shadow-md hover:bg-gray-100 transition-colors text-lg">
                Login
            </button>
        </div>

    </form>

</body>
</html>