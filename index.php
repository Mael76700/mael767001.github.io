<!DOCTYPE html>
<html>
    <head>
        <title>Mael767001 - Acceuil</title>
        <meta charset="utf-8">
        <link rel="icon" href="icon.ico" />
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <ul>
                <li> 
                    <a href="index.html">Acceuil</a>  
                    <a href="https://www.youtube.com/channel/UCvCbsx50nMVb71EF45nVVdQ" target="_BLANK">Youtube</a>
                    <a href="https://twitch.tv/mael767001" target="_BLANK">Twitch</a>
                    <a href="videos.html">Dernière Vidéos</a> 
                    <?php if (isset($_SESSION['id'])){
                        echo "<a href='#'>Deconnexion</a>";
                    }else {
                        echo "<a href='connexion.php'>Connexion</a>
                              <a href='inscription.php'>Inscription</a>";
                    }
                    ?>
                </li>
            </ul>
        </header>

        <a href="index.html"><img class="logo" alt="logo site" src="/img/logo.png"></a>
        <h2 class="desc">CRÉATEUR DE CONTENU SUR YOUTUBE ET TWITCH</h2>
        <iframe class="vid1" width="560" height="315" src="https://www.youtube.com/embed/OtPUNJgVjlw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <iframe class="vid2" width="560" height="315" src="https://www.youtube.com/embed/3fPuMS2GCGM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </body>
</html>