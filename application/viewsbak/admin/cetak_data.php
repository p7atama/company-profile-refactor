<body onLoad="window.print('width=400,height=150,resizable=yes,scrollbars=yes')">
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Applicant Data</title>
  </head>
  <body>
    <div class="container-fluid">   
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-sm-9">
            <div class="section-title-print" style="vertical-align: middle; text-align: center" >
                    <h2 style="margin-top: 120px; margin-left: 40px; font-size: 48px">CURRICULUM VITAE</h2>
                    <h2 style="font-size: 48px; margin-left: 40px;"><?php echo "(". $recruitment->posisi. ")"; ?></h2>
                </div> 
          </div>

          <div class="col-sm-3 colom-foto mt-5">               
                    <div class="card card-img rounded mt-4" >
                        <img style="padding: 8px 8px 8px 8px" id="foto" src="<?php echo base_url('uploads/recruitment/'.$recruitment->foto_formal) ?>" width='200' />   
                    </div>                          
                </div>
        </div>
      </div>
           
        <br>
        <div class="container">
          <table class="table table-bordered">
          <thead>
          </thead>
          <tbody style="font-size: 18px">
            <tr>
              <td>Code</td>
              <td colspan="2"> <?php echo $recruitment->posisi; ?></td>
            </tr>
            <tr>
              <td>Fullname</td>
              <td colspan="2"> <?php echo $recruitment->name; ?></td>
            </tr>
            <tr>
              <td>Identity Number</td>
              <td colspan="2"> <?php echo $recruitment->no_ktp; ?></td>
            </tr>
            <tr>
              <td>Gender</td>
              <td colspan="2"> <?php echo $recruitment->jenis_kelamin; ?></td>
            </tr>
            <tr>
              <td>Status</td>
              <td colspan="2"> <?php echo $recruitment->status_pernikahan; ?></td>
            </tr>
            <tr>
              <td>Place of Birth</td>
              <td colspan="2"> <?php echo $recruitment->tempat_lahir; ?></td>
            </tr>
            <tr>
              <td>Date of Birth</td>
              <td colspan="2"> <?php echo $recruitment->tanggal_lahir; ?></td>
            </tr>
            <tr>
              <td>Age</td>
              <td colspan="2"> <?php echo $recruitment->umur; ?></td>
            </tr>
            <tr>
              <td>Weight/Height</td>
              <td colspan="2"> <?php echo $recruitment->berat_badan. ' / '. $recruitment->tinggi_badan; ?></td>
            </tr>
            <tr>
              <td>Lasst Degree</td>
              <td colspan="2"> <?php echo $recruitment->jenjang1; ?></td>
            </tr>
            <tr>
              <td>School / University</td>
              <td colspan="2"> <?php echo $recruitment->nama_sekolah1; ?></td>
            </tr>
            <tr>
              <td>Major</td>
              <td colspan="2"> <?php echo $recruitment->jurusan1; ?></td>
            </tr>
            <tr>
              <td>GPA</td>
              <td colspan="2"> <?php echo $recruitment->nilai_akhir1; ?></td>
            </tr>
            <tr>
              <td>Mobile Number</td>
              <td colspan="2"> <?php echo '0'.$recruitment->no_hp; ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td colspan="2"> <?php echo $recruitment->email; ?></td>
            </tr>
            <tr>
              <td>Address</td>
              <td colspan="2"> <?php echo $recruitment->alamat_tinggal; ?> <?php echo $recruitment->rt_rw_tinggal; ?>, <?php echo $recruitment->kelurahan_tinggal; ?>, <?php echo $recruitment->kecamatan_tinggal; ?>, <?php echo $recruitment->kota_tinggal; ?>, <?php echo $recruitment->provinsi_tinggal; ?></td>
            </tr>
            <tr>
              <td>Job Experience</td>
              <td colspan="2">
                <?php 
                if ($recruitment->jabatan_perusahaan !== '') {
                            echo $recruitment->jabatan_perusahaan. ' di ' .$recruitment->nama_perusahaan. ' dari ' .$recruitment->awal_kerja. ' sampai ' .$recruitment->akhir_kerja;
                        } else{
                            echo "<p style='color: red'> Data kosong</p>";
                        } ?>
            </tr>
            <tr>
              <td>Date Apply</td>
              <td colspan="2">
                <?php echo $recruitment->date; ?>
              </td>
            </tr>
            <tr>
                <td>Kelengkapan Berkas</td>
                <td colspan="2">
                <?php 
                if ($recruitment->kelengkapan_berkas !== null) {
                          echo $recruitment->kelengkapan_berkas;
                        } else{
                            echo "<p style='color: red'> Kelengkapan berkas kosong</p>";
                        } ?> 
              </td>
            </tr>
            <tr>
              <td>Confirm By</td>
              <td colspan="2"> <?php echo $this->session->userdata('nama'); ?></td>
            </tr>
            <tr>
              <td>Confirm Date</td>
              <td colspan="2"> 
                <?php echo $recruitment->confirm_date; ?>
              </td>
            </tr>
            <tr>
                <td>Notes</td>
                <td colspan="2"> 
                <?php 
                  if ($recruitment->note !== '') {
                            echo $recruitment->note;
                          } else{
                              echo "<p style='color: red'> Note kosong</p>";
                          } ?> 
                </td>
            </tr>

          </tbody>
      </table>
        </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>