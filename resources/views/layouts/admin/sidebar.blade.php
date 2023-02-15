<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
    

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">القائمة</li>

                <li>
                    <a href="{{route('admin.index')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>لوحه التحكم</span>
                    </a>
                </li>

               
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-mail-send-line"></i>
            <span>cc</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="">@lang('lang.show') @lang('lang.employees')</a></li>
            <li><a href="">@lang('lang.show') @lang('lang.roles')</a></li>
            <li><a href="">@lang('lang.show') @lang('lang.driver')</a></li>
            <li><a href="">@lang('lang.show') @lang('lang.shipment_agent')</a></li>
        
        </ul>
    </li>        


               
<li>
    <a href="{{route('logout')}}" class="waves-effect">
            <i class="ri-shut-down-line align-middle me-1 text-danger"></i>
            <span class="text-danger">خروج</span>
        
    </a>
</li>
                
             

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>