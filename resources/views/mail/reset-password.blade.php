<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
</head>
<body>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width: 600px; margin: auto;">
        <tr>
            <td align="center" style="padding: 20px;">
                <!-- Insert the correct path to your logo image below -->
                <img src="{{ asset('images/compass_logo.png') }}" alt="DTI COMPASS Logo" style="width: 400px; height: auto;">
            </td>
        </tr>
        <tr>
            <td style="background-color: white; color: black; font-family: Arial, sans-serif; text-align: left; padding: 20px;">
                <p>Hello!</p>
                <p>You are receiving this email because we received a password reset request for your account.</p>

                <!-- Use your button styling here -->
                <table border="0" cellspacing="0" cellpadding="0" style="margin: auto;">
                    <tr>
                        <td align="center" style="padding: 10px;">
                            <a href="{{ $url }}" style="background-color: #1E4387; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Reset Password</a>
                        </td>
                    </tr>
                </table>

                <p style="margin-top: 40px;">This password reset link will expire in 60 minutes.</p>
                <p>If you did not request a password reset, no further action is required.</p>
                <p>Regards,<br><strong>DTI COMPASS 2024 Team</strong></p>

                <!-- Additional instructions can be styled similarly -->
                <p>If you're having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser: <a href="{{ $url }}">{{ $url }}</a></p>
            </td>
        </tr>
        <tr>
            <td style="font-family: Arial, sans-serif; color: black; text-align: center; padding: 10px;">
                © 2024 DTI COMPASS. All rights reserved.
            </td>
        </tr>
    </table>
</body>
</html>
