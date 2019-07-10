<?php
setcookie('pseudo', $_POST['pseudo'], time()+3600*24*365, 'null, null, false, true');
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
if (!empty($_POST['pseudo'] && !empty($_POST['message'])))
{   
    
    $req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
    $req->execute(array($_POST['pseudo'], $_POST['message']));
      

}
else
{
    echo 'Veuillez remplir tous les champs SVP';
    echo '<br /><a href="minichat.php">Retour au minichat</a>';
}


/*redirection*/
header('Location: minichat.php');
?>
