@extends('layouts.admin') 
@section('content')
        <!-- Begining of the User Information Detail Admin Panel> -->
        <div class="panel panel-info">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-10">
                     <img src="/uploads/avatars/{{$user->picture}}"  class="avatar-bullet" />
                     <h3>{{$fullname}} <small>Tech ID: {{$user->tech_id}}</small> </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header">
            <h1>{{$fullname}} <small>Profile</small></h1>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">General Information</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body text-center">
                                <img src="/uploads/avatars/{{$user->picture}}" class="img-responsive avatar-profile"  />
                                <form enctype="multipart/form-data" action="/admin/avatar/{{$user->id}}" method="POST">
                                    <label>Update Profile Image</label>
                                    <input type="file" name="avatar">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="pull-center btn btn-sm btn-default">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="col-md-5">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <strong>Full Name:</strong> {{$fullname}}
                        </div>
                        <div class="col-md-5">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <strong>Email Address:</strong> {{$user->email}}
                        </div>
                        <br>
                        <br>
                        <div class="col-md-6">
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span> <strong>Address:</strong> {{$user->address}}
                        </div>
                        <div class="col-md-3">
                            <strong>City:</strong> {{$user->city}}
                        </div>
                        <div class="col-md-3">
                            <strong>Zip Code:</strong> {{$user->zip}}
                        </div>
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <strong>Phone Number:</strong> {{$user->phone}}
                        </div>
                        <div class="col-md-12">
                            <br>
                        </div>
                        <div class="col-md-4">
                            <strong>Date Of Birth</strong>: {{$user->DOB}}
                        </div>
                        <div class="col-md-7 col-md-offset-1">

                            <div class="panel panel-default">
                                <div class="panel-body">

                                    {{--  Small Form Update  --}}
                                    <form action="{{route('userAdminUpdate',$user->id)}}" method="POST">
                                            {{csrf_field()}}
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <label for="input-id">Status:</label>
                                            </div>
                                            <div class="">
                                                <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="active" 
                                                {{$user->status == 'active'? 'checked':''}}
                                                > Active
                                                </label>
                                                <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="deactivated"
                                                {{$user->status == 'deactivate'? 'checked':''}}
                                                > Deactivate
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-5">
                                                <label for="input-id">Access Control:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select name = "security_level"class="form-control">
                                                            <option value="user"
                                                            {{$user->security_level == 'user'? 'selected':''}}
                                                            >User</option>
                                                            <option value="admin"
                                                            {{$user->security_level == 'admin'? 'selected':''}}
                                                            >Administrator</option>
                                                            <option value = null
                                                            {{$user->security_level == null ? 'selected':''}}
                                                            >No assgined</option>
                                              
                                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-5">
                                                <label for="input-id">Roles:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select name="role" class="form-control">
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->id}}"
                                                            {{$user->roles->id == $role->id ? 'selected':''}}
                                                            >{{$role->description}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-5">
                                                <label for="input-id">Confirmed:</label>
                                            </div>
                                            <div class="col-md">
                                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-5">        
                                            <label>Tech Id</label>
                                            </div>
                                            <div class="col-md-7">
                                                  <input type="text" name="tech_id" class="form-control" value="{{$user->tech_id}}"/>  
                                            </div>
                                      </div>
                                      <div class="col-md-12">
                                          <br>
                                      </div>
                                      <button type="submit" class="btn btn-success btn-block">Update</button>
                                    </form>
                                <div>
                                    <form action="{{route('user.destroy',$user->id)}}" method="POST">
                                            {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger btn-block">Delete</button>
                                    </form>
                                </div>

                                </div>
                            </div>

                        </div>

                    </div>


                </div>

            </div>
        </div>


@endsection