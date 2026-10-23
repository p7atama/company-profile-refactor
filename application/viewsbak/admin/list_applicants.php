<script src="<?php echo base_url('assets/js/scripts_admin.js') ?>"></script>
<style>
    th, td { white-space: nowrap; }
    div.dataTables_wrapper { 
        width: auto;
        height: 1400px;
    }
    #list_applicants tbody tr { background-color: #fff; }
    #list_applicants tbody tr.selected > td { background-color: #cfe8ff !important; }
    #list_applicants input.row-check { cursor: pointer; }
    #list_applicants input.check-all { cursor: pointer; }
</style>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="section-title">
                            <h2 class="mt-5">LIST APPLICANTS</h2>
                        </div>       
                        <div class="pilihan-data d-flex justify-content-center mb-4">
                            <a href="<?php echo site_url('pintumasuk/list_of_applicants') ?>" class="btn btn-primary disabled mr-2">None Approve</a>
                            <a href="<?php echo site_url('pintumasuk/list_of_applicants_approved') ?>" class="btn btn-primary active mr-2">Approve</a>
                            <a href="<?php echo site_url('pintumasuk/list_of_applicants_not_approved') ?>" class="btn btn-primary active mr-2">Not Approve</a>
                        </div>                
                        
                        <div class="card mb-4">
                            <div class="card rounded">
                                <div class="card-header">
                                    FILTER
                                </div>
                                <div class="card-body p-3 ml-4">
                                    <form action="<?= base_url('pintumasuk/list_of_applicants/index'); ?>" method="POST">
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
                                <?php if ($this->session->flashdata('error')): ?>
                                    <div class="alert alert-danger" style="text-align: center;" role="alert">
                                        <?php echo $this->session->flashdata('error'); ?>
                                    </div>
                                <?php endif; ?>
                                <button type="button" class="btn btn-md btn-danger mb-2" id="btn-delete">Delete Selected Rows</button>
                                <input type="hidden" id="result" size="60">
                                <div class="table-responsive">
                                    <!-- Hidden form used by the "Export to Excel
                                         (with Photo)" button to POST the checked
                                         applicant ids (id[]). Mirrors #form-delete.
                                         Empty submission => export all shown rows. -->
                                    <form method="post" action="<?php echo base_url('pintumasuk/list_of_applicants/export_excel_with_image') ?>" id="form-export-photo" style="display:none;"></form>
                                    <form method="post" action="<?php echo base_url('pintumasuk/list_of_applicants/deleteCoba') ?>" id="form-delete">
                                            <table class="table table-striped table-bordered table-hover" id="list_applicants">
                                                <thead style="color:#3F6AD8">
                                                        <tr style="background-color:#F0F8FF;text-align: center;">
                                                            <th style="vertical-align: middle;"><input type="checkbox" class="check-all" title="Select all"></th>
                                                            <th style="vertical-align: middle;">No</th>
                                                            <th style="vertical-align: middle;">Date</th>
                                                            <th style="vertical-align: middle;">Code</th>
                                                            <th style="vertical-align: middle;">Fullname</th>
                                                            <th style="vertical-align: middle;">Gender</th>
                                                            <th style="vertical-align: middle;">Blood Type</th>
                                                            <th style="vertical-align: middle;">Age</th>
                                                            <th style="vertical-align: middle;">Place of Birth</th>
                                                            <th style="vertical-align: middle;">Date of Birth</th>
                                                            <th style="vertical-align: middle;">Identity Number</th>
                                                            <th style="vertical-align: middle;">No. KK</th>
                                                            <th style="vertical-align: middle;">NPWP Number</th>
                                                            <th style="vertical-align: middle;">Address</th>
                                                            <th style="vertical-align: middle;">RT / RW</th>
                                                            <th style="vertical-align: middle;">Sub-District</th>
                                                            <th style="vertical-align: middle;">District</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Province</th>
                                                            <th style="vertical-align: middle;">Current Address</th>
                                                            <th style="vertical-align: middle;">RT / RW</th>
                                                            <th style="vertical-align: middle;">Sub-District</th>
                                                            <th style="vertical-align: middle;">District</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Province</th>
                                                            <th style="vertical-align: middle;">Postal Code</th>
                                                            <th style="vertical-align: middle;">Mobile Number</th>
                                                            <th style="vertical-align: middle;">E-mail</th>
                                                            <th style="vertical-align: middle;">Religion</th>
                                                            <th style="vertical-align: middle;">Height</th>
                                                            <th style="vertical-align: middle;">Weight</th>
                                                            <th style="vertical-align: middle;">Residence Status</th>
                                                            <th style="vertical-align: middle;">Ibu Kandung</th>
                                                            <th style="vertical-align: middle;">Marital Status</th>
                                                            <th style="vertical-align: middle;">Class</th>
                                                            <th style="vertical-align: middle;">Salary</th>
                                                            <th style="vertical-align: middle;">Last Degree</th>
                                                            <th style="vertical-align: middle;">School</th>
                                                            <th style="vertical-align: middle;">Major</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">GPA</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Other Degree</th>
                                                            <th style="vertical-align: middle;">School</th>
                                                            <th style="vertical-align: middle;">Major</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">GPA</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Other Degree</th>
                                                            <th style="vertical-align: middle;">School</th>
                                                            <th style="vertical-align: middle;">Major</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">GPA</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Other Degree</th>
                                                            <th style="vertical-align: middle;">School</th>
                                                            <th style="vertical-align: middle;">Major</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">GPA</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Training Name</th>
                                                            <th style="vertical-align: middle;">Institution</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Skill Obtained</th>
                                                            <th style="vertical-align: middle;">Training Name</th>
                                                            <th style="vertical-align: middle;">Institution</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Skill Obtained</th>
                                                            <th style="vertical-align: middle;">Training Name</th>
                                                            <th style="vertical-align: middle;">Institution</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Skill Obtained</th>
                                                            <th style="vertical-align: middle;">Training Name</th>
                                                            <th style="vertical-align: middle;">Institution</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Skill Obtained</th>
                                                            <th style="vertical-align: middle;">Language</th>
                                                            <th style="vertical-align: middle;">Verbal</th>
                                                            <th style="vertical-align: middle;">Written</th>
                                                            <th style="vertical-align: middle;">Language</th>
                                                            <th style="vertical-align: middle;">Verbal</th>
                                                            <th style="vertical-align: middle;">Written</th>
                                                            <th style="vertical-align: middle;">Language</th>
                                                            <th style="vertical-align: middle;">Verbal</th>
                                                            <th style="vertical-align: middle;">Written</th>
                                                            <th style="vertical-align: middle;">Skill</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Skill Description</th>
                                                            <th style="vertical-align: middle;">Skill</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Skill Description</th>
                                                            <th style="vertical-align: middle;">Skill</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Skill Description</th>
                                                            <th style="vertical-align: middle;">Skill</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Skill Description</th>
                                                            <th style="vertical-align: middle;">Skill</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Skill Description</th>
                                                            <th style="vertical-align: middle;">Type of Achievment</th>
                                                            <th style="vertical-align: middle;">Rating</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Description</th>
                                                            <th style="vertical-align: middle;">Type of Achievment</th>
                                                            <th style="vertical-align: middle;">Rating</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Description</th>
                                                            <th style="vertical-align: middle;">Type of Achievment</th>
                                                            <th style="vertical-align: middle;">Rating</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Description</th>
                                                            <th style="vertical-align: middle;">Type of Achievment</th>
                                                            <th style="vertical-align: middle;">Rating</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Description</th>
                                                            <th style="vertical-align: middle;">Type of Achievment</th>
                                                            <th style="vertical-align: middle;">Rating</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Description</th>
                                                            <th style="vertical-align: middle;">Organization Name</th>
                                                            <th style="vertical-align: middle;">Organization Type</th>
                                                            <th style="vertical-align: middle;">Organization Position</th>
                                                            <th style="vertical-align: middle;">Organization Time</th>
                                                            <th style="vertical-align: middle;">Organization Name</th>
                                                            <th style="vertical-align: middle;">Organization Type</th>
                                                            <th style="vertical-align: middle;">Organization Position</th>
                                                            <th style="vertical-align: middle;">Organization Time</th>
                                                            <th style="vertical-align: middle;">Organization Name</th>
                                                            <th style="vertical-align: middle;">Organization Type</th>
                                                            <th style="vertical-align: middle;">Organization Position</th>
                                                            <th style="vertical-align: middle;">Organization Time</th>
                                                            <th style="vertical-align: middle;">Company Name</th>
                                                            <th style="vertical-align: middle;">Business Fields</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Position</th>
                                                            <th style="vertical-align: middle;">Starting Date</th>
                                                            <th style="vertical-align: middle;">End Date</th>
                                                            <th style="vertical-align: middle;">Salary</th>
                                                            <th style="vertical-align: middle;">Reason to Stop</th>
                                                            <th style="vertical-align: middle;">Jobdesk</th>
                                                            <th style="vertical-align: middle;">Reason Work</th>
                                                            <th style="vertical-align: middle;">Facilities</th>
                                                            <th style="vertical-align: middle;">Start Working</th>
                                                            <th style="vertical-align: middle;">Acquaintance</th>
                                                            <th style="vertical-align: middle;">Name</th>
                                                            <th style="vertical-align: middle;">Position</th>
                                                            <th style="vertical-align: middle;">Division</th>
                                                            <th style="vertical-align: middle;">Relation</th>
                                                            <th style="vertical-align: middle;">Name</th>
                                                            <th style="vertical-align: middle;">Position</th>
                                                            <th style="vertical-align: middle;">Division</th>
                                                            <th style="vertical-align: middle;">Relation</th>
                                                            <th style="vertical-align: middle;">Strength</th>
                                                            <th style="vertical-align: middle;">Weakness</th>
                                                            <th style="vertical-align: middle;">Illness</th>
                                                            <th style="vertical-align: middle;">Illness Name</th>
                                                            <th style="vertical-align: middle;">Duration</th>
                                                            <th style="vertical-align: middle;">Consequences</th>
                                                            <th style="vertical-align: middle;">Illness Name</th>
                                                            <th style="vertical-align: middle;">Duration</th>
                                                            <th style="vertical-align: middle;">Consequences</th>
                                                            <th style="vertical-align: middle;">Blind</th>
                                                            <th style="vertical-align: middle;">Reference Name</th>
                                                            <th style="vertical-align: middle;">Reference Address</th>
                                                            <th style="vertical-align: middle;">Reference Phone</th>
                                                            <th style="vertical-align: middle;">Reference Job</th>
                                                            <th style="vertical-align: middle;">Reference Relation</th>
                                                            <th style="vertical-align: middle;">Reference Name</th>
                                                            <th style="vertical-align: middle;">Reference Address</th>
                                                            <th style="vertical-align: middle;">Reference Phone</th>
                                                            <th style="vertical-align: middle;">Reference Job</th>
                                                            <th style="vertical-align: middle;">Reference Relation</th>
                                                            <th style="vertical-align: middle;">Emergency Name</th>
                                                            <th style="vertical-align: middle;">Emergency Address</th>
                                                            <th style="vertical-align: middle;">Emergency Phone</th>
                                                            <th style="vertical-align: middle;">Emergency Job</th>
                                                            <th style="vertical-align: middle;">Emergency Relation</th>
                                                            <th style="vertical-align: middle;">Emergency Name</th>
                                                            <th style="vertical-align: middle;">Emergency Address</th>
                                                            <th style="vertical-align: middle;">Emergency Phone</th>
                                                            <th style="vertical-align: middle;">Emergency Job</th>
                                                            <th style="vertical-align: middle;">Emergency Relation</th>
                                                            <th style="vertical-align: middle;">Check 1</th>
                                                            <th style="vertical-align: middle;">Check 2</th>
                                                            <th style="vertical-align: middle;">Photo</th>
                                                            <th style="vertical-align: middle;">Ijazah</th>
                                                            <th style="vertical-align: middle;">Transcript</th>
                                                            <th style="vertical-align: middle;">Vaksin Ceritificate</th>
                                                            <th style="vertical-align: middle;">Statement Letter</th>
                                                            <th style="vertical-align: middle;">KTP</th>
                                                            <th style="vertical-align: middle;">NPWP</th>
                                                            <th style="vertical-align: middle;">Family Card</th>
                                                            <th style="vertical-align: middle;">SPK 1</th>
                                                            <th style="vertical-align: middle;">SPK 2</th>
                                                            <th style="vertical-align: middle;">SPK 3</th>
                                                            <th style="vertical-align: middle;">Certificate 1</th>
                                                            <th style="vertical-align: middle;">Certificate 2</th>
                                                            <th style="vertical-align: middle;">Certificate 3</th>
                                                            <th style="vertical-align: middle;">Complete File</th>
                                                            <th style="vertical-align: middle;">Action</th>
                                                        </tr>
                                                     </thead>
                                                     <tbody>
                                                        <?php 
                                                        $no = 1;
                                                        foreach ($recruitment->result() as $rec): ?>
                                                        <tr data-id="<?php echo $rec->id ?>">
                                                            <td style="text-align:center;"><input type="checkbox" class="row-check" name="id[]" value="<?php echo $rec->id ?>"></td>
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
                                                                <?php echo $rec->gol_darah ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->umur ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->tempat_lahir ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->tanggal_lahir ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->no_ktp ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->no_kk ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->no_npwp ?>
                                                            </td>       
                                                            <td>
                                                                <?php echo $rec->alamat_ktp ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->rt_rw_ktp ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->kelurahan_ktp ?>
                                                            </td>       
                                                            <td>
                                                                <?php echo $rec->kecamatan_ktp ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->kota_ktp ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->provinsi_ktp ?>
                                                            </td>       
                                                            <td>
                                                                <?php echo $rec->alamat_tinggal ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->rt_rw_tinggal ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->kelurahan_tinggal ?>
                                                            </td>       
                                                            <td>
                                                                <?php echo $rec->kecamatan_tinggal ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->kota_tinggal ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->provinsi_tinggal ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->kode_pos ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->no_hp ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->email ?>
                                                            </td>       
                                                            <td>
                                                                <?php echo $rec->agama ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->tinggi_badan ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->berat_badan ?>
                                                            </td>     
                                                            <td>
                                                                <?php echo $rec->status_tempat_tinggal ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->ibu_kandung ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->status_pernikahan ?>
                                                            </td>       
                                                            <td>
                                                                <?php echo $rec->golongan ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->gaji ?>
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
                                                                <?php echo $rec->tahun1 ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->nilai_akhir1 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->kota1 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->jenjang2 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->nama_sekolah2 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->jurusan2 ?>
                                                            </td>       
                                                            <td>
                                                                <?php echo $rec->tahun2 ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->nilai_akhir2 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->kota2 ?>
                                                            </td>    
                                                             <td>
                                                                <?php echo $rec->jenjang3 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->nama_sekolah3 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->jurusan3 ?>
                                                            </td>       
                                                            <td>
                                                                <?php echo $rec->tahun3 ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->nilai_akhir3 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->kota3 ?>
                                                            </td>      
                                                             <td>
                                                                <?php echo $rec->jenjang4 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->nama_sekolah4 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->jurusan4 ?>
                                                            </td>       
                                                            <td>
                                                                <?php echo $rec->tahun4 ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->nilai_akhir4 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->kota4 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->nama_training1 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->lembaga1 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->kota_training1 ?>
                                                            </td>       
                                                            <td>
                                                                <?php echo $rec->tahun_training1 ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->skill_training1 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->nama_training2 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->lembaga2 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->kota_training2 ?>
                                                            </td>       
                                                            <td>
                                                                <?php echo $rec->tahun_training2 ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->skill_training2 ?>
                                                            </td>    
                                                            <td>
                                                                <?php echo $rec->nama_training3 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->lembaga3 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->kota_training3 ?>
                                                            </td>       
                                                            <td>
                                                                <?php echo $rec->tahun_training3 ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->skill_training3 ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->nama_training4 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->lembaga4 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->kota_training4 ?>
                                                            </td>       
                                                            <td>
                                                                <?php echo $rec->tahun_training4 ?>
                                                            </td>   
                                                            <td>
                                                                <?php echo $rec->skill_training4 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->bahasa1 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->lisan1 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->tulisan1 ?>
                                                            </td>       
                                                            <td>
                                                                <?php echo $rec->bahasa2 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->lisan2 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->tulisan2 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->bahasa3 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->lisan3 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->tulisan3 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->keterampilan1 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->keterangan1 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->deskripsi1 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->keterampilan2 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->keterangan2 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->deskripsi2 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->keterampilan3 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->keterangan3 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->deskripsi3 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->keterampilan4 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->keterangan4 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->deskripsi4 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->keterampilan5 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->keterangan5 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->deskripsi5 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->jenis_prestasi1 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->peringkat1 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->tingkat_prestasi1 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->tahun_prestasi1 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->keterangan_prestasi1 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->jenis_prestasi2 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->peringkat2 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->tingkat_prestasi2 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->tahun_prestasi2 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->keterangan_prestasi2 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->jenis_prestasi3 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->peringkat3 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->tingkat_prestasi3 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->tahun_prestasi3 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->keterangan_prestasi3 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->jenis_prestasi4 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->peringkat4 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->tingkat_prestasi4 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->tahun_prestasi4 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->keterangan_prestasi4 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->jenis_prestasi5 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->peringkat5 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->tingkat_prestasi5 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->tahun_prestasi5 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->keterangan_prestasi5 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->nama_organisasi1 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->jenis_organisasi1 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->jabatan_organisasi1 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->periode_organisasi1 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->nama_organisasi2 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->jenis_organisasi2 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->jabatan_organisasi2 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->periode_organisasi2 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->nama_organisasi3 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->jenis_organisasi3 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->jabatan_organisasi3 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->periode_organisasi3 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->nama_perusahaan ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->bidang_usaha ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->kota_perusahaan ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->jabatan_perusahaan ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->awal_kerja ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->akhir_kerja ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->gaji_terakhir ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->alasan_berhenti ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->tugas_tgg_jawab ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->alasan_bekerja ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->fasilitas_bekerja ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->kapan_mulai_bekerja ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->kenalan_perusahaan ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->nama_kenalan1 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->jabatan_kenalan1 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->bagian_kenalan1 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->hubungan_kenalan1 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->nama_kenalan2 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->jabatan_kenalan2 ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->bagian_kenalan2 ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->hubungan_kenalan2 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->kelebihan ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->kekurangan ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $rec->pernah_sakit ?>
                                                            </td>  
                                                            <td>
                                                                <?php echo $rec->nama_penyakit1 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->lama_sakit1 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->akibat_ditimbulkan1 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->nama_penyakit2 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->lama_sakit2 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->akibat_ditimbulkan2 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->buta_warna ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->nama_referensi1 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->alamat_referensi1 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->no_telp_referensi1 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->pekerjaan_referensi1 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->hubungan_referensi1 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->nama_referensi2 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->alamat_referensi2 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->no_telp_referensi2 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->pekerjaan_referensi2 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->hubungan_referensi2 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->nama_dihubungi1 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->alamat_dihubungi1 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->no_telp_dihubungi1 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->pekerjaan_dihubungi1 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->hubungan_dihubungi1 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->nama_dihubungi2 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->alamat_dihubungi2 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->no_telp_dihubungi2 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->pekerjaan_dihubungi2 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->hubungan_dihubungi2 ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rec->check1 ?>
                                                            </td> 
                                                            <td>
                                                                <?php echo $rec->check2 ?>
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
                                                            </td>
                                                            <td>
                                                                <?php if ($rec->transkrip_nilai !== null) {
                                                                    echo "<p style='color: blue'>ADA</p>";
                                                                } else{
                                                                    echo "<p style='color: red'>TIDAK ADA</p>";
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($rec->sertifikat_vaksin !== null) {
                                                                    echo "<p style='color: blue'>ADA</p>";
                                                                } else{
                                                                    echo "<p style='color: red'>TIDAK ADA</p>";
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($rec->surat_pernyataan !== null) {
                                                                    echo "<p style='color: blue'>ADA</p>";
                                                                } else{
                                                                    echo "<p style='color: red'>TIDAK ADA</p>";
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($rec->ktp !== null) {
                                                                    echo "<p style='color: blue'>ADA</p>";
                                                                } else{
                                                                    echo "<p style='color: red'>TIDAK ADA</p>";
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($rec->npwp !== null) {
                                                                    echo "<p style='color: blue'>ADA</p>";
                                                                } else{
                                                                    echo "<p style='color: red'>TIDAK ADA</p>";
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($rec->kartu_keluarga !== null) {
                                                                    echo "<p style='color: blue'>ADA</p>";
                                                                } else{
                                                                    echo "<p style='color: red'>TIDAK ADA</p>";
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($rec->spk1 !== null) {
                                                                    echo "<p style='color: blue'>ADA</p>";
                                                                } else{
                                                                    echo "<p style='color: red'>TIDAK ADA</p>";
                                                                } ?> 
                                                            </td>
                                                            <td>
                                                                <?php if ($rec->spk2 !== null) {
                                                                    echo "<p style='color: blue'>ADA</p>";
                                                                } else{
                                                                    echo "<p style='color: red'>TIDAK ADA</p>";
                                                                } ?> 
                                                            </td>
                                                            <td>
                                                                <?php if ($rec->spk3 !== null) {
                                                                    echo "<p style='color: blue'>ADA</p>";
                                                                } else{
                                                                    echo "<p style='color: red'>TIDAK ADA</p>";
                                                                } ?> 
                                                            </td>
                                                            <td>
                                                                <?php if ($rec->sertif_keahlian1 !== null) {
                                                                    echo "<p style='color: blue'>ADA</p>";
                                                                } else{
                                                                    echo "<p style='color: red'>TIDAK ADA</p>";
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($rec->sertif_keahlian2 !== null) {
                                                                    echo "<p style='color: blue'>ADA</p>";
                                                                } else{
                                                                    echo "<p style='color: red'>TIDAK ADA</p>";
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($rec->sertif_keahlian3 !== null) {
                                                                    echo "<p style='color: blue'>ADA</p>";
                                                                } else{
                                                                    echo "<p style='color: red'>TIDAK ADA</p>";
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($rec->kelengkapan_berkas !== null) {
                                                                    echo $rec->kelengkapan_berkas;
                                                                } else{
                                                                    echo "<p style='color: red'>KELENGKAPAN BERKAS KOSONG</p>";
                                                                } ?>
                                                            </td> 

                                                            <td class="text-center">
                                                                <!--<a href="<?php// echo site_url('admin/list_of_applicants/view/'.$rec->id) ?>" class="btn btn-warning mr-2" style="color:#FFFFFF"><i class="bi bi-search"></i></a>-->
                                                                <div class="col-sm-12 d-flex justify-content-center">         
                                                                    <a href="<?php echo site_url('pintumasuk/list_of_applicants/view/'.$rec->id) ?>" class="btn btn-warning mr-2">View</a>
                                                                    <a href="<?php echo site_url('pintumasuk/list_of_applicants/delete/'.$rec->id) ?>" class="btn btn-danger delete">Delete</a>
                                                                </div>                          
                                                            </td>               
                                                        </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>    
                                                    <tfoot>
                                                        <tr>
                                                            <th></th>
                                                            <th style="vertical-align: middle;">No</th>
                                                            <th style="vertical-align: middle;">Date</th>
                                                            <th style="vertical-align: middle;">Code</th>
                                                            <th style="vertical-align: middle;">Fullname</th>
                                                            <th style="vertical-align: middle;">Gender</th>
                                                            <th style="vertical-align: middle;">Blood Type</th>
                                                            <th style="vertical-align: middle;">Age</th>
                                                            <th style="vertical-align: middle;">Place of Birth</th>
                                                            <th style="vertical-align: middle;">Date of Birth</th>
                                                            <th style="vertical-align: middle;">Identity Number</th>
                                                            <th style="vertical-align: middle;">No. KK</th>
                                                            <th style="vertical-align: middle;">NPWP Number</th>
                                                            <th style="vertical-align: middle;">Address</th>
                                                            <th style="vertical-align: middle;">RT / RW</th>
                                                            <th style="vertical-align: middle;">Sub-District</th>
                                                            <th style="vertical-align: middle;">District</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Province</th>
                                                            <th style="vertical-align: middle;">Current Address</th>
                                                            <th style="vertical-align: middle;">RT / RW</th>
                                                            <th style="vertical-align: middle;">Sub-District</th>
                                                            <th style="vertical-align: middle;">District</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Province</th>
                                                            <th style="vertical-align: middle;">Postal Code</th>
                                                            <th style="vertical-align: middle;">Mobile Number</th>
                                                            <th style="vertical-align: middle;">E-mail</th>
                                                            <th style="vertical-align: middle;">Religion</th>
                                                            <th style="vertical-align: middle;">Height</th>
                                                            <th style="vertical-align: middle;">Weight</th>
                                                            <th style="vertical-align: middle;">Residence Status</th>
                                                            <th style="vertical-align: middle;">Ibu Kandung</th>
                                                            <th style="vertical-align: middle;">Marital Status</th>
                                                            <th style="vertical-align: middle;">Class</th>
                                                            <th style="vertical-align: middle;">Salary</th>
                                                            <th style="vertical-align: middle;">Last Degree</th>
                                                            <th style="vertical-align: middle;">School</th>
                                                            <th style="vertical-align: middle;">Major</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">GPA</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Other Degree</th>
                                                            <th style="vertical-align: middle;">School</th>
                                                            <th style="vertical-align: middle;">Major</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">GPA</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Other Degree</th>
                                                            <th style="vertical-align: middle;">School</th>
                                                            <th style="vertical-align: middle;">Major</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">GPA</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Other Degree</th>
                                                            <th style="vertical-align: middle;">School</th>
                                                            <th style="vertical-align: middle;">Major</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">GPA</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Training Name</th>
                                                            <th style="vertical-align: middle;">Institution</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Skill Obtained</th>
                                                            <th style="vertical-align: middle;">Training Name</th>
                                                            <th style="vertical-align: middle;">Institution</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Skill Obtained</th>
                                                            <th style="vertical-align: middle;">Training Name</th>
                                                            <th style="vertical-align: middle;">Institution</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Skill Obtained</th>
                                                            <th style="vertical-align: middle;">Training Name</th>
                                                            <th style="vertical-align: middle;">Institution</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Skill Obtained</th>
                                                            <th style="vertical-align: middle;">Language</th>
                                                            <th style="vertical-align: middle;">Verbal</th>
                                                            <th style="vertical-align: middle;">Written</th>
                                                            <th style="vertical-align: middle;">Language</th>
                                                            <th style="vertical-align: middle;">Verbal</th>
                                                            <th style="vertical-align: middle;">Written</th>
                                                            <th style="vertical-align: middle;">Language</th>
                                                            <th style="vertical-align: middle;">Verbal</th>
                                                            <th style="vertical-align: middle;">Written</th>
                                                            <th style="vertical-align: middle;">Skill</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Skill Description</th>
                                                            <th style="vertical-align: middle;">Skill</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Skill Description</th>
                                                            <th style="vertical-align: middle;">Skill</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Skill Description</th>
                                                            <th style="vertical-align: middle;">Skill</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Skill Description</th>
                                                            <th style="vertical-align: middle;">Skill</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Skill Description</th>
                                                            <th style="vertical-align: middle;">Type of Achievment</th>
                                                            <th style="vertical-align: middle;">Rating</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Description</th>
                                                            <th style="vertical-align: middle;">Type of Achievment</th>
                                                            <th style="vertical-align: middle;">Rating</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Description</th>
                                                            <th style="vertical-align: middle;">Type of Achievment</th>
                                                            <th style="vertical-align: middle;">Rating</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Description</th>
                                                            <th style="vertical-align: middle;">Type of Achievment</th>
                                                            <th style="vertical-align: middle;">Rating</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Description</th>
                                                            <th style="vertical-align: middle;">Type of Achievment</th>
                                                            <th style="vertical-align: middle;">Rating</th>
                                                            <th style="vertical-align: middle;">Level</th>
                                                            <th style="vertical-align: middle;">Year</th>
                                                            <th style="vertical-align: middle;">Description</th>
                                                            <th style="vertical-align: middle;">Organization Name</th>
                                                            <th style="vertical-align: middle;">Organization Type</th>
                                                            <th style="vertical-align: middle;">Organization Position</th>
                                                            <th style="vertical-align: middle;">Organization Time</th>
                                                            <th style="vertical-align: middle;">Organization Name</th>
                                                            <th style="vertical-align: middle;">Organization Type</th>
                                                            <th style="vertical-align: middle;">Organization Position</th>
                                                            <th style="vertical-align: middle;">Organization Time</th>
                                                            <th style="vertical-align: middle;">Organization Name</th>
                                                            <th style="vertical-align: middle;">Organization Type</th>
                                                            <th style="vertical-align: middle;">Organization Position</th>
                                                            <th style="vertical-align: middle;">Organization Time</th>
                                                            <th style="vertical-align: middle;">Company Name</th>
                                                            <th style="vertical-align: middle;">Business Fields</th>
                                                            <th style="vertical-align: middle;">City</th>
                                                            <th style="vertical-align: middle;">Position</th>
                                                            <th style="vertical-align: middle;">Starting Date</th>
                                                            <th style="vertical-align: middle;">End Date</th>
                                                            <th style="vertical-align: middle;">Salary</th>
                                                            <th style="vertical-align: middle;">Reason to Stop</th>
                                                            <th style="vertical-align: middle;">Jobdesk</th>
                                                            <th style="vertical-align: middle;">Reason Work</th>
                                                            <th style="vertical-align: middle;">Facilities</th>
                                                            <th style="vertical-align: middle;">Start Working</th>
                                                            <th style="vertical-align: middle;">Acquaintance</th>
                                                            <th style="vertical-align: middle;">Name</th>
                                                            <th style="vertical-align: middle;">Position</th>
                                                            <th style="vertical-align: middle;">Division</th>
                                                            <th style="vertical-align: middle;">Relation</th>
                                                            <th style="vertical-align: middle;">Name</th>
                                                            <th style="vertical-align: middle;">Position</th>
                                                            <th style="vertical-align: middle;">Division</th>
                                                            <th style="vertical-align: middle;">Relation</th>
                                                            <th style="vertical-align: middle;">Strength</th>
                                                            <th style="vertical-align: middle;">Weakness</th>
                                                            <th style="vertical-align: middle;">Illness</th>
                                                            <th style="vertical-align: middle;">Illness Name</th>
                                                            <th style="vertical-align: middle;">Duration</th>
                                                            <th style="vertical-align: middle;">Consequences</th>
                                                            <th style="vertical-align: middle;">Illness Name</th>
                                                            <th style="vertical-align: middle;">Duration</th>
                                                            <th style="vertical-align: middle;">Consequences</th>
                                                            <th style="vertical-align: middle;">Blind</th>
                                                            <th style="vertical-align: middle;">Reference Name</th>
                                                            <th style="vertical-align: middle;">Reference Address</th>
                                                            <th style="vertical-align: middle;">Reference Phone</th>
                                                            <th style="vertical-align: middle;">Reference Job</th>
                                                            <th style="vertical-align: middle;">Reference Relation</th>
                                                            <th style="vertical-align: middle;">Reference Name</th>
                                                            <th style="vertical-align: middle;">Reference Address</th>
                                                            <th style="vertical-align: middle;">Reference Phone</th>
                                                            <th style="vertical-align: middle;">Reference Job</th>
                                                            <th style="vertical-align: middle;">Reference Relation</th>
                                                            <th style="vertical-align: middle;">Emergency Name</th>
                                                            <th style="vertical-align: middle;">Emergency Address</th>
                                                            <th style="vertical-align: middle;">Emergency Phone</th>
                                                            <th style="vertical-align: middle;">Emergency Job</th>
                                                            <th style="vertical-align: middle;">Emergency Relation</th>
                                                            <th style="vertical-align: middle;">Emergency Name</th>
                                                            <th style="vertical-align: middle;">Emergency Address</th>
                                                            <th style="vertical-align: middle;">Emergency Phone</th>
                                                            <th style="vertical-align: middle;">Emergency Job</th>
                                                            <th style="vertical-align: middle;">Emergency Relation</th>
                                                            <th style="vertical-align: middle;">Check 1</th>
                                                            <th style="vertical-align: middle;">Check 2</th>
                                                            <th style="vertical-align: middle;">Photo</th>
                                                            <th style="vertical-align: middle;">Ijazah</th>
                                                            <th style="vertical-align: middle;">Transcript</th>
                                                            <th style="vertical-align: middle;">Vaksin Ceritificate</th>
                                                            <th style="vertical-align: middle;">Statement Letter</th>
                                                            <th style="vertical-align: middle;">KTP</th>
                                                            <th style="vertical-align: middle;">NPWP</th>
                                                            <th style="vertical-align: middle;">Family Card</th>
                                                            <th style="vertical-align: middle;">SPK 1</th>
                                                            <th style="vertical-align: middle;">SPK 2</th>
                                                            <th style="vertical-align: middle;">SPK 3</th>
                                                            <th style="vertical-align: middle;">Certificate 1</th>
                                                            <th style="vertical-align: middle;">Certificate 2</th>
                                                            <th style="vertical-align: middle;">Certificate 3</th>
                                                            <th style="vertical-align: middle;">Complete File</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>                                   
                                            </table>
                                        </form>
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
    // Selection state shared across the DataTables ready-block and the delete
    // handler's ready-block. Hoisted to script scope so both closures see it.
    var selectedIds = new Set();
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
        $('#list_applicants tfoot th').each( function (i) {
            if (i === 0) return; // skip the checkbox column
            var title = $('#list_applicants thead th').eq( $(this).index() ).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" data-index="'+i+'" />' );
        } );

        // Create date inputs
        minDate = new DateTime($('#min'), {
            format: 'Do MMMM YYYY'
        });
        maxDate = new DateTime($('#max'), {
            format: 'Do MMMM YYYY'
        });
        var table = $('#list_applicants').DataTable({
            scrollY:        "1200px",
            scrollX:        true,
            scrollCollapse: true,
            paging:         true,
            bAutoWidth:     true,
            fixedColumns:   {
                leftColumns: 3,      
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
                    // "Print Selected" — exports ONLY the rows in the
                    // selectedIds Set (across all pages). We can't use the
                    // Select extension (it conflicts with fixedColumns), and
                    // DOM checkboxes only exist for the visible page, so we
                    // filter by the Set via a temporary custom search fn.
                    extend: 'print',
                    text: 'Print Selected',
                    className: 'btn-success rounded',
                    messageTop: 'List of Applicants',
                    title: 'PT Padma Sode Indonesia',
                    exportOptions: {
                        columns: ':visible',
                        modifier: { search: 'applied' }
                    },
                    action: function (e, dt, button, config) {
                        if (selectedIds.size === 0) {
                            alert('Tidak ada baris yang dipilih. Silakan pilih data terlebih dahulu.');
                            return;
                        }
                        // Map each selected applicant id to its DataTables row
                        // index once, so the filter can match by index without
                        // touching the (possibly detached) DOM node each time.
                        var selectedIndexes = [];
                        dt.rows().every(function () {
                            var node = this.node();
                            if (!node) return;
                            var id = $(node).data('id');
                            if (id !== undefined && selectedIds.has(String(id))) {
                                selectedIndexes.push(this.index());
                            }
                        });
                        if (selectedIndexes.length === 0) {
                            alert('Tidak ada baris yang dipilih. Silakan pilih data terlebih dahulu.');
                            return;
                        }
                        var fn = function (settings, data, dataIndex) {
                            return $.inArray(dataIndex, selectedIndexes) !== -1;
                        };
                        $.fn.dataTable.ext.search.push(fn);
                        dt.draw(); // apply the filter (only selected rows shown)
                        // Run the built-in print action (now sees only selected).
                        $.fn.dataTable.ext.buttons.print.action.call(this, e, dt, button, config);
                        // Remove ONLY our filter (by reference) and restore.
                        var idx = $.fn.dataTable.ext.search.indexOf(fn);
                        if (idx !== -1) { $.fn.dataTable.ext.search.splice(idx, 1); }
                        dt.draw();
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
                    // "Export to Excel (with Photo)": server-side export (the
                    // built-in excel button can't embed images), same columns
                    // as the report plus one "Image" column with the photo.
                    //
                    // Row scope: if rows are CHECKED, export ONLY those (the
                    // selectedIds Set, across all pages); otherwise export ALL
                    // rows currently shown on the page. We POST id[] (one per
                    // checked row) to the controller — same pattern the Delete
                    // button uses — via a dedicated hidden form.
                    text: 'Export to Excel (with Photo)',
                    className: 'btn-info rounded',
                    action: function () {
                        var ids = Array.from(selectedIds);
                        var $form = $("#form-export-photo");
                        // Reset: drop any previously injected id inputs.
                        $form.find("input[name='id[]'].js-injected").remove();
                        // Inject one hidden id[] per checked row. If none are
                        // checked, we submit with NO ids and the controller
                        // exports every row shown on the page.
                        ids.forEach(function (id) {
                            $form.append(
                                $('<input>').attr({ type: 'hidden', name: 'id[]', value: id })
                                            .addClass('js-injected')
                            );
                        });
                        $form.submit();
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
                targets:   0
                } ],

            order: [[ 2, 'asc' ]],

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

        // ---- Selection state (page-independent) ----
        // `selectedIds` is declared in script scope (above) so the delete
        // handler's closure can read it too. With client-side PAGING, only the
        // current page's <tr> nodes are in the DOM, so we keep selection in the
        // Set and sync the visible checkboxes from it on every draw.
        // Read the applicant id of a DataTables row (works for ALL rows, even
        // those not currently rendered, because data-id is cached by DT).
        function rowId(dtRow) {
            var node = dtRow.node();
            if (node) { return $(node).data('id'); }
            return null;
        }

        // Sync the "select all" header checkbox (original + fixedColumns clone).
        function syncSelectAll(checked) {
            $('.check-all').prop('checked', checked);
        }

        // Re-check the header based on how many FILTERED rows are selected.
        function refreshSelectAll() {
            var total = 0, checked = 0;
            table.rows({ search: 'applied' }).every(function () {
                var id = rowId(this);
                if (id !== null && id !== undefined) {
                    total++;
                    if (selectedIds.has(String(id))) { checked++; }
                }
            });
            syncSelectAll(total > 0 && checked === total);
        }

        // Apply the current selectedIds state to the VISIBLE page's checkboxes
        // (the only ones that exist in the DOM right now). Called on every draw.
        function syncVisibleCheckboxes() {
            table.rows({ page: 'current', search: 'applied' }).every(function () {
                var node = this.node();
                if (!node) return;
                var tr  = $(node);
                var box = tr.find('input.row-check').first();
                var id  = tr.data('id');
                if (!box.length) return;
                var on = selectedIds.has(String(id));
                box.prop('checked', on);
                tr.toggleClass('selected', on);
            });
            refreshSelectAll();
        }

        // Toggle a single applicant's selection by id (always stored as string
        // so number/string data-id lookups match consistently).
        function toggleId(id) {
            var key = String(id);
            if (selectedIds.has(key)) { selectedIds.delete(key); }
            else { selectedIds.add(key); }
        }

        // "Select all" — selects ALL rows matching the current filter, across
        // every page (not just the visible 10). Uses the DT data API so
        // non-rendered rows are included.
        $(document).on('click', '.check-all', function(e) {
            e.stopPropagation();
            var checked = $(this).prop('checked');
            table.rows({ search: 'applied' }).every(function () {
                var id = rowId(this);
                if (id === null || id === undefined) return;
                if (checked) { selectedIds.add(String(id)); }
                else        { selectedIds.delete(String(id)); }
            });
            syncVisibleCheckboxes();
            table.draw(false); // refresh fixedColumns clone
        });

        // ---- Row + checkbox clicks (fixedColumns-safe) ----
        // fixedColumns clones the left columns; the checkbox the user clicks is
        // often the clone. We bind on document, prevent the native toggle, and
        // always mutate the selectedIds Set (by applicant id), then sync.

        // Find the applicant id for a clicked element (row or checkbox, original
        // or clone). The <tr> carries data-id; the checkbox carries value.
        function idFromClicked(el) {
            var $el = $(el);
            if ($el.is('input.row-check')) { return $el.val(); }
            return $el.closest('tr').data('id');
        }

        // Click anywhere on a row toggles its selection.
        $(document).on('click', '#list_applicants tbody tr', function(e) {
            if ($(e.target).is('a, button, input, select, textarea')) return;
            var id = $(this).data('id');
            if (id !== undefined) {
                toggleId(id);
                syncVisibleCheckboxes();
                table.draw(false);
            }
        });

        // Click on the checkbox itself (original OR clone).
        $(document).on('click', 'input.row-check', function(e) {
            e.preventDefault();      // stop native toggle; the Set drives state
            e.stopPropagation();
            var id = $(this).val();
            if (id !== undefined && id !== '') {
                toggleId(id);
                syncVisibleCheckboxes();
                table.draw(false);
            }
        });

        // After every draw (paging, sorting, filtering), re-check the visible
        // page's boxes from the Set so selection survives page changes.
        table.on('draw', function () {
            syncVisibleCheckboxes();
        });
    } );


    $(document).ready(function(){
        // Delete selected rows — submit every id in the selectedIds Set.
        // We can't rely on the checkbox DOM state because only the visible
        // page's checkboxes exist; selection lives in the Set instead.
        $("#btn-delete").click(function(){
            var ids = Array.from(selectedIds);
            if (ids.length === 0) {
                alert("Tidak ada baris yang dipilih. Silakan pilih data terlebih dahulu.");
                return;
            }
            var ok = window.confirm(
                "Apakah Anda yakin ingin menghapus " + ids.length + " data terpilih?"
            );
            if (!ok) return;

            var $form = $("#form-delete");
            // Disable ALL row-check checkboxes (originals + fixedColumns
            // clones) so they don't double-submit; the Set is the source of
            // truth and we send it via hidden inputs below.
            $form.find("input.row-check").prop("disabled", true);
            // Remove any previously injected hidden id inputs.
            $form.find("input[name='id[]'].js-injected").remove();
            // Inject one hidden input per selected id.
            ids.forEach(function (id) {
                $form.append(
                    $('<input>').attr({ type: 'hidden', name: 'id[]', value: id })
                                .addClass('js-injected')
                );
            });
            $form.submit();
        });
    });

</script>