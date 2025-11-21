<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Presence Form Submission</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 30px;
        }

        .email-container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.08);
            border: 1px solid #ececec;
        }

        h2 {
            text-align: center;
            font-size: 22px;
            margin-bottom: 25px;
            color: #333;
        }

        .row {
            margin-bottom: 12px;
        }

        .label {
            font-weight: bold;
            color: #444;
            display: inline-block;
            width: 230px;
        }

        .value {
            color: #222;
        }

        .message-box {
            background: #fafafa;
            border-left: 4px solid #ccc;
            padding: 12px 15px;
            border-radius: 6px;
            margin-top: 5px;
        }
    </style>
</head>

<body>

<div class="email-container">

    <h2>🎉 Nouvelle Soumission de Formulaire</h2>

    <div class="row">
        <span class="label">Prénom:</span>
        <span class="value">{{ $data['prenom'] }}</span>
    </div>

    <div class="row">
        <span class="label">Nom:</span>
        <span class="value">{{ $data['nom'] }}</span>
    </div>

    <div class="row">
        <span class="label">La Mairie:</span>
        <span class="value">{{ $data['mairie'] ?? 'Non renseigné' }}</span>
    </div>

    <div class="row">
        <span class="label">Personnes à la mairie:</span>
        <span class="value">{{ $data['personnes_mairie'] }}</span>
    </div>

    <div class="row">
        <span class="label">Beach Party:</span>
        <span class="value">{{ $data['beach'] ?? 'Non renseigné' }}</span>
    </div>

    <div class="row">
        <span class="label">Personnes à la Beach Party:</span>
        <span class="value">{{ $data['personnes_beach'] }}</span>
    </div>

    <div class="row">
        <span class="label">Houppa & Réception:</span>
        <span class="value">{{ $data['houppa'] ?? 'Non renseigné' }}</span>
    </div>

    <div class="row">
        <span class="label">Personnes à la Houppa:</span>
        <span class="value">{{ $data['personnes_houppa'] }}</span>
    </div>

    <div class="row">
        <span class="label">Hôtel choisi:</span>
        <span class="value">{{ $data['hotel'] ?? 'Non renseigné' }}</span>
    </div>

    <div class="row">
        <span class="label">Message aux mariés:</span>
    </div>

    <div class="message-box">
        {{ $data['message_maries'] }}
    </div>

</div>

</body>
</html>
