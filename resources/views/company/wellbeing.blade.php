@extends('company.layout.master')

@section('headlinks')
@endsection

@section('active-menuwellbeing')
active-menu
@endsection

@section('content')
<div class="dashboard-panel">

    <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
        <h2 class="fw-bold p-0 m-0">Wellbeing</h2>
        @include('company.layout.active')
    </div>

    <div class="mx-0 row w-100 wellbeing-container mt-4 p-5 justify-content-around position-relative">
        <div class="">
            <img src="{{ asset('assets/img/coming-soon.png') }}" alt="" class="wellbeing-coming-soon position-absolute">
        </div>
        <div class="col-md-4 aurcare-card d-flex flex-column align-items-center justify-content-center">
            <img src="{{ asset('assets/img/AURBASE-medic.png') }}" alt="" class="">
            <div class="d-flex mt-2">
                <iconify-icon icon="healthicons:health-data-security" class="aurcare-card-health-icon">
                </iconify-icon>
                <p class="aurcare-card-health-text align-self-center">AURCare</p>
            </div>
        </div>
        <div class="col-md-8 wellbeing-container-text align-self-center ">
            <h3 class="wellbeing-header">Take charge of your health</h3>
            <p class="wellbeing-text">
                We give you the opportunity to check your
                health status even make an impact at work from the comfort of your home.
            </p>
        </div>
    </div>

    <div class="mx-0 row w-100 wellbeing-container mt-4 p-5 justify-content-around position-relative">
        <div class="">
            <img src="{{ asset('assets/img/coming-soon.png') }}" alt="" class="wellbeing-coming-soon position-absolute">
        </div>
        <div class="col-md-4 aurcare-card d-flex flex-column align-items-center justify-content-center">
            <img src="{{ asset('assets/img/AURBASE-medic.png') }}" alt="" class="">
            <div class="d-flex mt-2">
                <iconify-icon icon="emojione-monotone:pot-of-food" class="aurcare-card-food-icon">
                </iconify-icon>
                <p class="aurcare-card-health-text align-self-center">AURFood</p>
            </div>
        </div>
        <div class="col-md-8 wellbeing-container-text align-self-center ">
            <h3 class="wellbeing-header">Never worry about employee’s wellbeing</h3>
            <p class="wellbeing-text">
                We Deliver freshly cooked meals to your employee while
                they work at right schedule.
            </p>
        </div>
    </div>

    @include('company.layout.include.footer')
</div>
@endsection

@section('scripts')
@endsection