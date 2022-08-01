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

              	<button data-toggle="modal" data-target="#modal-insert" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Data</button>

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
  	                    	<button data-toggle="modal" data-target="#modal-edit{{ $key->user_id }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></button>
  	                    	<button type="button" onclick="del('user/delete/{{ $key->user_id }}')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
  	                    </td>
  	                  </tr>

                      <div class="modal fade" id="modal-edit{{ $key->user_id }}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Edit Data</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="{{ url('user/update') }}">
                                @csrf

                                <!--id-->
                                <input type="hidden" name="id" class="form-control" value="{{ $key->user_id }}">

                                <div class="form-group">
                                  <label>Name</label>
                                  <input type="text" name="name" class="form-control" required="" placeholder="Full Name" value="{{ $key->user_name }}">
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="email" name="email" class="form-control" required="" placeholder="example@gmail.com" value="{{ $key->user_email }}">
                                </div>
                                <div class="form-group">
                                  <label>Password</label>
                                  <input type="password" name="password" class="form-control" placeholder="Uniq password" autocomplete="new-password">
                                  <small class="text-danger">* fill to change password</small>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                              </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->

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

<div class="modal fade" id="modal-insert">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('user/insert') }}">
          @csrf
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required="" placeholder="Full Name">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required="" placeholder="example@gmail.com">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required="" placeholder="Uniq password">
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection