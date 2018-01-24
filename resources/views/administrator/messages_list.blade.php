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
        Modal Here
    @include('administrator.partial._modal') 
    </div>
<script>
    $(".click-row").click(function(event){
        $post_id = $(this).attr("data-send");
        $.ajax({
            method:'GET',
            url:'/admin/postshow',
            data:{'id':$post_id},
            success: function(response){
                $('#myModalLabel').empty().append(response[0].subject);
                $('.modal-body').empty().append(response[0].body);
                $('#myModal').modal({'show' : true});
                //console.log(response);
              
            }
        })
    });
</script>

@endsection