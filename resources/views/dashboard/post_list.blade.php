@extends('layouts.main')
@section('content')
<div class ="col-md-10 col-md-offset-1 white-container-noborder  ">
        <h1>List of Messages</h1>
        <legend>Workforce Messages</legend>
<table id="table-data" class="table table-striped" cellspacing="0" width="100%">
    <thead class="blue-table-head-color">
        <th>Subject</th>
        <th>Importance</th>
        <th>Date</th>
        <th>Status</th>
    </thead>
    <tbody>
        @foreach ($posts->sortByDesc('id') as $post)
        @if($post->pivot->status==0)
        <tr class="click-row pointer danger" data-send="{{$post->id}}">
        @else
        <tr class="click-row pointer success" data-send="{{$post->id}}">
            @endif
            <td>{{$post->subject}} </td>
            <td>{{$post->importance}}</td>
            <td>{{date('m-d-Y',strtotime($post->created_at))}}</td>
            @if($post->pivot->status==0)
            <td id="post-status" class="new-post">New</td>
            @else
            <td id="post-status" class="read-post">Read</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@include('dashboard.partial._modal')
@endsection
