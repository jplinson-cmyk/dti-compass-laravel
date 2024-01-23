@extends('layouts.app-master')

@section('content')
    <div class="bg-white p-4 rounded mt-4">
        <h1>Users</h1>
        <div class="lead">
            <a href="{{ route('users.create') }}" class="btn btn-sm float-end text-white mb-4"
            style="background-color: #1E4387;">Add new user</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" width="1%">#</th>
                    <th scope="col" width="15%">First Name</th>
                    <th scope="col" width="15%">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col" width="10%">Username</th>
                    <th scope="col" width="10%">Roles</th>
                    <th scope="col" width="1%" colspan="4"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                <span class="badge bg-primary">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        <td>
                            <button onclick="sendResetPasswordLink('{{$user->id}}')" class="btn btn-primary btn-sm password-reset">Reset</button>
                        </td>
                        <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm">Show</a></td>
                        <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex mt-4 justify-content-center">
            {!! $users->links() !!}
        </div>

    </div>

    <script>

        function sendResetPasswordLink(userId) {


            fetch("/users/"+userId+"/send-password-link", {
                method: 'POST',
                headers:{
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': document.querySelector('input[name=_token]').value,
                    'Accept' : 'application/json',
                },
    
            })
            .then (response=>response.json())
            .then(data=>{
                alert('Password reset link sent!')
            })
            .catch(error=>{
                alert('Failed!')
            })
        }
    </script>
@endsection
