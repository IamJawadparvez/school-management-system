<div id="app">
<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas' style="width: 245px;">
    <section class="sidebar">
        
        <div class="relative">
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="{{asset('public/assets/img/dummy/u2.png')}}" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">Admin</h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
               
            </div>
        </div>




        <ul class="sidebar-menu">
             <li><a href="{{route('admin.home')}}"><i class="icon icon-sailing-boat-water purple-text s-18"></i> Home</a>



              @can('admin')
            <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Student List</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    
                    <li><a href="{{route('admin.admissionForm')}}"><i class="icon icon-folder5"></i> Add New Student</a>
                    </li>
                    <li><a href="{{route('admin.allStudents')}}"><i class="icon icon-folder5"></i>Student List</a>
                    </li>
                    <li><a href=""><i class="icon icon-folder5"></i>Import From Excel</a>
                    </li>
                   
                    
                </ul>
            </li>


             <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>School</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    
                    <li><a href="{{route('admin.schools')}}"><i class="icon icon-folder5"></i>School List</a>
                    </li>
                   
                   
                    
                </ul>
            </li>



             <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Area</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    
                    <li><a href="{{route('admin.area')}}"><i class="icon icon-folder5"></i>Area List</a>
                    </li>
                   
                   
                    
                </ul>
            </li>

             <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Class</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    
                    <li><a href="{{route('admin.class')}}"><i class="icon icon-folder5"></i>Class List</a>
                    </li>
                   
                   
                    
                </ul>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Section</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    
                    <li><a href="{{route('admin.section')}}"><i class="icon icon-folder5"></i>Section  List</a>
                    </li>
                   
                   
                    
                </ul>
            </li>


            <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span> Subjects</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    
                    <li><a href="{{route('admin.subject')}}"><i class="icon icon-folder5"></i>Subject Lists</a>
                    </li>
                   
                   
                    
                </ul>
            </li>


              <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span> Result</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    
                    <li><a href="{{route('admin.result')}}"><i class="icon icon-folder5"></i>Result List</a>
                    </li>
                   
                   
                    
                </ul>
            </li>














             <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Houses</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    
                    <li><a href="{{route('admin.house')}}"><i class="icon icon-folder5"></i>Houses List</a>
                    </li>
                   
                   
                    
                </ul>
            </li>
             <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Van</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    
                    <li><a href="{{route('admin.van')}}"><i class="icon icon-folder5"></i>Vans List</a>

                    </li>
                   
                   
                    
                </ul>
            </li>

             <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Teacher</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    
                    <li><a href="{{route('admin.addteacher')}}"><i class="icon icon-folder5"></i>Add Teacher</a>
                    </li>
                   
                   
                    
                </ul>
                <ul class="treeview-menu">
                    
                    <li><a href="{{route('admin.allteacher')}}"><i class="icon icon-folder5"></i> Teacher List</a>
                    </li>
                   
                   
                    
                </ul>
            </li>
             <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Logout</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    
                    <li><a href="{{route('logout')}}"><i class="icon icon-folder5"></i>Logout</a>
                    </li>
                   
                   
                    
                </ul>
            </li>




              @endcan() 
           
        </ul>
    </section>
</aside>