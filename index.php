<?php
/**
 * @copyright Stevie-Ray Jr. (@itquelle.de)
 * @date 2021-10-09
 */
require "classes/poker.php";

$poker = new Poker();
$poker->setLanguage("en");
$poker->setPlayers(3);
$poker->create();
$poker->getWinners();

echo $poker->getJSON();