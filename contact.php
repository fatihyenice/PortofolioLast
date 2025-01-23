<?php
error_reporting(1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération et nettoyage des données
    $name = trim($_POST['name']);
    $lastname = trim($_POST['lastname']);
    $email = htmlspecialchars(trim($_POST['mail']));
    $message = trim($_POST['textarea']);
    $sujet = htmlspecialchars(trim($_POST['sujet']));
    $pattern = "/^[A-Za-zÀ-ÖØ-öø-ÿ0-9.,!?()'\n\r\s-]{10,5000}$/u";

    // Validation des champs
    if (!empty($name) && !empty($lastname) && !empty($email) && !empty($message)) {
        $longueurName = strlen($name);
        $longueurLastname = strlen($lastname);

        // Vérification des longueurs
        if ($longueurName > 1 && $longueurName < 20) {
            if ($longueurLastname > 1 && $longueurLastname < 20) {
                // Validation du nom et prénom
                if (preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ' -]+$/u", $name) && preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ' -]+$/u", $lastname)) {
                    // Validation de l'email
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        // Validation du message
                        if (preg_match($pattern, $message)) {
                            $mail = new PHPMailer(true);
                            try {
                                $mail->isSMTP();
                                $mail->Host = 'smtp.gmail.com';
                                $mail->SMTPAuth = true;
                                $mail->Username = 'fatih.ydev@gmail.com';
                                $mail->Password = 'tojzvvixmzcprypl'; // Remplacer par une méthode plus sécurisée
                                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                                $mail->Port = 587;

                                // Destinataire
                                $mail->setFrom($email, $name);
                                $mail->addAddress('fatih.ydev@gmail.com');

                                // Contenu de l'e-mail
                                $mail->isHTML(true);
                                $mail->Subject = $message; 
$mail->Body = '
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message de Contact</title>
    <style>
        body {
            font-family: "Open Sans", serif;  
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .email-container {
            width: 100%;
            background-color: #ffffff;
            padding: 20px;
            margin: 0;
        }
        .email-header {
            background-color: #363636;
            padding: 20px;
            text-align: center;
            color: white;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-radius: 5px 5px 0 0;
        }
        .email-body {
            padding: 20px;
            font-size: 16px;
            line-height: 1.6;
        }
        .email-body h2 {
            color: #363636;
            font-size: 24px;
            margin-bottom: 15px;
        }
        .email-body p {
            margin: 10px 0;
            font-size: 14px;
        }
        .email-body .contact-info {
            background-color: #f8f8f8;
            padding: 15px;
            margin-top: 20px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .email-footer {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #fff;
            border-radius: 0 0 5px 5px;
        }
        .email-footer a {
            color: #fff;
            text-decoration: none;
        }
        .email-button {
            background-color: #363636;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            margin-top: 20px;
            display: inline-block;
        }
        .email-button:hover {
            background-color: #363636;
        }

        a {
        color: #fff;
        }
    </style>
</head>
<body>

    <div class="email-container">
        <div class="email-header">
            <h1>Fatih Yenice Portofolio: quelqu\'un a essayé de te joindre </h1>
        </div>

        <div class="email-body">
            <h2>Bonjour,</h2>
            <p>Vous avez reçu un message via le formulaire de contact de votre site.</p>
            
            <p><strong>Nom :</strong> ' . $name . '</p>
            <p><strong>Prénom :</strong> ' . $lastname . '</p>
            <p><strong>Email :</strong> ' . $email . '</p>

            <div class="contact-info">
                <h3>Message:</h3>
                <p>' . nl2br($message) . '</p>
            </div>

            <p>Vous pouvez répondre à ce message en cliquant sur le bouton ci-dessous :</p>

            <p><a href="mailto:' . $email . '" class="email-button">Répondre à ce message</a></p>
        </div> 
    </div>

</body>
</html>
'; 

                                $mail->AltBody = 'Nom: ' . $name . "\n" . 'Email: ' . $email . "\n" . 'Message: ' . $message;

                                // Envoi de l'e-mail
                                $mail->send();
                                echo json_encode([
                                    "status" => "success",
                                    "message" => "Merci $name ! Votre message a été envoyé avec succès."
                                ]);
                            } catch (Exception $e) {
                                echo json_encode([
                                    "status" => "error",
                                    "message" => "Erreur d'envoi de l'e-mail : " . $mail->ErrorInfo
                                ]);
                            }
                        } else {
                            echo json_encode(["message" => "Le message contient des caractères invalides ou ne respecte pas la longueur requise."]);
                        }
                    } else {
                        echo json_encode(["message" => "L'adresse e-mail est invalide."]);
                    }
                } else {
                    echo json_encode(["message" => "Le nom ou prénom contient des caractères non valides."]);
                }
            } else {
                echo json_encode(["message" => "Le prénom doit avoir entre 2 et 20 caractères."]);
            }
        } else {
            echo json_encode(["message" => "Le nom doit avoir entre 2 et 20 caractères."]);
        }
    } else {
        echo json_encode(["message" => "Veuillez remplir tous les champs."]);
    }
} else {
    echo json_encode(["message" => "Requête invalide."]);
}
?>
