<?php
include './dbconnect.php';

//varaible for category
$catUpdate = false;
$catName = "";
$catRemark = "";
$catId = 0;

//variable for product
$proUpdate = false;
$proName = "";
$proUnit = "";
$proSize = "";
$proQty = "";
$proRemark = "";
$proId = 0;


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
$selectionProduct = mysqli_query($con, "SELECT `prod_id`, `prod_name`, `cat_name`, `prod_unit`, `prod_size`, `prod_quantity`, `prod_remarks`,product.isDeleted FROM `product`,`category` WHERE prod_cat=category.cat_id");

// for edit of the cat form fields
if (isset($_GET['catEdit'])) {

    $catId = $_GET['catEdit'];
    $catUpdate = true;
    $record = mysqli_query($con, "SELECT * FROM category WHERE cat_id=$catId");
    $row = mysqli_num_rows($record);
    if ($row == 1) {
        $rec = $record->fetch_array();
        $catName = $rec['cat_name'];
        $catRemark = $rec['cat_remark'];
    }
}
// for update cat


if (isset($_POST['cat-update'])) {

    $catId = $_POST['catId'];
    $catName = $_POST['cat-name'];
    $catRemark = $_POST['cat-remark'];
    
    mysqli_query($con, "UPDATE `category` SET `cat_name`='$catName',`cat_remark`='$catRemark' WHERE cat_id='$catId'");
    header('location: ./category.php');
}

//for delete cat
if (isset($_GET['catDel'])) {

    $catId = $_GET['catDel'];
    // echo $id;
    $query = "UPDATE category SET isDeleted = 1 WHERE cat_id='$catId'";
    if (mysqli_query($con, $query)) {
        echo "<script>alert('deleted')</script>";
    } else {
    }
    header('location: ./category.php');
}

// for edit of the pro form fields
if (isset($_GET['proEdit'])) {

    $proId = $_GET['proEdit'];
    $proUpdate = true;
    $record = mysqli_query($con, "SELECT * FROM product WHERE prod_id=$proId");
    $row = mysqli_num_rows($record);
    if ($row == 1) {
        $rec = $record->fetch_array();
        $proName = $rec['prod_name'];
        $proUnit = $rec['prod_unit'];
        $proSize = $rec['prod_size'];
        $proQty = $rec['prod_quantity'];
        $proRemark = $rec['prod_remarks'];
    }
}

// for update prod
if (isset($_POST['prod-update'])) {

    $proId = $_POST['proId'];
    $proName = $_POST['prod-name'];
    $proUnit = $_POST['prod-unit'];
    $proSize = $_POST['prod-size'];
    $proQty = $_POST['prod-quantity'];
    //note :- remark is not updating!!!!
    $proRemark = $_POST['prod-remark'];
    $proCat = $_POST['prod-category'];
    
    mysqli_query($con, "UPDATE `product` SET `prod_name`='$proName',`prod_cat`='$proCat',`prod_unit`='$proUnit',`prod_size`='$proSize',`prod_quantity`='$proQty',`prod_remarks`='$proRemark' WHERE `prod_id` = '$proId'");
    header('location: ./category.php');
}

//for delete prod
if (isset($_GET['proDel'])) {

    $proId = $_GET['proDel'];
    // echo $id;
    $query = "UPDATE product SET isDeleted = 1 WHERE prod_id='$proId'";
    if (mysqli_query($con, $query)) {
        echo "<script>alert('deleted')</script>";
    } else {
    }
    header('location: ./category.php');
}


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
                    <form action="" id="category-form" class="grid-form hidden" method="POST"
                    style="display: <?php if ($catUpdate == true) echo "grid" ?>  ">
                    <input type="hidden" name="catId" value="<?php echo $catId; ?>">
                    
                        <div class="input">
                            <label for="name">Name:</label>
                            <input type="text" placeholder="Enter name" name="cat-name" value="<?php echo $catName ?>" required><br><br>
                        </div>
                        <div class="input">
                            <label for="remark">Remarks:</label>
                            <input type="text" name="cat-remark" placeholder="Enter remarks" value="<?php echo $catRemark ?>"><br><br>
                        </div>
                        <?php if ($catUpdate == true) : ?>
                        <input type="submit" class="button" id="submit" name="cat-update" value="Update">
                        <?php else :  ?>
                        <input type="submit" class="button" id="submit" name="cat-save" value="Save">
                        <?php endif ?>
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
                            if ($row['isDeleted'] == 0) {
                        ?>
                                <tr>
                                    <td><?php echo ++$index ?></td>
                                    <td><?php echo $row['cat_name'] ?></td>
                                    <td><?php echo $row['cat_remark'] ?></td>
                                    <td>
                                        <a href="./category.php?catEdit=<?php echo $row['cat_id']; ?>"> <i class="fas fa-pencil-alt"></i></a>
                                    </td>
                                    <td>
                                        <a href="./category.php?catDel=<?php echo $row['cat_id']; ?>"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
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
                    <form action="#" id="product-form" class="grid-form hidden" 
                    style="display: <?php if ($proUpdate == true) echo "grid" ?>" method="POST">
                    <input type="hidden" name="proId" value="<?php echo $proId; ?>">
                        <div class="input">
                            <label for="name">Name:</label>
                            <input type="text" placeholder="Enter name" name="prod-name" value="<?php echo $proName ?>" required><br><br>
                        </div>
                        <div class="input">
                            <label>Category:</label><br>
                            <select name="prod-category">
                                <option value="">--- Select ---</option>
                                <?php
                                $selectionCat = mysqli_query($con, "SELECT * FROM `category`");
                                while ($rows = mysqli_fetch_array($selectionCat)) {
                                ?>
                                    <option value="<?php echo $rows['cat_id'] ?>"><?php echo $rows['cat_name'] ?></option>
                                <?php  } ?>
                            </select>
                            <!-- <input type="text" placeholder="Enter Category" name="prod-category" required><br><br> -->
                        </div>
                        <div class="input">
                            <label>Unit:</label>
                            <input type="text" placeholder="Enter unit" name="prod-unit" value="<?php echo $proUnit ?>" required><br><br>
                        </div>
                        <div class="input">
                            <label>Size:</label>
                            <input type="text" placeholder="Enter size" name="prod-size" value="<?php echo $proSize ?>" required><br><br>
                        </div>
                        <div class="input">
                            <label>Quantity:</label>
                            <input type="text" placeholder="Enter quantity" name="prod-quantity" value="<?php echo $proQty ?>" required><br><br>
                        </div>
                        <div class="input">
                            <label>Remarks:</label>
                            <input type="text" placeholder="Enter remarks" name="prod-remark"
                            value="<?php echo $proRemark ?>" required><br><br>
                        </div>

                      
                        <?php if ($proUpdate == true) : ?>
                        <input type="submit" class="button" id="submit" name="prod-update" value="Update">
                        <?php else :  ?>
                        <input type="submit" class="button" id="submit" name="prod-save" value="Save">
                        <?php endif ?>

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
                            if ($row['isDeleted'] == 0) {
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
                                        <a href="./category.php?proEdit=<?php echo $row['prod_id']; ?>"> <i class="fas fa-pencil-alt"></i></a>
                                    </td>
                                    <td>
                                        <a href="./category.php?proDel=<?php echo $row['prod_id']; ?>"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                        <?php  }
                        } ?>

                    </table>

                </div>

            </div>
        </div>



    </div>

    <script src="./category.js"></script>
</body>

</html>