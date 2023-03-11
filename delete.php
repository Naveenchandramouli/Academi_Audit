<?php
include("db.php");
if (isset($_GET['phone'])) 
{
    $url = mysqli_real_escape_string($conn, $_GET['phone']);
    $sql = "delete from members where phone='$url'";
    mysqli_query($conn, $sql);
    echo "<script>if(confirm('Your Record Sucessfully Deleted!.')){document.location.href='admin.php'};</script>";
}
else
{
    echo '<script> alert("Not Successfully Deleted"); </script>';
}
?>