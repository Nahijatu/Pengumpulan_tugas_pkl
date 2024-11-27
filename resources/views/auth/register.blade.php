<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md p-8 space-y-4 bg-white rounded shadow">
        <h2 class="text-2xl font-bold text-center">Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="nama" class="block text-sm font-medium">Name</label>
                <input type="text" name="nama" id="nama" required
                    class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
            </div>
            <div>
                <label for="status" class="block text-sm font-medium">Status</label>
                <select id="status" name="status" required
                    class="w-full mt-1 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
                    <option value="karyawan">Karyawan</option>
                    <option value="manager">Manager</option>
                </select>
            </div>
            <button type="submit"
                class="w-full mt-4 bg-indigo-500 text-white py-2 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-200">
                Register
            </button>
        </form>
    </div>
</body>
</html>
