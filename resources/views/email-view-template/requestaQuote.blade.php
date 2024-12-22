<!DOCTYPE html>
<html>

<head>
    <title>Thank You for Contacting Rainchem</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
        <h2 style="color: #4CAF50;">Quotation Request Received</h2>
        <p>Dear {{ $userData->fullName }},</p>
        <p>Thank you for your interest in Rainchem's products. We have received your quotation request and your
            appointment is booked for {{ $userData->appointmentDate }}. We will get back to you shortly with the
            required details.</p>
        <p>In the meantime, if you have any questions or need urgent assistance, please don’t hesitate to reach out to
            us at <a href="mailto:info@rainchem.com">info@rainchem.com</a>.</p>
        <p>We look forward to serving you!</p>
        <br>
        <p>Best regards,</p>
        {{-- <img src="{{ asset('/img/rainchem new logo final..png') }}" style="max-width: 150px; height: auto;" alt=""> --}}
        <p><strong>The Rainchem Team</strong></p>
        <hr>
        <p style="font-size: 12px; color: #888;">This is an automated email. Please do not reply to this message.</p>
    </div>
</body>

</html>
