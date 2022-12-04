<?php 



session_start();
       if (isset ($_SESSION['id'])){
        $id = $_SESSION ['id'];
 $user = $_SESSION['id'];    


   if(isset( $_SESSION['id'])){
       
   echo "<br>Bonjour, vous êtes connectés dans l'espace responsable".$_SESSION['id']; }
       

       

?>
<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
    <form action="login.php " method="POST">
        <div id="content">

                <a href="add_adm.php">ajouter un nouveau compte</a><br/>    
            
            <a href='logout.php' name="deconnexion"><span>Déconnexion</span></a>
            

           
            
        </div>
    </body>
</html>
<?php }
else{
   
    session_destroy();
                      header("location:login.php");
                      exit;
};
?>