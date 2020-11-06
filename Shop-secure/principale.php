<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        
        <h1 class="t1">SLGN Shop</h1>
        
        
        <div id="content">

        
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {
                      session_unset();
                      header("location:login.php");
                   }
                }

                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<h1>Bonjour $user</h1><br> <p> Vous êtes bien connecté !</p>";
                }
            ?>
        </br></br>
            <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
        <br />
        </div>
    </body>
</html>