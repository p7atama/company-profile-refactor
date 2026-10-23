<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="mt-5">HOME</h2>
            </div>                         
            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('admin/home/create') ?>" class="btn btn-primary"> Add New</a>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success" style="text-align: center;" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="home" width="100%" cellspacing="0">
                            <thead class="table-custom">
                                <tr style="text-align: center;">
                                    <th>No</th>
                                    <th>Text</th>
                                    <th>About</th>
                                    <th>Slider 1</th>
                                    <th>Slider 2</th>
                                    <th>Slider 3</th>
                                    <th>Client 1</th>
                                    <th>Client 2</th>
                                    <th>Client 3</th>
                                    <th>Client 4</th>
                                    <th>Client 5</th>
                                    <th>Client 6</th>
                                    <th>Action</th>
                                </tr>
                            </thead>                                        
                            <tbody>
                                <?php $i=1; 
                                foreach ($home as $home) : ?>
                                <tr>
                                    <td style="text-align: center;">
                                        <?php echo $i++ ?>
                                    </td>
                                    <td>
                                        <?php echo $home->text ?>
                                    </td>
                                    <td>
                                        <?php echo $home->about ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/home/'.$home->slider1) ?>" width="500" />
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/home/'.$home->slider2) ?>" width="500" />
                                    </td>  
                                    <td>
                                        <img src="<?php echo base_url('uploads/home/'.$home->slider3) ?>" width="500" />
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/home/'.$home->client1) ?>" width="250" />
                                    </td>   
                                    <td>
                                        <img src="<?php echo base_url('uploads/home/'.$home->client2) ?>" width="250" />
                                    </td> 
                                    <td>
                                        <img src="<?php echo base_url('uploads/home/'.$home->client3) ?>" width="250" />
                                    </td>  
                                    <td>
                                        <img src="<?php echo base_url('uploads/home/'.$home->client4) ?>" width="250" />
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/home/'.$home->client5) ?>" width="250" />
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/home/'.$home->client6) ?>" width="250" />
                                    </td>                                                        
                                    <td width="120">
                                        <div class="col-sm12 d-flex justify-content-around">
                                            <a href="<?php echo site_url('admin/home/edit/'.$home->id) ?>" class="btn btn-warning mr-2">Edit</a>
                                            <a href="<?php echo site_url('admin/home/delete/'.$home->id) ?>" class="btn btn-danger delete">Delete</a>
                                        </div>                                        
                                    </td> 
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <th>No</th>
                                <th>Text</th>
                                <th>About</th>
                                <th>Slider 1</th>
                                <th>Slider 2</th>
                                <th>Slider 3</th>
                                <th>Client 1</th>
                                <th>Client 2</th>
                                <th>Client 3</th>
                                <th>Client 4</th>
                                <th>Client 5</th>
                                <th>Client 6</th>
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
        $('#home tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="search" />' );
        });
        var table = $('#home').DataTable({
            scrollY:        '300px',
            scrollX:        true,
            scrollCollapse: true,
            paging:         true,
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
                