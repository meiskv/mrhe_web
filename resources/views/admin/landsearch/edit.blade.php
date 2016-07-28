@extends('admin.template.main')
@section('content')
@section('title', 'Land Search')
<div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Editing Data<small>Land Search</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                <div class="box-body">
                    @include('messages')
                    {!!Form::open(['url' => route('admin.landsearch.update', $landsearch->id), 'method' => 'put', 'role' => 'form'])!!}
                        <!-- text input -->
                        <div class="form-group">
                          <label>Land Number</label>
                          <select name="land_number_id" class="js-example-basic-single form-control">
                            <option selected>{{$landsearch->land_number_id}}</option>
                       @foreach ($landareas as $landdata)
                            <option value="{{ $landsearch->land_number_id }}">{{ $landsearch->land_number_id }}</option>
                             @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Land Use</label>
                          <input name="land_use" type="text" class="form-control" value="{{ $landsearch->land_use }}">
                        </div>
                        <div class="form-group">
                          <label>Plan</label>
                          <input name="plan" type="text" class="form-control" value="{{ $landsearch->plan }}">
                        </div>
                        <div class="form-group">
                          <label>Beneficiary</label>
                          <input name="beneficiary" type="text" class="form-control" value="{{ $landsearch->beneficiary }}">
                        </div>
                        <div class="form-group">
                          <label>Owners Name</label>
                          <input name="owners_name" type="text" class="form-control" value="{{ $landsearch->owners_name }}">
                        </div>
                        <div class="form-group">
                          <label>Longitude</label>
                          <input name="longitude" type="text" class="form-control" value="{{ $landsearch->longitude }}">
                        </div>
                        <div class="form-group">
                          <label>Latitude</label>
                          <input name="latitude" type="text" class="form-control" value="{{ $landsearch->latitude }}">
                        </div>
                        <div class="form-group">
                          <label>Area Sq Ft</label>
                          <input name="areasqft" type="text" class="form-control" value="{{ $landsearch->areasqft }}">
                        </div>
                        <div class="form-group">
                          <label>Area Sq M</label>
                          <input name="areasqm" type="text" class="form-control" value="{{ $landsearch->areasqm }}">
                        </div>
                        <div class="form-group">
                          <label>Area Name</label>
                          <input name="areaname" type="text" class="form-control" value="{{ $landsearch->areaname }}">
                        </div>
                        <a href="{{route('lands')}}" class="btn btn-default">Back</a>
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