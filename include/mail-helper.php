<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../PHPMailer/src/Exception.php';
require_once __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../PHPMailer/src/SMTP.php';

const SUNNY_MAIL_HOST = 'mail.sunnylights.co.in';
const SUNNY_MAIL_PORT = 465;
const SUNNY_MAIL_USERNAME = 'info@sunnylights.co.in';
const SUNNY_MAIL_PASSWORD = 'Info!@!#244';
const SUNNY_MAIL_TO = 'info@sunnylights.co.in';

function sunny_send_mail(array $payload): void
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = SUNNY_MAIL_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = SUNNY_MAIL_USERNAME;
    $mail->Password = SUNNY_MAIL_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = SUNNY_MAIL_PORT;

    $mail->setFrom(SUNNY_MAIL_USERNAME, $payload['from_name'] ?? 'Sunny Light Website');
    $mail->addAddress($payload['to'] ?? SUNNY_MAIL_TO);

    if (!empty($payload['reply_to_email'])) {
        $mail->addReplyTo($payload['reply_to_email'], $payload['reply_to_name'] ?? '');
    }

    if (!empty($payload['attachments']) && is_array($payload['attachments'])) {
        foreach ($payload['attachments'] as $attachment) {
            if (!empty($attachment['path'])) {
                $mail->addAttachment($attachment['path'], $attachment['name'] ?? '');
            }
        }
    }

    $mail->isHTML(true);
    $mail->Subject = $payload['subject'] ?? '';
    $mail->Body = $payload['body_html'] ?? '';
    $mail->AltBody = $payload['body_text'] ?? '';

    $mail->send();
}
