<div class="col-lg-2 sidebar py-4 sidebar px-0 h-100">
    <a href="" class="sidebar-logo-link d-block mx-3">
        <img src="{{ asset('assets/img/logo.png') }}" alt=""
            class="logo mx-auto email-confirmation-logo sidebar-logo">
    </a>
    <hr class="w-100 sidebar-hr">
    <ul class="sidebar-menu mt-4 px-1" id="company-sidebar-menu-parent">
        <li class="sidebar-menu-item fw-semibold py-2  @yield('active-menudashboard') rounded px-3">
            <iconify-icon icon="bxs:dashboard" class="me-2 sidebar-menu-item-icon"></iconify-icon>
            <a href="{{ url('dashboard') }}" class="sidebar-menu-link">Dashboard</a>
        </li>
        <li class="sidebar-menu-item fw-semibold py-2 @yield('active-menuhire') px-3 position-relative">
            <iconify-icon icon="fluent:people-team-add-20-regular" class="me-2 sidebar-menu-item-icon">
            </iconify-icon>
            <a href="{{ url('hire') }}" class="sidebar-menu-link">Hire</a>
        </li>
        <li class="sidebar-menu-item fw-semibold py-2 @yield('active-menutalent') px-3 position-relative">
            <iconify-icon icon="ic:round-track-changes" class="me-2 sidebar-menu-item-icon"></iconify-icon>
            <a href="{{ url('talent') }}" class="sidebar-menu-link">Talents</a>
        </li>
        <li class="sidebar-menu-item fw-semibold py-2 @yield('active-menustandup') px-3 position-relative">
            <iconify-icon icon="healthicons:group-discussion-meeting" class="me-2 sidebar-menu-item-icon">
            </iconify-icon>
            <a href="{{ url('standup') }}" class="sidebar-menu-link">Standup</a>
        </li>
        <li class="sidebar-menu-item fw-semibold py-2 @yield('active-menuwellbeing') px-3 position-relative">
            <iconify-icon icon="ant-design:heart-filled" class="me-2 sidebar-menu-item-icon">
            </iconify-icon>
            <a href="{{ url('wellbeing') }}" class="sidebar-menu-link">Wellbeing</a>
        </li>
        <li class="sidebar-menu-item fw-semibold py-2 @yield('active-menubilling') px-3">
            <iconify-icon icon="ic:round-account-balance-wallet" class="me-2 sidebar-menu-item-icon">
            </iconify-icon>
            <a href="{{ url('billing') }}" class="sidebar-menu-link">Billings</a>
        </li>
        <li class="sidebar-menu-item fw-semibold py-2 @yield('active-menusupport') px-3">
            <iconify-icon icon="bx:support" class="me-2 sidebar-menu-item-icon">
            </iconify-icon>
            <a href="{{ url('support') }}" class="sidebar-menu-link">Support</a>
        </li>
        <li class="sidebar-menu-item fw-semibold py-2 @yield('active-menutour') px-3">
            <iconify-icon icon="ic:baseline-gps-fixed" class="me-2 sidebar-menu-item-icon">
            </iconify-icon>
            <a href="{{ url('tour') }}" class="sidebar-menu-link">Tour</a>
        </li>
        <li class="sidebar-menu-item company-sidebar-logout-menu  fw-semibold py-2 px-3">
            <iconify-icon icon="ant-design:logout-outlined" class="me-2 sidebar-menu-item-icon"></iconify-icon>
            <a href="/logout" class="sidebar-menu-link">Logout</a>
        </li>
    </ul>
</div>