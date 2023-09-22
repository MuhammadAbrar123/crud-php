<?php 
 /* This code is establishing a connection to a MySQL database server using the `mysqli_connect()`
 function and selecting a specific database using the `mysqli_select_db()` function. It then
 executes a SQL query to select all records from a table named `student_pbl` using the
 `mysqli_query()` function and stores the result in a variable named ``. */
 $conn=  mysqli_connect("localhost","root","");

 mysqli_select_db($conn, "university");

 $query= "SELECT * FROM `student_pbl`";

 $students= mysqli_query($conn, $query);

//   print_r($students);










?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>

    

</head>
<body>

<h2>
    Week 8
</h2>

<a href="insert.php"> insert</a>
<a href="delete.php">delete</a>
<a href="update.php">update</a>

<table border="1">
<tr>

<th>id</th>
<th>name</th>
<th>mask</th>



<?php 


/* This is a PHP code block that loops through each record in the `` variable (which contains
the result of a SQL query) using the `mysqli_fetch_array()` function. For each record, it creates an
HTML table row (`<tr>`) and displays the values of the `id`, `name`, and `marks` columns in separate
table cells (`<td>`). This process continues until all records have been displayed in the table. */
while($student=mysqli_fetch_array($students)){?>

<tr>

<td><?php echo $student['id'];?></td>
<td><?php echo $student['name'];?></td>
<td><?php echo $student['marks'];?></td>

</tr>
<?php }?>


</table>



</body>
</html>