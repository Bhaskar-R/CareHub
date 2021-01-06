<?php 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
include_once 'dbh.php';
if (isset($_POST['psubmit']))
{

$fname = $_POST['pfirstname'];
$lname = $_POST['plastname'];
$uname = $_POST['pusername'];
$password = $_POST['ppassword'];
$email=$_POST['pemail'];
$age=$_POST['page'];
$mobile=$_POST['pmobile'];
$gender=$_POST['pgender'];
	
		$sql="SELECT USERNAME FROM patient WHERE USERNAME='$uname';";
		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if ($resultcheck>0)
		{
			echo "<script>alert('username is already taken use another username')</script>";
			echo("<script>window.location = 'actualsignup.php?user=patient';</script>");
		}
		else
		{
			$sqlp="SELECT email FROM patient WHERE email='$email'";
			$result1=mysqli_query($conn,$sqlp);
			$resultcheck1=mysqli_num_rows($result1);
			if ($resultcheck1>0)
			{
				echo "<script>alert('email is already taken use another email')</script>";
				echo("<script>window.location = 'actualsignup.php?user=patient';</script>");
			}
			else
			{
				$sql1="INSERT INTO patient (FNAME,LNAME,USERNAME,PASSWORD,EMAIL,gender,age,mobile) VALUES ('$fname','$lname','$uname','$password','$email','$gender','$age','$mobile');";
				echo $sql1;
				$row=mysqli_fetch_assoc(mysqli_query($conn,$sql1));
				print_r($row);
				echo "<script>alert('you have been signed up successfully')</script>";
				echo("<script>window.location = '../index.php';</script>");
			}
		}
	


}
else if (isset($_POST['dsubmit']))
{
$fname = $_POST['dfirstname'];
$lname = $_POST['dlastname'];
$uname = $_POST['dusername'];
$password =$_POST['dpassword'];
$branch=$_POST['branch'];
$email=$_POST['demail'];
$gender=$_POST['dgender'];
$age=$_POST['dage'];
$mobile=$_POST['dmobile'];
$otime=$_POST['otime'];
$ctime=$_POST['ctime'];   

		$sql="SELECT USERNAME FROM doctor WHERE USERNAME='$uname'";
		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if ($resultcheck>0)
		{
			echo "<script>alert('username is already taken use another username')</script>";
			echo("<script>window.location = 'actualsignup.php?user=doctor';</script>");
		}
		else
		{
			$sqlp="SELECT email FROM doctor WHERE email='$email'";
			$result1=mysqli_query($conn,$sqlp);
			$resultcheck1=mysqli_num_rows($result1);
			if ($resultcheck1>0)
			{
				echo "<script>alert('email is already taken use another email')</script>";
				echo("<script>window.location = 'actualsignup.php?user=doctor';</script>");
			}
			else
			{
				$sql1="INSERT INTO doctor (FNAME,LNAME,USERNAME,PASSWORD,EMAIL,branch,gender,age,mobile,otime,ctime) VALUES ('$fname','$lname','$uname','$password','$email','$branch','$gender','$age','$mobile','$otime','$ctime');";
				mysqli_query($conn,$sql1);
				echo "<script>alert('you have been signed up successfully')</script>";
				echo("<script>window.location = '../index.php';</script>");
			}
		}
	
}
else if (isset($_POST['ssubmit']))
{
$fname = $_POST['sfirstname'];
$lname = $_POST['slastname'];
$uname = $_POST['susername'];
$password =$_POST['spassword'];
$email=$_POST['semail'];
$gender=$_POST['sgender'];
$age=$_POST['sage'];
$mobile=$_POST['smobile'];

		$sql="SELECT USERNAME FROM staff WHERE USERNAME='$uname'";
		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if ($resultcheck>0)
		{
			echo "<script>alert('username is already taken use another username')</script>";
			echo("<script>window.location = 'actualsignup.php?user=staff';</script>");
		}
		else
		{
			$sqlp="SELECT email FROM staff WHERE email='$email'";
			$result1=mysqli_query($conn,$sqlp);
			$resultcheck1=mysqli_num_rows($result1);
			if ($resultcheck1>0)
			{
				echo "<script>alert('email is already taken use another email')</script>";
				echo("<script>window.location = 'actualsignup.php?user=staff';</script>");
			}
			else
			{
				$sql1="INSERT INTO staff (FNAME,LNAME,USERNAME,PASSWORD,EMAIL,gender,age,mobile) VALUES ('$fname','$lname','$uname','$password','$email','$gender','$age','$mobile');";
				mysqli_query($conn,$sql1);
				echo "<script>alert('you have been signed up successfully')</script>";
				echo("<script>window.location = '../index.php';</script>");
			}
		}
	
}
