<?php 
$id = $_POST ['id'];
$pw = $_POST['pw'];
   $user = $_SESSION['id'];         
if(isset( $_SESSION['id'])){
        session_start();
   echo "<br>Bonjour $user, vous êtes connectés".$_SESSION["id"]; }
else{
    header("Location : /login.php");
};
?>
<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
    <form action="traitement.php " method="POST">
        <div id="content">
            
            <a href='logout.php' name="deconnexion"><span>Déconnexion</span></a>
            

           
            
        </div>
    </body>
</html>

