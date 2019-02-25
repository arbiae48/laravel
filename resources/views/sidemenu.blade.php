 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{ asset('img/'.Auth::user()->avatar) }}" style="height: 45px;" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p> {{ Auth::user()->name }} </p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
    </div>
  </form>
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="@yield('ac-dash')"><a href="{{ url('/dashboard') }}"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
    <li class="treeview @yield('ac-buku')">
      <a href="#"><i class="fa fa-book"></i> <span>Buku</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('buku/add') }}">Add New</a></li>
        <li><a href="{{ url('buku') }}">Data Buku</a></li>
        <li><a href="{{ url('koleksi') }}">Data koleksi Buku</a></li>
      </ul>
    </li>   
    <li class="treeview @yield('ac-anggota')">
      <a href="#"><i class="fa fa-users"></i> <span>Anggota</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('anggota/add') }}">Add New</a></li>
        <li><a href="{{ url('anggota') }}">Data Anggota</a></li>
      </ul>
    </li>

    <li class="treeview @yield('ac-Pengarang')">
      <a href="#"><i class="fa  fa-graduation-cap"></i> <span>Pengarang</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('Pengarang/add') }}">Add Pengarang</a></li>
        <li><a href="{{ url('Pengarang') }}">Data Pengarang</a></li>
      </ul>
    </li>

    <li class="treeview @yield('ac-Penerbit')">
      <a href="#"><i class="fa fa-navicon "></i> <span>Penerbit</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('Penerbit/add') }}">Add Penerbit</a></li>
        <li><a href="{{ url('Penerbit') }}">Data Penerbit</a></li>
      </ul>
    </li>

    <li class="treeview @yield('ac-Rak')">
      <a href="#"><i class="fa fa-tasks"></i> <span>Rak</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('Rak/add') }}">Add New</a></li>
        <li><a href="{{ url('Rak') }}">Data Rak</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#"><i class="fa fa-shopping-cart"></i> <span>Transaksi</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('trans/peminjaman') }}">Peminjaman</a></li>
        <li><a href="{{ url('trans/pengembalian') }}">Pengembalian</a></li>
      </ul>
    </li>  
    <li class="treeview">
      <a href="#"><i class="fa fa-book"></i> <span>Laporan</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('report/anggota') }}" target="blank">Laporan Anggota</a></li>
        <li><a href="{{ url('report/qrcode_buku') }}">QrCode Buku</a></li>
      </ul>
    </li> 
    <li class="treeview">
      <a href="#"><i class="fa fa-user"></i> <span>Users</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('user/add') }}" target="blank">Add New</a></li>
        <li><a href="{{ url('user') }}">Data User</a></li>
      </ul>
    </li>    
         
  </ul>
    
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>