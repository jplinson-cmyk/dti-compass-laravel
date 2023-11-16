<?php

namespace App\Http\Controllers;

use App\Models\BureauOffice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BureausOfficesController extends Controller
{
    public function index()
    {
        $bureaus_offices = BureauOffice::latest()->paginate(10);

        return view('bureaus_offices.index', compact('bureaus_offices'));
    }


    public function create()
    {
        return view('bureaus_offices.create');
    }


    public function store(Request $request)
    {
        BureauOffice::create(array_merge($request->only('name','short_name')));
        return redirect()->route('bureaus_offices.index')
            ->withSuccess(__('Bureaus Offices created successfully.'));
    }


    public function show(BureauOffice $bureau_office)
    {
        return view('bureaus_offices.show', [
            'bureau_office' => $bureau_office
        ]);
    }


    public function edit(BureauOffice $bureau_office)
    {
        return view('bureaus_offices.edit', [
            'bureau_office' => $bureau_office
        ]);
    }

    public function update(Request $request, BureauOffice $bureau_office)
    {
        $bureau_office->update($request->only('name','short_name'));
        return redirect()->route('bureaus_offices.index')
            ->withSuccess(__('Bureaus Offices updated successfully.'));
    }

   
    public function destroy(BureauOffice $bureau_office)
    {
        $bureau_office->delete();

        return redirect()->route('bureaus_offices.index')
            ->withSuccess(__('Bureaus Offices deleted successfully.'));
    }
}
