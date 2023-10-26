<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">
    <!-- LOGO -->
    <a href="{{ route('dashboard.index') }}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('/') }}admin/assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('/') }}admin/assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="{{ route('dashboard.index') }}" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('/') }}admin/assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('/') }}admin/assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            {{-- <li class="side-nav-title side-nav-item">Navigation</li> --}}
            <hr>

        
   
            <li class="side-nav-item">
                <a href="{{ route('dashboard.index') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            @if (Auth::user()->role == 'Super Admin' || Auth::user()->role == 'Admin')
            <li class="side-nav-item">
                <a href="{{ route('company-info.index') }}" class="side-nav-link">
                    <i class="uil-building"></i>
                    <span> Company Info </span>
                </a>
            </li>
            

            <li class="side-nav-item">
                <a href="{{ route('userInfo.index') }}" class="side-nav-link">
                    <i class="uil-users-alt"></i>
                    <span> User Information </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('category.index') }}" class="side-nav-link">
                    <i class="uil-th-large"></i>
                    <span> Category </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('sub-category.index') }}" class="side-nav-link">
                    <i class="uil-table"></i>
                    <span> Sub Category </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('sub-sub-category.index') }}" class="side-nav-link">
                    <i class="uil-layers-alt"></i>
                    <span> Sub Sub Category </span>
                </a>
            </li>


            <li class="side-nav-item">
                <a href="{{ route('entrepreneurs.index') }}" class="side-nav-link">
                    <i class="uil-user"></i>
                    <span> Entrepreneurs </span>
                </a>
            </li>


            <li class="side-nav-item">
                <a href="{{ route('product.index') }}" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Product </span>
                </a>
            </li>


            <li class="side-nav-item">
                <a href="{{ route('banner.index') }}" class="side-nav-link">
                    <i class="uil-sliders-v-alt"></i>
                    <span> Banner </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('blog.index') }}" class="side-nav-link">
                    <i class="uil-notebooks"></i>
                    <span> Blog </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('order.index') }}" class="side-nav-link">
                    <i class="uil-bag-alt"></i>
                    <span> All Orders </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('shipping.index') }}" class="side-nav-link">
                    <i class="uil-accessible-icon-alt"></i>
                    <span>Shipping</span>
                </a>
            </li>
     
            @endif
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="dripicons-gear"></i>
                    <span> Settings </span>
                    <span class="menu-arrow"></span>
                </a>
                @if (Auth::user()->role == 'Super Admin' || Auth::user()->role == 'Admin')
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                                         
                        <li class="side-nav-item">
                <a href="{{ route('roletype.index') }}" class="side-nav-link">
                    <i class="uil-shield-question"></i>
                    <span> Role Type </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('role.index') }}" class="side-nav-link">
                    <i class="uil-shield-slash"></i>
                    <span> Role </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('roletype.index') }}" class="side-nav-link">
                    <i class="uil-shield-question"></i>
                    <span> Role Type </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('user.index') }}" class="side-nav-link">
                    <i class="uil-keyhole-circle"></i>
                    <span> Permission </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('section.index') }}" class="side-nav-link">
                    <i class="uil-web-section-alt"></i>
                    <span> Section </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('social.index') }}" class="side-nav-link">
                    <i class="uil-rss"></i>
                    <span> Social </span>
                </a>
            </li>
            @endif   
                    </ul>
                </div>
            </li>
        </ul>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
