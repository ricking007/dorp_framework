<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo DEFAULT_PAGE_DESCRIPTION; ?>">
        <meta name="keywords" content="">
        <meta property="og:site_name" content=""/>
        <meta property="og:title" content=""/>
        <title><?php echo DEFAULT_PAGE_TITLE; ?></title>
        <base href="<?= BASE_URL; ?>"/>

        <!-- Favicons -->
        <!-- <link href="img/favicon.png" rel="icon"> -->
        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">
        <?php
        if (isset($this->css) && is_array($this->css)) {
            foreach ($this->css as $css) {
                echo '<link href="' . $css . '"rel="stylesheet"/>' . PHP_EOL;
            }
        }
        ?>
    </head>
    <body>
        


