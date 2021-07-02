<?php
include_once './dbconnect.php';

// query for fetching

$sql = "SELECT * FROM customers";

$selections = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Customer Details</title>
</head>

<body>
    <div class="nav">
        <a href="./dashboard.html">Dashboard</a>
        <a href="#">Customer List</a>
        <a href="#">Products List</a>
        <a href="#">InVoice Bill</a>
    </div>
    <div class="content">

        <div class="section-one">
            <h1>Customers Details</h1>
            <table class="content-table table-margin">
                <tr>
                    <th>Sr. No</th>
                    <th>Company Name</th>
                    <th>Customer Name</th>
                    <th>Mo. Number</th>
                    <th>GST No.</th>
                    <!-- Why i cant add bank field. it is making table disapper-->
                    <th>Bank</th>
                    <th>Actions</th>
                </tr>
                <?php
                $index = 0;
                while ($row = mysqli_fetch_array($selections)) {
                ?>
                    <tr>
                        <td><?php echo ++$index ?></td>
                        <td><?php echo $row['company_name'] ?></td>
                        <td><?php echo $row['customer_name'] ?></td>
                        <td><?php echo $row['mobile'] ?></td>
                        <td><?php echo $row['GST'] ?></td>
                        <td><?php echo $row['bank'] ?></td>
                        <td>
                            <button class="btn btn-edit">EDIT</button>
                            <button class="btn btn-del">DELETE</button>
                        </td>
                    </tr>

                <?php  } ?>
                <!-- <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>
                        <button class="btn btn-edit">EDIT</button>
                        <button class="btn btn-del">DELETE</button>
                    </td>
                </tr> -->


            </table>

        </div>

    </div>
</body>

</html>