<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a href="<?php base_url('')?>" style="padding:5px; margin-left:10px">
                <h4>MMS - UPLOADING</h4>
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

                            <?php if (($this->session->userdata('user_type') == 'srr-uploader') || ($this->session->userdata('user_type') == 'si-uploader')){ 
                                 $photo = $this->session->userdata('emp_photo');
                                 $username = $this->session->userdata('username');
                                 echo '<span style="margin-right: 10px;">'.$username.'</span>';
                               $src = str_replace("../", "http://172.16.161.34:8080/hrms/", $photo);
                            echo '<img src="'.$src.'" class="img-radius" alt="User-Profile-Image">';
                           
                        }else {
                            $photo = base_url('assets/assets/images/profile.png');
                            $username = $this->session->userdata('username');
                            echo '<span style="margin-right: 10px;">'.$username.'</span>';
                            echo '<img src="'.$photo.'" class="img-radius" alt="User-Profile-Image">';
                        }?>
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