<?php

function afficherliste() {

 $listePokedex = array(

	 '1' =>"Bulbizarre",

	 '2' =>"Herbizarre",

	 '3' => "Florizarre", 

	 '4' => "Salamèche", 

	 '5' => "Reptincel", 

	 '6' => "Dracaufeu", 

	 '7' => "Carapuce", 

	 '8' => "Carabaffe", 

	 '9' => "Tortank", 

	 '10' => "Chenipan",

	 '11' =>"Chrysacier",

	 '12' =>"Papilusion", 

	 '13' =>"Aspicot", 

	 '14' => "Coconfort", 

	 '15' => "Dardargnan", 

	 '16' => "Roucool", 

	 '17' => "Roucoups", 

	 '18' => "Roucarnage", 

	 '19' => "Rattata", 

	 '20' => "Rattatac",

	 '21' =>"Piafabec", 

	 '22' =>"Rapasdepic", 

	 '23' =>"Abo", 

	 '24' => "Arbok", 

	 '25' => "Pikachu", 

	 '26' => "Raichu", 

	 '27' => "Sabelette", 

	 '28' => "Sablaireau", 

	 '29' => "Nidoran♀", 

	 '30' => "Nidorina",

	 '31' =>"Nidoqueen", 

	 '32' =>"Nidoran♂", 

	 '33' =>"Nidorino", 

	 '34' => "Nidoking", 

	 '35' => "Mélofée", 

	 '36' => "Mélodelfe", 

	 '37' => "Goupix", 

	 '38' => "Feunard", 

	 '39' => "Rondoudou", 

	 '40' => "Grodoudou",

	 '41' =>"Nosferapti", 

	 '42' =>"Nosferalto", 

	 '43' =>"Mystherbe", 

	 '44' => "Ortide", 

	 '45' => "Rafflesia", 

	 '46' => "Paras", 

	 '47' => "Parasect", 

	 '48' => "Mimitoss", 

	 '49' => "Aéromite", 

	 '50' => "Taupiqueur",

	 '51' =>"Triopikeur", 

	 '52' =>"Miaouss", 

	 '53' =>"Persian", 

	 '54' => "Psykokwak", 

	 '55' => "Akwakwak", 

	 '56' => "Férosinge", 

	 '57' => "Colossinge", 

	 '58' => "Caninos", 

	 '59' => "Arcanin", 

	 '60' => "Ptitard",

	 '61' =>"Têtarte", 

	 '62' =>"Tartard", 

	 '63' =>"Abra", 

	 '64' => "Kadabra", 

	 '65' => "Alakazam", 

	 '66' => "Machoc", 

	 '67' => "Machopeur", 

	 '68' => "Mackogneur", 

	 '69' => "Chétiflor", 

	 '70' => "Boustiflor",

	 '71' =>"Empiflor", 

	 '72' =>"Tentacool", 

	 '73' =>"Tentacruel", 

	 '74' => "Racaillou", 

	 '75' => "Gravalanch", 

	 '76' => "Grolem", 

	 '77' => "Ponyta", 

	 '78' => "Galopa", 

	 '79' => "Ramoloss", 

	 '80' => "Flagadoss",

	 '81' =>"Magnéti", 

	 '82' =>"Magnéton", 

	 '83' =>"Canarticho", 

	 '84' => "Doduo", 

	 '85' => "Dodrio", 

	 '86' => "Otaria", 

	 '87' => "Lamantine", 

	 '88' => "Tadmorv", 

	 '89' => "Grotadmorv", 

	 '90' => "Kokiyas",

	 '91' =>"Crustabri", 

	 '92' =>"Fantominus", 

	 '93' =>"Spectrum", 

	 '94' => "Ectoplasma", 

	 '95' => "Onix", 

	 '96' => "Soporifik", 

	 '97' => "Hypnomade", 

	 '98' => "Krabby", 

	 '99' => "Krabboss", 

	 '100' => "Voltorbe",

	 '101' =>"Électrode", 

	 '102' =>"Noeunoeuf", 

	 '103' =>"Noadkoko", 

	 '104' => "Osselait", 

	 '105' => "Ossatueur", 

	 '106' => "Kicklee", 

	 '107' => "Tygnon", 

	 '108' => "Excelangue", 

	 '109' => "Smogo", 

	 '110' => "Smogogo",

	 '111' =>"Rhinocorne", 

	 '112' =>"Rhinoféros", 

	 '113' =>"Leveinard", 

	 '114' => "Saquedeneu", 

	 '115' => "Kangourex", 

	 '116' => "Hypotrempe", 

	 '117' => "Hypocéan", 

	 '118' => "Poissirène", 

	 '119' => "Poissoroy", 

	 '120' => "Stari",

	 '121' =>"Staross", 

	 '122' =>"M. Mime", 

	 '123' =>"Insécateur", 

	 '124' => "Lippoutou", 

	 '125' => "Élektek", 

	 '126' => "Magmar", 

	 '127' => "Scarabrute", 

	 '128' => "Tauros", 

	 '129' => "Magicarpe", 

	 '130' => "Léviator",

	 '131' =>"Lokhlass", 

	 '132' =>"Métamorph", 

	 '133' =>"Évoli", 

	 '134' => "Aquali", 

	 '135' => "Voltali", 

	 '136' => "Pyroli", 

	 '137' => "Porygon", 

	 '138' => "Amonita", 

	 '139' => "Amonistar", 

	 '140' => "Kabuto",

	 '141' =>"Kabutops", 

	 '142' =>"Ptéra", 

	 '143' =>"Ronflex", 

	 '144' => "Artikodin", 

	 '145' => "Électhor", 

	 '146' => "Sulfura", 

	 '147' => "Minidraco", 

	 '148' => "Draco", 

	 '149' => "Dracolosse", 

	 '150' => "Mewtwo",

	 '151' =>"Mew");

	 print_r($listePokedex);

	}