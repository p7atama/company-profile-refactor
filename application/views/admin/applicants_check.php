<script src="<?php echo base_url('assets/js/scripts_admin.js') ?>"></script>
<style>
    th,
    td {
        white-space: nowrap;
    }

    div.dataTables_wrapper {
        width: auto;
        height: auto;
        margin: auto;
    }

    tr {
        background-color: white
    }
    }
</style>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="mt-5">APPLICANTS CHECK</h2>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" style="text-align: center;" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <!--  <div class="freeze-table"> -->
                        <div class="card">
                            <div class="card-body">
                                <div class="form-inline">
                                <div class="col-sm-9">       
                                  <form action="<?= base_url('pintumasuk/check_applicants/index'); ?>" method="post">
                                  <div class="input-group">
                                        <input type="text" class="form-control" name="keyword" placeholder="Cari disini ..." value="<?php echo $keyword ?>" required>
                                        <span class="input-group-btn ml-1">
                                            <input type="submit" class="btn btn-md btn-success text-white" name="show" value="Show">
                                        </span>
                                  </div>
                                </form>
                                </div>
                              </div>
                              <div class="row ml-3 mt-3">
                                <p><strong>*Catatan :</strong> Ketik <strong>Nama / NIK </strong> untuk menampilkan data pelamar.</p>
                            </div>
                            </div>
                        </div>
                    
                            <hr>
                            <div class="col-md-12 mt-4">
                                        <p><strong>*Keterangan : <i class="bi bi-square-fill" style="color: #9dff9d;text-shadow: 1px 1px 1px #000000;"></i> = Bisa daftar lagi, <i class="bi bi-square-fill" style="color: #FFB6C1;text-shadow: 1px 1px 1px #000000;"></i> = Belum bisa daftar lagi</strong></p>
                                    </div>
                        <table class="table table-striped table-bordered" id="example" width="100%">
                            <thead style="color:#3F6AD8">
                                <tr style="background-color:#F0F8FF;text-align: center;">
                                    <th width="30" style="vertical-align: middle;">No</th>
                                    <th width="60" style="vertical-align: middle;">Application Date</th>
                                    <th style="vertical-align: middle;">Name</th>
                                    <th style="vertical-align: middle;">Date of Birth</th>
                                    <th style="vertical-align: middle;">No KTP</th>
                                    <th style="vertical-align: middle;">Code</th>
                                    <th style="vertical-align: middle;">Total Days of Applying</th>
                                    <th style="vertical-align: middle;">Status</th>
                                    <th style="vertical-align: middle;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($pelamar as $pelamar) : 
                                    if ($pelamar->total_hari_daftar > 180) {
                                        $bg_new = '#9dff9d';
                                    }
                                    else{
                                        $bg_new = '#FFB6C1';
                                    }
                                ?>
                                    <tr>
                                        <td style="text-align: center;" class="align-middle">
                                            <?php echo $i++ ?>
                                        </td>
                                        <td style="text-align: center;" class="align-middle">
                                            <?php echo $pelamar->date ?>
                                        </td>
                                        <td class="align-middle">
                                            <?php echo $pelamar->name ?>
                                        </td>
                                        <td class="align-middle">
                                            <?php 
                                                $tanggal_lahir =  $pelamar->tanggal_lahir;
                                                $tanggal_lahir_new = date("d-M-y", strtotime($tanggal_lahir));
                                            ?>
                                            <?php echo $tanggal_lahir_new ?>
                                        </td>
                                        <td class="align-middle">
                                            <?php echo $pelamar->no_ktp ?>
                                        </td>
                                        <td class="align-middle" class="align-middle" style="background-color:#9dff9d;font-weight: 700  ">
                                            <?php echo $pelamar->posisi ?>
                                        </td>
                                        <td class="align-middle">
                                            <?php echo $pelamar->total_hari_daftar. ' Hari ('.$pelamar->total_bulan.' Bulan)' ?>
                                        </td>
                                        <td class="align-middle" style="background-color:<?php echo $bg_new ?>;font-weight: 700;text-align:center;color:#ffffff";>
                                            <?php
                                            if ($pelamar->total_hari_daftar > 180) { ?>
                                                  <i class="fas fa-check"></i>
                                            <?php }
                                            else{ ?>
                                                <i class="fas fa-window-close"></i>
                                            <?php }  
                                            ?>
                                        </td>
                                        <td class="align-middle text-center">
                                            
                                            <a href="<?php echo site_url('pintumasuk/check_applicants/delete/' . $pelamar->id) ?>" class="btn btn-sm btn-danger delete"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th width="30" style="vertical-align: middle;">No</th>
                                    <th width="60" style="vertical-align: middle;">Application Date</th>
                                    <th style="vertical-align: middle;">Name</th>
                                    <th style="vertical-align: middle;">Date of Birth</th>
                                    <th style="vertical-align: middle;">No KTP</th>
                                    <th style="vertical-align: middle;">Code</th>
                                    <th style="vertical-align: middle;">Total Days of Applying</th>
                                    <th style="vertical-align: middle;">Status</th>
                                    <th style="vertical-align: middle;">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    
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

        $(document).ready(function() {
        $('#example tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="search" />' );
        });
        var table = $('#example').DataTable({
            scrollY:        true,
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