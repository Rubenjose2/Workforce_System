@extends('layouts.admin') 
@section('content') 
{{-- Calling the CkEditor --}}
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<div class="row"></div>
<div class="col-md-10 col-md-offset-2">
    <legend>Prepare a new Message</legend>
    <form action="{{route('posts.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
            <label for="">Subject</label>
            <input type="text" class="form-control" name="subject" placeholder="Short description of the content">
        </div>
        @if ($errors->has('subject'))
        <span class="help-block">
            <strong>The subject is required</strong>
        </span>
        @endif

        <div class="form-group{{ $errors->has('importance') ? ' has-error' : '' }}">
            <label for="">Importance</label>
            <select name="importance" class="form-control">
                <option value="Urgent">Urgent</option>
                <option value="Hight">Hight</option>
                <option selected="selected" value="Normal">Normal</option>
                <option value="Low">Low</option>
            </select>
        </div>
        @if ($errors->has('importance'))
        <span class="help-block">
            <strong>{{ $errors->first('importance') }}</strong>
        </span>
        @endif

        <div class="form-group{{ $errors->has('body')? 'has-error' : '' }}">
            <label>Message</label>
            <textarea name="body"></textarea>
        </div>

        <div>
            <button type="submit" class="btn btn-default">Submit</button>
            <a href="/admin" type="cancel" class="btn btn-warning">Cancel</a>
        </div>

</div>




</form>
</div>
<script>
    CKEDITOR.replace('body');
</script>

@endsection