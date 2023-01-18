@extends('company.layout.master')

@section('headlinks')
@endsection

@section('active-menusetting')
active-menu
@endsection

@section('content')
<div class="dashboard-panel">
    <div class="dashboard-panel-nav d-flex justify-content-between align-items-end pt-1">
        <h2 class="fw-bold p-0 m-0">Settings</h2>
        @include('company.layout.active')
    </div>

    <!-- Modal -->

    <div class="modal fade" id="resetPassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content py-4 px-5 modal-container-parent">
                <div class="modal-header p-0 pb-2 d-flex justify-content-center align-self-center submit-logo-ellipse">
                    <img src="../vetting/assets/img/aurbase-hire-request.png" alt="" class="stack-pill-img">
                </div>
                <div class="modal-body px-0">
                    <p class="password-changed-text">
                        Password Changed Successfully
                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="{{ url('setting') }}" class="col-md-6 go-back-reset d-flex justify-content-center ">
                            Go back</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div>
        <h2 class="reset-title fw-bold py-3 m-0">Reset Password</h2>
        <div class="reset-text">
            For password reset you need to do the following;
            Type your previous password,new password and confirm new password
        </div>
    </div>
    <form>
        @csrf
        <div class="py-4 settings-form">
            <label class="settings-label py-2">Old Password</label>
            <div class="">
                <input class="settings-input p-3" name="old_password" />
            </div>
            <label class="settings-label py-2 pt-4">New Password</label>
            <div class="">
                <input class="settings-input p-3" name="password" />
            </div>
            <label class="settings-label py-2 pt-4">Confirm New Password</label>
            <div class="">
                <input class="settings-input p-3" name="password_confirmation" />
            </div>
            <div class="reset-password-container py-4 d-flex justify-content-end" data-bs-toggle="modal"
                data-bs-target="#resetPassword">
                <div class="reset-password p-3 px-5" role="button">Reset Password</div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')
@endsection