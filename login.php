<?php
include './dbconnect.php';
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $loginQuery = mysqli_query($con, "SELECT * FROM login WHERE username='$username' AND password='$password'");
    $loginQueryData = mysqli_num_rows($loginQuery);
    if ($loginQueryData == 1) {
        $_SESSION['islogged'] = true;
        header('Location: ./dashboard.php');
    } else {
        echo "<script> alert('User Not Found') </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crm-login</title>
</head>
<style>
    * {
        margin: 0px;
    }

    body {
        display: grid;
        place-items: center;
        min-height: 100vh;
    }

    main {
        display: grid;
        place-items: center;
        height: 40%;
        border: 2px solid black;
        width: 70%;
    }

    main form {
        display: flex;
        flex-direction: column;
    }

    main form input {
        margin: 20px;
        width: 300px;
        height: 30px;
    }

    input:nth-child(3) {
        padding: 2px;
        border: 2px solid black;
        box-shadow: 2px 3px grey;
        width: 80px;
        margin: 20px auto;
        /* margin: 2px; */
    }
</style>

<body>
    <main>
        <h1>Chetumax Sales</h1>
        <form action="" method="POST">

            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <input type="submit" value="Login" name="login">
        </form>
    </main>

</body>

</html>