@extends('company.layout.master')

@section('headlinks')

@endsection

@section('active-menuhire')
active-menu
@endsection

@section('content')
<div class="hire-dashboard-panel">
    <!-- Modal -->
    <div class="modal fade" id="submitRequest" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content py-4 px-5 modal-container-parent">
                <div class="modal-header p-0 pb-2 d-flex justify-content-center align-self-center submit-logo-ellipse">
                    <img src="{{ asset('assets/img/aurbase-hire-request.png') }}" alt="" class="stack-pill-img">
                </div>
                <div class="modal-body px-0">
                    <p class="submit-request-text">Your Request has been sent successfully you will get an
                        update from us soon</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{ url('hiring-history') }}"
                            class="col-md-10 submit-hiring-btn d-flex justify-content-center ">
                            Go to hiring history</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
        <h2 class="fw-bold m-0 px-3">Hire</h2>
        @include('company.layout.active')
    </div>

    <!-- Choose your stack row -->

    <div class="dashboard-panel-nav stack-hiring-history-container d-flex justify-content-between align-items-end pt-1">
        <h4 class="fw-bold p-0 m-0 px- stack-hring-text">Choose your stack</h4>
        <div class="d-flex justify-content-center align-items-center">
            <div
                class="position-relative p-0 m-0 me-3 d-flex justify-content-center align-items-center notification-bar-icon">
                <iconify-icon icon="ant-design:clock-circle-outlined" class="fs-3">
                </iconify-icon>
                <a href="{{ url('hiring-history') }}"
                    class="hiring-history-text text-decoration-none fs-4 text-dark fw-bold p-0 m-0"> Hiring
                    History</a>
            </div>
        </div>
    </div>


    <div class="row mx-0 mt-4" id="right-parent-container">
        <div class="col-md-6 px-0" id="right-parent-first-container">
            <div class="transaction-search-container billing-filter-search-container d-flex align-items-center ms-4">
                <iconify-icon icon="bx:search" class="fs-4"></iconify-icon>
                <input type="search" id="myInput" onkeyup="myFunction()"
                    class="w-100 py-2 ms-2 transaction-search-container-text border-0" placeholder="Search Stack">
            </div>


            <div class="stack-scroll flipped mt-4">

                <div id="searchResultContainer" class="d-flex flex-wrap justify-content-between">
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-swift-pill.png') }}" alt="" class="stack-pill-img">
                        <div class="resultName">Swift</div>
                    </div>
                    <div role="button" class="add searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-figma-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Figma</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-android-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Android</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-ps-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Photoshop</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-php-pill.png') }}" alt="" class="stack-pill-img">
                        <div class="resultName">PHP</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-sketch-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Sketch</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-laravel-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Laravel</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-Reactjs-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">React.js</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-aws-pill.png') }}" alt="" class="stack-pill-img">
                        <div class="resultName">AWS</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-web-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Webflow</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-devops-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">DevOps</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-protopie-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Protopie</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-pill-go.png') }}" alt="" class="stack-pill-img">
                        <div class="resultName">GO</div>
                    </div>

                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-zeplin-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Zeplin</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-js-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Javascript</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-procreate-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Procreate</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-kotlin-pill.png') }}" alt="" class="stack-pill-img">
                        <div class="resultName">Kotlin</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-marvel-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Marvel</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-data-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Data Eng</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-corel-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Corel Draw</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-java-pill.png') }}" alt="" class="stack-pill-img">
                        <div class="resultName">Java</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-adobe-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">AdobeXd</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-flutter-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Flutter</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-python-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Python</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-nodejs-pill.png') }}" alt="" class="stack-pill-img">
                        <div class="resultName">Node.js</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-indesign-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Indesign</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-gcp-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">GCP</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-frame-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Frame.io</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-ts-pill.png') }}" alt="" class="stack-pill-img">
                        <div class="resultName">Typescript</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-vs-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Visual Studio</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-pixlr-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">Pixlr</div>
                    </div>
                    <div class="searchResultParent stack-parent">
                        <img src="{{ asset('assets/img/stack-html-pill.png') }}" alt=""
                            class="company-talent-container-stack-img">
                        <div class="resultName">HTML</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1 d-none d-sm-block d-md-none d-lg-block">
            <div class="d-flex justify-content-center" style="height: 80vh;">
                <div class="vr"></div>
            </div>
        </div>
        <div class="col-md-5 px-0 mobile-view-left-container" id="left-team-container">
            <div id="receiver" class="stack-experience-scroll">

                <!-- <div id="test"
                        class="stack-experience-container py-3 d-flex justify-content-center flex-column mb-4 px-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="col-md-2 d-flex justify-content-between">
                                <img src="{{ asset('assets/img/stack-figma-pill.png') }}" alt=""
                                    class="stack-pill-img">
                                <p class="fw-semibold">Figma</p>
                            </div>
                            <div class="col-md-2 d-flex justify-content-between">
                                <iconify-icon icon="akar-icons:copy" role="button" class="fs-3 stack-icon" id="clone">
                                </iconify-icon>
                                <iconify-icon icon="iconoir:cancel" class="fs-3 stack-icon">
                                </iconify-icon>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="position-relative col-md-3 experience-level-parent" id="">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="">Junior level</option>
                                    <option value="" Selected>Seniority level</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                            <div class="col-md-1 col-1"></div>
                            <div class="position-relative col-md-3" id="">
                                <input type="number" class="experience-level-input"
                                    placeholder="Enter No of Talents" />
                            </div>
                            <div class="col-1"></div>
                            <div class="position-relative col-md-3" id="">
                                <input type="text" class="experience-level-input" placeholder="Enter Role" />
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="position-relative col-md-3 experience-level-parent" id="">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="" Selected>Hiring Needs</option>
                                    <option value="">Seniority level</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                            <div class="col-1"></div>
                            <div class="position-relative col-md-3 experience-level-parent" id="">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="" Selected>Start Date</option>
                                    <option value="">Seniority level</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                            <div class="col-1"></div>
                            <div class="position-relative col-md-3 experience-level-parent" id="">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="" Selected>Salary Range</option>
                                    <option value="">Seniority level</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                        </div>
                    </div> -->



                <!-- <div
                        class="stack-experience-container py-3 d-flex justify-content-center flex-column mb-4 px-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="col-md-2 d-flex justify-content-between">
                                <img src="{{ asset('assets/img/stack-java-pill.png') }}" alt=""
                                    class="stack-pill-img">
                                <p class="fw-semibold py-1">Java</p>
                            </div>
                            <div class="col-md-2 d-flex justify-content-between">
                                <iconify-icon icon="akar-icons:copy" class="fs-3 stack-icon">
                                </iconify-icon>
                                <iconify-icon icon="iconoir:cancel" class="fs-3 stack-icon">
                                </iconify-icon>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="position-relative col-md-3 experience-level-parent" id="">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="">Junior level</option>
                                    <option value="" Selected>Seniority level</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                            <div class="col-1"></div>
                            <div class="position-relative col-md-3" id="">
                                <input type="number" class="experience-level-input"
                                    placeholder="Enter no of Talents" />
                            </div>
                            <div class="col-1"></div>
                            <div class="position-relative col-md-3" id="">
                                <input type="text" class="experience-level-input" placeholder="Enter Role" />
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="position-relative col-md-3 experience-level-parent" id="">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="">Junior level</option>
                                    <option value="" Selected>Hiring Needs</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                            <div class="col-1"></div>
                            <div class="position-relative col-md-3 experience-level-parent">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="" Selected>Start Date</option>
                                    <option value="">Seniority level</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                            <div class="col-1"></div>
                            <div class="position-relative col-md-3 experience-level-parent" id="">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="" Selected>Salary Range</option>
                                    <option value="">Seniority level</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div
                        class="stack-experience-container py-3 d-flex justify-content-center flex-column mb-4 px-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="col-md-2 d-flex justify-content-between">
                                <img src="{{ asset('assets/img/stack-figma-pill.png') }}" alt=""
                                    class="stack-pill-img">
                                <p class="fw-semibold">Figma</p>
                            </div>
                            <div class="col-md-2 d-flex justify-content-between">
                                <iconify-icon icon="akar-icons:copy" class="fs-3 stack-icon">
                                </iconify-icon>
                                <iconify-icon icon="iconoir:cancel" class="fs-3 stack-icon">
                                </iconify-icon>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="position-relative col-md-3 experience-level-parent" id="">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="">Junior level</option>
                                    <option value="" Selected>Seniority level</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                            <div class="col-md-1 col-1"></div>
                            <div class="position-relative col-md-3" id="">
                                <input type="number" class="experience-level-input"
                                    placeholder="Enter No of Talents" />
                            </div>
                            <div class="col-1"></div>
                            <div class="position-relative col-md-3" id="">
                                <input type="text" class="experience-level-input" placeholder="Enter Role" />
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="position-relative col-md-3 experience-level-parent" id="">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="" Selected>Hiring Needs</option>
                                    <option value="">Seniority level</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                            <div class="col-1"></div>
                            <div class="position-relative col-md-3 experience-level-parent" id="">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="" Selected>Start Date</option>
                                    <option value="">Seniority level</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                            <div class="col-1"></div>
                            <div class="position-relative col-md-3 experience-level-parent" id="">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="" Selected>Salary Range</option>
                                    <option value="">Seniority level</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                        </div>
                    </div>



                    <div
                        class="stack-experience-container py-3 d-flex justify-content-center flex-column mb-4 px-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="col-md-2 d-flex justify-content-between">
                                <img src="{{ asset('assets/img/stack-java-pill.png') }}" alt=""
                                    class="stack-pill-img">
                                <p class="fw-semibold py-1">Java</p>
                            </div>
                            <div class="col-md-2 d-flex justify-content-between">
                                <iconify-icon icon="akar-icons:copy" class="fs-3 stack-icon">
                                </iconify-icon>
                                <iconify-icon icon="iconoir:cancel" class="fs-3 stack-icon">
                                </iconify-icon>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="position-relative col-md-3 experience-level-parent" id="">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="">Junior level</option>
                                    <option value="" Selected>Seniority level</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                            <div class="col-1"></div>
                            <div class="position-relative col-md-3" id="">
                                <input type="number" class="experience-level-input"
                                    placeholder="Enter no of Talents" />
                            </div>
                            <div class="col-1"></div>
                            <div class="position-relative col-md-3" id="">
                                <input type="text" class="experience-level-input" placeholder="Enter Role" />
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="position-relative col-md-3 experience-level-parent" id="">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="">Junior level</option>
                                    <option value="" Selected>Hiring Needs</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                            <div class="col-1"></div>
                            <div class="position-relative col-md-3 experience-level-parent">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="" Selected>Start Date</option>
                                    <option value="">Seniority level</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                            <div class="col-1"></div>
                            <div class="position-relative col-md-3 experience-level-parent" id="">
                                <iconify-icon icon="ep:arrow-down-bold"
                                    class="position-absolute experience-level-select-down-arrow">
                                </iconify-icon>
                                <select name="" id="" class="experience-level-select fw-bold">
                                    <option value="" Selected>Salary Range</option>
                                    <option value="">Seniority level</option>
                                    <option value="">Intermediate</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
            </div>

            <div class="py-4 d-flex justify-content-center col-md-12" data-bs-toggle="modal"
                data-bs-target="#submitRequest">
                <a href="#" class="col-md-12 submit-request-btn d-flex justify-content-center ">
                    Submit Request</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/clone-experience.js') }}"></script>
<script src="{{ asset('assets/js/search.js') }}"></script>
@endsection