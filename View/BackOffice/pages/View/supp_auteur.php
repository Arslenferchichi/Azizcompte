 
 
 <!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
Ajouter un livre
</title>
<?php 
include "init_site.php";
    
     $vr_id = $_GET['data1'];

     
     ?>

<?php
 {
    
  
    $sql3 = "DELETE FROM `auteur` WHERE `auteur`.`id_auteur` = $vr_id;";   
    try{
        
       $result3 = $conn->prepare($sql3);
        $result3->execute(); 
       
       }
   
       
      
      catch (PDOException $e){
       
      }
   
}
?>



</head>
<body>  <div class="titre2">

    Le livre à eté suuprimer .<br>
    <?php
  header('Location:../el book.php?data=gestion2');
  exit();
?>
    <li><a href="../el book.php?data=gestion2">Retour à la gestion des livre</a></li>


</div>
</body>

</html>


