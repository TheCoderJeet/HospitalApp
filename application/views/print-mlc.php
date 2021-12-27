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

        #print {
            width: 100%;
            height: 100%;
            margin: auto;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .head {
            height: 80px;
        }
    }

    .head {
        font-weight: bold;
    }

    #print {
        max-width: 100%;
        width: 100%;
        height: 100%;
        margin: auto;
        border-bottom: solid 1px #000;
    }

    #details,
    #details table {
        height: 100%;
    }

    body div.bg-success {
        display: none;
        visibility: hidden;
    }

    #print h2 {
        text-align: center;
    }

    #print .table table {
        width: 100%
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
        border-color: #000 !important;
        border-width: 0.7px;
        border-style: solid;
        font-size: 18px;
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
            एमएलसी रोगी विभाग
        </h5>
        <table class="table">
            <tr>
                <td><strong>एमएलसी संख्या</strong></td>
                <td><?php echo $last_id->mlcid ?></td>
                <td><strong>दिनांक</strong></td>
                <td><?php echo $date ?></td>
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
                            <td width="40"><strong>उम्र</strong></td>
                            <td width="40"><?php echo $age ?></td>
                            <td width="50"><strong>लिंग</strong></td>
                            <td width="70"><?php echo $gender ?></td>
                            <td width="50"><strong>रोग</strong></td>
                            <td><?php echo $disease ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div id="details">
            <table cellpadding="10" width="100%" height="100%">
                <tr>
                    <td class="head">निदान:</td>
                    <td class="head" colspan="4">
                        <p>यह पर्ची जारी होने के 7 दिन बाद तक वैध है।</p>
                    </td>
                </tr>
                <tr>
                    <td width="150"></td>
                    <td colspan="4" valign="top">

                    </td>
                </tr>
            </table>
        </div>
    </div>

</body>

</html>