@extends('layouts.master')
    @section('content')
        <form method="get" action="/posts/create">
            <input type="submit" value="Add new"/><br/><br/>
        </form>    
        <table>
            <tr>
                <th>Number</th>
                <th>Title</th>
                <th>Posted by</th>
                <th>Created at</th>
                <th>Actions</th>

            </tr>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->created_at}}</td>
                <td>
                    <form method="get" action="/posts/{{$post->id}}">
                        <input type="submit" value="View"/>
                    </form>
                    <form method="get" action="/posts/{{$post->id}}/edit" >
                        <input type="submit" value="Edit"/>                    
                    </form>
                    <form method="post" action="/posts/{{$post->id}}" >
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input type="submit" value="Delete"/>                    
                    </form>
                </td>
            <tr>
            @endforeach 
        </table>   
    @endsection