<script src="<?php echo base_url('assets/js/scripts_admin.js') ?>"></script>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="mt-5">VISSION & MISSION</h2>
            </div>                         
            <div class="card mb-4">
                <!-- <div class="card-header">
                    <a href="<?php echo site_url('pintumasuk/vision_mission/create') ?>" class="btn btn-primary"> Add New</a>
                </div> -->
                
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success" style="text-align: center;" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="vision_mission" width="100%" cellspacing="0">
                            <thead style="color:#3F6AD8">
                                <tr style="background-color:#F0F8FF;text-align: center;">
                                    <th width="30px">No</th>
                                    <th>Vision</th>
                                    <th>Mission</th>
                                    <th>Action</th>
                                </tr>
                            </thead>                                        
                            <tbody>
                                <?php $i=1; 
                                foreach ($vision_mission as $vm) : ?>
                                <tr>
                                    <td style="text-align: center;" class="text-center align-middle">
                                        <?php echo $i++ ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $vm->vision ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $vm->mission ?>
                                    </td>                                                   
                                    <td width="150" class="text-center align-middle">
                                        <div class="col-sm12 d-flex justify-content-around">
                                            <a href="<?php echo site_url('pintumasuk/vision_mission/edit/'.$vm->id) ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?php echo site_url('pintumasuk/vision_mission/delete/'.$vm->id) ?>" class="btn btn-danger delete">Delete</a>
                                        </div>                                        
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <th>No</th>
                                <th>Vision</th>
                                <th>Mission</th>
                                <th>Action</th>
                            </tfoot>
                        </table>
                    </div>
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
        $('#vision_mission tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="search" />' );
        });
        var table = $('#vision_mission').DataTable({
            scrollY:        '300px',
            scrollX:        true,
            scrollCollapse: true,
            paging:         true,
            // fixedColumns:   {
            //     leftColumns: 3,
            // },
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
                