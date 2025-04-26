@extends('layouts.app')

@section('title', 'Edit Brand')

@section('content')

<h2 class="text-3xl font-bold text-center">✏ Edit Brand</h2>

<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg mt-6">
    <form action="{{ route('brands.update', $brand->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label class="block text-gray-700 font-bold">Brand Name:</label>
        <input type="text" name="name" class="w-full border p-2 rounded mt-2" value="{{ $brand->name }}" required>

        <div class="flex justify-between mt-4">
            <a href="{{ route('brands.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded shadow-md hover:bg-gray-400">
                🔙 Back to Brand List
            </a>
            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                ✏ Update Brand
            </button>
        </div>
    </form>
</div>

@endsection
