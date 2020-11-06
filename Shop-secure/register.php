<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <title>Register SLGN SHOP</title>
    </head>
    <body>
        
    <div class="roun">
    
        <p>S.L.G.N</p>
        
    </div>

        <div id="container">
        <button onclick="location.href='login.php'">Deja Inscript ? Click et Connecte toi ici !!! </button>
            <form action="regverif.php" method="POST">
                <h1><strong>REGISTER</strong></h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='REGISTER' >

                
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