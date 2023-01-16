<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurbase | Become An Aurbaser</title>
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}" type="image/x-icon">
    <script src="{{ url('https://code.iconify.design/2/2.2.1/iconify.min.js') }}"></script>
    <script src="{{ url('https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js') }}"></script>
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}">
    <style>
        .swal2-styled.swal2-confirm {
            background-color: black !important;
        }
    </style>
</head>

<body>
    <div class="row registration-container px-4 py-5 m-0 d-flex justify-content-center align-items-center">
        <div
            class=" col-md-5 mx-auto registration-container-box d-flex flex-column justify-content-center align-items-start py-5 position-relative">
            <a href="{{ url('website') }}">
                <iconify-icon icon="fxemoji:cancellationx" class="cancel_login_icon"></iconify-icon>
            </a>
            <a href="{{ url('website') }}" class="mx-auto mt-3">
                <img src="{{ url('assets/img/logo.png') }}" alt="" class="logo mx-auto">
            </a>
            <h3 class="registration_desc_text pt-3 mb-4 mx-auto text-center">Apply to Join our Talent Network</h3>
            <form action="{{ url('reg') }}" id="login-form" method="post" onsubmit="showloader()">
                @csrf
                <label for="email" class="form-label d-block">Role</label>
                <div class="position-relative">
                    <iconify-icon icon="dashicons:arrow-down" class="track_select_arrow"></iconify-icon>
                    <select class="input-box mb-4" name="role" required id="track_select">
                        <option class="" disabled selected>Select Role</option>
                        <option value="Human Resources">Human Resources</option>
                        <option value="Developer">Developer</option>
                        <option value="Designer">Designer</option>
                    </select>
                </div>
                <label for="fullname" class="form-label d-block">Fullname</label>
                <input type="fullname" name="fullname" placeholder="Enter your fullname" class="input-box mb-4"
                    required>
                <label for="company" class="form-label d-block">Company</label>
                <input type="company" name="company" placeholder="Enter your company" class="input-box mb-4" required>
                <label for="email" class="form-label d-block">Email Address</label>
                <input type="email" name="email" placeholder="Enter your email address here" class="input-box mb-4"
                    required>
                <label for="password" class="form-label d-block">Password</label>
                <input type="password" name="password" placeholder="Enter your password" class="input-box mb-4"
                    required>
                <label for="Confirm password" class="form-label d-block">Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Enter your password"
                    class="input-box mb-4" required>

                <div class="forget_password_container d-flex align-items-start my-3">
                    <input type="checkbox" name="checkbox" class="acknowledge_checkbox mt-2 me-2 d-block w-25" required>
                    &nbsp;
                    <p class="p-0 m-0 remember_me_text text-justify">You acknowledge that the Aurbase screening
                        procedure is
                        confidential and that you will not reveal any information about it publicly. You acknowledge
                        that you have read and agree to our terms and conditions, privacy and policy, and cookie policy
                        by submitting.</p>
                </div>
                <button type="submit" class="login_btn mt-3">
                    Apply Now <span class="spinner-border loader spinner-border-sm" id="thisLoader" role="status"
                        aria-hidden="true" style="display:none"></span>
                </button>
                <div class="create_account_container text-center">
                    Already a member? <a href="{{ url('/') }}" class="create_account_container_link">Login now!</a>
                </div>
            </form>
        </div>
    </div>
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
</body>
<script>
    function showloader() {
        var loader = document.getElementById('thisLoader');
        loader.style.display = "inline-block";
    }
</script>

</html>
