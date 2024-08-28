<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-list bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>PO List</h5>
                        <span>List</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title breadcrumb-padding">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('maincontroller/dashboard') ?>"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">PO List</a>
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


                    <div class="card">
                        <!-- <div class="card-header">
                            <h5>View List</h5>
                        </div> -->
                        <!-- <div class="col-lg-6 col-xl-6" style="padding: 20px;"> -->
                        <ul class="nav nav-tabs md-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#pendingtab"
                                    role="tab">Pending</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#cancelledtab" role="tab">Cancelled</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#partialtab" role="tab">Partially
                                    Delivered</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#fulltab" role="tab">Fully Delivered</a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                        <div class="tab-content card-block">
                            <div class="tab-pane active" id="pendingtab" role="tabpanel">
                                <div class="card-header">
                                    <h5>View Pending</h5>
                                </div>
                                <div class="table-responsive">
                                    <table id="pending_tbl" class="table table-striped table-bordered "
                                        style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Store</th>
                                                <th>Vendor Code</th>
                                                <th>Doc. No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Store</th>
                                                <th>Vendor Code</th>
                                                <th>Doc. No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="cancelledtab" role="tabpanel">
                                <div class="card-header">
                                    <h5>View Cancelled</h5>
                                </div>
                                <div class="table-responsive">
                                    <table id="cancelled_tbl" class="table table-striped table-bordered "
                                        style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Store</th>
                                                <th>Vendor Code</th>
                                                <th>Doc. No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Store</th>
                                                <th>Vendor Code</th>
                                                <th>Doc. No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="partialtab" role="tabpanel">
                                <div class="card-header">
                                    <h5>View Partially Delivered</h5>
                                </div>
                                <div class="table-responsive">
                                    <table id="partial_tbl" class="table table-striped table-bordered"
                                        style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Store</th>
                                                <th>Vendor Code</th>
                                                <th>Doc. No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Store</th>
                                                <th>Vendor Code</th>
                                                <th>Doc. No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="fulltab" role="tabpanel">
                                <div class="card-header">
                                    <h5>View Fully Delivered</h5>
                                </div>
                                <div class="dt-responsive table-responsive">
                                    <table id="full_tbl" class="table table-striped table-bordered" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Store</th>
                                                <th>Vendor Code</th>
                                                <th>Doc. No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Store</th>
                                                <th>Vendor Code</th>
                                                <th>Doc. No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------------- UPLOAD SI MODAL---------------->
<div class="modal fade" id="upload_si_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div id="po_doc_no_txt"></div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div id="po_date_txt"></div>
                        </div>

                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                <div class="card-block">
                    <div style="margin-left: 120px;">
                        <span style="font-size: 10px; color: red;">Max size: 2MB</span>

                    </div>
                    <div class="upload-container">
                        <form id="uploadForm" enctype="multipart/form-data">
                            <input type="file" name="images[]" multiple>
                            <div class="text-center">
                                <input type="submit" name="upload" value="Upload SI">
                            </div>
                            <input type="hidden" name="doc_no_val" id="doc_no_val">
                        </form>

                    </div>
                    <div class="card-block" style="margin: 30px; padding: 10px;">
                        <div class="container" style="max-height: 600px;">
                            <div class="row" id="gallery-container">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary waves-effect waves-light ">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<!--------------- END OF UPLOAD SI MODAL---------------->

<!--- view po modal -->

<div class="modal fade" id="po_lines_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div id="po_doc_no_txt3"></div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div id="po_date_txt3"></div>
                        </div>
                        <input type="hidden" name="doc_no_val3" id="doc_no_val">
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                <div class="card-block">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">

                            <button class="nav-link active btn btn-primary btn-square waves-effect waves-light"
                                id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#po-lines" type="button"
                                role="tab" aria-controls="pills-home" aria-selected="true"
                                style="border: 1px solid #4099ff">PO LINES</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link btn btn-primary btn-square waves-effect waves-light"
                                id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#si_uploaded" type="button"
                                role="tab" aria-controls="pills-profile" aria-selected="false"
                                style="border: 1px solid #4099ff">UPLOADED SI</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="po-lines" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="dt-responsive table-responsive">
                                <table id="po_lines_table" class="table table-striped table-bordered"
                                    style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Item Code</th>
                                            <th>Description</th>
                                            <th>Uom</th>
                                            <th>Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Item Code</th>
                                            <th>Description</th>
                                            <th>Uom</th>
                                            <th>Qty</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="si_uploaded" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="card-block" style="padding: 10px; margin-top:30px;">
                                <div class="container" style="max-height: 600px;">
                                    <div class="row" id="gallery-container2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary waves-effect waves-light ">Save changes</button> -->
            </div>
        </div>
    </div>
