<?php
$to = "puneethm79@gmail.com";
$subject = "Test";
$message = "This is email spoofing test.";

// Sender's email and name
$senderEmail = "20ec0169@vvce.ac.in";
$senderName = "Puneeth M";

// Additional headers
$headers = "From: $senderName <$senderEmail>\r\n";
$headers .= "Reply-To: $senderEmail\r\n";
$headers .= "CC: cc@example.com\r\n";
$headers .= "BCC: bcc@example.com\r\n";

// Send email
$mailSuccess = mail($to, $subject, $message, $headers);

if ($mailSuccess) {
    echo "Email sent successfully.";
} else {
    echo "Error sending email.";
}
?>
