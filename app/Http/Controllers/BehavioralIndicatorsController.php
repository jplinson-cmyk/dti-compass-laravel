<?php

namespace App\Http\Controllers;

use App\Models\Competency;
use App\Models\BehavioralIndicator;
use Illuminate\Http\Request;

class BehavioralIndicatorsController extends Controller
{
    public function index()
    {
        $behavioralIndicators = BehavioralIndicator::with('competency.competencyCategory')->latest()->get();
    
        return view('behavioral_indicators.index', compact('behavioralIndicators'));
    }

    public function create()
    {
        $competencies = Competency::with('competencyCategory')->get();
    
        return view('behavioral_indicators.create', compact('competencies'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'competency_id' => 'required',
            'description' => 'required',
            'level' => 'required|in:1,2,3,4',
        ]);

        BehavioralIndicator::create($validatedData);

        return redirect()->route('behavioral_indicators.index')
            ->withSuccess('Behavioral Indicator created successfully.');
    }

    public function show(BehavioralIndicator $behavioralIndicator)
    {
        return view('behavioral_indicators.show', compact('behavioralIndicator'));
    }

    public function edit(BehavioralIndicator $behavioralIndicator)
    {
        $competencies = Competency::with('competencyCategory')->get();

        return view('behavioral_indicators.edit', compact('behavioralIndicator', 'competencies'));
    }

    public function update(Request $request, BehavioralIndicator $behavioralIndicator)
    {
        $validatedData = $request->validate([
            'competency_id' => 'required',
            'description' => 'required',
            'level' => 'required|in:1,2,3,4',
        ]);
    
        $behavioralIndicator->update($validatedData);
    
        return redirect()->route('behavioral_indicators.index')
            ->withSuccess('Behavioral Indicator updated successfully.');
    }

    public function destroy(BehavioralIndicator $behavioralIndicator)
    {
        $behavioralIndicator->delete();

        return redirect()->route('behavioral_indicators.index')
            ->withSuccess('Behavioral Indicator deleted successfully.');
    }
}
