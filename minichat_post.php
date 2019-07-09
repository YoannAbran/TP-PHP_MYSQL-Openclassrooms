<?php
/*connection bdd*/
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=minichat2;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

/*insertion du message*/
$pseudo=$bdd->prepare('SELECT pseudo FROM minichat');
$count=$bdd->query('SELECT COUNT (pseudo) FROM minichat');
if($count > 0)
{
    $sql2="INSERT INTO minichat(pseudo,message) Values (?,?)";
    $q=$bdd->prepare($sql2);
    $q->execute(array($pseudo,$_POST['message']));
}
else{
$sql="INSERT INTO minichat (pseudo,message) VALUES (?,?)
       ";
    $q = $bdd->prepare($sql);
    $q ->execute(array($_POST['pseudo'],$_POST['message']));

   }




/*redirection*/
header('Location: minichat.php');
?>
