<?php

namespace App\Http\Controllers;

use App\Models\CompetencyCategory;
use Illuminate\Http\Request;

class CompetencyCategoriesController extends Controller
{

    public function index()
    {
        $competency_categories = CompetencyCategory::latest()->paginate(10);

        return view('competency_categories.index', compact('competency_categories'));
    }

    public function create()
    {
        return view('competency_categories.create');
    }

    public function store(Request $request)
    {
        CompetencyCategory::create(array_merge($request->only('category_name')));

        return redirect()->route('competency_categories.index')
            ->withSuccess(__('Competency Category created successfully.'));
    }

    public function show(CompetencyCategory $competencyCategory)
    {
        return view('competency_categories.show', [
            'competency_categories' => $competencyCategory
        ]);
    }

    public function edit(CompetencyCategory $competencyCategory)
    {
        return view('competency_categories.edit', [
            'competency_categories' => $competencyCategory
        ]);
    }

    public function update(Request $request, CompetencyCategory $competencyCategory)
    {
        $competencyCategory->update($request->only('category_name'));

        return redirect()->route('competency_categories.index')
            ->withSuccess(__('Competency Category updated successfully.'));
    }

    public function destroy(CompetencyCategory $competencyCategory)
    {
        $competencyCategory->delete();

        return redirect()->route('competency_categories.index')
            ->withSuccess(__('Competency Category deleted successfully.'));
    }
}
