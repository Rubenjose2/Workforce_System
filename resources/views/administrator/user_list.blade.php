@extends('layouts.admin') 
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.css"/> 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<div class="row">
        <div class ="col-md-10 col-md-offset-1 white-container-noborder  ">
                <h1>List of Messages</h1>
                <legend>Workforce Messages</legend>
        <table id="table-data" class="table table-striped" cellspacing="0" width="100%">
            <thead class="blue-table-head-color">
                <tr>
                    <th>#</th>
                    <th></th>
                    <th>Tech Id</th>
                    <th>Firts Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr data-send="{{$user->id}}" class="pointer">
                <th>{{$user->id}}</th>
                <th ><img src="/uploads/avatars/{{$user->picture}}"  class="avatar-bullet" /></th>
                <th>{{$user->tech_id}}</th>
                <th>{{$user->fname}}</th>
                <th>{{$user->lname}}</th>
                <th>{{$user->email}}</th>
                <th>{{$user->phone}}</th>
                </tr>
                @endforeach
            </tbody>

        </table>
        <script src="{{asset('js/user_admin.js')}}"></script>


    </div>
</div>

@endsection