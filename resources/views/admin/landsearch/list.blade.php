@extends('admin.template.main')
@section('content')
@section('title', 'Land Search')
<div class="clearfix"></div>
                    <div class="row">
                    @include('messages')
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Data List<small>Land Search</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                  <table class="table table-bordered" id="users-table">
                                          <thead>
                                              <tr>
                                                  <th>Land User</th>
                                                  <th>Plan</th>
                                                  <th>Beneficiary</th>
                                                  <th>Owners Name</th>
                                                  <th>Coordinates</th>
                                                  <th>Area Sq Ft</th>
                                                  <th>Area Sq Meter</th>
                                                  <th>Area Name</th>
                                                  <th>Land No.</th>
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
          ajax: '{!! route('lands.data') !!}',
          columns: [
              { data: 'land_use', name: 'land_use' },
              { data: 'plan', name: 'plan' },
              { data: 'beneficiary', name: 'beneficiary' },
              { data: 'owners_name', name: 'owners_name' },
              { data: 'coordinates', name: 'coordinates' },
              { data: 'areasqft', name: 'areasqft' },
              { data: 'areasqm', name: 'areasqm' },
              { data: 'areaname', name: 'areaname' },
              { data: 'land_number_id', name: 'land_number_id' },
              {data: 'action', name: 'action'}
          ]
      });
  });
</script>
@endsection