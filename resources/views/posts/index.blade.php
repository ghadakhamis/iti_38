@extends('layouts.master')
    @section('content')
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="get" action="/posts/create">
                <input type="submit" value="Add new" class="btn btn-success"/><br/><br/>
            </form>
        </div>       
        </div>     
        <table class="table">
            <tr>
                <th>Number</th>
                <th>Title</th>
                <th>Posted by</th>
                <th>Created at</th>
                <th>Slug</th>
                <th>Actions</th>

            </tr>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->data_form}}</td>
                <td>{{$post->slug}}</td>
                <td>
                <div class="row">
                    <div class="col-md-4">
                        <form method="get" action="/posts/{{$post->id}}">
                            <input type="submit" value="View" class="btn btn-info"/>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form method="get" action="/posts/{{$post->id}}/edit" >
                            <input type="submit" value="Edit" class="btn btn-primary"/>                    
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form method="post" action="/posts/{{$post->id}}" >
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input type="submit" value="Delete"   onclick="return confirm('are you sure')" class="btn btn-danger"/>                    
                        </form>
                    </div>
                </div>
                </td>
            <tr>
            @endforeach 
        </table>  
        {!! $posts->links() !!} 
    @endsection