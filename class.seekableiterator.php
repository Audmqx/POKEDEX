<?php

class MySeekableIterator implements SeekableIterator {

	public $input;

    private $position;

    private $pokedex = array(

  '1' =>"1 Bulbizarre\n\nest un Pokémon de départ de type Plante et Poison de la première génération\noffert par le Professeur Chen dans la région de Kanto. Il est le premier Pokémon du\nPokédex National et du Pokédex de Kanto.", 

  '2' =>"2 Herbizarre\n\nest un Pokémon de type Plante et Poison de la première génération.", 

  '3' => "3 Florizarre\n\nest un Pokémon de type Plante et Poison de la première génération.\nOn retrouve Florizarre sur les jaquettes des jeux Pokémon Vert et Pokémon Vert Feuille.",

	'4' => "4 Salamèche\n\nest le Pokémon de départ de type Feu offert par le Professeur Chen\ndans la région de Kanto et par le Professeur Platane dans la région de Kalos.", 

	 '5' => "5 Reptincel\n\nest un Pokémon de type Feu de la première génération.", 

	 '6' => "6 Dracaufeu\n\nest un Pokémon de type Feu et Vol de la première génération.\nOn retrouve Dracaufeu sur les jaquettes des jeux Pokémon Rouge et Pokémon Rouge Feu.", 

	 '7' => "7 Carapuce\n\nest le Pokémon de départ de type Eau offert par le Professeur Chen dans la région de Kanto.", 

	 '8' => "8 Carabaffe\n\nest un Pokémon de type Eau de la première génération.", 

	 '9' => "9 Tortank\n\nest un Pokémon de type Eau de la première génération.\nOn retrouve Tortank sur la jaquette de Pokémon Bleu.", 

	 '10' => "10 Chenipan\n\nest un Pokémon de type Insecte de la première génération.\nIl est le Pokémon qui évolue le plus rapidement, avec Aspicot et Chenipotte.\nC'est d'ailleurs le premier Pokémon qui évolue dans la série animée.",

	 '11' =>"11 Chrysacier\n\nest un Pokémon de type Insecte de la première génération.",

	 '12' =>"12 Papilusion\n\nest un Pokémon Insecte et Vol de la première génération.", 

	 '13' =>"13 Aspicot\n\nest un Pokémon Insecte et Poison de la première génération.\nIl est le Pokémon qui évolue le plus vite avec Chenipan et Chenipotte.", 

	 '14' => "14 Coconfort\n\nest un Pokémon Insecte et Poison de la première génération.", 

	 '15' => "15 Dardargnan\n\nest un Pokémon Insecte et Poison de la première génération.", 

	 '16' => "16 Roucool\n\nest un Pokémon de type Normal et Vol de la première génération.", 

	 '17' => "17 Roucoups\n\nest un Pokémon de type Normal et Vol de la première génération.", 

	 '18' => "18 Roucarnage\n\nest un Pokémon Normal et Vol de la première génération.", 

	 '19' => "19 Rattata\n\nest un petit Pokémon de la première génération et de type Normal.\nIl a contribué à entraîner de nombreux dresseurs débutants dans les hautes herbes de la Route 1.", 

	 '20' => "20 Rattatac\n\nest un Pokémon de type Normal de la première génération.",

	 '21' =>"21 Piafabec\n\nest un Pokémon de type Normal et Vol de la première génération.", 

	 '22' =>"22 Rapasdepic\n\nest un Pokémon de type Normal et Vol de la première génération.", 

	 '23' =>"23 Abo\n\nest un Pokémon de type Poison de la première génération.", 

	 '24' => "24 Arbok\n\nest un Pokémon de type Poison de la première génération.", 

	 '25' => "25 Pikachu\n\nest un Pokémon Souris de type Électrik apparu dès la première génération.\nEn tant que partenaire de Sacha, héros du dessin animé tiré du jeu,\nil est le plus célèbre des Pokémon et la mascotte officielle de la licence.", 

	 '26' => "26 Raichu\n\nest un Pokémon de type Électrik de la première génération.\nC'est l'évolution de Pikachu, lorsque ce dernier est exposé à une Pierre Foudre.", 

	 '27' => "27 Sabelette\n\nest un Pokémon du type Sol de la première génération.", 

	 '28' => "28 Sablaireau\n\nest un Pokémon de type Sol de la première génération.", 

	 '29' => "29 Nidoran♀\n\nest un Pokémon de type Poison de la première génération.\nIl constitue la première espèce (avec les Nidoran♂) à avoir été différenciée par le sexe\n(notion qui n'existait pas en dehors de ces deux Pokémon dans la première génération).\nIroniquement, les deux espèces sont aujourd'hui considérées comme différentes\net asexuées afin de ne pas désordonner la numérotation du Pokédex National.", 

	 '30' => "30 Nidorina\n\nest un Pokémon de type Poison de la première génération.\nIl est la première évolution de Nidoran♀.Étrangement,\ndans la famille évolutive des Nidoran, Nidorina et Nidoqueen\nsont deux Pokémon inaptes à la reproduction.",

	 '31' =>"31 Nidoqueen\n\nest un Pokémon de type Poison et Sol de la première génération\net constitue la seconde et dernière évolution de Nidoran♀,\npar le biais de la Pierre Lune.\nÉtrangement, dans la famille évolutive des Nidoran, Nidorina et Nidoqueen\nsont deux Pokémon inaptes à la reproduction.", 

	 '32' =>"32 Nidoran♂\n\nest un Pokémon de type Poison de la première génération.\nIl constitue la première espèce (avec les Nidoran♀) à avoir été différenciée par le sexe\n(notion qui n'existait pas en dehors de ces deux Pokémon dans la première génération).\nIroniquement, les deux espèces sont aujourd'hui considérées comme différentes\net asexuées afin de ne pas désordonner la numérotation du Pokédex National.", 

	 '33' =>"33 Nidorino\n\nest un Pokémon de type Poison de la première génération et la première évolution de Nidoran♂.", 

	 '34' => "34 Nidoking\n\nest un Pokémon de type Poison et Sol de la première génération\net constitue la seconde et dernière évolution de Nidoran♂, par le biais de la Pierre Lune.\nOn peut noter comme particularité qu'il peut produire des œufs\nalors que ce n'est pas le cas de son équivalent femelle Nidoqueen, ce qui peut laisser perplexe.", 

	 '35' => "35 Mélofée\n\nest un Pokémon de type Fée de la première génération.\nAvant la sixième génération, il était de type Normal.\nDans les premières générations, il était initialement connu pour sa rareté.", 

	 '36' => "36 Mélodelfe\n\nest un Pokémon de type Fée de la première génération.\nAvant la sixième génération, il était de type Normal.", 

	 '37' => "37 Goupix\n\nest un Pokémon de type Feu de la première génération et peut évoluer en Feunard.", 

	 '38' => "38 Feunard\n\nest un Pokémon de type Feu de la première génération.\nC’est un renard possédant neuf queues, directement inspiré de « kyūbi no kitsune »\nsignifiant littéralement renard à neuf queues de la mythologie japonaise.", 

	 '39' => "39 Rondoudou\n\nest un petit Pokémon de type Normal de la première génération.\nDans la sixième génération, ce Pokémon acquiert le second type Fée.", 

	 '40' => "40 Grodoudou\n\nest un Pokémon de type Normal et Fée de la première génération.\nIl a obtenu ce second type dans la sixième génération.",

	 '41' =>"41 Nosferapti\n\nest un Pokémon de type Poison et Vol de la première génération.", 

	 '42' =>"42 Nosferalto\n\nest un Pokémon de type Poison et Vol de la première génération.", 

	 '43' =>"43 Mystherbe\n\nest un Pokémon de type Plante et Poison de la première génération.", 

	 '44' => "44 Ortide\n\nest un Pokémon de type Plante et Poison de la première génération à l'odeur fétide.\nIl est le seul Pokémon à avoir deux évolutions\nqu'il atteint exclusivement avec une pierre évolutive.", 

	 '45' => "45 Rafflesia\n\nl'une des évolutions possibles d'Ortide, par le biais de la Pierre Plante,\nest un Pokémon de type Plante et Poison de la première génération.", 

	 '46' => "46 Paras\n\nle Pokémon parasité, est de type Insecte et Plante et est apparu lors de la première génération.", 

	 '47' => "47 Parasect\n\nest un Pokémon de type Insecte et Plante de la première génération.", 

	 '48' => "48 Mimitoss\n\nest un Pokémon de type Insecte et Poison de la première génération.", 

	 '49' => "49 Aéromite\n\nPokémon de la première génération inspiré d'une mite et évolution de Mimitoss,\nest de type Insecte et Poison.On peut noter que cela l'expose\naux attaques de type Sol, ce qui, pour un Pokémon volant\nn'ayant même pas des pattes assez stables pour pouvoir se poser, est un comble.", 

	 '50' => "50 Taupiqueur\n\nest un Pokémon de type Sol de la première génération",

	 '51' =>"51 Triopikeur\n\nest un Pokémon de type Sol de la première génération.", 

	 '52' =>"52 Miaouss\n\nest un Pokémon de type Normal de la première génération. Il est très connu de par son implication dans le dessin animé.", 

	 '53' =>"53 Persian\n\névolution distinguée de Miaouss, est un Pokémon de la première génération et est de type Normal.", 

	 '54' => "54 Psykokwak\n\nle Pokémon Canard, a notamment été rendu célèbre dans le dessin animé\npar les prestations du Psykokwak d'Ondine.\nPrésent dès la première génération, ce Pokémon est de type Eau.", 

	 '55' => "55 Akwakwak\n\nest un Pokémon de type Eau de la première génération et l'évolution de Psykokwak.", 

	 '56' => "56 Férosinge\n\nest un Pokémon de type Combat de la première génération.\nIl est, comme son nom l'indique, un petit singe très vif et rapidement en colère.", 

	 '57' => "57 Colossinge\n\nest un Pokémon primate de type Combat de la première génération.", 

	 '58' => "58 Caninos\n\nest un Pokémon chien de type Feu de la première génération.", 

	 '59' => "59 Arcanin\n\nest un Pokémon de type Feu de la première génération.\nIl est parfois à tort considéré comme légendaire, du fait\ndu nom de sa famille pouvant prêter à confusion.", 

	 '60' => "60 Ptitard\n\nest un Pokémon de type Eau de la première génération.",

	 '61' =>"61 Têtarte\n\nest un Pokémon de type Eau de la première génération.", 

	 '62' =>"62 Tartard\n\nest un Pokémon de type Eau et Combat de la première génération.", 

	 '63' =>"63 Abra\n\nest un Pokémon de type Psy de la première génération.", 

	 '64' => "64 Kadabra\n\nest un Pokémon Psy de la première génération.", 

	 '65' => "65 Alakazam\n\nest un Pokémon de type Psy de la première génération,\nréputé pour son intelligence exceptionnelle due à ses pouvoirs psychiques.", 

	 '66' => "66 Machoc\n\nest un Pokémon de type Combat de la première génération.", 

	 '67' => "67 Machopeur\n\nest un Pokémon de type Combat de la première génération.", 

	 '68' => "68 Mackogneur\n\nest un Pokémon de type Combat de la première génération dans sa forme évoluée finale.", 

	 '69' => "69 Chétiflor\n\nest un Pokémon de base de type Plante et Poison de la première génération.", 

	 '70' => "70 Boustiflor\n\nest la première évolution de Chétiflor et un Pokémon de type Plante et Poison de la première génération.",

	 '71' =>"71 Empiflor\n\nest la toute dernière évolution de Chétiflor.\nC'est un Pokémon de type Plante et Poison de la première génération.", 

	 '72' =>"72 Tentacool\n\nest un Pokémon de type Eau et Poison de la première génération.", 

	 '73' =>"73 Tentacruel\n\nest un Pokémon de base de type Eau et Poison de la première génération.", 

	 '74' => "74 Racaillou\n\nest un Pokémon de type Roche et Sol de la première génération,\nil est très fréquent de le rencontrer dans les grottes des différentes versions des jeux Pokémon.", 

	 '75' => "75 Gravalanch\n\nest un Pokémon de type Roche et Sol de la première génération.", 

	 '76' => "76 Grolem\n\nest un Pokémon de type Roche et Sol de la première génération.",  

	 '77' => "77 Ponyta\n\nest un Pokémon de base inspiré du cheval et/ou du poney,\nde type Feu et apparu lors de la première génération.", 

	 '78' => "78 Galopa\n\nest un Pokémon de type Feu de la première génération.", 

	 '79' => "79 Ramoloss\n\nest un Pokémon de type Eau et Psy de la première génération.", 

	 '80' => "80 Flagadoss\n\nest un Pokémon de type Eau et Psy de la première génération.",

	 '81' =>"81 Magnéti\n\nest un Pokémon de type Électrik dans la première génération,\npuis Électrik et Acier à partir de la deuxième.", 

	 '82' =>"82 Magnéton\n\nest un Pokémon de type Électrik dans la première génération,\npuis Électrik et Acier à partir de la deuxième.", 

	 '83' =>"83 Canarticho\n\nest un Pokémon de type Normal et Vol de la première génération.",

	 '84' => "84 Doduo\n\nest un Pokémon de type Normal et Vol de la première génération.", 

	 '85' => "85 Dodrio\n\nest un Pokémon de type Normal et Vol de la première génération.", 

	 '86' => "86 Otaria\n\nle Pokémon otarie de la première génération, qui bien que vivant\nsur la banquise n'est pas de type Glace (type acquis uniquement par son évolution Lamantine)\n mais de type Eau pur.", 

	 '87' => "87 Lamantine\n\nest un Pokémon de la première génération, inspiré du lamantin,\nde type Eau et Glace et l'évolution d'Otaria.", 

	 '88' => "88 Tadmorv\n\nest un Pokémon de base de type Poison fait de boues toxiques et apparu dans la première génération.", 

	 '89' => "89 Grotadmorv\n\nest un Pokémon de type Poison de la première génération.\nIl est l'évolution de Tadmorv et tout comme lui, il est fait de poison hautement toxique.", 

	 '90' => "90 Kokiyas\n\nest un Pokémon de base apparu dans la première génération et\nde type Eau pur, contrairement à son évolution Crustabri.",

	 '91' =>"91 Crustabri\n\nest un Pokémon de type Eau et Glace de la première génération.", 

	 '92' =>"92 Fantominus\n\nest un Pokémon de type Spectre et Poison. Il constitue le premier stade\nd'évolution de la seule famille de Pokémon spectre de la première génération.\nC'est aussi un des Pokémon les plus légers connus à ce jour.\nC'est l'occupant bien connu des différentes tours funéraires des jeux,\net notamment de la Tour Perdue, au sud de Bonville.", 

	 '93' =>"93 Spectrum\n\nest un Pokémon de type Spectre et Poison.\nIl est la forme évoluée intermédiaire de la seule famille de Pokémon\nde type Spectre de la première génération. Tout comme sa pré-évolution,\nSpectrum est un des plus légers Pokémon connus à ce jour, ayant le plus grand rapport\ntaille/masse soit 1,60 m pour seulement 0,1 kg.", 

	 '94' => "94 Ectoplasma\n\nest un Pokémon de type Spectre et Poison.\nIl est la forme évoluée finale de la seule famille de Pokémon Spectre de la première génération.", 

	 '95' => "95 Onix\n\nest un Pokémon de la première génération de type Roche et Sol.", 

	 '96' => "96 Soporifik\n\nest un Pokémon de type Psy de la première génération.", 

	 '97' => "97 Hypnomade\n\nest un Pokémon de type Psy de la première génération.", 

	 '98' => "98 Krabby\n\nest un Pokémon de type Eau de la première génération.", 

	 '99' => "99 Krabboss\n\nest un Pokémon de type Eau de la première génération.", 

	 '100' => "100 Voltorbe\n\nest un Pokémon de type Électrik de la première génération.\nIl ressemble à une Poké Ball.",

	 '101' =>"101 Électrode\n\nest l'évolution de Voltorbe, le Pokémon Électrik ayant la forme d'une Pokéball.\nIl s'agit de l'un des Pokémon les plus rapides qui soient,\net il est également réputé pour ses Explosions.", 

	 '102' =>"102 Noeunoeuf\n\nest un Pokémon de type Plante et Psy de la première génération.\nIl peut évoluer en Noadkoko lorsqu'il est mis en contact avec une Pierre Plante.", 

	 '103' =>"103 Noadkoko\n\nest un Pokémon de type Plante et Psy de la première génération.", 

	 '104' => "104 Osselait\n\nest un Pokémon de type Sol de la première génération.\nL'os sur son visage est celui de sa mère morte.", 

	 '105' => "105 Ossatueur\n\nest un Pokémon de type Sol de la première génération.", 

	 '106' => "106 Kicklee\n\nest un Pokémon de type Combat de la première génération.", 

	 '107' => "107 Tygnon\n\nest un Pokémon de type Combat de la première génération.", 

	 '108' => "108 Excelangue\n\nest un Pokémon de type Normal de la première génération.", 

	 '109' => "1090 Smogo\n\nest un Pokémon de type Poison de la première génération.", 

	 '110' => "110 Smogogo\n\nest un Pokémon de type Poison de la première génération.",

	 '111' =>"111 Rhinocorne\n\nest un Pokémon de type Sol et Roche de la première génération.", 

	 '112' =>"112 Rhinoféros\n\nest un Pokémon de type Sol et Roche de la première génération.\nIl est le tout premier Pokémon à avoir été imaginé par\nles créateurs de la franchise Satoshi Tajiri et Ken Sugimori.\nC'est pour cela que l'on retrouve des statues de Rhinoféros\ndans les entrées des arènes de la région de Kanto.", 

	 '113' =>"113 Leveinard\n\nest un Pokémon rare très charitable, il offre son œuf aux blessés.\nIl est apparu dans la première génération et est de type Normal.\nIl est également connu dans le paysage stratégique pour être un Pokémon\ntrès résistant si couplé à l'Évoluroc, devenant ainsi l'emblème d'un style de jeu très défensif, le stall.\nIl est également connu pour donner beaucoup de points d'expérience.", 

	 '114' => "114 Saquedeneu\n\nest un Pokémon de type Plante de la première génération.", 

	 '115' => "115 Kangourex\n\nest un Pokémon de base de type Normal de la première génération.", 

	 '116' => "116 Hypotrempe\n\nest un Pokémon de type Eau de la première génération.", 

	 '117' => "117 Hypocéan\n\nest un Pokémon de type Eau de la première génération.", 

	 '118' => "118 Poissirène\n\nest un Pokémon de type Eau de la première génération.", 

	 '119' => "119 Poissoroy\n\nest un Pokémon de type Eau de la première génération. Il est l'évolution de Poissirène.", 

	 '120' => "120 Stari\n\nest un Pokémon de type Eau de la première génération qui évolue en Staross.\nIl est l'un des Pokémon préférés d'Ondine.",

	 '121' =>"121 Staross\n\nest un Pokémon de types Eau et Psy de la première génération et l'évolution de Stari.", 

	 '122' =>"122 M. Mime\n\nest un Pokémon de type Psy et Fée de la première génération.\nAvant la sixième génération, ce Pokémon était uniquement de type Psy.", 

	 '123' =>"123 Insécateur\n\nest un Pokémon de la première génération, qui dispose d'une évolution\ndepuis la deuxième génération. Il est de double type Insecte et Vol.", 

	 '124' => "124 Lippoutou\n\nest un Pokémon de type Glace et Psy de la première génération.", 

	 '125' => "125 Élektek\n\nest un Pokémon de type Électrik de la première génération.", 

	 '126' => "126 Magmar\n\nest un Pokémon de type Feu de la première génération.", 

	 '127' => "127 Scarabrute\n\nest un Pokémon de type Insecte de la première génération.", 

	 '128' => "128 Tauros\n\nest un Pokémon de type Normal de la première génération.", 

	 '129' => "129 Magicarpe\n\nest un Pokémon de type Eau de la première génération,\nil était connu de tous comme étant le plus faible du jeu jusqu'à\nce qu'il soit détrôné par Cosmog et Cosmovum.\nSon attaque Trempette est tout aussi célèbre pour son inutilité absolue.", 

	 '130' => "130 Léviator\n\nest un Pokémon de type Eau et Vol de la première génération et est l'évolution de Magicarpe.",

	 '131' =>"131 Lokhlass\n\nest un Pokémon de type Eau et Glace de la première génération.\nC'est une espèce ancienne qui a été menacée d'extinction.", 

	 '132' =>"132 Métamorph\n\nest un Pokémon de type Normal asexué de la première génération.\nIl ne peut que copier l'apparence et les capacités du Pokémon adverse\ngrâce à sa seule attaque : Morphing.\nDepuis la deuxième génération, les Dresseurs se servent surtout\nde lui comme Pokémon reproducteur à la pension.\nEn effet, presque tous les Pokémon asexués peuvent se\nreproduire avec Métamorph, ce qui en fait un Pokémon pratiquement\nindispensable pour la collection d'un Dresseur.", 

	 '133' =>"133 Évoli\n\nest un Pokémon de type Normal de la première génération,\nqui a la faculté d'évoluer différemment selon les circonstances.\nIl est d'ailleurs le Pokémon avec le plus d'évolutions possibles : huit au total.", 

	 '134' => "134 Aquali\n\nest un Pokémon de type Eau de la première génération et l'une des évolutions possibles d'Évoli.", 

	 '135' => "135 Voltali\n\nest un Pokémon de type Électrik de la première génération et l'une des évolutions possibles d'Évoli.", 

	 '136' => "136 Pyroli\n\nest un Pokémon de type Feu de la première génération et l'une des évolutions possibles d'Évoli.", 

	 '137' => "137 Porygon\n\n le Pokémon virtuel qui peut voyager à l'intérieur des réseaux informatiques,\nest un Pokémon de base de type Normal apparu dans la première génération.", 

	 '138' => "138 Amonita\n\nest un Pokémon de type Roche et Eau apparu lors de la première génération.", 

	 '139' => "139 Amonistar\n\nest un Pokémon de type Roche et Eau de la première génération.", 

	 '140' => "140 Kabuto\n\nest l'un des Pokémon préhistoriques qui ne sont supposément\nplus censés exister autrement qu'à l'état de fossiles,\nmais il est néanmoins possible de le faire\nrevivre à partir d'un Fossile Dôme, que l'on peut\ntrouver depuis la première génération. Il est de type Roche et Eau.",

	 '141' =>"141 Kabutops\n\nest l'un des Pokémon préhistoriques qui ne sont supposément\nplus censés exister autrement qu'à l'état de fossiles.\nApparu dans la première génération, il est de type Roche et Eau.", 

	 '142' =>"142 Ptéra\n\nfait partie des Pokémon préhistoriques qui n'existent plus\nqu'à l'état de fossiles. Il est néanmoins possible de le faire\nrevivre à partir d'un Vieil Ambre contenant son ADN fossilisé,\nque l'on peut trouver depuis la première génération.", 

	 '143' =>"143 Ronflex\n\nle Pokémon pionceur, est un Pokémon extrêmement lourd de type Normal\nréputé pour ne faire que dormir et manger.", 

	 '144' => "144 Artikodin\n\nl'oiseau légendaire de glace, est l'un des trois Pokémon composant\nle trio légendaire de Kanto et de la première génération. Il est de type Glace et Vol.", 

	 '145' => "145 Électhor\n\nl'oiseau légendaire de la foudre, est l'un des trois Pokémon composant\nle trio légendaire de Kanto et de la première génération. Il est de type Électrik et Vol.", 

	 '146' => "146 Sulfura\n\nl'oiseau légendaire de feu, est l'un des trois Pokémon composant\nle trio des Oiseaux légendaires de Kanto. Il est de type Feu et Vol.", 

	 '147' => "147 Minidraco\n\nest un Pokémon de type Dragon de la première génération.\nIl constitue le premier stade d'évolution de la seule famille\nde Pokémon Dragon de la première génération.", 

	 '148' => "148 Draco\n\nest un Pokémon de type Dragon de la première génération.\nIl est la forme évoluée intermédiaire de la seule famille de\nPokémon de type Dragon de la première génération.", 

	 '149' => "149 Dracolosse\n\nest un Pokémon de type Dragon et Vol de la première génération.\nIl est la forme évoluée finale de la seule famille de Pokémon Dragon de la première génération.", 

	 '150' => "150 Mewtwo\n\nest un Pokémon légendaire de type Psy de la première génération.\nC'est également un Pokémon créé par l'homme à partir de l'ADN de Mew.",

	 '151' =>"151 Mew\n\nest un Pokémon fabuleux de type Psy apparu dans la première génération.\nPeu de choses sont connues à son propos. Il est dit qu'autrefois,\nles Mew étaient nombreux, mais tous auraient disparu sauf un.\nCe Pokémon mythique peut apprendre la plupart des capacités,\nc'est pour cela que certains pensent qu'il est l'ancêtre de tous les Pokémon.\nPar ailleurs, Mew est connu pour avoir été cloné afin de créer Mewtwo."
);



