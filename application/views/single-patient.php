<?php
	include_once "header.php";
?>

<div class="col-12 col-md-8">
    <h1 class="mt-0 mb-5 position-relative text-danger d-flex">&#10009; Search result</h1>
    <table class="table table-hover shadow-sm">
        <thead>
            <tr>
                <th>OPD ID:</th>
                <td><?php echo $record->opdid; ?></td>
            </tr>
            <tr>
                <th>Patient type:</th>
                <td><?php echo $record->patient; ?></td>
            </tr>
            <tr>
                <th>Name:</th>
                <td><?php echo $record->name; ?></td>
            </tr>
            <tr>
                <th>Father/Husband:</th>
                <td><?php echo $record->fatherORhusband; ?></td>
            </tr>
            <tr>
                <th>Date submitted:</th>
                <td><?php echo $record->date; ?></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><?php echo $record->address; ?></td>
            </tr>
            <tr>
                <th>Age:</th>
                <td><?php echo $record->age; ?></td>
            </tr>
            <tr>
                <th>Caste:</th>
                <td><?php echo $record->caste; ?></td>
            </tr>
            <tr>
                <th>Gender:</th>
                <td><?php echo $record->gender; ?></td>
            </tr>
            <tr>
                <th></th>
                <td><?php echo $record->fee; ?></td>
            </tr>
            <tr>
                <td colspan="5" class="text-right">
                    <a href="<?php echo !empty($this->session->userdata('username')) ? site_url('Patient/add_ipd/'.$record->id):'#' ?>"
                        class="btn btn-success btn-lg"> Add Patient to IPD</a>
                </td>
            </tr>
    </table>
</div>