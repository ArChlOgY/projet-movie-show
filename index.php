<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <!-- BOOTSTRAP -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Movie / Serie</title>
        <!-- FONT AWESOME-->
        <script src="https://kit.fontawesome.com/6ebea31493.js" crossorigin="anonymous"></script>
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@100&display=swap" rel="stylesheet">
        <!-- BOOTSTRAP -->
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- CSS INTERNAL -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <!-- SITE HEADER -->
        <header>
            <div class="container mt-3">
                <div class="row text-center mb-3">
                    <div class="col-md-8 col-lg-9 col-xxl-10 navbar-movie">
                        <ul class="nav nav-pills">
                        <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php?request=cinema" target="_blank">Cinema</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php?request=series">Séries</a>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Lost</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">COMING SOON</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xxl-2">
                    <ul class="nav nav-pills allocine-btn">

                            <li class="nav-item">
                                <a class="nav-link active" href="https://www.allocine.fr/" target="_blank"><img class="allocine" src="https://assets.allocine.fr/skin/img/allocine/logo-main-ab1b33daf0.svg" width="140" height="25" alt="allocine"></a>
                            </li>
                        </ul>       
                    </div>
                </div>
            </div>
        </header>
        <hr class="head-break">
        <main>
            <section>
                <article>
                    <div class="container">
                        <div class="row d-flex justify-content-around">
                            <?php
                                if (isset($_GET['request']) && !empty($_GET['request'])) {
                                    
                                    switch ($_GET["request"]) {
                                        case "cinema":
                                            include './ctler/sortie-cine.php';
                                            break;
                                        case "series":
                                            include './ctler/serie.php';
                                            break;
                                        }
                                } else {
                                    include './ctler/sortie-cine.php';
                                }
                            ?>
                        </div>
                    </div>
                </article>
            </section>
        </main>
        <footer>
            <div class="container footer mt-3">
                <div class="row">
                    <div class="col-12 text-center footer-icon">
                        <i class="fa-brands fa-html5"></i>
                        <i class="fa-brands fa-css3-alt"></i>
                        <i class="fa-brands fa-php"></i>
                        <a href="https://github.com/ArChlOgY/" target="_blank"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>