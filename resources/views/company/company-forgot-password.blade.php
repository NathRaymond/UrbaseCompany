<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Forgot Password</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
    <div class="row company-login-container px-4 m-0">
        <div
            class=" col-md-5 mx-auto my-auto login-container-box d-flex flex-column justify-content-center align-items-start py-5 position-relative">
            <a href="Company-login.html">
                <iconify-icon icon="fxemoji:cancellationx" class="cancel_login_icon"></iconify-icon>
            </a>
            <a href="" class="mx-auto">
                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="logo mx-auto">
            </a>
            <h1 class="welcome-title pt-3 mb-1 mx-auto">Forgot Password</h1>
            <p class="desc-text py-0 mx-auto mb-4 text-center">Kindly drop your work email for instructions on how to
                retrieve your Password
            </p>
            <form action="{{ url('saveforget-password') }}"  method="post" id="login-form" onsubmit="showloader()">
                @csrf
                <label for="email" class="form-label d-block mb-0">Work Email Address</label>
                <input type="email" name="email" class="mb-2 company-login-email-input" required>
                <button type="submit" class="login_btn fw-light mb-4">
                    Send Email &nbsp; <span class="spinner-border loader spinner-border-sm" id="thisLoader" role="status"
                    aria-hidden="true" style="display:none"></span>
                </button>
            </form>
        </div>
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script>
        function showloader() {
            var loader = document.getElementById('thisLoader');
            loader.style.display = "inline-block";
        }
    </script>
</body>
</html>