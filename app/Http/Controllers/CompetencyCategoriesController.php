<?php

namespace App\Http\Controllers;

use App\Models\CompetencyCategory;
use Illuminate\Http\Request;

class CompetencyCategoriesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competency_categories = CompetencyCategory::latest()->paginate(10);

        return view('competency_categories.index', compact('competency_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('competency_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CompetencyCategory::create(array_merge($request->only('category_name')));

        return redirect()->route('competency_categories.index')
            ->withSuccess(__('Competency Category created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(CompetencyCategory $competencyCategory)
    {
        return view('competency_categories.show', [
            'competency_categories' => $competencyCategory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(CompetencyCategory $competencyCategory)
    {
        return view('competency_categories.edit', [
            'competency_categories' => $competencyCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompetencyCategory  $competencyCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompetencyCategory $competencyCategory)
    {
        $competencyCategory->update($request->only('category_name'));

        return redirect()->route('competency_categories.index')
            ->withSuccess(__('Competency Category updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompetencyCategory  $competencyCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompetencyCategory $competencyCategory)
    {
        $competencyCategory->delete();

        return redirect()->route('competency_categories.index')
            ->withSuccess(__('Competency Category deleted successfully.'));
    }
}
