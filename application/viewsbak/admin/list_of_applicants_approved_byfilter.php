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
                            <h2 class="mt-5">LIST APPLICANTS APPROVE</h2>
                        </div>      
                        <div class="pilihan-data d-flex justify-content-center mb-4">
                            <a href="<?php echo site_url('pintumasuk/list_of_applicants') ?>" class="btn btn-primary active mr-2">None Approve</a>
                            <a href="<?php echo site_url('pintumasuk/list_of_applicants_approved') ?>" class="btn btn-primary disabled mr-2">Approve</a>
                            <a href="<?php echo site_url('pintumasuk/list_of_applicants_not_approved') ?>" class="btn btn-primary active mr-2">Not Approve</a>
                        </div>                 
                        
                        <div class="card mb-4">
                            <div class="card rounded">
                                <div class="card-header">
                                    FILTER
                                </div>
                                <div class="card-body p-3 ml-4">
                                    <form action="<?= base_url('pintumasuk/list_of_applicants_approved/index'); ?>" method="POST">
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
                            </div>
                        </div>

                        <div class="card rounded">
                            <div class="card-body">
                                <?php if ($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success" style="text-align: center;" role="alert">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="freeze-table table-basic">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped" id="list_applicants_approved" width="" cellspacing="0">
                                            <thead style="color:#3F6AD8">
                                                <tr style="background-color:#F0F8FF;text-align: center;">
                                                    <th><input type="checkbox" class="selectAll" name="selectAll" value="all"></input></th>
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
                                                    <th style="vertical-align: middle;">Status</th>
                                                    <th style="vertical-align: middle;">Confirm By</th>
                                                    <th style="vertical-align: middle;">Confirm Date</th>
                                                    <th style="vertical-align: middle;">Note</th>
                                                    <th style="vertical-align: middle;">Status Print</th>
                                                    <th style="vertical-align: middle;">Action</th>
                                                </tr>
                                            </thead>                                        
                                            <tbody>
                                                <?php 
                                                $no = 1;
                                                foreach ($recruitment->result() as $rec): ?>
                                                <?php  
                                                    if($rec->sudah_proses == null){
                                                        $background_fix = '#FFB6C1';
                                                       }
                                                       else{
                                                        $background_fix = '#9dff9d';
                                                    }
                                                ?>
                                                <tr>
                                                    <?php echo '<td style="background-color:'.$background_fix.'"></td>';?>
                                                    <?php echo '<td style="background-color:'.$background_fix.'">'.$no++.'</td>';?>
                                                    <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->date.'</td>';?>
                                                    <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->posisi.'</td>';?>
                                                    <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->name.'</td>';?>
                                                    <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jenis_kelamin.'</td>';?>
                                                    <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->gol_darah.'</td>';?>
                                                    <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->umur.'</td>';?>
                                                    <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tempat_lahir.'</td>';?>
                                                    <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tanggal_lahir.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->no_ktp.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->no_kk.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->no_npwp.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->alamat_ktp.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->rt_rw_ktp.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kelurahan_ktp.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kecamatan_ktp.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kota_ktp.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->provinsi_ktp.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->alamat_tinggal.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->rt_rw_tinggal.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kelurahan_tinggal.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kecamatan_tinggal.'</td>';?>  
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kota_tinggal.'</td>';?>  
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->provinsi_tinggal.'</td>';?> 
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kode_pos.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->no_hp.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->email.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->agama.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tinggi_badan.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->berat_badan.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->status_tempat_tinggal.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->ibu_kandung.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->status_pernikahan.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->golongan.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->gaji.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jenjang1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_sekolah1.'</td>';?>

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jurusan1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tahun1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nilai_akhir1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kota1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jenjang2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_sekolah2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jurusan2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tahun2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nilai_akhir2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kota2.'</td>';?>

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jenjang3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_sekolah3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jurusan3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tahun3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nilai_akhir3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kota3.'</td>';?> 

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jenjang4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_sekolah4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jurusan4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tahun4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nilai_akhir4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kota4.'</td>';?>  

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_training1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->lembaga1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kota_training1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tahun_training1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->skill_training1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_training2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->lembaga2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kota_training2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tahun_training2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->skill_training2.'</td>';?>

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_training3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->lembaga3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kota_training3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tahun_training3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->skill_training3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_training4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->lembaga4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kota_training4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tahun_training4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->skill_training4.'</td>';?>

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->bahasa1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->lisan1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tulisan1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->bahasa2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->lisan2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tulisan2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->bahasa3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->lisan3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tulisan3.'</td>';?>

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterampilan1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterangan1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->deskripsi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterampilan2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterangan2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->deskripsi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterampilan3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterangan3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->deskripsi3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterampilan4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterangan4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->deskripsi4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterampilan5.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterangan5.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->deskripsi5.'</td>';?>

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jenis_prestasi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->peringkat1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tingkat_prestasi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tahun_prestasi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterangan_prestasi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jenis_prestasi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->peringkat2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tingkat_prestasi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tahun_prestasi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterangan_prestasi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jenis_prestasi3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->peringkat3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tingkat_prestasi3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tahun_prestasi3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterangan_prestasi3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jenis_prestasi4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->peringkat4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tingkat_prestasi4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tahun_prestasi4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterangan_prestasi4.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jenis_prestasi5.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->peringkat5.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tingkat_prestasi5.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tahun_prestasi5.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->keterangan_prestasi5.'</td>';?>

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_organisasi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jenis_organisasi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jabatan_organisasi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->periode_organisasi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_organisasi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jenis_organisasi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jabatan_organisasi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->periode_organisasi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_organisasi3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jenis_organisasi3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jabatan_organisasi3.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->periode_organisasi3.'</td>';?>

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_perusahaan.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->bidang_usaha.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kota_perusahaan.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jabatan_perusahaan.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->awal_kerja.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->akhir_kerja.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->gaji_terakhir.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->alasan_berhenti.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->tugas_tgg_jawab.'</td>';?>

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->alasan_bekerja.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->fasilitas_bekerja.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kapan_mulai_bekerja.'</td>';?>

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kenalan_perusahaan.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_kenalan1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jabatan_kenalan1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->bagian_kenalan1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->hubungan_kenalan1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_kenalan2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->jabatan_kenalan2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->bagian_kenalan2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->hubungan_kenalan2.'</td>';?>

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kelebihan.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->kekurangan.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->pernah_sakit.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_penyakit1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->lama_sakit1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->akibat_ditimbulkan1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_penyakit2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->lama_sakit2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->akibat_ditimbulkan2.'</td>';?>

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->buta_warna.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_referensi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->alamat_referensi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->no_telp_referensi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->pekerjaan_referensi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->hubungan_referensi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_referensi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->alamat_referensi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->no_telp_referensi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->pekerjaan_referensi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->hubungan_referensi2.'</td>';?>

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_dihubungi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->alamat_dihubungi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->no_telp_dihubungi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->pekerjaan_dihubungi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->hubungan_dihubungi1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->nama_dihubungi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->alamat_dihubungi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->no_telp_dihubungi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->pekerjaan_dihubungi2.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->hubungan_dihubungi2.'</td>';?>

                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->check1.'</td>';?>
                                                   <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->check2.'</td>';?>

                                                    <?php if ($rec->foto_formal !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Ada'.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Tidak Ada'.'</td>';
                                                    } ?>

                                                    <?php if ($rec->ijazah !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Ada'.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Tidak Ada'.'</td>';
                                                    } ?>

                                                    <?php if ($rec->transkrip_nilai !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Ada'.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Tidak Ada'.'</td>';
                                                    } ?>

                                                    <?php if ($rec->sertifikat_vaksin !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Ada'.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Tidak Ada'.'</td>';
                                                    } ?>

                                                    <?php if ($rec->surat_pernyataan !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Ada'.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Tidak Ada'.'</td>';
                                                    } ?>

                                                    <?php if ($rec->ktp !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Ada'.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Tidak Ada'.'</td>';
                                                    } ?>

                                                    <?php if ($rec->npwp !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Ada'.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Tidak Ada'.'</td>';
                                                    } ?>

                                                    <?php if ($rec->kartu_keluarga !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Ada'.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Tidak Ada'.'</td>';
                                                    } ?>

                                                    <?php if ($rec->spk1 !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Ada'.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Tidak Ada'.'</td>';
                                                    } ?>

                                                    <?php if ($rec->spk2 !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Ada'.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Tidak Ada'.'</td>';
                                                    } ?>

                                                    <?php if ($rec->spk3 !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Ada'.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Tidak Ada'.'</td>';
                                                    } ?>

                                                    <?php if ($rec->sertif_keahlian1 !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Ada'.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Tidak Ada'.'</td>';
                                                    } ?>

                                                    <?php if ($rec->sertif_keahlian2 !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Ada'.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Tidak Ada'.'</td>';
                                                    } ?>
                                                    
                                                    <?php if ($rec->sertif_keahlian3 !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Ada'.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'Tidak Ada'.'</td>';
                                                    } ?>

                                                    <?php if ($rec->kelengkapan_berkas !== null) {
                                                        echo '<td style="background-color:'.$background_fix.'">'.$rec->kelengkapan_berkas.'</td>';
                                                    } else{
                                                        echo '<td style="background-color:'.$background_fix.'">'.'KELENGKAPAN BERKAS KOSONG'.'</td>';
                                                    } ?>
                                                    
                                                    
                                                    <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->status.'</td>';?>
                                                    <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->confirm_by.'</td>';?>
                                                    <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->confirm_date.'</td>';?>
                                                    <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->note.'</td>';?>
                                                    <?php echo '<td style="background-color:'.$background_fix.'">'.$rec->status_print.'</td>';?>
                                                    <td width="70" style="background-color: <?php echo $background_fix ?>">
                                                        <div class="col-sm-12 d-flex justify-content-center">
                                                            <a href="<?php echo site_url('pintumasuk/list_of_applicants_approved/view/'.$rec->id) ?>" class="btn btn-sm btn-warning mr-2" style="color:#FFFFFF"><i class="bi bi-search"></i></a>
                                                            <!--<a href="<?php // echo site_url('pintumasuk/list_of_applicants_approved/delete/'.$rec->id) ?>" class="btn btn-danger delete mr-2">Delete</a>-->
                                                            <?php 
                                                                $print = base_url('pintumasuk/list_of_applicants_approved/print_data/'.$rec->id);
                                                                if ($rec->status_print == 'Belum Print') {
                                                                    echo "<a href='$print' class='btn btn-sm btn-info bi bi-printer-fill rounded' style='color:white;border:none'></a>";
                                                                } else{
                                                                    echo '<a href="#" class="btn btn-sm btn-info bi bi-check2 rounded"  style="color:white;border:none"></a>';
                                                                } 
                                                            ?>
                                                            <?php  
                                                                if ($rec->sudah_proses == null) { ?>
                                                                    <a href='<?php echo base_url('pintumasuk/list_of_applicants_approved/check_data_pelamar/'.$rec->id.'/'.$tanggal_dari.'/'.$tanggal_sampai.'/'.$posisiT) ?>' class='btn btn-sm bi bi-check2 rounded ml-2 proses' style='background-color:green;color:white;border:none'></a>
                                                                <?php } else {
                                                                    echo "";
                                                                }
                                                            ?>
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
                                                    <th style="vertical-align: middle;">Status</th>
                                                    <th style="vertical-align: middle;">Confirm By</th>
                                                    <th style="vertical-align: middle;">Confirm Date</th>
                                                    <th style="vertical-align: middle;">Note</th>
                                                    <th style="vertical-align: middle;">Status Print</th>
                                                    <th style="vertical-align: middle;">Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
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
        $('#list_applicants_approved tfoot th').each( function (i) {
            var title = $('#list_applicants_approved thead th').eq( $(this).index() ).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" data-index="'+i+'" />' );
        } );

        // Create date inputs
        minDate = new DateTime($('#min'), {
            format: 'Do MMMM YYYY'
        });
        maxDate = new DateTime($('#max'), {
            format: 'Do MMMM YYYY'
        });
        var table = $('#list_applicants_approved').DataTable({
            scrollY:        '1200px',
            scrollX:        true,
            scrollCollapse: true,
            paging:         true,
            bAutoWidth:     false,
            fixedColumns:   {
                leftColumns: 5,
                rightColumns:1,
            },
            dom: 'Bfrtip',
            buttons:{
                buttons: [
                {
                    extend: 'print',
                    text: 'Print All (Pdf)',
                    className: 'btn-success rounded',
                    messageTop: 'List of Applicants Approved',
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
                    text: 'Print Selected (Pdf)',
                    messageTop: 'List of Applicants Approved',
                    title: 'PT Padma Sode Indonesia',
                    className: 'btn-success rounded',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'excel',
                    text: 'Export to Excel',
                    messageTop: 'List of Applicants Approved',
                    title: 'PT Padma Sode Indonesia',
                    className: 'btn-success rounded',
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

    $(document).ready(function() {
            $('.proses').click(function() {
            return confirm("Apakah anda yakin?");
            });
        });
</script>