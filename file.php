<?php
$tableRSS = ['Technos' => 'https://www.01net.com/rss/actualites/technos/',
    'Applis' => 'https://www.01net.com/rss/actualites/applis-logiciels/',
    'Security' => 'https://www.01net.com/rss/actualites/securite/'
];
foreach ($tableRSS as $key => $value):
    ${'xml' . $key} = simplexml_load_file($value);
endforeach;
foreach ($_POST as $key => $value):
    setcookie($key, $value, time() + 24 * 3600);
    header("Location:/Accueil");
endforeach;

if(isset($_GET) && $_GET['page']=='Disconnect'):
    setcookie('firstName', FALSE, time() - 3600);
    setcookie('lastName', FALSE, time() - 3600);
    setcookie('design', FALSE, time() - 3600);
    setcookie('numbArticle', FALSE, time() - 3600);
    header("Location: /");
endif;

 var_dump($_POST);
?>