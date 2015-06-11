<?session_start();
header('P3P: CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"'); 


if(!isset($_SESSION['lang'])) 
{ 
        $_SESSION['lang'] = 'fr';
}

if(isset($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
}
include('includes/'.$_SESSION['lang'].'.inc.php');

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Shiip est la nouvelle application pour partager des services domestiques entre particulier gratuitement !">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <title>SHIIP | Landing Page</title>
        <link rel="stylesheet" href="css/min.css">
        <link rel="icon" type="image/png" href="/images/fav.png" />
    </head>
    <body>
        <div id="container">

            <section class="introduction">
                <div class="in-in">
                    <div class="langues">
                        <ul>
                            <li><a href="?lang=fr">FR</a></li>
                            <li><a href="?lang=en">EN</a></li>
                        </ul>
                    </div>
                    <div class="titres">
                        <img class="logo" src="images/logo.png"></img>
                        
                        <h1><?=$trad["h1"]?></h1>
                        <p class="intro"><?=$trad["description"]?></p>
                        <button class="blue" onclick="document.location.href='http://carolinedemaubeuge.be/SHIIP/APP/';" data-direction="right"><?=$trad["button"]?></button>
                    </div>
                </div>
            </section>

            <section class="plateforme">
                <div class="left">
                    <h3><?=$trad["plat"]?></h3>
                    <h2><?=$trad["look"]?><br /> <?=$trad["look2"]?></h2>
                    <p><?=$trad["look3"]?></p>
                </div>
                <img class="prof" src="images/profil.png">
            </section>

            <section class="hashtags">
                <div class="in-hash">
                    <img class="cut" src="images/iphone-cut.png">
                    <h3><?=$trad["hash"]?></h3>
                    <h2><?=$trad["hash2"]?></h2>
                    <p><?=$trad["hash3"]?></p>
                </div>
            </section>

            <section class="plateforme mess">
                <div class="left">
                    <h3><?=$trad["com"]?></h3>
                    <h2><?=$trad["com2"]?></h2>
                     <p><?=$trad["com3"]?></p>
                </div>
                <img class="message" src="images/message.png">
            </section>

                <div class="wrap">
                  <ul class="testimonial-group">
                    <li><i class="caro"></i><?=$trad["test"]?><span>Nhu</span></li>
                    <li><i class="ted"></i><?=$trad["test2"]?><span>Ted</span></li>
                    <li><i class="emma"></i><?=$trad["test3"]?><span>Emma</span></li>
                  </ul>

                  <div id="testimonial"></div>
                </div>


            <section class="download">
                <div>
                    <p><?=$trad["tente"]?></p>
                    <div class="cloud"></div>
                    <a href="http://carolinedemaubeuge.be/SHIIP/APP/"><?=$trad["dl"]?><div class="arrow"></div></a>
                </div>
            </section>
            
            <footer>
                <p class="ty"><?=$trad["copy"]?></p>
                <p class="ty cond"><a href="conditions.html"><?=$trad["cond"]?></a>  |  <a href="mentions.html"><?=$trad["priv"]?></a></p>
                <div class="social">
                    <ul>
                        <li><a href="https://twitter.com/ShiipService" class="twitter">Twitter</a></li>
                        <li><a href="https://www.facebook.com/ShiipService?fref=ts" class="facebook">Facebook</a></li>
                    </ul>   
                </div>
            </footer>   
        </div>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script src="js/min/global-min.js"></script>
    </body>
</html>