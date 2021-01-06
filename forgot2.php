<?php
include_once 'includes/dbh.php';
if (!isset($_POST['otpsubmit']))
{
goto a;

}
if (isset($_POST['confirm']))
{
	goto b;
}

if (isset($_POST['lsubmit']))
{
		if (empty($_POST['lemail']) || empty($_POST['luser']) || !isset($_POST['user']))
		{

			echo "<script>alert('you have to fill all feilds')</script>";
			echo("<script>window.location = 'forgot.php';</script>");
		}
		else
		{
		$password=$_POST['lemail'];
		$username=$_POST['luser'];
		$type=$_POST['user'];
		if ($type=="patient")
		{
			$sql="SELECT username FROM patient WHERE username='$username' ;";
		}
		else if ($type=="doctor")
		{
			$sql="SELECT username FROM doctor WHERE username='$username' ;";
		}
		else if ($type=="staff")
		{
			$sql="SELECT username FROM staff WHERE username='$username' ;";	
		}
		
		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		print_r(mysqli_fetch_assoc($result));
			if ($resultcheck>0)
			{
				if ($type=="patient")
				{
					$sql1="SELECT email FROM patient WHERE username='$username' ;";
				}
				else if ($type=="doctor")
				{
					$sql1="SELECT email FROM doctor WHERE username='$username' ;";
				}
				else if ($type=="staff")
				{
					$sql1="SELECT email FROM staff WHERE username='$username' ;";	
				}
				$result1=mysqli_query($conn,$sql1);
				$pwd=mysqli_fetch_assoc($result1);
				$pwd2=$pwd['email'];
				echo "dnslc";
				if ($pwd2!=$password)
				{   
					echo "<script>alert('incorrect email')</script>";
					echo("<script>window.location = 'forgot.php';</script>");
				}
				else
				{

					$otp=rand(100000,999999);
					echo $otp;
					$sqlq="UPDATE otp set otp='$otp',username='$username' ,type='$type';";
					mysqli_query($conn,$sqlq);
					if (filter_var($password,FILTER_VALIDATE_EMAIL))
					{
						require 'phpmailer/PHPMailerAutoload.php';
						$mail= new PHPMailer;
						$mail->isSMTP();
						$mail->Host='smtp.gmail.com';
						$mail->Port=587;
						$mail->SMTPAuth=true;
						$mail->SMTPSecure='tls';
						$mail->Username='rhhospitalsofficial@gmail.com';
						$mail->Password='Rhqwerty@123';

						$mail->setFrom('rhhospitalsofficial@gmail.com','RANDOM');
						$mail->addAddress($password);
						$mail->addReplyTo('rhhospitalsofficial@gmail.com');
						
						$mail->isHTML(true);
						$mail->Subject='OTP VERIFICATION';
						$mail->Body="otp VERIFICATION '$otp' ";

						if ($mail->send())
						{
							echo "<script>alert('mail sent successfully')</script>";
							echo"enter the otp sent to your mail here";
							echo("<script>window.location = 'forgot.php?otp=empty';</script>");
							a:
							
								if (isset($_POST['otpsubmit']))
								{
									$otp2=$_POST['otp'];
									$sqlp="SELECT otp from otp limit 1;";
									$resultp=mysqli_query($conn,$sqlp);
									$pwdp=mysqli_fetch_assoc($resultp);
									$otp=$pwdp['otp'];
									if ($otp!=$otp2)
									{
										echo "<script>alert('incorrect otp')</script>";
										echo("<script>window.location = 'forgot.php?otp=empty';</script>");
									}
									else
									{
										c:
										echo("<script>window.location = 'forgot.php?otp=pwd';</script>");
										b:
											if (isset($_POST['confirm']))
											{
												$p1=$_POST['password'];
												$p2=$_POST['repassword'];
												if ($p1!=$p2)
												{
													echo "<script>alert('both passwords must be same')</script>";
													goto c;
												}
												else
												{
													$sqlz="SELECT * from otp limit 1;";
													$resultz=mysqli_query($conn,$sqlz);
													$pwdz=mysqli_fetch_assoc($resultz);
													$username=$pwdz['username'];
													$type=$pwdz['type'];
													if ($type=="patient")
													{
														$sql2="UPDATE patient SET password='$p1' where username='$username';";
													}
													else if ($type=="doctor")
													{
														$sql2="UPDATE doctor SET password='$p1' where username='$username';";
													}
													else if ($type=="staff")
													{
														$sql2="UPDATE staff SET password='$p1' where username='$username';";	
													}
													mysqli_query($conn,$sql2);
													echo "<script>alert('your password has changed successfully')</script>";
												}
											}
									}
								}
							  
						}
					}
				}
			}
			else
			{
				echo "<script>alert('invalid username')</script>";
				echo("<script>window.location = 'forgot.php';</script>");
			}
		
		}
	}
	
	?>