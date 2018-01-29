@extends('layouts.main')
@section('content')

<h1>Import Excel File</h1>
<form enctype="multipart/form-data" action="excel_upload" method="POST">
       
            <label>Upload Excel File</label>
            <input type="file" name="import_file">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-sm btn-default">
        </form>
@endsection