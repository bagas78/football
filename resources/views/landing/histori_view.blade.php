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

<div class="container-fluid mt-5">
    <div class="card mt-3">

        <div class="card-header bg-white">
            <div class="form-group">
                <form action="{{ url('landing/histori_view/'.$current) }}" method="POST">

                    @csrf 
                    
                    <div class="row">
                        <div class="col-md-11">
                          <select class="form-control" name="musim">
                            @foreach($musim_data as $m)
                                <option value="{{ $m->musim_id }}">{{ $m->musim_tahun }}</option>
                            @endforeach
                          </select>  
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

       @php
        $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

        $x = array();
       @endphp

        <div class="card-body" id="content">

            @foreach($hasil_data as $h)

            @if( in_array($h->histori_pekan, $x) < 1)
                <p style="background: #e9ecef;padding: 1%;" class="font-weight-bold">Pekan ke-{{ $h->histori_pekan }}</p>
                <hr>
            @endif

            @php
                $x[] += $h->histori_pekan;
                $arr = implode(',', explode(',', $h->histori_team));
                $db = DB::select("SELECT * FROM team WHERE team_id IN($arr)");
            @endphp

            <div class="card mb-3">
                <div class="card-body">
                    <p class="card-title font-weight-bold" style="font-size: 15px; margin-bottom: 15px;">{{ $hari[date('N', strtotime($h->histori_pertandingan)) - 1] }}, {{ date('d/m/Y', strtotime($h->histori_pertandingan)) }}</p>

                    <div class="row card-text">
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('img/team/'.$db[0]->team_logo) }}" height="50">
                            <p class="font-weight-bold">{{ $db[0]->team_name }}</p>
                        </div>

                        @php
                            $s_a = $db[0]->team_id;
                            $s_b = $db[1]->team_id;
                            $jad = $h->histori_jadwal;
                            $skor_a = DB::select("SELECT * FROM skor WHERE skor_team = '$s_a' AND skor_jadwal = '$jad'");
                            $skor_b = DB::select("SELECT * FROM skor WHERE skor_team = '$s_b' AND skor_jadwal = $jad");
                        @endphp

                        <div class="col-md-4 text-center">
                            <b style="font-size: 18px">{{ @$skor_a[0]->skor_nilai ?? '-' }} vs {{ @$skor_b[0]->skor_nilai ?? '-' }}</b>
                            <p>Pekan ke-{{ $h->histori_pekan }} Musim {{ $h->musim_tahun }}</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('img/team/'.$db[1]->team_logo) }}" height="50">
                            <p class="font-weight-bold">{{ $db[1]->team_name }}</p>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

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