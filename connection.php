<?php
$con= mysqli_connect("localhost","root","","login_db");
if(!$con)
{
    die("Connection to the server not established".mysqli_connect_error());
}
else 
{
    echo "Form successfully submitted";
}
?>
