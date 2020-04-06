<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <title>GMG - Template</title>
    </head>
    <body>



        <header class="container-fluid bg-black text-white text-center">
            <nav class="navbar navbar-expand-md navbar-dark bg-black container">
                <a class="navbar-brand" href="#"><img src="images/icons/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <form class="form-inline mr-auto">
                        <!-- <input class="form-control" type="text" placeholder="Search"> -->
                    </form>
                    <ul class="navbar-nav my-2 my-md-0" id="main-navigation">
                        <li class="nav-item">
                            <a class="nav-link active" href="content/home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="content/faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="content/contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="content/user.php">Mon Compte</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DASHBOARD</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="admin/admin.php">Admin</a>
                                <a class="dropdown-item" href="admin/gestion-user.php">Gestion Utilisateurs</a>
                                <a class="dropdown-item" href="admin/gestion-produits.php">Gestion des Produits</a>
                                <a class="dropdown-item" href="admin/gestion-classement.php">Gestion du Classement</a>
                                <a class="dropdown-item" href="admin/gestion-maintenance.php">Maintenance</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container alert alert-dismissible fade show" role="alert" id="instruction">
                <h1 class="diplay-4 text-center">Comment ca marche ?</h1>
                <p class="text-center text-secondary font-italic"><span>Instruction</span></p>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="d-flex flex-column media-body py-md-4 text-center single-defination">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <img src="images/icons/select-white.svg">
                            </div>
                            <h4 class="mb-20 titre">Choisis ton lot</h4>
                            <p>Parmis la liste, sélectionne le lot pour lequel tu souhaites participer </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="d-flex flex-column media-body py-md-4 text-center single-defination">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <img src="images/icons/video-player-white.svg">
                            </div>
                            <h4 class="mb-20 titre">Regardes ta pub</h4>
                            <p>Une vidéo de quelques secondes est diffusé pour participer au tirage au sort</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="d-flex flex-column media-body py-md-4 text-center single-defination">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <img src="images/icons/clover-white.svg">
                            </div>
                            <h4 class="mb-20 titre">Augmentes tes chances</h4>
                            <p>Recommences chaque jour jusqu'au tirage pour augmenter tes chances</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="d-flex flex-column media-body py-md-4 text-center single-defination">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <img src="images/icons/trophy-white.svg">
                            </div>
                            <h4 class="mb-20 titre">Résultat</h4>
                            <p>Tu recevras un mail suite au tirage au sort si tu es le gagnant</p>
                        </div>
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" class=" text-white">&times;</span>
                    </button>
                </div>
            </div>
        </header>


        <footer class="container-fluid bg-black">
            <div class="container mx-auto row d-flex align-items-center">
                <div class="col-md-4 text-center">
                    <a href="#">
                        <img src="images/icons/logo.png" alt="">
                    </a>
                </div>
                <div class="col-md-4 d-flex flex-column">
                    <a class="first" href="../faq.php">FAQ</a>
                    <a href="mailto:contatct@givemygift.com">contatct@givemygift.com</a>
                    <a target="_blank" href="../CGU.pdf">Condition Générale d'Utilisation</a>
                </div>
                <div class="col-md-4 social">
                    <div class="socail">
                    <ul>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/GiveMyGiftOfficial/">
                                <i class="fab fa-facebook-square" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://twitter.com/GiveMyGift">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/givemygiftofficiel/?hl=fr">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                      </div>
                </div>
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>