<!DOCTYPE html>
<html>

<head>
    <title>Thank You for Contacting Rainchem</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
        <h2 style="color: #4CAF50;">We’ve Received Your Message!</h2>
        <p>Dear {{ $userData->fullName }},</p>
        <p>Thank you for reaching out to Rainchem. We have received your message and will get back to you as soon as
            possible.</p>
        <p>If your inquiry is urgent, feel free to contact us directly at <a
                href="mailto:info@rainchem.com">info@rainchem.com</a>.</p>
        <br>
        <p>Best regards,</p>
        {{-- <img src="/img/rainchem new logo final..png" style="max-width: 150px; height: auto;" alt=""> --}}
        <p><strong>The Rainchem Team</strong></p>
        <hr>
        <p style="font-size: 12px; color: #888;">This is an automated email. Please do not reply to this message.</p>
    </div>
</body>

</html>
