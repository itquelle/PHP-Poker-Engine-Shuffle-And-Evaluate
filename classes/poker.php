<?php
/**
 * @copyright Jayme Fishman
 * @class https://www.phpclasses.org/package/3149-PHP-Shuffle-and-evaluate-a-Poker-deck-of-cards.html
 * @overwrite Stevie-Ray Jr. (@itquelle.de)
 */

interface pokerEngineInterface{
    public function getText();
    public function getKickerArray(): array;
}
class pokerEngine implements pokerEngineInterface{

    public $points;
    public $text;
    public $kicker1Text;
    public $kicker2Text;
    public $kicker3Text;
    public $kicker4Text;
    public $kicker1Points;
    public $kicker2Points;
    public $kicker3Points;
    public $kicker4Points;
    public $kickerArray = [];

    public function getKickerArray(): array{
        return $this->kickerArray;
    }

    public function getText(){
        return $this->text;
    }

    public function getPoints(){
        return $this->points;
    }

    public function getKicker1Text(): string{
        switch ($this->kicker1Text) {
            case($this->kicker1Text == "65") || ($this->kicker1Text == "AH") || ($this->kicker1Text == "AD") || ($this->kicker1Text == "AC") || ($this->kicker1Text == "AS"):
                $this->kicker1Text = LANG_00;
                break;
            case ($this->kicker1Text == "75") || ($this->kicker1Text == "KH") || ($this->kicker1Text == "KD") || ($this->kicker1Text == "KC") || ($this->kicker1Text == "KS"):
                $this->kicker1Text = LANG_01;
                break;
            case ($this->kicker1Text == "81") || ($this->kicker1Text == "QH") || ($this->kicker1Text == "QD") || ($this->kicker1Text == "QC") || ($this->kicker1Text == "QS"):
                $this->kicker1Text = LANG_02;
                break;
            case ($this->kicker1Text == "74") || ($this->kicker1Text == "JH") || ($this->kicker1Text == "JD") || ($this->kicker1Text == "JC") || ($this->kicker1Text == "JS"):
                $this->kicker1Text = LANG_03;
                break;
            case ($this->kicker1Text == "48") || ($this->kicker1Text == "10H") || ($this->kicker1Text == "10D") || ($this->kicker1Text == "10C") || ($this->kicker1Text == "10S"):
                $this->kicker1Text = LANG_04;
                break;
            case ($this->kicker1Text == "57") || ($this->kicker1Text == "9H") || ($this->kicker1Text == "9D") || ($this->kicker1Text == "9C") || ($this->kicker1Text == "9S"):
                $this->kicker1Text = LANG_05;
                break;
            case ($this->kicker1Text == "56") || ($this->kicker1Text == "8H") || ($this->kicker1Text == "8D") || ($this->kicker1Text == "8C") || ($this->kicker1Text == "8S"):
                $this->kicker1Text = LANG_06;
                break;
            case ($this->kicker1Text == "55") || ($this->kicker1Text == "7H") || ($this->kicker1Text == "7D") || ($this->kicker1Text == "7C") || ($this->kicker1Text == "7S"):
                $this->kicker1Text = LANG_07;
                break;
            case ($this->kicker1Text == "54") || ($this->kicker1Text == "6H") || ($this->kicker1Text == "6D") || ($this->kicker1Text == "6C") || ($this->kicker1Text == "6S"):
                $this->kicker1Text = LANG_08;
                break;
            case ($this->kicker1Text == "53") || ($this->kicker1Text == "5H") || ($this->kicker1Text == "5D") || ($this->kicker1Text == "5C") || ($this->kicker1Text == "5S"):
                $this->kicker1Text = LANG_09;
                break;
            case ($this->kicker1Text == "52") || ($this->kicker1Text == "4H") || ($this->kicker1Text == "4D") || ($this->kicker1Text == "4C") || ($this->kicker1Text == "4S"):
                $this->kicker1Text = LANG_10;
                break;
            case ($this->kicker1Text == "51") || ($this->kicker1Text == "3H") || ($this->kicker1Text == "3D") || ($this->kicker1Text == "3C") || ($this->kicker1Text == "3S"):
                $this->kicker1Text = LANG_11;
                break;
            case ($this->kicker1Text == "50") || ($this->kicker1Text == "2H") || ($this->kicker1Text == "2D") || ($this->kicker1Text == "2C") || ($this->kicker1Text == "2S"):
                $this->kicker1Text = LANG_12;
                break;
        }
        return $this->kicker1Text;
    }

    public function getKicker2Text(){
        switch ($this->kicker2Text) {
            case($this->kicker2Text == "65") || ($this->kicker2Text == "AH") || ($this->kicker2Text == "AD") || ($this->kicker2Text == "AC") || ($this->kicker2Text == "AS"):
                $this->kicker2Text = LANG_00;
                break;
            case ($this->kicker2Text == "75") || ($this->kicker2Text == "KH") || ($this->kicker2Text == "KD") || ($this->kicker2Text == "KC") || ($this->kicker2Text == "KS"):
                $this->kicker2Text = LANG_01;
                break;
            case ($this->kicker2Text == "81") || ($this->kicker2Text == "QH") || ($this->kicker2Text == "QD") || ($this->kicker2Text == "QC") || ($this->kicker2Text == "QS"):
                $this->kicker2Text = LANG_02;
                break;
            case ($this->kicker2Text == "74") || ($this->kicker2Text == "JH") || ($this->kicker2Text == "JD") || ($this->kicker2Text == "JC") || ($this->kicker2Text == "JS"):
                $this->kicker2Text = LANG_03;
                break;
            case ($this->kicker2Text == "48") || ($this->kicker2Text == "10H") || ($this->kicker2Text == "10D") || ($this->kicker2Text == "10C") || ($this->kicker2Text == "10S"):
                $this->kicker2Text = LANG_04;
                break;
            case ($this->kicker2Text == "57") || ($this->kicker2Text == "9H") || ($this->kicker2Text == "9D") || ($this->kicker2Text == "9C") || ($this->kicker2Text == "9S"):
                $this->kicker2Text = LANG_05;
                break;
            case ($this->kicker2Text == "56") || ($this->kicker2Text == "8H") || ($this->kicker2Text == "8D") || ($this->kicker2Text == "8C") || ($this->kicker2Text == "8S"):
                $this->kicker2Text = LANG_06;
                break;
            case ($this->kicker2Text == "55") || ($this->kicker2Text == "7H") || ($this->kicker2Text == "7D") || ($this->kicker2Text == "7C") || ($this->kicker2Text == "7S"):
                $this->kicker2Text = LANG_07;
                break;
            case ($this->kicker2Text == "54") || ($this->kicker2Text == "6H") || ($this->kicker2Text == "6D") || ($this->kicker2Text == "6C") || ($this->kicker2Text == "6S"):
                $this->kicker2Text = LANG_08;
                break;
            case ($this->kicker2Text == "53") || ($this->kicker2Text == "5H") || ($this->kicker2Text == "5D") || ($this->kicker2Text == "5C") || ($this->kicker2Text == "5S"):
                $this->kicker2Text = LANG_09;
                break;
            case ($this->kicker2Text == "52") || ($this->kicker2Text == "4H") || ($this->kicker2Text == "4D") || ($this->kicker2Text == "4C") || ($this->kicker2Text == "4S"):
                $this->kicker2Text = LANG_10;
                break;
            case ($this->kicker2Text == "51") || ($this->kicker2Text == "3H") || ($this->kicker2Text == "3D") || ($this->kicker2Text == "3C") || ($this->kicker2Text == "3S"):
                $this->kicker2Text = LANG_11;
                break;
            case ($this->kicker2Text == "50") || ($this->kicker2Text == "2H") || ($this->kicker2Text == "2D") || ($this->kicker2Text == "2C") || ($this->kicker2Text == "2S"):
                $this->kicker2Text = LANG_12;
                break;
        }
        return $this->kicker2Text;
    }

    public function getKicker1Points(){
        switch ($this->kicker1Points) {
            case($this->kicker1Points == "65") || ($this->kicker1Points == "AH") || ($this->kicker1Points == "AD") || ($this->kicker1Points == "AC") || ($this->kicker1Points == "AS"):
                $this->kicker1Points = .50;
                break;
            case ($this->kicker1Points == "75") || ($this->kicker1Points == "KH") || ($this->kicker1Points == "KD") || ($this->kicker1Points == "KC") || ($this->kicker1Points == "KS"):
                $this->kicker1Points = .49;
                break;
            case ($this->kicker1Points == "81") || ($this->kicker1Points == "QH") || ($this->kicker1Points == "QD") || ($this->kicker1Points == "QC") || ($this->kicker1Points == "QS"):
                $this->kicker1Points = .48;
                break;
            case ($this->kicker1Points == "74") || ($this->kicker1Points == "JH") || ($this->kicker1Points == "JD") || ($this->kicker1Points == "JC") || ($this->kicker1Points == "JS"):
                $this->kicker1Points = .47;
                break;
            case ($this->kicker1Points == "48") || ($this->kicker1Points == "10H") || ($this->kicker1Points == "10D") || ($this->kicker1Points == "10C") || ($this->kicker1Points == "10S"):
                $this->kicker1Points = .46;
                break;
            case ($this->kicker1Points == "57") || ($this->kicker1Points == "9H") || ($this->kicker1Points == "9D") || ($this->kicker1Points == "9C") || ($this->kicker1Points == "9S"):
                $this->kicker1Points = .45;
                break;
            case ($this->kicker1Points == "56") || ($this->kicker1Points == "8H") || ($this->kicker1Points == "8D") || ($this->kicker1Points == "8C") || ($this->kicker1Points == "8S"):
                $this->kicker1Points = .44;
                break;
            case ($this->kicker1Points == "55") || ($this->kicker1Points == "7H") || ($this->kicker1Points == "7D") || ($this->kicker1Points == "7C") || ($this->kicker1Points == "7S"):
                $this->kicker1Points = .43;
                break;
            case ($this->kicker1Points == "54") || ($this->kicker1Points == "6H") || ($this->kicker1Points == "6D") || ($this->kicker1Points == "6C") || ($this->kicker1Points == "6S"):
                $this->kicker1Points = .42;
                break;
            case ($this->kicker1Points == "53") || ($this->kicker1Points == "5H") || ($this->kicker1Points == "5D") || ($this->kicker1Points == "5C") || ($this->kicker1Points == "5S"):
                $this->kicker1Points = .41;
                break;
            case ($this->kicker1Points == "52") || ($this->kicker1Points == "4H") || ($this->kicker1Points == "4D") || ($this->kicker1Points == "4C") || ($this->kicker1Points == "4S"):
                $this->kicker1Points = .40;
                break;
            case ($this->kicker1Points == "51") || ($this->kicker1Points == "3H") || ($this->kicker1Points == "3D") || ($this->kicker1Points == "3C") || ($this->kicker1Points == "3S"):
                $this->kicker1Points = .39;
                break;
            case ($this->kicker1Points == "50") || ($this->kicker1Points == "2H") || ($this->kicker1Points == "2D") || ($this->kicker1Points == "2C") || ($this->kicker1Points == "2S"):
                $this->kicker1Points = .38;
                break;
        }
        return $this->kicker1Points;
    }

    public function getKicker2Points(){
        switch ($this->kicker2Points) {
            case($this->kicker2Points == "65") || ($this->kicker2Points == "AH") || ($this->kicker2Points == "AD") || ($this->kicker2Points == "AC") || ($this->kicker2Points == "AS"):
                $this->kicker2Points = .0013;
                break;
            case ($this->kicker2Points == "75") || ($this->kicker2Points == "KH") || ($this->kicker2Points == "KD") || ($this->kicker2Points == "KC") || ($this->kicker2Points == "KS"):
                $this->kicker2Points = .0012;
                break;
            case ($this->kicker2Points == "81") || ($this->kicker2Points == "QH") || ($this->kicker2Points == "QD") || ($this->kicker2Points == "QC") || ($this->kicker2Points == "QS"):
                $this->kicker2Points = .0011;
                break;
            case ($this->kicker2Points == "74") || ($this->kicker2Points == "JH") || ($this->kicker2Points == "JD") || ($this->kicker2Points == "JC") || ($this->kicker2Points == "JS"):
                $this->kicker2Points = .0010;
                break;
            case ($this->kicker2Points == "48") || ($this->kicker2Points == "10H") || ($this->kicker2Points == "10D") || ($this->kicker2Points == "10C") || ($this->kicker2Points == "10S"):
                $this->kicker2Points = .0009;
                break;
            case ($this->kicker2Points == "57") || ($this->kicker2Points == "9H") || ($this->kicker2Points == "9D") || ($this->kicker2Points == "9C") || ($this->kicker2Points == "9S"):
                $this->kicker2Points = .0008;
                break;
            case ($this->kicker2Points == "56") || ($this->kicker2Points == "8H") || ($this->kicker2Points == "8D") || ($this->kicker2Points == "8C") || ($this->kicker2Points == "8S"):
                $this->kicker2Points = .0007;
                break;
            case ($this->kicker2Points == "55") || ($this->kicker2Points == "7H") || ($this->kicker2Points == "7D") || ($this->kicker2Points == "7C") || ($this->kicker2Points == "7S"):
                $this->kicker2Points = .0006;
                break;
            case ($this->kicker2Points == "54") || ($this->kicker2Points == "6H") || ($this->kicker2Points == "6D") || ($this->kicker2Points == "6C") || ($this->kicker2Points == "6S"):
                $this->kicker2Points = .0005;
                break;
            case ($this->kicker2Points == "53") || ($this->kicker2Points == "5H") || ($this->kicker2Points == "5D") || ($this->kicker2Points == "5C") || ($this->kicker2Points == "5S"):
                $this->kicker2Points = .0004;
                break;
            case ($this->kicker2Points == "52") || ($this->kicker2Points == "4H") || ($this->kicker2Points == "4D") || ($this->kicker2Points == "4C") || ($this->kicker2Points == "4S"):
                $this->kicker2Points = .0003;
                break;
            case ($this->kicker2Points == "51") || ($this->kicker2Points == "3H") || ($this->kicker2Points == "3D") || ($this->kicker2Points == "3C") || ($this->kicker2Points == "3S"):
                $this->kicker2Points = .0002;
                break;
            case ($this->kicker2Points == "50") || ($this->kicker2Points == "2H") || ($this->kicker2Points == "2D") || ($this->kicker2Points == "2C") || ($this->kicker2Points == "2S"):
                $this->kicker2Points = .0001;
                break;
        }
        return $this->kicker2Points;
    }

    public function getTotalPoints(){
        return pokerEngine::getPoints() + pokerEngine::getkicker1Points() + pokerEngine::getkicker2Points() + pokerEngine::getkicker3Points() + pokerEngine::getkicker4Points();
    }

    public function getKicker3Text(){
        switch ($this->kicker3Text) {
            case($this->kicker3Text == "65") || ($this->kicker3Text == "AH") || ($this->kicker3Text == "AD") || ($this->kicker3Text == "AC") || ($this->kicker3Text == "AS"):
                $this->kicker3Text = LANG_00;
                break;
            case ($this->kicker3Text == "75") || ($this->kicker3Text == "KH") || ($this->kicker3Text == "KD") || ($this->kicker3Text == "KC") || ($this->kicker3Text == "KS"):
                $this->kicker3Text = LANG_01;
                break;
            case ($this->kicker3Text == "81") || ($this->kicker3Text == "QH") || ($this->kicker3Text == "QD") || ($this->kicker3Text == "QC") || ($this->kicker3Text == "QS"):
                $this->kicker3Text = LANG_02;
                break;
            case ($this->kicker3Text == "74") || ($this->kicker3Text == "JH") || ($this->kicker3Text == "JD") || ($this->kicker3Text == "JC") || ($this->kicker3Text == "JS"):
                $this->kicker3Text = LANG_03;
                break;
            case ($this->kicker3Text == "48") || ($this->kicker3Text == "10H") || ($this->kicker3Text == "10D") || ($this->kicker3Text == "10C") || ($this->kicker3Text == "10S"):
                $this->kicker3Text = LANG_04;
                break;
            case ($this->kicker3Text == "57") || ($this->kicker3Text == "9H") || ($this->kicker3Text == "9D") || ($this->kicker3Text == "9C") || ($this->kicker3Text == "9S"):
                $this->kicker3Text = LANG_05;
                break;
            case ($this->kicker3Text == "56") || ($this->kicker3Text == "8H") || ($this->kicker3Text == "8D") || ($this->kicker3Text == "8C") || ($this->kicker3Text == "8S"):
                $this->kicker3Text = LANG_06;
                break;
            case ($this->kicker3Text == "55") || ($this->kicker3Text == "7H") || ($this->kicker3Text == "7D") || ($this->kicker3Text == "7C") || ($this->kicker3Text == "7S"):
                $this->kicker3Text = LANG_07;
                break;
            case ($this->kicker3Text == "54") || ($this->kicker3Text == "6H") || ($this->kicker3Text == "6D") || ($this->kicker3Text == "6C") || ($this->kicker3Text == "6S"):
                $this->kicker3Text = LANG_08;
                break;
            case ($this->kicker3Text == "53") || ($this->kicker3Text == "5H") || ($this->kicker3Text == "5D") || ($this->kicker3Text == "5C") || ($this->kicker3Text == "5S"):
                $this->kicker3Text = LANG_09;
                break;
            case ($this->kicker3Text == "52") || ($this->kicker3Text == "4H") || ($this->kicker3Text == "4D") || ($this->kicker3Text == "4C") || ($this->kicker3Text == "4S"):
                $this->kicker3Text = LANG_10;
                break;
            case ($this->kicker3Text == "51") || ($this->kicker3Text == "3H") || ($this->kicker3Text == "3D") || ($this->kicker3Text == "3C") || ($this->kicker3Text == "3S"):
                $this->kicker3Text = LANG_11;
                break;
            case ($this->kicker3Text == "50") || ($this->kicker3Text == "2H") || ($this->kicker3Text == "2D") || ($this->kicker3Text == "2C") || ($this->kicker3Text == "2S"):
                $this->kicker3Text = LANG_12;
                break;
        }
        return $this->kicker3Text;
    }

