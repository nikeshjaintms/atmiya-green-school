<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Enquiry - Atmiya Green School</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #ffffff;">
<table align="center" cellpadding="0" cellspacing="0" width="100%" style="padding: 20px 0;">
    <tr>
        <td align="center">
            <table cellpadding="0" cellspacing="0" width="600" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <tr>
                    <td style="padding: 20px 30px; background-color: #007b5e; color: #ffffff;">
                        <h1 style="margin: 0; font-size: 24px;">Atmiya Green School</h1>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 30px;">
                        <h2 style="font-size: 20px; color: #333;">New Enquiry Received from {{ $enquiry['name'] }} </h2>
                        <p style="font-size: 16px; color: #555;"><strong>Name:</strong> {{ $enquiry['name'] }}</p>
                        <p style="font-size: 16px; color: #555;"><strong>Email:</strong> {{ $enquiry['email'] }}</p>
                        <p style="font-size: 16px; color: #555;"><strong>Phone:</strong> {{ $enquiry['phone'] }}</p>
                        <p style="font-size: 16px; color: #555;"><strong>Enquiry Message:</strong><br>"{{ $enquiry['message'] }}"</p>


                        <p style="font-size: 16px; color: #555;">
                            Regards,<br>
                            <strong>Atmiya Green School System</strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 20px 30px; background-color: #f1f1f1; text-align: center; font-size: 12px; color: #888;">
                        &copy; {{ date('Y') }} Atmiya Green School. All rights reserved.
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
