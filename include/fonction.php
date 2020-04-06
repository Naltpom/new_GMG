<?php
//--- FONCTION MEMEBRE CONNECTE
// cette fonction permet de savoir si le membre est connecté ou non
function connect()
{
    //si l'indice 'membre' n'est pas définit, cela veut dire que l'internaute n'est pas passé par la page connexion, et peut-être inscription
    if(!isset($_SESSION['membre']))
    {
        return false;
    }
    else // sinon l'indice 'membre' est bien présent dans la session, le mombre est bien connecté
    {
        return true;
    }
}

//--- FONCTION ADMIN CONNECTE
// cette fonction permet de savoir si le membre est admin ou non
function connectAdmin()
{
    //si le membre est bien définit dans le fichier session et que l'indice du 'statut' a bien pour valeur '1', cela veut dire que l'utilisateur est bien administrateur du site 
    if(connect() && $_SESSION['membre']['statut'] == 1)
    {
        return true;
    }
    else // sinon l'internaute n'est peut être pas connecté ni admin
    {
        return false;
    }
}
?>