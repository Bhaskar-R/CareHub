<?php 
if (!isset($_SESSION))
{
session_start();
}
session_unset();
session_destroy();

echo "<script>alert('you have been logged out successfully')</script>";
echo("<script>window.location = 'index.php';</script>");

 ?>