<!DOCTYPE html>
<html>
<head>
    <title>Completed Assessment</title>
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
                <p>The competency assessment has been completed by {{ $firstname }} {{ $lastname }}.</p>

              
                <p>Regards,<br><strong>DTI COMPASS 2024 Team</strong></p>

  
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
