<?php

/**
 * siteHead
 * @author: Mohamed Moughamir <hello@omnizya.com>
 * @param $pageTitle string
 * @param $description var|string
*/
function siteHead($pageTitle, $description, $class){

    $doc = '<!doctype html>';
    $doc .= '<html lang="fr" class="'.$class.'">';
    $doc .= '<head>';
    $doc .= '<meta charset="UTF-8">';
    $doc .= '<title>'.$pageTitle.'</title>';
    $doc .= '<meta name="description" content="'.$description.'">';
    $doc .= '<meta name="viewport" content="width=device-width, initial-scale=1.0" />';
    $doc .= '<meta name="robots" content="noindex, nofollow" />';
    $doc .= '<link rel="stylesheet" href="css/tarot.css">';
    $doc .= '<link rel="icon" type="image/x-icon" href="img/favicon.png" />';
    $doc .= '<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Lobster|Open+Sans:300,400,700&amp;subset=latin-ext" rel="stylesheet">';
    $doc .= '</head>';
    return $doc;
}
