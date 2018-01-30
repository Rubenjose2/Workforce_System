@extends('layouts.admin') 
@section('content')

<h1>Import Excel File</h1>
<legend>Please select your ScoreCard File</legend>
<form enctype="multipart/form-data" action="excel_upload" method="POST">

    <label>Upload Excel File</label>
    <input type="file" name="import_file">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <hr size=2>
    <input type="submit" class="btn btn-sm btn-default">
</form>
{{-- Table Result to be Print --}} 

@isset($insert)
    ok
@endisset

@endsection