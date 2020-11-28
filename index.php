
<?php


    $insert = false;

    // Set connection variables
    if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
     // echo "Success connecting to the db";
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $crop_name = $_POST['crop_name'];
     $address = $_POST['address'];
     $crop_details = $_POST['crop_details'];
    
                                                           


     $sql = " INSERT INTO `farmer`.`t1` (`name`, `email`, `phone`, `crop name`, `address`, `crop details`) VALUES ('$name', '$email', '$phone', '$crop_name', '$address', '$crop_details'); ";
    
    //echo $sql;
    if($con->query($sql) == true){
        //echo "successful inserted to database";
        
        // Flag for successful insertion
        $insert = true;
       // header("Location:table.php");
    }
    else{
        echo "ERROR: $sql <br> $con->error";

    }
    $con->close();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>



<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <script>

swal({
  title: "Success!",
  text: "Your work has been saved",
  type: "success",
  timer: 700,
  showConfirmButton: false
}, function(){
      window.location.href = "table2.php";
});
</script>

</body>
</html>

