<div class="nk-sidebar">           
  <div class="nk-nav-scroll">
      <ul class="metismenu" id="menu">
        @if(auth()->user()->level == 1)
          <li>
              <a href="{{ route('superadmin.dashboard') }}" aria-expanded="false">
                <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
              </a>
          </li>
          <li>
              <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                  <i class="icon-envelope menu-icon"></i><span class="nav-text">Admin</span>
              </a>
              <ul aria-expanded="false">
                  <li><a href="{{ route('superadmin.admin.index') }}">Admin</a></li>
                  <li><a href="{{ route('superadmin.admin.create') }}">Tambah</a></li>
              </ul>
          </li>
          <li>
              <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                  <i class="icon-envelope menu-icon"></i><span class="nav-text">Agensi</span>
              </a>
              <ul aria-expanded="false">
                  <li><a href="{{ route('superadmin.agensi.index') }}">Agensi</a></li>
                  <li><a href="{{ route('superadmin.agensi.create') }}">Tambah</a></li>
                  <li><a href="{{ route('superadmin.agensi.verification') }}">Verifikasi</a></li>
              </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Pendaftar</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('superadmin.user.index') }}">Pendaftar</a></li>
                <li><a href="{{ route('superadmin.user.create') }}">Tambah</a></li>
            </ul>
          </li>
          <li>
            <a href="{{ route('superadmin.project.index') }}" aria-expanded="false">
              <i class="icon-envelope menu-icon"></i><span class="nav-text">Project</span>
            </a>
          </li>
          <li>
            <a href="{{ route('superadmin.lowongan.index') }}" aria-expanded="false">
              <i class="icon-envelope menu-icon"></i><span class="nav-text">Lowongan</span>
            </a>
          </li>
        @endif
        @if(auth()->user()->level == 2)
          <li>
              <a href="{{ route('admin.dashboard') }}" aria-expanded="false">
                <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
              </a>
          </li>
          <li>
              <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                  <i class="icon-envelope menu-icon"></i><span class="nav-text">Agensi</span>
              </a>
              <ul aria-expanded="false">
                  <li><a href="{{ route('admin.agensi.index') }}">Agensi</a></li>
                  <li><a href="{{ route('admin.agensi.create') }}">Tambah</a></li>
                  <li><a href="{{ route('admin.agensi.verification') }}">Verifikasi</a></li>
              </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Pendaftar</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('superadmin.user.index') }}">Pendaftar</a></li>
                <li><a href="{{ route('superadmin.user.create') }}">Tambah</a></li>
            </ul>
          </li>
          <li>
            <a href="{{ route('admin.project.index') }}" aria-expanded="false">
              <i class="icon-envelope menu-icon"></i><span class="nav-text">Project</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.lowongan.index') }}" aria-expanded="false">
              <i class="icon-envelope menu-icon"></i><span class="nav-text">Lowongan</span>
            </a>
          </li>
        @endif
        @if(auth()->user()->level == 3)
          <li>
              <a href="{{ route('agensi.dashboard') }}" aria-expanded="false">
                <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
              </a>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Project</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('superadmin.project.index') }}">Project</a></li>
                <li><a href="{{ route('superadmin.project.create') }}">Tambah</a></li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Lowongan</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('superadmin.lowongan.index') }}">Lowongan</a></li>
                <li><a href="{{ route('superadmin.lowongan.create') }}">Tambah</a></li>
            </ul>
          </li>
        @endif
      </ul>
  </div>
</div>