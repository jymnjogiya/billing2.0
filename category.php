<?php
include './dbconnect.php';

// for insertion from the category form
if (isset($_POST['cat-save'])) {
    $catName = $_POST['cat-name'];
    $catRemark = $_POST['cat-remark'];
    $insertQueryCategories = "INSERT INTO `category`( `cat_name`, `cat_remark`) VALUES ('$catName','$catRemark')";
    mysqli_query($con, $insertQueryCategories);
}

// for insertion from the product form
if (isset($_POST['prod-save'])) {
    $prodName = $_POST['prod-name'];
    $prodCategory = $_POST['prod-category'];
    $prodUnit = $_POST['prod-unit'];
    $prodSize = $_POST['prod-size'];
    $prodQuantity = $_POST['prod-quantity'];
    $prodRemark = $_POST['prod-remark'];
    $insertQueryProduct = "INSERT INTO `product`( `prod_name`, `prod_cat`, `prod_unit`, `prod_size`, `prod_quantity`, `prod_remarks`) VALUES ('$prodName','$prodCategory','$prodUnit','$prodSize','$prodQuantity','$prodRemark')";
    mysqli_query($con, $insertQueryProduct);
}

//for selection from db of category Table
$selectionCategory = mysqli_query($con, "SELECT * FROM `category`");

// for selection from db of product table
$selectionProduct = mysqli_query($con, "SELECT `prod_id`, `prod_name`, `cat_name`, `prod_unit`, `prod_size`, `prod_quantity`, `prod_remarks` FROM `product`,`category` WHERE prod_cat=category.cat_id")

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
            <a href="./customersList.php">Customer List</a>
            <a href="#">Products List</a>
            <a href="#">InVoice Bill</a>
        </div>

        <div class="pro-cat">
            <div class="content" id="category-content-div">
                <div class="section-one ">
                    <div class="head">
                        <h1>Category Details</h1>
                        <button class="add" id="category-add">Add</button>
                    </div>
                    <!-- Category form -->
                    <form action="#" id="category-form" class="grid-form hidden" method="POST">
                        <div class="input">
                            <label for="name">Name:</label>
                            <input type="text" placeholder="Enter name" name="cat-name" required><br><br>
                        </div>
                        <div class="input">
                            <label for="remark">Remarks:</label>
                            <input type="text" name="cat-remark" placeholder="Enter remarks"><br><br>
                        </div>
                        <input type="submit" class="button" value="Save" name="cat-save">
                    </form>

                    <!-- Category Table -->
                    <table class="content-table cust-table table-margin" id="category-table">
                        <tr>
                            <th>Sr. No</th>
                            <th>Name</th>
                            <th>Remarks</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        $index = 0;
                        while ($row = mysqli_fetch_array($selectionCategory)) {
                        ?>
                            <tr>
                                <td><?php echo ++$index ?></td>
                                <td><?php echo $row['cat_name'] ?></td>
                                <td><?php echo $row['cat_remark'] ?></td>
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

            <!-- For product list -->
            <div class="content" id="product-list-div">
                <div class="section-one ">
                    <div class="head">
                        <h1>Product Details</h1>
                        <button class="add" id="product-add">Add</button>
                    </div>
                    <!-- Product form -->
                    <form action="#" id="product-form" class="grid-form hidden" method="POST">
                        <div class="input">
                            <label for="name">Name:</label>
                            <input type="text" placeholder="Enter name" name="prod-name" required><br><br>
                        </div>
                        <div class="input">
                            <label>Category:</label><br>
                            <select name="prod-category">
                                <option value="">--- Select ---</option>
<<<<<<< HEAD

                                <?php
                                while ($rows = mysqli_fetch_array($selectionCategory)) {
=======
                                <option value="">hello</option>

                                <?php
                                $selectionCat = mysqli_query($con, "SELECT * FROM `category`");
                                while ($rows = mysqli_fetch_array($selectionCat)) {    
>>>>>>> ef2776e47e09e6635be16ab4e82834e06d86085a
                                ?>
                                    <option value="<?php echo $rows['cat_id'] ?>"><?php echo $rows['cat_name'] ?></option>
                                <?php  } ?>
                            </select>
                            <!-- <input type="text" placeholder="Enter Category" name="prod-category" required><br><br> -->
                        </div>
                        <div class="input">
                            <label>Unit:</label>
                            <input type="text" placeholder="Enter unit" name="prod-unit" required><br><br>
                        </div>
                        <div class="input">
                            <label>Size:</label>
                            <input type="text" placeholder="Enter size" name="prod-size" required><br><br>
                        </div>
                        <div class="input">
                            <label>Quantity:</label>
                            <input type="text" placeholder="Enter quantity" name="prod-quantity" required><br><br>
                        </div>
                        <div class="input">
                            <label>Remarks:</label>
                            <input type="text" placeholder="Enter remarks" name="prod-remark" required><br><br>
                        </div>

                        <input type="submit" class="button" value="Save" id="prod-save" name="prod-save">


                    </form>

                    <!-- Product Table -->
                    <table class="content-table cust-table table-margin" id="product-table">
                        <tr>

                            <th>Sr. No</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Unit</th>
                            <th>Size</th>
                            <th>Qty</th>
                            <th>Remarks</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        $index = 0;
                        while ($row = mysqli_fetch_array($selectionProduct)) {
                        ?>
                            <tr>
                                <td><?php echo ++$index ?></td>
                                <td><?php echo $row['prod_name'] ?></td>
                                <td><?php echo $row['cat_name'] ?></td>
                                <td><?php echo $row['prod_unit'] ?></td>
                                <td><?php echo $row['prod_size'] ?></td>
                                <td><?php echo $row['prod_quantity'] ?></td>
                                <td><?php echo $row['prod_remarks'] ?></td>
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



    </div>

    <script src="./category.js"></script>
</body>

</html>