@extends('template.main')

@extends('template.sidebar')

@section('content')

<style type="text/css">
  .status-danger{
    background: darkgray;
    color: white;
    max-width: fit-content;
    padding: 1%;
  }
  .status-success{
    background: mediumturquoise; 
    color: white;
    max-width: fit-content;
    padding: 1%;
  }
</style>
 
@php
$hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']
@endphp

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">

              <!-- /.card-header -->
              <div class="card-body">

                <form method="post" action="{{ url('jadwal') }}"> 

                @csrf
                
                <div class="row">
                  <div class="col-md-3">
                    <button id="btn-modal" type="button" data-toggle="modal" data-target="#modal-insert" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Data</button>
                  </div>
                  <div class="col-md-4 col-xs-4">
                    <select name="musim" class="form-control" required="">
                      @foreach($musim_data as $key)
                        <option value="{{ $key->musim_id }}">{{ $key->musim_tahun }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-4 col-xs-4">
                   <select name="pekan" class="form-control" required="">
                      @foreach($pekan_data as $key)
                        <option value="{{ $key->pekan }}">{{ 'Pekan Ke-'.$key->pekan }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-1 col-xs-1">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                  </div>

                </div>

                </form>

                <br/>

                <div class="row">

                  @foreach ($data as $key)

                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <p class="card-title font-weight-bold" style="font-size: 15px; margin-bottom: 25px;">{{ $hari[date('N', strtotime($key->jadwal_pertandingan)) - 1] }}, {{ date('d/m/Y', strtotime($key->jadwal_pertandingan)) }}</p>

                        @if ($key->jadwal_status == 0)
                          <span class="status-danger float-right font-weight-bold">Belum Di Mulai</span>
                        @else
                          <span class="status-success float-right font-weight-bold">Selesai Tanding</span>
                        @endif

                        <div class="row card-text">

                          @php
                            $arr = implode(',', explode(',', $key->jadwal_team));
                            $db = DB::select("SELECT * FROM team WHERE team_id IN($arr)");
                          @endphp

                          <div class="col-md-4 text-center">
                            <img src="{{ url('img/team/'.$db[0]->team_logo) }}" height="25">
                            <p class="text-bold">{{ $db[0]->team_name }}</p>
                          </div>
                          <div class="col-md-4 text-center">
                            <b>VS</b>
                            <p style="font-size: 15px">Pekan ke-{{ $key->jadwal_pekan }} Musim {{ $key->musim_tahun }}</p>
                          </div>
                          <div class="col-md-4 text-center">
                            <img src="{{ url('img/team/'.$db[1]->team_logo) }}" height="25">
                            <p class="text-bold">{{ $db[1]->team_name }}</p>
                          </div>

                          <div align="center" class="col-md-12">
                            <hr/>

                            @if($key->jadwal_status == 0)

                              <button type="button" data-toggle="modal" data-target="#modal-edit{{ $key->jadwal_id }}" class="btn btn-primary btn-sm">Tambah Skor</button>&#160;
                              <button onclick="del('jadwal/delete/{{ $key->jadwal_id }}')" class="btn btn-danger btn-sm">Hapus</button>

                             @endif

                          </div>

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="modal-edit{{ $key->jadwal_id }}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Tambah Skor</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="{{ url('jadwal/skor') }}">
                            @csrf
                            <div class="form-group">
                              <label>{{ $db[0]->team_name }}</label>
                              <input required="" type="number" name="skor_a" class="form-control" placeholder="Masukan Skor">
                            </div>
                            <div class="form-group">
                              <label>{{ $db[1]->team_name }}</label>
                              <input required="" type="number" name="skor_b" class="form-control" placeholder="Masukan Skor">
                            </div>

                            <!--hidden-->
                            <input type="hidden" name="team_a" value="{{ $db[0]->team_id }}">
                            <input type="hidden" name="team_b" value="{{ $db[1]->team_id }}">
                            <input type="hidden" name="jadwal" value="{{ $key->jadwal_id }}">
                            <input type="hidden" name="musim" value="{{ $key->jadwal_musim }}">

                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                          </form>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->

                  @endforeach

                </div>

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
        <form id="form-add" method="post" action="{{ url('jadwal/insert') }}">
          @csrf
          <div class="form-group">
            <label>Pilih Musim</label>
            <select id="musim" name="musim" class="form-control" required="">
              <option value="" hidden="">-- Pilih --</option>
              @foreach($musim_data as $key)
                <option value="{{ $key->musim_id }}">{{ $key->musim_tahun }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Tanggal Mulai</label>
            <input id="tanggal" required="" type="date" name="tanggal" class="form-control">
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button onclick="jadwal()" type="button" class="btn btn-primary">Simpan Perubahan</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script type="text/javascript">

    function jadwal(){

      if ($('#musim').val() != '' && $('#tanggal').val() != '') {
      
      Swal.fire({
          title: 'Kamu yakin?',
          text: "Semua data lama akan di hapus, dan di gantikan baru",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Lanjut!'
        }).then((result) => {
          if (result.isConfirmed) {

            //submit
            $('#form-add').submit();

            //set button
            $('#btn-modal').css({'background': 'darkgrey','border-color': 'darkgrey'});
            $('#btn-modal').removeAttr('data-toggle','modal');
            $('#modal-insert').modal('toggle');

          }
        })
      }

    }

</script>

@endsection