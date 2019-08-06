@extends('layouts.admin')

@section('content')

    <h2>Create Post</h2>

    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store', 'files'=>true]) !!}

            <div class="form-group">

                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}

            </div>

        <div class="form-group">

                        {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', [''=>'Choose Option'] + $categories, null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

                        {!! Form::label('photo_id', 'Photo:') !!}
                        {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

                        {!! Form::label('body', 'Description:') !!}
                        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}

        </div>



            {{csrf_field()}}


    @include('includes.form_error')

    {!! Form::submit('Create Post', ['class'=>'btn btn-primary'] )!!}
    {!! Form::close() !!}





@stop