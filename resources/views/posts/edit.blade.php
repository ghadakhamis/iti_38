@extends('layouts.master')
    @section('content')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="/posts/{{$post->id}}">
           {{csrf_field()}}
            <div class="form-group">
                <label>Title</label>
                <input  type="text" name="title" value="{{$post->title}}" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" >{{$post->description}}</textarea>
            </div>
            <div class="form-group">         
                <label>Post creators</label><br/><br/>
                <select autocomplete="off" name="user_id" value="{{$post->user->id}}" class="form-control" >
                    @foreach ($users as $user)
                        <option value="{{$user->id}}"  {{$post->user_id == $user->id ? 'selected' : '' }}>{{$user->name}}</option>
                    @endforeach
                </select><br/><br/>
            </div>    
            <input  type="submit" value="Update" class="btn btn-info"/>    
        </form>    





    @endsection




