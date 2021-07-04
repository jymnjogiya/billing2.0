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
                    <form action="#" id="category-form" class="grid-form hidden">
                        <div class="input">
                            <label for="name">Name:</label>
                            <input type="text" placeholder="Enter name" name="name" required><br><br>
                        </div>
                        <div class="input">
                            <label for="remark">Remarks:</label>
                            <input type="text" name="remark" placeholder="Enter remarks"><br><br>
                        </div>

                        <input type="submit" class="button" value="Save">

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
                        <tr>
                            <td>1 </td>
                            <td>Sheets </td>
                            <td>copper clad sheets</td>
                            <td>
                                <i class="fas fa-pencil-alt"></i>
                            </td>
                            <td>
                                <i class="fas fa-trash-alt"></i>
                            </td>
                        </tr>

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
                    <form action="#" id="product-form" class="grid-form hidden">
                        <div class="input">
                            <label for="name">Name:</label>
                            <input type="text" placeholder="Enter name" name="name" required><br><br>
                        </div>
                        <div class="input">
                            <label>Category:</label>
                            <input type="text" placeholder="Enter Category" name="ctgy" required><br><br>
                        </div>
                        <div class="input">
                            <label>Unit:</label>
                            <input type="text" placeholder="Enter unit" name="unit" required><br><br>
                        </div>
                        <div class="input">
                            <label>Size:</label>
                            <input type="text" placeholder="Enter size" name="sze" required><br><br>
                        </div>
                        <div class="input">
                            <label>Quantity:</label>
                            <input type="text" placeholder="Enter quantity" name="qty" required><br><br>
                        </div>
                        <div class="input">
                            <label>Remarks:</label>
                            <input type="text" placeholder="Enter remarks" name="remark" required><br><br>
                        </div>

                        <input type="submit" class="button" value="Save" id="prod-save">


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
                        <tr>
                            <td>1 </td>
                            <td>XPC</td>
                            <td>Sheets</td>
                            <td>nos </td>
                            <td>1024*1024 </td>
                            <td>1000 </td>
                            <td>XPC 35micro-1.5MM</td>
                            <td>
                                <i class="fas fa-pencil-alt"></i>
                            </td>
                            <td>
                                <i class="fas fa-trash-alt"></i>
                            </td>
                        </tr>

                    </table>

                </div>

            </div>
        </div>



    </div>

    <script src="./category.js"></script>
</body>

</html>