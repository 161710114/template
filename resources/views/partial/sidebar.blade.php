  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png ')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/images.png ')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
<li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fa fa-desktop"></i>
              <p>Dashboard</p>
            </a>
          </li>

            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pencil-square-o"></i>
              <p>
                Data Surat
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sm.index') }}" class="nav-link">
                  <i class="nav-icon fa fa-inbox"></i>
                  <p>Surat Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sk.index') }}" class="nav-link">
                  <i class="nav-icon fa fa-paper-plane-o"></i>
                  <p>Surat Keluar</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="{{ route('disposisi.index') }}" class="nav-link">
              <i class="nav-icon fa fa-file-text"></i>
              <p>Disposisi</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('instansi.index') }}" class="nav-link">
              <i class="nav-icon fa fa-building-o"></i>
              <p>Instansi</p>
            </a>
          </li>



          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>


          

          <li class="nav-header">PAGE USER</li>
                      <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-gears"></i>
              <p>
                Settings
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                  <i class="nav-icon fa fa-group"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sk" class="nav-link">
                  <i class="nav-icon fa fa-meh-o"></i>
                  <p>404r</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="sk" class="nav-link">
                  <i class="nav-icon fa fa-frown-o"></i>
                  <p>500</p>
                </a>
              </li>
            </ul>
          </li>


         
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
          &nbsp&nbsp&nbsp&nbsp<i class="nav-icon fa fa-circle-o text-danger"></i>
            <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                   Logout
                </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
               </form>
                  </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>