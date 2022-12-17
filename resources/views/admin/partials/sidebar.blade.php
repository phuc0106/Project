<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

                <div>
                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                @if(Auth::check())
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">{{ Auth::user()->email }}</h5>
                @endif
                <!-- Main -->
                <li class="nav-item-header pt-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="ph-house"></i>
                        <span>
                            Dashboard
                            <span class="d-block fw-normal opacity-50">No pending orders</span>
                        </span>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="{{ route('auth.showLogin') }}" class="nav-link">
                        <i class="ph-sun"></i>
                        <span>
                            Login
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-item-submenu {{ request()->is('admin/user/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="ph-layout"></i>
                        <span>User</span>
                    </a>
                    <ul class="nav-group-sub collapse {{ request()->is('admin/user/*') ? 'show' : '' }}">
                        <li class="nav-item"><a href="{{ route('admin.user.index') }}" class="nav-link {{ request()->is('admin/user/index') ? 'active' : '' }}">Manage</a></li>
                        <li class="nav-item"><a href="{{ route('admin.user.create') }}" class="nav-link {{ request()->is('admin/user/create') ? 'active' : '' }}">Create</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu {{ request()->is('admin/continent/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="ph-layout"></i>
                        <span>Continent</span>
                    </a>
                    <ul class="nav-group-sub collapse {{ request()->is('admin/continent/*') ? 'show' : '' }}">
                        <li class="nav-item"><a href="{{ route('admin.continent.index') }}" class="nav-link {{ request()->is('admin/continent/index') ? 'active' : '' }}">Manage</a></li>
                        <li class="nav-item"><a href="{{ route('admin.continent.create') }}" class="nav-link {{ request()->is('admin/continent/create') ? 'active' : '' }}">Create</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu {{ request()->is('admin/country/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="ph-layout"></i>
                        <span>Country</span>
                    </a>
                    <ul class="nav-group-sub collapse {{ request()->is('admin/country/*') ? 'show' : '' }}">
                        <li class="nav-item"><a href="{{ route('admin.country.index') }}" class="nav-link {{ request()->is('admin/country/index') ? 'active' : '' }}">Manage</a></li>
                        <li class="nav-item"><a href="{{ route('admin.country.create') }}" class="nav-link {{ request()->is('admin/country/create') ? 'active' : '' }}">Create</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu {{ request()->is('admin/bridge/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="ph-layout"></i>
                        <span>Bridge</span>
                    </a>
                    <ul class="nav-group-sub collapse {{ request()->is('admin/bridge/*') ? 'show' : '' }}">
                        <li class="nav-item"><a href="{{ route('admin.bridge.index') }}" class="nav-link {{ request()->is('admin/bridge/index') ? 'active' : '' }}">Manage</a></li>
                        <li class="nav-item"><a href="{{ route('admin.bridge.create') }}" class="nav-link {{ request()->is('admin/bridge/create') ? 'active' : '' }}">Create</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu {{ request()->is('admin/galary/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="ph-layout"></i>
                        <span>Gallery</span>
                    </a>
                    <ul class="nav-group-sub collapse {{ request()->is('admin/galary/*') ? 'show' : '' }}">
                        <li class="nav-item"><a href="{{ route('admin.galary.index') }}" class="nav-link {{ request()->is('admin/galary/index') ? 'active' : '' }}">Manage</a></li>
                        <li class="nav-item"><a href="{{ route('admin.galary.create') }}" class="nav-link {{ request()->is('admin/galary/create') ? 'active' : '' }}">Create</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu {{ request()->is('admin/comment/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="ph-layout"></i>
                        <span>Comment</span>
                    </a>
                    <ul class="nav-group-sub collapse {{ request()->is('admin/comment/*') ? 'show' : '' }}">
                        <li class="nav-item"><a href="{{ route('admin.comment.index') }}" class="nav-link {{ request()->is('admin/comment/index') ? 'active' : '' }}">Manage</a></li>
                        <li class="nav-item"><a href="{{ route('admin.comment.create') }}" class="nav-link {{ request()->is('admin/comment/create') ? 'active' : '' }}">Create</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu {{ request()->is('admin/distance/*') ? 'nav-item-expanded nav-item-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="ph-layout"></i>
                        <span>Distance</span>
                    </a>
                    <ul class="nav-group-sub collapse {{ request()->is('admin/distance/*') ? 'show' : '' }}">
                        <li class="nav-item"><a href="{{ route('admin.distance.index') }}" class="nav-link {{ request()->is('admin/comment/index') ? 'active' : '' }}">Manage</a></li>
                        <li class="nav-item"><a href="{{ route('admin.distance.create') }}" class="nav-link {{ request()->is('admin/comment/create') ? 'active' : '' }}">Create</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->
    
</div>