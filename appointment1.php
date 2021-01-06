<?php 

if (!isset($_SESSION))
{
session_start();
}
include_once 'includes/dbh.php';
		if (isset($_POST['appointment']))
 		{
 			if (isset($_SESSION['username']))
 			{
 				$username=$_POST['appointment'];
 			$uid=$_SESSION['username'];
 			$sql1="SELECT TOKEN FROM doctor where username='$username';";
 			$row1=mysqli_fetch_assoc(mysqli_query($conn,$sql1));
 			$row1['TOKEN']=$row1['TOKEN']+1;
 			$query="INSERT INTO token (token,username,dusername) VALUES ('".$row1['TOKEN']."','$uid','$username');";
 			mysqli_query($conn,$query);
 			$sql2="UPDATE doctor set token=".$row1['TOKEN']." WHERE username='$username';";
 			mysqli_query($conn,$sql2);

 			echo "<script>alert('successfully booked your appointment')</script>";
		echo("<script>window.location = 'index.php';</script>");
 			}
 			
 		}
 		else
 		{
 			echo "<script>alert('you have to login to book your appointment')</script>";
		echo("<script>window.location = 'login.php';</script>");
 		}

 ?>