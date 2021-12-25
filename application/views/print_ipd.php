<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Print receipt</title>
    <style type="text/css">
    @media print {

        body .header,
        body div.bg-success {
            display: none;
            visibility: hidden;
        }
    }

    #print {
        max-width: 8.5in;
        margin: auto;
    }

    body div.bg-success {
        display: none;
        visibility: hidden;
    }

    #print .table table td {
        padding: 0;
        border: 0;
    }

    #print h5 {
        text-align: center;
        font-size: 18px;
    }

    table {
        margin-bottom: -1px !important;
    }

    table,
    table th,
    table td {
        border-color: #ddd;
        border-width: 0.7px;
        border-style: solid;
        font-size: 14px;
    }

    p {
        margin: 0;
        text-align: center;
    }
    </style>
</head>

<body onload="window.print()">

    <div id="print">
        <h5 class="text-center" style="max-wdth:420px;">
            रोगी कल्याण समिति, सामुदायिक स्वास्थ्य केन्द्र<br />
            <strong"><span class="text-danger">&#10009;</span>
                भगवानपुरा <span class="text-danger">&#10009;</span></strong><br />जिला-खरगोन (म. प्र.)
        </h5>
        <h5 class="my-2 text-center font-weight-bold">
            आतंरिक रोगी विभाग
        </h5>
        <table class="table">
            <tr>
                <td><strong>दिनांक</strong></td>
                <td><?php echo $date ?></td>
                <td colspan="3"><span style="float:right">सहयोग राशि: <?php if($patient == 'General') {
                    echo '40/-';
                } else {
                    echo 'शुन्य';
                } ?></span></td>
            </tr>
            <tr>
                <td><strong>ओपीडी संख्या</strong></td>
                <td><?php echo $opdid ?></td>
                <td><strong>आईपीडी संख्या</strong></td>
                <td><?php echo $last_id->ipdid ?></td>
            </tr>
            <tr>
                <td><strong>रोगी का नाम</strong></td>
                <td><?php echo $name ?></td>
                <td><strong>पिता/पति</strong></td>
                <td><?php echo $fatherORhusband ?></td>
            </tr>
            <tr>
                <td><strong>Address</strong></td>
                <td colspan="3"><?php echo $address ?></td>
            </tr>
            <tr>
                <td colspan="4">
                    <table class="border-0">
                        <tr>
                            <td width="30"><strong>उम्र</strong></td>
                            <td width="30"><?php echo $age ?></td>
                            <td width="40"><strong>लिंग</strong></td>
                            <td width="50"><?php echo $gender ?></td>
                            <td width="30"><strong>रोग</strong></td>
                            <td><?php echo $disease ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div id="details">
            <table cellpadding="10" width="100%">
                <thead>
                    <th>दिनांक:</th>
                    <th colspan="4">
                        <p>यह पर्ची जारी होने के 7 दिन बाद तक वैध है।</p>
                    </th>
                </thead>
                <tr>
                    <td width="150"></td>
                    <td colspan="4" height="500" valign="top">

                    </td>
                </tr>
            </table>
        </div>
    </div>

</body>

</html>