<style>
    th, td { white-space: nowrap; }
    div.dataTables_wrapper {
        width: auto;
        height: auto;
        margin: 0 auto;
    }
    tr {background-color: white} 
}
</style>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="section-title">
                            <h2 class="mt-5">LIST APPLICANTS</h2>
                        </div>                       
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <p><a class="btn btn-success" href="<?php echo base_url('admin/list_of_applicants_not_approved/export_excel') ?>">Export to Excel</a></p>
                            </div>
                            <div class="card-body">
                                 <?php if ($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success" style="text-align: center;" role="alert">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="pilihan-data d-flex justify-content-center">
                                    <a href="<?php echo site_url('admin/list_of_applicants') ?>" class="btn btn-primary active mr-2">None Approve</a>
                                    <a href="<?php echo site_url('admin/list_of_applicants_approved') ?>" class="btn btn-primary active mr-2">Approve</a>
                                    <a href="<?php echo site_url('admin/list_of_applicants_not_approved') ?>" class="btn btn-primary disabled mr-2">Not Approve</a>
                                </div>

                                <div class="date-search">
                                    <div class="form-group row">
                                        <label for="start-date" class="col-sm-1 col-form-label">Start Date :</label>
                                        <div class="col-sm-2">
                                          <input type="text" class="form-control" id="min" name="min" placeholder="Start Date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="start-end-date" class="col-sm-1 col-form-label">End Date :</label>
                                        <div class="col-sm-2">
                                          <input type="text" class="form-control" id="max" name="max" placeholder="End Date">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="freeze-table table-basic">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped" id="list_applicants_not_approved" width="" cellspacing="0">
                                            <thead class="table-custom">
                                                <tr style="text-align: center;">
                                                    <th><input type="checkbox" class="selectAll" name="selectAll" value="all"></input></th>
                                                    <th style="vertical-align: middle;">No</th>
                                                    <th style="vertical-align: middle;">Date</th>
                                                    <th style="vertical-align: middle;">Code</th>
                                                    <th style="vertical-align: middle;">Fullname</th>
                                                    <th style="vertical-align: middle;">Gender</th>
                                                    <th style="vertical-align: middle;">Status</th>
                                                    <th style="vertical-align: middle;">Age</th>
                                                    <th style="vertical-align: middle;">Last Degree</th>
                                                    <th style="vertical-align: middle;">School</th>
                                                    <th style="vertical-align: middle;">Major</th>
                                                    <th style="vertical-align: middle;">GPA</th>
                                                    <th style="vertical-align: middle;">Height</th>
                                                    <th style="vertical-align: middle;">Address</th>
                                                    <th style="vertical-align: middle;">Photo</th>
                                                    <th style="vertical-align: middle;">Ijazah</th>
                                                    <th style="vertical-align: middle;">Transcript</th>
                                                    <th style="vertical-align: middle;">Complete File (SMA/SMK)</th>
                                                    <th style="vertical-align: middle;">Action</th>
                                                </tr>
                                            </thead>                                        
                                            <tbody>
                                                <?php 
                                                $no = 1;
                                                foreach ($recruitment as $rec): ?>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <?php echo $no++ ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rec->date ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rec->posisi ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rec->name ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rec->jenis_kelamin ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rec->status_pernikahan ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rec->umur ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rec->jenjang1 ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rec->nama_sekolah1 ?>
                                                    </td>   
                                                    <td>
                                                        <?php echo $rec->jurusan1 ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rec->nilai_akhir1 ?>
                                                    </td>       
                                                    <td>
                                                        <?php echo $rec->tinggi_badan ?>
                                                    </td>   
                                                    <td>
                                                        <?php echo $rec->alamat_tinggal ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($rec->foto_formal !== null) {

                                                            echo "<p style='color: blue'>ADA</p>";
                                                        } else{
                                                             echo "<p style='color: red'>TIDAK ADA</p>";
                                                        } ?>
                                                        <!--  <img src="<?php echo base_url('uploads/recruitment/'.$rec->foto_formal) ?>" width="64" /> -->
                                                    </td>
                                                    <td>
                                                        <?php if ($rec->ijazah !== null) {
                                                            echo "<p style='color: blue'>ADA</p>";
                                                        } else{
                                                            echo "<p style='color: red'>TIDAK ADA</p>";
                                                        } ?>
                                                        <!-- <img src="<?php echo base_url('uploads/recruitment/'.$rec->ijazah) ?>" width="64"></img>  -->
                                                    </td>
                                                    <td>
                                                        <?php if ($rec->transkrip_nilai !== null) {
                                                            echo "<p style='color: blue'>ADA</p>";
                                                        } else{
                                                            echo "<p style='color: red'>TIDAK ADA</p>";
                                                        } ?>
                                                        <!-- <img src="<?php echo base_url('uploads/recruitment/'.$rec->transkrip_nilai) ?>" width="64"></img>  -->
                                                    </td>
                                                    <!-- <td>
                                                        <img src="<?php echo base_url('uploads/'.$rec->spk1) ?>" width="64"></img> 
                                                    </td>
                                                    <td>
                                                        <img src="<?php echo base_url('uploads/'.$rec->spk2) ?>" width="64"></img> 
                                                    </td>
                                                    <td>
                                                        <img src="<?php echo base_url('uploads/'.$rec->spk3) ?>" width="64"></img> 
                                                    </td>
                                                    <td>
                                                        <img src="<?php echo base_url('uploads/'.$rec->sertif_keahlian1) ?>" width="64"></img> 
                                                    </td>
                                                    <td>
                                                        <img src="<?php echo base_url('uploads/'.$rec->sertif_keahlian2) ?>" width="64"></img> 
                                                    </td>
                                                    <td>
                                                        <img src="<?php echo base_url('uploads/'.$rec->sertif_keahlian3) ?>" width="64"></img> 
                                                    </td> -->
                                                    <td>
                                                       <?php if ($rec->kelengkapan_berkas !== null) {
                                                            echo $rec->kelengkapan_berkas;
                                                        } else{
                                                            echo "<p style='color: red'>KELENGKAPAN BERKAS KOSONG   </p>";
                                                        } ?>
                                                        <!-- <?php echo $rec->kelengkapan_berkas ?> -->
                                                    </td> 

                                                    <td width="50">
                                                        <div class="col-sm12 d-flex justify-content-center">
                                                            <a href="<?php echo site_url('admin/list_of_applicants_not_approved/view/'.$rec->id) ?>" class="btn btn-warning mr-2">View</a>
                                                            <a href="<?php echo site_url('admin/list_of_applicants_approved/delete/'.$rec->id) ?>" class="btn btn-danger delete ">Delete</a>
                                                        </div>                               
                                                    </td>               
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th>No</th>
                                                    <th>Date</th>
                                                    <th>Code</th>
                                                    <th>Fullname</th>
                                                    <th>Sex</th>
                                                    <th>Status</th>
                                                    <th>Age</th>
                                                    <th>Last Degree</th>
                                                    <th>Scholl</th>
                                                    <th>Major</th>
                                                    <th>GPA</th>
                                                    <th>Height</th>
                                                    <th>Address</th>
                                                    <th>Photo</th>
                                                    <th>Ijazah</th>
                                                    <th>Transcript</th>
                                                    <th>Berkas</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>                                
                            </div>
                        </div>                        
                    </div>
                </main>

<script>
    //Tooltip delete
    $(document).ready(function() 
    {
        $('.delete').click(function() 
        {
        return confirm("Are you sure you want to delete?");
        });
    });

    //Datatable + Multiple search
    $(function() 
    {
        $('[data-toggle="tooltip"]').tooltip()
    });

    var minDate, maxDate;
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = minDate.val();
                var max = maxDate.val();
                var date = new Date( data[2] );
         
                if (
                    ( min === null && max === null ) ||
                    ( min === null && date <= max ) ||
                    ( min <= date   && max === null ) ||
                    ( min <= date   && date <= max )
                ) {
                    return true;
                }
                return false;
            }
        );

    $(document).ready(function() {
        $('#list_applicants_not_approved tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="search" />' );
        });

        // Create date inputs
        minDate = new DateTime($('#min'), {
            format: 'Do MMMM YYYY'
        });
        maxDate = new DateTime($('#max'), {
            format: 'Do MMMM YYYY'
        });
        var table = $('#list_applicants_not_approved').DataTable({
            scrollY:        '1200px',
            scrollX:        true,
            scrollCollapse: true,
            paging:         true,
            bAutoWidth:     false,
            fixedColumns:   {
                leftColumns: 4,
            },
            dom: 'Bfrtip',
            buttons:{
                buttons: [
                {
                    extend: 'print',
                    text: 'Print All (Pdf)',
                    className: 'btn-success rounded',
                    messageTop: 'List of Applicants Not Approved',
                    title: 'PT Padma Sode Indonesia',
                    exportOptions: {
                        modifier: {
                            selected: null
                        },
                        columns: ':visible'
                    },
                },
                {
                    extend: 'print',
                    text: 'Print Selected (Pdf)',
                    className: 'btn-success rounded',
                    messageTop: 'List of Applicants Not Approved',
                    title: 'PT Padma Sode Indonesia',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'excel',
                    text: 'Export to Excel',
                    className: 'btn-success rounded',
                    messageTop: 'List of Applicants Not Approved',
                    title: 'PT Padma Sode Indonesia',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'colvis',
                    text: 'Filter Column',
                    className: 'btn-warning rounded',
                },
                ],
            }, 

            columnDefs: [ {
                orderable: false,
                className: 'select-checkbox',
                targets:   0
                } ],

            select: {
                style:    'multi',
                selector: 'td:first-child'
            },

            order: [[ 1, 'asc' ]],

            initComplete: function () 
            {
                // Apply the search
                this.api().columns().every( function () 
                {
                    var that = this;
     
                    $( 'input', this.footer() ).on( 'keyup change clear', function () 
                    {
                        if ( that.search() !== this.value ) {
                            that
                                .search( this.value )
                                .draw();
                        }
                    });
                });
            }
        });

        // Refilter the table
        $('#min, #max').on('change', function () {
            table.draw();
        });

        $(".selectAll").on( "click", function(e) {
            if ($(this).is( ":checked" )) {
                table.rows(  ).select();        
            } else {
                table.rows(  ).deselect(); 
            }
        });
    } );
</script>
                