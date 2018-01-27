@extends('layouts.admin') 
@section('content')
    <table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Subject</th>
            <th>Importance</th>
            <th>Created By</th>
            <th>Date Created</th>
        </tr>
        <tbody>
            @foreach ($posts as $post)
            <tr class="click-row pointer" data-send="{{$post->id}}">
                <th >{{$post->id}}</th>
                <th>{{$post->subject}}</th>
                <th>{{$post->importance}}</th>
                <th>{{$post->user->fname}} {{$post->user->lname}}</th>
                <th>{{$post->created_at}}</th>
            </tr>
            @endforeach
        </tbody>
    </thead>
    </table>
        {{--  Modal view the Post description  --}}
    <div>
    @include('administrator.partial._modal') 
    </div>
@endsection