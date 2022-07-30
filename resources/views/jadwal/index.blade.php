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

                <form method="POST" action="#"> 

                <div class="row">
                  <div class="col-3">
                    <button type="button" data-toggle="modal" data-target="#modal-insert" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Add Data</button>
                  </div>
                  <div class="col-4">
                    <select name="musim" class="form-control" required="">
                      @foreach($musim_data as $key)
                        <option value="{{ $key->musim_id }}">{{ $key->musim_tahun }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-4">
                   <select name="musim" class="form-control" required="">
                      @foreach($musim_data as $key)
                        <option value="{{ $key->musim_id }}">{{ $key->musim_tahun }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-1">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                  </div>

                </div>

                </form>

                <br/>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

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
        <form method="post" action="{{ url('jadwal/insert') }}">
          @csrf
          <div class="form-group">
            <label>Pilih Musim</label>
            <select name="musim" class="form-control" required="">
              <option value="" hidden="">-- Pilih --</option>
              @foreach($musim_data as $key)
                <option value="{{ $key->musim_id }}">{{ $key->musim_tahun }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Tanggal Mulai</label>
            <input required="" type="date" name="tanggal" class="form-control">
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