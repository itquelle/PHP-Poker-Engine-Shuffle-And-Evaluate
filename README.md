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
..
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
