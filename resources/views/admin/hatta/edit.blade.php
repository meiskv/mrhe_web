@extends('admin.template.main')
@section('content')
@section('title', 'Hatta Makan')
<div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Editing Data<small>of Hatta Makan</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                <div class="box-body">
                    @include('messages')
                    {!!Form::open(['url' => route('admin.muteena.update', $muteena->id), 'method' => 'put', 'role' => 'form'])!!}
                        <!-- text input -->
                        <div class="form-group">
                          <label>Land Number</label>
                          <select name="land_number_id" class="js-example-basic-single form-control">
                            <option selected>{{$muteena->land_number_id}}</option>
                       @foreach ($fland as $landdata)
                            <option value="{{ $landdata->land_number }}">{{ $landdata->land_number }}</option>
                             @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Property No.</label>
                          <input name="property_no" type="text" class="form-control" value="{{$muteena->property_no}}">
                        </div>
                        <div class="form-group">
                          <label>Plan Type</label>
                          <input name="plan_type" type="text" class="form-control" value="{{$muteena->plan_type}}">
                        </div>
                        <div class="form-group">
                          <label>Style</label>
                          <input name="style" type="text" class="form-control" value="{{$muteena->style}}">
                        </div>
                        <div class="form-group">
                          <label>Land Area</label>
                          <input name="land_area" type="text" class="form-control" value="{{$muteena->land_area}}">
                        </div>
                        <div class="form-group">
                          <label>Property Area</label>
                          <input name="property_area" type="text" class="form-control" value="{{$muteena->property_area}}">
                        </div>
                        <div class="form-group">
                          <label>No. of Bedrooms</label>
                          <input name="no_of_bedroom" type="text" class="form-control" value="{{$muteena->no_of_bedroom}}">
                        </div>
                        <div class="form-group">
                          <label>No. of Bathrooms</label>
                          <input name="no_of_bathroom" type="text" class="form-control" value="{{$muteena->no_of_bathroom}}">
                        </div>
                        <div class="form-group">
                          <label>Total Built Area</label>
                          <input name="total_built_area" type="text" class="form-control" value="{{$muteena->total_built_area}}">
                        </div>
                        <a href="{{route('muteena')}}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-sml btn-primary">Update</button>
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