</div>


<!--- end of view po modal -->

<!---- view uploaded si img modal-->
<div class="modal fade" id="view_si_img_modal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
    aria-hidden="true" style="z-index: 1080;">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 40%">
        <div class="modal-content">
            <div class="modal-body">
                <img id="siImage" src="" alt="SI Image">
            </div>
        </div>
    </div>
</div>

<!---- end of view uploaded si img modal--->

<!-- loader modal ---->
<div id="loaderModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="loaderModalLabel"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 100px; max-height: 200px;">
        <div class="modal-content">
            <div class="modal-body" style="display: flex; align-items: center;justify-content: center;">
                <div class="upload-loader"></div>
                <!-- <p>Uploading...</p> -->
            </div>
        </div>
    </div>
</div>
<!-- end of loader modal -->

<!-------------------session modal -------------->
<div class="modal fade" id="sessionExpiredModal" tabindex="-1" role="dialog" aria-labelledby="sessionExpiredModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sessionExpiredModalLabel">Session Expired</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

<script type="text/javascript" src="<?= base_url('assets/assets/js/jquery-3.7.0.js'); ?>"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/assets/js/jquery.dataTables.min.js"></script>
<script>

$(document).ready(function(e) {
    $("#uploadForm").on('submit', function(e) {
        e.preventDefault();
        var uploadType = "si_upload";
        $("#loaderModal").modal('show');

        var docNum = $('#doc_no_val').val();
        var formData = new FormData(this);
        console.log(docNum);
        var minLoadTime = 1000;
        var startTime = Date.now();
        formData.append('uploadType', uploadType);

        $.ajax({
            url: "<?= base_url('UploadController/upload_images'); ?>",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                var elapsedTime = Date.now() - startTime;
                var remainingTime = Math.max(0, minLoadTime - elapsedTime);

                setTimeout(function() {
                    loadImages(docNum);
                    $("#loaderModal").modal('hide');

                    Swal.fire({
                        title: response.status === 'success' ? 'Success' :
                            response.status === 'error' ? 'Error' :
                            'Warning',
                        text: response.message,
                        icon: response.status === 'success' ? 'success' :
                            response.status === 'error' ? 'error' :
                            'warning'
                    }).then(() => {
                        if (response.status === 'success') {
                            $("#uploadForm")[0].reset();
                            $("#uploadForm input[type='file']").val('');
                        }
                    });
                }, remainingTime);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $("#loaderModal").modal('hide');

                Swal.fire({
                    title: 'Error',
                    text: 'An unexpected error occurred. Please try again.',
                    icon: 'error'
                });
            }
        });
    });
});


// const uploadTable = $("#upload_si_modal").DataTable({ "ordering": false});

load_pending_po_table();
load_cancelled_po_table();
load_partial_delivered_table();
load_full_delivered_table();

// var dataTable_reorder;

