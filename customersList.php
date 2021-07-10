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

    <!-- Icon SRC -->
    <script src="https://kit.fontawesome.com/836db6b2a0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="screen">
        <div class="nav">
            <a href="./dashboard.php">Dashboard</a>
            <a href="#">Customer List</a>
            <a href="./category.php">Products List</a>
            <a href="#">InVoice Bill</a>
        </div>
        <div class="content">
            <div class="section-one ">
                <div class="head">
                    <h1>Customers Details</h1>
                    <button class="add" id="cust-add">Add</button>
                </div>
                <!-- Customer form -->
                <form action="./handleCustomerSubmit.php" method="POST" id="cust-form" class="grid-form hidden">
                    <div>
                        <label for="">Company name</label>
                        <input type="text" name="componyName">
                    </div>
                    <div>
                        <label for="">Customer name</label>
                        <input type="text" name="customerName">
                    </div>
                    <div>
                        <label for="">Mobile Number</label>
                        <input type="text" name="mobileNumber">
                    </div>
                    <div>
                        <label for="">Email address</label>
                        <input type="email" name="emailAddress">
                    </div>
                    <div>
                        <label for="">GST No.</label>
                        <input type="text" name="gstNo">
                    </div>
                    <div>
                        <label for="">Bank Name</label>
                        <input type="text" name="bankName">
                    </div>
                    <div>
                        <label for="">Bank Number</label>
                        <input type="text" name="bankNumber">
                    </div>
                    <div>
                        <label for="">Bank IFSC Code</label>
                        <input type="text" name="bankIfsc">
                    </div>
                    <div>
                        <label for="">Address  1</label>
                        <input type="text" name="address1">
                    </div>
                    <div>
                        <label for="">Address 2</label>
                        <input type="text" name="address2">
                    </div>
                    <div>
                        <label for="">Address 3</label>
                        <input type="text" name="address3">
                    </div>
                    <div>
                        <label for="">Website</label>
                        <input type="text" name="website">
                    </div>
                    <p>
                        <button class="button" type="submit">Save</button>
                    </p>
                </form>

                <!-- Customer Table -->
                <table class="content-table cust-table table-margin" id="cust-table">
                    <tr>
                        <th>Sr. No</th>
                        <th>Company Name</th>
                        <th>Customer Name</th>
                        <th>Mo. Number</th>
                        <th>GST No.</th>
                        <!-- Why i cant add bank field. it is making table disapper-->
                        <th>Bank</th>
                        <th>Edit</th>
                        <th>Delete</th>
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
                                <a href=""> <i class="fas fa-pencil-alt"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fas fa-trash-alt"></i></a>
                            </td>

                        </tr>

                    <?php  } ?>

                </table>

            </div>

        </div>
    </div>
    <script src="./customer.js"></script>
</body>

</html>