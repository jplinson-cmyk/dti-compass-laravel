<?php

namespace App\Http\Controllers;

use App\Models\CompetencySet;
use App\Models\FunctionalGroup;
use App\Models\BureauOffice;
use App\Models\Division;
use App\Models\Position;
use App\Models\Competency;

use Illuminate\Http\Request;

class CompetencySetsController extends Controller
{
    public function index(Request $request)
    {
        $column = $request->input('column', 'id');
        $order = $request->input('order', 'asc');

        $competency_sets = CompetencySet::orderBy($column, $order)->paginate(20);

        return view('competency_sets.index', compact('competency_sets'));
    }

    public function create()
    {
        $functional_groups = FunctionalGroup::all();
        $bureau_offices = BureauOffice::all();
        $competency_sets = CompetencySet::all();
        $divisions = Division::all();
        $positions = Position::all();
        $competencies = Competency::all();


        return view('competency_sets.create', compact('competency_sets', 'functional_groups', 'bureau_offices', 'divisions', 'positions', 'competencies',));
    }

    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'functional_group_id' => 'required',
            'bureau_office_id' => 'required',
            'competency_id' => 'required',
            'division_id' => 'required',
            'position_id' => 'required',
            'standard' => 'required',
        ]);

        // dd($validatedData);

        
        CompetencySet::create($validatedData);

        return redirect()->route('competency_sets.index')
            ->withSuccess(__('Competency created successfully.'));
    }



    public function show(CompetencySet $competencySet)
    {
        return view('competency_sets.show', [
            'competency_sets' => $competencySet
        ]);
    }

    public function edit(CompetencySet $competencySet)
    {
        $functional_groups = FunctionalGroup::all();
        $bureau_offices = BureauOffice::all();
        $divisions = Division::all();
        $positions = Position::all();
        $competencies = Competency::all();

        return view('competency_sets.edit', compact('competencySet', 'functional_groups', 'bureau_offices', 'divisions', 'positions', 'competencies'));
    }

    public function update(Request $request, CompetencySet $competencySet)
    {
        $competencySet->update($request->only('functional_group_id', 'bureau_office_id', 'division_id', 'position_id', 'competency_id', 'standard'));

        return redirect()->route('competency_sets.index')
            ->withSuccess(__('Competency Set updated successfully.'));
    }

    public function destroy(CompetencySet $competencySet)
    {
        $competencySet->delete();

        return redirect()->route('competency_sets.index')
            ->withSuccess(__('Competency Set deleted successfully.'));
    }
}
