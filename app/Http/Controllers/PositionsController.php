<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PositionsController extends Controller
{
    public function index()
    {
        $positions = Position::latest()->paginate(10);

        return view('positions.index', compact('positions'));
    }


    public function create()
    {
        return view('positions.create');
    }


    public function store(Request $request)
    {
        Position::create(array_merge($request->only('name','short_name')));
        return redirect()->route('positions.index')
            ->withSuccess(__('Position created successfully.'));
    }


    public function show(Position $position)
    {
        return view('positions.show', [
            'position' => $position
        ]);
    }


    public function edit(Position $position)
    {
        return view('positions.edit', [
            'position' => $position
        ]);
    }

    public function update(Request $request, Position $position)
    {
        $position->update($request->only('name','short_name'));
        return redirect()->route('positions.index')
            ->withSuccess(__('Position updated successfully.'));
    }

   
    public function destroy(Position $position)
    {
        $position->delete();

        return redirect()->route('positions.index')
            ->withSuccess(__('Position deleted successfully.'));
    }
}
