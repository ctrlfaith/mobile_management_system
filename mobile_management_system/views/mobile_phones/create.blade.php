@extends('layouts.app')

@section('title', 'Add New Mobile Phone')

@section('content')

<h2 class="text-3xl font-bold text-center">➕ Add New Mobile Phone</h2>

<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg mt-6">
    <form action="{{ route('mobile_phones.store') }}" method="POST">
        @csrf

        <label class="block text-gray-700 font-bold">Model:</label>
        <input type="text" name="model" class="w-full border p-2 rounded mt-2" required>

        <label class="block text-gray-700 font-bold mt-2">Brand:</label>
        <select name="brand_id" class="w-full border p-2 rounded mt-2" required>
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>

        <label class="block text-gray-700 font-bold mt-2">Operating System:</label>
        <select name="os_id" class="w-full border p-2 rounded mt-2" required>
            @foreach ($operatingSystems as $os)
                <option value="{{ $os->id }}">{{ $os->name }} {{ $os->version }}</option>
            @endforeach
        </select>

        <label class="block text-gray-700 font-bold mt-2">CPU:</label>
        <input type="text" name="cpu" class="w-full border p-2 rounded mt-2" required placeholder="Enter CPU Model">

        <label class="block text-gray-700 font-bold mt-2">RAM (GB):</label>
        <select name="ram" class="w-full border p-2 rounded mt-2" required>
            <option value="2">2 GB</option>
            <option value="4">4 GB</option>
            <option value="6">6 GB</option>
            <option value="8">8 GB</option>
            <option value="12">12 GB</option>
            <option value="16">16 GB</option>
            <option value="32">32 GB</option>
        </select>

        <label class="block text-gray-700 font-bold mt-2">Launch Price:</label>
        <input type="number" name="launch_price" class="w-full border p-2 rounded mt-2" required>

        <div class="flex justify-between mt-4">
            <a href="{{ route('mobile_phones.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded shadow-md hover:bg-gray-400">
                🔙 Back to Mobile List
            </a>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                ➕ Add Mobile
            </button>
        </div>
    </form>
</div>

@endsection
