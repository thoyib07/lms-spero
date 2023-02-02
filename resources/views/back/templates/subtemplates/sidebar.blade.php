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
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Project</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('superadmin.project.index') }}">Project</a></li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Lowongan</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('superadmin.lowongan.index') }}">Lowongan</a></li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Materi</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('superadmin.materi.index') }}">Materi</a></li>
                <li><a href="{{ route('superadmin.materi.create') }}">Tambah</a></li>
                <li>
                  <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <span class="nav-text">PreTest</span>
                  </a>
                  <ul aria-expanded="false">
                      <li><a href="{{ route('superadmin.pretest.index') }}">PreTest</a></li>
                      <li><a href="{{ route('superadmin.pretest.create') }}">Tambah</a></li>
                  </ul>
                </li>
                <li>
                  <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <span class="nav-text">PostTest</span>
                  </a>
                  <ul aria-expanded="false">
                      <li><a href="{{ route('superadmin.posttest.index') }}">PostTest</a></li>
                      <li><a href="{{ route('superadmin.posttest.create') }}">Tambah</a></li>
                  </ul>
                </li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Notifikasi</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('superadmin.notifikasi.index') }}">Notifikasi</a></li>
                <li><a href="{{ route('superadmin.notifikasi.create') }}">Tambah</a></li>
            </ul>
          </li>
        @elseif(auth()->user()->level == 2)
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
                <li><a href="{{ route('admin.user.index') }}">Pendaftar</a></li>
                <li><a href="{{ route('admin.user.create') }}">Tambah</a></li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Project</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('admin.project.index') }}">Project</a></li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Lowongan</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('admin.lowongan.index') }}">Lowongan</a></li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Materi</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('admin.materi.index') }}">Materi</a></li>
                <li><a href="{{ route('admin.materi.create') }}">Tambah</a></li>
                <li>
                  <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <span class="nav-text">PreTest</span>
                  </a>
                  <ul aria-expanded="false">
                      <li><a href="{{ route('admin.pretest.index') }}">PreTest</a></li>
                      <li><a href="{{ route('admin.pretest.create') }}">Tambah</a></li>
                  </ul>
                </li>
                <li>
                  <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <span class="nav-text">PostTest</span>
                  </a>
                  <ul aria-expanded="false">
                      <li><a href="{{ route('admin.posttest.index') }}">PostTest</a></li>
                      <li><a href="{{ route('admin.posttest.create') }}">Tambah</a></li>
                  </ul>
                </li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Notifikasi</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('admin.notifikasi.index') }}">Notifikasi</a></li>
                <li><a href="{{ route('admin.notifikasi.create') }}">Tambah</a></li>
            </ul>
          </li>
        @elseif(auth()->user()->level == 3)
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
                <li><a href="{{ route('agensi.project.index') }}">Project</a></li>
                <li><a href="{{ route('agensi.project.create') }}">Tambah</a></li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Lowongan</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('agensi.lowongan.index') }}">Lowongan</a></li>
                <li><a href="{{ route('agensi.lowongan.create') }}">Tambah</a></li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Materi</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('agensi.materi.index') }}">Materi</a></li>
                <li><a href="{{ route('agensi.materi.create') }}">Tambah</a></li>
                <li>
                  <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <span class="nav-text">PreTest</span>
                  </a>
                  <ul aria-expanded="false">
                      <li><a href="{{ route('agensi.pretest.index') }}">PreTest</a></li>
                      <li><a href="{{ route('agensi.pretest.create') }}">Tambah</a></li>
                  </ul>
                </li>
                <li>
                  <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <span class="nav-text">PostTest</span>
                  </a>
                  <ul aria-expanded="false">
                      <li><a href="{{ route('agensi.posttest.index') }}">PostTest</a></li>
                      <li><a href="{{ route('agensi.posttest.create') }}">Tambah</a></li>
                  </ul>
                </li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-envelope menu-icon"></i><span class="nav-text">Notifikasi</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('agensi.notifikasi.index') }}">Notifikasi</a></li>
                <li><a href="{{ route('agensi.notifikasi.create') }}">Tambah</a></li>
            </ul>
          </li>
        @endif
      </ul>
  </div>
</div>