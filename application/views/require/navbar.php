<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a href="<?php base_url('')?>" style="padding:5px; margin-left:10px">
               <h4>MMS - SI UPLOADING</h4>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu icon-toggle-right"></i>
            </a>
            <a class="mobile-options waves-effect waves-light">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">

            <ul class="nav-right">
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-bs-toggle="dropdown">
                            <!-- <img src="../files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image"> -->
                            <span><?php echo $this->session->userdata('supplier_name')?></span>
                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="profile-notification dropdown-menu" data-dropdown-in="fadeIn"
                            data-dropdown-out="fadeOut">

                            <!-- <li>
                                <a href="#">
                                    <i class="feather icon-user"></i> Profile
                                </a>
                            </li> -->

                </li>
                <li>
                    <a href="" id="logoutButton">
                        <i class="feather icon-log-out"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
        </li>
        </ul>
    </div>
    </div>
</nav>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
$(document).ready(function() {
    var logoutButton = $('#logoutButton');

    logoutButton.on('click', function(event) {
        console.log("button clicked");
        event.preventDefault();
        confirmLogout();
    });

    function confirmLogout() {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will be logged out.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, log out!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '<?php echo base_url() ?>LoginController/logout';
            }
        });
    }
});
</script>