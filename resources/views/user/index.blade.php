@extends('template.main')

@extends('template.sidebar')

@section('content')

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">

              <!-- /.card-header -->
              <div class="card-body">

              	<button class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Data</button>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th width="50">Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  	@foreach ($data as $key)
					    
					   <tr>
	                    <td>{{ $key->user_name }}</td>
	                    <td>{{ $key->user_email }}</td>
	                    <td>
	                    	<button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></button>
	                    	<button type="button" onclick="del('user/delete/{{ $key->user_id }}')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
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
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection