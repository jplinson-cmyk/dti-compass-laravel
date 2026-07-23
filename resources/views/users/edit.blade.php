@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Update User</h1>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input value="{{ old('firstname', $user->firstname) }}" type="text" class="form-control" name="firstname"
                        placeholder="First Name" required>

                    @if ($errors->has('firstname'))
                        <span class="text-danger text-left">{{ $errors->first('firstname') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input value="{{ old('lastname', $user->lastname) }}" type="text" class="form-control" name="lastname"
                        placeholder="Last Name" required>

                    @if ($errors->has('lastname'))
                        <span class="text-danger text-left">{{ $errors->first('lastname') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ old('email', $user->email) }}" type="email" class="form-control" name="email"
                        placeholder="Email address" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input value="{{ old('username', $user->username) }}" type="text" class="form-control" name="username"
                        placeholder="Username" required>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <div id="selected-roles" class="mb-3">
                    <label for="selected-roles" class="form-label">Assigned Roles</label>
                    @foreach ($user->roles as $selectedRole)
                        <div class="badge-container" style="display: flex; align-items: center; gap: 6px; margin-bottom: 6px;">
                            <span class="badge bg-primary" style="height: 24px; display: inline-flex; align-items: center; justify-content: center; padding: 0 8px; font-size: 16px; font-weight: 600; border-radius: 6px;">
                                {{ $selectedRole->name }}
                            </span>
                            <input type="hidden" name="selected_roles[]" value="{{ $selectedRole->id }}">
                            <button type="button" class="btn btn-danger remove-role-btn" data-role-id="{{ $selectedRole->id }}" style="width: 24px; height: 24px; min-width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800; line-height: 1; border-radius: 7px;">
                                ✖
                            </button>
                            <!-- Use × or ✖ unicode symbol -->
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

                <button type="submit" class="btn btn-primary">Update User</button>
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
                        badgeContainer.style.display = 'flex';
                        badgeContainer.style.alignItems = 'center';
                        badgeContainer.style.gap = '6px';
                        badgeContainer.style.marginBottom = '6px';


                        const badge = document.createElement('span');
                        badge.className = 'badge bg-primary';
                        badge.textContent = selectedRoleName;
                        badge.style.height = '24px';
                        badge.style.display = 'inline-flex';
                        badge.style.alignItems = 'center';
                        badge.style.justifyContent = 'center';
                        badge.style.padding = '0 8px';
                        badge.style.fontSize = '16px';
                        badge.style.fontWeight = '600';
                        badge.style.borderRadius = '6px';
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
