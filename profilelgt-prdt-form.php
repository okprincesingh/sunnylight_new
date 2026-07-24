<?php
require_once __DIR__ . '/include/mail-helper.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "info@sunnylights.co.in"; // Your email
    $product_code = htmlspecialchars($_POST["productCode"]);
    $customer_name = htmlspecialchars($_POST["customerName"]);
    $customer_email = htmlspecialchars($_POST["customerEmail"]);
    $customer_message = htmlspecialchars($_POST["customerMessage"]);

    if (!filter_var($customer_email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    try {
        sunny_send_mail([
            'to' => $to,
            'from_name' => 'Website Product Query',
            'reply_to_email' => $customer_email,
            'reply_to_name' => $customer_name,
            'subject' => 'New Product Query Received',
            'body_html' => "
        <table width='100%' cellspacing='5' cellpadding='5' style='border:2px solid #000;'>
            <tr><td colspan='2' align='center' style='font-size:20px;'><strong>Product Query Form</strong></td></tr>
            <tr bgcolor='#f9f9f9'><td><strong>Product Code</strong></td><td>$product_code</td></tr>
            <tr bgcolor='#f9f9f9'><td><strong>Name</strong></td><td>$customer_name</td></tr>
            <tr bgcolor='#f9f9f9'><td><strong>Email</strong></td><td>$customer_email</td></tr>
            <tr bgcolor='#f9f9f9'><td><strong>Message</strong></td><td>$customer_message</td></tr>
        </table>",
            'body_text' => "Product Query Form:\nProduct Code: $product_code\nName: $customer_name\nEmail: $customer_email\nMessage: $customer_message",
        ]);

        session_start();
        $_SESSION['query_success'] = true;

        $currentPage = $_SERVER['HTTP_REFERER'] ?? 'index.php';
        header("Location: $currentPage");
        exit;

    } catch (\Exception $e) {
        echo "Mailer Error: {$e->getMessage()}";
    }
}

// SweetAlert after redirect
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
    unset($_SESSION['query_success']);
}
?>
