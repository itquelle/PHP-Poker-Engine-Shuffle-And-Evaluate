<?php
error_reporting(E_ERROR);
$playPokerArray = [];

require "language/en.php";
require "classes/deck.php";
require "classes/poker.php";

$playerPointsArrayList = [];
$numberOfPlayers = 3;

# Deck erstellen
$texasDeck = new deck();
$texasDeck->dealTexas($numberOfPlayers);

/**
 * @info Flop, Turn, River erstellen
 * @info(EN) Create flop, turn and river
 */
$playPokerArray["flop"]         = $texasDeck->getFlopArray();
$playPokerArray["turn"]         = $texasDeck->getTurn();
$playPokerArray["river"]        = $texasDeck->getRiver();
$playPokerArray["full_flop"]    = $texasDeck->getFlopArray();
array_push($playPokerArray["full_flop"], $texasDeck->getTurn());
array_push($playPokerArray["full_flop"], $texasDeck->getRiver());

/**
 * @info
 */
for($i=0; $i<$numberOfPlayers; $i++){
    $playPokerArray["player_" . $i] = [
        "cards" => $texasDeck->getPlayerPocketById($i),
        "hand"  => $texasDeck->getPlayerFinalHandById($i)
    ];
}

/**
 * @info Hände auswerten
 * @info(EN) Evaluate hands
 * @param $texasDeck
 * @param $finalHand
 * @param $playerID
 * @param $playPokerArray
 */
function handEvaluate($texasDeck, $finalHand, $playerID, &$playPokerArray){
    global $playerPointsArrayList;

    $evaluateArray = $texasDeck->convertIt($finalHand);
    $chart = count_chars($finalHand,1);
    $chartArray = array($chart);

    $testIt = new pokerEngine();
    $testIt->handTest($chartArray,$evaluateArray);

    $playPokerArray["player_" . $playerID]["points"] = $testIt->getTotalPoints();
    $playPokerArray["player_" . $playerID]["text"] = $testIt->getText();

    $playerPointsArrayList["".$testIt->getTotalPoints().""][] = $playerID;
}

/**
 * @info Array-Listener Hände auswerten
 * @info(EN) Set array to evaluate hands
 */
for($i=0; $i<$numberOfPlayers; $i++){
    handEvaluate($texasDeck, $texasDeck->getPlayerFinalHandByIdStringFormat($i), $i, $playPokerArray);
}

/**
 * @info Gewinner setzen
 * @info(EN) Set winner
 */
function getWinner($playerArrayList){
    global $playPokerArray;
    $playPokerArray["winner_list"] = $playerArrayList[array_key_first($playerArrayList)];
}
krsort($playerPointsArrayList);
getWinner($playerPointsArrayList);

echo "<pre>".print_r($playPokerArray, 1)."</pre>";