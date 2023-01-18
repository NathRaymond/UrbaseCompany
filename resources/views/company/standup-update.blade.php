@extends('company.layout.master')

@section('headlinks')

@endsection

@section('active-menustandup')
active-menu
@endsection

@section('content')
<div class="dashboard-panel">

    <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
        <h2 class="fw-bold p-0 m-0">Stand-up</h2>
        @include('company.layout.active')
    </div>

    <div class="row w-100 dashboard-panel-nav d-flex justify-content-between pt-4">
        <nav aria-label="breadcrumb" class=" col-md-6 p-0 m-0 px-3 d-none d-sm-block">
            <ol class="breadcrumb hire-breadcrumb-parent">
                <li class="breadcrumb-item"><a href="standup.html" class="hire-breadcrumb">Stand-up </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <div class="d-flex">
                        <div class="standup-update-profile-info-img-container position-relative">
                            <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                                class="position-absolute standup-update-info-profile-img-tag">
                            <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                                class="standup-update-info-profile-img">
                        </div>
                        <div class="standupbydate-card-profile-info">
                            <div class="standup-update-profile-name fw-semibold">Joseph Micheal</div>
                            <div class="standup-update-profile-job">Product designer</div>

                        </div>
                    </div>
                </li>
            </ol>
        </nav>
        <div class="d-flex col-md-6 justify-content-end">
            <div class="standup-date-container d-flex align-items-center justify-content-around">
                <p class="standup-date-container-text">Filter: Date </p>
                <div class="datepicker date">
                    <div class="input-group-append">
                        <span class="">
                            <iconify-icon icon="akar-icons:calendar" class=" mt-2 justify-content-end fs-5">
                            </iconify-icon>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="standup-container my-3 ">
        <div class="standupbydate-card p-3 px-5 rounded">
            <div class="standup-date-rating-container d-flex justify-content-between">
                <div class="d-flex standup-time">
                    Monday 09-08-2022
                </div>
                <div class="standup-rating-container d-flex justify-content-between">
                    <div class="rate-standup-text">Rate standup</div>
                    <img src="{{ asset('assets/img/thumbs-up.png') }}" alt="" class="standup-rating-img">
                    <img src="{{ asset('assets/img/thumbs-down.png') }}" alt="" class="standup-rating-img">
                </div>

            </div>
            <div class="pt-3">
                <h3 class="card-user-achievement">What i have done:</h3>
                <ul class="card-user-achievement-list">
                    <li>Created a LOW-FI wireframe Designs for the project
                        asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                    </li>
                </ul>
                <h3 class="card-user-task">What I want to work on:</h3>
                <ul class="card-user-task-list">
                    <li>Created a LOW-FI wireframe Designs for the project
                        asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                    </li>
                </ul>

                <h3 class="card-user-blockers">What are your Blockers:</h3>
                <ul class="card-user-blockers-list">
                    <li>Created a LOW-FI wireframe Designs for the project
                        asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                    </li>
                </ul>
            </div>
        </div>

        <div class="standupbydate-card p-3 px-5 rounded mt-4">
            <div class="standup-date-rating-container  d-flex justify-content-between">
                <div class="d-flex standup-time">
                    Tuesday 09-08-2022
                </div>
                <div class="standup-rating-container d-flex justify-content-between">
                    <div class="rate-standup-text">Rate standup</div>
                    <img src="{{ asset('assets/img/thumbs-up.png') }}" alt="" class="standup-rating-img">
                    <img src="{{ asset('assets/img/thumbs-down.png') }}" alt="" class="standup-rating-img">
                </div>

            </div>
            <div class="pt-3">
                <h3 class="card-user-achievement">What i have done:</h3>
                <ul class="card-user-achievement-list">
                    <li>Created a LOW-FI wireframe Designs for the project
                        asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                    </li>
                </ul>
                <h3 class="card-user-task">What I want to work on:</h3>
                <ul class="card-user-task-list">
                    <li>Created a LOW-FI wireframe Designs for the project
                        asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                    </li>
                </ul>

                <h3 class="card-user-blockers">What are your Blockers:</h3>
                <ul class="card-user-blockers-list">
                    <li>Created a LOW-FI wireframe Designs for the project
                        asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                    </li>
                </ul>
            </div>
        </div>

    </div>
    @include('company.layout.include.footer')
</div>
@endsection

@section('scripts')

@endsection