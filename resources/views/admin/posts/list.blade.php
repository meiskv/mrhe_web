
@extends('admin.template.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">posts</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            @if($posts)
                                <table class="table">
                                    <tr>
                                      <th class="col-md-1">#</th>
                                      <th class="col-md-2">Title</th>
                                      <th class="col-md-2">Description
                                      <th class="col-md-2">Status</th>
                                      <th class="col-md-1">Created</th>
                                      <th class="col-md-2">Actions</th>
                                    </tr>
                                    @foreach($posts as $post)
                                        <tr>
                                          <td>{{$post->id}}</td>
                                          <td><a href="{{route('admin.post.edit', $post->id)}}">{{$post->name}}</a></td>
                                          <td>{{$post->description}}</td>
                                          <td>{{$post->status}}</td>
                                          <td>{{$post->created_at->format('d M Y')}}</td>
                                          <td>
                                                {!!Form::open(['url' => route('admin.post.destroy', $post->id), 'method' => 'delete' ])!!}
                                                    <a href="{{route('admin.post.edit', $post->id)}}" class="btn btn-sml btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                                                    <button type="submit" class="btn btn-sml btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-timex"></i> Delete</button>
                                                {!!Form::close()!!}
                                          </td>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                                <p class="alert alert-warning">No posts to show</p>
                            @endif
                        </div><!-- /.box-body -->
                        @include('admin.template.pagination', ['pages' => $posts])                        
                    </div><!-- /.box -->
                </div>
            </div>
        </section>
    </div>
@endsection