function load_pending_po_table() {

    if (dataTable_pending) {
        dataTable_pending.destroy();
    }

    var dataTable_pending = $('#pending_tbl').DataTable({
        processing: true,
        serverSide: true,
        searching: true,
        lengthChange: false,
        ordering: false,
        ajax: {
            url: "<?php echo base_url(); ?>PoController/get_pending_po_list",
            type: "POST",
            data: function(d) {
                d.start = d.start || 0;
                d.length = d.length || 10;
            }
        },
        columns: [{
                data: 'store'
            },
            {
                data: 'vendor_code'
            },
            {
                data: 'doc_no'
            },
            {
                data: 'po_date'
            },
            {
                data: 'status',
                render: function(data, type, row) {
                    if (row.status === 'Active') {
                        return '<span class="badge badge-success">' + row.status + '</span>';
                    } else {
                        return '<span class="badge badge-danger">' + row.status + '</span>';
                    }
                }
            },
            {
                data: 'remarks',
                render: function(data, type, row) {
                    if (row.si_doc_no) {
                        return '<span class="badge badge-warning">' + 'si uploaded' + '</span>';
                    } else {
                        return '-';
                    }
                }
            },
            {
                data: null,
                orderable: false,
                render: function(data, type, row) {
                    if (row.status === 'Active') {
                        return (
                            '<button type="button" title="View" style="margin-left: 5px; margin-right: 5px;" class="btn waves-effect waves-light btn-primary btn-icon" onclick="viewPoLines(\'' +
                            row.hd_id + '\',\'' + row.store + '\',\'' + row.po_date + '\',\'' +
                            row.document_no + '\')">' +
                            '<i class="icofont icofont-eye-alt" style="padding-left: 5px; font-size: 20px;"></i>' +
                            '</button>' +
                            '<button type="button" title="Upload SI" style="margin-left: 5px; margin-right: 5px;" class="btn waves-effect waves-light btn-primary btn-icon" onclick="viewUploadSiModal(\'' +
                            row.hd_id + '\',\'' + row.store + '\',\'' + row.po_date + '\',\'' + row
                            .document_no + '\')">' +
                            '<i class="icofont icofont-upload-alt" style="padding-left: 5px; font-size: 20px;"></i>' +
                            '</button>'
                        );
                    } else {
                        return '';
                    }
                }
            }
        ],
        paging: true,
        pagingType: "full_numbers",
        lengthMenu: [
            [10, 25, 50, 1000],
            [10, 25, 50, "Max"]
        ],
        pageLength: 10,
        language: {
            search: '',
            searchPlaceholder: ' Search...'
        }
    });


}


function load_cancelled_po_table() {

    if (dataTable_cancelled) {
        dataTable_cancelled.destroy();
    }

    var dataTable_cancelled = $('#cancelled_tbl').DataTable({
        processing: true,
        serverSide: true,
        searching: true,
        lengthChange: false,
        ordering: false,
        ajax: {
            url: "<?php echo base_url(); ?>PoController/get_cancelled_po_list",
            type: "POST",
            data: function(d) {
                d.start = d.start || 0;
                d.length = d.length || 10;
            }
        },
        columns: [{
                data: 'store'
            },
            {
                data: 'vendor_code'
            },
            {
                data: 'doc_no'
            },
            {
                data: 'po_date'
            },
            {
                data: 'status',
                render: function(data, type, row) {
                    if (row.status === 'Cancelled') {
                        return '<span class="badge badge-danger">' + row.status + '</span>';
                    } else {
                        return '-';
                    }
                }
            },
            {
                data: 'remarks',
                render: function(data, type, row) {
                    if (row.si_doc_no) {
                        return '<span class="badge badge-warning">' + 'si uploaded' + '</span>';
                    } else {
                        return '-';
                    }
                }
            },
            {
                data: null,
                orderable: false,
                render: function(data, type, row) {
                    if (row.status === 'Cancelled') {
                        return (
                            '<button type="button" title="View" style="margin-left: 5px; margin-right: 5px;" class="btn waves-effect waves-light btn-primary btn-icon" onclick="viewPoLines(\'' +
                            row.hd_id + '\',\'' + row.store + '\',\'' + row.po_date + '\',\'' + row
                            .document_no + '\')">' +
                            '<i class="icofont icofont-eye-alt" style="padding-left: 5px; font-size: 20px;"></i>' +
                            '</button>'
                        );
                    } else {
                        return '-';
                    }
                }
            }
        ],
        paging: true,
        pagingType: "full_numbers",
        lengthMenu: [
            [10, 25, 50, 1000],
            [10, 25, 50, "Max"]
        ],
        pageLength: 10,
        language: {
            search: '',
            searchPlaceholder: ' Search...'
        }
    });


    $('.dataTables_filter input[type="search"]').css({
        'width': '300px',
        'margin-bottom': '10px',
        'padding': '5px',
        'box-sizing': 'border-box'
    });

}

