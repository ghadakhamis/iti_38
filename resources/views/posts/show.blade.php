@extends('layouts.master')
    @section('content')
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-secondary">  
            Post Info
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-secondary">
           <label>Title: </label> <p>{{$post->title}} </p>
           <label>Description: </label> <p>{{$post->description}} </p>
        </li>
    </ul>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-secondary">  
            Post creator Info
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-secondary">
           <label>Name: </label> <p>{{$post->user->name}} </p>
           <label>Email: </label> <p>{{$post->user->email}} </p>
           <label>Created at: </label> <p>{{\Carbon\Carbon::parse($post->user->created_at)->format('l jS \\of F Y h:i:s A')}} </p>
        </li>
    </ul>    

    @endsection 
