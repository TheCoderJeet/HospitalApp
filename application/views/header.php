<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhangwanpura CHC</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" crossorigin="anonymous">
    <?php if ($this->session->userdata('username') == '') { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/logoutspecific.css">
    <?php } else { ?>
    <?php } ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>

<body>

    <header class="text-center header">
        <div class="container border border-success">
            <div class="top-header">
                <div class="logo-left">
                    <img src="<?php echo base_url(); ?>images/logo1.jpg" alt="MP Govt." />
                </div>
                <div class="header-middle">
                    <h2 class="font-weight-bold">
                        रोगी कल्याण समिति, सामुदायिक स्वास्थ्य केन्द्र <br /><strong class="f50"><span
                                class="text-danger">&#10009;</span> भगवानपुरा <span
                                class="text-danger">&#10009;</span></strong>
                    </h2>
                    <h2>
                        जिला-खरगोन (म. प्र.)
                    </h2>
                </div>
                <div class="logo-right">
                    <img src="<?php echo base_url(); ?>images/logo2.jpg" alt="National Health Mission" />
                </div>
            </div>
        </div>


        <div class="container p-0 position-relative">
            <div class="main-menu">
                <ul>
                    <li><a href="<?php echo base_url() ?>search-opd-patients" class="bg-success">Search</a></li>
                    <li><a href="<?php echo base_url() ?>add-opd-patients" class="bg-secondary">OPD</a></li>
                    <li><a href="<?php echo base_url() ?>search-opd-patients" class="bg-danger">IPD</a></li>
                    <li><a href="<?php echo base_url() ?>add-mlc-patients" class="bg-warning">MLC</a></li>
                    <li><a href="<?php echo base_url() ?>profile" class="bg-primary">Profile</a>
                        <ul>
                            <li>
                                <a href="<?php echo base_url() ?>update-user">Update Login</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="account-trigger">
                <?php if ($this->session->userdata('username') == '') { ?>
                <?php } else { ?>
                <span class="text-success justify-self-end ml-auto font-weight-bold" style="font-size:16px;">Hi
                    <?php echo $this->session->userdata('username'); ?></span>
                <?php } ?>
                <?php if ($this->session->userdata('username') == '') { ?>
                <?php } else { ?>
                <span class="ml-auto" style="right:0;font-size:14px;"><a href="<?php echo base_url(); ?>logout"
                        class="btn btn-sm btn-dark">Logout</a></span>
                <?php } ?>
            </div>

        </div>
    </header>
    <div class="container text-danger mt-1 p-0">
        <marquee>
            <p style="font-family: Impact; font-size: 18pt;font-weight: bold">&#10009; रोगी कल्याण समिति, सामुदायिक
                स्वास्थ्य
                केन्द्र, भगवानपुरा &#10009;
            </p>
        </marquee>
    </div>