@extends('admin/layout/app')
@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Text Editors</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="admin/post">Home</a></li>
                        <li class="breadcrumb-item active">Text Editors</li>
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
                        <h3 class="card-title">Tittles</h3>
                    </div>
                    @include('includes.messages')
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('post.store') }}" method="POST">
                     {{ csrf_field() }}
                        <div class="card-body">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tittle">Post Tittle</label>
                                    <input type="text" class="form-control" id="tittle" name="tittle"
                                        placeholder="Enter post tittle">
                                </div>
                                <div class="form-group">
                                    <label for="subtittle">Sub Tittle</label>
                                    <input type="text" class="form-control" id="subtittle" name="subtittle"
                                        placeholder="Enter post sub tittle">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Post Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        placeholder="Enter post slug">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Image upload</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status">
                                    <label class="form-check-label" for="exampleCheck1">Publish</label>
                                </div>

                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Write Post Here
                                    <small>in box</small>
                                </h3>
                                <!-- tools box -->
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>

                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pad">
                                <div class="mb-3">
                                    <textarea class="textarea" name="body" placeholder="Place some text here"
                                        style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>

                            </div>
                        </div>
                        </div>
            </div>



                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="btn">Submit</button>
                    <a  href='{{route('post.index')}}'  class="btn btn-warning" >Back</a>
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

@section('footer')

<script>
    $(function () {
      // Summernote
      $('.textarea').summernote()
    })
  </script>
@endsection