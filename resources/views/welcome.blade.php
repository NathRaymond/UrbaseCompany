<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Login</title>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>
<body>
    <div class="row company-login-container px-4 m-0">
        <div
            class=" col-md-5 mx-auto my-auto login-container-box d-flex flex-column justify-content-center align-items-start py-5 position-relative">
            <a href="#">
                <iconify-icon icon="fxemoji:cancellationx" class="cancel_login_icon"></iconify-icon>
            </a>
            <a href="#" class="mx-auto mt-4">
                <img src="{{asset('assets/img/logo.png')}}" alt="" class="logo mx-auto">
            </a>
            <h1 class="welcome-title pt-3 mb-1 mx-auto">Welcome Back</h1>
            <p class="desc-text py-0 mx-auto mb-4 text-center">To continue using our services, Log in to your account
            </p>
             <form action="{{url('login')}}" id="login-form" method="post" onsubmit="showloader()">
                @csrf
                <label for="email" class="form-label d-block mb-0">Work Email Address</label>
                <input type="email" class="mb-4 company-login-email-input" name="email" required>
                <label for="email" class="form-label d-block mb-0">Password</label>
                <div class="d-flex justify-content-center align-items-center company-login-email-input">
                    <input type="password" name="password" class="password-box" required id="company-password-box">
                    <div class="show-password-icon-container d-flex justify-content-center align-items-center">
                        <span class="iconify show-password-icon" data-icon="clarity:eye-hide-solid"
                            onclick="showPassword()"></span>
                    </div>
                </div>
                <div class="forget_password_container d-flex justify-content-between align-items-center my-3">
                    <div class="remember_password_container d-flex align-items-center">
                        <input type="checkbox" class="remember_password_checkbox"> &nbsp;
                        <p class="p-0 m-0 forget_password_link">Remember me</p>
                    </div>
                    <p class="forget_password_text m-0 p-0">
                        <a href="Company-forgot-password.html" class="forget_password_link">Forgot Password</a>
                    </p>
                </div>
                <button type="submit" class="login_btn fw-light mb-4">
                    Log In
                </button>
                <div class="create_account_container text-center">
                    Not yet a member? <a href="{{ url('register') }}" class="create_account_container_link">Create
                        an account now!</a>
                </div>
            </form>
        </div>
    </div>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script>
        @if ($errors->any())
            //Swal.fire('Oops...', "{!! implode('', $errors->all('<p>:message</p>')) !!}", 'error')
            Swal.fire("{!! implode('', $errors->all('<p>:message</p>')) !!}")
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