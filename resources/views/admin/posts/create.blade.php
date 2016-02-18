@extends('admin.template.main')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">User details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    @include('messages')
                    {!!Form::open(['url' => route('admin.post.store'), 'role' => 'form'])!!}
                        <!-- text input -->
                        <div class="form-group">
                          <label>Name</label>
                          <input name="name" type="text" class="form-control" placeholder="Your name" value="{{old('name')}}">
                        </div>

                        <div class="form-group">
                          <label>Status</label>
                          <select name="status" class="form-control">
                            <option value="1">Enabled</option>
                            <option value="0">Disabled</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Description</label>
                          <div class="input-group">
                              <textarea name="description" class="form-control" value="{{old('description')}}" rows="10"></textarea>

                          </div>
                        </div>
                       

                        <a href="{{route('admin.post.index')}}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-sml btn-primary">Create</button>
                    {!!Form::close()!!}
                </div><!-- /.box-body -->
              </div><!-- /.box -->                
             </div>
          </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div>
@endsection