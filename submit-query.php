<?php
require_once __DIR__ . '/include/mail-helper.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "info@sunnylights.co.in"; // your email
    $model_number = htmlspecialchars($_POST["model_number"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $requirement = htmlspecialchars($_POST["requirement"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    try {
        sunny_send_mail([
            'to' => $to,
            'from_name' => 'Website Product Query',
            'reply_to_email' => $email,
            'subject' => 'Product Query Received',
            'body_html' => "
        <table width='100%' cellspacing='5' cellpadding='5' style='border:2px solid #000;'>
            <tr><td colspan='2' align='center' style='font-size:20px;'><strong>Product Query Form</strong></td></tr>
            <tr bgcolor='#f9f9f9'><td><strong>Model Number</strong></td><td>$model_number</td></tr>
            <tr bgcolor='#f9f9f9'><td><strong>Email</strong></td><td>$email</td></tr>
            <tr bgcolor='#f9f9f9'><td><strong>Phone</strong></td><td>$phone</td></tr>
            <tr bgcolor='#f9f9f9'><td><strong>Requirement</strong></td><td>$requirement</td></tr>
        </table>",
            'body_text' => "Product Query Form:\nModel Number: $model_number\nEmail: $email\nPhone: $phone\nRequirement: $requirement",
        ]);

        // Store status in session and redirect (PRG pattern)
        session_start();
        $_SESSION['query_success'] = true;

        $currentPage = $_SERVER['HTTP_REFERER'] ?? 'index.php';
        header("Location: $currentPage");
        exit;

    } catch (\Exception $e) {
        echo "Mailer Error: {$e->getMessage()}";
    }
}

// After redirect, show SweetAlert only once
session_start();
if (!empty($_SESSION['query_success'])) {
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          <script>
              document.addEventListener("DOMContentLoaded", function () {
                  Swal.fire({
                      icon: "success",
                      title: "Your query has been submitted!",
                      text: "We will get back to you shortly.",
                      confirmButtonText: "OK"
                  });
              });
          </script>';
    unset($_SESSION['query_success']); // remove flag
}
?>
