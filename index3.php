<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Ticketing</title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index3.php"><h1 id="titreBlog">TICKETING</h1></a>
                <p>Je vous souhaite la bienvenue sur ce modeste ticketing.</p>
            </header>
            <div id="contenu">
                <?php
                $bdd = new PDO('mysql:host=localhost;dbname=ticketing;charset=utf8',
                        'adminticketing', 'simone');
                $tickets = $bdd->query('select * from T_BILLET LEFT JOIN T_ETAT ON T_BILLET.TIC_ID = T_ETAT.id order by TIC_ID desc');
                foreach ($tickets as $ticket):
                    ?>
                    <article>
                        <header>
                            <h1 class="titreBillet"><?= $ticket['TIC_TITRE'] ?></h1>
                            <time><?= $ticket['TIC_DATE'] ?></time>
                        </header>
                        <p><?= $ticket['TIC_CONTENU'] ?></p>
                        <p><?= $ticket['etat'] ?></p>
                    </article>
                    <hr />
                <?php endforeach; ?>
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                Blog réalisé avec PHP, HTML5 et CSS.
            </footer>
        </div> <!-- #global -->
    </body>
</html>
