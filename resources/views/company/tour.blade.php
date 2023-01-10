@extends('company.layout.master')

@section('headlinks')
@endsection

@section('active-menutour')
    active-menu
@endsection

@section('content')
    <div class="dashboard-panel">

        <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
            <h2 class="fw-bold p-0 m-0">Tour</h2>
            @include('company.layout.active')
        </div>


        <!-- Modal -->

        <div class="modal fade" id="watchVideo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content py-4 px-5">
                    <div class="modal-header p-0 pb-2 border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-0 d-flex justify-content-center">
                        <!-- <img src="{{ asset('assets/img/Aurbase-modal-tour.png') }}" alt="" > -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="my-3 row w-100 take-a-tour">
            <div class="col-md-4 take-a-tour-text">
                Take a quick Tour, Get to know more about Aurbase
            </div>
            <hr class="tour-rule my-3" />
        </div>

        <div class="row w-100 tour-guide-container justify-content-between">
            <div role="button" class="col-md-2 rounded tour-video" data-bs-toggle="modal" data-bs-target="#watchVideo">
                <div class="d-flex h-100 align-items-center justify-content-center position-relative">
                    <img src="{{ asset('assets/img/AURBASE-tour.png') }}" alt="" class="align-items-center">
                    <div
                        class="tour-play-ellipse position-absolute align-self-center d-flex justify-content-center align-items-center">
                        <iconify-icon icon="carbon:play-filled-alt"></iconify-icon>
                    </div>
                </div>
            </div>
            <div class="col-md-8 rounded tour-desc">
                <div class="tour-desc-header py-1">
                    Welcome to Aurbase
                </div>

                <div class="tour-desc-body">
                    Aurbase is a data-science driven deep hiring platform that accelerates
                    the engineering and design team of companies at the push of a button.
                    At Aurbase we make the remote hiring journey easy and rewarding for both companies,
                    developers and designers.
                    <div class="tour-condition-header py-2"> Watch this if :</div>
                    <ul class="tour-condition-list">
                        <li>You are new on aurbase</li>
                        <li>You are new on aurbase</li>
                        <li>You are new on aurbase</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 tour-video-watched p-2 align-self-end d-flex justify-content-center">
                Watched
            </div>
            <hr class="tour-rule my-3" />
        </div>

        <div class="row w-100 tour-guide-container justify-content-between">
            <div class="col-md-2 rounded tour-video ">
                <div class="d-flex h-100 align-items-center justify-content-center position-relative">
                    <img src="{{ asset('assets/img/AURBASE-tour.png') }}" alt="" class="align-items-center">
                    <div
                        class="tour-play-ellipse position-absolute align-self-center d-flex justify-content-center align-items-center">
                        <iconify-icon icon="carbon:play-filled-alt"></iconify-icon>
                    </div>
                </div>
            </div>
            <div class="col-md-8 rounded tour-desc">
                <div class="tour-desc-header py-1">
                    Welcome to Aurbase
                </div>

                <div class="tour-desc-body">
                    Aurbase is a data-science driven deep hiring platform that accelerates
                    the engineering and design team of companies at the push of a button.
                    At Aurbase we make the remote hiring journey easy and rewarding for both companies,
                    developers and designers.
                    <div class="tour-condition-header py-2"> Watch this if :</div>
                    <ul class="tour-condition-list">
                        <li>You are new on aurbase</li>
                        <li>You are new on aurbase</li>
                        <li>You are new on aurbase</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-1 p-2 ">
            </div>
        </div>

        <div class="row w-100 tour-guide-container justify-content-between mt-5">
            <div class="col-md-2 rounded tour-video ">
                <div class="d-flex h-100 align-items-center justify-content-center position-relative">
                    <img src="{{ asset('assets/img/AURBASE-tour.png') }}" alt="" class="align-items-center">
                    <div
                        class="tour-play-ellipse position-absolute align-self-center d-flex justify-content-center align-items-center">
                        <iconify-icon icon="carbon:play-filled-alt"></iconify-icon>
                    </div>
                </div>
            </div>
            <div class="col-md-8 rounded tour-desc">
                <div class="tour-desc-header py-1">
                    Welcome to Aurbase
                </div>

                <div class="tour-desc-body">
                    Aurbase is a data-science driven deep hiring platform that accelerates
                    the engineering and design team of companies at the push of a button.
                    At Aurbase we make the remote hiring journey easy and rewarding for both companies,
                    developers and designers.
                    <div class="tour-condition-header py-2"> Watch this if :</div>
                    <ul class="tour-condition-list">
                        <li>You are new on aurbase</li>
                        <li>You are new on aurbase</li>
                        <li>You are new on aurbase</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-1 p-2 ">
            </div>
        </div>

        @include('company.layout.include.footer')
    </div>
@endsection

@section('scripts')
@endsection
