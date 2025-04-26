@extends('layouts.app')

@section('title', 'Mobile Phone Management')

@section('content')

<div class="flex flex-col items-center justify-center text-center mt-6">
    <h2 class="text-5xl font-extrabold flex items-center space-x-4">
        <img src="{{ asset('images/Mobile Phone Management.png') }}" alt="Mobile Phone" class="w-12 h-12">
        <span>Mobile Phone Management</span>
    </h2>
</div>

<div class="flex justify-between items-center bg-white p-4 rounded-lg shadow-lg mb-4 mt-10">
    <h3 class="text-2xl font-bold flex items-center space-x-2">
        <img src="{{ asset('images/icon-brand-list.png') }}" alt="Brand List Icon" class="w-6 h-6">
        <span>Mobile List</span>
    </h3>
    <a href="{{ route('mobile_phones.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
        ➕ Add Mobile
    </a>
</div>

<div class="bg-white p-6 rounded-lg shadow-lg">
    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border p-3">ID</th>
                <th class="border p-3">Model</th>
                <th class="border p-3">Brand</th>
                <th class="border p-3">OS</th>
                <th class="border p-3">RAM (GB)</th>
                <th class="border p-3">CPU</th>
                <th class="border p-3">Launch Price</th>
                <th class="border p-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mobilePhones as $mobile)
            <tr class="hover:bg-gray-50">
                <td class="border p-3 text-center">{{ $mobile->id }}</td>
                <td class="border p-3">{{ $mobile->model }}</td>
                <td class="border p-3">{{ $mobile->brand->name }}</td>
                <td class="border p-3">{{ $mobile->operatingSystem->name }} {{ $mobile->operatingSystem->version }}</td>
                <td class="border p-3">{{ $mobile->ram }}</td>
                <td class="border p-3">{{ $mobile->cpu }}</td>
                <td class="border p-3">฿{{ number_format($mobile->launch_price, 2) }}</td>
                <td class="border p-3 flex space-x-2 justify-center">
                    <a href="{{ route('mobile_phones.show', $mobile->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">🔍 View</a>
                    <a href="{{ route('mobile_phones.edit', $mobile->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">✏ Edit</a>
                    <form action="{{ route('mobile_phones.destroy', $mobile->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" onclick="return confirm('Are you sure?')">🗑 Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
