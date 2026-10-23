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
                <h2 class="mt-5">LINE OF BUSINESS</h2>
            </div>                         
            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('admin/line_of_business/create') ?>" class="btn btn-primary"> Add New</a>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success" style="text-align: center;" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="line_of_business" width="100%" cellspacing="0">
                            <thead class="table-custom">
                                <tr style="text-align: center;">
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">Title</th>
                                    <th class="text-center align-middle">Image</th>
                                    <th width="30%" class="text-center align-middle">Description</th>
                                    <th class="text-center align-middle">Product 1 Name</th>
                                    <th class="text-center align-middle">Product 1 Image</th>
                                    <th class="text-center align-middle">Product 2 Name</th>
                                    <th class="text-center align-middle">Product 2 Image</th>
                                    <th class="text-center align-middle">Product 3 Name</th>
                                    <th class="text-center align-middle">Product 3 Image</th>
                                    <th class="text-center align-middle">Product 4 Name</th>
                                    <th class="text-center align-middle">Product 4 Image</th>
                                    <th class="text-center align-middle">Product 5 Name</th>
                                    <th class="text-center align-middle">Product 5 Image</th>
                                    <th class="text-center align-middle">Product 6 Name</th>
                                    <th class="text-center align-middle">Product 6 Image</th>
                                    <th class="text-center align-middle">Machine 1 Name</th>
                                    <th class="text-center align-middle">Machine 1 Image</th>
                                    <th class="text-center align-middle">Machine 2 Name</th>
                                    <th class="text-center align-middle">Machine 2 Image</th>
                                    <th class="text-center align-middle">Machine 3 Name</th>
                                    <th class="text-center align-middle">Machine 3 Image</th>
                                    <th class="text-center align-middle">Machine 4 Name</th>
                                    <th class="text-center align-middle">Machine 4 Image</th>
                                    <th class="text-center align-middle">Machine 5 Name</th>
                                    <th class="text-center align-middle">Machine 5 Image</th>
                                    <th class="text-center align-middle">Machine 6 Name</th>
                                    <th class="text-center align-middle">Machine 6 Image</th>
                                    <th class="text-center align-middle">Tech 1 Name</th>
                                    <th class="text-center align-middle">Tech 1 Image</th>
                                    <th class="text-center align-middle">Tech 2 Name</th>
                                    <th class="text-center align-middle">Tech 2 Image</th>
                                    <th class="text-center align-middle">Tech 3 Name</th>
                                    <th class="text-center align-middle">Tech 3 Image</th>
                                    <th class="text-center align-middle">Tech 4 Name</th>
                                    <th class="text-center align-middle">Tech 4 Image</th>
                                    <th class="text-center align-middle">Tech 5 Name</th>
                                    <th class="text-center align-middle">Tech 5 Image</th>
                                    <th class="text-center align-middle">Tech 6 Name</th>
                                    <th class="text-center align-middle">Tech 6 Image</th>
                                    <th class="text-center align-middle">Video</th>
                                    <th class="text-center align-middle">Action</th>
                                </tr>
                            </thead>                                        
                            <tbody>
                                <?php $i=1; 
                                foreach ($line_of_business as $lob) : ?>
                                <tr>
                                    <td style="text-align: center;">
                                        <?php echo $i++ ?>
                                    </td>
                                    <td>
                                        <?php echo $lob->judul ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->img_besar) ?>" width="300" />
                                    </td>
                                    <td>
                                        <?php echo $lob->deskripsi ?>
                                    </td>
                                    <td>
                                        <?php echo $lob->product1_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product1) ?>" width="300" />
                                    </td>
                                    <td>
                                        <?php echo $lob->product2_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product2) ?>" width="300" />
                                    </td>
                                    <td>
                                        <?php echo $lob->product3_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product3) ?>" width="300" />
                                    </td>
                                    <td>
                                        <?php echo $lob->product4_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product4) ?>" width="300" />
                                    </td>
                                    <td>
                                        <?php echo $lob->product5_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product5) ?>" width="300" />
                                    </td>
                                    <td>
                                        <?php echo $lob->product6_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product6) ?>" width="300" />
                                    </td>
                                    <td>
                                        <?php echo $lob->machine1_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine1) ?>" width="300" />
                                    </td>
                                    <td>
                                        <?php echo $lob->machine2_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine2) ?>" width="300" />
                                    </td>
                                    <td>
                                        <?php echo $lob->machine3_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine3) ?>" width="300" />
                                    </td>
                                    <td>
                                        <?php echo $lob->machine4_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine4) ?>" width="300" />
                                    </td>
                                    <td>
                                        <?php echo $lob->machine5_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine5) ?>" width="300" />
                                    </td>
                                    <td>
                                        <?php echo $lob->machine6_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine6) ?>" width="300" />
                                    </td>
                                    <td>
                                        <?php echo $lob->tech1_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech1) ?>" width="300" />
                                    </td> 
                                    <td>
                                        <?php echo $lob->tech2_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech2) ?>" width="300" />
                                    </td>   
                                    <td>
                                        <?php echo $lob->tech3_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech3) ?>" width="300" />
                                    </td>  
                                    <td>
                                        <?php echo $lob->tech4_name ?>
                                    </td> 
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech4) ?>" width="300" />
                                    </td> 
                                    <td>
                                        <?php echo $lob->tech5_name ?>
                                    </td>  
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech5) ?>" width="300" />
                                    </td>   
                                    <td>
                                        <?php echo $lob->tech6_name ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech6) ?>" width="300" />
                                    </td>  
                                    <td>
                                        <video width="auto" controls>
                                          <source src="<?php echo base_url('uploads/line_of_business/'.$lob->video) ?>" width="300">
                                        </video>
                                    </td>                                                     
                                    <td width="120">
                                        <div class="col-sm12 d-flex justify-content-center">
                                            <a href="<?php echo site_url('admin/line_of_business/edit/'.$lob->id) ?>" class="btn btn-warning mr-2">Edit</a>
                                            <a href="<?php echo site_url('admin/line_of_business/delete/'.$lob->id) ?>" class="btn btn-danger delete">Delete</a>
                                        </div>                                        
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <th>No</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Product 1 Name</th>
                                <th>Product 1 Image</th>
                                <th>Product 2 Name</th>
                                <th>Product 2 Image</th>
                                <th>Product 3 Name</th>
                                <th>Product 3 Image</th>
                                <th>Product 4 Name</th>
                                <th>Product 4 Image</th>
                                <th>Product 5 Name</th>
                                <th>Product 5 Image</th>
                                <th>Product 6 Name</th>
                                <th>Product 6 Image</th>
                                <th>Machine 1 Name</th>
                                <th>Machine 1 Image</th>
                                <th>Machine 2 Name</th>
                                <th>Machine 2 Image</th>
                                <th>Machine 3 Name</th>
                                <th>Machine 3 Image</th>
                                <th>Machine 4 Name</th>
                                <th>Machine 4 Image</th>
                                <th>Machine 5 Name</th>
                                <th>Machine 5 Image</th>
                                <th>Machine 6 Name</th>
                                <th>Machine 6 Image</th>
                                <th>Tech 1 Name</th>
                                <th>Tech 1 Image</th>
                                <th>Tech 2 Name</th>
                                <th>Tech 2 Image</th>
                                <th>Tech 3 Name</th>
                                <th>Tech 3 Image</th>
                                <th>Tech 4 Name</th>
                                <th>Tech 4 Image</th>
                                <th>Tech 5 Name</th>
                                <th>Tech 5 Image</th>
                                <th>Tech 6 Name</th>
                                <th>Tech 6 Image</th>
                                <th>Video</th>
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
    })

    $(document).ready(function() {
        $('#line_of_business tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="search" />' );
        });
        var table = $('#line_of_business').DataTable({
            scrollY:        '900px',
            scrollX:        true,
            scrollCollapse: true,
            // paging:         true,
            fixedColumns:   {
                leftColumns: 2,
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
                