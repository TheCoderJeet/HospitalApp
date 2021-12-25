<?php
	include_once "header.php";
?>

<div class="col-12 col-md-8">
    <h1 class="mb-5 text-center">Add MLC Patient</h1>
    <form method="post" action="<?php echo base_url(); ?>add-mlc-patients" class="shadow p-3 patient-entry-form">

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name of Patient: </label>
                    <input type="text" id="name" class="form-control" name="name"
                        value="<?php echo empty($row) ? '' : $row->name ?>" />
                    <strong class="text-danger"><?php echo form_error('name'); ?></strong>
                </div>
                <div class="col-md-6">
                    <label for="fh">Father/Husband: </label>
                    <input type="text" class="form-control" name="fh" id="fh"
                        value="<?php echo empty($row) ? '' : $row->fatherORhusband ?>" />
                    <strong class="text-danger"><?php echo form_error('fh'); ?></strong></td>
                </div>
            </div>
        </div>
        <!--Form Group End-->
        <div class="form-group">
            <div class="row">

                <div class="col-md-6">
                    <label>Date</label>
                    <input readonly id="date" type="date" name="date" class="form-control"
                        value="<?php echo date('Y-m-d'); ?>" />
                </div>
                <div class="col-md-6">
                    <label for="add">Address</label>
                    <input type="text" class="form-control" name="address" id="add"
                        value="<?php echo empty($row) ? '' : $row->address ?>" />
                    <strong class="text-danger"><?php echo form_error('address'); ?></strong></td>
                </div>

            </div>
        </div>
        <!--Form Group End-->
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label for="age">Age</label>
                    <input type="number" id="age" class="form-control" name="age"
                        value="<?php echo empty($row) ? '' : $row->age ?>" />
                    <strong class="text-danger"><?php echo form_error('age'); ?></strong>
                </div>
                <div class="col-md-3">
                    <label for="caste">Caste: </label>
                    <input type="text" id="caste" class="form-control" name="caste"
                        value="<?php echo empty($row) ? '' : $row->caste ?>" />
                    <strong class="text-danger"><?php echo form_error('caste'); ?></strong>
                </div>
                <div class="col-md-3">
                    <label>Gender</label>
                    <div class="row">
                        <div class="col-md-6 pr-0">
                            <input type="radio" name="gender" value="Male"
                                <?php echo !empty($row) && ($row->gender !== 'Female') ? 'checked' : '';  ?> />
                            Male
                        </div>
                        <div class="col-md-6 p-0">
                            <input type="radio" name="gender" value="Female"
                                <?php echo !empty($row) && ($row->gender !== 'Male') ? 'checked' : ''; ?> />
                            female
                        </div>
                    </div>
                    <strong class="text-danger"><?php echo form_error('gender'); ?></strong>
                </div>
            </div>
        </div>
        <!--Form Group End-->
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label for="age">Disease</label>
                    <input type="text" id="disease" class="form-control" name="disease"
                        value="<?php echo empty($row) ? '' : $row->disease ?>" />
                    <strong class="text-danger"><?php echo form_error('disease'); ?></strong>
                </div>
            </div>
        </div>
        <!--Form Group End-->

        <input type="submit" name="savewithprint" value="Save and Print" class="btn btn-primary  font-weight-bold" />
        <input type="submit" name="save" value="Save Data" class="btn btn-success  font-weight-bold" />
        <input type="reset" name="cancel" value="Cancel" class="btn btn-danger  font-weight-bold" />
        <div><?php echo  $this->session->flashdata('msg'); ?> </div>

    </form>
</div>