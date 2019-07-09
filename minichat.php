<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8" name="author" lang="fr" content="Yoann ABRAN">
        <title>Mini-chat</title>
    </head>
    <body>
    
        
    <form action="minichat_post.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>

<?php
/*connexion bdd*/
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=minichat2;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

/*message afficher*/
$reponse = $bdd->query('
SELECT pseudo, message, DATE_FORMAT(date_mes, \'%d/%m/%Y %Hh%imin%ss\') AS date
FROM minichat
ORDER BY date_mes DESC LIMIT 0, 10');


while ($donnees = $reponse->fetch())
{
	echo '<p>' .htmlspecialchars($donnees['date']).' '. '<strong>' .htmlspecialchars($donnees['pseudo']).'</strong>' . ' : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
    </body>
</html>



