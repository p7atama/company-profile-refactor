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
                <h2 class="mt-5">JOB VACANCY</h2>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('pintumasuk/job_vacancy/create') ?>" class="btn btn-primary"> Add New</a>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" style="text-align: center;" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <!--  <div class="freeze-table"> -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="example" width="100%">
                            <thead style="color:#3F6AD8">
                                <tr style="background-color:#F0F8FF;text-align: center;">
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
                                    <th style="vertical-align: middle;">Status</th>
                                    <th style="vertical-align: middle;">Keterangan</th>
                                    <th style="vertical-align: middle;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($career as $career) : ?>
                                    <tr>
                                        <td style="text-align: center;" class="align-middle">
                                            <?php echo $i++ ?>
                                        </td>
                                        <td style="text-align: center;" class="align-middle">
                                            <?php echo $career->date ?>
                                        </td>
                                        <td class="align-middle">
                                            <?php echo $career->division_name ?>
                                        </td>
                                        <td class="align-middle">
                                            <?php echo $career->division_code ?>
                                        </td>
                                        <td class="align-middle">
                                            <?php echo $career->jabatan ?>
                                        </td>
                                        <td>
                                            <?php echo $career->keterangan_job ?>
                                        </td>
                                        <td class="align-middle">
                                            <?php echo $career->last_degree ?>
                                        </td>
                                        <td class="align-middle">
                                            <?php echo $career->major ?>
                                        </td>
                                        <td class="align-middle">
                                            <?php echo $career->location ?>
                                        </td>
                                        <td style="text-align: center;" class="align-middle">
                                            <?php echo $career->limit ?>
                                        </td>
                                        <td style="text-align: center;" class="align-middle">
                                            <?php echo $career->total_pelamar ?>
                                        </td>
                                        <td style="text-align: center;" class="align-middle">
                                            <?php echo $career->sisa ?>
                                        </td>
                                        <td width="100" style="text-align: center;" class="align-middle">
                                            <?php
                                            $clode_date = $career->close;
                                            ?>
                                            <?php echo date("d F Y", strtotime($clode_date)) ?>
                                        </td>
                                        <td style="text-align: center;" class="align-middle">
                                            <?php
                                            if ($career->sisa <= 0 || $career->close < date('Y-m-d')) {
                                                echo "<h5 style='color:#d9534f;font-size:16px'><strong>Closed</strong></h5>";
                                            } else if ($career->sisa <= 0 || $career->close > date('Y-m-d')) {
                                                echo "<h5 style='color:#5cb85c;font-size:16px'><strong>Open</strong></h5>";
                                            } else if ($career->sisa != 0 || $career->close <= date('Y-m-d')) {
                                                echo "<h5 style='color:#5cb85c;font-size:16px'><strong>Open</strong></h5>";
                                            }
                                            ?>
                                        </td>
                                        <td style="text-align: center;" class="align-middle">
                                            <?php
                                            if ($career->sisa <= 0) {
                                                echo "<h5 style='color:#d9534f;font-size:16px'><strong>Mencapai Limit</strong></h5>";
                                            } else if ($career->close >= date('Y-m-d')) {
                                                echo "<h5 style='color:#5cb85c;font-size:16px'><strong>Masih Dibuka</strong></h5>";
                                            } else {
                                                echo "<h5 style='color:#d9534f;font-size:16px'><strong>Melewati Tanggal</strong></h5>";
                                            }
                                            ?>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="<?php echo site_url('pintumasuk/job_vacancy/edit/' . $career->id) ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?php echo site_url('pintumasuk/job_vacancy/delete/' . $career->id) ?>" class="btn btn-danger delete">Delete</a>
                                            <a href="<?php echo site_url('pintumasuk/job_vacancy/print_job_vacancy/' . $career->id) ?>" class="btn btn-success ">Print</a>
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
                                    <th>Status</th>
                                    <th>Keterangan</th>
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
            $('#example tfoot th').each(function(i) {
                var title = $('#example thead th').eq($(this).index()).text();
                $(this).html('<input type="text" placeholder="Search ' + title + '" data-index="' + i + '" />');
            });

            var table = $('#example').DataTable({
                scrollY: '500px',
                scrollX: true,
                scrollCollapse: true,
                paging: true,
                shadow: true,
                bAutoWidth: true,
                fixedColumns: {
                    leftColumns: 3,
                    rightColumns: 3,
                },
                initComplete: function() {
                    // Apply the search
                    this.api().columns().every(function() {
                        var that = this;

                        $('input', this.footer()).on('keyup change clear', function() {
                            if (that.search() !== this.value) {
                                that
                                    .search(this.value)
                                    .draw();
                            }
                        });
                    });
                }
            });

            // Filter event handler
            $(table.table().container()).on('keyup', 'tfoot input', function() {
                table
                    .column($(this).data('index'))
                    .search(this.value)
                    .draw();
            });
        });
    </script>