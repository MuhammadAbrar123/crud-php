<?php 

if(isset ($_POST['btn'])){

    $ID=$_POST['id'];

    $name=$_POST['name'];
    $marks=$_POST['marks'];

 /* This code is updating the data of a student in a MySQL database table named `student_pbl`. The
 `mysqli_connect()` function is used to establish a connection with the MySQL server, and
 `mysqli_select_db()` function is used to select the database. The `` variable contains an SQL
 statement that updates the `name` and `marks` fields of a student with a specific `id`. The
 `header()` function is used to redirect the user to another page after the data has been updated in
 the database. */
    $conn=  mysqli_connect("localhost","root","");

    mysqli_select_db($conn, "university");
   
    $query= "UPDATE `student_pbl` SET `name`='$name',`marks`='$marks' WHERE  `id`=$ID";
   
 $students= mysqli_query($conn, $query);
/* `header('location:idex.php');` is redirecting the user to the `idex.php` page after the form has
been submitted and the data has been updated in the database. */
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

<input type="text" name="id" placeholder="ID"> <br><br>

<input type="text" name="name" placeholder="Name"> <br><br>

<input type="text" name="marks" placeholder="Marks"> <br><br>

<button type="submit" name="btn">Update</button>

</body>
</html>