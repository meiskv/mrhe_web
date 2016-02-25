@extends('admin.template.main')
@section('content')
                <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Create Data<small>for Al Quoz</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                <div class="box-body">
                    @include('messages')
                    {!!Form::open(['url' => route('admin.qouz.store')])!!}
                        <!-- text input -->
                        <div class="form-group">
                          <label>Apartment Code</label>
                          <input name="apartment_code" type="text" class="form-control" placeholder="Your apartment code" value="{{ Input::old('apartment_code') }}">
                        </div>
                        <div class="form-group">
                          <label>Building No.</label>
                          <input name="building_no" type="text" class="form-control" placeholder="Your building number" value="{{ Input::old('building_no') }}">
                        </div>
                        <div class="form-group">
                          <label>Apartment No.</label>
                          <input name="apartment_no" type="text" class="form-control" placeholder="Your apartment number" value="{{ Input::old('apartment_no') }}">
                        </div>
                        <div class="form-group">
                          <label>No. of Bedrooms</label>
                          <input name="no_of_bedrooms" type="text" class="form-control" placeholder="Your number of bedrooms" value="{{ Input::old('no_of_bedrooms') }}">
                        </div>
                        <div class="form-group">
                          <label>Floor No.</label>
                          <input name="floor_no" type="text" class="form-control" placeholder="Your floor number" value="{{ Input::old('floor_no') }}">
                        </div>
                        <div class="form-group">
                          <label>No. of Bathrooms</label>
                          <input name="no_of_bathrooms" type="text" class="form-control" placeholder="Your number of bathrooms" value="{{ Input::old('no_of_bathrooms') }}">
                        </div>
                        <div class="form-group">
                          <label>Area</label>
                          <input name="area" type="text" class="form-control" placeholder="Your area" value="{{ Input::old('area') }}">
                        </div>
                        <div class="form-group">
                          <label>Balcony</label>
                          <input name="balcony" type="text" class="form-control" placeholder="Your balcony" value="{{ Input::old('balcony') }}">
                        </div>
                        <a href="{{route('admin.qouz.index')}}" class="btn btn-default">Back</a>
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