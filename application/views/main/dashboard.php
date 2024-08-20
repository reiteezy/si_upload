<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5><?php echo $this->session->userdata('supplier_name')?></h5>
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
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>