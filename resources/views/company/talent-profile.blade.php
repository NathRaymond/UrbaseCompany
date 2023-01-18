@extends('company.layout.master')

@section('headlinks')
@endsection

@section('active-menutalent')
active-menu
@endsection

@section('content')
<div class="dashboard-panel">
    <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
        <h2 class="fw-bold p-0 m-0">Profile</h2>
        @include('company.layout.active')
    </div>
    <a href="{{ url('talent') }}"
        class="return_container d-flex align-items-center justify-content-start d-block mt-3 mb-4">
        <p class="d-flex align-items-center justify-content-center me-2 fs-2 p-0 m-0">
            <iconify-icon icon="ion:arrow-back-circle-outline" class="fs-3"></iconify-icon>
        </p>
        <p class="return_text m-0 p-0 talent-profile-return-text">Go Back</p>
    </a>
    <div class="talents-profile-parent-container mb-2 mt-3 rounded p-5">
        <div class="tab-1 tab-content current talents-profile-primary-info-container row mx-0">
            <div class="profile-info-rating-container d-flex justify-content-between">
                <div class="col-md-8 px-0 profile-info-name-img-container">
                    <div class="d-flex align-items-center profile-info-name-img-parent">
                        <div class="talents-profile-info-img-container position-relative">
                            <img src="{{asset('assets/img/talents-info-profile-picture-tag.png')}}" alt=""
                                class="position-absolute profile-info-profile-img-tag">
                            <img src="{{asset('assets/img/talents-info-profile-picture.png')}}" alt=""
                                class="profile-info-profile-img">
                        </div>
                        <div class="talents-profile-info-name-container d-flex flex-column ms-4">
                            <p class="talents-profile-info-name-text fw-bold">
                                Joseph Micheal
                            </p>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="talents-profile-info-occupation-text fw-semibold">Product Designer
                                    from Canada </p>
                                <iconify-icon icon="emojione-v1:flag-for-canada" class="fs-3 ms-2">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 px-0 talents-profile-rating-container d-flex align-items-center flex-column">
                    <p class="talents-profile-rating-text">Overall Rating</p>

                    <input type="range" value="20" min="0" max="100" step="1" class="invisible talents-profile-rating">
                    <div class="talents-profile-rating pie fw-bold d-flex justify-content-center align-items-center"
                        data-pie='{ "rotation": 90, "percent": 75, "colorSlice": "#23CC7B", "colorCircle": "#AEE6CB", "fontWeight": 600 }'>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-2 tab-content">
            <div class="talents-profile-primary-info-container row mx-0">
                <div class="col-md-8 px-0 profile-info-name-img-container">
                    <div class="d-flex align-items-center">
                        <div class="talents-profile-info-img-container position-relative">
                            <img src="{{asset('assets/img/talents-info-profile-picture-tag.png')}}" alt=""
                                class="position-absolute profile-info-profile-img-tag">
                            <img src="{{asset('assets/img/talents-info-profile-picture.png')}}" alt=""
                                class="profile-info-profile-img">
                        </div>
                        <div class="talents-profile-info-name-container d-flex flex-column ms-4">
                            <p class="talents-profile-info-name-text fw-bold">
                                Joseph Micheal
                            </p>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="talents-profile-info-occupation-text fw-semibold">Product Designer
                                    from Canada </p>
                                <iconify-icon icon="emojione-v1:flag-for-canada" class="fs-3 ms-2">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3 px-0 talents-profile-hired-container d-flex align-items-center flex-column">
                    <p>Hired: Oct 1st 2022</p>
                    <p>Salary: $20,000/month</p>
                </div>
            </div>
        </div>

        <div class="">
            <ul class="tabs">
                <li class="tab-link current" data-tab="tab-1">Personal Details</li>
                <li class="tab-link" data-tab="tab-2">Work Details</li>
            </ul>

            <div class="tab-1 tab-content current">
                <div class="talents-personal-details-container">
                    <div class="talents-personal-details-container p-5 mt-2 px-2">
                        <div class="personal-details-profile-about-parent row mx-0">
                            <div class="col-md-4">
                                <h3 class="personal-details-profile-header">
                                    PROFILE
                                </h3>
                                <div class="personal-details-profile-body">
                                    <div class="personal-details-profile-body-header row px-0">
                                        <p class="col-6">First Name</p>
                                        <p class="col-6">Last Name</p>
                                    </div>
                                    <div class="personal-details-profile-body row px-0">
                                        <p class="col-6">Joseph</p>
                                        <p class="col-6">Micheal</p>
                                    </div>
                                </div>
                                <div class="personal-details-profile-body">
                                    <div class="personal-details-profile-body-header row px-0">
                                        <p class="col-6">Gender</p>
                                        <p class="col-6">Email Address</p>
                                    </div>
                                    <div class="personal-details-profile-body row px-0">
                                        <p class="col-6">Joe</p>
                                        <p class="col-6 profile-mail">joemickey@work.com</p>
                                    </div>
                                </div>
                                <hr>
                                </hr>
                            </div>
                            <div class="col-md-1 d-none d-sm-block d-md-none d-lg-block mt-4">
                                <div class="d-flex justify-content-center" style="height: 13vh;">
                                    <div class="vr"></div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="personal-details-about-header">
                                    ABOUT
                                </div>
                                <div class="personal-details-about-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Et convallis luctus duis sed arcu scelerisque ultrices accumsan.
                                    Faucibus a, volutpat tincidunt diam potenti tortor. Id diam augue
                                    integer id. Eget eu, lacus sed et ut neque nibh. Aliquet non venenatis
                                    id viverra iaculis. Accumsan lacus, faucibus aliquam neque, sed. Diam
                                    scelerisque feugiat egestass.
                                </div>
                            </div>
                        </div>

                        <div class="personal-details-education-experience-parent row mx-0">
                            <div class="col-md-4">
                                <h3 class="personal-details-education-header">
                                    EDUCATION
                                </h3>
                                <div class="personal-details-education-body">
                                    <div class="personal-details-education-body-header row px-0">
                                        <p class="col-6">MASTER DEGREE</p>
                                        <p class="col-6">BSc COMPUTER SCI.</p>
                                    </div>
                                    <div class="personal-details-education-sch row px-0">
                                        <p class="col-6">Havard University</p>
                                        <p class="col-6">Havard University</p>
                                    </div>
                                    <div class="personal-details-education-year row px-0">
                                        <p class="col-6">March 2017-March 2022</p>
                                        <p class="col-6">March 2017-March 2022</p>
                                    </div>
                                </div>

                                <div class="personal-details-education-body mt-2">
                                    <div class="personal-details-education-body-header row px-0">
                                        <p class="col-6">HND COMPUTER SCI</p>
                                    </div>
                                    <div class="personal-details-education-sch row px-0">
                                        <p class="col-6">Havard University</p>
                                    </div>
                                    <div class="personal-details-education-year row px-0">
                                        <p class="col-6">March 2017-March 2022</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 d-none d-sm-block d-md-none d-lg-block mt-4">
                                <div class="d-flex justify-content-center" style="height: 20vh;">
                                    <div class="vr"></div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <h3 class="personal-details-experience-header">
                                    PROFESSIONAL EXPERIENCE
                                </h3>
                                <div class="personal-details-experience-body">
                                    <div class="personal-details-experience-title">
                                        PRODUCT DESIGN TEAMLEAD
                                    </div>
                                    <div class="personal-details-experience-company">
                                        Capriquota 2019-2020
                                    </div>
                                    <div class="personal-details-experience-desc">
                                        Welcomecfgvhbjhgfdghjkjsfdghjdfsfuioiku,t,y8wersghjkhgdszghsdVScvhkjkh
                                        fsdcvbnkjhgfdsaZshujdeszWelcWelcomecfgvhbjhgfdghjkjsfdgh
                                        jdfsfuioiku
                                    </div>
                                    <ul class="personal-details-experience-list mt-2">
                                        <li>dfgkoofcvbkl;uytdryuiokiuytruioiu</li>
                                        <li>dfgkoofcvbkl;uytdryuiokiuytruioiu</li>
                                        <li>dfgkoofcvbkl;uytdryuiokiuytruioiu</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="personal-details-education-experience-parent row mx-0">
                            <div class="col-md-4">
                                <h3 class="personal-details-education-header">
                                    KEY SKILLS
                                </h3>
                                <div class="personal-details-keyskills-body">
                                    <p> - Interface Design</p>
                                    <p> - Interface Design</p>
                                    <p> - Interface Design</p>
                                    <p> - Interface Design</p>
                                </div>
                            </div>
                            <div class="col-md-1 d-none d-sm-block d-md-none d-lg-block mt-4">
                                <div class="d-flex justify-content-center" style="height: 15vh;">
                                    <div class="vr"></div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="personal-details-experience-body">
                                    <div class="personal-details-experience-title">
                                        PRODUCT DESIGN TEAMLEAD
                                    </div>
                                    <div class="personal-details-experience-company">
                                        Capriquota 2019-2020
                                    </div>
                                    <div class="personal-details-experience-desc">
                                        Welcomecfgvhbjhgfdghjkjsfdghjdfsfuioiku,t,y8wersghjkhgdszghsdVScvhkjkh
                                        fsdcvbnkjhgfdsaZshujdeszWelcWelcomecfgvhbjhgfdghjkjsfdgh
                                        jdfsfuioiku
                                    </div>
                                    <ul class="personal-details-experience-list mt-2">
                                        <li>dfgkoofcvbkl;uytdryuiokiuytruioiu</li>
                                        <li>dfgkoofcvbkl;uytdryuiokiuytruioiu</li>
                                        <li>dfgkoofcvbkl;uytdryuiokiuytruioiu</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-2 tab-content">
                <div class="talents-personal-details-container p-5 mt-2">
                    <h2 class="talents-profile-stacks">Stacks</h2>
                    <div class="d-flex flex-wrap mx-0 talents-profile-stacks-container-parent">
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                        <div
                            class="talents-profile-stacks-container p-2 d-flex align-items-center justify-content-around">
                            <img src="{{asset('assets/img/stack-swift-pill.png')}}" alt="" class="stack-pill-img">
                            <div>IOS Swift</div>
                        </div>
                    </div>
                </div>
                <div class="talents-profile-wellbeing-container py-3 px-4">
                    <div class="row w-100 mx-0 talents-profile-wellbeing px-0">
                        <h3 class="talents-profile-wellbeing col-5 col-md-3">Wellbeing</h3>
                        <div class="col-2 col-md-6"></div>
                        <h3 class="talents-profile-wellbeing col-5 col-md-3">Total No of Standups</h3>
                    </div>

                    <div class="row w-100 mx-0 ">
                        <div class="col-5 col-md-3">
                            <iconify-icon icon="ant-design:heart-filled" class="fs-3 wellbeing-love-filled">
                            </iconify-icon>
                            <iconify-icon icon="ant-design:heart-filled" class="fs-3 wellbeing-love-filled">
                            </iconify-icon>
                            <iconify-icon icon="ant-design:heart-filled" class="fs-3 wellbeing-love-filled">
                            </iconify-icon>
                            <iconify-icon icon="ant-design:heart-outlined" class="fs-3 wellbeing-love">
                            </iconify-icon>
                        </div>
                        <div class="col-3 col-md-6"></div>
                        <h3 class="talents-profile-wellbeing col-4 col-md-3">100</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('company.layout.include.footer')
</div>
@endsection
<script src="https://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
<script src='https://cdn.jsdelivr.net/gh/tomik23/circular-progress-bar@latest/docs/circularProgressBar.min.js'></script>
<script>
    $(document).ready(function() {

        $('ul.tabs li').click(function() {
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("." + tab_id).addClass('current');
        })

    })
</script>
@section('scripts')
@endsection