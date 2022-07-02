@extends('backend.master')
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Admin Panel</h2>


              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                 
                </div>
              </div>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                   

                  </tr>
                </thead>
                <tbody>
               <?php $i=0 ?>
            @foreach ($key as $value)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$value->author}}</td>
                      <td>{{$value->title}}</td>
                      <td>{{$value->description}}</td>
                      <td><img src="{{asset($value->image)}}" width="30px" height="20px"></td>

                        <td>
                          <a type="button" href="{{url('blog-delete', $value->id)}}" class="btn btn-danger">Delete</i></a>
                          <a type="button" href="{{url('edit', $value->id)}}" class="btn btn-primary">Edit</a>
                       </td>
               
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->



@endsection