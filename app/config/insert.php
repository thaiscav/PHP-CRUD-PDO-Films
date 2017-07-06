<?php

$gestion = new connexion();

//INSERTS

//User

        $param = [
                ":a" => 'admin', //ou $nomUser
                ":b" => 'admin@admin.com', 
                ":c" => 'admin',
                ":d" => md5('admin'),
                ":e" => 'images/avatar.png',
        ];     
        $query = "INSERT INTO utilisateurs(nom, courriel, nomUtil, mp, avatar) 
        VALUES (:a, :b, :c, :d, :e)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

//code_categorie

        $param = [":a" => 'Action']; 
        $query = 'INSERT INTO Categories(description) VALUES (:a)';
        $gestion->EXEC_ALTER_QUERY($query, $param);

        $param = [":a" => 'Drame et répertoire']; 
        $query = 'INSERT INTO Categories(description) VALUES (:a)';
        $gestion->EXEC_ALTER_QUERY($query, $param);

        $param = [":a" => 'Comédie']; 
        $query = 'INSERT INTO Categories(description) VALUES (:a)';
        $gestion->EXEC_ALTER_QUERY($query, $param);
       
        $param = [":a" => 'Horreur']; 
        $query = 'INSERT INTO Categories(description) VALUES (:a)';
        $gestion->EXEC_ALTER_QUERY($query, $param);
        
        $param = [":a" => 'Suspense']; 
        $query = 'INSERT INTO Categories(description) VALUES (:a)';
        $gestion->EXEC_ALTER_QUERY($query, $param);

        $param = [":a" => 'Pour la famile']; 
        $query = 'INSERT INTO Categories(description) VALUES (:a)';
        $gestion->EXEC_ALTER_QUERY($query, $param);

        $param = [":a" => 'Science']; 
        $query = 'INSERT INTO Categories(description) VALUES (:a)';
        $gestion->EXEC_ALTER_QUERY($query, $param);

        $param = [":a" => 'Jeuesse']; 
        $query = 'INSERT INTO Categories(description) VALUES (:a)';
        $gestion->EXEC_ALTER_QUERY($query, $param);


