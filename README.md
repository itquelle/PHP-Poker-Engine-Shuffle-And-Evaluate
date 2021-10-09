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
```yaml
{
    "flop": [
        "3C",
        "JS",
        "QC"
    ],
    "turn": "5H",
    "river": "JD",
    "full_flop": [
        "3C",
        "JS",
        "QC",
        "5H",
        "JD"
    ],
    "player_0": {
        "cards": [
            "AH",
            "10D"
        ],
        "hand": "AH10D3CJSQC5HJD",
        "points": 13.46131313,
        "text": "YOU HAVE BUNK - HIGH CARD ACE"
    },
    "player_1": {
        "cards": [
            "QD",
            "6H"
        ],
        "hand": "QD6H3CJSQC5HJD",
        "points": 11.42131313,
        "text": "YOU HAVE BUNK - HIGH CARD QUEEN"
    },
    "player_2": {
        "cards": [
            "5C",
            "3D"
        ],
        "hand": "5C3D3CJSQC5HJD",
        "points": 6.3913131299999995,
        "text": "YOU HAVE BUNK - HIGH CARD 5"
    },
    "winner_list": [
        0: 0
    ],
    "winner_list_by_percent": [
        0: "13.46131313",
        1: "11.42131313",
        2: "6.39131313"
    ]
}
```

# Check winner by id's
You have "winner_list_by_percent", remove all eliminated players, to check the ending winner

# Language
You find all languages strings in language folder
```bat
cd /language/
```

Set language
```php
$poker->setLanguage("de");
```
