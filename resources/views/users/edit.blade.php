{{-- resources/views/users/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-6 text-center">Edit User</h2>
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select id="status" name="status" class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="karyawan" {{ $user->status === 'karyawan' ? 'selected' : '' }}>Karyawan</option>
                <option value="manager" {{ $user->status === 'manager' ? 'selected' : '' }}>Manager</option>
            </select>
        </div>
        <button type="submit" class="w-full py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Update User</button>
    </form>
</div>
@endsection
