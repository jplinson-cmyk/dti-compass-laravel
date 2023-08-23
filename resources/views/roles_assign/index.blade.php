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
                    <input type="text" class="form-control" name="user_search" id="user_search" list="user_options" placeholder="Search User">
                    <datalist id="user_options">
                        @foreach ($usersForAutocomplete as $user)
                            <option value="{{ $user->firstname }} {{ $user->lastname }}" data-user-id="{{ $user->id }}">
                        @endforeach
                    </datalist>
                </div>
            </form>

            <!-- Display User Roles -->
            <div id="user_roles" class="mt-3"></div>

            <!-- Role Assignment Form -->
            @if(isset($user))
                <form method="POST" action="{{ route('roles_assign.assign') }}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    
                    <label for="roles" class="form-label">Select Roles:</label>
                    <select name="roles[]" multiple>
                        @foreach($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    
                    <button type="submit" class="btn btn-primary">Assign Roles</button>
                </form>
            @endif
        </div>
    </div>

    <!-- Autocomplete logic -->
    <script>
        const userSearchInput = document.getElementById('user_search');
        const userResults = document.getElementById('user_results');

        userSearchInput.addEventListener('input', async (e) => {
            const searchQuery = e.target.value;

            if (searchQuery.length >= 3) {
                const response = await fetch(`/roles-assign/search/users?q=${searchQuery}`);
                const data = await response.json();

                if (data.length > 0) {
                    userResults.innerHTML = ''; // Clear previous results

                    data.forEach(user => {
                        const resultItem = document.createElement('div');
                        resultItem.textContent = `${user.firstname} ${user.lastname}`;
                        resultItem.classList.add('result-item', 'clickable'); // Add clickable class
                        resultItem.setAttribute('data-user-id', user.id); // Add user ID attribute

                        resultItem.addEventListener('click', async () => {
                            userSearchInput.value = `${user.firstname} ${user.lastname}`;
                            userResults.innerHTML = ''; // Clear results when a user is selected

                            // Fetch and display roles of the selected user
                            const userId = user.id;
                            const rolesResponse = await fetch(`/roles-assign/user/roles/${userId}`);
                            const rolesData = await rolesResponse.json();

                            const userRolesElement = document.getElementById('user_roles');
                            userRolesElement.textContent = 'Roles: ' + rolesData.roles.join(', ');
                        });

                        userResults.appendChild(resultItem);
                    });

                    userResults.style.display = 'block'; // Show the results dropdown
                } else {
                    userResults.innerHTML = '<div class="result-item">No results found</div>';
                }
            } else {
                userResults.innerHTML = ''; // Clear results when input is below minimum length
            }
        });

        // Close results dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!userResults.contains(event.target) && event.target !== userSearchInput) {
                userResults.style.display = 'none';
            }
        });

        // Prevent form submission when clicking on the result items
        userResults.addEventListener('click', (event) => {
            event.preventDefault();
            event.stopPropagation();
        });
    </script>
@endsection
