<script src="<?php echo base_url('assets/js/scripts_admin.js') ?>"></script>
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
                    <a href="<?php echo site_url('pintumasuk/line_of_business/create') ?>" class="btn btn-primary"> Add New</a>
                </div>
                
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success" style="text-align: center;" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="line_of_business" width="100%" cellspacing="0">
                            <thead style="color:#3F6AD8">
                                <tr style="background-color:#F0F8FF;text-align: center;">
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
                                    <td style="text-align: center;" class="align-middle">
                                        <?php echo $i++ ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $lob->judul ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($lob->img_besar != null ||'') 
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->img_besar) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php echo $lob->deskripsi ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $lob->product1_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->product1 != null ||'') 
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product1) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $lob->product2_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->product2 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product2) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $lob->product3_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->product3 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product3) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $lob->product4_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->product4 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product4) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $lob->product5_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->product5 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product5) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $lob->product6_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->product6 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->product6) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $lob->machine1_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->machine1 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine1) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $lob->machine2_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->machine2 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine2) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $lob->machine3_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->machine3 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine3) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $lob->machine4_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->machine4 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine4) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td class="text-center align-middle">
                                    <td>
                                        <?php echo $lob->machine5_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->machine5 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine5) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $lob->machine6_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->machine6 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->machine6) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php echo $lob->tech1_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->tech1 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech1) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td> 
                                    <td class="text-center align-middle">
                                        <?php echo $lob->tech2_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->tech2 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech2) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>   
                                    <td class="text-center align-middle">
                                        <?php echo $lob->tech3_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->tech3 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech3) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>  
                                    <td class="text-center align-middle">
                                        <?php echo $lob->tech4_name ?>
                                    </td> 
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->tech4 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech4) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td> 
                                    <td class="text-center align-middle">
                                        <?php echo $lob->tech5_name ?>
                                    </td>  
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->tech5 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech5) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>   
                                    <td class="text-center align-middle">
                                        <?php echo $lob->tech6_name ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        if ($lob->tech6 != null ||'')
                                        { ?>
                                             <img src="<?php echo base_url('uploads/line_of_business/'.$lob->tech6) ?>" width="300" />
                                        <?php 
                                        }
                                        else { ?>
                                              <img src="<?php echo base_url('assets/img/line-of-business/no-image.jpg') ?>" width="300" />
                                        <?php 
                                        }   
                                        ?>
                                    </td>  
                                    <td class="align-middle">
                                        <?php 
                                          $sorry = base_url('assets/img/line-of-business/sorry.jpg');
                                          $video = base_url('uploads/line_of_business/'.$lob->video);
                                          if ($lob->video == null || '') {
                                            echo "
                                            <div class='card card-img rounded' >
                                              <img src='$sorry' width='300' />   
                                            </div> 
                                            ";
                                          } else {
                                            echo "
                                            <div class='embed-responsive embed-responsive-16by9'>
                                              <video width='auto' controls>
                                                <source src='$video' type='video/mp4'>
                                              </video>
                                            </div>      
                                            ";
                                          }
                                           ?>
                                    </td>                                                     
                                    <td class="text-center align-middle">
                                        <a href="<?php echo site_url('pintumasuk/line_of_business/edit/'.$lob->id) ?>" class="btn btn-warning">Edit</a>
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
        $('#line_of_business tfoot th').each( function (i) {
            var title = $('#line_of_business thead th').eq( $(this).index() ).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" data-index="'+i+'" />' );
        } );

        var table = $('#line_of_business').DataTable({
            scrollY:        '660px',
            scrollX:        true,
            scrollCollapse: true,
            paging:         true,
            fixedColumns:   {
                leftColumns: 2,
                rightColumns:1
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

        // Filter event handler
        $( table.table().container() ).on( 'keyup', 'tfoot input', function () {
            table
                .column( $(this).data('index') )
                .search( this.value )
                .draw();
        } );
    } );
</script>
                