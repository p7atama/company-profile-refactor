<script src="<?php echo base_url('assets/js/scripts_admin.js') ?>"></script>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="mt-5">CONTACT</h2>
            </div>   
                               
            <div class="card mb-4">
                <div class="card-header">
                    <a class="btn btn-success" href="<?php echo base_url('pintumasuk/contact/export_excel') ?>">Export to Excel</a>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success" style="text-align: center;" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="contact" width="100%" cellspacing="0">
                            <thead style="color:#3F6AD8">
                                <tr style="background-color:#F0F8FF;text-align: center;">
                                    <th width="20">No</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>                                        
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach ($contact as $contact): ?>
                                <tr>
                                    <td style="text-align: center;" class="align-middle">
                                        <?php echo $no++ ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php 
                                            $tanggal_convert = date("Y-m-d", strtotime($contact->date));
                                        ?>
                                        <?php echo date("d F Y", strtotime($tanggal_convert)) ?>        
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        $name = $contact->name;  
                                        echo htmlspecialchars($name);
                                        ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        $email = $contact->email;  
                                        echo htmlspecialchars($email);
                                        ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php echo $contact->phone ?>
                                    </td>
                                    <td class="align-middle">
                                        <?php
                                        $message = $contact->message;  
                                        echo htmlspecialchars($message);
                                        ?>
                                    </td>                                       
                                    <td class="align-middle">
                                        <div class="col-sm12 d-flex justify-content-center">
                                          <a href="<?php echo site_url('pintumasuk/contact/delete/'.$contact->id) ?>" class="btn btn-danger delete">Delete</a>
                                        </div>                                        
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <th>No</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
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
        $('#contact tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="search" />' );
        });
        var table = $('#contact').DataTable({
            scrollY:        '600px',
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
                