<?php

require_once "class.seekableiterator.php";
require_once "pokemonAscii.class.php";
require_once "listePokemon.class.php";

$it = new MySeekableIterator;
$Ascii = new Ascii;

echo "\n \n";
echo "            `...`             
         `+sssso+os/.         
        .yo-`    :`.s+        
        d+s: ----.  `y:       
        mhdy/.``-:::s+        
      .+hohdyy///.``-s.       
     .oN+/-/:+/hhyydo:`       
        /+o::/so+ss:          
        :/./yohdyoh+:`        
      `/mh//o+omddmy+oo.      
     `+.NhdmNMMMNddds-/y-.    
    `+- -mhhmMMMMdhdmd: -+.   
    -hs::NhhhMMMMNdhmd/`:/.   
     +y/hNhhhMMNNMooymdo.     
    -d:.dhsssh+yNmmNdN:       
    :msdyoNhhdmmdhdMd/`       
    .shssyNhhddydhhdo         
      -:`/dysyh+myyhs         
        `Nyssd`-hdsss-        
        `dhhyh  sdhhm+        
         sdsm`  .dmmy`        
        smhddm  sddsds-       
        yyosy:  .oymsoy`      
         ```       ```        
";
echo "\n \n";

echo "Bienvenue dans le POKEDEX jeune dresseur !\nécris stop pour arreter.";

echo "\n";


do {

		if (isset($it->input) ) {  
			$it->actionDeux();

			$it->action();
			echo "\n";

		}
			echo "\n";
		} else {  


switch ($it->input) {

	case "1":
		
		afficherListe();
		$it->input = 1;

		break;

	case "2":
		
		$random = rand(1,151);
		echo "\n";
		echo $Ascii->Ascii[$random];
		echo "\n \n"; 
		$it->seek($random);
		echo "pokemon n°: ". $it->current($random), "\n";


		break;
	
	case "3":
		
		$it->choixPokemon();
		echo "\n";
		echo $Ascii->Ascii[$it->input];
		echo "\n \n"; 		
		$it->seek($it->input);
		echo "pokemon n°: " . $it->current(), "\n";

		break;

	case "4":
		
		$it->next();
		$position = $it->current();
		$positionPokemon = $it->key();
		echo "\n";
		echo $Ascii->Ascii[$positionPokemon]; 
		echo "\n";
		echo "\n"."pokemon n°: ".$position;
		echo "\n \n";
		break;

	case "5":
		
		$it->previous();
		$position = $it->current();
		$positionPokemon = $it->key();
		echo "\n";
		echo $Ascii->Ascii[$positionPokemon];
		echo "\n";
		echo "\n"."pokemon n°: ".$position;
		echo "\n \n";
		break;


	case "stop":
	break 2;

}

	
} while ($input = "stop");





/*
echo $Ascii->Ascii[$it->input];
echo "\n \n"; 		
$it->seek($it->input);
echo $it->current(), "\n";
*/
