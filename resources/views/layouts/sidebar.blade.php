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
                    {{-- <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{route('anggota.index')}}">
                            <span class="sidebar-menu-text">Anggota</span>
                        </a>
                    </li> --}}

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
                        <a class="sidebar-menu-button" href="{{route('lensa.index')}}">
                            <span class="sidebar-menu-text">Lensa</span>
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
                        <a class="sidebar-menu-button" href="{{route('riwayatAdmin')}}">
                            <span class="sidebar-menu-text">Kamera</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{route('riwayatLensaAdmin')}}">
                            <span class="sidebar-menu-text">Lensa</span>
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
                      <span class="sidebar-menu-text">Sewa Kamera</span>
                  </a>
              </li>
              <li class="sidebar-menu-item">
                  <a class="sidebar-menu-button" href="{{route('pinjamLensa')}}">
                      <span class="sidebar-menu-text">Sewa Lensa</span>
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
                      <span class="sidebar-menu-text">Kamera</span>
                  </a>
              </li>
              <li class="sidebar-menu-item">
                  <a class="sidebar-menu-button" href="{{route('riwayatLensa')}}">
                      <span class="sidebar-menu-text">Lensa</span>
                  </a>
              </li>
      </li>
  </ul>
        @endif




        </div>
        </div>
    </div>
</div>

@endif
