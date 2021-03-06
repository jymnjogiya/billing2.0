<?php
session_start();
if($_SESSION['islogged'] == false){
    header('Location: ./login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="screen">

        <div class="nav">
            <a href="#">Dashboard</a>
            <a href="./customersList.php">Customer List</a>
            <a href="./category.php">Products List</a>
            <a href="#">InVoice Bill</a>
        </div>
        <div class="content">
            <div class="section-one">
                <h1>Payment Details</h1>
                <div class="card">
                    <h2 class="card-text">Payment Due From Client</h2>
                    <h2 class="card-text">1,00,000</h2>
                    <button class="card-button">Check Details</button>
                </div>
                <div class="card" id="paymentDueTo">
                    <h2 class="card-text">Payment Due To Client</h2>
                    <h2 class="card-text">1,00,000</h2>
                    <button class="card-button">Check Details</button>
                </div>
            </div>
            <div class="section-two">
                <h1>Stocks Details</h1>
                <table class="content-table table-margin">
                    <tr>
                        <th>Sr. No</th>
                        <th>Category</th>
                        <th>Product Name</th>
                        <th>Size</th>
                        <th>Qty</th>

                        <th>Actions</th>
                    </tr>
                    </tr>
                    <tr>
                        <td>1 </td>
                        <td>Sheets </td>
                        <td>Aluminium-35mic-0.8mm</td>
                        <td>1024 X 1024</td>
                        <td>1000 </td>

                        <td>
                            <button class="btn btn-edit">EDIT</button>
                            <button class="btn btn-del">DELETE</button>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>

                        <td>
                            <button class="btn btn-edit">EDIT</button>
                            <button class="btn btn-del">DELETE</button>
                        </td>
                    </tr>


                </table>

            </div>

        </div>
    </div>
</body>

</html>