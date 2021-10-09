# PHP-Poker Engine
We create a better output for the PHP-Poker Class from Jayme Fishman, to start writing a Poker Script.
https://www.phpclasses.org/package/3149-PHP-Shuffle-and-evaluate-a-Poker-deck-of-cards.html

# Example
```php
require "classes/poker.php";

$poker = new Poker();
$poker->setLanguage("en");
$poker->setPlayers(3);
$poker->create();
$poker->getWinners();

echo $poker->getJSON();
```

# JSON-Output
```json
{"flop":["2H","JH","AH"],"turn":"10H","river":"5S","full_flop":["2H","JH","AH","10H","5S"],"player_0":{"cards":["2S","3H"],"hand":"2S3H2HJHAH10H5S","points":0.50131313,"text":null},"player_1":{"cards":["JC","QH"],"hand":"JCQH2HJHAH10H5S","points":11.47131313,"text":"YOU HAVE BUNK - HIGH CARD QUEEN"},"player_2":{"cards":["7C","6D"],"hand":"7C6D2HJHAH10H5S","points":6.42131313,"text":"YOU HAVE BUNK - HIGH CARD 7"},"winner_list":[1],"winner_list_by_percent":{"1":"11.47131313","2":"6.42131313","0":"0.50131313"}}
```

# Language
You find all languages strings in language folder
```bat
cd /language/
```

Set language
```php
$poker->setLanguage("de");
```
