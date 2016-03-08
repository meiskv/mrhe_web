@extends('admin.template.main')
@section('content')
@section('title', 'Al Muhesnah 4th')
<div class="clearfix"></div>
                    <div class="row">
                    @include('messages')
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Data List<small>for Al Muhesnah 4th</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                  <table class="table table-bordered" id="muhesnah-table">
                                          <thead>
                                              <tr>
                                                  <th>Apartment Code</th>
                                                  <th>Building No.</th>
                                                  <th>Apartment No.</th>
                                                  <th>No. of Bedrooms</th>
                                                  <th>Floor No.</th>
                                                  <th>No. of Bathrooms</th>
                                                  <th>Area</th>
                                                  <th>Balcony</th>
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
      $('#muhesnah-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{!! route('muhesnah.data') !!}',
          columns: [
              { data: 'apartment_code', name: 'apartment_code' },
              { data: 'building_no', name: 'building_no' },
              { data: 'apartment_no', name: 'apartment_no' },
              { data: 'no_of_bedrooms', name: 'no_of_bedrooms' },
              { data: 'floor_no', name: 'floor_no' },
              { data: 'no_of_bathrooms', name: 'no_of_bathrooms' },
              { data: 'area', name: 'area' },
              { data: 'balcony', name: 'balcony' },
              {data: 'action', name: 'action'}
          ]
      });
  });
</script>
@endsection