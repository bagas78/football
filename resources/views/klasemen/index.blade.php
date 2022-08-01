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

                <div class="row">
                  <div class="col-md-11 col-xs-11">
                   <select name="musim" class="form-control" required="">
                      @foreach($musim_data as $key)
                        <option value="{{ $key->musim_id }}">{{ $key->musim_tahun }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-1 col-xs-1">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                  </div>
                </div>

                <br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tim</th>
                    <th>P</th>
                    <th>M</th>
                    <th>S</th>
                    <th>K</th>
                    <th>GM</th>
                    <th>GA</th>
                    <th>SG</th>
                    <th>Poin</th>
                  </tr>
                  </thead>
                  <tbody>

                  	@foreach ($team_data as $t)

                    @php
                      $id_team = $t->team_id;
                      $jumlah = DB::select("SELECT COUNT(skor_team) AS jum, skor_team AS tim FROM skor WHERE skor_team = $id_team GROUP BY skor_team");
                      $menang = DB::select("SELECT COUNT(skor_poin) AS menang FROM skor WHERE skor_team = $id_team AND skor_poin = 3");
                      $kalah = DB::select("SELECT SUM(skor_poin) AS kalah FROM skor WHERE skor_team = $id_team AND skor_poin = 0");
                      $seri = DB::select("SELECT SUM(skor_poin) AS seri FROM skor WHERE skor_team = $id_team AND skor_poin = 1");
                      $gol = DB::select("SELECT SUM(skor_nilai) AS gol FROM skor WHERE skor_team = $id_team");
                      $bobol = DB::select("SELECT SUM(skor_bobol) AS bobol FROM skor WHERE skor_team = $id_team");
                      $poin = DB::select("SELECT SUM(skor_poin) AS poin FROM skor WHERE skor_team = $id_team AND skor_poin = 3");

                      // echo '<pre>';
                      // print_r();
                    @endphp
					    
  					         <tr>
  	                    <td>{{ $t->team_name }}</td>
                        <td>{{ @$jumlah[0]->jum ?? '0' }}</td>
                        <td>{{ @$menang[0]->menang ?? '0' }}</td>
                        <td>{{ @$seri[0]->seri ?? '0' }}</td>
                        <td>{{ @$kalah[0]->kalah ?? '0' }}</td>
                        <td>{{ @$gol[0]->gol ?? '0' }}</td>
                        <td>{{ @$bobol[0]->bobol ?? '0' }}</td>
                        <td>{{ @abs($gol[0]->gol - @$bobol[0]->bobol) ?? '0' }}</td>
                        <td>{{ @$poin[0]->poin ?? '0' }}</td>
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