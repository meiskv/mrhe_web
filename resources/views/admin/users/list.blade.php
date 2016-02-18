@extends('admin.template.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Users</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            @if($users)
                                <table class="table">
                                    <tr>
                                      <th class="col-md-1">#</th>
                                      <th class="col-md-2">Name</th>
                                      <th class="col-md-2">Email</th>
                                      <th class="col-md-2">Emergency No</th>
                                      <th class="col-md-2">Role</th>
                                      <th class="col-md-1">Created</th>
                                      <th class="col-md-2">Actions</th>
                                    </tr>
                                    
                                    @foreach($users as $user)
                                        <tr>
                                          <td>{{$user->id}}</td>
                                          <td><a href="{{route('admin.user.edit', $user->id)}}">{{$user->firstname}} {{$user->lastname}}</a></td>
                                          <td>{{$user->email}}</td>
                                          <td>{{$user->emergency_no}}</td>
                                          <td>
                                              @foreach($user->roles as $role)
                                                <span class="label label-success">{{$role->name}}</span>
                                              @endforeach
                                          </td>
                                          <td>{{$user->created_at->format('d M Y')}}</td>
                                          <td>
                                                {!!Form::open(['url' => route('admin.user.destroy', $user->id), 'method' => 'delete' ])!!}
                                                    <a href="{{route('admin.user.edit', $user->id)}}" class="btn btn-sml btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                                                    <button type="submit" class="btn btn-sml btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-timex"></i> Delete</button>
                                                {!!Form::close()!!}
                                          </td>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                                <p class="alert alert-warning">No users to show</p>
                            @endif
                        </div><!-- /.box-body -->
                        @include('admin.template.pagination', ['pages' => $users])                        
                    </div><!-- /.box -->
                </div>
            </div>
        </section>
    </div>

  <hr/>`
<table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Email</th>
                <th>Email</th>
                <th>Email</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>

            </tr>
        </thead>
</table>
@endsection

@section('footer')
<script>
  $(function() {
      $('#users-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{!! route('datatables.data') !!}',
          columns: [
              { data: 'id', name: 'id' },
              { data: 'land_number_id', name: 'land_number_id' },
              { data: 'property_no', name: 'property_no' },
              { data: 'land_area', name: 'land_area' },
              { data: 'property_area', name: 'property_area' },
              { data: 'no_of_bedroom', name: 'no_of_bedroom' },
              { data: 'no_of_bathroom', name: 'no_of_bathroom' },
              { data: 'total_built_area', name: 'total_built_area' },
              { data: 'created_at', name: 'created_at' },
              { data: 'updated_at', name: 'updated_at' },
              {data: 'action', name: 'action'}
          ]
      });
  });
</script>
@endsection