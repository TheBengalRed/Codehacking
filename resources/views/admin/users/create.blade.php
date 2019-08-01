@extends('layouts.admin')

@section('content')

    <h2>Create Users</h2>

    {!! Form::open(['method'=>'POST','action'=>'AdminUserController@store', 'files'=>true]) !!}

            <div class="form-group">

                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}

            </div>

            <div class="form-group">

                            {!! Form::label('role_id', 'Role:') !!}
                            {!! Form::select('role_id', [''=>'Choose Option'] + $roles, null, ['class'=>'form-control']) !!}

            </div>


            <div class="form-group">

                            {!! Form::label('is_active', 'Status:') !!}
                            {!! Form::select('is_active',array(1=>'Active', 0=> 'Not Active'), 0, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">

                {!! Form::label('file', 'File:') !!}
                {!! Form::file('file',['class'=>'form-control']) !!}

            </div>

            <div class="form-group">

                            {!! Form::label('password', 'Password:') !!}
                            {!! Form::password('password',['class'=>'form-control']) !!}

            </div>

            <div class="form-group">

                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>


            {{csrf_field()}}





    @include('includes.form_error')





    {!! Form::submit('Create User', ['class'=>'btn btn-primary'] )!!}

    {!! Form::close() !!}


    @stop