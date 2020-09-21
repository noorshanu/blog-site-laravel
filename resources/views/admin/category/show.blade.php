@extends('admin/layout/app')
@section('head')
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Categories List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin/home">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
          
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All the Tags</h3>
            <a class="col-lg-offset-5 btn btn-success" href="{{route('category.create')}}">Add New</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.no</th>
                  <th>Category Name</th>
                  <th>slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                 
                  @foreach ($catagories as $category)
                 
                  <tr>
                    
                    <td>{{ $loop->index +1 }}</td>
                    
                    <td>{{$category->name }}</td>
                   
                    <td>{{$category->slug }}</td>
                    
                    <td><a href="{{route('category.edit',$category->id)}}">
                      <i class="fas fa-edit"></i></a>
                    </td>

                    <td>
                    
                      <form  id="delete-form-{{$category->id}}" action="{{route('category.destroy',$category->id)}} " method="POST" style="display:none">
                    
                      {{csrf_field()}}
                    
                    {{method_field('DELETE')}}
                    </form>
                  <a href="" onclick="
                  if(confirm('Are you sure?'))
                  {
                      event.preventDefault();
                      document.getElementById('delete-form-{{$category->id}}').submit();
                  }
                  else
                  {

                    event.preventDefault();

                    }">
                    <i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr> 
                  @endforeach
               
               
               
                </tbody>
                <tfoot>
                <tr>
                  <th>S.no</th>
                  <th>Tag Name</th>
                  <th>slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>



@endsection





@section('footer')
<!-- DataTables -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
    
@endsection