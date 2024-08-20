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
                                    <table id="pending_tbl" class="table table-striped table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>Store</th>
                                                <th>Vendor Code</th>
                                                <th>Doc. No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <!-- <th>Remarks</th> -->
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
                                                <!-- <th>Remarks</th> -->
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
                                <div class="dt-responsive table-responsive">
                                    <table id="cancelled_tbl" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Store</th>
                                                <th>Vendor Code</th>
                                                <th>Doc. No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <!-- <th>Remarks</th> -->
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
                                                <!-- <th>Remarks</th> -->
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
                                <div class="dt-responsive table-responsive">
                                    <table id="partial_tbl" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Store</th>
                                                <th>Vendor Code</th>
                                                <th>Doc. No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <!-- <th>Remarks</th> -->
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
                                                <!-- <th>Remarks</th> -->
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
                                    <table id="full_tbl" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Store</th>
                                                <th>Vendor Code</th>
                                                <th>Doc. No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <!-- <th>Remarks</th> -->
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
                                                <!-- <th>Remarks</th> -->
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
            <div class="modal-body">


                <div class="card-block">
                    <div class="upload-container">
                        <form id="uploadForm" enctype="multipart/form-data">
                            <input type="file" name="images[]" multiple>
                            <div class="text-center">
                            <input type="submit" name="upload" value="Upload SI"></div>
                            <input type="hidden" name="doc_no_val" id="doc_no_val">
                        </form>
                    </div>
                    <div class="card-block" style="margin-top: 30px;">
                        <div class="container">
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
<!---- view uploaded si modal-->
<!-- Modal -->
<div class="modal fade" id="view_si_modal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 40%">
        <div class="modal-content">
            <div class="modal-body">
                <img id="siImage" src="" alt="SI Image">
            </div>
        </div>
    </div>
</div>

<!---- end of view uploaded si modal--->
<script type="text/javascript" src="<?= base_url('assets/assets/js/jquery-3.7.0.js'); ?>"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/assets/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.js"></script>
<script>



$(document).ready(function(e) {
    $("#uploadForm").on('submit', function(e) {
        e.preventDefault();
        var docNum = $('#doc_no_val').val();
        var formData = new FormData(this);
        console.log(docNum);
        $.ajax({
            url: "<?= base_url('UploadController/upload_images'); ?>",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                Swal.fire({
                    title: response.status === 'success' ? 'Success' : response
                        .status === 'error' ? 'Error' : 'Warning',
                    text: response.message,
                    icon: response.status === 'success' ? 'success' : response
                        .status === 'error' ? 'error' : 'warning'
                }).then(() => {
                    if (response.status === 'success') {
                        location.reload(true);
                    }
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Swal.fire({
                    title: 'Error',
                    text: 'An unexpected error occurred. Please try again.',
                    icon: 'error'
                });
            }
        });
    });
});

function viewSiModal(imgElement) {
    var imgSrc = imgElement.getAttribute('data-img-src');
    console.log('Image Source:', imgSrc);
    $('#siImage').attr('src', imgSrc);
    $('#view_si_modal').modal('show');
}
// const uploadTable = $("#upload_si_modal").DataTable({ "ordering": false});

load_pending_po_table();
load_cancelled_po_table();


var dataTable_reorder;

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
            url: "<?php echo base_url(); ?>PoController/get_all_pending_po_list",
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
                    } else if (row.status === 'Cancelled') {
                        return '<span class="badge badge-danger">CANCELLED</span>';
                    }
                    return row.status;
                }
            },
            {
                data: null,
                orderable: false,
                render: function(data, type, row) {
                    if (row.status === 'Active') {
                        return (
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

    if (dataTable_pending) {
        dataTable_pending.destroy();
    }

    var dataTable_pending = $('#cancelled_tbl').DataTable({
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
                        return '<span class="badge badge-danger">CANCELLED</span>';
                    }
                    return row.status;
                }
            },
            {
                data: null,
                orderable: false,
                render: function(data, type, row) {
                    if (row.status === 'Cancelled') {
                        return (
                            ''
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


    $('.dataTables_filter input[type="search"]').css({
        'width': '300px',
        'margin-bottom': '10px',
        'padding': '5px',
        'box-sizing': 'border-box'
    });

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
        url: '<?= base_url('UploadController/view_images/'); ?>' + document_no, 
        type: 'GET',
        dataType: 'html',
        success: function(response) {
            $('#gallery-container').html(response);
        },
        error: function() {
            alert('Failed to fetch images. Please try again.');
        }
    });
}


</script>