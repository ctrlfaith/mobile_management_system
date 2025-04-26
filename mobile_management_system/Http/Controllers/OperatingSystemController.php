<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OperatingSystem;

class OperatingSystemController extends Controller
{
    public function index()
    {
        $operatingSystems = OperatingSystem::all();
        return view('operating_systems.index', compact('operatingSystems'));
    }

    public function create()
    {
        return view('operating_systems.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'version' => 'required'
        ]);

        OperatingSystem::create($request->all());
        return redirect()->route('operating_systems.index')->with('success', 'Operating System added successfully!');
    }

    public function show($id)
    {
        $operatingSystem = OperatingSystem::findOrFail($id);
        return view('operating_systems.show', compact('operatingSystem'));
    }

    public function edit($id)
    {
        $operatingSystem = OperatingSystem::findOrFail($id);
        return view('operating_systems.edit', compact('operatingSystem'));
    }

    public function update(Request $request, $id)
    {
        $operatingSystem = OperatingSystem::findOrFail($id);
        $operatingSystem->update($request->all());
        return redirect()->route('operating_systems.index')->with('success', 'Operating System updated successfully!');
    }

    public function destroy($id)
    {
        OperatingSystem::destroy($id);
        return redirect()->route('operating_systems.index')->with('success', 'Operating System deleted successfully!');
    }
}
