@extends('layouts.admin') 
@section('content')
<div class ="col-md-10 col-md-offset-1 white-container-noborder  ">
        <h1>List of Messages</h1>
        <legend>Workforce Messages</legend>
<table id="table-data" class="table table-striped" cellspacing="0" width="100%">
        <thead class="blue-table-head-color">
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
</div>
@endsection