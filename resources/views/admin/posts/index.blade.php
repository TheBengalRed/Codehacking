@extends('layouts.admin')

@section('content')
    <h2>posts</h2>


     <table class="table table-striped">
         <thead>
           <tr>
               <th>ID</th>
               <th>Username</th>
               <th>Category</th>
               <th>Photo</th>
               <th>Title</th>
               <th>Body</th>
               <th>Created At</th>
               <th>Updated At</th>
           </tr>
         </thead>

         @if($posts)
            @foreach($posts as $post)


         <tbody>
           <tr>
               <td>{{$post->id}}</td>
               <td>{{$post->user->name}}</td>
               <td>{{$post->category ? $post->category->name : 'Uncatagorized'}}</td>
               <td><img height="50px" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/40x40'}}" alt=""></td>
               <td>{{$post->title}}</td>
               <td>{{$post->body}}</td>
               <td>{{$post->created_at->diffForHumans()}}</td>
               <td>{{$post->updated_at->diffForHumans()}}</td>
           </tr>
         </tbody>

             @endforeach
             @endif


       </table>









@stop