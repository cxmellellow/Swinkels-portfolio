<?php


 /* This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'phpmailer/PHPMailerAutoload.php';


//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "mail.christineswinkels.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "contact@christineswinkels.com";
//Password to use for SMTP authentication
$mail->Password = ""; //insert emails password
//Set who the message is to be sent from
$mail->setFrom('noreply@christineswinkels.com', 'Portfolio Contact Form' . $_POST['name']);
//Set an alternative reply-to address
$mail->addReplyTo($_POST['email'], $_POST['name']);
//Set who the message is to be sent to
$mail->addAddress('contact@christineswinkels.com', 'Christine');
//Set the subject line
$mail->Subject = 'Portfolio Contact Form: ' . $_POST['reason'];
//Read an HTML message body from an external file, convert referenced images to embedded,

$mail->Body = $_POST['message'];


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    header('Location: fail.php');
} 

    else {
        $servername = "localhost";
        $username = ""; //insert username that has access to database
        $password = "";//insert usernames password
        $dbname = "swinkies_porfolio";
        $users_name = $_POST['name'];
        $users_email = $_POST['email'];
        $users_reason = $_POST['reason'];
        $users_comment = $_POST['message'];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        else {
            echo "Connection Successful";
    
            
            $sql ="
  INSERT INTO `swinkies_porfolio`.`contact_table` (`ID`, `Date`, `Client`, `Email`, `Reason`,
        `Comment`) VALUES (NULL, 
        CURRENT_TIMESTAMP, '$users_name',
        '$users_email', '$users_reason', '$users_comment');";
        }


        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    echo "Message has been sent";
   echo'<script>window.location.href="https://www.christineswinkels.com/sucess.php"; </script>';
}
        
    
?>