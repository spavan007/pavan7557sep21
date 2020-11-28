


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
</head>
<body>
    
<div class="container">
<table class="table table-striped table-border">
<tr>

    <th>NAME</th>
    <th>E-MAIL</th>
    <th>PHONE</th>
    <th>CROP NAME</th>
    <th>ADDRESS</th>
    <th>CROP DETAILS</th>
    
</tr>
<?php
$con = mysqli_connect("localhost" , "root", "", "farmer");
if($con->connect_error){
    die("connection failed:".$con->connect_error);

}

require_once('index.php');
$sql = "SELECT * FROM `t1` ";
$result = $con-> query($sql);



if($result-> num_rows > 0){
while($row = $result->fetch_assoc()){
    echo "<tr>";
    
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['crop name'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['crop details'] . "</td>";
    echo "</tr>";

}
}
else {
    "zero result";
}
$con-> close();
?>

</table>

</div>
</body>
</html>


