@extends('company.layout.master')

@section('headlinks')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
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
        <div class="dashboard-panel-nav standup-category-parent d-flex justify-content-between align-items-end pt-4">
            <ul class="standup-tabs p-0 standup-category-container d-flex justify-content-around w-25">
                <li class="tab-link display" data-tab="tab-1">By Talent(s)</li>
                <li class="tab-link default" data-tab="tab-2">By Date</li>
            </ul>
            <div class="tab-1 tab-content display">
                <div class="standup-search-container talent-filter-search-container d-flex align-items-center ms-4">
                    <iconify-icon icon="bx:search" class="fs-4"></iconify-icon>
                    <input type="search" id="myInput" onkeyup="myFunction()"
                        class="w-100 p-0 ms-2 h-100 standup-search-container-text border-0" placeholder="Search Talent(s)">
                </div>
            </div>

            <div class="tab-2 tab-content">
                <div class="standup-search-container-parent d-flex justify-content-around ">
                    <div class="standup-search-container talent-filter-search-container d-flex align-items-center ms-4">
                        <iconify-icon icon="bx:search" class="fs-4"></iconify-icon>
                        <input type="search" class="w-100 p-0 ms-2 h-100 standup-search-container-text border-0"
                            placeholder="Search Talent(s)">
                    </div>
                    <div class="standup-date-container d-flex align-items-center justify-content-around">
                        <p class="standup-date-container-text">Filter by: Date </p>
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
        </div>
        <div class="tab-1 tab-content display">
            <div id="searchResultContainer" class="standup-container-parent my-3 d-flex flex-wrap justify-content-between">
                <a href="{{ url('standup-update') }}"
                    class="searchResultParent standup-card-container text-decoration-none pointer py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Henry Micheal</p>
                    <p class="standup-profile-title">product designer</p>
                </a>

                <div class="searchResultParent standup-card-container-white py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon2.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Joseph Adams</p>
                    <p class="standup-profile-title">product designer</p>
                </div>

                <div class="searchResultParent standup-card-container py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon3.png') }}" alt=""
                        class="position-absolute standup-profile-tag">
                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Victor James</p>
                    <p class="standup-profile-title">product designer</p>
                </div>
                <div class="searchResultParent standup-card-container-white py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Joseph Micheal</p>
                    <p class="standup-profile-title">product designer</p>
                </div>
                <a href="{{ url('standup-update') }}"
                    class="searchResultParent standup-card-container text-decoration-none pointer py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Henry Micheal</p>
                    <p class="standup-profile-title">product designer</p>
                </a>

                <div class="searchResultParent standup-card-container-white py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon2.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Joseph Adams</p>
                    <p class="standup-profile-title">product designer</p>
                </div>

                <div class="searchResultParent standup-card-container py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon3.png') }}" alt=""
                        class="position-absolute standup-profile-tag">
                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Victor James</p>
                    <p class="standup-profile-title">product designer</p>
                </div>
                <div class="searchResultParent standup-card-container-white py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Joseph Micheal</p>
                    <p class="standup-profile-title">product designer</p>
                </div>
                <a href="{{ url('standup-update') }}"
                    class="searchResultParent standup-card-container text-decoration-none pointer py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Henry Micheal</p>
                    <p class="standup-profile-title">product designer</p>
                </a>

                <div class="searchResultParent standup-card-container-white py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon2.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Joseph Adams</p>
                    <p class="standup-profile-title">product designer</p>
                </div>

                <div class="searchResultParent standup-card-container py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon3.png') }}" alt=""
                        class="position-absolute standup-profile-tag">
                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Victor James</p>
                    <p class="standup-profile-title">product designer</p>
                </div>
                <div class="searchResultParent standup-card-container-white py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Joseph Micheal</p>
                    <p class="standup-profile-title">product designer</p>
                </div>
                <a href="{{ url('standup-update') }}"
                    class="searchResultParent standup-card-container text-decoration-none pointer py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Henry Micheal</p>
                    <p class="standup-profile-title">product designer</p>
                </a>

                <div class="searchResultParent standup-card-container-white py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon2.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Joseph Adams</p>
                    <p class="standup-profile-title">product designer</p>
                </div>

                <div class="searchResultParent standup-card-container py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon3.png') }}" alt=""
                        class="position-absolute standup-profile-tag">
                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Victor James</p>
                    <p class="standup-profile-title">product designer</p>
                </div>
                <div class="searchResultParent standup-card-container-white py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Joseph Micheal</p>
                    <p class="standup-profile-title">product designer</p>
                </div>
                <a href="{{ url('standup-update') }}"
                    class="searchResultParent standup-card-container text-decoration-none pointer py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Henry Micheal</p>
                    <p class="standup-profile-title">product designer</p>
                </a>

                <div class="searchResultParent standup-card-container-white py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon2.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Joseph Adams</p>
                    <p class="standup-profile-title">product designer</p>
                </div>

                <div class="searchResultParent standup-card-container py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon3.png') }}" alt=""
                        class="position-absolute standup-profile-tag">
                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Victor James</p>
                    <p class="standup-profile-title">product designer</p>
                </div>
                <div class="searchResultParent standup-card-container-white py-4 px-5 position-relative">
                    <img src="{{ asset('assets/img/standup-profile-icon.png') }}" alt=""
                        class="position-absolute standup-profile-tag">

                    <div class="standup-profile-info-img-container position-relative">
                        <img src="{{ asset('assets/img/talents-info-profile-picture-tag.png') }}" alt=""
                            class="position-absolute profile-info-profile-img-tag">
                        <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                            class="profile-info-profile-img">
                    </div>
                    <p class="resultName standup-profile-name pt-2 fw-semibold">Joseph Micheal</p>
                    <p class="standup-profile-title">product designer</p>
                </div>

            </div>
        </div>

        <div class="tab-2 tab-content">
            <div class="standup-container my-3 ">
                <div class="standupbydate-card p-5 rounded">
                    <div class="standup-bydate-profile-container d-flex justify-content-between">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                                class="standup-info-profile-img">
                            <div class="standupbydate-card-profile-info text-center">
                                <div class="standupbydate-card-profile-name fw-semibold">Joseph Micheal</div>
                                <div class="standupbydate-card-profile-job">product designer</div>
                                <div class="standupbydate-card-profile-duration d-flex justify-content-between">
                                    <p>10/09/2022</p>
                                    <p>09:10am</p>
                                </div>
                            </div>
                        </div>
                        <div class="standup-rating-container d-flex justify-content-between">
                            <div class="rate-standup-text">Rate standup</div>
                            <img src="{{ asset('assets/img/thumbs-up.png') }}" alt="" class="standup-rating-img"
                                id="up" onclick="like()">
                            <img src="{{ asset('assets/img/thumbs-down.png') }}" alt="" id="down"
                                class="standup-rating-img down" onclick="dislike()">
                        </div>

                    </div>

                    <div class="pt-3">
                        <h3 class="card-user-achievement">What i have done:</h3>
                        <ul class="card-user-achievement-list">
                            <li>Created a LOW-FI wireframe Designs for the project
                                asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                            </li>
                            <li>Created a LOW-FI wireframe Designs for the project
                                asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                            </li>
                        </ul>
                        <h3 class="card-user-task">What I want to work on:</h3>
                        <ul class="card-user-task-list">
                            <li>Created a LOW-FI wireframe Designs for the project
                                asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                            </li>
                            <li>Created a LOW-FI wireframe Designs for the project
                                asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                            </li>
                        </ul>

                        <h3 class="card-user-blockers">What are your Blockers:</h3>
                        <ul class="card-user-blockers-list">
                            <li>Created a LOW-FI wireframe Designs for the project
                                asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                            </li>
                            <li>Created a LOW-FI wireframe Designs for the project
                                asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                            </li>
                        </ul>
                    </div>
                </div>



                <div class="standupbydate-card p-5 rounded mt-4">
                    <div class="standup-bydate-profile-container d-flex justify-content-between">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/standup-profile.png') }}" alt=""
                                class="standup-info-profile-img">
                            <div class="standupbydate-card-profile-info text-center">
                                <div class="standupbydate-card-profile-name fw-semibold">Joseph Micheal</div>
                                <div class="standupbydate-card-profile-job">product designer</div>
                                <div class="standupbydate-card-profile-duration d-flex justify-content-between">
                                    <p>10/09/2022</p>
                                    <p>09:10am</p>
                                </div>
                            </div>
                        </div>
                        <div class="standup-rating-container d-flex justify-content-between">
                            <div class="rate-standup-text">Rate standup</div>
                            <img src="{{ asset('assets/img/thumbs-up.png') }}" alt=""
                                class="standup-rating-img">
                            <img src="{{ asset('assets/img/thumbs-down.png') }}" alt=""
                                class="standup-rating-img">
                        </div>

                    </div>
                    <div class="pt-3">
                        <h3 class="card-user-achievement">What i have done:</h3>
                        <ul class="card-user-achievement-list">
                            <li>Created a LOW-FI wireframe Designs for the project
                                asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                            </li>
                            <li>Created a LOW-FI wireframe Designs for the project
                                asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                            </li>
                        </ul>
                        <h3 class="card-user-task">What I want to work on:</h3>
                        <ul class="card-user-task-list">
                            <li>Created a LOW-FI wireframe Designs for the project
                                asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                            </li>
                            <li>Created a LOW-FI wireframe Designs for the project
                                asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                            </li>
                        </ul>

                        <h3 class="card-user-blockers">What are your Blockers:</h3>
                        <ul class="card-user-blockers-list">
                            <li>Created a LOW-FI wireframe Designs for the project
                                asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                            </li>
                            <li>Created a LOW-FI wireframe Designs for the project
                                asdfghjkl;’asdfghjkl;’cvnm,./dfghjkl;sdfghjkl;sdfghjklasdfghjksdfghjasdfghjsdfgh
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        @include('company.layout.include.footer')
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    script src="{{ asset('assets/js/stand-up-tabs.js') }}"></script>
    <script src="{{ asset('assets/js/date-picker.js') }}"></script>
@endsection
