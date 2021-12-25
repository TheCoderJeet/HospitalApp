<?php 
$this->load->view('header');
?>
<div class="container mt-1 pb-5">
    <div class="row">
        <div class="left bg-success col-12 col-md-2 pt-3" style="min-height: 500px">
            <h6 class="mb-3 text-light">
                Dr. Dheeraj Bamniya Block Medical Officer
            </h6>
            <h6 class="mb-3 text-light">
                Dr. Ashwin Varma Medical Officer
            </h6>
        </div>
        <?php $this->load->view($v); ?>
        <div class="right bg-success col-12 col-md-2 pt-3" style="min-height: 500px">
            <h6 class="mb-3 text-light">
                Total OPD: <span class="blink_me">
                    <?php 
                        $this->db->select('*');
                        $query = $this->db->get('opdpatients');
                        echo $query->num_rows();
                    ?>
                </span>
            </h6>
            <h6 class="mb-3 text-light">
                Total IPD: <span class="blink_me">
                    <?php 
                        $this->db->select('*');
                        $query = $this->db->get('ipdpatients');
                        echo $query->num_rows();
                    ?>
                </span>
            </h6>
            <h6 class="mb-3 text-light">
                Total MLC: <span class="blink_me">
                    <?php 
                        $this->db->select('*');
                        $query = $this->db->get('mlcpatients');
                        echo $query->num_rows();
                    ?>
                </span>
            </h6>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>