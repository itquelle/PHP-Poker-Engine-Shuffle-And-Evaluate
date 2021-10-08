<?php

class Deck {

    public static $flop; //holds the flop cards - is array
    public static $turn; //array with only the turn card
    public static $river; //array with only the river card
    public static $allhands; //array with all pockets for $playnum players
    public static $imgPath; //path where your images will be stored
    const IMAGEPATH = "<img src=\/localhost/poker/cards/"; //***IMPORTANT*** SET THIS TO YOUR IMAGE PATH
    const ALTIMAGEPATH = "<img src=\localhost/poker/cards/";
    //Declare the fields
    public $deck=array();

    //declare the functions - this one shuffles the deck and populates it with cards
    //mt_rand is a better random algorithim than shuffle()
    public function mixThem()
    {//start MixThem bracket
        //these are the cards that will be shuffled and put into the deck
        $startingDeck=array("2H","3H","4H","5H","6H","7H","8H","9H","10H","JH","QH","KH","AH","2C","3C","4C","5C","6C","7C","8C","9C","10C","JC","QC","KC","AC","2D","3D","4D","5D","6D","7D","8D","9D","10D","JD","QD","KD","AD","2S","3S","4S","5S","6S","7S","8S","9S","10S","JS","QS","KS","AS");
        //this outer loop says that while the deck has < 52 items in it do the following...
        while ((count($this->deck))<52)
        {//start outer while loop
            //a piece of data here is a random value/card from $startingDeck
            $data = $startingDeck{mt_rand(0,51)};
            //to ensure that you don't put the same value in twice we have the inner loop
            while (!in_array($data, $this->deck)){//start inner while loop
                array_push($this->deck, $data);
            }//end inner while loop
        }//end out while loop
    }//end mixThem


    public function dealTexas ($playnum)
    {
        if ($playnum>9)
        {
            echo "PLAYER NUMBER MUST BE BETWEEN 0 AND 9!";
            print"<p>\n</p>";
            return true;
        }
        else if
        ($playnum <0)
        {
            echo "PLAYER NUMBER MUST BE BETWEEN 0 AND 9!";
            print"<p>\n</p>";
            return true;
        }
        //create deck
        $texasDeck = new deck();
        //shuffle deck
        $texasDeck->mixThem($this);

        //create pocket for each player
        $cardcounter; //used to iterate the first card value
        $secondcard=($playnum+1);//iterates the second value
        self::$allhands = array();//master array holding all hands
        //loop that sets values of cards and pushes them into master array
        for($cardcounter=0;$cardcounter<=$playnum;$cardcounter++)
        {
            //set Card1 and set Card2 in the loop
            $c1=$texasDeck->deck[$cardcounter];//these values should be cards from the deck
            $c2=$texasDeck->deck[$secondcard];//these values should be cards from the deck
            $hand = array ($c1,$c2);//defines a hand as the values of cards 1 & 2
            array_push(self::$allhands, $hand);//pushes the hands into the master array
            $secondcard++;//icrements the second card values - since it is not in
            //the for loop
        }//end for loop

        //create the flop
        $commonCards=array();//creates the array to store all flop cards
        $flopStart=($playnum*2)+2;//start position for flop cards
        $x;//start variable for the for loop
        $flopCards=8;//defines how many cards in flop inclusive of burns
        for($x=0;$x<=$flopCards;$x++)//loop to populate the flop
        {
            $c3=$texasDeck->deck[$flopStart];
            array_push($commonCards, $c3);
            $flopStart++;
        }//end for loop
        //Select flop cards for use in hand
        $totalCommonCards=array($commonCards[1],$commonCards[2],$commonCards[3],$commonCards[5],$commonCards[7]);
        $totalCommonCards;
        self::$flop = array($commonCards[1],$commonCards[2],$commonCards[3]);
        self::$turn = array($commonCards[5]);
        self::$river = array($commonCards[7]);

        $finalHandCounter1;
        $finalHands=array();
        $z=0;

        for($finalHandCounter1=0;$finalHandCounter1<=$playnum;$finalHandCounter1++)
        {
            array_push(self::$allhands[$z], $totalCommonCards);
            $z++;
        }//end for loop

    }

