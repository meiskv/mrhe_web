@extends('admin.template.main')
@section('content')
@section('title', 'Users')
           <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Edit User<small></small></h2>
                                    <div class="clearfix"></div>
                                </div>
                <div class="box-body">
                    @include('messages')
                    {!!Form::open(['url' => route('admin.user.update', $data->id), 'method' => 'put', 'role' => 'form'])!!}
                        <!-- text input -->
                        <div class="form-group">
                          <label>First Name</label>
                          <input name="firstname" type="text" class="form-control" placeholder="Your name" value="{{$data->firstname}}">
                        </div>
                        <div class="form-group">
                          <label>Last Name</label>
                          <input name="lastname" type="text" class="form-control" placeholder="Your name" value="{{$data->lastname}}">
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <div class="input-group">
                              <span class="input-group-addon">@</span>
                              <input name="email" type="email" class="form-control" placeholder="Your email" value="{{$data->email}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input name="password" type="Password" class="form-control" placeholder="******">
                        </div>
                        <div class="form-group">
                          <label>Assign a role</label>
                          <select name="role" id="role" class="form-control">
                                @foreach($roles as $role)
                                    <option @if($user_role->id == $role->id) selected="selected" @endif value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                          </select>
                        </div>
                        <a href="{{route('admin.user.index')}}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-sml btn-primary">Update</button>
                    {!!Form::close()!!}
                </div><!-- /.box-body -->
              </div>  
              </div>  
              </div>  
@endsection