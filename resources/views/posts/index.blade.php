@extends('layouts.master')
    @section('content')
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
                <td><form method="get" action="/posts/{{$post->id}}"><input type="submit" vaule="View"/></form></td>
            <tr>
            @endforeach 
        </table>   
    @endsection