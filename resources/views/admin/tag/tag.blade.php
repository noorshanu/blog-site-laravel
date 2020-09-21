@extends('admin/layout/app')
@section('main-content')




<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tags</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin/post">Home</a></li>
              <li class="breadcrumb-item active">Tags Input</li>
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
                  <h3 class="card-title">Tags</h3>
                </div>
                @include('includes.messages')
               
                <!-- /.card-header -->
                <!-- form start -->
              <form role="form" action="{{route('tag.store')}}" method="POST">
                {{csrf_field()}}
                  <div class="card-body">
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Tag Tittle</label>
                            <input type="text" class="form-control" id="name"  name="name" placeholder="Enter Tag Tittle">
                          </div>
                          <div class="form-group">
                            <label for="slug">Tag Slug</label>
                            <input type="text" class="form-control" id="slug"  name="slug" placeholder="Enter Tag Slug">
                          </div>
                         
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="btn">Submit</button>
                  <a  href='{{route('tag.index')}}' class="btn btn-warning" >Back</a>
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