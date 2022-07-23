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

              	<button data-toggle="modal" data-target="#modal-insert" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Add Data</button>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Team Name</th>
                    <th width="1">Logo</th>
                    <th width="50">Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  	@foreach ($data as $key)
					    
  					         <tr>
  	                    <td>{{ $key->team_name }}</td>
  	                    <td><img width="50" src="{{ url('img/team/'.$key->team_logo) }}"></td>
  	                    <td>
  	                    	<button data-toggle="modal" data-target="#modal-edit{{ $key->team_id }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></button>
  	                    	<button type="button" onclick="del('team/delete/{{ $key->team_id }}')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
  	                    </td>
  	                  </tr>

                      <div class="modal fade" id="modal-edit{{ $key->team_id }}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Edit Data</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="{{ url('team/update') }}" enctype="multipart/form-data">
                                @csrf

                                <!--id-->
                                <input type="hidden" name="id" class="form-control" value="{{ $key->team_id }}">

                                <div class="form-group">
                                  <label>Name Team</label>
                                  <input type="text" name="name" class="form-control" required="" placeholder="Full Name" value="{{ $key->team_name }}">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputFile">Logo</label><small>(jpg, png, gif)</small>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                  </div>
                                  <img width="100" class="img img-thumbnail mt-2" src="{{ url('img/team/'.$key->team_logo) }}">
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
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
        <h4 class="modal-title">Add Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('team/insert') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Team Name</label>
            <input type="text" name="name" class="form-control" required="" placeholder="Full Name">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Logo</label><small>(jpg, png, gif)</small>
            <div class="input-group">
              <div class="custom-file">
                <input required="" type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection