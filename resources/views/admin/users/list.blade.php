@extends('admin.template.main')
@section('content')
@section('title', 'Users')
    <div class="clearfix"></div>
                    <div class="row">
                    @include('messages')
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Edit User<small></small></h2>
                                    <div class="clearfix"></div>
                                </div>

<table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Action</th>

            </tr>
        </thead>
</table>
</div>
</div>
</div>
@endsection

@section('footer')
<script>
  $(function() {
      $('#users-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{!! route('users.data') !!}',
          columns: [
              { data: 'firstname', name: 'firstname' },
              { data: 'lastname', name: 'lastname' },
              { data: 'email', name: 'email' },
              { data: 'updated_at', name: 'updated_at' },
              {data: 'action', name: 'action'}
          ]
      });
  });
</script>
@endsection