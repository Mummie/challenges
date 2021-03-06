<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             *
              Lets bring in the deck code from the past example. (normal)
              create a function that will create a deck of cards, randomize it and then return the deck
             */
             
            function shuffle_assoc(&$array) {
                $keys = array_keys($array);
                shuffle($keys);
        
                foreach($keys as $key) {
                    $new[$key] = $array[$key];
                }
                $array = $new;
                return true;
            }
              function createDeck() {
                $suits = array ("clubs", "diamonds", "hearts", "spades");
                $faces = array (
                    "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                    "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13
                );
    
                $deck = array();
    
                foreach($faces as $key=>$face){
                    foreach($suits as $suit){
                        $newKey = "$key of $suit";
                        $deck[$newKey] = $face;       
                    }
                }
                
                shuffle_assoc($deck);
            
                return $deck;
              }
               $deck = createDeck();
            /*
                We will now create a function to deal these cards to each user
                modify this function so that it returns the number of cards specified to the user
                also, it must modify the deck so that those cards are no longer available to be ditributed
            */
            
            //deals cards by creating a new deck and returning the slice of that deck specified by number of cards
           function dealCards($deck, $number_of_cards ) {
                 $deck = createDeck();
                return array_slice($deck,0,$number_of_cards);
            }
            
            $player = dealCards($deck,10); // player should now have 10 random cards in his hand
            var_dump($player);
            
            $player2 = dealCards($deck, 10);
            var_dump($player2);
                
        ?>

    </p>

    </body>
</html>
