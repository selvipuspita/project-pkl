<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('DashboardUser') }}" :active="request()->routeIs('DashboardUser')" class="brand-link">
        <img src="{{asset('img/logonya.png')}}" alt="UIN Bandung"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PTIPD UINSGD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-header nav-icon fas fa-tachometer-alt"> D A S H B O A R D</li>
               <li class="nav-item">
                    <a href="{{ route('DashboardUser') }}" :active="request()->routeIs('DashboardUser')" class="nav-link">
                        <i class="nav-icon fa fa-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile.show') }}" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>Akun</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pengguna.index')}}" class="nav-link">
                      <i class="nav-icon fa fa-bars"></i>
                      <p>
                        Kegiatan Lembur
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('pengguna.index')}}" class="nav-link">
                          <i class="fa fa-file nav-icon"></i>
                          <p>Rekap Kegiatan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('pengguna.create')}}" class="nav-link">
                          <i class="fa fa-plus-circle nav-icon"></i>
                          <p>Tambah Kegiatan</p>
                        </a>
                      </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('kegiatan.index')}}" class="nav-link">
                      <i class="nav-icon fa fa-chevron-circle-down"></i>
                      <p>
                        Lainnya
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('kegiatan.index')}}" class="nav-link">
                          <i class="fa fa-calendar-check nav-icon"></i>
                          <p>
                            Kegiatan
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{route('kegiatan.index')}}" class="nav-link">
                              <i class="fa fa-list-ul nav-icon"></i>
                              <p>Daftar Kegiatan</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('kegiatan.create')}}" class="nav-link">
                              <i class="fa fa-plus-circle nav-icon"></i>
                              <p>Tambah Kegiatan</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{route('uraian.index')}}" class="nav-link">
                            <i class="fas fa-file nav-icon"></i>
                            <p>
                                Hasil Uraian
                                <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="{{route('uraian.index')}}" class="nav-link">
                                <i class="fa fa-list-ul nav-icon"></i>
                                <p>Daftar Uraian Hasil</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="{{route('uraian.create')}}" class="nav-link">
                                <i class="fa fa-plus-circle nav-icon"></i>
                                <p>Tambah Uraian Hasil</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            <i class="nav-icon fa fa-power-off"></i>
                            <p>Keluar</p>
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
