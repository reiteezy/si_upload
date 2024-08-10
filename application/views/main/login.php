<section class="login-block">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <form id="loginForm" class="md-float-material form-material">
                    <!-- <div class="text-center">
<img src="../files/assets/images/logo.png" alt="logo.png">
</div> -->
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign In</h3>
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <input type="text" name="user" id="user" class="form-control" required>
                                <span class="form-bar"></span>
                                <label class="form-label float-label">Username</label>
                            </div>
                            <div class="form-group form-primary">
                                <input type="password" name="pass" id="pass" class="form-control" required>
                                <span class="form-bar"></span>
                                <label class="form-label float-label">Password</label>
                            </div>

                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <div class="d-grid">
                                        <button type="submit" id="loginBtn"
                                            class="btn btn-primary btn-md waves-effect text-center m-b-20">LOGIN</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>

    </div>

</section>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
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