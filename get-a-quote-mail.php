<?php
require_once __DIR__ . '/include/mail-helper.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@sunnylights.co.in"; // you can change this to your domain email for testing
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $serviceNeeded = htmlspecialchars($_POST["serviceNeeded"]);
    $message = htmlspecialchars($_POST["message"]);

    if (!$email) {
        echo "Invalid email address.";
        exit;
    }

    try {
        sunny_send_mail([
            'to' => $to,
            'from_name' => 'Website Get A Quote Inquiry Form',
            'reply_to_email' => $email,
            'reply_to_name' => $name,
            'subject' => 'Get A Quote Form Received',
            'body_html' => "
        <table width='100%' cellspacing='5' cellpadding='5' style='border:2px solid #000;'>
            <tr><td colspan='2' align='center' style='font-size:20px;'>Get A Quote Form</td></tr>
            <tr bgcolor='#f2f2f2'><td><strong>Name</strong></td><td>$name</td></tr>
            <tr bgcolor='#f2f2f2'><td><strong>Email</strong></td><td>$email</td></tr>
            <tr bgcolor='#f2f2f2'><td><strong>ServiceNeeded</strong></td><td>$serviceNeeded</td></tr>
            <tr bgcolor='#f2f2f2'><td><strong>Message</strong></td><td>$message</td></tr>
        </table>",
            'body_text' => "Get A Quote Form Received:\nName: $name\nEmail: $email\nServiceNeeded: $serviceNeeded\nMessage: $message",
        ]);
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
              <script>
                  document.addEventListener("DOMContentLoaded", function () {
                      Swal.fire({
                          toast: true,
                          position: "center",
                          icon: "success",
                          title: "Form successfully submitted!",
                          showConfirmButton: false,
                          timer: 2000
                      }).then(() => {
                          window.location.href = "index.php";
                      });
                  });
              </script>';
    } catch (\Exception $e) {
        echo 'Mailer Error: ' . $e->getMessage();
    }
}
?>
