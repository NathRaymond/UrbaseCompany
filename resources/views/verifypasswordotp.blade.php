<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}" type="image/x-icon">
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}">
    <style>
        .disable-link {
            pointer-events: none;
        }

        .swal2-styled.swal2-confirm {
            background-color: black !important;
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            background-color: white !important;
        }

        .swal2-icon.swal2-error {
            background-color: red !important;
        }

        .swal2-icon.swal2-error {
            border-color: red !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="top-container d-flex justify-content-between align-items-end my-5">
            <a href="" class="">
                <img src="{{ url('assets/img/logo.png') }}" alt="" class="logo mx-auto email-confirmation-logo">
            </a>
            <a href="https://aurbase.com"
                class="return_container d-flex align-items-center justify-content-center d-block">
                <p class="d-flex align-items-center justify-content-center me-2 fs-2 p-0 m-0">
                    <iconify-icon icon="ion:arrow-back-circle-outline" class=""></iconify-icon>
                </p>
                <p class="return_text m-0 p-0 ">Go Back to website</p>
            </a>
        </div>
        <div class=" d-flex flex-column w-100 rounded py-4 justify-content-center align-items-center px-4">
            <div class="confirmation-user-image-container d-flex justify-content-between align-items-center mb-3">
                <img src="{{ url('assets/img/otp-aurbase-logo.png') }}" alt="" class="img-fluid">
            </div>
            <h3 class="fw-semibold text-center">Kindly Enter the OTP to change your Password</h3>
            <p class="w-50 text-center fw-normal confirmation-message">
                Please take a moment to check your email address. We sent an email with an OTP to <span
                    class="fw-bold">{{ session()->get('email') }}</span>. If you can’t find it in
                your Inbox, check your spam folder.
            </p>
            <div class="otp-wrapper otp-event mt-3">
                <form action="{{ url('verify_forgottenotp') }}" method="post" onsubmit="showloader()">
                    @csrf
                    <input type="hidden" name="token" value={{ session()->get('token') }}>
                    <div class="otp-container">
                        <input type="tel" name="value" id="otp-number-input-1" class="otp-number-input" maxlength="1"
                            autocomplete="off">
                        <input type="tel" name="value1" id="otp-number-input-2" class="otp-number-input" maxlength="1"
                            autocomplete="off">
                        <input type="tel" name="value2" id="otp-number-input-3" class="otp-number-input" maxlength="1"
                            autocomplete="off">
                        <input type="tel" name="value3" id="otp-number-input-4" class="otp-number-input" maxlength="1"
                            autocomplete="off">
                        <input type="tel" name="value4" id="otp-number-input-5" class="otp-number-input" maxlength="1"
                            autocomplete="off">
                        <input type="tel" name="value5" id="otp-number-input-6" class="otp-number-input" maxlength="1"
                            autocomplete="off">
                    </div>

                    <a href="#" class="mt-5 otp-submit-parent-container d-block">
                        <button id="confirm" type="submit" class="otp-submit" disabled onclick="otpTimer()">Validate
                            OTP <span class="spinner-border loader spinner-border-sm" id="thisLoader" role="status"
                                aria-hidden="true" style="display:none"></span></button>
                    </a>
                </form>
                <form action="{{ url('resend-otp') }}" method="post">
                    @csrf
                    <p class="mt-3 otp-time-counter fw-semibold">Didn’t receive an OTP? Click here to <a
                            style="text-decoration: ; color:black" href="#" id="resend">Resend</a> in <span
                            class="text-warning"><span class="otp-minute">03</span><span
                                class="otp-second">:00</span></span></p>
                </form>
            </div>
        </div>
        <div class="sponsors-container my-5 row">
            <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                <img src="{{ url('assets/img/sponsor1.png') }}" alt="" class="img-fluid my-4">
            </div>
            <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                <img src="{{ url('assets/img/sponsor2.png') }}" alt="" class="img-fluid my-4">
            </div>
            <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                <img src="{{ url('assets/img/sponsor3.png') }}" alt="" class="img-fluid my-4">
            </div>
            <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                <img src="{{ url('assets/img/sponsor4.png') }}" alt="" class="img-fluid my-4">
            </div>
            <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                <img src="{{ url('assets/img/sponsor5.png') }}" alt="" class="img-fluid my-4">
            </div>
            <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                <img src="{{ url('assets/img/sponsor6.png') }}" alt="" class="img-fluid my-4">
            </div>
        </div>
        <div class="help-container d-flex justify-content-center align-items-end  flex-column pb-5">
            <p class="text-center">
                <iconify-icon icon="clarity:help-solid" class="help-icon"></iconify-icon> <br>
                <span class="need-help-text fw-semibold">Need Help?</span>
            </p>
        </div>
    </div>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/otp.js') }}"></script>
    <script src="{{ url('assets/js/script.js') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if ($errors->any())
            Swal.fire('Oops...', "{!! implode('', $errors->all('<p>:message</p>')) !!}", 'error')
        @endif

        @if (session()->has('message'))
            Swal.fire(
                'Success!',
                "{{ session()->get('message') }}",
                'success'
            )
        @endif
        @if (session()->has('success'))
            Swal.fire(
                'Success!',
                "{{ session()->get('success') }}",
                'success'
            )
        @endif
    </script>
    <script>
        function showloader() {
            var loader = document.getElementById('thisLoader');
            loader.style.display = "inline-block";
        }
    </script>
</body>

</html>