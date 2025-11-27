<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars(trim($_POST['fullname']));
    $email    = htmlspecialchars(trim($_POST['email']));
    $phone    = htmlspecialchars(trim($_POST['phone']));
    $message  = htmlspecialchars(trim($_POST['message']));

    // Validasi sederhana
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    $mail = new PHPMailer(true);

    try {
        // Konfigurasi SMTP Gmail
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'itulahhidup83@gmail.com';  // Ganti dengan email Gmail kamu
        $mail->Password   = 'nuuayihjkehpcsqn';    // Ganti dengan App Password (16 karakter)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Pengirim & penerima
        $mail->setFrom('itulahhidup83@gmail.com', 'Website Contact Form');
        $mail->addAddress('jauza2546@gmail.com');   // Email tujuan
        $mail->addReplyTo($email, $fullname);

        // Konten email
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission from $fullname";
        $mail->Body    = "
            <h3>New Contact Message</h3>
            <p><strong>Name:</strong> $fullname</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
        ";
        $mail->AltBody = "Name: $fullname\nEmail: $email\nPhone: $phone\nMessage:\n$message";

        $mail->send();
        echo "✅ Thank you for your message. It has been sent.";
    } catch (Exception $e) {
        echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request method.";
}
