@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-6 text-center">Edit Pengumpulan</h2>

    <form method="POST" action="{{ route('pengumpulan.update', $pengumpulan->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="nama_tugas" class="block text-sm font-medium text-gray-700">Nama Tugas</label>
        <input type="text" id="nama_tugas" name="nama_tugas" value="{{ old('nama_tugas', $pengumpulan->nama_tugas) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
        <label for="tanggal_deadline" class="block text-sm font-medium text-gray-700">Tanggal Deadline</label>
        <input type="date" id="tanggal_deadline" name="tanggal_deadline" value="{{ old('tanggal_deadline', $pengumpulan->tanggal_deadline) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
        <select id="status" name="status" class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="proses" {{ old('status', $pengumpulan->status) == 'proses' ? 'selected' : '' }}>Proses</option>
            <option value="selesai" {{ old('status', $pengumpulan->status) == 'selesai' ? 'selected' : '' }}>Selesai</option>
        </select>
    </div>

    <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Update Pengumpulan</button>
</form>

</div>
@endsection
