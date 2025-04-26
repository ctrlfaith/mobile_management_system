@extends('layouts.app')

@section('title', 'Edit Mobile Phone')

@section('content')

<h2 class="text-3xl font-bold text-center">✏ Edit Mobile Phone</h2>

<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg mt-6">
    <form action="{{ route('mobile_phones.update', $mobilePhone->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label class="block text-gray-700 font-bold">Model:</label>
        <input type="text" name="model" class="w-full border p-2 rounded mt-2" value="{{ $mobilePhone->model }}" required>

        <label class="block text-gray-700 font-bold mt-2">Brand:</label>
        <select name="brand_id" class="w-full border p-2 rounded mt-2" required>
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}" {{ $brand->id == $mobilePhone->brand_id ? 'selected' : '' }}>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>

        <label class="block text-gray-700 font-bold mt-2">Operating System:</label>
        <select name="os_id" class="w-full border p-2 rounded mt-2" required>
            @foreach ($operatingSystems as $os)
                <option value="{{ $os->id }}" {{ $os->id == $mobilePhone->os_id ? 'selected' : '' }}>
                    {{ $os->name }} {{ $os->version }}
                </option>
            @endforeach
        </select>

        <label class="block text-gray-700 font-bold mt-2">CPU:</label>
        <input type="text" name="cpu" class="w-full border p-2 rounded mt-2" value="{{ $mobilePhone->cpu }}" required>

        <label class="block text-gray-700 font-bold mt-2">RAM (GB):</label>
        <input type="number" name="ram" class="w-full border p-2 rounded mt-2" value="{{ $mobilePhone->ram }}" required>

        <label class="block text-gray-700 font-bold mt-2">Launch Price:</label>
        <input type="number" name="launch_price" class="w-full border p-2 rounded mt-2" value="{{ $mobilePhone->launch_price }}" required>

        <div class="flex justify-between mt-4">
            <a href="{{ route('mobile_phones.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded shadow-md hover:bg-gray-400">
                🔙 Back to Mobile List
            </a>
            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                ✏ Update Mobile
            </button>
        </div>
    </form>
</div>

@endsection
