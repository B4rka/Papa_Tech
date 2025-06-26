<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require __DIR__ . '/vendor/autoload.php';

    if (file_exists(__DIR__ . '/.env')) {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();
    }

    $current_page = basename($_SERVER['PHP_SELF']);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $mail = new PHPMailer(true);
        
        try {
            // Config Mailtrap
            $mail->isSMTP();
            $mail->Host = $_ENV['MAIL_HOST'];
            $mail->Port = $_ENV['MAIL_PORT'];
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Username = $_ENV['MAIL_USERNAME'];
            $mail->Password = $_ENV['MAIL_PASSWORD'];
        
            // Infos expéditeur/destinataire
            $mail->setFrom("{$_POST['email']}", "{$_POST['nom']}");
            $mail->addAddress('destinataire@test.com', 'Test Mailtrap');
        
            // Message
            $mail->Subject = "[{$_POST['motif']}] {$_POST['nom']}";
            $mail->Body = "Nom : {$_POST['nom']} \nEmail : {$_POST['email']} \nMessage : {$_POST['message']}";
        
            $mail->send();
            
            header('Location: contact.php?success=1');
            exit;
        } catch (Exception $e) {
            $erreurs = "❌ Erreur d'envoi : {$mail->ErrorInfo}";
        }
    }
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="/Styles/style.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Papa Tech | Contactez-nous</title>
</head>

<body>

    <?php include __DIR__ . "/Includes/header.php"; ?>

    <main>
        <?php if (isset($_GET['success'])): ?>
            <article class="message-sent">
                <h3>Merci pour votre message !</h3>
                <p>Votre message a bien été envoyé ! Nous vous recontacterons dans les plus bref délais.</p>
                <p>Merci et à bientôt !</p>
            </article>
            <script>
                window.history.replaceState(null, '', window.location.pathname);
            </script>
        <?php endif; ?>
        <div class="contact-page">
            <article class="reservation">
                <h3 class="contact-title">Contact / Réservation</h3>
                <form class=contact-form action="" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NOM Prénom</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nom" placeholder="DUPONT Jean">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Adresse Mail</label>
                        <input type="email" class="form-control" id="exampleFormControlInput2" name="email" placeholder="nom@exemple.com">
                    </div>
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Motif de contact :</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="motif">
                        <option selected value="Question">Question</option>
                        <option value="Intervention">Demande d'intervention</option>
                    </select>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Pourquoi nous contactez-vous ?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary mb-2">Envoyer votre message</button>
                    </div>
                </form>
            </article>
            <article class="informations">
                <h3>Papa Tech</h3>
                <ul>
                    <br><li>Métropole Lilloise</li>
                    <li><i class="bi bi-broadcast-pin"></i> France métropolitaine</li>
                    <li>7 jours / 7</li><br>
                    <li><i class="bi bi-phone"></i> 06 98 20 92 88</li>
                    <li><i class="bi bi-envelope-at"></i> papa59tech@gmail.com</li>
                </ul>
            </article>
        </div>
    </main>

    <?php include __DIR__ . "/Includes/footer.php"; ?>

</body>

</html>