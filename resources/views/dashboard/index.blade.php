@extends('template.main')

@extends('template.sidebar')

@section('content')
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row"> 
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $team_num }}</h3>

                <p>Jumlah Tim</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $pertandingan_num }}</h3>

                <p>Jumlah Pertandingan</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $akan_num }}</h3>

                <p>Jumlah Akan Datang</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $selesai_num }}</h3>

                <p>Pertandingan Selesai</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>

    <!-- Main content -->
    <section class="content">
      <!-- BAR CHART -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">PERINGKAT TIM TERBAIK</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="chart">
            <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>

<script>
  $(function () {
    
    var areaChartData = {
      labels  : [
                  @php
                    $i = 0;
                  @endphp

                  @foreach ($data as $key)
                    
                    @php 

                    $id_team = $key->team;
                    $db = DB::select("SELECT * FROM team WHERE $id_team"); 
                    
                    @endphp

                    '{{ $db[$i]->team_name }}', 

                    @php
                    $i++;
                    @endphp

                  @endforeach
                ],
      datasets: [
        {
          label               : 'Tim Terbaik',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
                                  @foreach ($data as $key)
                    
                                    {{ $key->poin }}, 

                                  @endforeach
                                ]
        },
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    barChartData.datasets[0] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

  })
</script>

@endsection