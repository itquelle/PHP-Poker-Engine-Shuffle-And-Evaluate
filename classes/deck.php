<?php
/**
 * @copyright Jayme Fishman
 * @class https://www.phpclasses.org/package/3149-PHP-Shuffle-and-evaluate-a-Poker-deck-of-cards.html
 * @overwrite Stevie-Ray Jr. (@itquelle.de)
 */

#@ Remove functions from original
## public function getFlopImg(){ ... }
## public function getTurnImg(){ ... }
## public function getRiverImg(){ ... }
## public function getallPockets(){ ... }
## public function getP?PocketFlopTurn(){ ... }
## public function getP?PocketPlusFlop(){ ... }
## public function getP?FinalHand(){ ... }
## public function getPlayer?Pocket(){ ... }
## public function getpocket?Img(){ ... }

interface DeckInterface{
    public function mixThem(); #@ declare the functions - this one shuffles the deck and populates it with cards
    public function getFlopArray(): array; #@ Return Flop in Array
    public function getFlop(): string; #@ Return Flop as String
    public function getTurn(): string; #@ Return Turn as String
    public function getRiver(): string; #@ Return River as String
    public function getPlayerPocketById(int $playerID): array; #@ Return Player-Cards for Player-ID in Array
    public function getPlayerFinalHandById(int $playerID): string; #@ Return Full-Player-Final-Card (Player-Card, Flop, Turn, River) for Player-ID as String
    public function getPlayerFinalHandByIdStringFormat(int $playerId): string; #@ Return Player-Final Card for Player-ID as String
    public function convertIt($string): array; #@ Jayme Fishman
}

class Deck implements DeckInterface{

    public static $flop;        #@ holds the flop cards - is array
    public static $turn;        #@ array with only the turn card
    public static $river;       #@ array with only the river card
    public static $allhands;    #@ array with all pockets for $playnum players

    public $deck = [];
    public $evaluateArray = [];

    #@ Declare the functions - this one shuffles the deck and populates it with cards
    public function mixThem(){
        #@ these are the cards that will be shuffled and put into the deck
        $startingDeck = ["2H","3H","4H","5H","6H","7H","8H","9H","10H","JH","QH","KH","AH","2C","3C","4C","5C","6C","7C","8C","9C","10C","JC","QC","KC","AC","2D","3D","4D","5D","6D","7D","8D","9D","10D","JD","QD","KD","AD","2S","3S","4S","5S","6S","7S","8S","9S","10S","JS","QS","KS","AS"];
        #@ this outer loop says that while the deck has < 52 items in it do the following...
        while ((count($this->deck)) < 52) {
            #@ a piece of data here is a random value/card from $startingDeck
            $data = $startingDeck[mt_rand(0,51)];
            #@ to ensure that you don't put the same value in twice we have the inner loop
            while (!in_array($data, $this->deck)){
                array_push($this->deck, $data);
            }
        }
    }

    #@ Create Texas Hold'em
    public function dealTexas ($playnum){
        #@ Check Player number
        if ($playnum>9) { echo LOGS_00; return true; }
        else if ($playnum <0) { echo LOGS_00; return true; }

        #@ Create deck
        $texasDeck = new deck();
        #@ Shuffle deck
        $texasDeck->mixThem($this);

        #@ Create pocket for each player
        $secondcard     = ($playnum+1); #@ iterates the second value
        self::$allhands = [];           #@ master array holding all hands

        #@ Loop that sets values of cards and pushes them into master array
        for($cardcounter = 0; $cardcounter <= $playnum; $cardcounter++) {
            #@ set Card1 and set Card2 in the loop
            $c1     = $texasDeck->deck[$cardcounter];   #@ these values should be cards from the deck
            $c2     = $texasDeck->deck[$secondcard];    #@ these values should be cards from the deck
            $hand   = [$c1,$c2];                        #@ defines a hand as the values of cards 1 & 2
            array_push(self::$allhands, $hand);   #@ pushes the hands into the master array
            $secondcard++;                              #@ icrements the second card values - since it is not in
        }

        #@ Create the flop
        $commonCards    = [];               #@ creates the array to store all flop cards
        $flopStart      = ($playnum*2)+2;   #@ start position for flop cards
        $flopCards      = 8;                #@ defines how many cards in flop inclusive of burns
        for($x = 0; $x <= $flopCards; $x++) {
            $c3=$texasDeck->deck[$flopStart];
            array_push($commonCards, $c3);
            $flopStart++;
        }

        //Select flop cards for use in hand
        $totalCommonCards   = [$commonCards[1],$commonCards[2],$commonCards[3],$commonCards[5],$commonCards[7]];
        $totalCommonCards;
        self::$flop         = [$commonCards[1],$commonCards[2],$commonCards[3]];
        self::$turn         = [$commonCards[5]];
        self::$river        = [$commonCards[7]];
        $z                  = 0;

        for($finalHandCounter1 = 0; $finalHandCounter1 <= $playnum; $finalHandCounter1++) {
            array_push(self::$allhands[$z], $totalCommonCards);
            $z++;
        }
    }

    #@ Return Flop in Array
    public function getFlopArray(): array{
        return [self::$flop[0], self::$flop[1], self::$flop[2]];
    }
    #@ Return Flop in String
    public function getFlop(): string{
        return self::$flop[0].self::$flop[1].self::$flop[2];
    }
    #@ Return Turn Card
    public function getTurn(): string{
        return self::$turn[0];
    }
    #@ Return River Card
    public function getRiver(): string{
        return self::$river[0];
    }
    #@ Get Player-Cards by Player-ID
    public function getPlayerPocketById(int $playerID): array{
        return [self::$allhands[$playerID][0], self::$allhands[$playerID][1]];
    }
    #@ Get Player-Final Hand by Player-ID
    public function getPlayerFinalHandById(int $playerID): string{
        return self::$allhands[$playerID][0].self::$allhands[$playerID][1].self::getflop().self::getTurn().self::getRiver();
    }
    #@ Get Player-Final Hand Only String without (Flop, Turn and River)
    public function getPlayerFinalHandByIdStringFormat(int $playerId): string{
        return self::$allhands[$playerId][0].self::$allhands[$playerId][1];
    }

    public function convertIt($string): array{
        $countString = strlen($string);
        for ($a=0;$a<$countString-1;$a++) {
            if ($string[$a] == "1"){
                $data = $string[$a];
                $a++;
                $data .= $string[$a];
                $a++;
                $data .= $string[$a];
                array_push($this->evaluateArray,$data);
            } else {
                $data = $string[$a];
                $a++;
                $data .= $string[$a];
                array_push($this->evaluateArray,$data);
            }
        }
        return $this->evaluateArray;
    }

}