  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('public/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
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
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">


        <li>
          <a href="{{route('admin.home')}}">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            
          </a>
        </li>
      @can('admin')


        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Student List</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.admissionForm')}}"><i class="fa fa-circle-o"></i> Add New Student</a></li>
            <li><a href="{{route('admin.allStudents')}}"><i class="fa fa-circle-o"></i> Student List</a></li>
            <li><a href="{{route('admin.import')}}"><i class="fa fa-circle-o"></i> Import From Excel</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Schools</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.schools')}}"><i class="fa fa-circle-o"></i> Schools List</a></li>

          </ul>
        </li>

       <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.area')}}"><i class="fa fa-circle-o"></i> Area List</a></li>

          </ul>
        </li>        


       <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Classes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.class')}}"><i class="fa fa-circle-o"></i> Class List</a></li>

          </ul>
        </li>


       <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Houses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.house')}}"><i class="fa fa-circle-o"></i> House List</a></li>

          </ul>
        </li>    

       <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Van</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.van')}}"><i class="fa fa-circle-o"></i> Van List</a></li>

          </ul>
        </li>   
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Teacher</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.addteacher')}}"><i class="fa fa-circle-o"></i> Add Teacher</a></li>
            <li><a href="{{route('admin.allteacher')}}"><i class="fa fa-circle-o"></i> Teacher List</a></li>


          </ul>

        </li>    
      @endcan()


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>