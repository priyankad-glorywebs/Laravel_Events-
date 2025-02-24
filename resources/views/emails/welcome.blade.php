{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Platform</title>
</head>
<body>
    <h1>Hello, {{ $user->name }}!</h1>
    <p>Welcome to our platform! We are excited to have you join us.</p>
</body>
</html> --}}
<!-- resources/views/emails/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Platform!</title>
    <style>
        /* Inline styles for email compatibility with older clients */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background-color: #4f46e5;
            color: white;
            padding: 20px;
            border-radius: 8px 8px 0 0;
        }
        .email-content {
            margin-top: 20px;
            font-size: 16px;
            color: #333;
        }
        .button {
            display: inline-block;
            background-color: #4f46e5;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 20px;
        }
        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h2>Welcome to Our Platform, {{ $user->name }}!</h2>
        </div>

        <!-- Body Content -->
        <div class="email-content">
            <p>Hello {{ $user->name }},</p>
            <p>Welcome to our platform! We are excited to have you join us.</p>

        </div>

        <!-- Footer -->
        <div class="footer">
            <p><small>If you did not register for an account, please ignore this email.</small></p>
        </div>
    </div>
</body>
</html>
