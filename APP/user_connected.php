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
	    <div id="titre-nav" class="center sliding">Connection</div>
	  </div>
	</div>

  </body>
</html>

<? 

// récupération login et mdp
$username = $_POST["username"];
$password = $_POST["password"];

// connexion à la base de données
$connexion = mysql_connect("localhost", "carolinedemaubeu", "Xpa0WsbUPZFCN23p");

if($connexion){

	// sélection de la base
	$base = mysql_select_db("carolinedemaubeuge");

	// recherche de l'utilisateur
	if ($base) {
		
		$requete = mysql_query("SELECT Login, Mdp, Email FROM shiip_users WHERE Login LIKE '".$username ."' AND Mdp LIKE '".$password ."';");

		$ret=mysql_fetch_assoc($requete);

		if($ret)
		{
			//Utilisateur à été trouvé
			$db_email=$ret['Email'];
			//echo "Votre e-mail est ".$db_email;
			?><p class="padding-c">Connection réussie !</p><?
			?><p class="connected-succes">Bienvenue <? echo $username; ?></p> <?
		}
		else
		{
			?><p class="padding-c">Nous n'avons pas réussi à vous connecter !</p><?
			?><div class="left"><p class="connected-succes">Veuillez <a href="login.html" class="back link">réessayer</a></p></div> <?
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




