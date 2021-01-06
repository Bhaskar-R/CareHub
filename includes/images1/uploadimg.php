<?php
// Include the database configuration file
if (!isset($_SESSION))
{
session_start();
}
include 'dbconfig.php';
$statusMsg = '';

// File upload path
$targetDir = "uploaded_images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats

        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("UPDATE images1  set file_name='$fileName', uploaded_on= NOW();");
            
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                $changestatus=$db->query("UPDATE images1  set status='2' where file_name='$fileName';");
}else{
    $statusMsg = 'Please select a file to upload.';
}
}
// Display status message

echo "<script>alert('$statusMsg')</script>";
        //echo("<script>window.location = 'actualsignup.php?user=staff';</script>");
//mailto be send
$query3=$db->query("SELECT username from images1 where file_name='$fileName';");
$uid=$query3->fetch_assoc();
$ud=$uid['username'];
$query = $db->query("SELECT email FROM patient where username='$ud';");

if($query->num_rows > 0){
$row = $query->fetch_assoc();
$email=$row['email'];
                        require '../../phpmailer/PHPMailerAutoload.php';
                        $mail= new PHPMailer;
                        $mail->isSMTP();
                        $mail->Host='smtp.gmail.com';
                        $mail->Port=587;
                        $mail->SMTPAuth=true;
                        $mail->SMTPSecure='tls';
                        $mail->Username='rhhospitalsofficial@gmail.com';
                        $mail->Password='Rhqwerty@123';

                        $mail->setFrom('rhhospitalsofficial@gmail.com','RANDOM');
                        $mail->addAddress($email);
                        $mail->addReplyTo('rhhospitalsofficial@gmail.com');
                        
                        $mail->isHTML(true);
                        $mail->Subject='lab report';
                        $mail->Body="find the attached file of your lab report";
                        $mail->addAttachment($targetFilePath,$fileName);
                        if ($mail->send())
                        {
                            echo "<script>alert('mail sent successfully')</script>";
                            echo("<script>window.location = '../../index.php';</script>");
                        }
                    }
?>