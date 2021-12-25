<?php
	include_once "header.php";
?>

<div class="col-12 col-md-8">
    <h1 class="mb-5 text-center">Search OPD Patient</h1>
    <form method="post" action="<?php echo base_url(); ?>search-result" class="shadow p-3 patient-entry-form">

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label>Patient OPD ID</label>
                    <input type="number" id="search" class="form-control" name="search" value="" />
                </div>
            </div>
        </div>
        <!--Form Group End-->
        <?php
              if (!empty($row)) { ?>
        <input type="submit" name="update" value="Update Data" class="btn btn-success" />
        <?php } else { ?>
        <input type="submit" name="save" value="Search" class="btn btn-success" />
        <?php } ?>

        <div><?php echo  $this->session->flashdata('msg'); ?> </div>

    </form>
</div>