<?php
/**
 * @copyright Stevie-Ray Jr. (@itquelle.de)
 * @date 2021-10-09
 */
error_reporting(E_ERROR);

require "deck.php";
require "engine.php";

class Poker{

    public $language = "en";
    public $players = 2;

    public $pokerArray = [];
    public $pokerPlayersPointsArrayList = [];

    public function create(){

        #@ Create deck
        $pokerDeck = new deck();
        $pokerDeck->dealTexas($this->getPlayers());

        #@ Create flop, turn and river
        $this->pokerArray["flop"]         = $pokerDeck->getFlopArray();
        $this->pokerArray["turn"]         = $pokerDeck->getTurn();
        $this->pokerArray["river"]        = $pokerDeck->getRiver();

        #@ Full flop
        $this->pokerArray["full_flop"]    = $pokerDeck->getFlopArray();
        array_push($this->pokerArray["full_flop"], $pokerDeck->getTurn());
        array_push($this->pokerArray["full_flop"], $pokerDeck->getRiver());

        #@ Create Players
        for($i=0; $i<$this->getPlayers(); $i++){
            $this->pokerArray["player_" . $i] = [
                "cards" => $pokerDeck->getPlayerPocketById($i),
                "hand"  => $pokerDeck->getPlayerFinalHandById($i)
            ];
        }

        #@ Evalulate Hands
        for($i=0; $i<$this->getPlayers(); $i++){
            $this->evaluatePlayerHand($pokerDeck, $pokerDeck->getPlayerFinalHandByIdStringFormat($i), $i);
        }

    }

    public function getWinners(){
        #@ Get Winner
        krsort($this->pokerPlayersPointsArrayList);
        $this->pokerArray["winner_list"] = $this->pokerPlayersPointsArrayList[array_key_first($this->pokerPlayersPointsArrayList)];
        $this->pokerArray["winner_list_by_percent"] = [];

        foreach($this->pokerPlayersPointsArrayList as $key => $value){
            $this->pokerArray["winner_list_by_percent"][$value[0]] = $key;
        }

    }

    public function getPrintedArray(){
        echo "<pre>".print_r($this->pokerArray, 1)."</pre>";
    }

    public function getRawArray(){
        return $this->pokerArray;
    }

    public function getJSON(){
        header('Content-Type: application/json; charset=utf-8');
        return json_encode($this->pokerArray, JSON_UNESCAPED_UNICODE);
    }

    public function evaluatePlayerHand($texasDeck, $finalHand, $playerID){
        $evaluateArray  = $texasDeck->convertIt($finalHand);
        $chart          = count_chars($finalHand,1);
        $chartArray     = [$chart];

        $testIt = new pokerEngine();
        $testIt->handTest($chartArray,$evaluateArray);

        $this->pokerArray["player_" . $playerID]["points"]  = $testIt->getTotalPoints();
        $this->pokerArray["player_" . $playerID]["text"]    = $testIt->getText();

        $this->pokerPlayersPointsArrayList["".$testIt->getTotalPoints().""][] = $playerID;
    }

    public function getLanguage(): string{
        return $this->language;
    }

    public function setLanguage(string $language): void{
        require __DIR__.DIRECTORY_SEPARATOR."../language/" . strtolower($language) . ".php";
        $this->language = $language;
    }

    public function getPlayers(): int{
        return $this->players;
    }

    public function setPlayers(int $players): void{
        if($players > 9){
            throw new Error("Max. 9 players");
        }
        $this->players = $players;
    }

}