    //RETURNS THE FLOP
    public function getFlopArray()
    {
        return [
            self::$flop[0]
            , self::$flop[1]
            , self::$flop[2]
        ];
    }
    public function getFlop()
    {
        return self::$flop[0].self::$flop[1].self::$flop[2];
    }
    public function getFlopImg()
    {
        $flop1img = self::$flop[0].".svg";
        $flop2img = self::$flop[1].".svg";
        $flop3img = self::$flop[2].".svg";
        return self::IMAGEPATH.$flop1img."  height='120'>".self::IMAGEPATH.$flop2img."  height='120'>".self::IMAGEPATH.$flop3img." height='120'>";
        //return "<img src=\./xampp/images/$flop1img>."." "."<img src=\./xampp/images/$flop2img>."." "."<img src=\./xampp/images/$flop3img>.";
    }
    //RETURNS THE TURN CARD
    public function getTurn()
    {
        return self::$turn[0];
    }
    public function getTurnImg()
    {
        $turnImg = self::$turn[0].".svg";
        return self::IMAGEPATH.$turnImg." height='120'>";
    }
    //RETURNS THE RIVER CARD
    public function getRiver()
    {
        return self::$river[0];
    }
    public function getRiverImg()
    {
        $riverImg = self::$river[0].".svg";
        return self::IMAGEPATH.$riverImg."  height='120'>";
    }
    //RETURNS ALL POCKET PAIRS FOR $PLAYNUM PLAYERS
    public function getallPockets()
    {
        //need to create a for loop to gen the output here
        //should be tied to playnum
        return self::$allhands[0][0]." ".self::$allhands[0][1]." ".self::$allhands[1][0]." ".self::$allhands[1][1]." ".self::$allhands[2][0]." ".self::$allhands[2][1]." ".self::$allhands[3][0]." ".self::$allhands[3][1]." ".self::$allhands[4][0]." ".self::$allhands[4][1]." ".self::$allhands[5][0]." ".self::$allhands[5][1]." ".self::$allhands[6][0]." ".self::$allhands[6][1]." ".self::$allhands[7][0]." ".self::$allhands[7][1]." ".self::$allhands[8][0]." ".self::$allhands[8][1]." ".self::$allhands[9][0]." ".self::$allhands[9][1];
    }

    /*
    *********************************************|
    THESE RETURN THE POCKET PAIR FOR EACH PLAYER |
    UP TO 10 PLAYERS IN TOTAL.                   |
    *********************************************|
    */
    // Spieler: Karten ausgeben nach Spieler-ID
    public function getPlayerPocketById(int $playerID){
        return [self::$allhands[$playerID][0], self::$allhands[$playerID][1]];
    }
    // Spieler: Karten ausgeben :: Final Hand
    public function getPlayerFinalHandById(int $playerID){
        return self::$allhands[$playerID][0].self::$allhands[$playerID][1].self::getflop().self::getTurn().self::getRiver();
    }

    // Spieler 1: Karten Pocket
    public function getPlayer1PocketArray(){
        return [self::$allhands[0][0], self::$allhands[0][1]];
    }
    public function getPlayer1Pocket(){
        return self::$allhands[0][0].self::$allhands[0][1];
    }
    public function getpocket1Img(){
        $p1Pocket1 = self::$allhands[0][0].".svg";
        $p1Pocket2 = self::$allhands[0][1].".svg";
        return self::IMAGEPATH.$p1Pocket1." height='120'>".self::IMAGEPATH.$p1Pocket2." height='120'>";;
    }

    public function getPlayer2PocketArray(){
        return [self::$allhands[1][0], self::$allhands[1][1]];
    }
    public function getPlayer2Pocket()
    {
        return self::$allhands[1][0].self::$allhands[1][1];
    }
    public function getpocket2Img()
    {
        $p2Pocket1 = self::$allhands[1][0].".jpg";
        $p2Pocket2 = self::$allhands[1][1].".jpg";
        return self::IMAGEPATH.$p2Pocket1.">".self::IMAGEPATH.$p2Pocket2.">";;
    }

