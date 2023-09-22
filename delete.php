<?php 
if(isset ($_POST['btn'])){

    $name=$_POST['name'];
    // $marks=$_POST['marks'];

    $conn=  mysqli_connect("localhost","root","");
/* This code is deleting a record from the "student_pbl" table in the "university" database using the
mysqli extension in PHP. */

    mysqli_select_db($conn, "university");
   
    $query= "DELETE FROM `student_pbl` WHERE `student_pbl`.`id` = $name;";
   
 $students= mysqli_query($conn, $query);
 header('location:idex.php');


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">

<input type="text" name="name" placeholder="ID"> <br><br>



<button type="submit" name="btn">delete</button>


</form>
</body>
</html>