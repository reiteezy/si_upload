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
                        <div class="card-header">
                            <h5>View List</h5>

                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="po_table" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>Store</th>
                                            <th>Vendor Code</th>
                                            <th>Doc. No.</th>
                                            <th>Age</th>
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
                                            <th>Age</th>
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

<script>
     load_po_table();
    // var dataTable_po;
    function load_po_table()
    {
    //   if (dataTable_po) {
    //     dataTable_po.destroy();
    //   }

      dataTable = $('#po_table').DataTable({
            "processing": true,
            "serverSide": true,
             "searching": true,
              "ordering": true,
                 "ajax" : {
                           "url" : "<?php echo base_url(); ?>PoController/get_po_list",
                           "type": "POST",
                           "data": function (d)
                                    {
                                     d.start        = d.start  || 0; // Start index of the records
                                     d.length       = d.length || 10; // Number of records per page
                                    }
                          },

              columns: [
                         { data: 'store' },
                         { data: 'vendor_code' },
                         { data: 'doc_no' },
                         { data: 'po_date' },

                         {
                            
                                render: function(data, type, row) {
                                    // Conditionally assign a CSS class based on the 'status' value
                                    if (row.status === 'ACTIVE') {
                                    
                                        return '<span class="badge badge-success">' + row.status + '</span>'
                                        
                                    } else if (row.status === 'CANCELED') {
                                     
                                        return '<span class="badge badge-danger">CANCELLED</span>'

                                    }

                                    return row.status; // If none of the conditions match, return the original data
                                }
                         },

                         { data: 'request_by' },
                         { data: 'remark_by'},
                         {
                    
                            render: function (data, type, row) {
                                    
                                if (row.status=='ACTIVE') {
                                    return '<input type="checkbox" class="row-checkbox" value="'+row.hd_id+'">';
                                } else {
                                    return '';
                                }
                                  
                                
                           }
                         }
                      ],
             
              "paging"    : true,
              "pagingType": "full_numbers",
              "lengthMenu": [ [10, 25, 50, 1000], [10, 25, 50, "Max"] ],
              "pageLength": 10, 
          });


    }

</script>