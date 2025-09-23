<?php
require 'connection.php';
if(isset($_POST['save']))
{
    $name= mysqli_real_escape_string($con,$_POST['u_name']);
    $password= mysqli_real_escape_string($con,$_POST['passw']);
}
$query= "INSERT INTO login_form(Uname, password) VALUES ('$name','$password')";
$query_run= mysqli_query($con, $query);

?>  