function load_partial_delivered_table() {

    if (dataTable_partial_delivered) {
        dataTable_partial_delivered.destroy();
    }

    var dataTable_partial_delivered = $('#partial_tbl').DataTable({
        processing: true,
        serverSide: true,
        searching: true,
        lengthChange: false,
        ordering: false,
        ajax: {
            url: "<?php echo base_url(); ?>PoController/get_partial_delivered_po_list",
            type: "POST",
            data: function(d) {
                d.start = d.start || 0;
                d.length = d.length || 10;
            }
        },
        columns: [{
                data: 'store'
            },
            {
                data: 'vendor_code'
            },
            {
                data: 'doc_no'
            },
            {
                data: 'po_date'
            },
            {
                data: 'status',
                render: function(data, type, row) {
                    if (row.status === 'Active') {
                    let badges = '<span class="badge badge-success">' + row.status + '</span>';

                    if (row.si_doc_no) {
                        badges += '<span class="badge badge-info">si</span>';
                    }

                    if (row.srr_doc_no) {
                        badges += '<span class="badge badge-info">srr</span>';
                    }

                    return badges;
                } else if (row.status === 'Cancelled') {
                    return '<span class="badge badge-danger">' + row.status + '</span>';
                }
                return row.status;
                }
            },
            {
                data: 'remarks',
                render: function(data, type, row) {
                    if (row.si_doc_no) {
                        return '<span class="badge badge-warning">' + 'si uploaded' + '</span>';
                    } else {
                        return '-';
                    }
                }
            },
            {
                data: null,
                orderable: false,
                render: function(data, type, row) {
                    if (row.status === 'Active') {
                        return (
                            '<button type="button" title="View" style="margin-left: 5px; margin-right: 5px;" class="btn waves-effect waves-light btn-primary btn-icon" onclick="viewPoLines(\'' +
                            row.hd_id + '\',\'' + row.store + '\',\'' + row.po_date + '\',\'' + row
                            .document_no + '\')">' +
                            '<i class="icofont icofont-eye-alt" style="padding-left: 5px; font-size: 20px;"></i>' +
                            '</button>' +
                            '<button type="button" title="Upload SI" style="margin-left: 5px; margin-right: 5px;" class="btn waves-effect waves-light btn-primary btn-icon" onclick="viewUploadSiModal(\'' +
                            row.hd_id + '\',\'' + row.store + '\',\'' + row.po_date + '\',\'' + row
                            .document_no + '\')">' +
                            '<i class="icofont icofont-upload-alt" style="padding-left: 5px; font-size: 20px;"></i>' +
                            '</button>'
                        );
                    } else {
                        return ('<button type="button" title="Upload SI" style="margin-left: 5px; margin-right: 5px;" class="btn waves-effect waves-light btn-primary btn-icon" onclick="viewPoLines(\'' +
                            row.hd_id + '\',\'' + row.store + '\',\'' + row.po_date + '\',\'' + row
                            .document_no + '\')">' +
                            '<i class="icofont icofont-eye-alt" style="padding-left: 5px; font-size: 20px;"></i>' +
                            '</button>'
                        );
                    }
                }
            }
        ],
        paging: true,
        pagingType: "full_numbers",
        lengthMenu: [
            [10, 25, 50, 1000],
            [10, 25, 50, "Max"]
        ],
        pageLength: 10,
        language: {
            search: '',
            searchPlaceholder: ' Search...'
        }
    });


}

function load_full_delivered_table() {

    if (dataTable_full_delivered) {
        dataTable_full_delivered.destroy();
    }

    var dataTable_full_delivered = $('#full_tbl').DataTable({
        processing: true,
        serverSide: true,
        searching: true,
        lengthChange: false,
        ordering: false,
        ajax: {
            url: "<?php echo base_url(); ?>PoController/get_full_delivered_po_list",
            type: "POST",
            data: function(d) {
                d.start = d.start || 0;
                d.length = d.length || 10;
            }
        },
        columns: [{
                data: 'store'
            },
            {
                data: 'vendor_code'
            },
            {
                data: 'doc_no'
            },
            {
                data: 'po_date'
            },
            {
                data: 'status',
                render: function(data, type, row) {
                    if (row.status === 'Active') {
                        return '<span class="badge badge-success">' + row.status + '</span>';
                    } else {
                        return '-';
                    }
                }
            },
            {
                data: 'remarks',
                render: function(data, type, row) {
                    if (row.si_doc_no) {
                        return '<span class="badge badge-warning">' + 'si uploaded' + '</span>';
                    } else {
                        return '-';
                    }
                }
            },
            {
                data: null,
                orderable: false,
                render: function(data, type, row) {
                    if (row.status === 'Active') {
                        return (
                            '<button type="button" title="View" style="margin-left: 5px; margin-right: 5px;" class="btn waves-effect waves-light btn-primary btn-icon" onclick="viewPoLines(\'' +
                            row.hd_id + '\',\'' + row.store + '\',\'' + row.po_date + '\',\'' + row
                            .document_no + '\')">' +
                            '<i class="icofont icofont-eye-alt" style="padding-left: 5px; font-size: 20px;"></i>' +
                            '</button>'
                        );
                    } else {
                        return '-';
                    }
                }
            }
        ],
        paging: true,
        pagingType: "full_numbers",
        lengthMenu: [
            [10, 25, 50, 1000],
            [10, 25, 50, "Max"]
        ],
        pageLength: 10,
        language: {
            search: '',
            searchPlaceholder: ' Search...'
        }
    });


}

