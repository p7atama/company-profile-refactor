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
                <h2 class="mt-5">JOB VACANCY</h2>
            </div>                         
            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('admin/job_vacancy/create') ?>" class="btn btn-primary"> Add New</a>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success" style="text-align: center;" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                   <!--  <div class="freeze-table"> -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="example" width="100%" >
                            <thead class="table-custom">
                                <tr style="text-align: center;">
                                    <th width="30" style="vertical-align: middle;">No</th>
                                    <th width="60" style="vertical-align: middle;">Date</th>
                                    <th style="vertical-align: middle;">Division Name</th>
                                    <th>Division Code</th>
                                    <th style="vertical-align: middle;">Position</th>
                                    <th style="vertical-align: middle;">Description</th>
                                    <th>Last Degree</th>
                                    <th style="vertical-align: middle;">Major</th>
                                    <th style="vertical-align: middle;">Location</th>
                                    <th style="vertical-align: middle;">Applicant Limit</th>
                                    <th style="vertical-align: middle;">Applicant Total</th>
                                    <th style="vertical-align: middle;">Remaining</th>
                                    <th style="vertical-align: middle;">Close Date</th>
                                    <th style="vertical-align: middle;">Action</th>
                                </tr>
                            </thead>                                        
                            <tbody>
                                <?php $i=1; 
                                foreach ($career as $career) : ?>
                                <tr>
                                    <td style="text-align: center;">
                                        <?php echo $i++ ?>
                                    </td>
                                    <td>
                                        <?php echo $career->date ?>
                                    </td>
                                    <td>
                                        <?php echo $career->division_name ?>
                                    </td>
                                    <td>
                                        <?php echo $career->division_code ?>
                                    </td>
                                    <td>
                                        <?php echo $career->jabatan ?>
                                    </td>
                                    <td>
                                        <?php echo $career->keterangan_job ?>
                                    </td>                                    
                                    <td>
                                        <?php echo $career->last_degree ?>
                                    </td>
                                    <td>
                                        <?php echo $career->major ?>
                                    </td>
                                    <td>
                                        <?php echo $career->location ?>
                                    </td>
                                    <td>
                                        <?php echo $career->limit ?>
                                    </td>
                                    <td>
                                        <?php echo $career->total_pelamar ?>
                                    </td>
                                    <td>
                                        <?php echo $career->sisa ?>
                                    </td>
                                    <td width="100">
                                        <?php echo $career->close ?>
                                    </td>                                                           
                                    <td width="250">
                                        <div class="col-sm12 d-flex justify-content-center">
                                            <a href="<?php echo site_url('admin/job_vacancy/edit/'.$career->id) ?>" class="btn btn-warning mr-2">Edit</a>
                                            <a href="<?php echo site_url('admin/job_vacancy/delete/'.$career->id) ?>" class="btn btn-danger delete mr-2">Delete</a>
                                            <a href="<?php echo site_url('admin/job_vacancy/print_job_vacancy/'.$career->id) ?>" class="btn btn-success ">Print</a>
                                        </div>                                        
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>Division Name</th>
                                    <th>Division Code</th>
                                    <th>Posisi</th>
                                    <th>Deskripsi</th>
                                    <th>Last Degree</th>
                                    <th>Major</th>
                                    <th>Location</th>
                                    <th>Applicant Limit</th>
                                    <th>Total Pelamar</th>
                                    <th>Sisa</th>
                                    <th>Close Date</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>    
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </main>

<script>
    $(document).ready(function() {
        $('.delete').click(function() {
        return confirm("Are you sure you want to delete?");
        });
    });

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $(document).ready(function() {
        $('#example tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="search" />' );
        });
        var table = $('#example').DataTable({
            scrollY:        '500px',
            scrollX:        true,
            scrollCollapse: true,
            paging:         true,
            shadow:         true, 
            fixedColumns:   {
                leftColumns: 3,
            },
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
    } );

</script>
                