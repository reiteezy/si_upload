<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <?php if($this->session->userdata('user_type') == 'supplier'):?>
                        <h5><?php echo $this->session->userdata('supplier_name')?></h5>
                        <?php else:?>
                        <h5><?php echo $this->session->userdata('emp_name')?></h5>
                        <?php endif;?>
                        <span>Dashboard</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title breadcrumb-padding">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('maincontroller/dashboard') ?>"><i class="feather icon-home"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <?php
                          if ($this->session->userdata('user_type') == 'supplier'):
                            ?>
                        <div class="col-xl-3 col-md-6">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Pending PO</h6>
                                            <h3 class="f-w-700 text-c-blue">
                                                <?php
                                            $vendor_id = $this->session->userdata('vendor_code');
                                            if ($vendor_id) {
                                                $this->db->where('vendor', $vendor_id);
                                                $this->db->where('status', "Active");
                                                $this->db->where('status_b', "Pending");
                                                $userCount = $this->db->count_all_results('pending_po_header');
                                                echo $userCount;
                                            } else {
                                                echo 'No vendor ID found';
                                            }
                                            ?>
                                            </h3>
                                            <p class="m-b-0"></p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hourglass bg-c-blue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Cancelled PO</h6>
                                            <h3 class="f-w-700 text-c-red">
                                                <?php
                                            $vendor_id = $this->session->userdata('vendor_code');
                                            if ($vendor_id) {
                                                $this->db->where('vendor', $vendor_id);
                                                $this->db->where('status', "Cancelled");
                                                $userCount = $this->db->count_all_results('pending_po_header');
                                                echo $userCount;
                                            } else {
                                                echo 'No vendor ID found';
                                            }
                                            ?>
                                            </h3>
                                            <p class="m-b-0"></p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-ban bg-c-red"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Partially Delivered</h6>
                                            <h3 class="f-w-700 text-c-yellow">
                                                <?php
                                            $vendor_id = $this->session->userdata('vendor_code');
                                            if ($vendor_id) {
                                                $this->db->where('vendor', $vendor_id);
                                                $this->db->where('status', "Active");
                                                $this->db->where('status_b', "Partially Delivered");
                                                $userCount = $this->db->count_all_results('pending_po_header');
                                                echo $userCount;
                                            } else {
                                                echo 'No vendor ID found';
                                            }
                                            ?>
                                            </h3>
                                            <p class="m-b-0"></p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-truck bg-c-yellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Fully Delivered</h6>
                                            <h3 class="f-w-700 text-c-green">
                                                <?php
                                            $vendor_id = $this->session->userdata('vendor_code');
                                            if ($vendor_id) {
                                                $this->db->where('vendor', $vendor_id);
                                                $this->db->where('status', "Active");
                                                $this->db->where('status_b', "Fully Delivered");
                                                $userCount = $this->db->count_all_results('pending_po_header');
                                                echo $userCount;
                                            } else {
                                                echo 'No vendor ID found';
                                            }
                                            ?>
                                            </h3>
                                            <p class="m-b-0"></p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-truck bg-c-green"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                       
                        <div class="col-xl-3 col-md-6">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Total PO</h6>
                                            <h3 class="f-w-700 text-c-blue">
                                                <?php
                                                $userCount = $this->db->count_all('pending_po_header');
                                                echo $userCount;
                                            ?>
                                            </h3>
                                            <p class="m-b-0"></p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-shopping-cart bg-c-blue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-------------------session modal -------------->
<div class="modal fade" id="sessionExpiredModal" tabindex="-1" role="dialog" aria-labelledby="sessionExpiredModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sessionExpiredModalLabel">Session Expired</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Your session has expired. Please log in again to continue.
            </div>
            <div class="modal-footer">
                <a href="<?php echo site_url('login'); ?>" class="btn btn-primary">Log In</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--------------------- end session modal------------------------->


<script>
$(document).ready(function() {
    function checkSession() {
        $.ajax({
            url: '<?php echo base_url('LoginController/checkSession'); ?>',
            type: 'GET',
            success: function(data) {
                if (data.sessionExpired) {
                    $('#sessionExpiredModal').modal('show');
                }
            }
        });
    }

    // Check session every minute
    setInterval(checkSession, 600000);
});
</script>