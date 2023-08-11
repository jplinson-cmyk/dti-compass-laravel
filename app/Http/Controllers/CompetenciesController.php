<?php

namespace App\Http\Controllers;

use App\Models\Competency;

use Illuminate\Http\Request;

class CompetenciesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competencies = Competency::latest()->paginate(10);

        return view('competencies.index', compact('competencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('competencies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Competency::create(array_merge($request->only('competency_category_id', 'name', 'description')));
     
        return redirect()->route('competencies.index')
            ->withSuccess(__('Competency created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Competency $competency)
    {
        return view('competencies.show', [
            'competencies' => $competency
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Competency $competency)
    {
        return view('competencies.edit', [
            'competencies' => $competency
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Competency  $competency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competency $competency)
    {
        $competency->update($request->only('competency_category_id', 'name', 'description'));

        return redirect()->route('competencies.index')
            ->withSuccess(__('Competency updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competency  $competency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competency $competency)
    {
        $competency->delete();

        return redirect()->route('competencies.index')
            ->withSuccess(__('Competency deleted successfully.'));
    }
}
