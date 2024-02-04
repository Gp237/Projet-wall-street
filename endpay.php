<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Paiement</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .payment-confirmation {
            text-align: center;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #4CAF50;
        }

        p {
            color: #333;
        }

        .success-icon {
            font-size: 60px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .back-to-home {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #ffffff;
            background-color: #f7941d;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-to-home:hover {
            background-color: #f7941d;
        }
    </style>
</head>
<body>

<div class="payment-confirmation">
    <div class="success-icon">&#10004;</div>
    <h1>Paiement Vérifié</h1>
    <p>Merci pour votre achat. Votre paiement a été vérifié avec succès.</p>
    <a href="index.php" class="back-to-home">Retour à l'Accueil</a>
</div>

</body>
</html>
