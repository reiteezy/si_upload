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
                        <ul class="nav nav-tabs md-tabs" role="">
                            <li class="nav-item" style="width: 300px; flex: none;">
                                <a class="nav-link active" data-bs-toggle="tab" href="#noncas_po_tab"
                                    role="tab">NON-CAS</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item" style="width: 300px; flex: none;">
                                <a class="nav-link" data-bs-toggle="tab" href="#cas_po_tab" role="tab">CAS</a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                        <div class="tab-content card-block">
                            <div class="tab-pane active" id="" role="">
                                <div class="card-header">
                                </div>
                                <div class="table-responsive">
                                    <table id="po_tbl" class="table table-striped table-bordered" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Store</th>
                                                <th>Vendor Code</th>
                                                <th>Doc. No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <!-- <th>Remarks</th> -->
                                                <th>Delivery Status</th>
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
                                                <th>Delivery Status</th>
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
<div class="modal fade" id="upload_modal" tabindex="-1" role="dialog">
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
                        <?php
                            $user_type = $_SESSION['user_type'];
                                ?>
                        <div id="session-data"
                            data-user-type="<?php echo htmlspecialchars($user_type, ENT_QUOTES, 'UTF-8'); ?>"></div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                <div class="card-block">
                    <div class="upload-container">
                        <form id="uploadForm" enctype="multipart/form-data">
                            <input type="file" name="images[]" multiple>
                            <div class="text-center">
                                <?php
                                    $buttonText = ($_SESSION['user_type'] === 'srr-uploader') ? 'UPLOAD SRR' : 'UPLOAD SI';
                                    ?>
                                <input type="submit" name="upload"
                                    value="<?php echo htmlspecialchars($buttonText, ENT_QUOTES, 'UTF-8'); ?>">
                            </div>
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
<!---- view uploaded srr img modal-->
<div class="modal fade" id="view_srr_img_modal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
    aria-hidden="true" style="z-index: 1080;">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 40%">
        <div class="modal-content">
            <div class="modal-body">
                <img id="srrImage" src="" alt="SRR Image">
            </div>
        </div>
    </div>
</div>

<!---- end of view uploaded srr img modal--->

<!--- view po list modal -->
<div class="modal fade" id="po_lines_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div id="po_doc_no_txt2"></div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div id="po_date_txt2"></div>
                        </div>
                        <input type="hidden" name="doc_no_val2" id="doc_no_val">
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
                                style="border: 1px solid #4099ff"> <?php
                                    $buttonText = ($_SESSION['user_type'] === 'si-uploader') ? 'UPLOADED SI' : 'UPLOADED SRR';
                                    ?><?php echo htmlspecialchars($buttonText, ENT_QUOTES, 'UTF-8'); ?></button>
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
                            <div class="card-block" style="padding-top: 30px">
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

<!-- loader modal ---->
<div id="loaderModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="loaderModalLabel"
    aria-hidden="false" data-bs-backdrop="static" data-bs-keyboard="false">
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

<script type="text/javascript" src="<?= base_url('assets/assets/js/jquery-3.7.0.js'); ?>"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/assets/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.js"></script>
<script>

