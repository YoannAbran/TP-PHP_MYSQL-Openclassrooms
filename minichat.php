<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8" name="author" lang="fr" content="Yoann ABRAN">
        <title>Mini-chat</title>
    </head>
    <body>
    
        
    <form action="minichat_post.php" method="post">
        <p>
        <label for="nom">Pseudo</label> : <input type="text" name="nom" id="nom" /><br />
        <label for="mes">Message</label> :  <input type="text" name="mes" id="mes" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>

<?php
/*connexion bdd*/
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

/*message afficher*/
$reponse = $bdd->query('
SELECT p.nom, m.mes, m.date_mes
FROM pseudo p
INNER JOIN messages m
ON m.id_pseudo = p.id
ORDER BY m.date_mes DESC LIMIT 0, 10');


while ($donnees = $reponse->fetch())
{
	echo '<p>' .htmlspecialchars($donnees['date_mes']).' '. '<strong>' .htmlspecialchars($donnees['nom']).'</strong>' . ' : ' . htmlspecialchars($donnees['mes']) . '</p>';
}

$reponse->closeCursor();

?>
    </body>
</html>