    public function getKicker3Points(){
        switch ($this->kicker3Points) {
            case($this->kicker3Points == "65") || ($this->kicker3Points == "AH") || ($this->kicker3Points == "AD") || ($this->kicker3Points == "AC") || ($this->kicker3Points == "AS"):
                $this->kicker3Points = .000013;
                break;
            case ($this->kicker3Points == "75") || ($this->kicker3Points == "KH") || ($this->kicker3Points == "KD") || ($this->kicker3Points == "KC") || ($this->kicker3Points == "KS"):
                $this->kicker3Points = .000012;
                break;
            case ($this->kicker3Points == "81") || ($this->kicker3Points == "QH") || ($this->kicker3Points == "QD") || ($this->kicker3Points == "QC") || ($this->kicker3Points == "QS"):
                $this->kicker3Points = .000011;
                break;
            case ($this->kicker3Points == "74") || ($this->kicker3Points == "JH") || ($this->kicker3Points == "JD") || ($this->kicker3Points == "JC") || ($this->kicker3Points == "JS"):
                $this->kicker3Points = .000010;
                break;
            case ($this->kicker3Points == "48") || ($this->kicker3Points == "10H") || ($this->kicker3Points == "10D") || ($this->kicker3Points == "10C") || ($this->kicker3Points == "10S"):
                $this->kicker3Points = .000009;
                break;
            case ($this->kicker3Points == "57") || ($this->kicker3Points == "9H") || ($this->kicker3Points == "9D") || ($this->kicker3Points == "9C") || ($this->kicker3Points == "9S"):
                $this->kicker3Points = .000008;
                break;
            case ($this->kicker3Points == "56") || ($this->kicker3Points == "8H") || ($this->kicker3Points == "8D") || ($this->kicker3Points == "8C") || ($this->kicker3Points == "8S"):
                $this->kicker3Points = .000007;
                break;
            case ($this->kicker3Points == "55") || ($this->kicker3Points == "7H") || ($this->kicker3Points == "7D") || ($this->kicker3Points == "7C") || ($this->kicker3Points == "7S"):
                $this->kicker3Points = .000006;
                break;
            case ($this->kicker3Points == "54") || ($this->kicker3Points == "6H") || ($this->kicker3Points == "6D") || ($this->kicker3Points == "6C") || ($this->kicker3Points == "6S"):
                $this->kicker3Points = .000005;
                break;
            case ($this->kicker3Points == "53") || ($this->kicker3Points == "5H") || ($this->kicker3Points == "5D") || ($this->kicker3Points == "5C") || ($this->kicker3Points == "5S"):
                $this->kicker3Points = .000004;
                break;
            case ($this->kicker3Points == "52") || ($this->kicker3Points == "4H") || ($this->kicker3Points == "4D") || ($this->kicker3Points == "4C") || ($this->kicker3Points == "4S"):
                $this->kicker3Points = .000003;
                break;
            case ($this->kicker3Points == "51") || ($this->kicker3Points == "3H") || ($this->kicker3Points == "3D") || ($this->kicker3Points == "3C") || ($this->kicker3Points == "3S"):
                $this->kicker3Points = .000002;
                break;
            case ($this->kicker3Points == "50") || ($this->kicker3Points == "2H") || ($this->kicker3Points == "2D") || ($this->kicker3Points == "2C") || ($this->kicker3Points == "2S"):
                $this->kicker3Points = .000001;
                break;
        }
        return $this->kicker3Points;
    }

    public function getKicker4Text(){
        switch ($this->kicker4Text) {
            case($this->kicker4Text == "65") || ($this->kicker4Text == "AH") || ($this->kicker4Text == "AD") || ($this->kicker4Text == "AC") || ($this->kicker4Text == "AS"):
                $this->kicker4Text = LANG_00;
                break;
            case ($this->kicker4Text == "75") || ($this->kicker4Text == "KH") || ($this->kicker4Text == "KD") || ($this->kicker4Text == "KC") || ($this->kicker4Text == "KS"):
                $this->kicker4Text = LANG_01;
                break;
            case ($this->kicker4Text == "81") || ($this->kicker4Text == "QH") || ($this->kicker4Text == "QD") || ($this->kicker4Text == "QC") || ($this->kicker4Text == "QS"):
                $this->kicker4Text = LANG_02;
                break;
            case ($this->kicker4Text == "74") || ($this->kicker4Text == "JH") || ($this->kicker4Text == "JD") || ($this->kicker4Text == "JC") || ($this->kicker4Text == "JS"):
                $this->kicker4Text = LANG_03;
                break;
            case ($this->kicker4Text == "48") || ($this->kicker4Text == "10H") || ($this->kicker4Text == "10D") || ($this->kicker4Text == "10C") || ($this->kicker4Text == "10S"):
                $this->kicker4Text = LANG_04;
                break;
            case ($this->kicker4Text == "57") || ($this->kicker4Text == "9H") || ($this->kicker4Text == "9D") || ($this->kicker4Text == "9C") || ($this->kicker4Text == "9S"):
                $this->kicker4Text = LANG_05;
                break;
            case ($this->kicker4Text == "56") || ($this->kicker4Text == "8H") || ($this->kicker4Text == "8D") || ($this->kicker4Text == "8C") || ($this->kicker4Text == "8S"):
                $this->kicker4Text = LANG_06;
                break;
            case ($this->kicker4Text == "55") || ($this->kicker4Text == "7H") || ($this->kicker4Text == "7D") || ($this->kicker4Text == "7C") || ($this->kicker4Text == "7S"):
                $this->kicker4Text = LANG_07;
                break;
            case ($this->kicker4Text == "54") || ($this->kicker4Text == "6H") || ($this->kicker4Text == "6D") || ($this->kicker4Text == "6C") || ($this->kicker4Text == "6S"):
                $this->kicker4Text = LANG_08;
                break;
            case ($this->kicker4Text == "53") || ($this->kicker4Text == "5H") || ($this->kicker4Text == "5D") || ($this->kicker4Text == "5C") || ($this->kicker4Text == "5S"):
                $this->kicker4Text = LANG_09;
                break;
            case ($this->kicker4Text == "52") || ($this->kicker4Text == "4H") || ($this->kicker4Text == "4D") || ($this->kicker4Text == "4C") || ($this->kicker4Text == "4S"):
                $this->kicker4Text = LANG_10;
                break;
            case ($this->kicker4Text == "51") || ($this->kicker4Text == "3H") || ($this->kicker4Text == "3D") || ($this->kicker4Text == "3C") || ($this->kicker4Text == "3S"):
                $this->kicker4Text = LANG_11;
                break;
            case ($this->kicker4Text == "50") || ($this->kicker4Text == "2H") || ($this->kicker4Text == "2D") || ($this->kicker4Text == "2C") || ($this->kicker4Text == "2S"):
                $this->kicker4Text = LANG_12;
                break;
        }
        return $this->kicker4Text;
    }

    public function getKicker4Points(){
        switch ($this->kicker4Points) {
            case($this->kicker4Points == "65") || ($this->kicker4Points == "AH") || ($this->kicker4Points == "AD") || ($this->kicker4Points == "AC") || ($this->kicker4Points == "AS"):
                $this->kicker4Points = .00000013;
                break;
            case ($this->kicker4Points == "75") || ($this->kicker4Points == "KH") || ($this->kicker4Points == "KD") || ($this->kicker4Points == "KC") || ($this->kicker4Points == "KS"):
                $this->kicker4Points = .00000012;
                break;
            case ($this->kicker4Points == "81") || ($this->kicker4Points == "QH") || ($this->kicker4Points == "QD") || ($this->kicker4Points == "QC") || ($this->kicker4Points == "QS"):
                $this->kicker4Points = .00000011;
                break;
            case ($this->kicker4Points == "74") || ($this->kicker4Points == "JH") || ($this->kicker4Points == "JD") || ($this->kicker4Points == "JC") || ($this->kicker4Points == "JS"):
                $this->kicker4Points = .00000010;
                break;
            case ($this->kicker4Points == "48") || ($this->kicker4Points == "10H") || ($this->kicker4Points == "10D") || ($this->kicker4Points == "10C") || ($this->kicker4Points == "10S"):
                $this->kicker4Points = .00000009;
                break;
            case ($this->kicker4Points == "57") || ($this->kicker4Points == "9H") || ($this->kicker4Points == "9D") || ($this->kicker4Points == "9C") || ($this->kicker4Points == "9S"):
                $this->kicker4Points = .00000008;
                break;
            case ($this->kicker4Points == "56") || ($this->kicker4Points == "8H") || ($this->kicker4Points == "8D") || ($this->kicker4Points == "8C") || ($this->kicker4Points == "8S"):
                $this->kicker4Points = .00000007;
                break;
            case ($this->kicker4Points == "55") || ($this->kicker4Points == "7H") || ($this->kicker4Points == "7D") || ($this->kicker4Points == "7C") || ($this->kicker4Points == "7S"):
                $this->kicker4Points = .00000006;
                break;
            case ($this->kicker4Points == "54") || ($this->kicker4Points == "6H") || ($this->kicker4Points == "6D") || ($this->kicker4Points == "6C") || ($this->kicker4Points == "6S"):
                $this->kicker4Points = .00000005;
                break;
            case ($this->kicker4Points == "53") || ($this->kicker4Points == "5H") || ($this->kicker4Points == "5D") || ($this->kicker4Points == "5C") || ($this->kicker4Points == "5S"):
                $this->kicker4Points = .00000004;
                break;
            case ($this->kicker4Points == "52") || ($this->kicker4Points == "4H") || ($this->kicker4Points == "4D") || ($this->kicker4Points == "4C") || ($this->kicker4Points == "4S"):
                $this->kicker4Points = .00000003;
                break;
            case ($this->kicker4Points == "51") || ($this->kicker4Points == "3H") || ($this->kicker4Points == "3D") || ($this->kicker4Points == "3C") || ($this->kicker4Points == "3S"):
                $this->kicker4Points = .00000002;
                break;
            case ($this->kicker4Points == "50") || ($this->kicker4Points == "2H") || ($this->kicker4Points == "2D") || ($this->kicker4Points == "2C") || ($this->kicker4Points == "2S"):
                $this->kicker4Points = .00000001;
                break;
        }
        return $this->kicker4Points;
    }

