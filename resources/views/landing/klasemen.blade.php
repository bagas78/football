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
                <form action="{{ url('landing/klasemen') }}" method="POST">

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

        <div class="card-body">
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