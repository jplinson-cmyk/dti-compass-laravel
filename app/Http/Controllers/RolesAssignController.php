<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolesAssignController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::all();
        list($users, $usersForAutocomplete) = $this->getUsersBySearchQuery($request);

        return view('roles_assign.index', compact('users', 'roles', 'usersForAutocomplete'));
    }

    public function assign(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'roles' => 'required|array',
        ]);

        $user = User::findOrFail($request->input('user_id'));
        $roles = $request->input('roles');

        $user->syncRoles($roles);

        return redirect()->route('roles_assign.index')
            ->with('success', 'Roles assigned successfully to user.');
    }

    public function searchUsers(Request $request)
    {
        $searchQuery = $request->input('q');

        $users = User::where('firstname', 'like', '%' . $searchQuery . '%')
            ->orWhere('lastname', 'like', '%' . $searchQuery . '%')
            ->get();

        return response()->json($users);
    }

    public function getUserRoles($userId)
    {
        $user = User::findOrFail($userId);
        $roles = $user->getRoleNames();

        return response()->json(['roles' => $roles]);
    }

    private function getUsersBySearchQuery(Request $request)
    {
        $users = [];
        $usersForAutocomplete = [];

        if ($request->has('user_search') || $request->has('q')) {
            $searchQuery = $request->has('user_search') ? $request->input('user_search') : $request->input('q');
            
            $users = User::where('firstname', 'like', '%' . $searchQuery . '%')
                ->orWhere('lastname', 'like', '%' . $searchQuery . '%')
                ->get();

            $usersForAutocomplete = User::where('firstname', 'like', '%' . $searchQuery . '%')
                ->orWhere('lastname', 'like', '%' . $searchQuery . '%')
                ->get();
        }

        return [$users, $usersForAutocomplete];
    }
}
