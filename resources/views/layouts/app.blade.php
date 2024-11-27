{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumpulan Tugas</title>
    @vite('resources/css/app.css') 
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav class="bg-blue-600 p-4">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <a href="{{ url('/') }}" class="text-white text-xl font-bold">Pengumpulan Tugas</a>
                <div>
                    @auth
                         <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-white">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-white mr-4">Login</a>
                        <a href="{{ route('register') }}" class="text-white">Register</a>
                    @endauth
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-grow">
            @yield('content')
        </main>

        <!-- Footer -->
       
    </div>
</body>
</html>
