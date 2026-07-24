<?php
require_once __DIR__ . '/include/mail-helper.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@sunnylights.co.in"; // you can change this to your domain email for testing
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    if (!$email) {
        echo "Invalid email address.";
        exit;
    }

    try {
        sunny_send_mail([
            'to' => $to,
            'from_name' => 'Website Contact Inquiry Form',
            'reply_to_email' => $email,
            'reply_to_name' => $name,
            'subject' => 'Contact Form Received',
            'body_html' => "
        <table width='100%' cellspacing='5' cellpadding='5' style='border:2px solid #000;'>
            <tr><td colspan='2' align='center' style='font-size:20px;'>Contact Form</td></tr>
            <tr bgcolor='#f2f2f2'><td><strong>Name</strong></td><td>$name</td></tr>
            <tr bgcolor='#f2f2f2'><td><strong>Email</strong></td><td>$email</td></tr>
            <tr bgcolor='#f2f2f2'><td><strong>Phone</strong></td><td>$phone</td></tr>
            <tr bgcolor='#f2f2f2'><td><strong>Subject</strong></td><td>$subject</td></tr>
            <tr bgcolor='#f2f2f2'><td><strong>Message</strong></td><td>$message</td></tr>
        </table>",
            'body_text' => "Contact Form Received:\nName: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message",
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
                          window.location.href = "contact.php";
                      });
                  });
              </script>';
    } catch (\Exception $e) {
        echo 'Mailer Error: ' . $e->getMessage();
    }
}
?>
