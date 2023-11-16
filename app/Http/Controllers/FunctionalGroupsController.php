<?php

namespace App\Http\Controllers;

use App\Models\FunctionalGroup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FunctionalGroupsController extends Controller
{
    public function index()
    {
        $functionalgroups = FunctionalGroup::latest()->paginate(10);

        return view('functionalgroups.index', compact('functionalgroups'));
    }


    public function create()
    {
        return view('functionalgroups.create');
    }


    public function store(Request $request)
    {
        FunctionalGroup::create(array_merge($request->only('name','short_name')));
        return redirect()->route('functionalgroups.index')
            ->withSuccess(__('Functional Group created successfully.'));
    }


    public function show(FunctionalGroup $functionalgroup)
    {
        return view('functionalgroups.show', [
            'functionalgroup' => $functionalgroup
        ]);
    }


    public function edit(FunctionalGroup $functionalgroup)
    {
        return view('functionalgroups.edit', [
            'functionalgroup' => $functionalgroup
        ]);
    }

    public function update(Request $request, FunctionalGroup $functionalgroup)
    {
        $functionalgroup->update($request->only('name','short_name'));
        return redirect()->route('functionalgroups.index')
            ->withSuccess(__('Functional Group updated successfully.'));
    }

   
    public function destroy(FunctionalGroup $functionalgroup)
    {
        $functionalgroup->delete();

        return redirect()->route('functionalgroups.index')
            ->withSuccess(__('Functional Group deleted successfully.'));
    }
}
