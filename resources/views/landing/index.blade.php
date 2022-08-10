@extends('landing.main')

@section('head')
<link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
<style>
    .owl-carousel {
        font-size: 12px;
    }

    .owl-carousel .card {
        height: 200px;
    }

    @media screen and (max-width: 600px) {
        .owl-carousel .card {
            height: 480px;
        }

        .owl-carousel .owl-item img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    }
    .3d{
        transform: translate3d(0px, 0px, 0px); 
        transition: all 0s ease 0s; 
        width: 1608px;
    }
</style>
@endsection

@section('content')

@php
$hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']
@endphp
    
        <div class="container-fluid mt-5">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('landing/jadwal') }}" class="float-right text-dark">Lihat semua jadwal &gt;&gt;</a>
                    <h5>Jadwal Pertandingan</h5>

                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage 3d">

                                @foreach($jadwal_data as $j)

                                @php
                                    $arr = implode(',', explode(',', $j->jadwal_team));
                                    @$db = DB::select("SELECT * FROM team WHERE team_id IN($arr)");
                                @endphp

                                <div class="owl-item active" style="width: 258px; margin-right: 10px;">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-title font-weight-bold" style="font-size: 15px; margin-bottom: 15px;">{{ $hari[date('N', strtotime($j->jadwal_pertandingan)) - 1] }}, {{ date('d/m/Y', strtotime($j->jadwal_pertandingan)) }}</p>

                                            <div class="row card-text">
                                                <div class="col-md-4 text-center">
                                                    <img src="{{ asset('img/team/'.@$db[0]->team_logo) }}">
                                                    <p class="font-weight-bold">{{ @$db[0]->team_name }}</p>                       
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <b>VS</b>
                                                    <p>Pekan ke-{{ $j->jadwal_pekan }} Musim {{ $j->musim_tahun }}</p>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <img src="{{ asset('img/team/'.@$db[1]->team_logo) }}">                                
                                                    <p class="font-weight-bold">{{ @$db[1]->team_name }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <div class="card mt-3">
        <div class="card-body">
            <a href="{{ url('landing/hasil') }}" class="float-right text-dark">Lihat semua hasil &gt;&gt;</a>
            <h5>Hasil Pertandingan</h5>

            <div class="owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage 3d">
                        
                        @foreach($hasil_data as $h)

                            @php
                                $arr = implode(',', explode(',', $h->jadwal_team));
                                @$db = DB::select("SELECT * FROM team WHERE team_id IN($arr)");
                            @endphp

                            <div class="owl-item active" style="width: 258px; margin-right: 10px;">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-title font-weight-bold" style="font-size: 15px; margin-bottom: 15px;">{{ $hari[date('N', strtotime($h->jadwal_pertandingan)) - 1] }}, {{ date('d/m/Y', strtotime($h->jadwal_pertandingan)) }}</p>

                                        <div class="row card-text">
                                            <div class="col-md-4 text-center">
                                                <img src="{{ asset('img/team/'.@$db[0]->team_logo) }}">
                                                <p class="font-weight-bold">{{ @$db[0]->team_name }}</p>                       
                                            </div>

                                            @php
                                                $s_a = @$db[0]->team_id;
                                                $s_b = @$db[1]->team_id;
                                                $jad = $h->jadwal_id;
                                                $skor_a = DB::select("SELECT * FROM skor WHERE skor_team = '$s_a' AND skor_jadwal = '$jad'");
                                                $skor_b = DB::select("SELECT * FROM skor WHERE skor_team = '$s_b' AND skor_jadwal = $jad");
                                            @endphp

                                            <div class="col-md-4 text-center">
                                                <b style="font-size: 18px">{{ @$skor_a[0]->skor_nilai ?? '-' }} vs {{ @$skor_b[0]->skor_nilai ?? '-' }}</b>
                                                <p>Pekan ke-{{ $h->jadwal_pekan }} Musim {{ $h->musim_tahun }}</p>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <img src="{{ asset('img/team/'.@$db[1]->team_logo) }}">                                
                                                <p class="font-weight-bold">{{ @$db[1]->team_name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                   </div>
               </div>
           </div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5>Klasemen 5 Besar</h5>

            <div class="table-responsive">
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
                        
                    <tr>
                        <td>{{ $t->tim }}</td>
                        <td>{{ $t->p ?? '0' }}</td>
                        <td>{{ $t->m ?? '0' }}</td>
                        <td>{{ $t->s ?? '0' }}</td>
                        <td>{{ $t->k ?? '0' }}</td>
                        <td>{{ $t->gm ?? '0' }}</td>
                        <td>{{ $t->ga ?? '0' }}</td>
                        <td>{{ @abs($t->gm - $t->ga) ?? '0' }}</td>
                        <td>{{ $t->poin ?? '0' }}</td>
                    </tr>

                    @endforeach
                  
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>
@endsection