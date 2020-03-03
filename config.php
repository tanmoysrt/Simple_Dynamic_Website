<?php
$con=mysqli_connect("localhost","database_name","password","table_id") or die("Server Error");
if($con==true)
{
    //echo "Success";
}
else
{
    mysql_close($con);
}
?>