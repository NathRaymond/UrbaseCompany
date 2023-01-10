@extends('company.layout.master')

@section('headlinks')
@endsection

@section('active-menuhire')
    active-menu
@endsection

@section('content')
    <div class="hire-dashboard-panel">

        <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
            <h2 class="fw-bold m-0 px-3">Hire</h2>
            @include('company.layout.active')
        </div>

        <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
            <nav aria-label="breadcrumb" class="p-0 m-0 px-3">
                <ol class="breadcrumb hire-breadcrumb-parent">
                    <li class="breadcrumb-item"><a href="hire.html" class="hire-breadcrumb">Hire</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hiring Request</li>
                </ol>
            </nav>
        </div>


        <div class="hiring-list-parent-container w-100 pb-0 overflow-auto mt-4">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <div class="hiring-overflow-container accordion-header d-flex justify-content-between align-self-center"
                        id="headingOne">

                        <div class="hiring-list-heading d-flex justify-content-between align-self-center accordion-button"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            <div class="hiring-name-container-each">#123467</div>
                            <div class="hiring-name-container-each">Figma(Senior)</div>
                            <div class="hiring-name-container-each">03/04/2022</div>
                            <div class="hiring-name-container-each">0/2</div>
                        </div>
                    </div>
                    <div id="collapseOne" class="hiring-overflow-container accordion-collapse collapse show"
                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="hiring-list-text1 d-flex justify-content-around">
                                <div class="d-flex">
                                    <img src="{{ asset('assets/img/stack-figma-pill.png') }}" alt=""
                                        class="company-talent-container-stack-img">
                                    <div> Figma (Senior) </div>
                                </div>
                                <div>Product Designer</div>
                                <div>Full-Time</div>
                                <div>Sept 20th 2022</div>
                                <div>$4,0000</div>
                                <div>2 Talents</div>
                            </div>
                            <a href="hiring-matched-talent.html"
                                class="hiring-search-link d-flex flex-column align-items-center py-5">
                                <img src="{{ asset('assets/img/hire-search.png') }}" alt="" class=""
                                    style="width: 3%;">
                                <p class="hiring-list-text2">We are curently working on your request</p>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion py-3" id="accordionExample">
                <div class="accordion-item">
                    <div class="hiring-overflow-container accordion-header d-flex justify-content-between align-self-center"
                        id="headingTwo">

                        <div class="hiring-list-heading d-flex justify-content-between align-self-center accordion-button collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                            aria-controls="collapseTwo">
                            <div class="hiring-name-container-each">#123467</div>
                            <div class="hiring-name-container-each">Figma(Senior)</div>
                            <div class="hiring-name-container-each">03/04/2022</div>
                            <div class="hiring-name-container-each">0/2</div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="hiring-overflow-container accordion-collapse collapse"
                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="hiring-list-text1 d-flex justify-content-around">
                                <div class="d-flex">
                                    <img src="{{ asset('assets/img/stack-figma-pill.png') }}" alt=""
                                        class="company-talent-container-stack-img">
                                    <div> Figma (Senior) </div>
                                </div>
                                <div>Product Designer</div>
                                <div>Full-Time</div>
                                <div>Sept 20th 2022</div>
                                <div>$4,0000</div>
                                <div>2 Talents</div>
                            </div>
                            <div class="d-flex flex-column align-items-center py-4 ">
                                <img src="{{ asset('assets/img/hire-search.png') }}" alt="" class=""
                                    style="width: 3%;">
                                <p class="hiring-list-text2">We are curently working on your request</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion py-0" id="accordionExample">
                <div class="accordion-item">
                    <div class="hiring-overflow-container accordion-header d-flex justify-content-between align-self-center"
                        id="headingThree">

                        <div class="hiring-list-heading d-flex justify-content-between align-self-center accordion-button collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                            aria-expanded="true" aria-controls="collapseThree">
                            <div class="hiring-name-container-each">#123467</div>
                            <div class="hiring-name-container-each">Figma(Senior)</div>
                            <div class="hiring-name-container-each">03/04/2022</div>
                            <div class="hiring-name-container-each">0/2</div>
                        </div>
                    </div>
                    <div id="collapseThree" class="hiring-overflow-container accordion-collapse collapse"
                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="hiring-list-text1 d-flex justify-content-around">
                                <div class="d-flex">
                                    <img src="{{ asset('assets/img/stack-figma-pill.png') }}" alt=""
                                        class="company-talent-container-stack-img">
                                    <div> Figma (Senior) </div>
                                </div>
                                <div>Product Designer</div>
                                <div>Full-Time</div>
                                <div>Sept 20th 2022</div>
                                <div>$4,0000</div>
                                <div>2 Talents</div>
                            </div>
                            <div class="d-flex flex-column align-items-center py-4 ">
                                <img src="{{ asset('assets/img/hire-search.png') }}" alt="" class=""
                                    style="width: 3%;">
                                <p class="hiring-list-text2">We are curently working on your request</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
@endsection
