<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
    

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title ">القائمة</li>

                <li>
                    <a href="{{route('admin.index')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span class="h5">لوحه التحكم</span>
                    </a>
                </li>


                <li>
                    <a href="{{route('admin.articles.show')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span class="h5">المقالات</span>
                    </a>
                </li>



               
<li>
    <a href="{{route('logout')}}" class="waves-effect">
            <i class="ri-shut-down-line align-middle me-1 text-danger"></i>
            <span class="text-danger h5">خروج</span>
        
    </a>
</li>
                
             

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>