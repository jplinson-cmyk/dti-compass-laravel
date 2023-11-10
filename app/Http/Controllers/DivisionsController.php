<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DivisionsController extends Controller
{

    public function index()
    {
        $divisions = Division::latest()->paginate(10);

        return view('divisions.index', compact('divisions'));
    }


    public function create()
    {
        return view('divisions.create');
    }


    public function store(Request $request)
    {
        Division::create(array_merge($request->only('name','short_name')));
        return redirect()->route('divisions.index')
            ->withSuccess(__('Division created successfully.'));
    }


    public function show(Division $division)
    {
        return view('divisions.show', [
            'division' => $division
        ]);
    }


    public function edit(Division $division)
    {
        return view('divisions.edit', [
            'division' => $division
        ]);
    }

    public function update(Request $request, Division $Division)
    {
        $Division->update($request->only('name','short_name'));
        return redirect()->route('divisions.index')
            ->withSuccess(__('Division updated successfully.'));
    }

   
    public function destroy(Division $division)
    {
        $division->delete();

        return redirect()->route('divisions.index')
            ->withSuccess(__('Division deleted successfully.'));
    }
}
