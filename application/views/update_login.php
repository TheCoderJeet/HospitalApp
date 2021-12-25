<?php
	include_once "header.php";
?>

<div class="col-12 col-md-8 text-center">
    <h1 class="mb-5 text-center">Update Username and Password</h1>

    <div class="m-auto d-inline-flex justify-self-center">
        <form method="post" action="<?php echo base_url(); ?>update-user" class="shadow p-3 patient-entry-form">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Username</label>
                        <input type="text" id="username" class="form-control" name="username" value="" />
                    </div>
                    <div class="col-md-6">
                        <label>Enter New Password</label>
                        <input type="password" id="password" class="form-control" name="password" value="" />
                    </div>
                </div>
            </div>
            <!--Form Group End-->
            <input type="submit" name="update" value="Update" class="btn btn-success" />
            <div><?php echo  $this->session->flashdata('msg'); ?> </div>
        </form>
    </div>
</div>