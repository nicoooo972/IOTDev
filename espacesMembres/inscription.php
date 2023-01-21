<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/inscription.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <div class="body-inscription">
        <h2 style="text-align:center;background-color:#1C2833;color:white;padding:1%;">Inscription</h2>
        <div class="container-inscription">

            <div class="form-inscr">
                <form action="verif_inscription.php" method="POST">

                    <h4 style="color: #B0D7FF;">Pseudo :</h4>
                    <input type="text" placeholder="Votre pseudo" name="pseudo" class="input-pseudo" required>

                    <h4 style="color: #B0D7FF;">Adresse E-mail :</h4>
                    <input type="text" placeholder="Votre e-mail" name="mail" class="input-mail-inscr" required>

                    <h4 style="color: #B0D7FF;">Confirmation du e-mail :</h4>
                    <input type="text" placeholder="Confirmez votre e-mail" name="mail2" class="input-confirmail" required>

                    <h4 style="color: #B0D7FF;">Mot de passe :</h4>
                    <input type="password" placeholder="Votre mot de passe" name="mdp" class="input-mdp" required>

                    <h4 style="color: #B0D7FF;">Confirmation du mot de passe :</h4>
                    <input type="password" placeholder="Confirmez votre mot de passe" name="mdp2" class="input-mdp2" required>

                    <h4 style="color: #B0D7FF;">Confirmation du mot de passe :</h4>
                    <input type="file" id="imagepost2" name="imagepost2" accept="image/png, image/jpeg">

                    <br><br>

                    <input type="submit" name="forminscription" class="submit-inscription" value="Valider">

                </form>

</body>

</html>