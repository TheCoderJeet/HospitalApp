    <div class="col-12 col-md-8">
        <h1 class="mb-5 position-relative text-danger d-flex">&#10009; OPD Patients</h1>
        <div class="row">
            <div class="col-6">
                <strong>View data by days</strong>
                <form method="post" action="<?php echo base_url(); ?>opd-patients-list">
                    <select class="form-control d-inline-block w-50" name="filterBy">
                        <option value="0">Choose</option>
                        <option value="1">1 Days</option>
                        <option value="7">7 Days</option>
                        <option value="30">30 Days</option>
                        <option value="365">1 Year</option>
                    </select>
                    <input class="btn btn-success" type="submit" value="Apply" name="filter" />
                </form>
            </div>
            <div class="col-6 text-right"><a href="<?php echo base_url(); ?>profile"
                    class="btn btn-sm btn-secondary">Back to choose list</a></div>
        </div>


        <table class="table table-hover table-bordered table-dark shadow-lg mt-3">
            <thead>
                <tr>
                    <th>OPD ID</th>
                    <th>Full Name</th>
                    <th>Father/Husband</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $row) { ?>
                <tr>
                    <td><?php echo $row->opdid; ?></td>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->fatherORhusband; ?></td>
                    <td class="text-right">
                        <button type="button" class="btn btn-info" data-toggle="modal"
                            data-target="<?php echo !empty($this->session->userdata('username')) ? '#viewModal' . $row->id . '' :  '#LoginModal' ?>">
                            View
                        </button>
                        <!-- <button type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="<?php // echo !empty($this->session->userdata('username')) ? '#exampleModal' . $row->id . '' :  '#LoginModal' ?>">
                            Delete
                        </button> -->


                        <!-- <div class="modal fade" id="<?php // echo 'exampleModal' . $row->id . '' ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Patient</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-left text-danger font-weight-bold">
                                        Are you sure you want to delete this patient from database?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary dismiss"
                                            data-dismiss="modal">Close</button>
                                        <button type='button' class='btn btn-danger btn-sm delete'
                                            data-id='<?php // echo $row->id ?>'>Yes Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="modal fade" id="<?php echo 'viewModal' . $row->id . '' ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="exampleModalLabel">Patient Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-left infoModal">
                                        <h4>OPD Id:</h4>
                                        <p><?php echo $row->opdid; ?></p>
                                        <h4>Name:</h4>
                                        <p><?php echo $row->name; ?> <?php echo $row->fatherORhusband; ?></p>
                                        <h4>Patient Type:</h4>
                                        <p><?php echo $row->patient; ?></p>
                                        <h4>Address:</h4>
                                        <p><?php echo $row->address; ?></p>
                                        <h4>Date:</h4>
                                        <p><?php echo $row->date; ?></p>
                                        <h4>Age:</h4>
                                        <p><?php echo $row->age; ?></p>
                                        <h4>Gender:</h4>
                                        <p><?php echo $row->gender; ?></p>
                                        <h4>Disease:</h4>
                                        <p><?php echo $row->disease; ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary dismiss"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td>Print data:<form method="post" action="<?php echo base_url(); ?>opd-patients-list">
                            <select class="form-control d-inline-block w-50" name="filterBy">
                                <option value="0">Choose</option>
                                <option value="1">1 Days</option>
                                <option value="7">7 Days</option>
                                <option value="30">30 Days</option>
                                <option value="365">1 Year</option>
                            </select>
                            <input class="btn btn-sm btn-light border-secondary" type="submit" value="Print"
                                name="printopd" />
                        </form>
                    </td>
                    <td></td>
                    <td class="text-right"></td>
                    <td class="text-right"><a href="<?php echo base_url() ?>add-opd-patients"
                            class="btn btn-success btn-lg"> Add New Patient</a></td>
                </tr>
            </tbody>
        </table>
        <div class="pagination"><?php echo $links; ?></div>
    </div>

    <!--Login Modal-->

    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url(); ?>login">
                        <div class="form-group">
                            <label>Enter Username</label>
                            <input type="text" name="username" class="form-control" />
                            <span class="text-danger"><?php echo form_error('username'); ?></span>
                        </div>
                        <div class="form-group">
                            <label>Enter Password</label>
                            <input type="password" name="password" class="form-control" />
                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="insert" value="Login" class="btn btn-info" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>