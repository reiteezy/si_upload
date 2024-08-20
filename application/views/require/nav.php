<div class="pcoded-main-container">
    <div class="pcoded-wrapper">

        <nav class="pcoded-navbar">
            <div class="pcoded-inner-navbar">
                <ul class="pcoded-item">
                    <li class="<?php echo ($menu=='dashboard') ? 'active pcoded-trigger' : ''; ?>">
                        <a href="<?= base_url('maincontroller/dashboard') ?>" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('user_type') == 'supplier'): ?>
                    <li class="<?php echo ($menu=='supplier_po_list') ? 'active' : ''; ?>">
                        <a href="<?= base_url('maincontroller/supplier_po_list') ?>" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                            <span class="pcoded-mtext">P.O List</span>
                        </a>
                    </li>
                    <?php endif ?>
                    <?php if ($this->session->userdata('user_type') == 'buyer'): ?>
                    <li class="<?php echo ($menu=='po_list') ? 'active' : ''; ?>">
                        <a href="<?= base_url('maincontroller/po_list') ?>" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                            <span class="pcoded-mtext">P.O List</span>
                        </a>
                    </li>
                    <?php endif ?>
                </ul>
            </div>
        </nav>