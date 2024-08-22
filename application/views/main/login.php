<!doctype html>
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/login-css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/toastr.css')?>">

</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <!-- <h3 class="mb-4 text-center">Have an account?</h3> -->
                        <form action="#" id="loginForm" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="user" id="user"
                                    required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password"
                                    name="pass" id="pass" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="loginBtn"
                                    class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <!-- <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div> -->
                        </form>
                        <!-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>
                                Facebook</a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>
                                Twitter</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="<?php echo base_url('assets/assets/js/login-js/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets/js/login-js/popper.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets/js/login-js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets/js/login-js/main.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets/js/toastr.js')?>"></script>
    <script>
    $(document).ready(function() {
        function submitLoginForm() {
            var formData = $('#loginForm').serialize();

            $.ajax({
                url: '<?php echo base_url() ?>LoginController/login/',
                type: 'post',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        toastr.success(response.message);
                        window.location.href = response.redirect_url;
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log('An error occurred while processing your request.');
                    toastr.error('An error occurred while processing your request.');
                }
            });
        }

        // $('#loginForm').on('submit', function(event) {
        //     event.preventDefault(); 
        //     submitLoginForm();
        // });

        $('#loginBtn').on('click', function(event) {
            console.log('Button clicked');
            event.preventDefault();
            submitLoginForm();
        });
    });
    </script>

</body>

</html>