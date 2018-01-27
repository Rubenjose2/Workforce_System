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
            <td>{{date('m-d-Y',strtotime($user->created_at))}}</td>
            <td>{{$post->status}}
        </tr>
        @endforeach

        <script src="{{ asset('js/post_manipulation.js') }}"></script>
    </tbody>

</table>
@if ($post_count>3)
    <div class="col-md-1 col-md-offset-11">
        <a href=""><span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span></a>
    </div>
@endif