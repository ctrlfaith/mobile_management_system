<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:brands']);
        Brand::create($request->all());
        return redirect()->route('brands.index')->with('success', 'Brand added successfully!');
    }

    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brands.show', compact('brand'));
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brands.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->update($request->all());
        return redirect()->route('brands.index')->with('success', 'Brand updated successfully!');
    }

    public function destroy($id)
    {
        Brand::destroy($id);
        return redirect()->route('brands.index')->with('success', 'Brand deleted successfully!');
    }
}
