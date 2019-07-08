<?php
/*connection bdd*/
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

/*insertion du message*/

$sql = "INSERT INTO pseudo (nom) VALUES (?)";
    $q = $bdd->prepare($sql);
    $q ->execute(array($_POST['nom']));

    $Last_ID = $bdd->lastInsertId();

    $sql_table2 = "INSERT INTO messages (id_pseudo,mes) 
                   VALUES (?) ";
    $q = $bdd->prepare($sql_table2);
    $q -> execute(array($Last_ID,$_POST['mes']));

   

/*redirection*/
header('Location: minichat.php');
?>
