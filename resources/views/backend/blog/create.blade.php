@extends('backend.master')
@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" Action="{{url('dataCreate')}}" method="post" id="quickForm" enctype="multipart/form-data">
             @csrf
              <div class="card-body">

                <div class="form-group">
                  <label for="exampleInputPassword1">Author name</label>
                  <input type="text" name="x" class="form-control" id="exampleInputPassword1" value="old" >

                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputPassword1" >
                  </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword1">	image </label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
                  </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" name="description" class="form-control" id="exampleInputPassword1" >
                </div>

              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection