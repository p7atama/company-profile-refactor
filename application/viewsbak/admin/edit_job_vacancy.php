<script src="<?php echo base_url('assets/js/scripts_admin.js') ?>"></script>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="mt-5">EDIT JOB VACANCY</h2>
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
                                <form action="<?php echo site_url('pintumasuk/job_vacancy/update') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $career->id ?>" />
                                    <div class="form-group">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="jabatan">Date *</label>
                                                <input type="text" class="form-control" name="date" value="<?php echo date("Y-m-d"); ?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="division_name">Division Name : *</label>
                                                <input class="form-control" type="text" name="division_name" min="0" placeholder="Division name" value="<?php echo $career->division_name ?>" required />
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="division_code">Division Code : *</label>
                                                <input class="form-control" type="text" name="division_code" min="0" placeholder="Division code" value="<?php echo $career->division_code ?>" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="jabatan" class="control-label">Position</label>
                                            <select class="form-control" name="jabatan" required="">
                                                <option <?php if ($career->jabatan == 'STAFF') {
                                                            echo "selected";
                                                        } ?> value='STAFF'>STAFF</option>
                                                <option <?php if ($career->jabatan == 'OPERATOR') {
                                                            echo "selected";
                                                        } ?> value='OPERATOR'>OPERATOR</option>
                                                <option <?php if ($career->jabatan == 'SKILLED_OPERATOR') {
                                                            echo "selected";
                                                        } ?> value='SKILLED_OPERATOR'>SKILLED OPERATOR</option>
                                                <option <?php if ($career->jabatan == 'KEPALA_UNIT') {
                                                            echo "selected";
                                                        } ?> value='KEPALA_UNIT'>KEPALA UNIT</option>
                                                <option <?php if ($career->jabatan == 'KEPALA SEKSI') {
                                                            echo "selected";
                                                        } ?> value='KEPALA SEKSI'>KEPALA SEKSI (SUPERVISOR)</option>
                                                <option <?php if ($career->jabatan == 'KEPALA_DIVISI') {
                                                            echo "selected";
                                                        } ?> value='KEPALA_DIVISI'>KEPALA DIVISI (MANAGER)</option>
                                                <option <?php if ($career->jabatan == 'KEPALA_DEPARTEMEN') {
                                                            echo "selected";
                                                        } ?> value='KEPALA_DEPARTEMEN'>KEPALA DEPARTEMEN</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="keterangan_job">Description : *</label>
                                        <textarea class="form-control <?php echo form_error('keterangan_job') ? 'is-invalid' : '' ?>" rows="10" name="keterangan_job" id="keterangan_job"><?php echo $career->keterangan_job; ?></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('keterangan_job') ?>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <div class="judul-attach">
                                            <p style="margin-left: -15px;margin-bottom: -8px; margin-top: 5px;">Last Degree :</p>
                                        </div>
                                    </div>

                                    <div class="border rounded" style="padding: 10px 5px 10px 20px; margin: auto">
                                        <div class="form-row">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="last_degree[]" id="customCheckSMA" value="SMA" <?php
                                                                                                                                                            if (strpos($career->last_degree, 'SMA') !== false) {
                                                                                                                                                                echo 'checked';
                                                                                                                                                            }  ?>>
                                                <label class="custom-control-label mr-3" for="customCheckSMA">SMA</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="last_degree[]" id="customCheckSMK" value="SMK" <?php
                                                                                                                                                            if (strpos($career->last_degree, 'SMK') !== false) {
                                                                                                                                                                echo 'checked';
                                                                                                                                                            }  ?>>
                                                <label class="custom-control-label mr-3" for="customCheckSMK">SMK</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="last_degree[]" id="customCheckDiploma" value="D3" <?php
                                                                                                                                                            if (strpos($career->last_degree, 'D3') !== false) {
                                                                                                                                                                echo 'checked';
                                                                                                                                                            }  ?>>
                                                <label class="custom-control-label mr-3" for="customCheckDiploma">D3</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="last_degree[]" id="customCheckBachelor" value="S1" <?php
                                                                                                                                                                if (strpos($career->last_degree, 'S1') !== false) {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                }  ?>>
                                                <label class="custom-control-label mr-3" for="customCheckBachelor">S1/D4</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="major">Major :</label>
                                        <textarea class="form-control" name="major" placeholder="Major" required><?php echo $career->major ?></textarea>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="location" class="control-label">Location</label>
                                            <select class="form-control" name="location" required="">
                                                <option <?php if ($career->location == 'PT Padma Soode Indonesia') {
                                                            echo "selected";
                                                        } ?> value='PT Padma Soode Indonesia'>PT Padma Soode Indonesia</option>
                                                <option <?php if ($career->location == 'PT Covac Indonesia') {
                                                            echo "selected";
                                                        } ?> value='PT Covac Indonesia'>PT Covac Indonesia</option>
                                                <option <?php if ($career->location == 'PT Ciptajaya Kreasindo Utama') {
                                                            echo "selected";
                                                        } ?> value='PT Ciptajaya Kreasindo Utama'>PT Ciptajaya Kreasindo Utama</option>
                                                <option <?php if ($career->location == 'PT Padma Soode Indonesia & PT Covac Indonesia') {
                                                            echo "selected";
                                                        } ?> value='PT Padma Soode Indonesia & PT Covac Indonesia'>PT Padma Soode Indonesia & PT Covac Indonesia</option>
                                                <option <?php if ($career->location == 'PT Senjaya Soode Precision') {
                                                            echo "selected";
                                                        } ?> value='PT Senjaya Soode Precision'>PT Senjaya Soode Precision</option>
                                                <option <?php if ($career->location == 'PT Ciptajaya Kreasindo Utama & PT Senjaya Soode Precision') {
                                                            echo "selected";
                                                        } ?> value='PT Ciptajaya Kreasindo Utama & PT Senjaya Soode Precision'>PT Ciptajaya Kreasindo Utama & PT Senjaya Soode Precision</option>
                                                <option <?php if ($career->location == 'Padma Soode Indonesia Group') {
                                                            echo "selected";
                                                        } ?> value='Padma Soode Indonesia Group'>Padma Soode Indonesia Group</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="jabatan">Applicant Limit *</label>
                                            <input type="number" class="form-control" name="limit" value="<?php echo $career->limit ?>">
                                        </div>
                                    </div>

                                    <!-- <div class="form-group">
                                    <label for="location">Location :</label>
                                    <textarea class="form-control" name="location" placeholder="Location" required><?php echo $career->location ?></textarea>
                                </div> -->

                                    <label>Close Date : *</label>
                                    <div class="form-row">
                                        <div class="input-group col-md-12">
                                            <input type="date" class="form-control" name="close" placeholder="Close Date" value="<?php echo $career->close ?>" required></input>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="col-md-12 d-flex justify-content-center">
                                        <a href="<?php echo site_url('pintumasuk/job_vacancy/') ?>" class="btn btn-secondary"> Back</a>
                                        <input class="btn btn-primary ml-2" type="submit" name="btn" value="Save" />
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript">
        $('.datepickerCloseDate').datepicker({
            format: 'yyyy-mm-dd',
            // format: 'dd-M-yyyy',
            todayHighlight: true,
            todayHighlight: true,
        });

        $('.addingCalendarCloseDate').on("click", function(e) {
            console.log("clicked");
            $('.datepickerCloseDate').focus();
        });
    </script>