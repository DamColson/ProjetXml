<?php
include 'file.php';
?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
        <title></title>
    </head> 
    <body>
        <nav class='<?php
        if ($_COOKIE['design'] == 'Rouge'):
            echo 'red';
        elseif ($_COOKIE['design'] == 'Bleu'):
            echo 'blue';
        elseif ($_COOKIE['design'] == 'Noir'):
            echo 'black';
        elseif (count($_COOKIE) == 0):
            echo 'red';
        endif;
        ?>'>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><i class="material-icons">list_alt</i>rssfeed</a>
                <ul class="right hide-on-med-and-down">
                    <li class=""><a href="Accueil">Accueil</a></li>
                    <?php
                        foreach ($tableRSS as $key => $value):
                            ?><li><a href = "<?= $key; ?>"><?= ${'xml' . $key}->channel->title; ?>
                            </a>
                            <?php
                        endforeach;
                        ?>
                    <li class=''><a href=""><i class="material-icons">search</i></a></li>
                    <li class=''><a href=""><i class="material-icons">security</i></a></li>
                    <li class=''><a href="Disconnect"><i class="material-icons">settings</i></a></li>
                    <li class=''<a href=""><i class=""><?= isset($_COOKIE['firstName']) ? $_COOKIE['firstName'] : ''; ?></i></a></li>
                    <li class=''><a href="Disconnect"><i class="material-icons">toggle_on</i></a></li>
                </ul>
            </div>
        </nav>
        <?php
        if (isset($_COOKIE['firstName']) && isset($_COOKIE['lastName']) && isset($_COOKIE['design']) && isset($_COOKIE['numbArticle'])):
            if (isset($_GET['page']) && $_GET['page'] == 'Technos'):
                ?>
                <div class="row">
                    <?php foreach ($xmlTechnos->channel->item as $elements):
                        ?>
                        <div class="<?php
                        if ($_COOKIE['design'] == 'Rouge'):
                            echo 'red';
                        elseif ($_COOKIE['design'] == 'Bleu'):
                            echo 'blue';
                        elseif ($_COOKIE['design'] == 'Noir'):
                            echo 'black';
                        elseif (count($_COOKIE) == 0):
                            echo 'red';
                        endif;
                        ?> col s12">
                            <div class="card">
                                <div class="card-image">
                                    <img src="<?= $elements->enclosure->attributes()->{'url'}; ?>" />
                                </div>
                                <div class="card-content">
                                    <p class="card-title blue-text"><?= $elements->title; ?></p>
                                    <p class="card-title blue-text"><?= $elements->pubDate; ?></p>
                                </div>
                                <div class="card-action">
                                    <a href="#">description</a>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>
                </div>
                <?php
            elseif (isset($_GET['page']) && $_GET['page'] == 'Applis'):
                ?>
                <div class="row">
                    <?php foreach ($xmlApplis->channel->item as $elements):
                        ?>
                        <div class="<?php
                        if ($_COOKIE['design'] == 'Rouge'):
                            echo 'red';
                        elseif ($_COOKIE['design'] == 'Bleu'):
                            echo 'blue';
                        elseif ($_COOKIE['design'] == 'Noir'):
                            echo 'black';
                        elseif (count($_COOKIE) == 0):
                            echo 'red';
                        endif;
                        ?> col s12">
                            <div class="card">
                                <div class="card-image">
                                    <img src="<?= $elements->enclosure->attributes()->{'url'}; ?>" />
                                </div>
                                <div class="card-content">
                                    <p class="card-title blue-text"><?= $elements->title; ?></p>
                                    <p class="card-title blue-text"><?= $elements->pubDate; ?></p>
                                </div>
                                <div class="card-action">
                                    <a href="#">description</a>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>
                </div>
                    <?php
                elseif (isset($_GET['page']) && $_GET['page'] == 'Security'):
                    ?>
                <div class="row">
                    <?php foreach ($xmlSecurity->channel->item as $elements):
                        ?>
                        <div class="<?php
                        if ($_COOKIE['design'] == 'Rouge'):
                            echo 'red';
                        elseif ($_COOKIE['design'] == 'Bleu'):
                            echo 'blue';
                        elseif ($_COOKIE['design'] == 'Noir'):
                            echo 'black';
                        elseif (count($_COOKIE) == 0):
                            echo 'red';
                        endif;
                        ?> col s12">
                            <div class="card">
                                <div class="card-image">
                                    <img src="<?= $elements->enclosure->attributes()->{'url'}; ?>" />
                                </div>
                                <div class="card-content">
                                    <p class="card-title blue-text"><?= $elements->title; ?></p>
                                    <p class="card-title blue-text"><?= $elements->pubDate; ?></p>
                                </div>
                                <div class="card-action">
                                    <a href="#">description</a>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>
                </div>
                        <?php
                    elseif ((isset($_GET['page']) && $_GET['page'] == 'Accueil') || count($_GET) == 0):
                        ?>
                <div class="row">
                    <div class="col s4"><?php for ($i = 0; $i < $_COOKIE['numbArticle']; $i++):
                            ?><div class="<?php
                            if ($_COOKIE['design'] == 'Rouge'):
                                echo 'red';
                            elseif ($_COOKIE['design'] == 'Bleu'):
                                echo 'blue';
                            elseif ($_COOKIE['design'] == 'Noir'):
                                echo 'black';
                            elseif (count($_COOKIE) == 0):
                                echo 'red';
                            endif;
                            ?>">
                                <ul class="collection">
                                    <li class="collection-item avatar">
                                        <img src="<?= $xmlSecurity->channel->item[$i]->enclosure->attributes()->{'url'}; ?>" alt="" class="circle">
                                        <span class="title"><?= $xmlSecurity->channel->item[$i]->title ?></span>
                                        <p><?= $xmlSecurity->channel->item[$i]->pubDate ?></p>
                                        <a type="button" class="btn waves-effect waves-light" href="">Description</a>
                                        </div>
                                            <?php
                                        endfor;
                                        ?>
                                    </div>
                                    <div class="col s4"><?php for ($i = 0; $i < $_COOKIE['numbArticle']; $i++):
                                            ?><div class="<?php
                                            if ($_COOKIE['design'] == 'Rouge'):
                                                echo 'red';
                                            elseif ($_COOKIE['design'] == 'Bleu'):
                                                echo 'blue';
                                            elseif ($_COOKIE['design'] == 'Noir'):
                                                echo 'black';
                                            elseif (count($_COOKIE) == 0):
                                                echo 'red';
                                            endif;
                                            ?>">
                                                <ul class="collection">
                                                    <li class="collection-item avatar">
                                                        <img src="<?= $xmlApplis->channel->item[$i]->enclosure->attributes()->{'url'}; ?>" alt="" class="circle">
                                                        <span class="title"><?= $xmlApplis->channel->item[$i]->title ?></span>
                                                        <p><?= $xmlApplis->channel->item[$i]->pubDate ?></p>
                                                        <a type="button" class="btn waves-effect waves-light" href="">Description</a>
                                                        </div>
                                                            <?php
                                                        endfor;
                                                        ?>
                                                    </div>
                                                    <div class="col s4"><?php for ($i = 0; $i < $_COOKIE['numbArticle']; $i++):
                                                            ?><div class="<?php
                                                            if ($_COOKIE['design'] == 'Rouge'):
                                                                echo 'red';
                                                            elseif ($_COOKIE['design'] == 'Bleu'):
                                                                echo 'blue';
                                                            elseif ($_COOKIE['design'] == 'Noir'):
                                                                echo 'black';
                                                            elseif (count($_COOKIE) == 0):
                                                                echo 'red';
                                                            endif;
                                                            ?>">
                                                                <ul class="collection">
                                                                    <li class="collection-item avatar">
                                                                        <img src="<?= $xmlTechnos->channel->item[$i]->enclosure->attributes()->{'url'}; ?>" alt="" class="circle">
                                                                        <span class="title"><?= $xmlTechnos->channel->item[$i]->title ?></span>
                                                                        <p><?= $xmlTechnos->channel->item[$i]->pubDate ?></p>
                                                                        <a type="button" class="btn waves-effect waves-light" href="">Description</a>
                                                                        </div>
                                                                        <?php
                                                                    endfor;
                                                                    ?></div>
                                                                    </div> 
                                                                    <?php

                                                                endif;
                                                            else:
                                                                ?><form action="index.php" method="POST">
                                                                    <label for="firstName">Prénom : </label>
                                                                    <input type="text" name="firstName" id="firstName" />
                                                                    <label for="lastName">Nom : </label>
                                                                    <input type="text" name="lastName" id="lastName" />
                                                                    <label for="design">Design : </label>
                                                                    <select name="design" id="design">
                                                                        <option value="Noir">Noir</option>
                                                                        <option value="Rouge">Rouge</option>
                                                                        <option value="Bleu">Bleu</option>
                                                                    </select>
                                                                    <label for="numbArticle">Nombre d'articles : </label>
                                                                    <select name="numbArticle" id="numbArticle">
                                                                        <option value="3">3</option>
                                                                        <option value="5">5</option>
                                                                        <option value="8">8</option>
                                                                    </select>
                                                                    <button type="submit" class="btn waves-effect waves-light">Envoyer</button>
                                                                </form>


<?php
endif;
?>
                                                            <script src = "https://code.jquery.com/jquery-3.4.0.js" integrity = "sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin = "anonymous"></script>
                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
                                                            <script src="assets/scripts/main.js"></script>
                                                            </body>
                                                            </html>