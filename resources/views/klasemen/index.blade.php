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

                <form method="post" action="{{ url('klasemen') }}">
                  
                  @csrf

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

                </form>

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