<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MobilePhone;
use App\Models\Brand;
use App\Models\OperatingSystem;

class MobilePhoneController extends Controller
{
    public function index()
    {
        $mobilePhones = MobilePhone::with('brand', 'operatingSystem')->get();
        return view('mobile_phones.index', compact('mobilePhones'));
    }

    public function create()
    {
        $brands = Brand::all();
        $operatingSystems = OperatingSystem::all();
        return view('mobile_phones.create', compact('brands', 'operatingSystems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'cpu' => 'required',
            'ram' => 'required|integer',
            'brand_id' => 'required|exists:brands,id',
            'os_id' => 'required|exists:operating_systems,id',
            'launch_price' => 'required|numeric'
        ]);

        MobilePhone::create($request->all());
        return redirect()->route('mobile_phones.index')->with('success', 'Mobile Phone added successfully!');
    }

    public function show($id)
    {
        $mobilePhone = MobilePhone::with('brand', 'operatingSystem')->findOrFail($id);
        return view('mobile_phones.show', compact('mobilePhone'));
    }

    public function edit($id)
    {
        $mobilePhone = MobilePhone::findOrFail($id);
        $brands = Brand::all();
        $operatingSystems = OperatingSystem::all();
        return view('mobile_phones.edit', compact('mobilePhone', 'brands', 'operatingSystems'));
    }

    public function update(Request $request, $id)
    {
        $mobilePhone = MobilePhone::findOrFail($id);
        $mobilePhone->update($request->all());
        return redirect()->route('mobile_phones.index')->with('success', 'Mobile Phone updated successfully!');
    }

    public function destroy($id)
    {
        MobilePhone::destroy($id);
        return redirect()->route('mobile_phones.index')->with('success', 'Mobile Phone deleted successfully!');
    }
}
