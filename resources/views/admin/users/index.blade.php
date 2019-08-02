@extends('layouts.admin')

@section('content')


    <h2>Users</h2>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Role</th>
            <th>Status</th>
            <th>Email</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>


        @if($users)

                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img height="40px" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/40x40'}}" alt="{{$user->name}}"></td>
                    <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active == 1 ?'Active' : 'Not Active'}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
                @endforeach

        @endif


        </tbody>


    </table>

    @stop
