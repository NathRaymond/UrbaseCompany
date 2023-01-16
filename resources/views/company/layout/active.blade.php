<div class="notification-container d-flex justify-content-center align-items-center notification-mobile-container">
    <a href="{{ url('notification') }}"
        class="position-relative p-0 m-0 me-3 d-flex justify-content-center align-items-center notification-bar-icon">
        <iconify-icon icon="ant-design:pie-chart-outlined" class="fs-3" role="button">
        </iconify-icon>
        <p class="notification-number p-0 m-0 d-flex justify-content-center align-items-center fw-bold">
            1
            {{--  {{ count($notifications) }}  --}}
        </p>
    </a>
    <a href="{{ url('notification') }}"
        class="position-relative p-0 m-0 ms-1 d-flex justify-content-center align-items-center notification-bar-icon">
        <iconify-icon icon="codicon:bell-dot" class="fs-3" role="button"></iconify-icon>
        <p class="notification-number p-0 m-0 d-flex justify-content-center align-items-center fw-bold">
            2
            {{--  {{ count($notifications) }}  --}}
        </p>
    </a>
    <div class="dropdown">
        <button class="btn dropdown-toggle border-0 pe-0" type="button" id="dropdownMenuButton"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ asset('assets/img/image-header.png') }}" alt=""
                class="company-talent-profile-picture img-fluid">
            <iconify-icon icon="ic:baseline-keyboard-arrow-down"></iconify-icon>
        </button>
        <div class="dropdown-menu dropdown-menu-container p-0" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item profile-menu d-flex align-items-center p-2" href="{{ url('profile') }}">
                <iconify-icon icon="material-symbols:person" class="fs-5"></iconify-icon>
                My Profile
            </a>
            <a class="dropdown-item profile-menu p-2 d-flex align-items-center" href="{{ url('setting') }}">
                <iconify-icon icon="material-symbols:settings-rounded" class="settings-icon fs-5">
                </iconify-icon>
                <p>Settings</p>
            </a>
        </div>
    </div>
</div>
