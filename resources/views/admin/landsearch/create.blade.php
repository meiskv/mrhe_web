@extends('admin.template.main')
@section('content')
@section('title', 'Land Search')
                <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Creating Data<small>Land Search</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                <div class="box-body">
                    @include('messages')
                    {!!Form::open(['url' => route('admin.landsearch.store')])!!}
                        <!-- text input -->
                        <div class="form-group">
                          <label>Land Number</label>
                          <select name="land_number_id" class="js-example-basic-single form-control">
                                  <option disabled selected>Select your land number</option>
                             @foreach ($landareas as $landdata)
                                  <option value="{{ $landdata->land_number_id }}">{{ $landdata->land_number_id }}</option>
                             @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Land Use</label>
                          <input name="land_use" type="text" class="form-control" value="{{ Input::old('land_use') }}">
                        </div>
                        <div class="form-group">
                          <label>Plan</label>
                          <input name="plan" type="text" class="form-control" value="{{ Input::old('plan') }}">
                        </div>
                        <div class="form-group">
                          <label>Beneficiary</label>
                          <input name="beneficiary" type="text" class="form-control" value="{{ Input::old('beneficiary') }}">
                        </div>
                        <div class="form-group">
                          <label>Owners Name</label>
                          <input name="owners_name" type="text" class="form-control" value="{{ Input::old('owners_name') }}">
                        </div>
                        <div class="form-group">
                          <label>Coordinates</label>
                          <input name="coordinates" type="text" class="form-control" value="{{ Input::old('coordinates') }}">
                        </div>
                        <div class="form-group">
                          <label>Area Sq Ft</label>
                          <input name="areasqft" type="text" class="form-control" value="{{ Input::old('areasqft') }}">
                        </div>
                        <div class="form-group">
                          <label>Area Sq M</label>
                          <input name="areasqm" type="text" class="form-control" value="{{ Input::old('areasqm') }}">
                        </div>
                        <div class="form-group">
                          <label>Area Name</label>
                          <input name="areaname" type="text" class="form-control" value="{{ Input::old('areaname') }}">
                        </div>
                        <a href="{{route('muteena')}}" class="btn btn-default">Back</a>
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