    public function handTest($chartArray, $evaluateArray){
        switch ($chartArray) {
            //TEST for the big dog - royal flush
            case in_array("AS", $evaluateArray) == true && in_array("KS", $evaluateArray) == true && in_array("QS", $evaluateArray) == true && in_array("JS", $evaluateArray) == true && in_array("10S", $evaluateArray) == true:
                $this->text = LANG_13;
                $this->points = 5600;
                break;
            case in_array("AC", $evaluateArray) == true && in_array("KC", $evaluateArray) == true && in_array("QC", $evaluateArray) == true && in_array("JC", $evaluateArray) == true && in_array("10C", $evaluateArray) == true:
                $this->text = LANG_14;
                $this->points = 5600;
                break;
            case in_array("AH", $evaluateArray) == true && in_array("KH", $evaluateArray) == true && in_array("QH", $evaluateArray) == true && in_array("JH", $evaluateArray) == true && in_array("10H", $evaluateArray) == true:
                $this->text = LANG_15;
                $this->points = 5600;
                break;
            case in_array("AD", $evaluateArray) == true && in_array("KD", $evaluateArray) == true && in_array("QD", $evaluateArray) == true && in_array("JD", $evaluateArray) == true && in_array("10D", $evaluateArray) == true:
                $this->text = LANG_16;
                $this->points = 5600;
                break;

            //STRAIGHT FLUSHES
            //SPADE STRAIGHT FLUSH TEST
            case in_array("KS", $evaluateArray) == true && in_array("QS", $evaluateArray) == true && in_array("JS", $evaluateArray) == true && in_array("10S", $evaluateArray) == true && in_array("9S", $evaluateArray) == true:
                $this->text = LANG_17;
                $this->points = 4008;
                break;
            case in_array("QS", $evaluateArray) == true && in_array("JS", $evaluateArray) == true && in_array("10S", $evaluateArray) == true && in_array("9S", $evaluateArray) == true && in_array("8S", $evaluateArray) == true:
                $this->text = LANG_18;
                $this->points = 4007;
                break;
            case in_array("JS", $evaluateArray) == true && in_array("10S", $evaluateArray) == true && in_array("9S", $evaluateArray) == true && in_array("8S", $evaluateArray) == true && in_array("7S", $evaluateArray) == true:
                $this->text = LANG_19;
                $this->points = 4006;
                break;
            case in_array("10S", $evaluateArray) == true && in_array("9S", $evaluateArray) == true && in_array("8S", $evaluateArray) == true && in_array("7S", $evaluateArray) == true && in_array("6S", $evaluateArray) == true:
                $this->text = LANG_20;
                $this->points = 4005;
                break;
            case in_array("9S", $evaluateArray) == true && in_array("8S", $evaluateArray) == true && in_array("7S", $evaluateArray) == true && in_array("6S", $evaluateArray) == true && in_array("5S", $evaluateArray) == true:
                $this->text = LANG_21;
                $this->points = 4004;
                break;
            case in_array("8S", $evaluateArray) == true && in_array("7S", $evaluateArray) == true && in_array("6S", $evaluateArray) == true && in_array("5S", $evaluateArray) == true && in_array("4S", $evaluateArray) == true:
                $this->text = LANG_22;
                $this->points = 4003;
                break;
            case in_array("7S", $evaluateArray) == true && in_array("6S", $evaluateArray) == true && in_array("5S", $evaluateArray) == true && in_array("4S", $evaluateArray) == true && in_array("3S", $evaluateArray) == true:
                $this->text = LANG_23;
                $this->points = 4002;
                break;
            case in_array("6S", $evaluateArray) == true && in_array("5S", $evaluateArray) == true && in_array("4S", $evaluateArray) == true && in_array("3S", $evaluateArray) == true && in_array("2S", $evaluateArray) == true:
                $this->text = LANG_24;
                $this->points = 4001;
                break;
            case in_array("5S", $evaluateArray) == true && in_array("4S", $evaluateArray) == true && in_array("3S", $evaluateArray) == true && in_array("2S", $evaluateArray) == true && in_array("AS", $evaluateArray) == true:
                $this->text = LANG_25;
                $this->points = 4000;
                break;

            //DIAMONDS
            case in_array("KD", $evaluateArray) == true && in_array("QD", $evaluateArray) == true && in_array("JD", $evaluateArray) == true && in_array("10D", $evaluateArray) == true && in_array("9D", $evaluateArray) == true:
                $this->text = LANG_26;
                $this->points = 4008;
                break;
            case in_array("QD", $evaluateArray) == true && in_array("JD", $evaluateArray) == true && in_array("10D", $evaluateArray) == true && in_array("9D", $evaluateArray) == true && in_array("8D", $evaluateArray) == true:
                $this->text = LANG_27;
                $this->points = 4007;
                break;
            case in_array("JD", $evaluateArray) == true && in_array("10D", $evaluateArray) == true && in_array("9D", $evaluateArray) == true && in_array("8D", $evaluateArray) == true && in_array("7D", $evaluateArray) == true:
                $this->text = LANG_28;
                $this->points = 4006;
                break;
            case in_array("10D", $evaluateArray) == true && in_array("9D", $evaluateArray) == true && in_array("8D", $evaluateArray) == true && in_array("7D", $evaluateArray) == true && in_array("6D", $evaluateArray) == true:
                $this->text = LANG_29;
                $this->points = 4005;
                break;
            case in_array("9D", $evaluateArray) == true && in_array("8D", $evaluateArray) == true && in_array("7D", $evaluateArray) == true && in_array("6D", $evaluateArray) == true && in_array("5D", $evaluateArray) == true:
                $this->text = LANG_30;
                $this->points = 4004;
                break;
            case in_array("8D", $evaluateArray) == true && in_array("7D", $evaluateArray) == true && in_array("6D", $evaluateArray) == true && in_array("5D", $evaluateArray) == true && in_array("4D", $evaluateArray) == true:
                $this->text = LANG_31;
                $this->points = 4003;
                break;
            case in_array("7D", $evaluateArray) == true && in_array("6D", $evaluateArray) == true && in_array("5D", $evaluateArray) == true && in_array("4D", $evaluateArray) == true && in_array("3D", $evaluateArray) == true:
                $this->text = LANG_32;
                $this->points = 4002;
                break;
            case in_array("6D", $evaluateArray) == true && in_array("5D", $evaluateArray) == true && in_array("4D", $evaluateArray) == true && in_array("3D", $evaluateArray) == true && in_array("2D", $evaluateArray) == true:
                $this->text = LANG_33;
                $this->points = 4001;
                break;
            case in_array("5D", $evaluateArray) == true && in_array("4D", $evaluateArray) == true && in_array("3D", $evaluateArray) == true && in_array("2D", $evaluateArray) == true && in_array("AD", $evaluateArray) == true:
                $this->text = LANG_34;
                $this->points = 4000;
                break;

            //HEART STRAIGHT FLUSH
            case in_array("KH", $evaluateArray) == true && in_array("QH", $evaluateArray) == true && in_array("JH", $evaluateArray) == true && in_array("10H", $evaluateArray) == true && in_array("9H", $evaluateArray) == true:
                $this->text = LANG_35;
                $this->points = 4008;
                break;
            case in_array("QH", $evaluateArray) == true && in_array("JH", $evaluateArray) == true && in_array("10H", $evaluateArray) == true && in_array("9H", $evaluateArray) == true && in_array("8H", $evaluateArray) == true:
                $this->text = LANG_36;
                $this->points = 4007;
                break;
            case in_array("JH", $evaluateArray) == true && in_array("10H", $evaluateArray) == true && in_array("9H", $evaluateArray) == true && in_array("8H", $evaluateArray) == true && in_array("7H", $evaluateArray) == true:
                $this->text = LANG_37;
                $this->points = 4006;
                break;
            case in_array("10H", $evaluateArray) == true && in_array("9H", $evaluateArray) == true && in_array("8H", $evaluateArray) == true && in_array("7H", $evaluateArray) == true && in_array("6H", $evaluateArray) == true:
                $this->text = LANG_38;
                $this->points = 4005;
                break;
            case in_array("9H", $evaluateArray) == true && in_array("8H", $evaluateArray) == true && in_array("7H", $evaluateArray) == true && in_array("6H", $evaluateArray) == true && in_array("5H", $evaluateArray) == true:
                $this->text = LANG_39;
                $this->points = 4004;
                break;
            case in_array("8H", $evaluateArray) == true && in_array("7H", $evaluateArray) == true && in_array("6H", $evaluateArray) == true && in_array("5H", $evaluateArray) == true && in_array("4H", $evaluateArray) == true:
                $this->text = LANG_40;
                $this->points = 4003;
                break;
            case in_array("7H", $evaluateArray) == true && in_array("6H", $evaluateArray) == true && in_array("5H", $evaluateArray) == true && in_array("4H", $evaluateArray) == true && in_array("3S", $evaluateArray) == true:
                $this->text = LANG_41;
                $this->points = 4002;
                break;
            case in_array("6H", $evaluateArray) == true && in_array("5H", $evaluateArray) == true && in_array("4H", $evaluateArray) == true && in_array("3H", $evaluateArray) == true && in_array("2H", $evaluateArray) == true:
                $this->text = LANG_42;
                $this->points = 4001;
                break;
            case in_array("5H", $evaluateArray) == true && in_array("4H", $evaluateArray) == true && in_array("3H", $evaluateArray) == true && in_array("2H", $evaluateArray) == true && in_array("AH", $evaluateArray) == true:
                $this->text = LANG_43;
                $this->points = 4000;
                break;

            //CLUB STRAIGHT FLUSHES
            case in_array("KC", $evaluateArray) == true && in_array("QC", $evaluateArray) == true && in_array("JC", $evaluateArray) == true && in_array("10C", $evaluateArray) == true && in_array("9C", $evaluateArray) == true:
                $this->text = LANG_44;
                $this->points = 4008;
                break;
            case in_array("QC", $evaluateArray) == true && in_array("JC", $evaluateArray) == true && in_array("10C", $evaluateArray) == true && in_array("9C", $evaluateArray) == true && in_array("8C", $evaluateArray) == true:
                $this->text = LANG_45;
                $this->points = 4007;
                break;
            case in_array("JC", $evaluateArray) == true && in_array("10C", $evaluateArray) == true && in_array("9C", $evaluateArray) == true && in_array("8C", $evaluateArray) == true && in_array("7C", $evaluateArray) == true:
                $this->text = LANG_46;
                $this->points = 4006;
                break;
            case in_array("10C", $evaluateArray) == true && in_array("9C", $evaluateArray) == true && in_array("8C", $evaluateArray) == true && in_array("7C", $evaluateArray) == true && in_array("6C", $evaluateArray) == true:
                $this->text = LANG_47;
                $this->points = 4005;
                break;
            case in_array("9C", $evaluateArray) == true && in_array("8C", $evaluateArray) == true && in_array("7C", $evaluateArray) == true && in_array("6C", $evaluateArray) == true && in_array("5C", $evaluateArray) == true:
                $this->text = LANG_48;
                $this->points = 4004;
                break;
            case in_array("8C", $evaluateArray) == true && in_array("7C", $evaluateArray) == true && in_array("6C", $evaluateArray) == true && in_array("5C", $evaluateArray) == true && in_array("4C", $evaluateArray) == true:
                $this->text = LANG_49;
                $this->points = 4003;
                break;
            case in_array("7C", $evaluateArray) == true && in_array("6C", $evaluateArray) == true && in_array("5C", $evaluateArray) == true && in_array("4C", $evaluateArray) == true && in_array("3C", $evaluateArray) == true:
                $this->text = LANG_50;
                $this->points = 4002;
                break;
            case in_array("6C", $evaluateArray) == true && in_array("5C", $evaluateArray) == true && in_array("4C", $evaluateArray) == true && in_array("3C", $evaluateArray) == true && in_array("2C", $evaluateArray) == true:
                $this->text = LANG_51;
                $this->points = 4001;
                break;
            case in_array("5C", $evaluateArray) == true && in_array("4C", $evaluateArray) == true && in_array("3C", $evaluateArray) == true && in_array("2C", $evaluateArray) == true && in_array("AC", $evaluateArray) == true:
                $this->text = LANG_52;
                $this->points = 4000;
                break;

            //tests for 4 of a kind
            case ($chartArray[0][65]) == 4:
                $this->text = LANG_53;
                $this->points = 3512;
                //start kicker for 4 Aces
                switch ($chartArray) {
                    case array_key_exists("75", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        break;
                    case array_key_exists("81", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        break;
                    case array_key_exists("74", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        break;
                    case array_key_exists("48", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        break;
                    case array_key_exists("57", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        break;
                    case array_key_exists("56", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        break;
                    case array_key_exists("55", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        break;
                    case array_key_exists("54", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        break;
                    case array_key_exists("53", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        break;
                    case array_key_exists("52", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        break;
                    case array_key_exists("51", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        break;
                    case array_key_exists("50", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
                //end Kicker for three Aces
                break;
            case $chartArray[0][75] == 4:
                $this->text = LANG_54;
                $this->points = 3511;
                //start kicker for 4 kings
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        break;
                    case array_key_exists("81", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        break;
                    case array_key_exists("74", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        break;
                    case array_key_exists("48", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        break;
                    case array_key_exists("57", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        break;
                    case array_key_exists("56", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        break;
                    case array_key_exists("55", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        break;
                    case array_key_exists("54", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        break;
                    case array_key_exists("53", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        break;
                    case array_key_exists("52", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        break;
                    case array_key_exists("51", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        break;
                    case array_key_exists("50", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
                //end kicker for 4 kings
                break;
            case $chartArray[0][81] == 4:
                $this->text = LANG_55;
                $this->points = 3510;
                //start kicker for 4 queens
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        break;
                    case array_key_exists("75", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        break;
                    case array_key_exists("74", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        break;
                    case array_key_exists("48", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        break;
                    case array_key_exists("57", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        break;
                    case array_key_exists("56", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        break;
                    case array_key_exists("55", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        break;
                    case array_key_exists("54", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        break;
                    case array_key_exists("53", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        break;
                    case array_key_exists("52", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        break;
                    case array_key_exists("51", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        break;
                    case array_key_exists("50", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
                //end kicker for 4 queens
                break;
            case $chartArray[0][74] == 4:
                $this->text = LANG_56;
                $this->points = 3509;
                //start kicker for 4 jacks
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        break;
                    case array_key_exists("75", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        break;
                    case array_key_exists("81", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        break;
                    case array_key_exists("48", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        break;
                    case array_key_exists("57", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        break;
                    case array_key_exists("56", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        break;
                    case array_key_exists("55", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        break;
                    case array_key_exists("54", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        break;
                    case array_key_exists("53", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        break;
                    case array_key_exists("52", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        break;
                    case array_key_exists("51", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        break;
                    case array_key_exists("50", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
                //end kicker for 4 jacks
                break;
            case $chartArray[0][48] == 4:
                $this->text = LANG_57;
                $this->points = 3508;
                //start kicker for 4 10's
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        break;
                    case array_key_exists("75", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        break;
                    case array_key_exists("81", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        break;
                    case array_key_exists("74", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        break;
                    case array_key_exists("57", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        break;
                    case array_key_exists("56", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        break;
                    case array_key_exists("55", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        break;
                    case array_key_exists("54", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        break;
                    case array_key_exists("53", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        break;
                    case array_key_exists("52", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        break;
                    case array_key_exists("51", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        break;
                    case array_key_exists("50", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
                //end kicker for 4 10's
                break;
            case $chartArray[0][57] == 4:
                $this->text = LANG_58;
                $this->points = 3507;
                //start kicker for 4 9's
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        break;
                    case array_key_exists("75", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        break;
                    case array_key_exists("81", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        break;
                    case array_key_exists("74", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        break;
                    case array_key_exists("48", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        break;
                    case array_key_exists("56", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        break;
                    case array_key_exists("55", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        break;
                    case array_key_exists("54", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        break;
                    case array_key_exists("53", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        break;
                    case array_key_exists("52", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        break;
                    case array_key_exists("51", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        break;
                    case array_key_exists("50", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
                //end kicker for 4 9's
                break;
            case $chartArray[0][56] == 4:
                $this->text = LANG_59;
                $this->points = 3506;
//start kicker for 4 8's
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        break;
                    case array_key_exists("75", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        break;
                    case array_key_exists("81", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        break;
                    case array_key_exists("74", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        break;
                    case array_key_exists("48", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        break;
                    case array_key_exists("57", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        break;
                    case array_key_exists("55", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        break;
                    case array_key_exists("54", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        break;
                    case array_key_exists("53", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        break;
                    case array_key_exists("52", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        break;
                    case array_key_exists("51", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        break;
                    case array_key_exists("50", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for 4 8's
                break;
            case $chartArray[0][55] == 4:
                $this->text = LANG_60;
                $this->points = 3505;
//start kicker for 4 7's
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        break;
                    case array_key_exists("75", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        break;
                    case array_key_exists("81", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        break;
                    case array_key_exists("74", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        break;
                    case array_key_exists("48", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        break;
                    case array_key_exists("57", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        break;
                    case array_key_exists("56", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        break;
                    case array_key_exists("54", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        break;
                    case array_key_exists("53", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        break;
                    case array_key_exists("52", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        break;
                    case array_key_exists("51", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        break;
                    case array_key_exists("50", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for 4 7's
                break;
            case $chartArray[0][54] == 4:
                $this->text = LANG_61;
                $this->points = 3504;
//start kciker for 4 sixes
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        break;
                    case array_key_exists("75", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        break;
                    case array_key_exists("81", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        break;
                    case array_key_exists("74", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        break;
                    case array_key_exists("48", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        break;
                    case array_key_exists("57", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        break;
                    case array_key_exists("56", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        break;
                    case array_key_exists("55", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        break;
                    case array_key_exists("53", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        break;
                    case array_key_exists("52", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        break;
                    case array_key_exists("51", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        break;
                    case array_key_exists("50", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for 4 sixes
                break;
            case $chartArray[0][53] == 4:
                $this->text = LANG_62;
                $this->points = 3503;
//start kicker for 4 fives
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        break;
                    case array_key_exists("75", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        break;
                    case array_key_exists("81", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        break;
                    case array_key_exists("74", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        break;
                    case array_key_exists("48", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        break;
                    case array_key_exists("57", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        break;
                    case array_key_exists("56", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        break;
                    case array_key_exists("55", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        break;
                    case array_key_exists("54", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        break;
                    case array_key_exists("52", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        break;
                    case array_key_exists("51", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        break;
                    case array_key_exists("50", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for 4 fives
                break;
            case $chartArray[0][52] == 4:
                $this->text = LANG_63;
                $this->points = 3502;
//start kicker for 4 fours
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        break;
                    case array_key_exists("75", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        break;
                    case array_key_exists("81", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        break;
                    case array_key_exists("74", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        break;
                    case array_key_exists("48", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        break;
                    case array_key_exists("57", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        break;
                    case array_key_exists("56", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        break;
                    case array_key_exists("55", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        break;
                    case array_key_exists("54", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        break;
                    case array_key_exists("53", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        break;
                    case array_key_exists("51", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        break;
                    case array_key_exists("50", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for 4 fours
                break;
            case $chartArray[0][51] == 4:
                $this->text = LANG_64;
                $this->points = 3501;
//start kicker for 4 threes
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        break;
                    case array_key_exists("75", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        break;
                    case array_key_exists("81", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        break;
                    case array_key_exists("74", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        break;
                    case array_key_exists("48", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        break;
                    case array_key_exists("57", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        break;
                    case array_key_exists("56", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        break;
                    case array_key_exists("55", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        break;
                    case array_key_exists("54", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        break;
                    case array_key_exists("53", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        break;
                    case array_key_exists("52", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        break;
                    case array_key_exists("50", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for 4 threes
                break;
            case $chartArray[0][50] == 4:
                $this->text = LANG_65;
                $this->points = 3500;
//start kicker for 4 two's
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        break;
                    case array_key_exists("75", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        break;
                    case array_key_exists("81", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        break;
                    case array_key_exists("74", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        break;
                    case array_key_exists("48", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        break;
                    case array_key_exists("57", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        break;
                    case array_key_exists("56", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        break;
                    case array_key_exists("55", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        break;
                    case array_key_exists("54", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        break;
                    case array_key_exists("53", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        break;
                    case array_key_exists("52", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        break;
                    case array_key_exists("51", $chartArray[0])://Ace
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        break;
                }
//end kicker for 4 2's
                break;

			#@ START FULL HOUSE TESTS WITH SUB-SWITCHES
            //ACES
            case ($chartArray[0][65] == 3) && ($chartArray[0][75] == 2 || $chartArray[0][81] == 2 || $chartArray[0][74] == 2 || $chartArray[0][48] == 2 || $chartArray[0][57] == 2 || $chartArray[0][56] == 2 || $chartArray[0][55] == 2 || $chartArray[0][54] == 2 || $chartArray[0][53] == 2 || $chartArray[0][52] == 2 || $chartArray[0][51] == 2 || $chartArray[0][50] == 2):
                switch ($chartArray) {
                    case $chartArray[0][75] == 2:
                        $this->text = LANG_66;
                        $this->points = 3212;
                        break;
                    case $chartArray[0][81] == 2:
                        $this->text = LANG_67;
                        $this->points = 3211;
                        break;
                    case $chartArray[0][74] == 2:
                        $this->text = LANG_68;
                        $this->points = 3210;
                        break;
                    case $chartArray[0][48] == 2:
                        $this->text = LANG_69;
                        $this->points = 3209;
                        break;
                    case $chartArray[0][57] == 2:
                        $this->text = LANG_70;
                        $this->points = 3208;
                        break;
                    case $chartArray[0][56] == 2:
                        $this->text = LANG_71;
                        $this->points = 3207;
                        break;
                    case $chartArray[0][55] == 2:
                        $this->text = LANG_72;
                        $this->points = 3206;
                        break;
                    case $chartArray[0][54] == 2:
                        $this->text = LANG_73;
                        $this->points = 3205;
                        break;
                    case $chartArray[0][53] == 2:
                        $this->text = LANG_74;
                        $this->points = 3204;
                        break;
                    case $chartArray[0][52] == 2:
                        $this->text = LANG_75;
                        $this->points = 3203;
                        break;
                    case $chartArray[0][51] == 2:
                        $this->text = LANG_76;
                        $this->points = 3202;
                        break;
                    case $chartArray[0][50] == 2:
                        $this->text = LANG_77;
                        $this->points = 3201;
                        break;
                }//End inner Ace switch
                break;
            //KINGS
            case ($chartArray[0][75] == 3) && ($chartArray[0][65] == 2 || $chartArray[0][81] == 2 || $chartArray[0][74] == 2 || $chartArray[0][48] == 2 || $chartArray[0][57] == 2 || $chartArray[0][56] == 2 || $chartArray[0][55] == 2 || $chartArray[0][54] == 2 || $chartArray[0][53] == 2 || $chartArray[0][52] == 2 || $chartArray[0][51] == 2 || $chartArray[0][50] == 2):
                switch ($chartArray) {
                    case $chartArray[0][65] == 2:
                        $this->text = LANG_78;
                        $this->points = 3112;
                        break;
                    case $chartArray[0][81] == 2:
                        $this->text = LANG_79;
                        $this->points = 3111;
                        break;
                    case $chartArray[0][74] == 2:
                        $this->text = LANG_80;
                        $this->points = 3110;
                        break;
                    case $chartArray[0][48] == 2:
                        $this->text = LANG_81;
                        $this->points = 3109;
                        break;
                    case $chartArray[0][57] == 2:
                        $this->text = LANG_82;
                        $this->points = 3108;
                        break;
                    case $chartArray[0][56] == 2:
                        $this->text = LANG_83;
                        $this->points = 3107;
                        break;
                    case $chartArray[0][55] == 2:
                        $this->text = LANG_84;
                        $this->points = 3106;
                        break;
                    case $chartArray[0][54] == 2:
                        $this->text = LANG_85;
                        $this->points = 3105;
                        break;
                    case $chartArray[0][53] == 2:
                        $this->text = LANG_86;
                        $this->points = 3104;
                        break;
                    case $chartArray[0][52] == 2:
                        $this->text = LANG_87;
                        $this->points = 3103;
                        break;
                    case $chartArray[0][51] == 2:
                        $this->text = LANG_88;
                        $this->points = 3102;
                        break;
                    case $chartArray[0][50] == 2:
                        $this->text = LANG_89;
                        $this->points = 3101;
                        break;
                }
                break;
            //QUEENS
            case ($chartArray[0][81] == 3) && ($chartArray[0][65] == 2 || $chartArray[0][75] == 2 || $chartArray[0][74] == 2 || $chartArray[0][48] == 2 || $chartArray[0][57] == 2 || $chartArray[0][56] == 2 || $chartArray[0][55] == 2 || $chartArray[0][54] == 2 || $chartArray[0][53] == 2 || $chartArray[0][52] == 2 || $chartArray[0][51] == 2 || $chartArray[0][50] == 2):
                switch ($chartArray) {
                    case $chartArray[0][65] == 2:
                        $this->text = "FULL HOUSE!!: Queens over Aces";
                        $this->points = 3012;
                        break;
                    case $chartArray[0][75] == 2:
                        $this->text = "FULL HOUSE!!: Queens over Kings";
                        $this->points = 3011;
                        break;
                    case $chartArray[0][74] == 2:
                        $this->text = "FULL HOUSE!!: Queens over Jacks";
                        $this->points = 3010;
                        break;
                    case $chartArray[0][48] == 2:
                        $this->text = "FULL HOUSE!!: Queens over Tens";
                        $this->points = 3009;
                        break;
                    case $chartArray[0][57] == 2:
                        $this->text = "FULL HOUSE!!: Queens over Nines";
                        $this->points = 3008;
                        break;
                    case $chartArray[0][56] == 2:
                        $this->text = "FULL HOUSE!!: Queens over Eights";
                        $this->points = 3007;
                        break;
                    case $chartArray[0][55] == 2:
                        $this->text = "FULL HOUSE!!: Queens over Sevens";
                        $this->points = 3006;
                        break;
                    case $chartArray[0][54] == 2:
                        $this->text = "FULL HOUSE!!: Queens over Sixes";
                        $this->points = 3005;
                        break;
                    case $chartArray[0][53] == 2:
                        $this->text = "FULL HOUSE!!: Queens over Fives";
                        $this->points = 3004;
                        break;
                    case $chartArray[0][52] == 2:
                        $this->text = "FULL HOUSE!!: Queens over Fours";
                        $this->points = 3003;
                        break;
                    case $chartArray[0][51] == 2:
                        $this->text = "FULL HOUSE!!: Queens over Threes";
                        $this->points = 3002;
                        break;
                    case $chartArray[0][50] == 2:
                        $this->text = "FULL HOUSE!!: Queens over Twos";
                        $this->points = 3001;
                        break;
                }//End inner queen switch
                break;
            //JACKS
            case ($chartArray[0][74] == 3) && ($chartArray[0][65] == 2 || $chartArray[0][75] == 2 || $chartArray[0][81] == 2 || $chartArray[0][48] == 2 || $chartArray[0][57] == 2 || $chartArray[0][56] == 2 || $chartArray[0][55] == 2 || $chartArray[0][54] == 2 || $chartArray[0][53] == 2 || $chartArray[0][52] == 2 || $chartArray[0][51] == 2 || $chartArray[0][50] == 2):
                switch ($chartArray) {
                    case $chartArray[0][65] == 2:
                        $this->text = "FULL HOUSE!!: Jacks over Aces";
                        $this->points = 2912;
                        break;
                    case $chartArray[0][75] == 2:
                        $this->text = "FULL HOUSE!!: Jacks over Kings";
                        $this->points = 2911;
                        break;
                    case $chartArray[0][81] == 2:
                        $this->text = "FULL HOUSE!!: Jacks over Queens";
                        $this->points = 2910;
                        break;
                    case $chartArray[0][48] == 2:
                        $this->text = "FULL HOUSE!!: Jacks over Tens";
                        $this->points = 2909;
                        break;
                    case $chartArray[0][57] == 2:
                        $this->text = "FULL HOUSE!!: Jacks over Nines";
                        $this->points = 2908;
                        break;
                    case $chartArray[0][56] == 2:
                        $this->text = "FULL HOUSE!!: Jacks over Eights";
                        $this->points = 2907;
                        break;
                    case $chartArray[0][55] == 2:
                        $this->text = "FULL HOUSE!!: Jacks over Sevens";
                        $this->points = 2906;
                        break;
                    case $chartArray[0][54] == 2:
                        $this->text = "FULL HOUSE!!: Jacks over Sixes";
                        $this->points = 2905;
                        break;
                    case $chartArray[0][53] == 2:
                        $this->text = "FULL HOUSE!!: Jacks over Fives";
                        $this->points = 2904;
                        break;
                    case $chartArray[0][52] == 2:
                        $this->text = "FULL HOUSE!!: Jacks over Fours";
                        $this->points = 2903;
                        break;
                    case $chartArray[0][51] == 2:
                        $this->text = "FULL HOUSE!!: Jacks over Threes";
                        $this->points = 2902;
                        break;
                    case $chartArray[0][50] == 2:
                        $this->text = "FULL HOUSE!!: Jacks over Twos";
                        $this->points = 2901;
                        break;
                }//End inner jack switch
                break;
            //TENS
            case ($chartArray[0][48] == 3) && ($chartArray[0][65] == 2 || $chartArray[0][75] == 2 || $chartArray[0][81] == 2 || $chartArray[0][74] == 2 || $chartArray[0][57] == 2 || $chartArray[0][56] == 2 || $chartArray[0][55] == 2 || $chartArray[0][54] == 2 || $chartArray[0][53] == 2 || $chartArray[0][52] == 2 || $chartArray[0][51] == 2 || $chartArray[0][50] == 2):
                switch ($chartArray) {
                    case $chartArray[0][65] == 2:
                        $this->text = "FULL HOUSE!!: Tens over Aces";
                        $this->points = 2812;
                        break;
                    case $chartArray[0][75] == 2:
                        $this->text = "FULL HOUSE!!: Tens over Kings";
                        $this->points = 2811;
                        break;
                    case $chartArray[0][81] == 2:
                        $this->text = "FULL HOUSE!!: Tens over Queens";
                        $this->points = 2810;
                        break;
                    case $chartArray[0][74] == 2:
                        $this->text = "FULL HOUSE!!: Tens over Jacks";
                        $this->points = 2809;
                        break;
                    case $chartArray[0][57] == 2:
                        $this->text = "FULL HOUSE!!: Tens over Nines";
                        $this->points = 2808;
                        break;
                    case $chartArray[0][56] == 2:
                        $this->text = "FULL HOUSE!!: Tens over Eights";
                        $this->points = 2807;
                        break;
                    case $chartArray[0][55] == 2:
                        $this->text = "FULL HOUSE!!: Tens over Sevens";
                        $this->points = 2806;
                        break;
                    case $chartArray[0][54] == 2:
                        $this->text = "FULL HOUSE!!: Tens over Sixes";
                        $this->points = 2805;
                        break;
                    case $chartArray[0][53] == 2:
                        $this->text = "FULL HOUSE!!: Tens over Fives";
                        $this->points = 2804;
                        break;
                    case $chartArray[0][52] == 2:
                        $this->text = "FULL HOUSE!!: Tens over Fours";
                        $this->points = 2803;
                        break;
                    case $chartArray[0][51] == 2:
                        $this->text = "FULL HOUSE!!: Tens over Threes";
                        $this->points = 2802;
                        break;
                    case $chartArray[0][50] == 2:
                        $this->text = "FULL HOUSE!!: Tens over Twos";
                        $this->points = 2801;
                        break;
                }//End inner tens switch
                break;
            //NIINES
            case ($chartArray[0][57] == 3) && ($chartArray[0][65] == 2 || $chartArray[0][75] == 2 || $chartArray[0][81] == 2 || $chartArray[0][74] == 2 || $chartArray[0][48] == 2 || $chartArray[0][56] == 2 || $chartArray[0][55] == 2 || $chartArray[0][54] == 2 || $chartArray[0][53] == 2 || $chartArray[0][52] == 2 || $chartArray[0][51] == 2 || $chartArray[0][50] == 2):
                switch ($chartArray) {
                    case $chartArray[0][65] == 2:
                        $this->text = "FULL HOUSE!!: Nines over Aces";
                        $this->points = 2712;
                        break;
                    case $chartArray[0][75] == 2:
                        $this->text = "FULL HOUSE!!: Nines over Kings";
                        $this->points = 2711;
                        break;
                    case $chartArray[0][81] == 2:
                        $this->text = "FULL HOUSE!!: Nines over Queens";
                        $this->points = 2710;
                        break;
                    case $chartArray[0][74] == 2:
                        $this->text = "FULL HOUSE!!: Nines over Jacks";
                        $this->points = 2709;
                        break;
                    case $chartArray[0][48] == 2:
                        $this->text = "FULL HOUSE!!: Nines over Tens";
                        $this->points = 2708;
                        break;
                    case $chartArray[0][56] == 2:
                        $this->text = "FULL HOUSE!!: Nines over Eights";
                        $this->points = 2707;
                        break;
                    case $chartArray[0][55] == 2:
                        $this->text = "FULL HOUSE!!: Nines over Sevens";
                        $this->points = 2706;
                        break;
                    case $chartArray[0][54] == 2:
                        $this->text = "FULL HOUSE!!: Nines over Sixes";
                        $this->points = 2705;
                        break;
                    case $chartArray[0][53] == 2:
                        $this->text = "FULL HOUSE!!: Nines over Fives";
                        $this->points = 2704;
                        break;
                    case $chartArray[0][52] == 2:
                        $this->text = "FULL HOUSE!!: Nines over Fours";
                        $this->points = 2703;
                        break;
                    case $chartArray[0][51] == 2:
                        $this->text = "FULL HOUSE!!: Nines over Threes";
                        $this->points = 2702;
                        break;
                    case $chartArray[0][50] == 2:
                        $this->text = "FULL HOUSE!!: Nines over Twos";
                        $this->points = 2701;
                        break;
                }//End inner nines switch
                break;
            //EIGHTS
            case ($chartArray[0][56] == 3) && ($chartArray[0][65] == 2 || $chartArray[0][75] == 2 || $chartArray[0][81] == 2 || $chartArray[0][74] == 2 || $chartArray[0][48] == 2 || $chartArray[0][57] == 2 || $chartArray[0][55] == 2 || $chartArray[0][54] == 2 || $chartArray[0][53] == 2 || $chartArray[0][52] == 2 || $chartArray[0][51] == 2 || $chartArray[0][50] == 2):
                switch ($chartArray) {
                    case $chartArray[0][65] == 2:
                        $this->text = "FULL HOUSE!!: Eights over Aces";
                        $this->points = 2612;
                        break;
                    case $chartArray[0][75] == 2:
                        $this->text = "FULL HOUSE!!: Eights over Kings";
                        $this->points = 2611;
                        break;
                    case $chartArray[0][81] == 2:
                        $this->text = "FULL HOUSE!!: Eights over Queens";
                        $this->points = 2610;
                        break;
                    case $chartArray[0][74] == 2:
                        $this->text = "FULL HOUSE!!: Eights over Jacks";
                        $this->points = 2609;
                        break;
                    case $chartArray[0][48] == 2:
                        $this->text = "FULL HOUSE!!: Eights over Tens";
                        $this->points = 2608;
                        break;
                    case $chartArray[0][57] == 2:
                        $this->text = "FULL HOUSE!!: Eights over Nines";
                        $this->points = 2607;
                        break;
                    case $chartArray[0][55] == 2:
                        $this->text = "FULL HOUSE!!: Eights over Sevens";
                        $this->points = 2606;
                        break;
                    case $chartArray[0][54] == 2:
                        $this->text = "FULL HOUSE!!: Eights over Sixes";
                        $this->points = 2605;
                        break;
                    case $chartArray[0][53] == 2:
                        $this->text = "FULL HOUSE!!: Eights over Fives";
                        $this->points = 2604;
                        break;
                    case $chartArray[0][52] == 2:
                        $this->text = "FULL HOUSE!!: Eights over Fours";
                        $this->points = 2603;
                        break;
                    case $chartArray[0][51] == 2:
                        $this->text = "FULL HOUSE!!: Eights over Threes";
                        $this->points = 2602;
                        break;
                    case $chartArray[0][50] == 2:
                        $this->text = "FULL HOUSE!!: Eights over Twos";
                        $this->points = 2601;
                        break;
                }//End inner eights switch
                break;
            //SEVENS
            case ($chartArray[0][55] == 3) && ($chartArray[0][65] == 2 || $chartArray[0][75] == 2 || $chartArray[0][81] == 2 || $chartArray[0][74] == 2 || $chartArray[0][48] == 2 || $chartArray[0][57] == 2 || $chartArray[0][56] == 2 || $chartArray[0][54] == 2 || $chartArray[0][53] == 2 || $chartArray[0][52] == 2 || $chartArray[0][51] == 2 || $chartArray[0][50] == 2):
                switch ($chartArray) {
                    case $chartArray[0][65] == 2:
                        $this->text = "FULL HOUSE!!: Sevens over Aces";
                        $this->points = 2512;
                        break;
                    case $chartArray[0][75] == 2:
                        $this->text = "FULL HOUSE!!: Sevens over Kings";
                        $this->points = 2511;
                        break;
                    case $chartArray[0][81] == 2:
                        $this->text = "FULL HOUSE!!: Sevens over Queens";
                        $this->points = 2510;
                        break;
                    case $chartArray[0][74] == 2:
                        $this->text = "FULL HOUSE!!: Sevens over Jacks";
                        $this->points = 2509;
                        break;
                    case $chartArray[0][48] == 2:
                        $this->text = "FULL HOUSE!!: Sevens over Tens";
                        $this->points = 2508;
                        break;
                    case $chartArray[0][57] == 2:
                        $this->text = "FULL HOUSE!!: Sevens over Nines";
                        $this->points = 2507;
                        break;
                    case $chartArray[0][56] == 2:
                        $this->text = "FULL HOUSE!!: Sevens over Eights";
                        $this->points = 2506;
                        break;
                    case $chartArray[0][54] == 2:
                        $this->text = "FULL HOUSE!!: Sevens over Sixes";
                        $this->points = 2505;
                        break;
                    case $chartArray[0][53] == 2:
                        $this->text = "FULL HOUSE!!: Sevens over Fives";
                        $this->points = 2504;
                        break;
                    case $chartArray[0][52] == 2:
                        $this->text = "FULL HOUSE!!: Sevens over Fours";
                        $this->points = 2503;
                        break;
                    case $chartArray[0][51] == 2:
                        $this->text = "FULL HOUSE!!: Sevens over Threes";
                        $this->points = 2502;
                        break;
                    case $chartArray[0][50] == 2:
                        $this->text = "FULL HOUSE!!: Sevens over Twos";
                        $this->points = 2501;
                        break;
                }//End inner sevens switch
                break;
            //SIXES
            case ($chartArray[0][54] == 3) && ($chartArray[0][65] == 2 || $chartArray[0][75] == 2 || $chartArray[0][81] == 2 || $chartArray[0][74] == 2 || $chartArray[0][48] == 2 || $chartArray[0][57] == 2 || $chartArray[0][56] == 2 || $chartArray[0][55] == 2 || $chartArray[0][53] == 2 || $chartArray[0][52] == 2 || $chartArray[0][51] == 2 || $chartArray[0][50] == 2):
                switch ($chartArray) {
                    case $chartArray[0][65] == 2:
                        $this->text = "FULL HOUSE!!: Sixes over Aces";
                        $this->points = 2412;
                        break;
                    case $chartArray[0][75] == 2:
                        $this->text = "FULL HOUSE!!: Sixes over Kings";
                        $this->points = 2411;
                        break;
                    case $chartArray[0][81] == 2:
                        $this->text = "FULL HOUSE!!: Sixes over Queens";
                        $this->points = 2410;
                        break;
                    case $chartArray[0][74] == 2:
                        self::$fhTxt = " Jacks";
                        $this->points = 2409;
                        break;
                    case $chartArray[0][48] == 2:
                        $this->text = "FULL HOUSE!!: Sixes over Tens";
                        $this->points = 2408;
                        break;
                    case $chartArray[0][57] == 2:
                        $this->text = "FULL HOUSE!!: Sixes over Nines";
                        $this->points = 2407;
                        break;
                    case $chartArray[0][56] == 2:
                        $this->text = "FULL HOUSE!!: Sixes over Eights";
                        $this->points = 2406;
                        break;
                    case $chartArray[0][55] == 2:
                        $this->text = "FULL HOUSE!!: Sixes over Sevens";
                        $this->points = 2405;
                        break;
                    case $chartArray[0][53] == 2:
                        $this->text = "FULL HOUSE!!: Sixes over Fives";
                        $this->points = 2404;
                        break;
                    case $chartArray[0][52] == 2:
                        $this->text = "FULL HOUSE!!: Sixes over Fours";
                        $this->points = 2403;
                        break;
                    case $chartArray[0][51] == 2:
                        $this->text = "FULL HOUSE!!: Sixes over Threes";
                        $this->points = 2402;
                        break;
                    case $chartArray[0][50] == 2:
                        $this->text = "FULL HOUSE!!: Sixes over Twos";
                        $this->points = 2401;
                        break;
                }//End inner sixes switch
                break;
            //FIVES
            case ($chartArray[0][53] == 3) && ($chartArray[0][65] == 2 || $chartArray[0][75] == 2 || $chartArray[0][81] == 2 || $chartArray[0][74] == 2 || $chartArray[0][48] == 2 || $chartArray[0][57] == 2 || $chartArray[0][56] == 2 || $chartArray[0][55] == 2 || $chartArray[0][54] == 2 || $chartArray[0][52] == 2 || $chartArray[0][51] == 2 || $chartArray[0][50] == 2):
                switch ($chartArray) {
                    case $chartArray[0][65] == 2:
                        $this->text = "FULL HOUSE!!: Fives over Aces";
                        $this->points = 2312;
                        break;
                    case $chartArray[0][75] == 2:
                        $this->text = "FULL HOUSE!!: Fives over Kings";
                        $this->points = 2311;
                        break;
                    case $chartArray[0][81] == 2:
                        $this->text = "FULL HOUSE!!: Fives over Queens";
                        $this->points = 2310;
                        break;
                    case $chartArray[0][74] == 2:
                        $this->text = "FULL HOUSE!!: Fives over Jacks";
                        $this->points = 2309;
                        break;
                    case $chartArray[0][48] == 2:
                        $this->text = "FULL HOUSE!!: Fives over Tens";
                        $this->points = 2308;
                        break;
                    case $chartArray[0][57] == 2:
                        $this->text = "FULL HOUSE!!: Fives over Nines";
                        $this->points = 2307;
                        break;
                    case $chartArray[0][56] == 2:
                        $this->text = "FULL HOUSE!!: Fives over Eights";
                        $this->points = 2306;
                        break;
                    case $chartArray[0][55] == 2:
                        $this->text = "FULL HOUSE!!: Fives over Sevens";
                        $this->points = 2305;
                        break;
                    case $chartArray[0][54] == 2:
                        $this->text = "FULL HOUSE!!: Fives over Sixes";
                        $this->points = 2304;
                        break;
                    case $chartArray[0][52] == 2:
                        $this->text = "FULL HOUSE!!: Fives over Fours";
                        $this->points = 2303;
                        break;
                    case $chartArray[0][51] == 2:
                        $this->text = "FULL HOUSE!!: Fives over Threes";
                        $this->points = 2302;
                        break;
                    case $chartArray[0][50] == 2:
                        $this->text = "FULL HOUSE!!: Fives over Twos";
                        $this->points = 2301;
                        break;
                }//End inner fives switch
                break;
            //FOURS
            case ($chartArray[0][52] == 3) && ($chartArray[0][65] == 2 || $chartArray[0][75] == 2 || $chartArray[0][81] == 2 || $chartArray[0][74] == 2 || $chartArray[0][48] == 2 || $chartArray[0][57] == 2 || $chartArray[0][56] == 2 || $chartArray[0][55] == 2 || $chartArray[0][54] == 2 || $chartArray[0][53] == 2 || $chartArray[0][51] == 2 || $chartArray[0][50] == 2):
                switch ($chartArray) {
                    case $chartArray[0][65] == 2:
                        $this->text = "FULL HOUSE!!: Fours over Aces";
                        $this->points = 2212;
                        break;
                    case $chartArray[0][75] == 2:
                        $this->text = "FULL HOUSE!!: Fours over Kings";
                        $this->points = 2211;
                        break;
                    case $chartArray[0][81] == 2:
                        $this->text = "FULL HOUSE!!: Fours over Queens";
                        $this->points = 2210;
                        break;
                    case $chartArray[0][74] == 2:
                        $this->text = "FULL HOUSE!!: Fours over Jacks";
                        $this->points = 2209;
                        break;
                    case $chartArray[0][48] == 2:
                        $this->text = "FULL HOUSE!!: Fours over Tens";
                        $this->points = 2208;
                        break;
                    case $chartArray[0][57] == 2:
                        $this->text = "FULL HOUSE!!: Fours over Nines";
                        $this->points = 2207;
                        break;
                    case $chartArray[0][56] == 2:
                        $this->text = "FULL HOUSE!!: Fours over Eights";
                        $this->points = 2206;
                        break;
                    case $chartArray[0][55] == 2:
                        $this->text = "FULL HOUSE!!: Fours over Sevens";
                        $this->points = 2205;
                        break;
                    case $chartArray[0][54] == 2:
                        $this->text = "FULL HOUSE!!: Fours over Sixes";
                        $this->points = 2204;
                        break;
                    case $chartArray[0][53] == 2:
                        $this->text = "FULL HOUSE!!: Fours over Fives";
                        $this->points = 2203;
                        break;
                    case $chartArray[0][51] == 2:
                        $this->text = "FULL HOUSE!!: Fours over Threes";
                        $this->points = 2202;
                        break;
                    case $chartArray[0][50] == 2:
                        $this->text = "FULL HOUSE!!: Fours over Twos";
                        $this->points = 2201;
                        break;
                }//End inner fours switch
                break;
            //THREES
            case ($chartArray[0][51] == 3) && ($chartArray[0][65] == 2 || $chartArray[0][75] == 2 || $chartArray[0][81] == 2 || $chartArray[0][74] == 2 || $chartArray[0][48] == 2 || $chartArray[0][57] == 2 || $chartArray[0][56] == 2 || $chartArray[0][55] == 2 || $chartArray[0][54] == 2 || $chartArray[0][53] == 2 || $chartArray[0][52] == 2 || $chartArray[0][50] == 2):
                switch ($chartArray) {
                    case $chartArray[0][65] == 2:
                        $this->text = "FULL HOUSE!!: Threes over Aces";
                        $this->points = 2112;
                        break;
                    case $chartArray[0][75] == 2:
                        $this->text = "FULL HOUSE!!: Threes over Kings";
                        $this->points = 2111;
                        break;
                    case $chartArray[0][81] == 2:
                        $this->text = "FULL HOUSE!!: Threes over Queens";
                        $this->points = 2110;
                        break;
                    case $chartArray[0][74] == 2:
                        $this->text = "FULL HOUSE!!: Threes over Jacks";
                        $this->points = 2109;
                        break;
                    case $chartArray[0][48] == 2:
                        $this->text = "FULL HOUSE!!: Threes over Tens";
                        $this->points = 2108;
                        break;
                    case $chartArray[0][57] == 2:
                        $this->text = "FULL HOUSE!!: Threes over Nines";
                        $this->points = 2107;
                        break;
                    case $chartArray[0][56] == 2:
                        $this->text = "FULL HOUSE!!: Threes over Eights";
                        $this->points = 2106;
                        break;
                    case $chartArray[0][55] == 2:
                        $this->text = "FULL HOUSE!!: Threes over Sevens";
                        $this->points = 2105;
                        break;
                    case $chartArray[0][54] == 2:
                        $this->text = "FULL HOUSE!!: Threes over Sixes";
                        $this->points = 2104;
                        break;
                    case $chartArray[0][53] == 2:
                        $this->text = "FULL HOUSE!!: Threes over Fives";
                        $this->points = 2103;
                        break;
                    case $chartArray[0][52] == 2:
                        $this->text = "FULL HOUSE!!: Threes over Fours";
                        $this->points = 2102;
                        break;
                    case $chartArray[0][50] == 2:
                        $this->text = "FULL HOUSE!!: Threes over Twos";
                        $this->points = 2101;
                        break;
                }//End inner threes switch
                break;
            //TWOS
            //Points 2001 - 2012
            case ($chartArray[0][50] == 3) && ($chartArray[0][65] == 2 || $chartArray[0][75] == 2 || $chartArray[0][81] == 2 || $chartArray[0][74] == 2 || $chartArray[0][48] == 2 || $chartArray[0][57] == 2 || $chartArray[0][56] == 2 || $chartArray[0][55] == 2 || $chartArray[0][54] == 2 || $chartArray[0][53] == 2 || $chartArray[0][52] == 2 || $chartArray[0][51] == 2):
                switch ($chartArray) {
                    case $chartArray[0][65] == 2:
                        $this->text = "FULL HOUSE!!: Twos over Aces";
                        $this->points = 2012;
                        break;
                    case $chartArray[0][75] == 2:
                        $this->text = "FULL HOUSE!!: Twos over Kings";
                        $this->points = 2011;
                        break;
                    case $chartArray[0][81] == 2:
                        $this->text = "FULL HOUSE!!: Twos over Queens";
                        $this->points = 2010;
                        break;
                    case $chartArray[0][74] == 2:
                        $this->text = "FULL HOUSE!!: Twos over Jacks";
                        $this->points = 2009;
                        break;
                    case $chartArray[0][48] == 2:
                        $this->text = "FULL HOUSE!!: Twos over Tens";
                        $this->points = 2008;
                        break;
                    case $chartArray[0][57] == 2:
                        $this->text = "FULL HOUSE!!: Twos over Nines";
                        $this->points = 2007;
                        break;
                    case $chartArray[0][56] == 2:
                        $this->text = "FULL HOUSE!!: Twos over Eights";
                        $this->points = 2006;
                        break;
                    case $chartArray[0][55] == 2:
                        $this->text = "FULL HOUSE!!: Twos over Sevens";
                        $this->points = 2005;
                        break;
                    case $chartArray[0][54] == 2:
                        $this->text = "FULL HOUSE!!: Twos over Sixes";
                        $this->points = 2004;
                        break;
                    case $chartArray[0][53] == 2:
                        $this->text = "FULL HOUSE!!: Twos over Fives";
                        $this->points = 2003;
                        break;
                    case $chartArray[0][52] == 2:
                        $this->text = "FULL HOUSE!!: Twos over Fours";
                        $this->points = 2002;
                        break;
                    case $chartArray[0][51] == 2:
                        $this->text = "FULL HOUSE!!: Twos over Threes";
                        $this->points = 2001;
                        break;
                }//End inner twos switch
                break;
            /*
				END FULL HOUSE TESTS WITH SUB-SWITCHES
				*/
            /****************************************
             *START FLUSH TESTS  -  START FLUSH TESTS*
             *START FLUSH TESTS  -  START FLUSH TESTS*
             *****************************************/
            //test for spade flush
            //Points: 1500 - 1512
            case ($chartArray[0][83] >= 5) && (in_array("AS", $evaluateArray) == true):
                $this->text = "!!!ITS A SPADE FLUSH - ACE HIGH!!!";
                $this->points = 1512;
                //create index to sort from
                $indexArray = array("AS", "KS", "QS", "JS", "10S", "9S", "8S", "7S", "6S", "5S", "4S", "3S", "2S");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][83] >= 5) && in_array("KS", $evaluateArray) == true:
                $this->text = "!!!ITS A SPADE FLUSH - KING HIGH!!!";
                $this->points = 1511;
                //create index to sort from
                $indexArray = array("AS", "KS", "QS", "JS", "10S", "9S", "8S", "7S", "6S", "5S", "4S", "3S", "2S");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][83] >= 5) && in_array("QS", $evaluateArray) == true:
                $this->text = "!!!ITS A SPADE FLUSH - QUEEN HIGH!!!";
                $this->points = 1510;
                //create index to sort from
                $indexArray = array("AS", "KS", "QS", "JS", "10S", "9S", "8S", "7S", "6S", "5S", "4S", "3S", "2S");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][83] >= 5) && in_array("JS", $evaluateArray) == true:
                $this->text = "!!!ITS A SPADE FLUSH - JACK HIGH!!!";
                $this->points = 1509;
                //create index to sort from
                $indexArray = array("AS", "KS", "QS", "JS", "10S", "9S", "8S", "7S", "6S", "5S", "4S", "3S", "2S");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][83] >= 5) && in_array("10S", $evaluateArray) == true:
                $this->text = "!!!ITS A SPADE FLUSH - TEN HIGH!!!";
                $this->points = 1508;
                //create index to sort from
                $indexArray = array("AS", "KS", "QS", "JS", "10S", "9S", "8S", "7S", "6S", "5S", "4S", "3S", "2S");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][83] >= 5) && in_array("9S", $evaluateArray) == true:
                $this->text = "!!!ITS A SPADE FLUSH - NINE HIGH!!!";
                $this->points = 1507;
                //create index to sort from
                $indexArray = array("AS", "KS", "QS", "JS", "10S", "9S", "8S", "7S", "6S", "5S", "4S", "3S", "2S");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][83] >= 5) && in_array("8S", $evaluateArray) == true:
                $this->text = "!!!ITS A SPADE FLUSH - EIGHT HIGH!!!";
                $this->points = 1506;
                //create index to sort from
                $indexArray = array("AS", "KS", "QS", "JS", "10S", "9S", "8S", "7S", "6S", "5S", "4S", "3S", "2S");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][83] >= 5) && in_array("7S", $evaluateArray) == true:
                $this->text = "!!!ITS A SPADE FLUSH - SEVEN HIGH!!!";
                $this->points = 1505;
                //create index to sort from
                $indexArray = array("AS", "KS", "QS", "JS", "10S", "9S", "8S", "7S", "6S", "5S", "4S", "3S", "2S");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][83] >= 5) && in_array("6S", $evaluateArray) == true:
                $this->text = "!!!ITS A SPADE FLUSH - SIX HIGH!!!";
                $this->points = 1504;
                //create index to sort from
                $indexArray = array("AS", "KS", "QS", "JS", "10S", "9S", "8S", "7S", "6S", "5S", "4S", "3S", "2S");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][83] >= 5) && in_array("5S", $evaluateArray) == true:
                $this->text = "!!!ITS A SPADE FLUSH - FIVE HIGH!!!";
                $this->points = 1503;
                //create index to sort from
                $indexArray = array("AS", "KS", "QS", "JS", "10S", "9S", "8S", "7S", "6S", "5S", "4S", "3S", "2S");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][83] >= 5) && in_array("4S", $evaluateArray) == true:
                $this->text = "!!!ITS A SPADE FLUSH - FOUR HIGH!!!";
                $this->points = 1502;
                //create index to sort from
                $indexArray = array("AS", "KS", "QS", "JS", "10S", "9S", "8S", "7S", "6S", "5S", "4S", "3S", "2S");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][83] >= 5) && in_array("3S", $evaluateArray) == true:
                $this->text = "!!!ITS A SPADE FLUSH - THREE HIGH!!!";
                $this->points = 1501;
                //create index to sort from
                $indexArray = array("AS", "KS", "QS", "JS", "10S", "9S", "8S", "7S", "6S", "5S", "4S", "3S", "2S");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][83] >= 5) && in_array("2S", $evaluateArray) == true:
                $this->text = "!!!ITS A SPADE FLUSH - TWO HIGH!!!";
                $this->points = 1500;
                //create index to sort from
                $indexArray = array("AS", "KS", "QS", "JS", "10S", "9S", "8S", "7S", "6S", "5S", "4S", "3S", "2S");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;

            //test for diamond flush
            //Points: 1500 - 1512
            case ($chartArray[0][68] >= 5) && (in_array("AD", $evaluateArray) == true):
                $this->text = "!!!ITS A DIAMOND FLUSH - ACE HIGH!!!";
                $this->points = 1512;
                //create index to sort from
                $indexArray = array("AD", "KD", "QD", "JD", "10D", "9D", "8D", "7D", "6D", "5D", "4D", "3D", "2D");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][68] >= 5) && in_array("KD", $evaluateArray) == true:
                $this->text = "!!!ITS A DIAMOND FLUSH - KING HIGH!!!";
                $this->points = 1511;
                //create index to sort from
                $indexArray = array("AD", "KD", "QD", "JD", "10D", "9D", "8D", "7D", "6D", "5D", "4D", "3D", "2D");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][68] >= 5) && in_array("QD", $evaluateArray) == true:
                $this->text = "!!!ITS A DIAMOND FLUSH - QUEEN HIGH!!!";
                $this->points = 1510;
                //create index to sort from
                $indexArray = array("AD", "KD", "QD", "JD", "10D", "9D", "8D", "7D", "6D", "5D", "4D", "3D", "2D");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][68] >= 5) && in_array("JD", $evaluateArray) == true:
                $this->text = "!!!ITS A DIAMOND FLUSH - JACK HIGH!!!";
                $this->points = 1509;
                //create index to sort from
                $indexArray = array("AD", "KD", "QD", "JD", "10D", "9D", "8D", "7D", "6D", "5D", "4D", "3D", "2D");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][68] >= 5) && in_array("10D", $evaluateArray) == true:
                $this->text = "!!!ITS A DIAMOND FLUSH - TEN HIGH!!!";
                $this->points = 1508;
                //create index to sort from
                $indexArray = array("AD", "KD", "QD", "JD", "10D", "9D", "8D", "7D", "6D", "5D", "4D", "3D", "2D");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][68] >= 5) && in_array("9D", $evaluateArray) == true:
                $this->text = "!!!ITS A DIAMOND FLUSH - NINE HIGH!!!";
                $this->points = 1507;
                //create index to sort from
                $indexArray = array("AD", "KD", "QD", "JD", "10D", "9D", "8D", "7D", "6D", "5D", "4D", "3D", "2D");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][68] >= 5) && in_array("8D", $evaluateArray) == true:
                $this->text = "!!!ITS A DIAMOND FLUSH - EIGHT HIGH!!!";
                $this->points = 1506;
                //create index to sort from
                $indexArray = array("AD", "KD", "QD", "JD", "10D", "9D", "8D", "7D", "6D", "5D", "4D", "3D", "2D");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][68] >= 5) && in_array("7D", $evaluateArray) == true:
                $this->text = "!!!ITS A DIAMOND FLUSH - SEVEN HIGH!!!";
                $this->points = 1505;
                //create index to sort from
                $indexArray = array("AD", "KD", "QD", "JD", "10D", "9D", "8D", "7D", "6D", "5D", "4D", "3D", "2D");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][68] >= 5) && in_array("6D", $evaluateArray) == true:
                $this->text = "!!!ITS A DIAMOND FLUSH - SIX HIGH!!!";
                $this->points = 1504;
                //create index to sort from
                $indexArray = array("AD", "KD", "QD", "JD", "10D", "9D", "8D", "7D", "6D", "5D", "4D", "3D", "2D");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][68] >= 5) && in_array("5D", $evaluateArray) == true:
                $this->text = "!!!ITS A DIAMOND FLUSH - FIVE HIGH!!!";
                $this->points = 1503;
                //create index to sort from
                $indexArray = array("AD", "KD", "QD", "JD", "10D", "9D", "8D", "7D", "6D", "5D", "4D", "3D", "2D");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][68] >= 5) && in_array("4D", $evaluateArray) == true:
                $this->text = "!!!ITS A DIAMOND FLUSH - FOUR HIGH!!!";
                $this->points = 1502;
                //create index to sort from
                $indexArray = array("AD", "KD", "QD", "JD", "10D", "9D", "8D", "7D", "6D", "5D", "4D", "3D", "2D");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][68] >= 5) && in_array("3D", $evaluateArray) == true:
                $this->text = "!!!ITS A DIAMOND FLUSH - THREE HIGH!!!";
                $this->points = 1501;
                //create index to sort from
                $indexArray = array("AD", "KD", "QD", "JD", "10D", "9D", "8D", "7D", "6D", "5D", "4D", "3D", "2D");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][68] >= 5) && in_array("2D", $evaluateArray) == true:
                $this->text = "!!!ITS A DIAMOND FLUSH - TWO HIGH!!!";
                $this->points = 1500;
                //create index to sort from
                $indexArray = array("AD", "KD", "QD", "JD", "10D", "9D", "8D", "7D", "6D", "5D", "4D", "3D", "2D");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;

            //TEST for club flush
            //Points: 1500 - 1512
            case ($chartArray[0][67] >= 5) && (in_array("AC", $evaluateArray) == true):
                $this->text = "!!!ITS A CLUB FLUSH - ACE HIGH!!!";
                $this->points = 1512;
                //create index to sort from
                $indexArray = array("AC", "KC", "QC", "JC", "10C", "9C", "8C", "7C", "6C", "5C", "4C", "3C", "2C");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][67] >= 5) && in_array("KC", $evaluateArray) == true:
                $this->text = "!!!ITS A CLUB FLUSH - KING HIGH!!!";
                $this->points = 1511;
                //create index to sort from
                $indexArray = array("AC", "KC", "QC", "JC", "10C", "9C", "8C", "7C", "6C", "5C", "4C", "3C", "2C");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][67] >= 5) && in_array("QC", $evaluateArray) == true:
                $this->text = "!!!ITS A CLUB FLUSH - QUEEN HIGH!!!";
                $this->points = 1510;
                //create index to sort from
                $indexArray = array("AC", "KC", "QC", "JC", "10C", "9C", "8C", "7C", "6C", "5C", "4C", "3C", "2C");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][67] >= 5) && in_array("JC", $evaluateArray) == true:
                $this->text = "!!!ITS A CLUB FLUSH - JACK HIGH!!!";
                $this->points = 1509;
                //create index to sort from
                $indexArray = array("AC", "KC", "QC", "JC", "10C", "9C", "8C", "7C", "6C", "5C", "4C", "3C", "2C");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][67] >= 5) && in_array("10C", $evaluateArray) == true:
                $this->text = "!!!ITS A CLUB FLUSH - TEN HIGH!!!";
                $this->points = 1508;
                //create index to sort from
                $indexArray = array("AC", "KC", "QC", "JC", "10C", "9C", "8C", "7C", "6C", "5C", "4C", "3C", "2C");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][67] >= 5) && in_array("9C", $evaluateArray) == true:
                $this->text = "!!!ITS A CLUB FLUSH - NINE HIGH!!!";
                $this->points = 1507;
                //create index to sort from
                $indexArray = array("AC", "KC", "QC", "JC", "10C", "9C", "8C", "7C", "6C", "5C", "4C", "3C", "2C");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][67] >= 5) && in_array("8C", $evaluateArray) == true:
                $this->text = "!!!ITS A CLUB FLUSH - EIGHT HIGH!!!";
                $this->points = 1506;
                //create index to sort from
                $indexArray = array("AC", "KC", "QC", "JC", "10C", "9C", "8C", "7C", "6C", "5C", "4C", "3C", "2C");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][67] >= 5) && in_array("7C", $evaluateArray) == true:
                $this->text = "!!!ITS A CLUB FLUSH - SEVEN HIGH!!!";
                $this->points = 1505;
                //create index to sort from
                $indexArray = array("AC", "KC", "QC", "JC", "10C", "9C", "8C", "7C", "6C", "5C", "4C", "3C", "2C");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][67] >= 5) && in_array("6C", $evaluateArray) == true:
                $this->text = "!!!ITS A CLUB FLUSH - SIX HIGH!!!";
                $this->points = 1504;
                //create index to sort from
                $indexArray = array("AC", "KC", "QC", "JC", "10C", "9C", "8C", "7C", "6C", "5C", "4C", "3C", "2C");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][67] >= 5) && in_array("5C", $evaluateArray) == true:
                $this->text = "!!!ITS A CLUB FLUSH - FIVE HIGH!!!";
                $this->points = 1503;
                //create index to sort from
                $indexArray = array("AC", "KC", "QC", "JC", "10C", "9C", "8C", "7C", "6C", "5C", "4C", "3C", "2C");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][67] >= 5) && in_array("4C", $evaluateArray) == true:
                $this->text = "!!!ITS A CLUB FLUSH - FOUR HIGH!!!";
                $this->points = 1502;
                //create index to sort from
                $indexArray = array("AC", "KC", "QC", "JC", "10C", "9C", "8C", "7C", "6C", "5C", "4C", "3C", "2C");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][67] >= 5) && in_array("3C", $evaluateArray) == true:
                $this->text = "!!!ITS A CLUB FLUSH - THREE HIGH!!!";
                $this->points = 1501;
                //create index to sort from
                $indexArray = array("AC", "KC", "QC", "JC", "10C", "9C", "8C", "7C", "6C", "5C", "4C", "3C", "2C");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][67] >= 5) && in_array("2C", $evaluateArray) == true:
                $this->text = "!!!ITS A CLUB FLUSH - TWO HIGH!!!";
                $this->points = 1500;
                //create index to sort from
                $indexArray = array("AC", "KC", "QC", "JC", "10C", "9C", "8C", "7C", "6C", "5C", "4C", "3C", "2C");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;

            //TEST for heart flush
            //Points: 1500 - 1512
            case ($chartArray[0][72] >= 5) && (in_array("AH", $evaluateArray) == true):
                $this->text = "!!!ITS A HEART FLUSH - ACE HIGH!!!";
                $this->points = 1512;
                //create index to sort from
                $indexArray = array("AH", "KH", "QH", "JH", "10H", "9H", "8H", "7H", "6H", "5H", "4H", "3H", "2H");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][72] >= 5) && in_array("KH", $evaluateArray) == true:
                $this->text = "!!!ITS A HEART FLUSH - KING HIGH!!!";
                $this->points = 1511;
                //create index to sort from
                $indexArray = array("AH", "KH", "QH", "JH", "10H", "9H", "8H", "7H", "6H", "5H", "4H", "3H", "2H");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][72] >= 5) && in_array("QH", $evaluateArray) == true:
                $this->text = "!!!ITS A HEART FLUSH - QUEEN HIGH!!!";
                $this->points = 1510;
                //create index to sort from
                $indexArray = array("AH", "KH", "QH", "JH", "10H", "9H", "8H", "7H", "6H", "5H", "4H", "3H", "2H");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][72] >= 5) && in_array("JH", $evaluateArray) == true:
                $this->text = "!!!ITS A HEART FLUSH - JACK HIGH!!!";
                $this->points = 1509;
                //create index to sort from
                $indexArray = array("AH", "KH", "QH", "JH", "10H", "9H", "8H", "7H", "6H", "5H", "4H", "3H", "2H");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][72] >= 5) && in_array("10H", $evaluateArray) == true:
                $this->text = "!!!ITS A HEART FLUSH - TEN HIGH!!!";
                $this->points = 1508;
                //create index to sort from
                $indexArray = array("AH", "KH", "QH", "JH", "10H", "9H", "8H", "7H", "6H", "5H", "4H", "3H", "2H");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][72] >= 5) && in_array("9H", $evaluateArray) == true:
                $this->text = "!!!ITS A HEART FLUSH - NINE HIGH!!!";
                $this->points = 1507;
                //create index to sort from
                $indexArray = array("AH", "KH", "QH", "JH", "10H", "9H", "8H", "7H", "6H", "5H", "4H", "3H", "2H");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][72] >= 5) && in_array("8H", $evaluateArray) == true:
                $this->text = "!!!ITS A HEART FLUSH - EIGHT HIGH!!!";
                $this->points = 1506;
                //create index to sort from
                $indexArray = array("AH", "KH", "QH", "JH", "10H", "9H", "8H", "7H", "6H", "5H", "4H", "3H", "2H");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][72] >= 5) && in_array("7H", $evaluateArray) == true:
                $this->text = "!!!ITS A HEART FLUSH - SEVEN HIGH!!!";
                $this->points = 1505;
                //create index to sort from
                $indexArray = array("AH", "KH", "QH", "JH", "10H", "9H", "8H", "7H", "6H", "5H", "4H", "3H", "2H");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][72] >= 5) && in_array("6H", $evaluateArray) == true:
                $this->text = "!!!ITS A HEART FLUSH - SIX HIGH!!!";
                $this->points = 1504;
                //create index to sort from
                $indexArray = array("AH", "KH", "QH", "JH", "10H", "9H", "8H", "7H", "6H", "5H", "4H", "3H", "2H");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][72] >= 5) && in_array("5H", $evaluateArray) == true:
                $this->text = "!!!ITS A HEART FLUSH - FIVE HIGH!!!";
                $this->points = 1503;
                //create index to sort from
                $indexArray = array("AH", "KH", "QH", "JH", "10H", "9H", "8H", "7H", "6H", "5H", "4H", "3H", "2H");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][72] >= 5) && in_array("4H", $evaluateArray) == true:
                $this->text = "!!!ITS A HEART FLUSH - FOUR HIGH!!!";
                $this->points = 1502;
                //create index to sort from
                $indexArray = array("AH", "KH", "QH", "JH", "10H", "9H", "8H", "7H", "6H", "5H", "4H", "3H", "2H");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][72] >= 5) && in_array("3H", $evaluateArray) == true:
                $this->text = "!!!ITS A HEART FLUSH - THREE HIGH!!!";
                $this->points = 1501;
                //create index to sort from
                $indexArray = array("AH", "KH", "QH", "JH", "10H", "9H", "8H", "7H", "6H", "5H", "4H", "3H", "2H");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case ($chartArray[0][72] >= 5) && in_array("2H", $evaluateArray) == true:
                $this->text = "!!!ITS A HEART FLUSH - TWO HIGH!!!";
                $this->points = 1500;
                //create index to sort from
                $indexArray = array("AH", "KH", "QH", "JH", "10H", "9H", "8H", "7H", "6H", "5H", "4H", "3H", "2H");
                $i = 0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a = 0; $a <= 12; $a++) //loops through 13 values
                {
                    if (in_array("$indexArray[$i]", $evaluateArray)) //looks for a value in the hand in order
                    {
                        array_push($kickerArray, $indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    } else if (!in_array("$indexArray[$i]", $evaluateArray)) {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;

            //TEST FOR STRAIGHTS
            //Points: 1350-1359
            case array_key_exists("48", $chartArray[0]) && array_key_exists("74", $chartArray[0]) && array_key_exists("81", $chartArray[0]) && array_key_exists("75", $chartArray[0]) && array_key_exists("65", $chartArray[0]):
                $this->text = "!!ITS AN ACE HIGH STRAIGHT!!";
                $this->points = 1359;
                return $points;
                break;
            case array_key_exists("57", $chartArray[0]) && array_key_exists("48", $chartArray[0]) && array_key_exists("74", $chartArray[0]) && array_key_exists("81", $chartArray[0]) && array_key_exists("75", $chartArray[0]):
                $this->text = "!!ITS A KING HIGH STRAIGHT!!";
                $this->points = 1358;
                return $points;
                break;
            case array_key_exists("56", $chartArray[0]) && array_key_exists("57", $chartArray[0]) && array_key_exists("48", $chartArray[0]) && array_key_exists("74", $chartArray[0]) && array_key_exists("81", $chartArray[0]):
                $this->text = "!!ITS A QUEEN HIGH STRAIGHT!!";
                $this->points = 1357;
                return $points;
                break;
            case array_key_exists("55", $chartArray[0]) && array_key_exists("56", $chartArray[0]) && array_key_exists("57", $chartArray[0]) && array_key_exists("48", $chartArray[0]) && array_key_exists("74", $chartArray[0]):
                $this->text = "!!ITS A JACK HIGH STRAIGHT!!";
                $this->points = 1356;
                return $points;
                break;
            case array_key_exists("54", $chartArray[0]) && array_key_exists("55", $chartArray[0]) && array_key_exists("56", $chartArray[0]) && array_key_exists("57", $chartArray[0]) && array_key_exists("48", $chartArray[0]):
                $this->text = "!!ITS A 10 HIGH STRAIGHT!!";
                $this->points = 1355;
                return $points;
                break;
            case array_key_exists("53", $chartArray[0]) && array_key_exists("54", $chartArray[0]) && array_key_exists("55", $chartArray[0]) && array_key_exists("56", $chartArray[0]) && array_key_exists("57", $chartArray[0]):
                $this->text = "!!ITS A 9 HIGH STRAIGHT!!";
                $this->points = 1354;
                return $points;
                break;
            case array_key_exists("52", $chartArray[0]) && array_key_exists("53", $chartArray[0]) && array_key_exists("54", $chartArray[0]) && array_key_exists("55", $chartArray[0]) && array_key_exists("56", $chartArray[0]):
                $this->text = "!!ITS AN 8 HIGH STRAIGHT!!";
                $this->points = 1353;
                return $points;
                break;
            case array_key_exists("51", $chartArray[0]) && array_key_exists("52", $chartArray[0]) && array_key_exists("53", $chartArray[0]) && array_key_exists("54", $chartArray[0]) && array_key_exists("55", $chartArray[0]):
                $this->text = "!!ITS A 7 HIGH STRAIGHT!!";
                $this->points = 1352;
                return $points;
                break;
            case array_key_exists("50", $chartArray[0]) && array_key_exists("51", $chartArray[0]) && array_key_exists("52", $chartArray[0]) && array_key_exists("53", $chartArray[0]) && array_key_exists("54", $chartArray[0]):
                $this->text = "!!ITS A 6 HIGH STRAIGHT!!";
                $this->points = 1351;
                return $points;
                break;
            case array_key_exists("65", $chartArray[0]) && array_key_exists("50", $chartArray[0]) && array_key_exists("51", $chartArray[0]) && array_key_exists("52", $chartArray[0]) && array_key_exists("53", $chartArray[0]):
                $this->text = "!!ITS A 5 HIGH STRAIGHT!!";
                $this->points = 1350;
                return $points;
                break;

            //Test for three of a kind
            //Points: 1300-1312
            case $chartArray[0][65] == 3:
                $this->text = "THREE ACES!";
                $this->points = 1312;
//start kicker for three aces
                switch ($chartArray) {
                    case array_key_exists("75", $chartArray[0])://3-Aces
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Kings
                            case array_key_exists("81", $chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("81", $chartArray[0])://3-Ace
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Queens
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("74", $chartArray[0])://3-Ace
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        switch ($chartArray) {     //START KICKER 2 WITHIN JACKS
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("48", $chartArray[0])://3-Ace
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        switch ($chartArray) {    //START KICKER 2 WITHIN TENS
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("57", $chartArray[0])://3-Ace
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        switch ($chartArray) {    //START KICKER 2 WITHIN NINES
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("56", $chartArray[0])://3-Ace
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        switch ($chartArray) {    //START KICKER 2 WITHIN EIGHTS
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("55", $chartArray[0])://3-Ace
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        switch ($chartArray) {    //START KICKER 2 WITHIN SEVENS
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("54", $chartArray[0])://3-Ace
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        switch ($chartArray) {    //START KICKER 2: WITHIN SIXES
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("53", $chartArray[0])://3-Ace
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        switch ($chartArray) {//START KICKER 2: WITHIN FIVES
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("52", $chartArray[0])://3-Ace
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        switch ($chartArray) {//START KICKER 2: WITHIN 4'S
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("51", $chartArray[0])://3-Ace
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        switch ($chartArray) {//START KICKER 2: WITHIN 3'S
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("50", $chartArray[0])://3-Ace
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for three aces
                return $points;
                break;
            case $chartArray[0][75] == 3:
                $this->text = "THREE KINGS!";
                $this->points = 1311;
//start kicker for three kings
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://3-k
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Kings
                            case array_key_exists("81", $chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("81", $chartArray[0])://3-k
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Queens
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("74", $chartArray[0])://3-k
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        switch ($chartArray) {     //START KICKER 2 WITHIN JACKS
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("48", $chartArray[0])://3-k
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        switch ($chartArray) {    //START KICKER 2 WITHIN TENS
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("57", $chartArray[0])://3-k
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        switch ($chartArray) {    //START KICKER 2 WITHIN NINES
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("56", $chartArray[0])://3-k
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        switch ($chartArray) {    //START KICKER 2 WITHIN EIGHTS
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("55", $chartArray[0])://3-k
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        switch ($chartArray) {    //START KICKER 2 WITHIN SEVENS
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("54", $chartArray[0])://3-k
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        switch ($chartArray) {    //START KICKER 2: WITHIN SIXES
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("53", $chartArray[0])://3-k
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        switch ($chartArray) {//START KICKER 2: WITHIN FIVES
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("52", $chartArray[0])://3-k
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        switch ($chartArray) {//START KICKER 2: WITHIN 4'S
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("51", $chartArray[0])://3-k
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        switch ($chartArray) {//START KICKER 2: WITHIN 3'S
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("50", $chartArray[0])://3-k
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for three kings
                return $points;
                break;
            case $chartArray[0][81] == 3:
                $this->text = "THREE QUEENS!";
                $this->points = 1310;
//start kicker for three queens
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://3-q
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Kings
                            case array_key_exists("75", $chartArray[0]):
                                $this->kicker2Text = LANG_01;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("75", $chartArray[0])://3-q
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Kings
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("74", $chartArray[0])://3-q
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        switch ($chartArray) {     //START KICKER 2 WITHIN JACKS
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("48", $chartArray[0])://3-q
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        switch ($chartArray) {    //START KICKER 2 WITHIN TENS
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("57", $chartArray[0])://3-q
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        switch ($chartArray) {    //START KICKER 2 WITHIN NINES
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("56", $chartArray[0])://3-q
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        switch ($chartArray) {    //START KICKER 2 WITHIN EIGHTS
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("55", $chartArray[0])://3-q
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        switch ($chartArray) {    //START KICKER 2 WITHIN SEVENS
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("54", $chartArray[0])://3-q
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        switch ($chartArray) {    //START KICKER 2: WITHIN SIXES
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("53", $chartArray[0])://3-q
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        switch ($chartArray) {//START KICKER 2: WITHIN FIVES
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("52", $chartArray[0])://3-q
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        switch ($chartArray) {//START KICKER 2: WITHIN 4'S
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("51", $chartArray[0])://3-q
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        switch ($chartArray) {//START KICKER 2: WITHIN 3'S
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("50", $chartArray[0])://3-q
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//emd kicker for three queens
                return $points;
                break;
            case $chartArray[0][74] == 3:
                $this->text = "THREE JACKS!";
                $this->points = 1309;
//start kicker for three jacks
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://3-j
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Kings
                            case array_key_exists("75", $chartArray[0]):
                                $this->kicker2Text = LANG_01;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("81", $chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("75", $chartArray[0])://3-j
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Kings
                            case array_key_exists("81", $chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("81", $chartArray[0])://3-j
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Queens
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("48", $chartArray[0])://3-j
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        switch ($chartArray) {    //START KICKER 2 WITHIN TENS
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("57", $chartArray[0])://3-j
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        switch ($chartArray) {    //START KICKER 2 WITHIN NINES
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("56", $chartArray[0])://3-j
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        switch ($chartArray) {    //START KICKER 2 WITHIN EIGHTS
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("55", $chartArray[0])://3-j
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        switch ($chartArray) {    //START KICKER 2 WITHIN SEVENS
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("54", $chartArray[0])://3-j
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        switch ($chartArray) {    //START KICKER 2: WITHIN SIXES
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("53", $chartArray[0])://3-j
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        switch ($chartArray) {//START KICKER 2: WITHIN FIVES
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("52", $chartArray[0])://3-j
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        switch ($chartArray) {//START KICKER 2: WITHIN 4'S
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("51", $chartArray[0])://3-j
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        switch ($chartArray) {//START KICKER 2: WITHIN 3'S
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("50", $chartArray[0])://3-j
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for three jacks
                return $points;
                break;
            case $chartArray[0][48] == 3:
                $this->text = "THREE TENS!";
                $this->points = 1308;
//start kicker for three nines
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://3-10
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Kings
                            case array_key_exists("75", $chartArray[0]):
                                $this->kicker2Text = LANG_01;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("81", $chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("75", $chartArray[0])://3-10
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Kings
                            case array_key_exists("81", $chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("81", $chartArray[0])://3-10
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Queens
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("74", $chartArray[0])://3-10
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        switch ($chartArray) {     //START KICKER 2 WITHIN JACKS
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("48", $chartArray[0])://3-10
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        switch ($chartArray) {    //START KICKER 2 WITHIN TENS
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("57", $chartArray[0])://3-10
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        switch ($chartArray) {    //START KICKER 2 WITHIN NINES
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("56", $chartArray[0])://3-10
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        switch ($chartArray) {    //START KICKER 2 WITHIN EIGHTS
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("55", $chartArray[0])://3-10
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        switch ($chartArray) {    //START KICKER 2 WITHIN SEVENS
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("54", $chartArray[0])://3-10
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        switch ($chartArray) {    //START KICKER 2: WITHIN SIXES
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("53", $chartArray[0])://3-10
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        switch ($chartArray) {//START KICKER 2: WITHIN FIVES
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("52", $chartArray[0])://3-10
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        switch ($chartArray) {//START KICKER 2: WITHIN 4'S
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("51", $chartArray[0])://3-10
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        switch ($chartArray) {//START KICKER 2: WITHIN 3'S
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("50", $chartArray[0])://3-10
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for three nines
                return $points;
                break;
            case $chartArray[0][57] == 3:
                $this->text = "THREE NINES!";
                $this->points = 1307;
//start kicker for three 9's
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://3-9
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Kings
                            case array_key_exists("75", $chartArray[0]):
                                $this->kicker2Text = LANG_01;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("81", $chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("75", $chartArray[0])://3-9
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Kings
                            case array_key_exists("81", $chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("81", $chartArray[0])://3-9
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Queens
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("74", $chartArray[0])://3-9
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        switch ($chartArray) {     //START KICKER 2 WITHIN JACKS
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("48", $chartArray[0])://3-9
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        switch ($chartArray) {    //START KICKER 2 WITHIN TENS
                            case array_key_exists("56", $chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("56", $chartArray[0])://3-9
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        switch ($chartArray) {    //START KICKER 2 WITHIN EIGHTS
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("55", $chartArray[0])://3-9
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        switch ($chartArray) {    //START KICKER 2 WITHIN SEVENS
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("54", $chartArray[0])://3-9
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        switch ($chartArray) {    //START KICKER 2: WITHIN SIXES
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("53", $chartArray[0])://3-9
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        switch ($chartArray) {//START KICKER 2: WITHIN FIVES
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("52", $chartArray[0])://3-9
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        switch ($chartArray) {//START KICKER 2: WITHIN 4'S
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("51", $chartArray[0])://3-9
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        switch ($chartArray) {//START KICKER 2: WITHIN 3'S
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("50", $chartArray[0])://3-9
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for three nines
                return $points;
                break;
            case $chartArray[0][56] == 3:
                $this->text = "THREE EIGHTS!";
                $this->points = 1306;
//start kicker for three 8's
                switch ($chartArray) {
                    case array_key_exists("65", $chartArray[0])://3-8
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Kings
                            case array_key_exists("75", $chartArray[0]):
                                $this->kicker2Text = LANG_01;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("81", $chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("75", $chartArray[0])://3-8
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Kings
                            case array_key_exists("81", $chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("81", $chartArray[0])://3-8
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        switch ($chartArray) {     //START KICKER 2 WITHIN Queens
                            case array_key_exists("74", $chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("74", $chartArray[0])://3-8
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        switch ($chartArray) {     //START KICKER 2 WITHIN JACKS
                            case array_key_exists("48", $chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("48", $chartArray[0])://3-8
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        switch ($chartArray) {    //START KICKER 2 WITHIN TENS
                            case array_key_exists("57", $chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("57", $chartArray[0])://3-8
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        switch ($chartArray) {    //START KICKER 2 WITHIN NINES
                            case array_key_exists("55", $chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("55", $chartArray[0])://3-8
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        switch ($chartArray) {    //START KICKER 2 WITHIN SEVENS
                            case array_key_exists("54", $chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("54", $chartArray[0])://3-8
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        switch ($chartArray) {    //START KICKER 2: WITHIN SIXES
                            case array_key_exists("53", $chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("53", $chartArray[0])://3-8
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        switch ($chartArray) {//START KICKER 2: WITHIN FIVES
                            case array_key_exists("52", $chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("52", $chartArray[0])://3-8
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        switch ($chartArray) {//START KICKER 2: WITHIN 4'S
                            case array_key_exists("51", $chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("51", $chartArray[0])://3-8
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        switch ($chartArray) {//START KICKER 2: WITHIN 3'S
                            case array_key_exists("50", $chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("50", $chartArray[0])://3-8
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for three 8's
                return $points;
                break;
            case $chartArray[0][55] == 3:
                $this->text = "THREE SEVENS!";
                $this->points = 1305;


//start kicker for three sevens
                switch ($chartArray){
                    case array_key_exists("65",$chartArray[0])://3-7
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Kings
                            case array_key_exists("75",$chartArray[0]):
                                $this->kicker2Text = LANG_01;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("81",$chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("75",$chartArray[0])://3-7
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Kings
                            case array_key_exists("81",$chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("81",$chartArray[0])://3-7
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Queens
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("74",$chartArray[0])://3-7
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        switch ($chartArray){	 //START KICKER 2 WITHIN JACKS
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("48",$chartArray[0])://3-7
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        switch ($chartArray){	//START KICKER 2 WITHIN TENS
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("57",$chartArray[0])://3-7
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        switch ($chartArray){	//START KICKER 2 WITHIN NINES
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("56",$chartArray[0])://3-7
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        switch ($chartArray){	//START KICKER 2 WITHIN EIGHTS
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("54",$chartArray[0])://3-7
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        switch ($chartArray){	//START KICKER 2: WITHIN SIXES
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("53",$chartArray[0])://3-7
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        switch ($chartArray){//START KICKER 2: WITHIN FIVES
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("52",$chartArray[0])://3-7
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        switch ($chartArray){//START KICKER 2: WITHIN 4'S
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("51",$chartArray[0])://3-7
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        switch ($chartArray){//START KICKER 2: WITHIN 3'S
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("50",$chartArray[0])://3-7
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for three sevens
                return $points;
                break;
            case $chartArray[0][54]==3:
                $this->text = "THREE SIXES!";
                $this->points = 1304;
//start kicker for three sixes
                switch ($chartArray){
                    case array_key_exists("65",$chartArray[0])://3-6
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Kings
                            case array_key_exists("75",$chartArray[0]):
                                $this->kicker2Text = LANG_01;
                                $this->kicker2Points = .0012;
                                break;
                            case array_key_exists("81",$chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("75",$chartArray[0])://3-6
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Kings
                            case array_key_exists("81",$chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("81",$chartArray[0])://3-6
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Queens
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("74",$chartArray[0])://3-6
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        switch ($chartArray){	 //START KICKER 2 WITHIN JACKS
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("48",$chartArray[0])://3-6
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        switch ($chartArray){	//START KICKER 2 WITHIN TENS
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("57",$chartArray[0])://3-6
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        switch ($chartArray){	//START KICKER 2 WITHIN NINES
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("56",$chartArray[0])://3-6
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        switch ($chartArray){	//START KICKER 2 WITHIN EIGHTS
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("55",$chartArray[0])://3-6
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        switch ($chartArray){	//START KICKER 2 WITHIN SEVENS
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("53",$chartArray[0])://3-6
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        switch ($chartArray){//START KICKER 2: WITHIN FIVES
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("52",$chartArray[0])://3-6
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        switch ($chartArray){//START KICKER 2: WITHIN 4'S
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("51",$chartArray[0])://3-6
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        switch ($chartArray){//START KICKER 2: WITHIN 3'S
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("50",$chartArray[0])://3-6
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for three sixes
                return $points;
                break;
            case $chartArray[0][53]==3:
                $this->text = "THREE FIVES!";
                $this->points = 1303;
//start kicker for three fives
                switch ($chartArray){
                    case array_key_exists("65",$chartArray[0])://3-5
                        $this->kicker1Text = LANG_00; //KICKER 1 King
                        $this->kicker1Points = .50;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Kings
                            case array_key_exists("75",$chartArray[0]):
                                $this->kicker2Text = LANG_01;
                                $this->kicker2Points = .0012;
                                break;
                            case array_key_exists("81",$chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("75",$chartArray[0])://3-5
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Kings
                            case array_key_exists("81",$chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("81",$chartArray[0])://3-5
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Queens
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("74",$chartArray[0])://3-5
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        switch ($chartArray){	 //START KICKER 2 WITHIN JACKS
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("48",$chartArray[0])://3-5
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        switch ($chartArray){	//START KICKER 2 WITHIN TENS
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("57",$chartArray[0])://3-5
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        switch ($chartArray){	//START KICKER 2 WITHIN NINES
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("56",$chartArray[0])://3-5
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        switch ($chartArray){	//START KICKER 2 WITHIN EIGHTS
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("55",$chartArray[0])://3-5
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        switch ($chartArray){	//START KICKER 2 WITHIN SEVENS
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("54",$chartArray[0])://3-5
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        switch ($chartArray){	//START KICKER 2: WITHIN SIXES
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("52",$chartArray[0])://3-5
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        switch ($chartArray){//START KICKER 2: WITHIN 4'S
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("51",$chartArray[0])://3-5
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        switch ($chartArray){//START KICKER 2: WITHIN 3'S
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("50",$chartArray[0])://3-5
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for three fives
                return $points;
                break;
            case $chartArray[0][52]==3:
                $this->text = "THREE FOURS!";
                $this->points = 1302;
//start kicker for three fours
                switch ($chartArray){
                    case array_key_exists("65",$chartArray[0])://3-4
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Kings
                            case array_key_exists("75",$chartArray[0]):
                                $this->kicker2Text = LANG_01;
                                $this->kicker2Points = .0012;
                                break;
                            case array_key_exists("81",$chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("75",$chartArray[0])://3-4
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Kings
                            case array_key_exists("81",$chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("81",$chartArray[0])://3-4
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Queens
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("74",$chartArray[0])://3-4
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        switch ($chartArray){	 //START KICKER 2 WITHIN JACKS
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("48",$chartArray[0])://3-4
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        switch ($chartArray){	//START KICKER 2 WITHIN TENS
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("57",$chartArray[0])://3-4
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        switch ($chartArray){	//START KICKER 2 WITHIN NINES
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("56",$chartArray[0])://3-4
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        switch ($chartArray){	//START KICKER 2 WITHIN EIGHTS
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("55",$chartArray[0])://3-4
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        switch ($chartArray){	//START KICKER 2 WITHIN SEVENS
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("54",$chartArray[0])://3-4
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        switch ($chartArray){	//START KICKER 2: WITHIN SIXES
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("53",$chartArray[0])://3-4
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        switch ($chartArray){//START KICKER 2: WITHIN FIVES
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("51",$chartArray[0])://3-4
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        switch ($chartArray){//START KICKER 2: WITHIN 3'S
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("50",$chartArray[0])://3-4
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for three 4's
                return $points;
                break;
            case $chartArray[0][51]==3:
                $this->text = "THREE THREES!";
                $this->points = 1301;
//start kicker for three 3's
                switch ($chartArray){
                    case array_key_exists("65",$chartArray[0])://3-3
                        $this->kicker1Text = LANG_00; //KICKER 1 King
                        $this->kicker1Points = .50;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Kings
                            case array_key_exists("75",$chartArray[0]):
                                $this->kicker2Text = LANG_01;
                                $this->kicker2Points = .0012;
                                break;
                            case array_key_exists("81",$chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("75",$chartArray[0])://3-3
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Kings
                            case array_key_exists("81",$chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("81",$chartArray[0])://3-3
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Queens
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("74",$chartArray[0])://3-3
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        switch ($chartArray){	 //START KICKER 2 WITHIN JACKS
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("48",$chartArray[0])://3-3
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        switch ($chartArray){	//START KICKER 2 WITHIN TENS
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("57",$chartArray[0])://3-3
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        switch ($chartArray){	//START KICKER 2 WITHIN NINES
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("56",$chartArray[0])://3-3
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        switch ($chartArray){	//START KICKER 2 WITHIN EIGHTS
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("55",$chartArray[0])://3-3
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        switch ($chartArray){	//START KICKER 2 WITHIN SEVENS
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("54",$chartArray[0])://3-3
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        switch ($chartArray){	//START KICKER 2: WITHIN SIXES
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("53",$chartArray[0])://3-3
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        switch ($chartArray){//START KICKER 2: WITHIN FIVES
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("52",$chartArray[0])://3-3
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        switch ($chartArray){//START KICKER 2: WITHIN 4'S
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("50",$chartArray[0])://3-3
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for three 3's
                return $points;
                break;
            case $chartArray[0][50]==3:
                $this->text = "THREE TWOS!";
                $this->points = 1300;
//start kicker for three 2's
                switch ($chartArray){
                    case array_key_exists("65",$chartArray[0])://3-2
                        $this->kicker1Text = LANG_00; //KICKER 1 Ace
                        $this->kicker1Points = .50;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Kings
                            case array_key_exists("75",$chartArray[0]):
                                $this->kicker2Text = LANG_01;
                                $this->kicker2Points = .0012;
                                break;
                            case array_key_exists("81",$chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("75",$chartArray[0])://3-2
                        $this->kicker1Text = LANG_01; //KICKER 1 King
                        $this->kicker1Points = .49;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Kings
                            case array_key_exists("81",$chartArray[0]):
                                $this->kicker2Text = LANG_02;
                                $this->kicker2Points = .0011;
                                break;
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                                break;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("81",$chartArray[0])://3-2
                        $this->kicker1Text = LANG_02; //KICKER 1 Queen
                        $this->kicker1Points = .48;
                        switch ($chartArray){	 //START KICKER 2 WITHIN Queens
                            case array_key_exists("74",$chartArray[0]):
                                $this->kicker2Text = LANG_03;
                                $this->kicker2Points = .0010;
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("74",$chartArray[0])://3-2
                        $this->kicker1Text = LANG_03; //KICKER 1 JACK
                        $this->kicker1Points = .47;
                        switch ($chartArray){	 //START KICKER 2 WITHIN JACKS
                            case array_key_exists("48",$chartArray[0]):
                                $this->kicker2Text = LANG_04;
                                $this->kicker2Points = .0009;
                                break;
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("48",$chartArray[0])://3-2
                        $this->kicker1Text = LANG_04; //START KICKER 1: 10
                        $this->kicker1Points = .46;
                        switch ($chartArray){	//START KICKER 2 WITHIN TENS
                            case array_key_exists("57",$chartArray[0]):
                                $this->kicker2Text = LANG_05;
                                $this->kicker2Points = .0008;
                                break;
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("57",$chartArray[0])://3-2
                        $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                        $this->kicker1Points = .45;
                        switch ($chartArray){	//START KICKER 2 WITHIN NINES
                            case array_key_exists("56",$chartArray[0]):
                                $this->kicker2Text = LANG_06;
                                $this->kicker2Points = .0007;
                                break;
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("56",$chartArray[0])://3-2
                        $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                        $this->kicker1Points = .44;
                        switch ($chartArray){	//START KICKER 2 WITHIN EIGHTS
                            case array_key_exists("55",$chartArray[0]):
                                $this->kicker2Text = LANG_07;
                                $this->kicker2Points = .0006;
                                break;
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("55",$chartArray[0])://3-2
                        $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                        $this->kicker1Points = .43;
                        switch ($chartArray){	//START KICKER 2 WITHIN SEVENS
                            case array_key_exists("54",$chartArray[0]):
                                $this->kicker2Text = LANG_08;
                                $this->kicker2Points = .0005;
                                break;
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("54",$chartArray[0])://3-2
                        $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                        $this->kicker1Points = .42;
                        switch ($chartArray){	//START KICKER 2: WITHIN SIXES
                            case array_key_exists("53",$chartArray[0]):
                                $this->kicker2Text = LANG_09;
                                $this->kicker2Points = .0004;
                                break;
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("53",$chartArray[0])://3-2
                        $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                        $this->kicker1Points = .41;
                        switch ($chartArray){//START KICKER 2: WITHIN FIVES
                            case array_key_exists("52",$chartArray[0]):
                                $this->kicker2Text = LANG_10;
                                $this->kicker2Points = .0003;
                                break;
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("52",$chartArray[0])://3-2
                        $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                        $this->kicker1Points = .40;
                        switch ($chartArray){//START KICKER 2: WITHIN 4'S
                            case array_key_exists("51",$chartArray[0]):
                                $this->kicker2Text = LANG_11;
                                $this->kicker2Points = .0002;
                                break;
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("51",$chartArray[0])://3-2
                        $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                        $this->kicker1Points = .39;
                        switch ($chartArray){//START KICKER 2: WITHIN 3'S
                            case array_key_exists("50",$chartArray[0]):
                                $this->kicker2Text = LANG_12;
                                $this->kicker2Points = .0001;
                                break;
                        }
                        break;
                    case array_key_exists("50",$chartArray[0])://3-2
                        $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                        $this->kicker1Points = .38;
                        break;
                }
//end kicker for three 2's
                return $points;
                break;

            //Two pair
            //Points: 101 - 1212
            //the same pair is tripping it on the && side - I need to pull out the first pair
            //Aces
            /****************************************
             *THIS IS THE START OF THE TWO PAIR TESTS*
             *THIS IS THE START OF THE TWO PAIR TESTS*
             *THIS IS THE START OF THE TWO PAIR TESTS*
             *****************************************/
            case ($chartArray[0][65]==2) && ($chartArray[0][75]==2||$chartArray[0][81]==2||$chartArray[0][74]==2||$chartArray[0][48]==2||$chartArray[0][57]==2||$chartArray[0][56]==2||$chartArray[0][55]==2||$chartArray[0][54]==2||$chartArray[0][53]==2||$chartArray[0][52]==2||$chartArray[0][51]==2||$chartArray[0][50]==2):
                //Aces sub switch - tests all pairs but Aces
                switch ($chartArray)
                {
                    case $chartArray[0][75]==2:
                        $this->text = "Two Pair: Aces & Kings";
                        $this->points= 1212;
                        switch ($chartArray){
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][81]==2:
                        $this->text = "Two Pair: Aces & Queens";
                        $this->points= 1211;
                        switch ($chartArray){
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][74]==2:
                        $this->text = "Two Pair: Aces & Jacks";
                        $this->points= 1210;
                        switch ($chartArray){
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][48]==2:
                        $this->text ="Two Pair: Aces & Tens";
                        $this->points= 1209;
                        switch ($chartArray){
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][57]==2:
                        $this->text = "Two Pair: Aces & Nines";
                        $this->points= 1208;
                        switch ($chartArray){
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][56]==2:
                        $this->text = "Two Pair: Aces & Eights";
                        $this->points= 1207;
                        switch ($chartArray){
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][55]==2:
                        $this->text="Two Pair: Aces & Sevens";
                        $this->points= 1206;
                        switch ($chartArray){
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][54]==2:
                        $this->text="Two Pair: Aces & Sixes";
                        $this->points= 1205;
                        switch ($chartArray){
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][53]==2:
                        $this->text="Two Pair: Aces & Fives";
                        $this->points= 1204;
                        switch ($chartArray){
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][52]==2:
                        $this->text = "Two Pair: Aces & Fours";
                        $this->points= 1203;
                        switch ($chartArray){
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][51]==2:
                        $this->text = "Two Pair: Aces & Threes";
                        $this->points= 1202;
                        switch ($chartArray){
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][50]==2:
                        $this->text = "Two Pair: Aces & Twos";
                        $this->points= 1201;
                        switch ($chartArray){
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                        }
                        break;
                }//End inner Ace switch
                break;
            //Kings,
            case ($chartArray[0][75]==2) && ($chartArray[0][65]==2||$chartArray[0][81]==2||$chartArray[0][74]==2||$chartArray[0][48]==2||$chartArray[0][57]==2||$chartArray[0][56]==2||$chartArray[0][55]==2||$chartArray[0][54]==2||$chartArray[0][53]==2||$chartArray[0][52]==2||$chartArray[0][51]==2||$chartArray[0][50]==2):
                //tests for kings first
                switch ($chartArray)
                {
                    case $chartArray[0][81]==2:
                        $this->text="Two Pair: Kings & Queens";
                        $this->points= 1111;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][74]==2:
                        $this->text="Two Pair: Kings & Jacks";
                        $this->points= 1110;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][48]==2:
                        $this->text="Two Pair: Kings & Tens";
                        $this->points= 1109;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][57]==2:
                        $this->text="Two Pair: Kings & Nines";
                        $this->points= 1108;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][56]==2:
                        $this->text="Two Pair: Kings & Eights";
                        $this->points= 1107;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][55]==2:
                        $this->text="Two Pair: Kings & Sevens";
                        $this->points= 1106;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][54]==2:
                        $this->text="Two Pair: Kings & Sixes";
                        $this->points= 1105;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][53]==2:
                        $this->text="Two Pair: Kings & Fives";
                        $this->points= 1104;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][52]==2:
                        $this->text="Two Pair: Kings & Fours";
                        $this->points= 1103;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][51]==2:
                        $this->text="Two Pair: Kings & Threes";
                        $this->points= 1102;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][50]==2:
                        $this->text="Two Pair: Kings & Twos";
                        $this->points= 1101;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                        }
                        break;
                }//End inner king switch
                break;
            //Queens
            case ($chartArray[0][81]==2) && ($chartArray[0][65]==2||$chartArray[0][75]==2||$chartArray[0][74]==2||$chartArray[0][48]==2||$chartArray[0][57]==2||$chartArray[0][56]==2||$chartArray[0][55]==2||$chartArray[0][54]==2||$chartArray[0][53]==2||$chartArray[0][52]==2||$chartArray[0][51]==2||$chartArray[0][50]==2):
                switch ($chartArray)
                {
                    case $chartArray[0][74]==2:
                        $this->text="Two Pair: Queens & Jacks";
                        $this->points= 1010;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][48]==2:
                        $this->text="Two Pair: Queens & Tens";
                        $this->points= 1009;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][57]==2:
                        $this->text="Two Pair: Queens & Nines";
                        $this->points= 1008;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][56]==2:
                        $this->text="Two Pair: Queens & Eights";
                        $this->points= 1007;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][55]==2:
                        $this->text="Two Pair: Queens & Sevens";
                        $this->points= 1006;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][54]==2:
                        $this->text="Two Pair: Queens & Sixes";
                        $this->points= 1005;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][53]==2:
                        $this->text="Two Pair: Queens & Fives";
                        $this->points= 1004;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][52]==2:
                        $this->text="Two Pair: Queens & Fours";
                        $this->points= 1003;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][51]==2:
                        $this->text="Two Pair: Queens & Threes";
                        $this->points= 1002;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][50]==2:
                        $this->text="Two Pair: Queens & Twos";
                        $this->points= 1001;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                        }
                        break;
                }//End inner queen switch
                break;
            //Jacks
            case ($chartArray[0][74]==2) && ($chartArray[0][65]==2||$chartArray[0][75]==2||$chartArray[0][81]==2||$chartArray[0][48]==2||$chartArray[0][57]==2||$chartArray[0][56]==2||$chartArray[0][55]==2||$chartArray[0][54]==2||$chartArray[0][53]==2||$chartArray[0][52]==2||$chartArray[0][51]==2||$chartArray[0][50]==2):
                switch ($chartArray)
                {
                    case $chartArray[0][48]==2:
                        $this->text="Two Pair: Jacks & Tens";
                        $this->points= 909;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][57]==2:
                        $this->text="Two Pair: Jacks & Nines";
                        $this->points= 908;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][56]==2:
                        $this->text="Two Pair: Jacks & Eights";
                        $this->points= 907;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][55]==2:
                        $this->text="Two Pair: Jacks & Sevens";
                        $this->points= 906;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][54]==2:
                        $this->text="Two Pair: Jacks & Sixes";
                        $this->points= 905;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][53]==2:
                        $this->text="Two Pair: Jacks & Fives";
                        $this->points= 904;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][52]==2:
                        $this->text="Two Pair: Jacks & Fours";
                        $this->points= 903;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][51]==2:
                        $this->text="Two Pair: Jacks & Threes";
                        $this->points= 902;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][50]==2:
                        $this->text="Two Pair: Jacks & Twos";
                        $this->points= 901;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                        }
                        break;
                }//End inner jack switch
                break;
            //Tens
            case ($chartArray[0][48]==2) && ($chartArray[0][65]==2||$chartArray[0][75]==2||$chartArray[0][81]==2||$chartArray[0][74]==2||$chartArray[0][57]==2||$chartArray[0][56]==2||$chartArray[0][55]==2||$chartArray[0][54]==2||$chartArray[0][53]==2||$chartArray[0][52]==2||$chartArray[0][51]==2||$chartArray[0][50]==2):
                switch ($chartArray)
                {
                    case $chartArray[0][57]==2:
                        $this->text="Two Pair: Tens & Nines";
                        $this->points= 808;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][56]==2:
                        $this->text="Two Pair: Tens & Eights";
                        $this->points= 807;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][55]==2:
                        $this->text="Two Pair: Tens & Sevens";
                        $this->points= 806;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][54]==2:
                        $this->text="Two Pair: Tens & Sixes";
                        $this->points= 805;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][53]==2:
                        $this->text="Two Pair: Tens & Fives";
                        $this->points= 804;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][52]==2:
                        $this->text="Two Pair: Tens & Fours";
                        $this->points= 803;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][51]==2:
                        $this->text="Two Pair: Tens & Threes";
                        $this->points= 802;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][50]==2:
                        $this->text="Two Pair: Tens & Twos";
                        $this->points= 801;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                        }
                        break;
                }//End inner tens switch
                break;
            //Nines
            case ($chartArray[0][57]==2) && ($chartArray[0][65]==2||$chartArray[0][75]==2||$chartArray[0][81]==2||$chartArray[0][74]==2||$chartArray[0][48]==2||$chartArray[0][56]==2||$chartArray[0][55]==2||$chartArray[0][54]==2||$chartArray[0][53]==2||$chartArray[0][52]==2||$chartArray[0][51]==2||$chartArray[0][50]==2):
                switch ($chartArray)
                {
                    case $chartArray[0][56]==2:
                        $this->text="Two Pair: Nines & Eights";
                        $this->points= 707;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][55]==2:
                        $this->text="Two Pair: Nines & Sevens";
                        $this->points= 706;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][54]==2:
                        $this->text="Two Pair: Nines & Sixes";
                        $this->points= 705;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][53]==2:
                        $this->text="Two Pair: Nines & Fives";
                        $this->points= 704;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][52]==2:
                        $this->text="Two Pair: Nines & Fours";
                        $this->points= 703;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][51]==2:
                        $this->text="Two Pair: Nines & Threes";
                        $this->points= 702;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][50]==2:
                        $this->text="Two Pair: Nines & Twos";
                        $this->points=701;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                        }
                        break;
                }//End inner nines switch
                break;
            //Eights
            case ($chartArray[0][56]==2) && ($chartArray[0][65]==2||$chartArray[0][75]==2||$chartArray[0][81]==2||$chartArray[0][74]==2||$chartArray[0][48]==2||$chartArray[0][57]==2||$chartArray[0][55]==2||$chartArray[0][54]==2||$chartArray[0][53]==2||$chartArray[0][52]==2||$chartArray[0][51]==2||$chartArray[0][50]==2):
                switch ($chartArray)
                {
                    case $chartArray[0][55]==2:
                        $this->text="Two Pair: Eights & Sevens";
                        $this->points=606;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][54]==2:
                        $this->text="Two Pair: Eights & Sixes";
                        $this->points=605;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][53]==2:
                        $this->text="Two Pair: Eights & Fives";
                        $this->points=604;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][52]==2:
                        $this->text="Two Pair: Eights & Fours";
                        $this->points=603;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][51]==2:
                        $this->text="Two Pair: Eights & Threes";
                        $this->points=602;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][50]==2:
                        $this->text="Two Pair: Eights & Twos";
                        $this->points=601;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                        }
                        break;
                }//End inner eights switch
                break;
            //Sevens
            case ($chartArray[0][55]==2) && ($chartArray[0][65]==2||$chartArray[0][75]==2||$chartArray[0][81]==2||$chartArray[0][74]==2||$chartArray[0][48]==2||$chartArray[0][57]==2||$chartArray[0][56]==2||$chartArray[0][54]==2||$chartArray[0][53]==2||$chartArray[0][52]==2||$chartArray[0][51]==2||$chartArray[0][50]==2):
                switch ($chartArray)
                {
                    case $chartArray[0][54]==2:
                        $this->text="Two Pair: Sevens & Sixes";
                        $this->points=505;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][53]==2:
                        $this->text="Two Pair: Sevens & Fives";
                        $this->points=504;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][52]==2:
                        $this->text="Two Pair: Sevens & Fours";
                        $this->points=503;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][51]==2:
                        $this->text="Two Pair: Sevens & Threes";
                        $this->points=502;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][50]==2:
                        $this->text="Two Pair: Sevens & Twos";
                        $this->points=501;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                        }
                        break;
                }//End inner sevens switch
                break;
            //Sixes
            case ($chartArray[0][54]==2) && ($chartArray[0][65]==2||$chartArray[0][75]==2||$chartArray[0][81]==2||$chartArray[0][74]==2||$chartArray[0][48]==2||$chartArray[0][57]==2||$chartArray[0][56]==2||$chartArray[0][55]==2||$chartArray[0][53]==2||$chartArray[0][52]==2||$chartArray[0][51]==2||$chartArray[0][50]==2):
                switch ($chartArray)
                {
                    case $chartArray[0][53]==2:
                        $this->text="Two Pair: Sixes & Fives";
                        $this->points=404;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][52]==2:
                        $this->text="Two Pair: Sixes & Fours";
                        $this->points=403;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][51]==2:
                        $this->text="Two Pair: Sixes & Threes";
                        $this->points=402;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][50]==2:
                        $this->text="Two Pair: Sixes & Twos";
                        $this->points=401;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                        }
                        break;
                }//End inner sixes switch
                break;
            //Fives
            case ($chartArray[0][53]==2) && ($chartArray[0][65]==2||$chartArray[0][75]==2||$chartArray[0][81]==2||$chartArray[0][74]==2||$chartArray[0][48]==2||$chartArray[0][57]==2||$chartArray[0][56]==2||$chartArray[0][55]==2||$chartArray[0][54]==2||$chartArray[0][52]==2||$chartArray[0][51]==2||$chartArray[0][50]==2):
                switch ($chartArray)
                {
                    case $chartArray[0][52]==2:
                        $this->text="Two Pair: Fives & Fours";
                        $this->points=303;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][51]==2:
                        $this->text="Two Pair: Fives & Threes";
                        $this->points=302;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][50]==2:
                        $this->text="Two Pair: Fives & Twos";
                        $this->points=301;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                        }
                        break;
                }//End inner fives switch
                break;
            //Fours
            case ($chartArray[0][52]==2) && ($chartArray[0][65]==2||$chartArray[0][75]==2||$chartArray[0][81]==2||$chartArray[0][74]==2||$chartArray[0][48]==2||$chartArray[0][57]==2||$chartArray[0][56]==2||$chartArray[0][55]==2||$chartArray[0][54]==2||$chartArray[0][53]==2||$chartArray[0][51]==2||$chartArray[0][50]==2):
                switch ($chartArray)
                {
                    case $chartArray[0][51]==2:
                        $this->text="Two Pair: Fours & Threes";
                        $this->points=202;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("50",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_12;//START ONE AND ONLY KICKER 1 - TWO
                                $this->kicker1Points = .38;
                                break;
                        }
                        break;
                    case $chartArray[0][50]==2:
                        $this->text="Two Pair: Fours & Twos";
                        $this->points=201;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("51",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_11;//START KICKER 1: THREE
                                $this->kicker1Points = .39;
                                break;
                        }
                        break;
                }//End inner fours switch
                break;
            //Threes
            case ($chartArray[0][51]==2) && ($chartArray[0][65]==2||$chartArray[0][75]==2||$chartArray[0][81]==2||$chartArray[0][74]==2||$chartArray[0][48]==2||$chartArray[0][57]==2||$chartArray[0][56]==2||$chartArray[0][55]==2||$chartArray[0][54]==2||$chartArray[0][53]==2||$chartArray[0][52]==2||$chartArray[0][50]==2):
                switch ($chartArray)
                {
                    case $chartArray[0][50]==2:
                        $this->text="Two Pair: Threes & Twos";
                        $this->points=101;
                        switch ($chartArray){
                            case array_key_exists("65",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_00; //KICKER 1 Ace
                                $this->kicker1Points = .50;
                                break;
                            case array_key_exists("75",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_01; //KICKER 1 King
                                $this->kicker1Points = .49;
                                break;
                            case array_key_exists("81",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_02; //KICKER 1 Queen
                                $this->kicker1Points = .48;
                                break;
                            case array_key_exists("74",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_03; //KICKER 1 JACK
                                $this->kicker1Points = .47;
                                break;
                            case array_key_exists("48",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_04; //START KICKER 1: 10
                                $this->kicker1Points = .46;
                                break;
                            case array_key_exists("57",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_05;//START KICKER 1: NINE
                                $this->kicker1Points = .45;
                                break;
                            case array_key_exists("56",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_06;//START KICKER 1: EIGHT
                                $this->kicker1Points = .44;
                                break;
                            case array_key_exists("55",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_07;//START KICKER 1: SEVENS
                                $this->kicker1Points = .43;
                                break;
                            case array_key_exists("54",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_08;//START KICKER 1: SIX
                                $this->kicker1Points = .42;
                                break;
                            case array_key_exists("53",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_09;//START KICKER 1: FIVES
                                $this->kicker1Points = .41;
                                break;
                            case array_key_exists("52",$chartArray[0])://Ace
                                $this->kicker1Text = LANG_10;//START KICKER 1: FOUR
                                $this->kicker1Points = .40;
                                break;
                        }
                        break;
                }//End inner threes switch
                break;
            //No test for two pairs with 2's first - or it would be four of a kind
            /***********************************
             *THIS IS THE START FOR PAIRS       *
             *PAIRS - PAIRS - PAIRS             *
             *PAIRS - PAIRS - PAIRS             *
             ************************************/
            //Test for a pair
            case $chartArray[0][65]==2:
                $this->text = "ITS A PAIR OF ACES!";
                $this->points = 62;
                //create index to sort from
                $indexArray = array("75","81","74","48","57","56","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=11; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[0];
                $this->kicker2Points = $kickerArray[1];
                $this->kicker3Points = $kickerArray[2];
                $this->kicker1Text = $kickerArray[0];
                $this->kicker2Text = $kickerArray[1];
                $this->kicker3Text = $kickerArray[2];
                return $points;
                break;
            case $chartArray[0][75]==2:
                $this->text = "ITS A PAIR OF KINGS!";
                $this->points = 61;
                //create index to sort from
                $indexArray = array("65","81","74","48","57","56","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=11; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[0];
                $this->kicker2Points = $kickerArray[1];
                $this->kicker3Points = $kickerArray[2];
                $this->kicker1Text = $kickerArray[0];
                $this->kicker2Text = $kickerArray[1];
                $this->kicker3Text = $kickerArray[2];
                return $points;
                break;
            case $chartArray[0][81]==2:
                $this->text = "ITS A PAIR OF QUEENS!";
                $this->points = 60;
                //create index to sort from
                $indexArray = array("65","75","74","48","57","56","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=11; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[0];
                $this->kicker2Points = $kickerArray[1];
                $this->kicker3Points = $kickerArray[2];
                $this->kicker1Text = $kickerArray[0];
                $this->kicker2Text = $kickerArray[1];
                $this->kicker3Text = $kickerArray[2];
                return $points;
                break;
            case $chartArray[0][74]==2:
                $this->text = "ITS A PAIR OF JACKS!";
                $this->points = 59;
                //create index to sort from
                $indexArray = array("65","75","81","48","57","56","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=11; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[0];
                $this->kicker2Points = $kickerArray[1];
                $this->kicker3Points = $kickerArray[2];
                $this->kicker1Text = $kickerArray[0];
                $this->kicker2Text = $kickerArray[1];
                $this->kicker3Text = $kickerArray[2];
                return $points;
                break;
            case $chartArray[0][48]==2:
                $this->text = "ITS A PAIR OF TENS!";
                $this->points = 58;
                //create index to sort from
                $indexArray = array("65","75","81","74","57","56","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=11; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[0];
                $this->kicker2Points = $kickerArray[1];
                $this->kicker3Points = $kickerArray[2];
                $this->kicker1Text = $kickerArray[0];
                $this->kicker2Text = $kickerArray[1];
                $this->kicker3Text = $kickerArray[2];
                return $points;
                break;
            case $chartArray[0][57]==2:
                $this->text = "ITS A PAIR OF NINES!";
                $this->points = 57;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","56","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=11; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[0];
                $this->kicker2Points = $kickerArray[1];
                $this->kicker3Points = $kickerArray[2];
                $this->kicker1Text = $kickerArray[0];
                $this->kicker2Text = $kickerArray[1];
                $this->kicker3Text = $kickerArray[2];
                return $points;
                break;
            case $chartArray[0][56]==2:
                $this->text = "ITS A PAIR OF EIGHTS!";
                $this->points = 56;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=11; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[0];
                $this->kicker2Points = $kickerArray[1];
                $this->kicker3Points = $kickerArray[2];
                $this->kicker1Text = $kickerArray[0];
                $this->kicker2Text = $kickerArray[1];
                $this->kicker3Text = $kickerArray[2];
                return $points;
                break;
            case $chartArray[0][55]==2:
                $this->text = "ITS A PAIR OF SEVENS!";
                $this->points = 55;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=11; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[0];
                $this->kicker2Points = $kickerArray[1];
                $this->kicker3Points = $kickerArray[2];
                $this->kicker1Text = $kickerArray[0];
                $this->kicker2Text = $kickerArray[1];
                $this->kicker3Text = $kickerArray[2];
                return $points;
                break;
            case $chartArray[0][54]==2:
                $this->text = "ITS A PAIR OF SIXES!";
                $this->points = 54;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=11; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[0];
                $this->kicker2Points = $kickerArray[1];
                $this->kicker3Points = $kickerArray[2];
                $this->kicker1Text = $kickerArray[0];
                $this->kicker2Text = $kickerArray[1];
                $this->kicker3Text = $kickerArray[2];
                return $points;
                break;
            case $chartArray[0][53]==2:
                $this->text = "ITS A PAIR OF FIVES!";
                $this->points = 53;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","54","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=11; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[0];
                $this->kicker2Points = $kickerArray[1];
                $this->kicker3Points = $kickerArray[2];
                $this->kicker1Text = $kickerArray[0];
                $this->kicker2Text = $kickerArray[1];
                $this->kicker3Text = $kickerArray[2];
                return $points;
                break;
            case $chartArray[0][52]==2:
                $this->text = "ITS A PAIR OF FOURS!";
                $this->points = 52;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","54","53","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=11; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[0];
                $this->kicker2Points = $kickerArray[1];
                $this->kicker3Points = $kickerArray[2];
                $this->kicker1Text = $kickerArray[0];
                $this->kicker2Text = $kickerArray[1];
                $this->kicker3Text = $kickerArray[2];
                return $points;
                break;
            case $chartArray[0][51]==2:
                $this->text = "ITS A PAIR OF THREES!";
                $this->points = 51;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","54","53","52","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=11; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[0];
                $this->kicker2Points = $kickerArray[1];
                $this->kicker3Points = $kickerArray[2];
                $this->kicker1Text = $kickerArray[0];
                $this->kicker2Text = $kickerArray[1];
                $this->kicker3Text = $kickerArray[2];
                return $points;
                break;
            case $chartArray[0][50]==2:
                $this->text = "ITS A PAIR OF TWOS!";
                $this->points = 50;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","54","53","52","51");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=11; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop
                $this->kicker1Points = $kickerArray[0];
                $this->kicker2Points = $kickerArray[1];
                $this->kicker3Points = $kickerArray[2];
                $this->kicker1Text = $kickerArray[0];
                $this->kicker2Text = $kickerArray[1];
                $this->kicker3Text = $kickerArray[2];
                return $points;
                break;
            /*************************************************
             *																									*
             *																									*
             *	START HIGH CARDS													*
             *																									*
             ***************************************************/

            //Test for high card
            //Test for high card
            case array_key_exists("65",$chartArray[0]):
                $this->text = "YOU HAVE BUNK - HIGH CARD ACE";
                $this->points = 13;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=12; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop

                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case array_key_exists("75",$chartArray[0]):
                $this->text = "YOU HAVE BUNK - HIGH CARD KING";
                $this->points = 12;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=12; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop

                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case array_key_exists("81",$chartArray[0]):
                $this->text = "YOU HAVE BUNK - HIGH CARD QUEEN";
                $this->points = 11;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=12; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop

                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case array_key_exists("74",$chartArray[0]):
                $this->text = "YOU HAVE BUNK - HIGH CARD JACK";
                $this->points = 10;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=12; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop

                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case array_key_exists("48",$chartArray[0]):
                $this->text = "YOU HAVE BUNK - HIGH CARD 10";
                $this->points = 9;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=12; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop

                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case array_key_exists("57",$chartArray[0]):
                $this->text = "YOU HAVE BUNK - HIGH CARD 9";
                $this->points = 8;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=12; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop

                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case array_key_exists("56",$chartArray[0]):
                $this->text = "YOU HAVE BUNK - HIGH CARD 8";
                $this->points = 7;

                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","54","53","52","51","50");

                $i=0;
                $kickerArray = array();
                for ($a=0; $a<=12; $a++) {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) {
                        array_push($kickerArray,$indexArray[$i]);
                        $i++;
                    } else if (!array_key_exists("$indexArray[$i]",$chartArray[0])) {
                        $i++;
                    }
                }

                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case array_key_exists("55",$chartArray[0]):
                $this->text = "YOU HAVE BUNK - HIGH CARD 7";
                $this->points = 6;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=12; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop

                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case array_key_exists("54",$chartArray[0]):
                $this->text = "YOU HAVE BUNK - HIGH CARD 6";
                $this->points = 6;
                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","54","53","52","51","50");
                $i=0;// increment indexArray
                $kickerArray = array(); //will store sorted hand
                for ($a=0; $a<=12; $a++) //loops through 13 values
                {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) //looks for a value in the hand in order
                    {
                        array_push($kickerArray,$indexArray[$i]); //pushes to the kicker array if found
                        $i++; //increments index on search array on sucess
                    }
                    else if (!array_key_exists("$indexArray[$i]",$chartArray[0]))
                    {
                        $i++; //if it fails, increments index for next search
                    }
                } //end for loop

                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];
                return $points;
                break;
            case array_key_exists("53",$chartArray[0]):
                $this->text = "YOU HAVE BUNK - HIGH CARD 5";
                $this->points = 6;

                //create index to sort from
                $indexArray = array("65","75","81","74","48","57","56","55","54","53","52","51","50");

                $i=0;
                $kickerArray = array();
                for ($a=0; $a<=12; $a++) {
                    if (array_key_exists("$indexArray[$i]",$chartArray[0])) {
                        array_push($kickerArray,$indexArray[$i]);
                        $i++;
                    } else if (!array_key_exists("$indexArray[$i]",$chartArray[0])) {
                        $i++;
                    }
                }

                $this->kicker1Points = $kickerArray[1];
                $this->kicker2Points = $kickerArray[2];
                $this->kicker3Points = $kickerArray[3];
                $this->kicker4Points = $kickerArray[4];
                $this->kicker1Text = $kickerArray[1];
                $this->kicker2Text = $kickerArray[2];
                $this->kicker3Text = $kickerArray[3];
                $this->kicker4Text = $kickerArray[4];

                return $points;
                break;
        }
    }

}