//Films

        $param = [
                ":a" => 'Deepwater horizon',
                ":b" => 'BERG PETER', 
                ":c" => 'Mike Williams est électricien sur la plateforme Deepwater Horizon dans le golfe du Mexique. Lorsque la société locataire de la plateforme décide, contre l’avis des techniciens, de la déplacer, ils sont loin de se douter que 5 millions de barils sous leurs pieds sont prêts à exploser. Le courage de Mike et ses collègues suffira-t-il à limiter les dégâts et sauver ce qui peut encore l’être?',
                ":d" => '2',
                ":e" => '180',
                ":f" => '12.95',
                ":g" => 'images/1.jpg',
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "Accountant (the)",
                ":b" => "O'CONNOR GAVIN", 
                ":c" => "Christian Wolff est plus à l’aise avec les chiffres qu’avec les gens. Sous l’anonymat d’un bureau d’experts-comptables, il travaille pour de dangereuses organisations criminelles. Lorsque le département du Trésor américain s’intéresse de trop près à lui, Christian fait diversion en s’occupant d’un client légitime. Mais tandis que Christian épluche les comptes de l’entreprise, les morts s’accumulent.",
                ":d" => "1",
                ":e" => "120",
                ":f" => "12.95",
                ":g" => "images/2.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "Hachi: a dog's tale",
                ":b" => "Hallstrom, lasse", 
                ":c" => "6",
                ":d" => "N/A",
                ":e" => "6",
                ":f" => "6.99",
                ":g" => "images/3.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "Intouchables",
                ":b" => "Nakache, Olivier/ Toledano, Éric", 
                ":c" => "À la suite d'un accident de parapente, Philippe, riche aristocrate, engage comme aide à domicile Driss, un jeune de banlieue tout juste sorti de prison. Bref, la personne la moins adaptée pour l'emploi. Ensemble, ils vont faire cohabiter Vivaldi et Earth Wind and Fire, l'éloquence et la moquerie, les complets et les pantalons de survêtement... Deux univers vont s'enchevêtrer, s'apprivoiser, pour donner naissance à une amitié aussi dingue, drôle et forte qu'inattendue, une relation unique qui fera des étincelles et qui les rendra... Intouchables.",
                ":d" => "2",
                ":e" => "190",
                ":f" => "6.99",
                ":g" => "images/4.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "Longest ride",
                ":b" => "Tillman Jr., George", 
                ":c" => "Lorsque Luke, un ancien champion de rodéo, rencontre Sophia, une universitaire sur le point de décrocher un emploi de rêve à New York, ils entreprennent un périple sentimental aussi extraordinaire qu'incertain. Tandis que leurs aspirations personnelles incompatibles mettent leur relation naissante à l'épreuve, Luke et Sophia rencontrent Ira, un vieil homme dont les souvenirs de son propre mariage pousseront les jeunes amoureux à se remettre en question et à changer leur existence à jamais.",
                ":d" => "2",
                ":e" => "210",
                ":f" => "6.99",
                ":g" => "images/5.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "Whiplash",
                ":b" => "Chazelle, Damien", 
                ":c" => "Andrew, 19 ans, rêve de devenir l'un des meilleurs batteurs de jazz de sa génération. Mais la concurrence est rude au conservatoire de Manhattan où il s'entraîne avec acharnement. Il a pour objectif d'intégrer le fleuron des orchestres dirigé par Terence Fletcher, professeur féroce et intraitable. Lorsque celui-ci le repère enfin, Andrew se lance, sous sa direction, dans la quête de l'excellence.",
                ":d" => "2",
                ":e" => "180",
                ":f" => "6.99",
                ":g" => "images/6.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "9 le film",
                ":b" => "DIVERS", 
                ":c" => "Un homme dont la petite amie vient tout juste de mourir, une jeune femme qui s'est récemment évertuée à convaincre une ancienne connaissance rencontrée lors d'une fête qu'elles ont déjà été des amies très proches et un homme hautain, qui a magasiné des appareils électroniques en insultant au passage le vendeur, assistent tous à la conférence de Marc Gauthier. Celui-ci, prétendu gourou de la communication, propose une nouvelle approche afin d'améliorer les relations entre les êtres humains. Mais, comme s'en rendront compte ces participants, il y aura toujours un décalage important entre la théorie et la pratique. ",
                ":d" => "7",
                ":e" => "180",
                ":f" => "17.99",
                ":g" => "images/7.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "Jason bourne",
                ":b" => "GREENGRASS PAUL", 
                ":c" => "La traque de Jason Bourne par les services secrets américains se poursuit. Des Îles Canaries à Londres en passant par Las Vegas...",
                ":d" => "1",
                ":e" => "160",
                ":f" => "12.95",
                ":g" => "images/8.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "Petit prince (le)",
                ":b" => "OSBORNE MARK", 
                ":c" => "N/A",
                ":d" => "8",
                ":e" => "120",
                ":f" => "12.95",
                ":g" => "images/9.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "Downfall (la chute)",
                ":b" => "Hirschbiegel, Oliver", 
                ":c" => "Qualifié de « dramatique, fidèle et poignant » par le San Francisco Chronicle et en nomination pour l'Oscar du Meilleur film étranger, LA CHUTE vous fait pénétrer dans le bunker d'Hitler pendant les derniers jours terribles et déchirants du IIIe Reich. À travers les yeux de Traudi Yunge, la célèbre secrétaire de Hitler, nous assistons à l'écroulement de l'optimisme devant le constat indéniable que la défaite de l'Allemagne est devenue inévitable. Tandis que l'armée russe encercle Berlin, les salles faiblement éclairées du refuge souterrain deviennent un lieu de mise à mort pour le führer et ses plus proches conseillers.",
                ":d" => "2",
                ":e" => "180",
                ":f" => "6.99",
                ":g" => "images/10.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "12 years a slave",
                ":b" => "Mcqueen, Steve", 
                ":c" => "Les États-Unis, quelques années avant la guerre de Sécession. Solomon Northup, jeune homme noir originaire de l'État de New York, est enlevé et vendu comme esclave. Face à la cruauté d'un propriétaire de plantation de coton, Solomon se bat pour rester en vie et garder sa dignité. Douze ans plus tard, il va croiser un abolitionniste canadien et cette rencontre va changer sa vie... Basé sur une histoire vraie.",
                ":d" => "2",
                ":e" => "160",
                ":f" => "6.99",
                ":g" => "images/11.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);
        
        $param = [
                ":a" => "Suicide squad",
                ":b" => "AYER DAVID", 
                ":c" => "C'est tellement jouissif d'être un salopard! Face à une menace aussi énigmatique qu'invincible, l'agent secret Amanda Waller réunit une armada de crapules de la pire espèce. Armés jusqu'aux dents par le gouvernement, ces super-méchants entreprennent alors une mission-suicide. Jusqu'au moment où ils comprennent qu'ils ont été sacrifiés. Accepteront-ils leur sort ou se rebelleront-ils?",
                ":d" => "1",
                ":e" => "180",
                ":f" => "12.95",
                ":g" => "images/12.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "Eat pray love (mange prie aime)",
                ":b" => "Murphy, Ryan", 
                ":c" => "À la croisée des chemins après un divorce, Liz Gilbert décide de prendre une année sabbatique loin de son travail et, pour une très rare fois, s'éloigne de sa zone de confort, risquant tout ce qu'elle a pour changer de vie. Lors de ses merveilleux et exotiques voyages, Liz Gilbert découvre le plaisir tout simple de bien manger en Italie, le pouvoir de la prière en Inde et, de façon inattendue, la paix intérieure ainsi que l'amour à Bali.",
                ":d" => "2",
                ":e" => "160",
                ":f" => "6.99",
                ":g" => "images/13.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "Piano,the(1993)",
                ":b" => "Campion, Jane", 
                ":c" => "Au siècle dernier en Nouvelle-Zélande, Ada, mère d'une fillette de neuf ans, s'apprète à suivre son nouveau mari au fin fond du bush. Il accepte de transporter tous ses meubles à l'exception d'un piano qui échoue chez un voisin illettré. Ne pouvant supporter cette perte, Ada accepte le marché que lui propose ce dernier. Regagner son piano touche par touche en se soumettant à ses fantaisies.",
                ":d" => "2",
                ":e" => "180",
                ":f" => "6.99",
                ":g" => "images/14.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);
        
         $param = [
                ":a" => "Secret life of pets (the)",
                ":b" => "CHENEY YARROW RENAUD CHRIS", 
                ":c" => "Que font vos animaux de compagnie quand vous n'êtes pas à la maison? Lorsque leurs maîtres quittent le domicile pour la journée, des animaux de compagnie papotent avec leurs amis, satisfont leurs fringales et organisent des fêtes. Mais quand un terrier chouchouté et son nouveau « coloc » turbulent se perdent dans la jungle urbaine de New York, ils doivent mettre leurs différends de côté afin de survivre à leur dangereux périple pour rentrer à la maison.",
                ":d" => "3",
                ":e" => "90",
                ":f" => "12.95",
                ":g" => "images/15.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "Jaws (3-movie collection)",
                ":b" => "Szwarc, Jeannot/Alves, Joe/Sargent, Joseph", 
                ":c" => "Les dents de la mer : Deuxième partie. \n
                        Les dents de la mer 3. \n
                        Les dents de la mer : La revanche.",
                ":d" => "5",
                ":e" => "90",
                ":f" => "15.99",
                ":g" => "images/16.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

         $param = [
                ":a" => "Get out",
                ":b" => "PEELE JORDAN", 
                ":c" => "Couple mixte, Chris et sa petite amie Rose filent le parfait amour. Le moment est donc venu de rencontrer la belle famille, Missy et Dean lors d'un week-end sur leur domaine dans le nord de l'État. Chris commence par penser que l'atmosphère tendue est liée à leur différence de couleur de peau, mais très vite une série d'incidents de plus en plus inquiétants lui permet de découvrir l'inimaginable.",
                ":d" => "4",
                ":e" => "180",
                ":f" => "22.99",
                ":g" => "images/17.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

         $param = [
                ":a" => "Godfather (the) (3 movie collection)",
                ":b" => "Coppola, Francis Ford", 
                ":c" => "N/A",
                ":d" => "2",
                ":e" => "120",
                ":f" => "12.95",
                ":g" => "images/18.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

         $param = [
                ":a" => "Revenant (the)",
                ":b" => "Inarritu, Alejandro Gonzalez", 
                ":c" => "N/A",
                ":d" => "2",
                ":e" => "140",
                ":f" => "12.95",
                ":g" => "images/19.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "Impossible,the(2012)",
                ":b" => "Bayona, Juan Antonio", 
                ":c" => "En vacances en Thaïlande pour célébrer la fête de Noël en famille, Maria, Henry et leurs trois enfants profitent pleinement du soleil et de la plage lorsque, soudainement, un événement tragique vient bouleverser leur vie. À leur insu, un gigantesque tremblement de terre à l'autre bout de l'océan déclenche un énorme tsunami. L'un des désastres naturels les plus dévastateurs de la planète se dirige vers eux... Voici leur émouvante histoire.",
                ":d" => "2",
                ":e" => "120",
                ":f" => "6.99",
                ":g" => "images/20.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

        $param = [
                ":a" => "Gravity",
                ":b" => "Cuaron, Alfonso", 
                ":c" => "Pour sa première expédition à bord d'une navette spatiale, le docteur Ryan Stone accompagne l'astronaute chevronné Matt Kowalsky. Mais cette banale sortie dans l'espace se transforme en catastrophe. Lorsque la navette est pulvérisée, Stone et Kowalsky se retrouvent totalement seuls. Peu à peu, ils cèdent à la panique; à chaque respiration, leurs réserves d'oxygène diminuent. Mais c'est peut-être en s'enfonçant plus loin encore dans l'espace qu'ils trouveront le moyen de rentrer sur Terre... l'espace.",
                ":d" => "5",
                ":e" => "120",
                ":f" => "6.99",
                ":g" => "images/21.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);

          $param = [
                ":a" => "Da vinci code (the)",
                ":b" => "Howard, Ron", 
                ":c" => "Accompagnez l'éminent spécialiste de l'étude des symboles Robert Langdon et la cryptographe Sophie Neveu dans leur quête palpitante pour résoudre un meurtre étrange qui les mènera en France, en Angleterre et dans les coulisses d'une mystérieuse organisation séculaire où ils découvriront un secret dissimulé depuis l'époque du Christ.",
                ":d" => "5",
                ":e" => "120",
                ":f" => "6.99",
                ":g" => "images/22.jpg",
                ":h" => 'https://youtu.be/2lECxLMIuLk'
        ];
        $query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
        VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
        $gestion->EXEC_ALTER_QUERY($query ,$param);
   
?>