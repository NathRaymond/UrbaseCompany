@extends('company.layout.master')


@section('headlinks')

@endsection

@section('active-menunotification')
    active-menu
@endsection

@section('content')
<body class="notification-body-bg">
    <div class="dashboard-panel">
        <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
            <h2 class="fw-bold p-0 m-0">Notification</h2>
           @include('company.layout.active2')
        </div>
        <div class="notification-each-container d-flex align-items-start py-4 mt-4">
            <img src="{{ asset('assets/img/notification-icon.png') }}" alt="" class="notification-icon">
            <div class="ms-4 notification-content-container">
                <p class="notification-message  w-75">Dear Joseph Micheal, a full house <span
                        class="fw-semibold">meeting</span> will be held this <span class="fw-semibold">Saturday</span>
                    Please click to see details <span class="notification-badge rounded ms-2">NEW</span></p>
                <div class="notification-time-container d-flex align-items-center mt-2">
                    <iconify-icon icon="ic:outline-access-time" class="fs-5"></iconify-icon>
                    <p class="ms-2 notification-time-text">1hr ago</p>
                </div>
            </div>
        </div>
        <div class="notification-each-container d-flex align-items-start py-4">
            <img src="{{ asset('assets/img/notification-icon.png') }}" alt="" class="notification-icon">
            <div class="ms-4 notification-content-container">
                <p class="notification-message  w-75">Dear Joseph Micheal, a full house <span
                        class="fw-semibold">meeting</span> will be held this <span class="fw-semibold">Saturday</span>
                    Please click to see details <span class="notification-badge rounded ms-2">NEW</span></p>
                <div class="notification-time-container d-flex align-items-center mt-2">
                    <iconify-icon icon="ic:outline-access-time" class="fs-5"></iconify-icon>
                    <p class="ms-2 notification-time-text">1hr ago</p>
                </div>
            </div>
        </div>
        <div class="notification-each-container d-flex align-items-start py-4">
            <img src="{{ asset('assets/img/notification-icon.png') }}" alt="" class="notification-icon">
            <div class="ms-4 notification-content-container">
                <p class="notification-message  w-75">Dear Joseph Micheal, a full house <span
                        class="fw-semibold">meeting</span> will be held this <span class="fw-semibold">Saturday</span>
                    Please click to see details</p>
                <div class="notification-time-container d-flex align-items-center mt-2">
                    <iconify-icon icon="ic:outline-access-time" class="fs-5"></iconify-icon>
                    <p class="ms-2 notification-time-text">1hr ago</p>
                </div>
            </div>
        </div>
        <div class="notification-each-container d-flex align-items-start py-4">
            <img src="{{ asset('assets/img/notification-icon.png') }}" alt="" class="notification-icon">
            <div class="ms-4 notification-content-container">
                <p class="notification-message  w-75">Dear Joseph Micheal, a full house <span
                        class="fw-semibold">meeting</span> will be held this <span class="fw-semibold">Saturday</span>
                    Please click to see details</p>
                <div class="notification-time-container d-flex align-items-center mt-2">
                    <iconify-icon icon="ic:outline-access-time" class="fs-5"></iconify-icon>
                    <p class="ms-2 notification-time-text">1hr ago</p>
                </div>
            </div>
        </div>
        @include('company.layout.include.footer')
    </div>
</body>
    
@endsection

@section('scripts')

@endsection
