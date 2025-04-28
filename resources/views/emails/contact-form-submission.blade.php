<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #3490dc;
            margin-bottom: 20px;
        }
        .contact-info {
            margin-bottom: 20px;
        }
        .contact-info p {
            margin: 5px 0;
        }
        .message-content {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #3490dc;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #777;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Contact Form Submission</h1>
        
        <div class="contact-info">
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            @if($phone)
                <p><strong>Phone:</strong> {{ $phone }}</p>
            @endif
            <p><strong>Subject:</strong> {{ $subject }}</p>
        </div>
        
        <h3>Message:</h3>
        <div class="message-content">
            <p>{{ $messageContent }}</p>
        </div>
        
        <div class="footer">
            <p>This email was sent from the contact form on your website.</p>
            <p>{{ config('app.name') }} &copy; {{ date('Y') }}</p>
        </div>
    </div>
</body>
</html> 