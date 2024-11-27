{{-- resources/views/users/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-6 text-center">Tambah User</h2>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" id="nama" name="nama" required class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" required class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select id="status" name="status" class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="karyawan">Karyawan</option>
                <option value="manager">Manager</option>
            </select>
        </div>
        <button type="submit" class="w-full py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Tambah User</button>
    </form>
</div>
@endsection
