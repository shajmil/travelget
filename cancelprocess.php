<?php
include 'connect.php';
$a=$_GET['id'];

$query="delete from bookings where id='$a'";
$res=mysqli_query($link,$query);
if($res)
{
    ?>
    <script language="javascript">alert('cancellation success');window.location.replace('home.php');</script>
    <?php
}

else
{
    ?>
     <script language="javascript">alert('cancellation  failed');window.location.replace('contact.php');</script>
    <?php



}
?>


 