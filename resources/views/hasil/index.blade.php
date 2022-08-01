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

                <form method="post" action="{{ url('hasil') }}"> 

                @csrf

                <div class="row">
                  <div class="col-md-5 col-xs-5">
                    <select name="musim" class="form-control" required="">
                      @foreach($musim_data as $key)
                        <option value="{{ $key->musim_id }}">{{ $key->musim_tahun }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-5 col-xs-5">
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

                        <div class="row card-text">

                          @php
                            $arr = implode(',', explode(',', $key->jadwal_team));
                            $db = DB::select("SELECT * FROM team WHERE team_id IN($arr)");
                          @endphp

                          <div class="col-md-4 text-center">
                            <img src="{{ url('img/team/'.$db[0]->team_logo) }}" height="25">
                            <p class="text-bold">{{ $db[0]->team_name }}</p>
                          </div>

                          @php
                            $s_a = $db[0]->team_id;
                            $s_b = $db[1]->team_id;
                            $jad = $key->jadwal_id;
                            $skor_a = DB::select("SELECT * FROM skor WHERE skor_team = '$s_a' AND skor_jadwal = '$jad'");
                            $skor_b = DB::select("SELECT * FROM skor WHERE skor_team = '$s_b' AND skor_jadwal = $jad");
                          @endphp

                          <div class="col-md-4 text-center">
                            <h4>{{ @$skor_a[0]->skor_nilai ?? '-' }} vs {{ @$skor_b[0]->skor_nilai ?? '-' }}</h4>
                          </div>
                          <div class="col-md-4 text-center">
                            <img src="{{ url('img/team/'.$db[1]->team_logo) }}" height="25">
                            <p class="text-bold">{{ $db[1]->team_name }}</p>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>

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

@endsection