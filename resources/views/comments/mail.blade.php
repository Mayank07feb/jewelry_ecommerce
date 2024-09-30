<!-- resources/views/emails/contact-confirmation.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #eaeaea;
        }
        .content {
            margin-top: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #eaeaea;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>Thank You for Your Submission!</h2>
    </div>
    <div class="content">
        <p>Hello {{ $contact->name }},</p>
        <p>Thank you for getting in touch with us. We have received your contact details and will get back to you soon. Here is a summary of the information you provided:</p>
        <ul>
            <li><strong>Name:</strong> {{ $contact->name }}</li>
            <li><strong>Email:</strong> {{ $contact->email }}</li>
            <li><strong>Phone:</strong> {{ $contact->phone }}</li>
            <li><strong>Address:</strong> {{ $contact->address }}</li>
            <li><strong>Type:</strong> {{ $contact->type }}</li>
        </ul>
        <p>If any of this information is incorrect, please reply to this email with the corrected details.</p>
        <p>Best regards,</p>
        <p>Your Company Name</p>
    </div>
    <div class="footer">
        <p>&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
    </div>
</div>
</body>
</html>




