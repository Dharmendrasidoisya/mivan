<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer/PHPMailer.php';
require 'PHPMailer/PHPMailer/SMTP.php';

function clean_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = clean_input($_POST['name'] ?? '');
    $email    = clean_input($_POST['email'] ?? '');
    $phone    = clean_input($_POST['phone'] ?? '');
    $location = clean_input($_POST['location'] ?? '');
    $msg      = clean_input($_POST['message'] ?? '');
    $btn_action = clean_input($_POST['btn_action'] ?? '');
    $source   = clean_input($_POST['source'] ?? 'Website Form');

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
 $recaptcha_secret   = '6LeReFIsAAAAAKeu4eWZG31qNEyiBx9xyWN7Us2g';
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

    if (empty($recaptcha_response)) {
        echo "<script>alert('Please complete the CAPTCHA.'); window.history.back();</script>";
        exit;
    }

    $verify_url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret'   => $recaptcha_secret,
        'response' => $recaptcha_response,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $verify_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $decoded = json_decode($response, true);

    if (empty($decoded['success']) || $decoded['success'] !== true) {
        $errors = isset($decoded['error-codes']) ? implode(', ', $decoded['error-codes']) : 'Unknown error';
        echo "<script>alert('CAPTCHA verification failed: $errors'); window.history.back();</script>";
        exit;
    }

    // ---------------- INSTANT REDIRECT ----------------
    // JS redirect but PHP continues to process
    echo "<script>
        const btn = document.getElementById('submitBtn');
        if(btn) btn.disabled = true;
        window.location.href='thankyou.html';
    </script>";
    echo str_repeat(' ', 1024);
    flush();
    try {
        $mail = new PHPMailer(true);

        // Use server mail (best for cPanel)
        $mail->isMail();

        // IMPORTANT: From must be domain email
        $mail->setFrom('mail@mivandholera.com', 'Mivan Realty Inquiry');
    $mail->addAddress("support@mivandholera.com");
        	 $mail->addBCC("jitendra@goadsindia.co.in");
		$mail->addBCC("dharmendrasinh@indiantradebird.com");
			$mail->addBCC("rutvik@indiantradebird.com");
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'Mivan Realty Inquiry';
        $mail->Body = "
        <html>
        <body style='font-family:Arial;padding:20px'> 
        <div style='max-width:600px;margin:auto;background:#fff;padding:20px;border-radius:6px'>
        <h2 style='background:#DFB45E;color:#fff;padding:12px;text-align:center'>Mivan Realty Inquiry</h2>
        <table width='100%' cellpadding='8'>
        <tr><td><b>Pname:</b></td><td>" . (!empty($btn_action) ? $btn_action : 'Not selected') . "</td></tr>
        <tr><td><b>Name:</b></td><td>$name</td></tr>
        <tr><td><b>Email:</b></td><td>$email</td></tr>
        <tr><td><b>Phone:</b></td><td>$phone</td></tr>
        <tr><td><b>Location:</b></td><td>$location</td></tr>
        <tr><td><b>Message:</b></td><td>$msg</td></tr>
        </table>
        </div>
        </body>
        </html>";

        $mail->send();

    } catch (Exception $e) {
        echo "<script>alert('Mailer Error: {$mail->ErrorInfo}'); window.history.back();</script>";
        exit;
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
