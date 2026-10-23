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
                            <h2 class="mt-5">LIST APPLICANTS</h2>
                        </div>                       
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <p><a class="btn btn-success" href="<?php echo base_url('admin/list_of_applicants_approved/export_excel') ?>">Export to Excel</a></p>
                            </div>
                            <div class="card-body">
                                 <?php if ($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success" style="text-align: center;" role="alert">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="pilihan-data d-flex justify-content-center">
                                    <a href="<?php echo site_url('admin/list_of_applicants') ?>" class="btn btn-primary active mr-2">None Approve</a>
                                    <a href="<?php echo site_url('admin/list_of_applicants_approved') ?>" class="btn btn-primary disabled mr-2">Approve</a>
                                    <a href="<?php echo site_url('admin/list_of_applicants_not_approved') ?>" class="btn btn-primary active mr-2">Not Approve</a>
                                </div>

                                <div class="date-search">
                                    <div class="form-group row">
                                        <label for="start-date" class="col-sm-1 col-form-label">Start Date :</label>
                                        <div class="col-sm-2">
                                          <input type="text" class="form-control" id="min" name="min" placeholder="Fill in here ...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="start-end-date" class="col-sm-1 col-form-label">End Date :</label>
                                        <div class="col-sm-2">
                                          <input type="text" class="form-control" id="max" name="max" placeholder="Fill in here ...">
                                        </div>
                                    </div>
                                </div>

                                <div class="freeze-table table-basic">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped" id="list_applicants_approved" width="" cellspacing="0">
                                            <thead class="table">
                                                <tr style="text-align: center;">
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
                                                    <th style="vertical-align: middle;">Mobile Number</th>
                                                    <th style="vertical-align: middle;">E-mail</th>
                                                    <th style="vertical-align: middle;">Religion</th>
                                                    <th style="vertical-align: middle;">Height</th>
                                                    <th style="vertical-align: middle;">Weight</th>
                                                    <th style="vertical-align: middle;">Residence Status</th>
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
                                                    <th style="vertical-align: middle;">Company Name</th>
                                                    <th style="vertical-align: middle;">Business Fields</th>
                                                    <th style="vertical-align: middle;">City</th>
                                                    <th style="vertical-align: middle;">Position</th>
                                                    <th style="vertical-align: middle;">Starting Date</th>
                                                    <th style="vertical-align: middle;">End Date</th>
                                                    <th style="vertical-align: middle;">Salary</th>
                                                    <th style="vertical-align: middle;">Reason to Stop</th>
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
                                                    <th style="vertical-align: middle;">Check 1</th>
                                                    <th style="vertical-align: middle;">Check 2</th>
                                                    <th style="vertical-align: middle;">Photo</th>
                                                    <th style="vertical-align: middle;">Ijazah</th>
                                                    <th style="vertical-align: middle;">Transcript</th>
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
                                                foreach ($recruitment as $rec): ?>
                                                <tr>
                                                    <td></td>
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
                                                    <td>
                                                        <?php echo $rec->status ?>
                                                    </td> 
                                                    <td>
                                                        <?php echo $rec->confirm_by ?>
                                                    </td> 
                                                    <td>
                                                        <?php echo $rec->confirm_date ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rec->note ?>
                                                    </td> 
                                                    <td>
                                                        <?php echo $rec->status_print ?>
                                                    </td> 

                                                    <td width="70">
                                                        <div class="col-sm12 d-flex justify-content-center">
                                                            <a href="<?php echo site_url('admin/list_of_applicants_approved/view/'.$rec->id) ?>" class="btn btn-warning mr-2">View</a>
                                                            <a href="<?php echo site_url('admin/list_of_applicants_approved/delete/'.$rec->id) ?>" class="btn btn-danger delete mr-2">Delete</a>
                                                            <?php 
                                                                $print = base_url('admin/list_of_applicants_approved/print_data/'.$rec->id);
                                                                if ($rec->status_print == 'Belum Print') {
                                                                    echo "<a href='$print' class='btn bi bi-printer-fill rounded'  style='background-color:green;color:white;border:none'></a>";
                                                                } else{
                                                                    echo '<a href="#" class="btn bi bi-check2 rounded"  style="background-color:green;color:white;border:none"></a>';
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
                                                    <th style="vertical-align: middle;">Mobile Number</th>
                                                    <th style="vertical-align: middle;">E-mail</th>
                                                    <th style="vertical-align: middle;">Religion</th>
                                                    <th style="vertical-align: middle;">Height</th>
                                                    <th style="vertical-align: middle;">Weight</th>
                                                    <th style="vertical-align: middle;">Residence Status</th>
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
                                                    <th style="vertical-align: middle;">Company Name</th>
                                                    <th style="vertical-align: middle;">Business Fields</th>
                                                    <th style="vertical-align: middle;">City</th>
                                                    <th style="vertical-align: middle;">Position</th>
                                                    <th style="vertical-align: middle;">Starting Date</th>
                                                    <th style="vertical-align: middle;">End Date</th>
                                                    <th style="vertical-align: middle;">Salary</th>
                                                    <th style="vertical-align: middle;">Reason to Stop</th>
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
                                                    <th style="vertical-align: middle;">Check 1</th>
                                                    <th style="vertical-align: middle;">Check 2</th>
                                                    <th style="vertical-align: middle;">Photo</th>
                                                    <th style="vertical-align: middle;">Ijazah</th>
                                                    <th style="vertical-align: middle;">Transcript</th>
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
        $('#list_applicants_approved tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="search" />' );
        });

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
                leftColumns: 4,
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
</script>