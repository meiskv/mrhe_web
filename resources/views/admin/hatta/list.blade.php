@extends('admin.template.main')
@section('content')
@section('title', 'Hatta Makan')
<div class="clearfix"></div>
                    <div class="row">
                    @include('messages')
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Data List<small>for Hatta Makan</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                  <table class="table table-bordered" id="users-table">
                                          <thead>
                                              <tr>
                                                  <th>Land Number</th>
                                                  <th>Property No</th>
                                                  <th>Plan Type</th>
                                                  <th>Style</th>
                                                  <th>Land Area</th>
                                                  <th>Property Area</th>
                                                  <th>No. of Bedrooms</th>
                                                  <th>No. of Bathrooms</th>
                                                  <th>Total Built Area</th>
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
          ajax: '{!! route('hatta.data') !!}',
          columns: [
              { data: 'land_number_id', name: 'land_number_id' },
              { data: 'property_no', name: 'property_no' },
              { data: 'plan_type', name: 'plan_type' },
              { data: 'style', name: 'style' },
              { data: 'land_area', name: 'land_area' },
              { data: 'property_area', name: 'property_area' },
              { data: 'no_of_bedroom', name: 'no_of_bedroom' },
              { data: 'no_of_bathroom', name: 'no_of_bathroom' },
              { data: 'total_built_area', name: 'total_built_area' },
              {data: 'action', name: 'action'}
          ]
      });
  });
</script>
@endsection