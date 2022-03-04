<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
              <!--<img src="{{ asset('public/assets/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">-->
            </div>
            <div class="" style="color:#fff;">
              <p>{{ $data['name'] }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="{{ Request::path() == 'admin/dashboard' ? 'active' : '' }}">
                <a href="{{URL ('/admin/dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview {{ (Request::is('admin/userlist') || Request::is('admin/*user/*') )? 'menu-open' : '' }}" >
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>User Management</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu" style="{{ (Request::is('admin/userlist') || Request::is('admin/*user/*') )? 'display:block;' : '' }}">
                    <li class="{{ (Request::is('admin/userlist') || Request::is('admin/*user/*') )? 'active' : '' }}">
                        <a href="{{URL ('/admin/userlist')}}"><i class="fa fa-circle-o"></i> User List</a>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ (Request::is('admin/blog*') || Request::is('admin/*post') || Request::is('admin/*blog/*')|| Request::is('admin/*category') || Request::is('admin/*category/*') ||Request::is('admin/comment') || Request::is('admin/*comment/*') )? 'menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Blog Management</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu" style="{{ (Request::is('admin/blog*') || Request::is('admin/*post') || Request::is('admin/*blog/*')|| Request::is('admin/*category')|| Request::is('admin/*category/*') ||Request::is('admin/comment') || Request::is('admin/*comment/*') )? 'display:block;' : '' }}">

                    <li class="{{ (Request::is('admin/blog*') || Request::is('admin/*post') || Request::is('admin/*blog/*')) &&( ! Request::is('admin/blog-category'))? 'active' : '' }}">
                        <a href="{{URL ('/admin/blog-list')}}"><i class="fa fa-circle-o"></i>Blog List </a>
                    </li>

                    <li class="{{ (Request::is('admin/*category')|| Request::is('admin/*category/*'))  ? 'active' : '' }}">
                        <a href="{{URL ('/admin/blog-category')}}"><i class="fa fa-circle-o"></i>Blog Category</a>
                    </li>

                    <li class="{{ (Request::is('admin/comment') || Request::is('admin/*comment/*') ) ? 'active' : '' }}">
                        <a href="{{URL ('/admin/comment')}}"><i class="fa fa-circle-o"></i><span>Comment</span></a>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ (Request::is('admin/cms') || Request::is('admin/*cms/*'))? 'menu-open' : '' }}">
                <a href="javascript:void(0);">
                    <i class="fa fa-pie-chart"></i>
                    <span>Cms</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu " style="{{ (Request::is('admin/cms') || Request::is('admin/*cms/*') ) ? 'display:block;' : '' }}">
                    <li class="{{ (Request::is('admin/cms') || Request::is('admin/*cms/*') ) ? 'active' : '' }}">
                        <a href="{{ URL('/admin/cms')}}"><i class="fa fa-circle-o"></i>Page List</a>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ (Request::is('admin/book*')|| Request::is('admin/*book') || Request::is('admin/*book/*'))? 'menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Book Management</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-righ"></i></span>
                </a>
                <ul class="treeview-menu" style="{{ (Request::is('admin/book*')|| Request::is('admin/*book') || Request::is('admin/*book/*')) ? 'display:block;' : '' }}">
                     <li class="{{ (Request::is('admin/book*')|| Request::is('admin/*book') || Request::is('admin/*book/*')) ? 'active' : '' }}">
                         <a href="{{URL ('/admin/book-list')}}"><i class="fa fa-circle-o"></i>Book List </a>
                     </li>
                </ul>
            </li>

            <li class="treeview {{ (Request::is('admin/media*') || Request::is('admin/*media') || Request::is('admin/*media/*'))? 'menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-image"></i>
                    <span>Media Management</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-righ"></i></span>
                </a>
                <ul class="treeview-menu" style="{{ (Request::is('admin/media*') || Request::is('admin/*media') || Request::is('admin/*media/*')) ? 'display:block;' : '' }}">
                    <li class="{{ (Request::is('admin/media*') || Request::is('admin/*media') || Request::is('admin/*media/*')) ?  'active' : '' }}">
                        <a href="{{URL ('/admin/media-list')}}"><i class="fa fa-circle-o"></i>Media List </a>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ (Request::is('admin/subscription*') || Request::is('admin/*subscription/*'))? 'menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span>Subscription Management</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-righ"></i></span>
                </a>
                <ul class="treeview-menu" style="{{ (Request::is('admin/subscription*') || Request::is('admin/*subscription/*')) ? 'display:block;' : '' }}">
                    <li class="{{ (Request::is('admin/subscription*') || Request::is('admin/*subscription/*')) ?  'active' : '' }}">
                        <a href="{{URL ('/admin/subscription-list')}}"><i class="fa fa-circle-o"></i>Subscription List </a>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ (Request::is('admin/contact*') || Request::is('admin/*contact/*'))? 'menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-phone"></i>
                    <span>Contact Management</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-righ"></i></span>
                </a>
                <ul class="treeview-menu" style="{{ (Request::is('admin/contact*') || Request::is('admin/*contact/*')) ? 'display:block;' : '' }}">
                    <li class="{{ (Request::is('admin/contact*') || Request::is('admin/*contact/*')) ?  'active' : '' }}">
                        <a href="{{URL ('/admin/contact-list')}}"><i class="fa fa-circle-o"></i>Contact List </a>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ Request::is('admin/*social')? 'menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-file"></i>
                    <span>Miscellaneous</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-righ"></i></span>
                </a>
                <ul class="treeview-menu" style="{{ Request::is('admin/*social') ? 'display:block;' : '' }}">
                    <li class="{{ Request::is('admin/*social') ?  'active' : '' }}">
                        <a href="{{URL ('/admin/miscellaneous-social')}}"><i class="fa fa-circle-o"></i>Social</a>
                    </li>
                </ul>
            </li>




            <li class="treeview">
                <a href="#">
                    <i class="fa fa-product-hunt"></i>
                    <span>Manage Advertisements</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-righ"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{URL ('/admin/manage-advertisements')}}"><i class="fa fa-circle-o"></i>Advertisements</a>
                    </li>
                </ul>
            </li>




        </ul>


    </section>
    <!-- /.sidebar -->
  </aside>

