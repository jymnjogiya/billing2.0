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
    <div class="screen">

        <div class="nav">
            <a href="./dashboard.php">Dashboard</a>
            <a href="#">Customer List</a>
            <a href="#">Products List</a>
            <a href="#">InVoice Bill</a>
        </div>
        <div class="content">

            <div class="section-one grid form">
                <div class="head">
                    <h1>Customers Details</h1>
                    <button class="add" id="add">Add</button>
                </div>
                <!-- Customer form -->
                <form action="">
                    <div>
                        <label for="">Company name</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Customer name</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Mobile Number</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Email address</label>
                        <input type="email">
                    </div>
                    <div>
                        <label for="">GST No.</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Bank Name</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Bank Number</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Bank IFSC Code</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Address line 1</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Address line 2</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Address line 3</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Website</label>
                        <input type="text">
                    </div>
                    <p>
                        <button class="button">Save</button>
                    </p>
                </form>

                <!-- Customer Table -->
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

                </table>

            </div>

        </div>
    </div>
</body>

</html>