const poLinesTable = $("#po_lines_table").DataTable({
    "ordering": false,
    "lengthChange": false,
    "language": {
        search: '',
        searchPlaceholder: ' Search...'
    }
});

$('.dataTables_filter input[type="search"]').css({
    'width': '300px',
    'margin-right': '10px',
    'padding': '5px',
    'box-sizing': 'border-box'
});


function viewPoLines(hd_id, store, po_date, doc_no) {
    selected_hd_id = hd_id;
    console.log(selected_hd_id + store + po_date);
    $("#doc_no_val3").val(doc_no);
    $("#po_doc_no_txt3").html("<span>" + "PO Document NO : " + "<h4>" + doc_no + "</h4>" +
        "</span>");
    $("#po_date_txt3").html("<span>" + "PO Date : " + "<h4>" + po_date + "</h4>" + "</span>");

    $("#po_lines_modal").modal('show')
    loadImages(doc_no);
    $.ajax({
        url: '<?php echo site_url('PoController/listPoLines')?>',
        type: 'POST',
        data: {
            hd_id: hd_id
        },
        success: function(response) {
            var jObj = JSON.parse(response);
            console.log(jObj);
            populatePoLinesTable(jObj);

        }
    });

}


function populatePoLinesTable(list) {
    poLinesTable.clear().draw();

    for (var c = 0; c < list.length; c++) {
        var item_code = list[c].item_code;
        var description = list[c].description;
        var pending_qty = list[c].pending_qty;
        var uom = list[c].uom;

        var rowNode = poLinesTable.row.add([item_code, description, uom, pending_qty]).draw().node();

        // $(rowNode).find('td').css({'color': 'black', 'font-family': 'sans-serif','text-align': 'center'});  
    }

}


function viewUploadSiModal(hd_id, store, po_date, document_no) {
    selected_hd_id = hd_id;
    console.log(selected_hd_id + store + po_date + document_no);
    loadImages(document_no);
    $("#doc_no_val").val(document_no);
    $("#po_doc_no_txt").html("<span>" + "PO Document NO : " + "<h4>" + document_no + "</h4>" + "</span>");
    $("#po_date_txt").html("<span>" + "PO Date : " + "<h4>" + po_date + "</h4>" + "</span>");
    $("#upload_si_modal").modal('show');
}


function loadImages(document_no) {
    $.ajax({
        url: '<?= base_url('UploadController/view_si_images/'); ?>' + document_no,
        type: 'GET',
        dataType: 'html',
        success: function(response) {
            $('#gallery-container').html(response);
            $('#gallery-container2').html(response);
        },
        error: function() {
            Swal.fire(
                'Error!',
                'Failed to fetch images. Please try again.',
                'error'
            );
        }
    });
}


function viewSiImg(imgElement) {
    var imgSrc = imgElement.getAttribute('data-img-src');
    console.log('Image Source:', imgSrc);
    $('#siImage').attr('src', imgSrc);
    $('#view_si_img_modal').modal('show');
}


function deleteImage(url, doc_no) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(url, {
                method: 'DELETE'
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    Swal.fire(
                        'Deleted!',
                        data.message,
                        'success'
                    );
                    loadImages(doc_no);
                } else {
                    Swal.fire(
                        'Error!',
                        data.message,
                        'error'
                    );
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire(
                    'Error!',
                    'An error occurred while trying to delete the image.',
                    'error'
                );
            });
        }
    });
}


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

    setInterval(checkSession, 600000); 
});
</script>