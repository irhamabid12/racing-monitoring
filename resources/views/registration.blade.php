<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="developer">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a registration page">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
                    <form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="{{ route('insertNewUser') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="name">Full Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                            <div class="invalid-feedback">
                                Name is required
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="" required>
                            <div class="invalid-feedback">
                                Email is invalid
                            </div>
                        </div>
    
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            <div class="invalid-feedback">
                                Password is required
                            </div>
                        </div>
    
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="password_confirmation">Confirm Password</label>
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                            <div class="invalid-feedback">
                                Please confirm your password
                            </div>
                        </div>
    
                        <div class="d-flex align-items-center">
                            <button type="submit" class="btn btn-primary ms-auto">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer py-3 border-0">
                    <div class="text-center">
                        Already have an account? <a href="{{ route('login') }}" class="text-dark">Login</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 text-muted">
                Copyright &copy; 2024 &mdash; Racing Monitoring
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {

                        var password = form.querySelector('#password').value;
                        var passwordConfirmation = form.querySelector('#password_confirmation').value;

                        if (!form.checkValidity() || password !== passwordConfirmation) {
                            event.preventDefault()
                            event.stopPropagation()

                            if (password !== passwordConfirmation) {
                                swal("Error", "Passwords do not match", "error");
                            }
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>
