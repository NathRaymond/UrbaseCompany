@extends('company.layout.master')

@section('headlinks')

@endsection

@section('active-menudashboard')
    active-menu
@endsection

@section('content')
    <div class="dashboard-panel">
        <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
            <h2 class="fw-bold p-0 m-0">Dashboard</h2>
            @include('company.layout.active')
        </div>
        <div class="row mx-0 mt-4" id="right-parent-container">
            <div class="col-md-8 px-0" id="right-parent-first-container">
                <div class="dashboard-welcome-container w-100 row mx-0" id="company-dashboard-welcome-container">
                    <div class="col-lg-7 dashboard-welcome-content  p-4 ">
                        <h1 class="p-0 m-0 fw-semibold company-dashboard-welcome-text">Welcome back, <br>
                            {{ session()->get('user')['company'] }} 👋
                        </h1>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/dashboard-illustration.png')}}" alt=""
                            class="img-fluid company-dashboard-illustration px-5">
                    </div>
                </div>
                <div class="row mx-0 talent-count-container my-4">
                    <div class=" col-md-6 px-0">
                        <div class="hire-talent-container p-4 d-flex justify-content-center align-items-center flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <iconify-icon icon="fluent:people-team-toolbox-20-regular"
                                    class="fs-2 me-3 hire-talent-team-number-icon"></iconify-icon>
                                <h1 class="fw-semibold hire-team-number-value">1000</h1>
                            </div>
                            <p class="hired-talent-text fw-semibold">Total No of Hired Talent</p>
                        </div>
                    </div>
                    <div class="col-md-6 px-0 d-flex justify-content-end hire-talent-second-parent-container">
                        <div class="hire-talent-container p-4 d-flex justify-content-center align-items-center flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <iconify-icon icon="fluent:people-team-toolbox-20-regular"
                                    class="fs-2 me-3 hire-talent-team-number-icon"></iconify-icon>
                                <h1 class="fw-semibold hire-team-number-value">1000</h1>
                            </div>
                            <p class="hired-talent-text fw-semibold">No of In House Team</p>
                        </div>
                    </div>
                </div>
                <div class="talent-work-hour-container p-4 mb-4">
                    <h4 class="talent-work-hour-title fw-semibold">Talent work hour</h4>
                    <div class="working-hours-parent-container d-flex justify-content-between align-items-center my-3"
                        id="working-hours-parent">
                        <div class="d-flex align-items-center">
                            <a href="#" class="working-hours-text me-5 fw-semibold">Working Hours</a>
                            <a href="#" class="working-hours-my-team-text fw-semibold">My Team</a>
                        </div>
                        <div class="position-relative" id="working-hours-duration-select-parent">
                            <iconify-icon icon="ep:arrow-down-bold"
                                class="position-absolute working-hours-duration-select-down-arrow">
                            </iconify-icon>
                            <select name="" id="" class="working-hours-duration-select fw-bold">
                                <option value="">Daily</option>
                                <option value="" Selected>Weekly</option>
                                <option value="">Monthly</option>
                                <option value="">Yearly</option>
                            </select>
                        </div>
                    </div>
                    <div class="working-hours-indicator-container d-flex justify-content-end align-items-center mt-3 mb-2">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center me-4">
                                <iconify-icon icon="carbon:dot-mark" class="me-1 this-week-icon"></iconify-icon>
                                <p class="this-week-text">This week</p>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <iconify-icon icon="carbon:dot-mark" class="me-1 last-week-icon"></iconify-icon>
                                <p class="last-week-text">Last week</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0">
                        <div class="col-md-12 px-0">
                            <div id="line-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 px-0" id="left-team-container">
                <div
                    class="overall-team-morale-container py-1 d-flex justify-content-center align-items-center flex-column mb-4 px-3">
                    <p class="overall-team-morale-title fw-semibold">Overall Team Morale</p>
                    <input type="range" value="20" min="0" max="100" step="1"
                        class="invisible">
                    <div class="range-morale pie fw-bold d-flex justify-content-center align-items-center"
                        data-pie='{ "fill": "#F4F4F4", "stroke": 6, "strokeBottom": 10, "percent": 75, "colorSlice": "#121212", "colorCircle": "#F4F4F4", "fontSize": "1.3em", "fontWeight": "bold", "round": true }'>
                    </div>
                    <p class="team-performance-text my-0 text-center">
                        Your Team performance is 5% better this week
                    </p>
                    <a href="{{ url('talent') }}" class="view-team-performance-btn">View full details</a>
                </div>
                <div class="overall-team-morale-container py-3 d-flex flex-column px-3">
                    <div class="d-flex justify-content-between align-items-center app-integration-container">
                        <p class="overall-team-morale-title fw-semibold">App Integration</p>
                        <a href="#" class="text-warning show-all-app-integration-link">Show all</a>
                    </div>
                    <img src="{{ asset('assets/img/app-integration.png')}}" alt="" class="img-fluid my-3">
                </div>
            </div>
        </div>
        @include('company.layout.include.footer')
    </div>
@endsection

@section('scripts')

@endsection
