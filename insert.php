
<?php 
if(isset ($_POST['btn'])){

/* These lines of code are retrieving the values entered in the form input fields with the names "name"
and "marks" using the  superglobal array and storing them in the variables  and 
respectively. */
    $name=$_POST['name'];
    $marks=$_POST['marks'];

    $conn=  mysqli_connect("localhost","root","");

    mysqli_select_db($conn, "university");
   
/* This line of code is creating an SQL query to insert data into a table named `student_pbl` with two
columns `name` and `marks`. The values to be inserted are the variables `` and `` which
are obtained from the form input fields. */
    $query= "INSERT INTO `student_pbl`( `name`, `marks`) VALUES ('$name','$marks')";
   
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

<input type="text" name="name" placeholder="Name"> <br><br>

<input type="text" name="marks" placeholder="Marks"> <br><br>

<button type="submit" name="btn">Insert</button>


</form>


</body>
</html>