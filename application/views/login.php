<?php ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 m-auto">
            <form class="p-5 login-form" method="post" action="<?php echo base_url(); ?>login">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" />
                    <span class="text-warning"><?php echo form_error('username'); ?></span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" />
                    <span class="text-warning"><?php echo form_error('password'); ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" name="insert" value="Login" class="btn btn-dark font-weight-bold btn-block" />
                    <div class="text-warning"><?php echo  $this->session->flashdata('msg'); ?> </div>
                </div>
            </form>
        </div>
    </div>
</div>