$(document).ready(function(e) {
    $("#uploadForm").on('submit', function(e) {
        e.preventDefault();
        var userType = $('#session-data').data('user-type');
        // Show the loader

        if (userType == 'si-uploader') {
            var uploadType = 'si_upload';
        } else {
            var uploadType = 'srr_upload';
        }
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
                    if (uploadType == 'si_upload') {
                        loadSiImages(docNum);
                    } else {
                        loadSrrImages(docNum);
                    }


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
                reload_table();
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

function viewSrrModal(imgElement) {
    var imgSrc = imgElement.getAttribute('data-img-src');
    console.log('Image Source:', imgSrc);
    $('#siImage').attr('src', imgSrc);
    $('#view_srr_modal').modal('show');
}
// const uploadTable = $("#upload_si_modal").DataTable({ "ordering": false});

// load_noncas_po_table();
// load_cas_po_table();






$('a[data-bs-toggle="tab"]').on('click', function(e) {
    reload_table();

    console.log("Currently selected tab ID:", getSelectedTab());
});

function getSelectedTab() {
    let activeTab = $(".nav-link.active");

    let tabId = activeTab.attr("href");

    return tabId.substring(1);
}

console.log("Currently selected tab ID:", getSelectedTab());

function reload_table() {
    dataTable_po.ajax.reload();
}


var dataTable_po;



var dataTable_po = $('#po_tbl').DataTable({
    processing: true,
    serverSide: true,
    searching: true,
    lengthChange: false,
    ordering: false,
    ajax: {
        url: "<?php echo base_url(); ?>PoController/get_po_list",
        type: "POST",
        data: function(d) {
            d.start = d.start || 0;
            d.length = d.length || 10;
            d.tab = getSelectedTab();
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

            render: function(data, type, row) {
                if (row.status_b === 'Pending') {

                    return '<span class="badge badge-warning">' + row.status_b + '</span>'

                } else if (row.status_b === 'Partially Delivered') {

                    return '<span class="badge badge-info">' + row.status_b + '</span>'

                } else if (row.status_b === 'Fully Delivered') {

                    return '<span class="badge badge-success">' + row.status_b + '</span>'

                } else {
                    return ' '
                }

                return row.status;
            }
        },

        {
            data: null,
            orderable: false,
            render: function(data, type, row) {
                if (row.status === 'Active') {
                    if (row.user_type == 'si-uploader') {
                        return (
                            '<button type="button" title="View" style="margin-left: 5px; margin-right: 5px;" class="btn waves-effect waves-light btn-primary btn-icon" onclick="viewPoLines(\'' +
                            row.hd_id + '\',\'' + row.store + '\',\'' + row.po_date + '\',\'' + row
                            .document_no + '\',\'' + row.user_type + '\')">' +
                            '<i class="icofont icofont-eye-alt" style="padding-left: 5px; font-size: 20px;"></i>' +
                            '</button>' +
                            '<button type="button" title="Upload SI" style="margin-left: 5px; margin-right: 5px;" class="btn waves-effect waves-light btn-primary btn-icon" onclick="viewUploadModal(\'' +
                            row.hd_id + '\',\'' + row.store + '\',\'' + row.po_date + '\',\'' + row
                            .document_no + '\',\'' + row.user_type + '\')">' +
                            '<i class="icofont icofont-upload-alt" style="padding-left: 5px; font-size: 20px;"></i>' +
                            '</button>'
                        );
                    } else if (row.user_type == 'srr-uploader') {
                        return (
                            '<button type="button" title="View" style="margin-left: 5px; margin-right: 5px;" class="btn waves-effect waves-light btn-primary btn-icon" onclick="viewPoLines(\'' +
                            row.hd_id + '\',\'' + row.store + '\',\'' + row.po_date + '\',\'' + row
                            .document_no + '\',\'' + row.user_type + '\')">' +
                            '<i class="icofont icofont-eye-alt" style="padding-left: 5px; font-size: 20px;"></i>' +
                            '</button>' +
                            '<button type="button" title="Upload SRR" style="margin-left: 5px; margin-right: 5px;" class="btn waves-effect waves-light btn-primary btn-icon" onclick="viewUploadModal(\'' +
                            row.hd_id + '\',\'' + row.store + '\',\'' + row.po_date + '\',\'' + row
                            .document_no + '\',\'' + row.user_type + '\')">' +
                            '<i class="icofont icofont-upload-alt" style="padding-left: 5px; font-size: 20px;"></i>' +
                            '</button>'
                        );
                    }
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


function viewUploadModal(hd_id, store, po_date, document_no, user_type) {
    selected_hd_id = hd_id;
    console.log(selected_hd_id + store + po_date + document_no + user_type);
    if (user_type == "si-uploader") {
        loadSiImages(document_no);
    } else {
        loadSrrImages(document_no);
    }
    $("#doc_no_val").val(document_no);
    $("#po_doc_no_txt").html("<span>" + "PO Document NO : " + "<h4>" + document_no + "</h4>" + "</span>");
    $("#po_date_txt").html("<span>" + "PO Date : " + "<h4>" + po_date + "</h4>" + "</span>");
    $("#upload_modal").modal('show');



}

function loadSiImages(document_no) {
    $.ajax({
        url: '<?= base_url('UploadController/view_si_images/'); ?>' + document_no,
        type: 'GET',
        dataType: 'html',
        success: function(response) {
            $('#gallery-container').html(response);
            $('#gallery-container2').html(response);
        },
        error: function() {
            alert('Failed to fetch images. Please try again.');
        }
    });
}

function loadSrrImages(document_no) {
    $.ajax({
        url: '<?= base_url('UploadController/view_srr_images/'); ?>' + document_no,
        type: 'GET',
        dataType: 'html',
        success: function(response) {
            $('#gallery-container').html(response);
            $('#gallery-container2').html(response);
        },
        error: function() {
            alert('Failed to fetch images. Please try again.');
        }
    });
}

function viewSiImg(imgElement) {
    var imgSrc = imgElement.getAttribute('data-img-src');
    console.log('Image Source:', imgSrc);
    $('#siImage').attr('src', imgSrc);
    $('#view_si_img_modal').modal('show');
}

function viewSrrImg(imgElement) {
    var imgSrc = imgElement.getAttribute('data-img-src');
    console.log('Image Source:', imgSrc);
    $('#srrImage').attr('src', imgSrc);
    $('#view_srr_img_modal').modal('show');
}

function viewPoLines(hd_id, store, po_date, doc_no, user_type) {
    selected_hd_id = hd_id;
    console.log(selected_hd_id + store + po_date + user_type);
    $("#doc_no_val2").val(doc_no);
    $("#po_doc_no_txt2").html("<span>" + "PO Document NO : " + "<h4>" + doc_no + "</h4>" +
        "</span>");
    $("#po_date_txt2").html("<span>" + "PO Date : " + "<h4>" + po_date + "</h4>" + "</span>");

    $("#po_lines_modal").modal('show')
    if (user_type == "si-uploader") {
        loadSiImages(doc_no);
    } else {
        loadSrrImages(doc_no);
    }

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


function deleteImage(url, doc_no, imgType) {
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
                    if(imgType == 'si'){
                    loadSiImages(doc_no);
                    } else {
                    loadSrrImages(doc_no);
                    }
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

    // Check session every minute
    setInterval(checkSession, 600000);
});
</script>