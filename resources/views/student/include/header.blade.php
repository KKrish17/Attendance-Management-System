<header class="main-header">

    <!-- Logo -->
    <a href="{{url('/admin/dashboard')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img style="width:95px;" src="{{ asset('public/assets/admin/dist/img/logo.png')}}"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li>
          <a href="{{url('admin/logout')}}" class="btn btn-default btn-flat">Sign out</a>
			</li>
        </ul>
      </div>
    </nav>
  </header>