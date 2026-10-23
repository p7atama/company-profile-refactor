<script src="<?php echo base_url('assets/js/scripts_admin.js') ?>"></script>
<style>
    th, td { white-space: nowrap; }
    div.dataTables_wrapper { 
        width: auto;
        height: 1400px;
    }
    tr {background-color: white} 
}
</style>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="section-title">
                            <h2 class="mt-5">LIST APPLICANTS NOT APPROVE</h2>
                        </div>       
                        <div class="pilihan-data d-flex justify-content-center mb-4">
                            <a href="<?php echo site_url('pintumasuk/list_of_applicants') ?>" class="btn btn-primary active mr-2">None Approve</a>
                            <a href="<?php echo site_url('pintumasuk/list_of_applicants_approved') ?>" class="btn btn-primary active mr-2">Approve</a>
                            <a href="<?php echo site_url('pintumasuk/list_of_applicants_not_approved') ?>" class="btn btn-primary disabled mr-2">Not Approve</a>
                        </div>                
                        
                        <div class="card mb-4">
                            <div class="card rounded">
                                <div class="card-header">
                                    FILTER
                                </div>
                                <div class="card-body p-3 ml-4">
                                    <form action="<?= base_url('pintumasuk/list_of_applicants_not_approved/index'); ?>" method="POST">
                                        <div class="row">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <label for="inlineFormInput">Tanggal</label>
                                                    <input type="date" class="form-control mb-2" id="inlineFormInput" name="tanggal_dari" required="" value=<?= $tanggal_dari; ?>>
                                                </div>
                                                <div class="col-auto">
                                                    <label for="inlineFormInputGroup">Sampai Dengan</label>
                                                    <div class="input-group mb-2">
                                                    <input type="date" class="form-control" name="tanggal_sampai" required="" value=<?= $tanggal_sampai; ?>>
                                                    </div>
                                                </div>
                                                <div class="col-auto" style="margin-top:-8px;">
                                                    <label for="inlineFormInputGroup">Pilih Code</label>
                                                    <select class="form-control" name="posisi" id="posisi">
                                                       <?php foreach($posisi as $row) { ?>
                                                        <option value="<?= $row['division_code'] ?>" <?php if($posisiT == $row['division_code']){ echo 'selected'; } else { echo '';} ?> ><?= $row['division_code']; ?></option>

                                                       <?php } ?>
                                                    </select>
                                                </div>
                                            </div>           
                                            <div class="col-auto" style="margin-left:20px;margin-top:30px;">
                                                <button type="submit" name="tampil" value="Show" class="btn btn-primary mb-2">Show</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--<div class="date-search">
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
                                -->
                            </div>
                        </div>
                        <div class="card rounded">
                            <div class="card-body">
                                 <?php if ($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success" style="text-align: center;" role="alert">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="list_applicants_not_approve">
                                                <thead style="color:#3F6AD8">
                                                        <tr style="background-color:#F0F8FF;text-align: center;">
                                                            <th><input type="checkbox" class="selectAll" name="selectAll" value="all"></input></th>
                                                            <th style="vertical-align: middle;">No</th>
                                                            <th style="vertical-align: middle;">Date</th>
                                                            <th style="vertical-align: middle;">Code</th>
                                                            <th style="vertical-align: middle;">Fullname</th>
                                                            <th style="vertical-align: middle;">Gender</th>
                                                            <th style="vertical-align: middle;">Status</th>
                                                            <th style="vertical-align: middle;">Age</th>
                                                            <th>Last Degree</th>
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
                                                        foreach ($recruitment->result() as $rec): ?>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <?php echo $no++ ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $tanggal_daftar = date("Y-m-d", strtotime($rec->date)); 
                                                                ?>
                                                                <?php echo $tanggal_daftar ?>
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
                                                                    echo "<p style='color: red'>KELENGKAPAN BERKAS KOSONG</p>";
                                                                } ?>
                                                                <!-- <?php echo $rec->kelengkapan_berkas ?> -->
                                                            </td> 

                                                            <td class="text-center">
                                                                <a href="<?php echo site_url('pintumasuk/list_of_applicants_not_approved/view/'.$rec->id) ?>" class="btn btn-warning mr-2" style="color:#FFFFFF"><i class="bi bi-search"></i></a>
                                                                <!--<div class="col-sm-12 d-flex justify-content-center">         
                                                                    <a href="<?php echo site_url('pintumasuk/list_of_applicants_not_approved/view/'.$rec->id) ?>" class="btn btn-warning">View</a>
                                                                    <a href="<?php // echo site_url('pintumasuk/list_of_applicants_not_approved/delete/'.$rec->id) ?>" class="btn btn-danger delete">Delete</a>
                                                                </div> 
                                                                -->                             
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
        $('#list_applicants_not_approve tfoot th').each( function (i) {
            var title = $('#list_applicants_not_approve thead th').eq( $(this).index() ).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" data-index="'+i+'" />' );
        } );

        // Create date inputs
        minDate = new DateTime($('#min'), {
            format: 'Do MMMM YYYY'
        });
        maxDate = new DateTime($('#max'), {
            format: 'Do MMMM YYYY'
        });
        var table = $('#list_applicants_not_approve').DataTable({
            scrollY:        "1200px",
            scrollX:        true,
            scrollCollapse: true,
            paging:         true,
            bAutoWidth:     true,
            fixedColumns:   {
                leftColumns: 5,      
                rightColumns:1          
            },
            dom: 'Bfrtip',
            buttons:{
                buttons: [
                {
                    extend: 'print',
                    text: 'Print All',
                    className: 'btn-success rounded',
                    messageTop: 'List of Applicants',
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
                    text: 'Print Selected',
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
                    messageTop: 'List of Applicants',
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

        // Filter event handler
        $( table.table().container() ).on( 'keyup', 'tfoot input', function () {
            table
                .column( $(this).data('index') )
                .search( this.value )
                .draw();
        } );

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