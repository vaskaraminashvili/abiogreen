<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #f8f9fa; padding: 20px; border-radius: 5px; }
        .content { background: white; padding: 20px; border: 1px solid #dee2e6; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #495057; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Form Submission</h2>
        </div>
        <div class="content">
            <div class="field">
                <span class="label">Name:</span>
                <span>{{ $name }}</span>
            </div>
            <div class="field">
                <span class="label">Email:</span>
                <span>{{ $email }}</span>
            </div>
            <div class="field">
                <span class="label">Message:</span>
                <p>{{ $text }}</p>
            </div>
        </div>
    </div>
</body>
</html>