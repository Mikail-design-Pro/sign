<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta name="description" content="A Awsome SLGN SHOP.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="style.css" as="style">
    <link rel="stylesheet" href="style.css">
    <title>Login SLGN SHOP</title>
    </head>
    <body>
        
    <div class="roun">
    
        <p>S.L.G.N</p>
        
    </div>

        <div id="container">
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label for="name"><b>Nom d'utilisateur</b></label>
                <input id="name" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label for="pswd"><b>Mot de passe</b></label>
                <input id="pswd" type="password" placeholder="Entrer le mot de passe" name="password" required>

                <label for="submit"><b>Conexion</b></label>
                <input type="submit" id='submit' placeholder="LOIN" >
                <?php
                
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }

                ?>
            </form>
        </div>
    </body>
</html>
