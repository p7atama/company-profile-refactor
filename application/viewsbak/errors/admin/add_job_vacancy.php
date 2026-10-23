<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="mt-5">ADD JOB VACANCY</h2>
            </div>           

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="card mb-4">
                        <div class="card-body">
                            <?php if ($this->session->flashdata('success')): ?>
                                <div class="alert alert-success" style="text-align: center;" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="container">
                                <form action="<?php echo site_url('admin/job_vacancy/save') ?>" method="post" enctype="multipart/form-data" >   
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="jabatan">Created Date *</label>
                                            <input type="text" class="form-control" name="date" value="<?php echo date("y-m-d"); ?>" readonly>
                                        </div>
                                    </div> 

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="division_name">Division Name *</label>
                                            <input type="text" class="form-control" name="division_name"placeholder="Fill in here" required />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="division_code">Division Code *</label>
                                            <input type="text" class="form-control" name="division_code"placeholder="Fill in here" required />
                                        </div>
                                    </div> 

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="jabatan" class="control-label">Position *</label>
                                            <select class="form-control" name="jabatan" required="">
                                                <option value="">-Select one-</option>
                                                <option value="STAFF">STAFF</option>
                                                <option value="OPERATOR">OPERATOR</option>
                                            </select>
                                        </div>
                                    </div>    

                                    <div class="form-group">
                                        <label for="keterangan_job">Description *</label>
                                        <textarea class="form-control <?php echo form_error('Keterangan') ? 'is-invalid':'' ?>" rows="10" name="keterangan_job" id="keterangan_job"></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('keterangan_job') ?>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <div class="judul-attach">
                                            <p style="margin-left: -15px;margin-bottom: -8px; margin-top: 5px;">Last Degree *</p>
                                            </div>                                
                                        </div>

                                    <div class="border rounded" style="padding: 10px 5px 10px 20px; margin: auto">
                                        <div class="form-row">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="last_degree[]" id="customCheckSMASMK" value="SMA/SMK">
                                                <label class="custom-control-label mr-3" for="customCheckSMASMK">SMA/SMK</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="last_degree[]" id="customCheckDiploma" value="Diploma">
                                                <label class="custom-control-label mr-3" for="customCheckDiploma">Diploma</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="last_degree[]" id="customCheckBachelor" value="Bachelor Degree (S1)">
                                                <label class="custom-control-label mr-3" for="customCheckBachelor">Bachelor Degree (S1)</label>
                                            </div>                
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label for="major">Major *</label>
                                            <input class="form-control" type="text" name="major" min="0" placeholder="Fill in here ..." required/>
                                        </div>                              
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="location" class="control-label">Location *</label>
                                            <select class="form-control" name="location" required="">
                                                <option value="">-Select one-</option>
                                                <option value="PT Padma Soode Indonesia">PT Padma Soode Indonesia</option>
                                                <option value="PT Senjaya Soode Precision">PT Senjaya Soode Precision</option>
                                                <option value="PT Covac Indonesia">PT Covac Indonesia</option>
                                                <option value="PT Ciptajaya Kreasindo Utama">PT Ciptajaya Kreasindo Utama</option>
                                            </select>
                                        </div>
                                    </div>   

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label for="major">Applicant Limit *</label>
                                            <input class="form-control" type="number" name="limit" placeholder="Fill in here ..." required/>
                                        </div>                              
                                    </div>

                                    <!-- <div class="row">
                                        <div class="col-sm-12">
                                            <label for="location">Location *</label>
                                            <input class="form-control" type="text" name="location" min="0" placeholder="Fill in here ..." required/>
                                        </div>                              
                                    </div> -->
                                    <br>
                                    
                                    <label>Close Date *</label>
                                    <div class="form-row">
                                        <div class="input-group col-md-12">
                                            <input type="date" name="close" placeholder="Fill in here ..."  class="form-control" required/>
                                        </div>
                                    </div>   
                                    <br> 
                                    <br>                              
                                           
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <a href="<?php echo site_url('admin/job_vacancy/') ?>" class="btn btn-secondary"> Back</a>
                                        <input class="btn btn-primary ml-2" type="submit" name="btn" value="Save"/>
                                    </div>                           
                                </form>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </main>
    <br>