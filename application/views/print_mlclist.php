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
            <thead>
                <tr>
                    <td>Date</td>
                    <th>MLC ID</th>
                    <th>Full Name</th>
                    <th>Father/Husband</th>
                    <th>Disease</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $row) { ?>
                <tr>
                    <td><?php echo $row->date; ?></td>
                    <td><?php echo $row->mlcid; ?></td>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->fatherORhusband; ?></td>
                    <td><?php echo $row->disease; ?></td>
                    <td><?php echo $row->address; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>