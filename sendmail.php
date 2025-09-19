<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = strip_tags(trim($_POST["name"]));
    $phone   = strip_tags(trim($_POST["phone"]));
    $message = strip_tags(trim($_POST["message"]));

    // Your business email address
    $to = "yourbusiness@email.com";  

    $subject = "New Contact Form Message from $name";
    $body = "You have received a new message from your website:\n\n";
    $body .= "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message\n";

    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: $name <$phone>";

    if (mail($to, $subject, $body, $headers)) {
        // ✅ Redirect to Thank You page
        header("Location: thankyou.html");
        exit();
    } else {
        // Redirect to error page if email fails
        header("Location: error.html");
        exit();
    }
} else {
    echo "Invalid request.";
}
?>
