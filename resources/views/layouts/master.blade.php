<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Clinic Admin | Starter</title>
  <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
    </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./images/logo.svg" alt="Clininc Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Clinic</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./images/manager.svg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }} </a>

        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <router-link to="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt text-blue"></i>
                    <p>Dashboard</p>
                </router-link>
            </li>

            <li class="nav-item has-treeview ">
                <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-cog text-green"></i>
                <p>
                    Manage Company Info
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <router-link to="/admin-services" class="nav-link ">
                            <i class="fas fa-notes-medical nav-icon text-cyan"></i>
                            <p>Services</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin-about" class="nav-link ">
                            <i class="fas fa-info nav-icon text-cyan"></i>
                            <p>About Page</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin-faq" class="nav-link ">
                            <i class="fas fa-question-circle nav-icon text-cyan"></i>
                            <p>FAQ</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin-team" class="nav-link ">
                            <i class="fas fa-user-friends nav-icon text-cyan"></i>
                            <p>Add Team</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin-teamleader" class="nav-link ">
                            <i class="fas fa-user-friends nav-icon text-cyan"></i>
                            <p>Team Leader Details</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin-gallery" class="nav-link ">
                            <i class="fas fa-image nav-icon text-cyan"></i>
                            <p>Gallery</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/users" class="nav-link ">
                            <i class="fas fa-users nav-icon text-cyan"></i>
                            <p>Users</p>
                        </router-link>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview ">
                <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-cog text-green"></i>
                <p>
                    Company Details
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <router-link to="/clinic-home" class="nav-link ">
                            <i class="fas fa-home nav-icon text-cyan"></i>
                            <p>Add Homepage Info</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/sliders" class="nav-link ">
                            <i class="fas fa-address-card nav-icon text-cyan"></i>
                            <p>Add Slider Info</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin-partners" class="nav-link ">
                            <i class="fas fa-hands-helping nav-icon text-cyan"></i>
                            <p>Partners</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin-clients" class="nav-link ">
                            <i class="fas fa-notes-medical nav-icon text-cyan"></i>
                            <p>Clients</p>
                        </router-link>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview ">
                <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-cog text-green"></i>
                <p>
                    Blog Details
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <router-link to="/admin-blog" class="nav-link ">
                            <i class="fas fa-blog nav-icon text-cyan"></i>
                            <p>Blog Categories</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/admin-blogs" class="nav-link ">
                            <i class="fab fa-blogger-b nav-icon text-cyan"></i>
                            <p>Add Blogs</p>
                        </router-link>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <router-link to="/developer" class="nav-link">
                <i class="nav-icon fas fa-cogs "></i>
                    <p>Developer</p>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link to="/profile" class="nav-link">
                <i class="nav-icon fas fa-user "></i>
                    <p>Profile</p>
                </router-link>
            </li>
            <li class="nav-item has-treeview menu-open ">
                <a  class="nav-link" href = "{{url('/admin-logout')}}" >
                        <i class="nav-icon fas fa-power-off text-red"></i>
                        <p>
                            Logout
                        </p>
                </a>

            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
            <router-view></router-view>
            <vue-progress-bar></vue-progress-bar>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="/js/app.js"></script>
</body>
</html>
