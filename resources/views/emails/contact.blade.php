<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuovo messaggio di contatto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
            color: #495057;
            display: block;
            margin-bottom: 5px;
        }
        .field-value {
            color: #212529;
        }
        .message-box {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #dee2e6;
            margin-top: 10px;
        }
        .footer {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
            text-align: center;
            color: #6c757d;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nuovo Messaggio di Contatto</h1>
    </div>

    <div class="content">
        <div class="field">
            <span class="field-label">Nome:</span>
            <span class="field-value">{{ $contactMessage->name }}</span>
        </div>

        <div class="field">
            <span class="field-label">Cognome:</span>
            <span class="field-value">{{ $contactMessage->surname }}</span>
        </div>

        <div class="field">
            <span class="field-label">Email:</span>
            <span class="field-value">
                <a href="mailto:{{ $contactMessage->email }}">{{ $contactMessage->email }}</a>
            </span>
        </div>

        @if($contactMessage->phone)
        <div class="field">
            <span class="field-label">Telefono:</span>
            <span class="field-value">
                <a href="tel:{{ $contactMessage->phone }}">{{ $contactMessage->phone }}</a>
            </span>
        </div>
        @endif

        <div class="field">
            <span class="field-label">Oggetto:</span>
            <span class="field-value">{{ $contactMessage->subject }}</span>
        </div>

        <div class="field">
            <span class="field-label">Messaggio:</span>
            <div class="message-box">
                {!! nl2br(e($contactMessage->message)) !!}
            </div>
        </div>

        <div class="field">
            <span class="field-label">Data invio:</span>
            <span class="field-value">{{ $contactMessage->created_at->format('d/m/Y H:i') }}</span>
        </div>
    </div>

    <div class="footer">
        <p>Questo messaggio è stato inviato dal form contatti di vldlab.it</p>
        <p>Puoi rispondere direttamente a questa email per contattare {{ $contactMessage->name }} {{ $contactMessage->surname }}</p>
    </div>
</body>
</html>
