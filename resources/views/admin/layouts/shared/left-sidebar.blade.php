<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">
    <div class="row">
        <span class="col-md-1">
            <!-- Brand Logo Light -->
            <a href="" class="logo logo-light">
                <span class="logo-lg">
                    <img src="/images/logo.png" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="/images/logo-sm.png" alt="small logo">
                </span>
            </a>
        </span>

        <div class="col-md-1">
            <li class="dropdown text-center">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <img src="/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                    <span class="align-middle d-none d-lg-inline-block"></span> <i
                        class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span
                            class="align-middle">German</span>
                    </a>
                </div>
            </li>
        </div>

    </div>
    <!-- Brand Logo Dark -->
    <a href="" class="logo logo-dark">
        <span class="logo-lg">
            <img src="/images/logo-dark.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="/images/logo-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Navigation</li>

            <li class="side-nav-item menuitem-active">
                <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                    aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="ri-home-4-line"></i>
                    <span> Dashboards </span>
                </a>
                <div class="collapse " id="sidebarDashboards">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('admin.home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.setting.update') }}">Setting</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item ">
                <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                    aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="ri-home-4-line"></i>
                    <span> Dashboards </span>
                </a>
                <div class="collapse " id="sidebarDashboards">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('admin.home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.setting.update') }}">Setting</a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
