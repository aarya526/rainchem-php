<!DOCTYPE html>
<html>

<head>
    <title>Rainchem Enquiry : Contract Manufacturing</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
        <h2 style="color: #4CAF50;">Thank You for Reaching Out!</h2>
        <p>Dear {{ $userData->fullName }},</p>
        <p>We have successfully received your request for contract manufacturing services at Rainchem. Our team will
            review your details and get back to you shortly.</p>
        <p>If you have any further questions or need immediate assistance, feel free to contact us at <a
                href="mailto:info@rainchem.com">info@rainchem.com</a>.</p>
        <br>
        <p>Best regards,</p>
        {{-- <img src="{{ asset('/img/rainchem new logo final..png') }}" style="max-width: 150px; height: auto;" alt=""> --}}
        <p><strong>The Rainchem Team</strong></p>
        <hr>
        <p style="font-size: 12px; color: #888;">This is an automated email. Please do not reply to this message.</p>
    </div>
</body>

</html>
