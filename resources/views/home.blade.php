@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5 text-center">Daftar Pengumpulan</h1>
    
    <div class="overflow-x-auto">
        <table class="table-auto border-collapse border border-gray-200 w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2 text-left">Nama Tugas</th>
                    <th class="border px-4 py-2 text-left">Tanggal Deadline</th>
                    <th class="border px-4 py-2 text-left">Status</th>
                </tr>
            </thead>
            <tbody>
            @foreach($pengumpulans as $pengumpulan)
                <tr>
                    <td class="border px-4 py-2">{{ $pengumpulan->nama_tugas }}</td>
                    <td class="border px-4 py-2">{{ $pengumpulan->tanggal_deadline }}</td>
                    <td class="border px-4 py-2">{{ $pengumpulan->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection