<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
    <form action="login.php " method="POST">
        <div id="content">
            
            <a href='login.php' name="deconnexion"><span>Déconnexion</span></a>
            

            <?php
                session_start();
                if(isset($_POST['deconnexion']))
                { 
                   if($_POST['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['id'] !== ""){
                    $user = $_SESSION['id'];
                    echo "<br>Bonjour $user, vous êtes connectés";
                }
            ?>
            
        </div>
    </body>
</html>