<?php
require_once __DIR__ . '/include/mail-helper.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Receiver email (change this to your HR or test email)
    $to = "info@sunnylights.co.in";

    // Collect form data safely
    $fname = htmlspecialchars($_POST["fname"]);
    $lname = htmlspecialchars($_POST["lname"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $city = htmlspecialchars($_POST["current-city"]);
    $linkedin = htmlspecialchars($_POST["linkedIn-profile"]);
    $coverLetter = htmlspecialchars($_POST["Cover-Letter"]);
   $jobTitle = htmlspecialchars_decode($_POST["Job_Title"] ?? $_POST["Job Title"]);


    // File upload handling
    $resume = $_FILES['resume']['tmp_name'];
    $resumeName = $_FILES['resume']['name'];

    if (!$email) {
        echo "Invalid email address.";
        exit;
    }

    try {
        sunny_send_mail([
            'to' => $to,
            'from_name' => 'Sunny Light Career Form',
            'reply_to_email' => $email,
            'reply_to_name' => $fname . ' ' . $lname,
            'subject' => 'Job Application - ' . $jobTitle,
            'body_html' => "
        <h2 style='text-align:center;'>New Job Application Received</h2>
        <table width='100%' cellspacing='5' cellpadding='8' style='border:1px solid #ccc;'>
            <tr bgcolor='#f2f2f2' ><td><strong>Job Title:</strong></td><td>$jobTitle</td></tr>
            <tr bgcolor='#f2f2f2' ><td><strong>First Name:</strong></td><td>$fname</td></tr>
            <tr bgcolor='#f2f2f2' ><td><strong>Last Name:</strong></td><td>$lname</td></tr>
            <tr bgcolor='#f2f2f2' ><td><strong>Email:</strong></td><td>$email</td></tr>
            <tr bgcolor='#f2f2f2' ><td><strong>Phone:</strong></td><td>$phone</td></tr>
            <tr bgcolor='#f2f2f2' ><td><strong>Current City:</strong></td><td>$city</td></tr>
            <tr bgcolor='#f2f2f2' ><td><strong>LinkedIn:</strong></td><td>$linkedin</td></tr>
            <tr bgcolor='#f2f2f2' ><td><strong>Cover Letter:</strong></td><td>$coverLetter</td></tr>
        </table>
        <p><strong>Resume attached with this email.</strong></p>
        ",
            'body_text' => "
        Job Title: $jobTitle
        Name: $fname $lname
        Email: $email
        Phone: $phone
        City: $city
        LinkedIn: $linkedin
        Cover Letter: $coverLetter
        ",
            'attachments' => !empty($resume) ? [['path' => $resume, 'name' => $resumeName]] : [],
        ]);

        // SweetAlert Success Message
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    toast: true,
                    position: "center",
                    icon: "success",
                    title: "Application successfully submitted!",
                    showConfirmButton: false,
                    timer: 2500
                }).then(() => {
                    window.location.href = "career.php";
                });
            });
        </script>';
    } catch (\Exception $e) {
        echo "Mailer Error: {$e->getMessage()}";
    }
}
?>
