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
                  <li><a href="{{ route('superadmin.admin.create') }}">Add New</a></li>
              </ul>
          </li>
          <li>
              <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                  <i class="icon-envelope menu-icon"></i><span class="nav-text">Agency</span>
              </a>
              <ul aria-expanded="false">
                  <li><a href="{{ route('superadmin.agency.index') }}">Agency</a></li>
                  <li><a href="{{ route('superadmin.agency.create') }}">Tambah</a></li>
              </ul>
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
                  <i class="icon-envelope menu-icon"></i><span class="nav-text">Agency</span>
              </a>
              <ul aria-expanded="false">
                  <li><a href="{{ route('admin.agency.index') }}">Agency</a></li>
                  <li><a href="{{ route('admin.agency.create') }}">Tambah</a></li>
              </ul>
          </li>
        @endif
        @if(auth()->user()->level == 3)
          <li>
              <a href="{{ route('agency.dashboard') }}" aria-expanded="false">
                <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
              </a>
          </li>
        @endif
      </ul>
  </div>
</div>