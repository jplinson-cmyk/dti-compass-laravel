@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Assign Roles to User</h1>
        <div class="lead">
            Search for a user and assign roles to them.
        </div>

        <div class="container mt-4">
            <!-- User Search Form -->
            <form method="GET" action="{{ route('roles_assign.index') }}">
                <div class="mb-3">
                    <label for="user_search" class="form-label">Search User</label>
                    <input type="text" class="form-control" name="user_search" id="user_search" placeholder="Search User">
                </div>
            </form>

            <div id="user_search_results" class="mt-3">
                @foreach ($users as $user)
                    <div class="user-result" data-user-id="{{ $user->id }}">
                        <button class="btn btn-link user-link" data-user-id="{{ $user->id }}">
                            {{ $user->firstname }} {{ $user->lastname }}
                        </button>
                    </div>
                @endforeach
            </div>
            
            <!-- Display User Assigned Roles -->
            <div id="user_roles" class="mt-3">
                <!-- Display assigned roles here -->
            </div>
        </div>
    </div>

    <script>
        // AJAX Request to get user's assigned roles
        function getUserRoles(userId) {
            $.get('{{ route('roles_assign.index') }}/' + userId + '/get-user-roles', function (data) {
                $('#user_roles').html(data.join(', '));
            });
        }

         // Listen for user selection
        $('#user_search_results').on('click', '.user-link', function () {
            var userId = $(this).data('user-id');
            getUserRoles(userId);
        });
    </script>
@endsection
