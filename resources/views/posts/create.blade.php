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

    <form method="post" action="/posts">
        <div class="form-group">
            {{csrf_field()}}
            <label>Title</label>
            <input type="text" name="title" class="form-control"  />
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">    
            <label>Post Creator</label>
            <select class="form-control" name="user_id">  
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Create" class="btn btn-success">
    </form>

@endsection