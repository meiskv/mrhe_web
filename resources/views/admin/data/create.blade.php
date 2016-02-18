@extends('admin.template.main')
@section('content')
                <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Creating Data<small>Datas</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                <div class="box-body">
                    @include('messages')
                    {!!Form::open(['url' => route('admin.data.store')])!!}
                        <!-- text input -->
                        <div class="form-group">
                          <label>Land Number</label>
                          <select name="land_number_id" class="js-example-basic-single form-control">
                                  <option disabled selected>Select your land number</option>
                             @foreach ($land as $landdata)
                                  <option value="{{ $landdata->land_number }}">{{ $landdata->land_number }} | {{ $landdata->style }}</option>
                             @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Property No.</label>
                          <input name="property_no" type="text" class="form-control" placeholder="Your property number" value="">
                        </div>
                        <div class="form-group">
                          <label>Land Area</label>
                          <input name="land_area" type="text" class="form-control" placeholder="Your land area" value="">
                        </div>
                        <div class="form-group">
                          <label>Property Area</label>
                          <input name="property_area" type="text" class="form-control" placeholder="Your property area" value="">
                        </div>
                        <div class="form-group">
                          <label>No. of Bedrooms</label>
                          <input name="no_of_bedroom" type="text" class="form-control" placeholder="Your number of bedrooms" value="">
                        </div>
                        <div class="form-group">
                          <label>No. of Bathrooms</label>
                          <input name="no_of_bathroom" type="text" class="form-control" placeholder="Your number of bathrooms" value="">
                        </div>
                        <div class="form-group">
                          <label>Total Built Area</label>
                          <input name="total_built_area" type="text" class="form-control" placeholder="Your total built area" value="">
                        </div>
                        <a href="{{route('datatables')}}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-sml btn-primary">Submit</button>
                    {!!Form::close()!!}
                </div><!-- /.box-body -->
                </div>
                </div>
                </div>

               <script type="text/javascript">
                $(document).ready(function() {
                  $(".js-example-basic-single").select2();
                });
                </script>

                
@endsection