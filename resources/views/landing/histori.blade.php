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

        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tim</th>
                    <th style="width: 8%;">Histori</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach($team_data as $key)

                    <tr>
                        <td><img width="50" src="{{ asset('img/team/'.$key->team_logo) }}"> &#160;&#160; <span>{{ $key->team_name }}</span></td>
                        <td>
                            <a href="{{ url('landing/histori_view/'.$key->team_id) }}"><button class="btn btn-primary btn-sm">Lihat <i class="fa fa-eye"></i></button></a>
                        </td>
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