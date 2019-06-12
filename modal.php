<?php
$tableRSS = ['Technos' => 'https://www.01net.com/rss/actualites/technos/',
    'Applis' => 'https://www.01net.com/rss/actualites/applis-logiciels/',
    'Security' => 'https://www.01net.com/rss/actualites/securite/'
];
foreach ($tableRSS as $key => $value):
    ${'xml' . $key} = simplexml_load_file($value);
endforeach;
$cardNumb = (int) $_POST['card'];
$page = $_POST['page'];
$data = ${$page}->channel->item[$cardNumb]->description;
echo $data;
?>