    public function getPlayer3PocketArray(){
        return [self::$allhands[2][0], self::$allhands[2][1]];
    }
    public function getPlayer3Pocket()
    {
        return self::$allhands[2][0].self::$allhands[2][1];
    }
    public function getpocket3Img()
    {
        $p3Pocket1 = self::$allhands[2][0].".jpg";
        $p3Pocket2 = self::$allhands[2][1].".jpg";
        return self::IMAGEPATH.$p3Pocket1.">".self::IMAGEPATH.$p3Pocket2.">";;
    }
    public function getPlayer4Pocket()
    {
        return self::$allhands[3][0].self::$allhands[3][1];
    }
    public function getpocket4Img()
    {
        $p4Pocket1 = self::$allhands[3][0].".jpg";
        $p4Pocket2 = self::$allhands[3][1].".jpg";
        return self::IMAGEPATH.$p4Pocket1.">".self::IMAGEPATH.$p4Pocket2.">";;
    }
    public function getPlayer5Pocket()
    {
        return self::$allhands[4][0].self::$allhands[4][1];
    }
    public function getpocket5Img()
    {
        $p5Pocket1 = self::$allhands[4][0].".jpg";
        $p5Pocket2 = self::$allhands[4][1].".jpg";
        return self::IMAGEPATH.$p5Pocket1.">".self::IMAGEPATH.$p5Pocket2.">";;
    }
    public function getPlayer6Pocket()
    {
        return self::$allhands[5][0].self::$allhands[5][1];
    }
    public function getpocket6Img()
    {
        $p6Pocket1 = self::$allhands[5][0].".jpg";
        $p6Pocket2 = self::$allhands[5][1].".jpg";
        return self::IMAGEPATH.$p6Pocket1.">".self::IMAGEPATH.$p6Pocket2.">";;
    }
    public function getPlayer7Pocket()
    {
        return self::$allhands[6][0].self::$allhands[6][1];
    }
    public function getpocket7Img()
    {
        $p7Pocket1 = self::$allhands[6][0].".jpg";
        $p7Pocket2 = self::$allhands[6][1].".jpg";
        return self::IMAGEPATH.$p7Pocket1.">".self::IMAGEPATH.$p7Pocket2.">";;
    }
    public function getPlayer8Pocket()
    {
        return self::$allhands[7][0].self::$allhands[7][1];
    }
    public function getpocket8Img()
    {
        $p8Pocket1 = self::$allhands[7][0].".jpg";
        $p8Pocket2 = self::$allhands[7][1].".jpg";
        return self::IMAGEPATH.$p8Pocket1.">".self::IMAGEPATH.$p8Pocket2.">";;
    }
    public function getPlayer9Pocket()
    {
        return self::$allhands[8][0].self::$allhands[8][1];
    }
    public function getpocket9Img()
    {
        $p9Pocket1 = self::$allhands[8][0].".jpg";
        $p9Pocket2 = self::$allhands[8][1].".jpg";
        return self::IMAGEPATH.$p9Pocket1.">".self::IMAGEPATH.$p9Pocket2.">";;
    }
    public function getPlayer10Pocket()
    {
        return self::$allhands[9][0].self::$allhands[9][1];
    }
    public function getpocket10Img()
    {
        $p10Pocket1 = self::$allhands[9][0].".jpg";
        $p10Pocket2 = self::$allhands[9][1].".jpg";
        return self::IMAGEPATH.$p10Pocket1.">".self::IMAGEPATH.$p10Pocket2.">";;
    }
    /*
    *********************************************|
    THESE RETURN THE POCKET PAIR AND PLOP CARDS  |
    FOR EACH PLAYERUP TO 10 PLAYERS IN TOTAL.    |
    *********************************************|
    */
    public function getP1PocketPlusFlop()
    {
        return self::getPlayer1Pocket()." ".self::getflop()." ";
    }
    public function getP2PocketPlusFlop()
    {
        return self::getPlayer2Pocket()." ".self::getflop()." ";
    }
    public function getP3PocketPlusFlop()
    {
        return self::getPlayer3Pocket()." ".self::getflop()." ";
    }
    public function getP4PocketPlusFlop()
    {
        return self::getPlayer4Pocket()." ".self::getflop()." ";
    }
    public function getP5PocketPlusFlop()
    {
        return self::getPlayer5Pocket()." ".self::getflop()." ";
    }
    public function getP6PocketPlusFlop()
    {
        return self::getPlayer6Pocket()." ".self::getflop()." ";
    }
    public function getP7PocketPlusFlop()
    {
        return self::getPlayer7Pocket()." ".self::getflop()." ";
    }
    public function getP8PocketPlusFlop()
    {
        return self::getPlayer8Pocket()." ".self::getflop()." ";
    }
    public function getP9PocketPlusFlop()
    {
        return self::getPlayer9Pocket()." ".self::getflop()." ";
    }
    public function getP10PocketPlusFlop()
    {
        echo self::getPlayer10Pocket()." ".self::getflop()." ";
    }
    /*
    **************************************************************|
    THESE RETURN INDIVIDUAL PLAYER POCKETS AND THE TURN CARDS     |
    **************************************************************|
    */
    public function getP1PocketFlopTurn()
    {
        return self::getPlayer1Pocket()." ".self::getflop()." ".self::getTurn()." ";
    }
    public function getP2PocketFlopTurn()
    {
        return self::getPlayer2Pocket()." ".self::getflop()." ".self::getTurn()." ";
    }
    public function getP3PocketFlopTurn()
    {
        return self::getPlayer3Pocket()." ".self::getflop()." ".self::getTurn()." ";
    }
    public function getP4PocketFlopTurn()
    {
        return self::getPlayer4Pocket()." ".self::getflop()." ".self::getTurn()." ";
    }
    public function getP5PocketFlopTurn()
    {
        return self::getPlayer5Pocket()." ".self::getflop()." ".self::getTurn()." ";
    }
    public function getP6PocketFlopTurn()
    {
        return self::getPlayer6Pocket()." ".self::getflop()." ".self::getTurn()." ";
    }
    public function getP7PocketFlopTurn()
    {
        return self::getPlayer7Pocket()." ".self::getflop()." ".self::getTurn()." ";
    }
    public function getP8PocketFlopTurn()
    {
        return self::getPlayer8Pocket()." ".self::getflop()." ".self::getTurn()." ";
    }
    public function getP9PocketFlopTurn()
    {
        return self::getPlayer9Pocket()." ".self::getflop()." ".self::getTurn()." ";
    }
    public function getP10PocketFlopTurn()
    {
        return self::getPlayer10Pocket()." ".self::getflop()." ".self::getTurn()." ";
    }
    /*
    *******************************************************|
    THESE RETURN THE FINAL HANDS OF ALL PLAYERS WITH THE   |
    POCKETS, TURN, AND RIVER FOR A TOTAL OF SEVEN CARDS    |
    THE FIRST TWO OF WITCH ARE UNIQUE TO THE PLAYER        |
    ********************************************************
    */
    public function getP1FinalHand()
    {
        return self::getPlayer1Pocket().self::getflop().self::getTurn().self::getRiver();
    }
    public function getP2FinalHand()
    {
        return self::getPlayer2Pocket().self::getflop().self::getTurn().self::getRiver();
    }
    public function getP3FinalHand()
    {
        return self::getPlayer3Pocket().self::getflop().self::getTurn().self::getRiver();
    }
    public function getP4FinalHand()
    {
        return self::getPlayer4Pocket().self::getflop().self::getTurn().self::getRiver();
    }
    public function getP5FinalHand()
    {
        return self::getPlayer5Pocket().self::getflop().self::getTurn().self::getRiver();
    }
    public function getP6FinalHand()
    {
        return self::getPlayer6Pocket().self::getflop().self::getTurn().self::getRiver();
    }
    public function getP7FinalHand()
    {
        return self::getPlayer7Pocket().self::getflop().self::getTurn().self::getRiver();
    }
    public function getP8FinalHand()
    {
        return self::getPlayer8Pocket().self::getflop().self::getTurn().self::getRiver();
    }
    public function getP9FinalHand()
    {
        return self::getPlayer9Pocket().self::getflop().self::getTurn().self::getRiver();
    }
    public function getP10FinalHand()
    {
        return self::getPlayer10Pocket().self::getflop().self::getTurn().self::getRiver();
    }
    /*
    This function takes a string of card values i.e. "AH3S4DKS2C" and converts it
    to an array so that it can be evaluated by the poker engine.
    */
    public function convertIt($string)
    {
        $len=strlen($string);
        $this->evaluateArray = array();
        for ($a=0;$a<$len-1;$a++)
        {//START FOR LOOP
            if ($string[$a] == "1"):
                {
                    $data = $string[$a];
                    $a++;
                    $data .= $string[$a];
                    $a++;
                    $data .= $string[$a];
                    array_push($this->evaluateArray,$data);
                }
            else:
                {
                    $data = $string[$a];
                    $a++;
                    $data .= $string[$a];
                    array_push($this->evaluateArray,$data);
                }
            endif;
        }//END FOR LOOP
        return $this->evaluateArray;
    }//end function

}//end class