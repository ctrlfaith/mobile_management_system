@extends('layouts.app')

@section('title', 'Brand Details')

@section('content')

<h2 class="text-3xl font-bold text-center">🔍 Brand Details</h2>

<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg mt-6">
    <p class="text-lg border-b pb-2"><span class="font-bold">Brand ID:</span> {{ $brand->id }}</p>
    <p class="text-lg border-b pb-2 mt-2"><span class="font-bold">Brand Name:</span> {{ $brand->name }}</p>


    <div class="mt-4 text-center">
        <a href="{{ route('brands.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded shadow-md hover:bg-gray-400">
            🔙 Back to Brand List
        </a>
    </div>
</div>

@endsection
