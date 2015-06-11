<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>SHIIP</title>
    <meta http-equiv="refresh" content="2; URL=http://carolinedemaubeuge.be/SHIIP/APP">
    <link rel="stylesheet" href="../bower_components/framework7/dist/css/framework7.min.css">
    <link rel="stylesheet" href="../APP/css/my-app.css">
    <link rel="stylesheet" href="../APP/css/fonts.css">
  </head>
  <body>

	<div class="navbar">
	  <div class="navbar-inner">
	    <div id="titre-nav" class="center sliding">Inscription</div>
	  </div>
	</div>

  </body>
</html>

<? 


// récupération login et mdp
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

// connexion à la base de données
$connexion = mysql_connect("localhost", "carolinedemaubeu", "Xpa0WsbUPZFCN23p");

if($connexion){
// echo "connexion base ok </br>";

// sélection de la base
$base = mysql_select_db("carolinedemaubeuge");

// recherche de l'utilisateur
if ($base) {
	
$requete = mysql_query("INSERT INTO shiip_users(Login, Mdp, Email) VALUES('$username','$password','$email')");
?><p class="padding-c">Votre inscription est un succès !</p> <?
?><p class="connected-succes">Bienvenue sur SHIIP <? echo $username; ?></p> <?

$ret = $connexion->query($requete);

if($ret)
{
//Utilisateur créé
echo "ok";
}
else
{
//Erreur creation
echo "non ok";
}

}
else{
echo "La table n'est pas disponible";
}

}

else{
echo "Erreur de connexion à la base de données";
}

?>

