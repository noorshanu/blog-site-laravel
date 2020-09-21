@extends('admin/layout/app')
@section('main-content')




<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin/post">Home</a></li>
              <li class="breadcrumb-item active">Category Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Categories edit</h3>
                </div>
                @include('includes/messages')
                <!-- /.card-header -->
                <!-- form start -->
              <form role="form" action="{{route('category.update',$catagories->id)}}" method="POST">
                {{csrf_field()}}
                {{method_field('PUT')}}
                  <div class="card-body">
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Category Tittle</label>
                        <input type="text" class="form-control" id="name"  name="name" placeholder="Enter Category Tittle" value="{{$catagories->name}}">
                          </div>
                          <div class="form-group">
                            <label for="slug">Category Slug</label>
                            <input type="text" class="form-control" id="slug"  name="slug" placeholder="Enter Category Slug" value="{{$catagories->slug}}">
                          </div>
                         
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="btn">Submit</button>
                    <a  href='{{route('category.index')}}' class="btn btn-warning" >Back</a>
                  </div>
                </form>
              </div>
              <!-- /.card -->



        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection