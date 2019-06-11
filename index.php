<?php
$tableRSS = ['Technos' => 'https://www.01net.com/rss/actualites/technos/',
    'Applis' => 'https://www.01net.com/rss/actualites/applis-logiciels/',
    'Security' => 'https://www.01net.com/rss/actualites/securite/'
];
foreach ($tableRSS as $key => $value):
    ${'xml' . $key} = simplexml_load_file($value);
endforeach;
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Germania+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
        <title>rssfeed</title>
    </head> 
    <body>
        <nav class='red'>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><i class="material-icons">list_alt</i>rssfeed</a>
                <ul class="right hide-on-med-and-down">
                    <li class=""><a href="http://www.rssfeed.info/">acceuil</a></li>
                    <?php
                    foreach ($tableRSS as $key => $value):
                        ?><li><a href = "<?= $key; ?>"><?= ${'xml' . $key}->channel->title; ?>
                            </a>
                            <?php
                        endforeach;
                        ?>
                    <li class=''><a href="sass.html"><i class="material-icons">search</i></a></li>
                    <li class=''><a href="badges.html"><i class="material-icons">security</i></a></li>
                    <li class=''><a href="settings.html"><i class="material-icons">settings</i></a></li>
                    <li class=''<a href=""><i class="">Yoan</i></a></li>
                    <li class=''><a href="mobile.html"><i class="material-icons">toggle_on</i></a></li>
                </ul>
            </div>
        </nav>

        <div class="red">
            <ul class="collection">
                <li class="collection-item avatar">
                    <img src="" alt="" class="circle">
                    <span class="title">Title</span>
                    <p>First Line <br>
                        Second Line
                    </p>  
                    </div>

                    <div class="row">
                        <div class="red col s12 m3">
                            <div class="card">
                                <div class="card-image">
                                    <img src="images/sample-1.jpg">
                                    <p class="card-title blue-text">date</p><br/>
                                    <span class="card-title blue-text">Card Title</span>

                                </div>
                                <div class="card-content">
                                </div>
                                <div class="card-action">
                                    <a href="#">description</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
                    <script src="assets/scripts/Projet.js"></script>
                    </body>
                    </html>