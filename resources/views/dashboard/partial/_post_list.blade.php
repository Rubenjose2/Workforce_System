<table class="table table-hover"id="table_post">
    <thead>
        <tr>
            <th>Subject</th>
            <th>Importance</th>
            <th>Date</th>
            <th>Status</th>

        </tr>

    </thead>
    <tbody>
        @foreach ($posts->sortByDesc('id')->take(3) as $post)
        <tr class="click-row pointer" data-send="{{$post->id}}">
            <td>{{$post->subject}} </td>
            <td>{{$post->importance}}</td>
            <td>{{date('m-d-Y',strtotime($post->created_at))}}</td>
            @if($post->pivot->status==0)
            <td data-id="{{$post->id}}" class="new-post post-status">New</td>
            @else
            <td data-id="{{$post->id}}" class="read-post post-status">Read</td>
            @endif
        </tr>
        @endforeach

        
    </tbody>

</table>
@if ($post_count>3)
    <div class="col-md-1 col-md-offset-11">
        <a href="{{route('user_post_list')}}"><span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span></a>
    </div>
@endif