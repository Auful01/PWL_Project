@if (Auth::check())
<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-dark bg-dark sidebar-left sidebar-p-t" data-perfect-scrollbar>
        @if ( Auth::user()->role == 1 )
        <div class="sidebar-heading">ADMIN</div>
        <ul class="sidebar-menu">
            <li class="sidebar-menu-item active open">
                <a class="sidebar-menu-button" href="{{ url('/dashboard')}}">
                     &nbsp; <i class="fas fa-home"></i>
                    <span class="sidebar-menu-text">&nbsp;&nbsp;&nbsp;&nbsp;Beranda</span>
                </a>


            <li class="sidebar-menu-item">
                <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                    <span class="sidebar-menu-text">Master Data</span>
                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                </a>
                <ul class="sidebar-submenu collapse" id="apps_menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{route('user.index')}}">
                            <span class="sidebar-menu-text">User</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{route('anggota.index')}}">
                            <span class="sidebar-menu-text">Anggota</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-button" data-toggle="collapse" href="#menu">
                    <i
                        class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                    <span class="sidebar-menu-text">Data Barang</span>
                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                </a>
                <ul class="sidebar-submenu collapse" id="menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{route('kamera.index')}}">
                            <span class="sidebar-menu-text">Kamera</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{route('merek.index')}}">
                            <span class="sidebar-menu-text">Merek</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="sidebar-menu-item">
                <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                    <i
                        class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                    <span class="sidebar-menu-text">Transaksi</span>
                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                </a>
                <ul class="sidebar-submenu collapse" id="layouts_menu">
                    <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button" href="{{route('peminjaman.index')}}">
                            <span class="sidebar-menu-text">Peminjaman</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="fluid-dashboard.html">
                            <span class="sidebar-menu-text">Pengembalian</span>
                        </a>
                    </li>
            </li>
        </ul>

        @else
  {{-- USER --}}
  <div class="sidebar-heading">User</div>
  <ul class="sidebar-menu">
      <li class="sidebar-menu-item active open">
          <a class="sidebar-menu-button" href="{{ url('/dashboard')}}">
               &nbsp; <i class="fas fa-home"></i>
              <span class="sidebar-menu-text">&nbsp;&nbsp;&nbsp;&nbsp;Beranda</span>
          </a>


      <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" data-toggle="collapse" href="#menu_user">
              <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
              <span class="sidebar-menu-text">Transaksi</span>
              <span class="ml-auto sidebar-menu-toggle-icon"></span>
          </a>
          <ul class="sidebar-submenu collapse" id="menu_user">
              <li class="sidebar-menu-item">
                  <a class="sidebar-menu-button" href="{{route('sewa.index')}}">
                      <span class="sidebar-menu-text">Penyewaan</span>
                  </a>
              </li>
              <li class="sidebar-menu-item">
                  <a class="sidebar-menu-button" href="{{route('anggota.index')}}">
                      <span class="sidebar-menu-text">Anggota</span>
                  </a>
              </li>

          </ul>
      </li>

      <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" data-toggle="collapse" href="#menu_user2">
              <i
                  class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
              <span class="sidebar-menu-text">Data Barang</span>
              <span class="ml-auto sidebar-menu-toggle-icon"></span>
          </a>
          <ul class="sidebar-submenu collapse" id="menu_user2">
              <li class="sidebar-menu-item">
                  <a class="sidebar-menu-button" href="{{route('kamera.index')}}">
                      <span class="sidebar-menu-text">Kamera</span>
                  </a>
              </li>
              <li class="sidebar-menu-item">
                  <a class="sidebar-menu-button" href="{{route('merek.index')}}">
                      <span class="sidebar-menu-text">Merek</span>
                  </a>
              </li>
          </ul>
      </li>


      <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu2">
              <i
                  class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
              <span class="sidebar-menu-text">Riwayat Transaksi</span>
              <span class="ml-auto sidebar-menu-toggle-icon"></span>
          </a>
          <ul class="sidebar-submenu collapse" id="layouts_menu2">
              <li class="sidebar-menu-item active">
                  <a class="sidebar-menu-button" href="{{route('pinjam.index')}}">
                      <span class="sidebar-menu-text">Peminjaman</span>
                  </a>
              </li>
              <li class="sidebar-menu-item">
                  <a class="sidebar-menu-button" href="fluid-dashboard.html">
                      <span class="sidebar-menu-text">Pengembalian</span>
                  </a>
              </li>
      </li>
  </ul>
        @endif



            {{-- <div class="fixed-bottom">
            <div class="sidebar-block p-0 mb-0" style="position: fixed-bottom;">

                <div class="sidebar-p-a sidebar-b-y">
                    <div class="d-flex align-items-top mb-2">
                        <div class="sidebar-heading m-0 p-0 flex text-body js-text-body">Progress</div>
                        <div class="font-weight-bold text-success">60%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%"
                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account ">
                <a href="profile.html"
                    class="flex d-flex align-items-center text-underline-0 text-body">
                    <span class="avatar avatar-sm mr-2">
                        <img src="assets/images/avatar/demi.png" alt="avatar"
                            class="avatar-img rounded-circle">
                    </span>
                    <span class="flex d-flex flex-column">
                        <strong>Adrian Demian</strong>
                        <small class="text-muted text-uppercase">Site Manager</small>
                    </span>
                </a>
                <div class="dropdown ml-auto">
                    <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i
                            class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-item-text dropdown-item-text--lh">
                            <div><strong>Adrian Demian</strong></div>
                            <div>@adriandemian</div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item active" href="index.html">Dashboard</a>
                        <a class="dropdown-item" href="profile.html">My profile</a>
                        <a class="dropdown-item" href="edit-account.html">Edit account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </div>
            </div>

            <div class="sidebar-p-a">
                <a href="https://themeforest.net/item/stack-admin-bootstrap-4-dashboard-template/22959011"
                    class="btn btn-primary btn-block">Purchase &dollar;35</a>
            </div> --}}
        </div>
        </div>
    </div>
</div>

@endif
