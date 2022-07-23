
 @section('sidebar')

 <style type="text/css">
   .text-tumbnail{
      color: white;
      background: brown;
      padding: 10px;
      border-radius: 100%;
      width: 44px;
      text-align: center;
      font-weight: bold;
   }
 </style>

 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <img style="width: 100%; padding: 3%; border-radius: 20px;" class="img" src="/img/logo.png">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
          <div class="text-tumbnail">
            <span>{{ ucfirst(substr(Session::get('user_name'), 0, 1)) }}</span>
          </div>
        </div>
        <div class="info" style="position: relative; top: 5px;">
          <span class="d-block text-white">{{ Session::get('user_name') }}</span>
        </div>
      </div> 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="{{ url('dashboard') }}" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('user') }}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                User Control
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview {{ Request::is('team*') || Request::is('musim*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('team') }}" class="nav-link {{ Request::is('team*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-shield-alt"></i>
                  <p>Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('musim') }}" class="nav-link {{ Request::is('musim*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>Musim Liga</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::is('jadwal*') || Request::is('hasil*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Pertandingan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('jadwal') }}" class="nav-link {{ Request::is('jadwal*') ? 'active' : '' }}">
                  <i class="far fa-clock nav-icon"></i>
                  <p>Jadwal Pertandingan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('hasil') }}" class="nav-link {{ Request::is('hasil*') ? 'active' : '' }}">
                  <i class="nav-icon fa fa-tasks"></i>
                  <p>Hasil Pertandingan</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ url('klasemen') }}" class="nav-link {{ Request::is('klasemen*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-trophy"></i>
              <p>
                Klasemen
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @endsection