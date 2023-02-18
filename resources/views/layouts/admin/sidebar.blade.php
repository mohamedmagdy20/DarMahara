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
                        <span style="font-size:15px !important" >لوحه التحكم</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{route('admin.message.index')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span style="font-size:15px !important" class="">الطلبات</span>
                    </a>
                </li>


                <li>
                    <a href="{{route('admin.articles.show')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span style="font-size:15px !important" class="">المقالات</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.services.show')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span style="font-size:15px !important" >الخدمات</span>
                    </a>
                </li>
               
                <li>
                    <a href="{{route('admin.discount')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span style="font-size:15px !important" >الخصومات</span>
                    </a>
                </li>
               
                <li>
                    <a href="{{route('admin.social.index')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span style="font-size:15px !important" >روابط التواصل</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.about.index')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span style="font-size:15px !important" >عن الشركة</span>
                    </a>
                </li>
               
               
<li>
    <a href="{{route('logout')}}" class="waves-effect"
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
            <i class="ri-shut-down-line align-middle me-1 text-danger"></i>
            <span class="text-danger h5">خروج</span>
        
    </a>
    
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</li>
                
             

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>