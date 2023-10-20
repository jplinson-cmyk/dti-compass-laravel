<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesAssignController extends Controller
{
    public function index(Request $request)
    {
        $userSearch = $request->input('user_search');
        $users = []; // Initialize the variable to avoid undefined variable error
        
        if ($userSearch) {
            $users = User::where('firstname', 'like', '%' . $userSearch . '%')
                         ->orWhere('lastname', 'like', '%' . $userSearch . '%')
                         ->get();
        }
         
        return view('roles_assign.index', compact('users'));
    }
    

    public function getUserRoles(User $user)
    {
        $roles = $user->roles->pluck('name')->toArray();
        return response()->json($roles);
    }
}
