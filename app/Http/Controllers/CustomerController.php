<?php

namespace App\Http\Controllers;

use App\Models\User;
use DataTables;

class CustomerController extends Controller
{
    /**
     * Show the form for creating the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function draw()
    {
            $model = User::query();
            
            return DataTables::eloquent($model)
                ->addColumn('intro', 'Hi {{$name}}!')
                ->make(false);
    }
}
