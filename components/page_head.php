<?php
    //must have $page_name
    //can have $links;

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?=$page_name?></title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/modal.css">
    <?=isset($links)?$links:""?>
</head>
