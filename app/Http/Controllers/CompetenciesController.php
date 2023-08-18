<?php

namespace App\Http\Controllers;

use App\Models\Competency;
use App\Models\CompetencyCategory;
use Illuminate\Http\Request;

class CompetenciesController extends Controller
{

    public function index()
    {
        $competencies = Competency::latest()->paginate(10);

        return view('competencies.index', compact('competencies'));
    }

    public function create()
    {
        $categories = CompetencyCategory::all(); 
        
        return view('competencies.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Competency::create(array_merge($request->only('competency_category_id', 'name', 'description')));
     
        return redirect()->route('competencies.index')
            ->withSuccess(__('Competency created successfully.'));
    }

    public function show(Competency $competency)
    {
        return view('competencies.show', [
            'competencies' => $competency
        ]);
    }

    public function edit(Competency $competency)
    {
        $categories = CompetencyCategory::all();
    
        return view('competencies.edit', [
            'competencies' => $competency,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request, Competency $competency)
    {
        $competency->update($request->only('competency_category_id', 'name', 'description'));

        return redirect()->route('competencies.index')
            ->withSuccess(__('Competency updated successfully.'));
    }

    public function destroy(Competency $competency)
    {
        $competency->delete();

        return redirect()->route('competencies.index')
            ->withSuccess(__('Competency deleted successfully.'));
    }
}
