@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Update user</h1>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input value="{{ $user->firstname }}" type="text" class="form-control" name="firstname"
                        placeholder="First Name" required>

                    @if ($errors->has('firstname'))
                        <span class="text-danger text-left">{{ $errors->first('firstname') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input value="{{ $user->lastname }}" type="text" class="form-control" name="lastname"
                        placeholder="Last Name" required>

                    @if ($errors->has('lastname'))
                        <span class="text-danger text-left">{{ $errors->first('lastname') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ $user->email }}" type="email" class="form-control" name="email"
                        placeholder="Email address" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input value="{{ $user->username }}" type="text" class="form-control" name="username"
                        placeholder="Username" required>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <div id="selected-roles" class="mb-3">
                    <label for="selected-roles" class="form-label">Selected Roles</label>
                    @foreach ($user->roles as $selectedRole)
                        <div class="badge-container">
                            <span class="badge bg-primary">{{ $selectedRole->name }}</span>
                            <input type="hidden" name="selected_roles[]" value="{{ $selectedRole->id }}">
                            <button class="btn btn-sm btn-danger remove-role-btn"
                                data-role-id="{{ $selectedRole->id }}">x</button>
                        </div>
                    @endforeach
                </div>
                <div class="mb-3">
                    <div id="role-dropdown" style="display: none;">
                        <select class="form-control" id="role-select">
                            <option value="">Select role</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        <button type="button" class="btn btn-primary mt-2" id="add-selected-role-btn">Add Selected
                            Role</button>
                        <button type="button" class="btn btn-secondary mt-2" id="cancel-role-btn">Cancel</button>
                    </div>
                </div>

                <button type="button" class="btn btn-success" id="add-role-btn">&#43; Add Role</button>

                <button type="submit" class="btn btn-primary">Update user</button>
                <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</button>
            </form>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addRoleButton = document.getElementById('add-role-btn');
            const roleDropdown = document.getElementById('role-dropdown');
            const roleSelect = document.getElementById('role-select');
            const cancelRoleButton = document.getElementById('cancel-role-btn');
            const addSelectedRoleButton = document.getElementById('add-selected-role-btn');
            const selectedRolesContainer = document.getElementById('selected-roles');

            addRoleButton.addEventListener('click', () => {
                roleDropdown.style.display = 'block';
            });

            cancelRoleButton.addEventListener('click', () => {
                roleSelect.value = '';
                roleDropdown.style.display = 'none';
            });

            addSelectedRoleButton.addEventListener('click', () => {
                const selectedRoleId = roleSelect.value;
                if (selectedRoleId) {
                    const selectedRoleOption = roleSelect.options[roleSelect.selectedIndex];
                    const selectedRoleName = selectedRoleOption.textContent;

                    if (!isRoleAlreadySelected(selectedRoleName, selectedRolesContainer)) {
                        const badgeContainer = document.createElement('div');
                        badgeContainer.className = 'badge-container';

                        const badge = document.createElement('span');
                        badge.className = 'badge bg-primary mr-2';
                        badge.textContent = selectedRoleName;
                        badgeContainer.appendChild(badge);

                        const hiddenInput = document.createElement('input');
                        hiddenInput.type = 'hidden';
                        hiddenInput.name = 'selected_roles[]';
                        hiddenInput.value = selectedRoleId;
                        badgeContainer.appendChild(hiddenInput);

                        selectedRolesContainer.appendChild(badgeContainer);

                        roleSelect.value = '';
                        roleDropdown.style.display = 'none';
                    } else {
                        alert('Role is already selected.');
                    }
                }
            });

            function isRoleAlreadySelected(role, container) {
                return Array.from(container.querySelectorAll('.badge-container')).some(badge => {
                    return badge.querySelector('.badge').textContent === role;
                });
            }

            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-role-btn')) {
                    const badgeContainer = event.target.closest('.badge-container');
                    if (badgeContainer) {
                        const roleNameToRemove = badgeContainer.querySelector('.badge').textContent;

                        const confirmationMessage = 'Are you sure you want to remove the role: ' +
                            roleNameToRemove + '?';
                        if (confirm(confirmationMessage)) {
                            badgeContainer.querySelector('input[name="selected_roles[]"]')?.remove();
                            badgeContainer.remove();
                        }
                    }
                }
            });

            document.querySelector('form').addEventListener('submit', function(event) {
                if (!document.querySelectorAll('input[name="selected_roles[]"]').length) {
                    alert('Please select at least one role.');
                    event.preventDefault();
                }
            });
        });
    </script>
@endsection
