<?php
require_once('include/init.php');
require_once('include/header.php');
/*
    On va recuperer dans la bdd l'etat du site,
    on j'ai definit ici que si etat = 0 alors le site est en maintenance 
    sinon le site est disponible au utilisateur
*/

    require_once('include/nav.php');






    ?>



    <?php
    if($_GET && isset($_GET['l'])):
        if($_GET['l']=='home'):
            require_once('content/home.php');
        elseif($_GET['l']=='faq'):
            require_once('content/faq.php');
        elseif($_GET['l']=='contact'):
            require_once('content/contact.php');
        else:
            require_once('include/error.php');
        endif;
    endif;


    require_once('include/footer.php');
