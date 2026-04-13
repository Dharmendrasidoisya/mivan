<?php


session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Google\Client as GoogleClient;
use Google\Service\Sheets;


require 'PHPMailer/PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer/PHPMailer.php';
require 'PHPMailer/PHPMailer/SMTP.php';

// --- Helper ---
function clean_input($data)
{
    return htmlspecialchars(strip_tags(trim($data)));
}




// --- MAIN ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  

    $name     = clean_input($_POST['name'] ?? '');
    $email    = clean_input($_POST['email'] ?? '');
    $phone    = clean_input($_POST['phone'] ?? '');
    $location = clean_input($_POST['location'] ?? '');
    $msg      = clean_input($_POST['message'] ?? '');
    $source   = clean_input($_POST['source'] ?? 'Website Form');

    // --- Validation ---
    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        echo "<script>alert('Name must contain only letters.'); window.history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Enter a valid email.'); window.history.back();</script>";
        exit;
    }

    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        echo "<script>alert('Phone number must be exactly 10 digits.'); window.history.back();</script>";
        exit;
    }

    if (empty($msg)) {
        echo "<script>alert('Message is required.'); window.history.back();</script>";
        exit;
    }

     // ---------------- CAPTCHA ----------------
    

    // ---------------- BACKGROUND PROCESS ----------------

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mail.indiantradebird@gmail.com';
        $mail->Password = 'bvyobyztypxrdhsb';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('mail.indiantradebird@gmail.com', 'Mivan Realty ');
     $mail->addAddress('dharmendrasinh@indiantradebird.com');
     
        $mail->addReplyTo($email);

        $mail->Subject = ' Mivan Realty';
        $mail->isHTML(true);
        $mail->Body = "
<html>
<body style='font-family:Arial;background:#f4f4f4;padding:20px'>
<div style='max-width:600px;margin:auto;background:#fff;padding:20px;border-radius:6px'>
<h2 style='background:#ec3237;color:#fff;padding:12px;text-align:center'>Get It From Mivan Realty </h2>
<table width='100%' cellpadding='8'>
<tr><td><b>Name:</b></td><td>$name</td></tr>
<tr><td><b>Email:</b></td><td>$email</td></tr>
<tr><td><b>Phone:</b></td><td>$phone</td></tr>
<tr><td><b>Location:</b></td><td>$location</td></tr>
<tr><td><b>Message:</b></td><td>$msg</td></tr>
</table>
<p style='text-align:center;font-size:12px;color:#777'>Powered by Ads India</p>
</div>
</body>
</html>";

        $mail->send();
    } catch (Exception $e) {
        error_log("Mailer Error: " . $mail->ErrorInfo);
    }

    date_default_timezone_set('Asia/Kolkata');
    file_put_contents(
        "inquirycontactus.txt",
        "Name:$name | Email:$email | Phone:$phone | Location:$location | Message:$msg | Source:$source | " . date('Y-m-d H:i:s') . "\n",
        FILE_APPEND
    );

 
 header('Location: thankyou.html');
        exit;
}