    //get set magiques

    function __get($name)
    {
        return $this->$name;
    }

    function __set($name, $value)
    {
        $this->$name = $value;
    }


    //Méthode pour naviguer dans le POKEDEX

    public function action() {
    	echo "\n";
    	echo "1 : Afficher la liste des pokémons.\n";
    	echo "2 : Pokémon aléatoire.\n";
    	echo "3 : Rechercher un pokémon par le numéro.\n";
		echo "\n";
		do {
			$this->input = readline("Quelle action souhaites-tu effectuer ? ");
		} while (!is_numeric($this->input) xor $this->input !== "1" and $this->input !== "2" and $this->input !== "3" );
    	
    }

    //Méthode pour naviguer après le premier choix

    public function actionDeux() {
    	echo "\n";
    	echo "1 : Afficher la liste des pokémons.\n";
    	echo "2 : Pokémon aléatoire.\n";
    	echo "3 : Rechercher un pokémon par le numéro.\n";
    	echo "4 : Pokémon suivant.\n";
    	echo "5 : Pokémon précedent.\n";
		echo "\n";
		do {
			$this->input = readline("Quelle action souhaites-tu effectuer ? ");
		} while (!is_numeric($this->input) xor $this->input !== "1" and $this->input !== "2" and $this->input !== "3" and $this->input !== "4" and $this->input !== "5");
    	
    }





    public function choixPokemon(){
    	do {
			$this->input = readline("Quel numéro ? ");
		} while ($this->input > "151" or $this->input < "1" );
    }

    /* Méthode requis pour l'interface SeekableIterator */

    public function seek($position) {
      if (!isset($this->pokedex[$position])) {
          throw new OutOfBoundsException("position invalide ($position)");
      }

      $this->position = $position;
    }

    /* Méthodes requises par l'interface Iterator */
    
    public function rewind() {
        $this->position = 0;
    }

    public function current() {
        return $this->pokedex[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }


    public function previous() {
    --$this->position;
    }

    public function random() {
    	$this->position = rand(1,151);
    	return $this->pokedex[$this->position];
    }

    public function valid() {
        return isset($this->pokedex[$this->position]);
    }



}




