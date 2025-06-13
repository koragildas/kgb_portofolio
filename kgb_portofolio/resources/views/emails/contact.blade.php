<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
            color: #212529;
        }

        .email-container {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        h2 {
            color: #0d6efd;
            margin-bottom: 20px;
        }

        .info {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            display: inline-block;
            width: 100px;
        }

        .message {
            white-space: pre-line;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="email-container">
    <h2>Nouveau message de contact</h2>

    <p><strong>Nom :</strong> {{ $data['name'] }}</p>
    <p><strong>Email :</strong> {{ $data['email'] }}</p>
    <p><strong>Sujet :</strong> {{ $data['subject'] ?? 'Sans sujet' }}</p>
    <p><strong>Message :</strong></p>
    <p>{{ $data['message'] }}</p>
</div>
</body>

</html>