<?php
//  if(isset($_POST['bankIfsc'])){
//      echo $_POST['bankIfsc'];
//  }
?>



<?php
include './dbconnect.php';
// check if all the form element is set
if(isset($_POST['componyName']) && isset($_POST['customerName']) && isset($_POST['mobileNumber']) && isset($_POST['emailAddress']) && isset($_POST['gstNo']) && isset($_POST['bankName']) && isset($_POST['bankNumber'])  && isset($_POST['address1']) && isset($_POST['address2']) && isset($_POST['address3']) && isset($_POST['website'])){
    echo "yes";
   
    $bank = $_POST['bankName'];
    $componyName = $_POST['customerName'];
    $gstNo = $_POST['gstNo'];
    $mobileNumber = $_POST['mobileNumber'];
    $emailAddress = $_POST['emailAddress'];
    $bankNumber = $_POST['bankNumber'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $address3 = $_POST['address3'];
    $website = $_POST['website'];
    $ifsc = "none";
    $insertCustomerQuery = "INSERT INTO `customers`( `bank`, `compony_name`,`cutomer_name`,`gst`,`mobile`,`email_address`,`bank_number`,`address1`,`address2`,`address3`,`website`,`ifsc`) VALUES ('$bankName','$componyName','$customerName','$gstNo','$mobileNumber','$emailAddress','$bankNumber','$address1','$address2','$address3','$website','$ifsc'";
    mysqli_query($con,$insertCustomerQuery);
    
    echo "yes";
}
else{
    echo "no";
}
?>
