
<?php


class DataBase {

  public static function connect_db(){

    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=actu_animes;charset=utf8", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // stmt recupere tous les stands
      // echo "Connected  a jojoworld successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    return  $conn ;

  }
  
  public static function affichageStand(){

    try {
      $connexion= DataBase::connect_db();
      // stmt recupere tous les stands
      $stmt = $connexion->prepare("SELECT * FROM `stand` WHERE 1");
      $stmt->execute();
    
       // set the resulting array to associative
       $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $allJojoStands = array();
       foreach($stmt->fetchAll() as $v) { // $stmt->fetchAll() tableau associatif 
        
        $nouveauStand= new Stand($v['modal_id'], // création de l'objet à partir du tableau associatif créer à partir de la base de donnée.
                                $v['name'],
                                $v['manieur'],
                                $v['image_miniature'],
                                $v['image_modal'],
                                $v['description'],
                                $v['premiere_apparition'],
                                $v['categorie']);
        $allJojoStands[] = $nouveauStand; // rajoute un nouvel objet dans le tableau 
       }
      // echo "Connected  a jojoworld successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

    return  $allJojoStands;
  }



  public static function createStand($data){

    $connexion= DataBase::connect_db();

    $randomString='gjkghqkgdqsdmqdj@_mooqhjdiquezgf46945314857';

    $sql="INSERT INTO all_stands(modal_id,name,manieur,image_miniature,image_modal,description,premiere_apparition,categorie  ) values (?,?,?,?,?,?,?,?)";
    $stmt=$connexion->prepare($sql);
    $stmt->execute(array( str_shuffle($randomString),$data['name'], $data['manieur'], 'assets/img/portfolio/'.$data['img_miniature'], 'assets/img/portfolio/'.$data['img_modal'],$data['description'] , $data['premiere_apparition'],$data['categorie']));

    
    try {

     echo "SUCCES de l'AJOU DANS  la base de donnée";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    

  }


}

$allJojoStands = DataBase::affichageStand();


class Stand {
    private $modal_id;
    private $name;
    private $manieur;
    private $image_miniature;
    private $image_modal;
    private $description;
    private $premiere_apparition;
    private $categorie;
  
    function __construct( string $idModale, string $name, string $manieur,  $image_miniature, string $image_modal, string $description, string $premiere_apparition, string $categorie){
      $this->name = $name;
      $this->modal_id = $idModale;
      $this->manieur = $manieur;
      $this->image_miniature = $image_miniature;
      $this->image_modal = $image_modal;
      $this->description = $description;
      $this->chapitre = $premiere_apparition;
      $this->categorie = $categorie;
    }
  
    public function getName()
    {
      return $this->name;
    }
        
    public function getManieur()
    {
      return $this->manieur;
    }
      
    public function getImage_miniature()
    {
      return $this->image_miniature;
    }
  
    public function getImage_modal()
    {
      return $this->image_modal;
    }
  
    public function getDescription()
    {
        return $this->description;
    }
  
    public function getPremiere_apparition()
    {
        return $this->premiere_apparition;
    }
  
    public function getCategorie()
    {
        return $this->categorie;
    }

    public function getModal_id()
    {
        return $this->modal_id;
    }
  }


$hermit_purple= new Stand("portfolioModal1",
                            "Hermit Purple",
                            "Joseph Joestar",
                             "assets/img/portfolio/hermit_purple.jpg", 
                             "assets/img/portfolio/Joseph_Joestar_(JoJo)_Purple_Hermit_on_camera.gif", 
                             "<p>
                             Hermit Purple est un stand qui se contrôle à mi-distance, bien qu'il soit plus efficace en l'utilisant de loin.
                             <ul>

                            <li> <b> Images psychiques : </b>  Joseph peut imprimer des images venant d'endroits éloignés (pour espionner un adversaire ou repérer une personne en particulier), pour ce faire, il doit détruire un appareil photo ou investir une télévision avec Hermit Purple.
                             </li> <li> <b> Lecture psychique : </b> La technique précédente sert également à lire les pensées de la personne que Joseph aura désigné, afin de lui soutirer des informations importantes.
                                 
                            <li> <b> Extension : </b> Joseph peut étendre Hermit Purple comme une corde, pour aggriper des objets ou ligoter des personnes.</li>
                            <li><b> Combinaison avec l'Onde : </b>  Et tant que manieur d'Onde, Joseph peut se servir d'Hermit Purple pour faire circuler l'Onde, comme une extension de son corps.</li> 
                            <li> <b> Carte : </b>  Il peut dessiner un plan d'un endroit précis en utilisant n'importe quelle matière poudreuse.</li></p>",
                        "Stardust Crusaders",
                        "Jojo Stand"
                        );

$star_platinium= new Stand("portfolioModal2",
                        "Star Platinium",
                        "Jotaro Kujoh",
                         "assets/img/portfolio/Star_platinium.jpg", 
                         "assets/img/portfolio/star_platinum.gif", 
                         "<p>Star Platinum est l'un des stands les plus forts en combat rapproché, sa portée n'excède donc pas les deux mètres.
                         <ul><li><b>Force :</b> Star Platinum possède une force immense, capable d'arrêter d'un seul coup de poing un semi-remorque fonçant sur une Jeep transportant 4 hommes et une fille. Il peut également détruire des mètres de diamant artificiel en quelques secondes.</li>
                         <li><b>Protection de son hôte :</b> Star Platinum peut agir librement si c'est pour protéger Jotaro, si ce dernier est pris par surprise ou est entravé : lors de l'arrêt du temps par Dio, de l'attaque surprise de Lovers, ou en faisant repartir son cœur alors qu'il est proche de la mort.</li>
                         <li><b>Star Finger :</b> Star Platinum allonge son doigt sur un ou deux mètres, lui permettant de surprendre son adversaire avec une attaque dépassant la portée habituelle de Star Platinum. Cette attaque est moyennement puissante. Elle pourrait faire référence au Zoom Punch des manieurs d'Onde.</li>
                         <li><b>Précision : </b>Ce stand possède une excellente précision, dont il est dit qu'elle est encore plus efficace qu'une machine. Cela lui permet d'attraper une balle en plein vol ou des objets microscopiques.</li>
                         <li><b>Vision exceptionnelle : </b>Star Platinum possède une vision exceptionnelle, dépassant largement celle de n'importe quel être humain. Jotaro utilise a plusieurs reprises ce pouvoir, en regardant 'avec' Star Platinum, lui permettant de scruter le désert ou de surveiller les mouvements d'un joueur de cartes professionnel. C'est grâce à ce pouvoir que Jotaro peut distinguer la mouche sur l'idéographie de Dio.</li>
                         <li><b>Vitesse : </b>Star Platinum est aussi parmi les stands les plus rapides, d'une vitesse comparable à celle de The World, Silver Chariot, ou Crazy Diamond. Sa vitesse de frappe peut atteindre les 350 km/h, et a la possibilité de briser du diamant.</li>
                         <li><b>Arrêt du temps : </b>Star Platinum peut arrêter le temps pendant quelques secondes (5 secondes dans la partie III, puis 2 secondes dans la partie 4 IV puisqu'il n'a plus utilisé son stand pendant 10 ans et à nouveau 5 secondes dans la partie VI). Jotaro peut agir librement pendant cette pause. Il découvre cette capacité lors du combat contre Dio, et nécessite une certaine période de rechargement avant de pouvoir à nouveau stopper le temps (contrairement a Dio, dont la nature de vampire réduit énormément ce temps de recharge)</li></ul></p>",
                    "Stardust Crusaders",
                    "Jojo Stand"
                    );
                   
 $crazy_diamond= new Stand("portfolioModal3",
                    "Crazy Diamond",
                    "Josuke Higashikata  ",
                    "assets/img/portfolio/crazy_diamond.png", 
                    "assets/img/portfolio/Crazy_Diamond_Powa.gif", 
                     "         <p>Crazy Diamond possède une grande puissance brute, qui se rapproche de celle de Star Platinum (dont les coups vont à plus 350km/h , Crazy Diamond allant aux environs de 320km/h ). Il est capable d'envoyer son adversaire dans les airs avec un uppercut bien placé et peut aussi percer la défense de Star Platinum.

                     Jotaro a d'ailleurs lui-même dit qu'il ne savait pas s'il pouvait battre Josuke sans son arrêt du temps.
                     
                     CrazyDiamon restaure du papier.gif
                     Restauration
                     Crazy Diamond est capable de restaurer les objets et les organismes. Il est capable de guérir des blessures, il peut également rendre à un objet son état d'origine s'il possède un morceau qu'il détient et peut déceler les composants d'un objet. Il peut également fusionner deux composants en portant un coup sur eux.
                     
                     Cependant, Crazy Diamond est en incapacité de ressusciter les morts et si la réparation est utilisée lorsque Josuke est de mauvaise humeur (lorsqu'il est par exemple critiqué par rapport à sa coupe de cheveux), alors la restauration est altérée et l'objet reconstruit est déformé</p>",
                "Diamond is umbreakable",
                "Jojo Stand"
                );

$gold_experience= new Stand("portfolioModal4",
                "Gold Experience",
                "Giorno Giovana",
                "assets/img/portfolio/golden_wind.png", 
                "assets/img/portfolio/golde_experience.gif", 
                 "                     <p>Contrairement à Star Platinum ou Crazy Diamond, Gold Experience n'est pas doté d'une grande force physique. Il est tout de même plutôt rapide et est même capable de renverser des voitures avec des coups de poing, il peut lancer un barrage de coups, à la manière de Star Platinum ou Crazy Diamond. Cependant, Gold Experience possède un pouvoir très polyvalent.

                 <ul> <li> <b> Don de Vie:</b>
                 
                 Gold Experience peut donner vie à tout ce que ses poings touchent, ce qui se traduit par une variété d'effets différents.
                 
                 L'utilisation la plus caractéristique de cette capacité est la conversion d'objets inorganiques en organismes vivants, que ce soit un animal ou une plante. Par exemple, il peut transformer un bagage en grenouille ou un briquet en rose. Les formes de vie peuvent durer longtemps et même à une distance significative de Giorno. Il peut également l'annuler librement et renvoyer un objet à son état inorganique d'origine.
                 
                 La vitesse de la transformation varie énormément selon la forme désirée: un objet se transformant en plante verra le processus se réaliser rapidement, mais la transformation en animal prend en général plus de temps. Par exemple, transformer les parties d'un hélicoptère en un arbre est presque instantané et la transformation est suffisamment solides pour permettre aux branches de percer le métal, mais transformer une bouée de sauvetage en un poisson prend bien plus de temps. Giorno a également instantanément transformé des gouttes de son sang en un essaim de fourmis, laissant supposer que le temps de transformation est proportionnel à la complexité de la forme de vie qu'il crée.
                 
                 Giorno produit fréquemment de petites formes de vie (grenouilles, serpents, mouches) et des plantes dont il n'a aucun contrôle. Ainsi, lorsqu'il crée un animal, il doit deviner ce que l'animal est susceptible de faire pour en profiter. Puisque les animaux n'agissent pas toujours comme il le prévoit, comme lorsqu'un serpent se brûle accidentellement sur un briquet, leur utilisation peut s'avérer préjudiciable. Si les conditions de vie sont totalement inadaptées, telles que des températures d'environ -100 °C , alors Giorno ne peut pas utiliser son pouvoir de Don de Vie.
                 
                 Initialement, lorsque l'une des formes de vie créées était attaquée, les dommages étaient renvoyés à l'attaquant. Par exemple, Luca avait essayé de casser une grenouille avec sa pelle seulement pour que sa tête soit défoncée à la place. La transformation a également été présentée à l'origine de la même manière qu'un fœtus se développant dans un organisme, mais a finalement été finalisée en tant qu'objet moulant dans la forme de vie désirée de Giorno.</li>
                 
                <li><b>Tir de Vie:</b>
                 
                 La capacité de Gold Experience peut également être appliquée aux individus vivants, ce qui accélère considérablement leur processus de pensée. Quand Bruno Bucciarati a été frappé par un coup de poing de Gold Experience, sa conscience s'est accélérée à tel point qu'il a tout perçu comme un mouvement lent. Cependant, son corps n'a pas suivi la montée de la vitesse et pouvait à peine bouger. Bien que cela augmente aussi les sens de ses victimes, cela signifie également que le corps alors sans défense ressentira une douleur beaucoup plus aiguë et intense pendant une période de temps plus longue pendant laquelle la blessure est prise, habituellement à partir des propres coups de Gold Experience.
                 
                 Bien qu'il ne soit montré qu'une seule fois, Gold Experience peut aussi accélérer la vie d'une forme de vie existante grâce à ses capacités. Ainsi, il a fait flétrir un arbre et expirer immédiatement à la suite d'une durée de vie considérablement raccourcie.
                 
                 Aussi montré une fois est sa capacité à cloner même les organismes. Pendant le combat de Bruno contre Diavolo, Giorno recrée Coco Jumbo de loin, en utilisant sa capacité Stand pour piéger temporairement Diavolo à l'intérieur de la tortue.</li>
                 
                 <li><b>Création de chair et d'organes:</b>
                 
                 Inspiré par la capacité de Baby Face à transformer les parties du corps en cubes inertes, Giorno a découvert qu'il pouvait faire l'inverse et créer des parties du corps et des organes singuliers à partir de la matière inorganique. Ainsi, il est capable de guérir de blessures horribles par divers moyens. Dans un cas, il transforme des balles en la chair même qu'elles ont percée et a fait repoussé l'une de ses mains à l'aide d'une broche.</li>
                 
               <li><b>Capteur de vie:</b>
                 
                 Grâce à la maîtrise de Gold Experience sur la vie elle-même, Giorno peut détecter la présence d'organismes vivants. Giorno lui-même prétend que l'énergie de la vie existe en 'grappes'. Quand il touche quelqu'un ou quelque chose, il peut sentir d'autres formes de vie de l'intérieur, lui permettant de vérifier si quelqu'un est vivant ou même de déterminer combien d'âmes il peut y avoir à l'intérieur d'un individu. Il a également prévu de suivre Diavolo en plantant une broche à laquelle il a donné vie sur ce dernier pour le sentir de loin et le traquer.</li></p>",
            "Golden Wind",
            "Jojo Stand"
            );

$stone_free= new Stand("portfolioModal5",
                    "Stone Free",
                    "Jolyne Cujoh",
                    "assets/img/portfolio/jolyne.png", 
                    "assets/img/portfolio/stone_modal.jpg", 
                     "         <p>Stone Free est Stand de courte portée unique, qui non seulement peut être invoqué en combat, mais fournit également à Jolyne de nombreuses capacités extérieures. Comme le Star Platinum de son père, Stone Free est à la fois rapide et puissant, le rendant efficace en affrontement physique. De plus, le pouvoir de son fil lui donne une grande polyvalence, permettant à Jolyne un vaste choix d'actions en combat.

                     Lorsque le fil de Stone Free est rassemblé ou compacté, il devient très puissant. La force d'impact de ses coups de poing est grossièrement équivalente à celle d'une petite météorite extrêmement rapide. Il est également assez rapide pour dévier plusieurs balles dirigées vers lui.
                     
                     Dénouement en fil
                     Stone Free permet à Jolyne de dénouer son corps en fil, en commençant généralement par ses mains, et le contrôler librement.
                     
                     Le fil de Stone Free est invisible aux non-manieurs de Stand. Il est également tranchant, étant capable de découper à travers la chair lorsqu'il est tiré assez violemment. D'autre part, le fil n'est pas particulièrement résistant et peut se casser s'il est trop tendu, même si Jolyne peut créer une corde plus résistante grâce à plusieurs fils. Avec de la précision, elle peut voler de petits objets avec celui-ci. Le fil est également capable de se contracter et s'étendre comme un muscle, permettant à Stone Free de contrôler sa prise.
                     
                     Si Jolyne rassemble son fil, elle peut concentrer son pouvoir et former l'apparence humanoïde de Stone Free, qui est cependant réduite à une portée d'à peu près 2 mètres. Stone Free, composé de fils, peut également être démêlé.
                     
                     Jolyne peut dérouler environ 70% de son corps sans danger, et se reconstituer rapidement. Cela lui permet d'être incroyablement polyvalente et capable de se cacher dans des espaces étroits tels que la bouche d'une personne. Au risque de se blesser elle-même, Jolyne n'hésite également pas à couper son propre fil pour employer de nouvelles stratégies. La portée maximale de Stone Free, dénoué à 70%, est d'environ 24 mètres.
                     
                     L'utilisation du fil de Stone Free le rend remarquablement polyvalent en combat. Avec le fil, Jolyne est capable de : <ul><li>Écouter les conversations à distance grâce aux vibration du son dans son fil, avec le même procédé qu'un téléphone à ficelle.</li>
                     <li>Couper ses ennemis avec le tranchant de ses fils.</li>
                     <li>Voler des petits objets.</li>
                     <li>Tisser un filet assez résistant pour stopper des balles afin de se protéger.</li>
                     <li>Créer un grand filet pour capturer ses ennemis.</li>
                     <li>Attacher des personnes pour des usages variés, principalement afin de les garder à distance ou les étouffer.</li>
                     <li>Recoudre ses plaies.</li>
                     <li>Déployer une 'barrière de fil' pour détecter les mouvements dans un grand espace.</li>
                     <li>Créer des motifs complexes, au point que Stone Free puisse reproduire un portrait.</li>
                     <li>Se balancer d'un endroit à un autre.</li>
                     <li>Contrer la capacité de C-Moon pouvant inverser les choses, en modifiant les zones affectées de son corps en ruban de Möbius</a>.</li></ul></p>",
                "Stone Ocean",
                "Jojo Stand"
                );

$tusk= new Stand("portfolioModal6",
                    "Tusk",
                    "Johny Joestar",
                    array("assets/img/portfolio/tusk.png", "assets/img/portfolio/tusk2.png", "assets/img/portfolio/tusk3.png", "assets/img/portfolio/tusk4.png"), 
                    "assets/img/portfolio/Crazy_Diamond_Powa.gif", 
                     "        <p><b>Capacités:</b>  Malgré sa forme corporelle, le pouvoir de Tusk fonctionne comme une capacité que Johnny doit personnellement utiliser pour se battre à la manière d'un tireur. Tusk ACT1 est globalement assez faible et n'est pas suffisant pour confronter la plupart des manieurs de Stand. <b>  Ongles rotatifs:</b>Tusk ACT1 confère à Johnny la capacité d’insuffler la Rotation à ses ongles.

                     Johnny est capable de faire tourner ses ongles de mains (plus tard, de pieds) à grande vitesse, et les tirer comme des balles jusqu'à 10 mètres. Les ongles ont un pouvoir de coupe incroyable, et peuvent trancher la roche, couper nettement des membres, ou même sculpter un arbre en une forme humanoïde en quelques secondes. Toutefois, ils ne possèdent pas le pouvoir de couper à travers le métal. Une fois que Johnny tire un ongle, il ne lui faut que peu de temps pour repousser.
                     
                     Parfois, Johnny laisse tourner ses ongles sur ses doigts. Lorsqu'il pose les ongles contre le sol, leur mouvement de rotation peut rapidement faire déplacer Johnny de sa position initiale. Il peut également les utiliser comme des armes tranchantes à courte portée.
                     
                     Selon Oyecomova, les ongles en rotation émettent un léger bourdonnement semblable à celui d'une guêpe.
                     
                     <b>Tusk ACT2: </b>
                     Première apparition dans le manga : SBR Chapitre 43 : Silent Way ④
                     
                     Tusk ACT2 est la première forme évoluée de Tusk, accédée lorsque Johnny progresse dans la technique de la Rotation et utilise le Rectangle d'or.
                     
                     
                     <b>Capacités: </b>
                     Avec une puissance de destruction accrue et de nouvelles propriétés pour ses ongles, Tusk ACT2 est une amélioration directe de ACT1. Il permet à Johnny d'avoir plus d'avantages en combat, mais limite le nombre d'ongles à sa disposition.
                     
                     <b>Rectangle d'or: </b>
                     Dès que Johnny apprend à utiliser ses ongles avec une Rotation liée au Rectangle d'or, les propriétés initiales de ses tirs sont grandement améliorées.
                     
                     Lorsque Johnny active Tusk, ses ongles tournent maintenant autour de ses doigts comme une vrille. Ainsi, les ongles tirés possèdent une propriété de forage, qui augmente considérablement la puissance des tirs. Par exemple, un seul tir est capable de détruire une large zone à l'impact. En revanche, les ongles repoussent beaucoup plus lentement, et par conséquent, Johnny doit les préserver sous peine de se retrouver à court de munitions. En plus de l'augmentation des dégâts, les ongles acquièrent une nouvelle propriété : après avoir atteint une cible, ils disparaissent et laissent un trou noir. Ces mêmes trous créés grâce à la Rotation peuvent automatiquement poursuivre toute cible désignée par Johnny au cas où il les auraient manquées, en laissant une traînée sombre derrière eux. Quand ils parviennent à toucher l'ennemi, les trous les blessent en déchirant leur peau. Après un moment, les trous rétrécissent puis disparaissent.
                     
                     Lorsque Johnny tire un ongle avec une Rotation dorée, il faut plusieurs minutes pour que celui-ci repousse; néanmoins, Johnny découvre qu'en mangeant des herbes ou en buvant de la tisane, plus particulièrement à la camomille, il peut accélérer leur repousse.
                     
                     Comme avec Tusk ACT1, Johnny peut laisser les ongles tourner autour de ses doigts sans les tirer. Il utilise généralement ceci pour des tâches banales comme se brosser les dents, râper du fromage et enrouler des spaghettis autour de ses doigts.
                     
                     En raison de leur nature, Funny Valentine ne peut pas utiliser Dirty Deeds Done Dirt Cheap pour envoyer les trous dans une dimension parallèle. Il est expliqué que les trous sont par définition nuls, et qu’il n'y a rien à renvoyer.
                     
                     <b>Tusk ACT3: </b>
                     Première apparition dans le manga : SBR Chapitre 59 : Le rêve de Gettysburg
                     
                     Tusk ACT3 est la seconde évolution de Tusk, débloquée quand Johnny reçoit les conseils de Jésus et trouve une nouvelle détermination dans la vie.
                     
                     
                     
                      <b>Capacités:</b>
                     Même s'il fonctionne de manière identique à Tusk ACT2, ACT3 permet à Johnny d'exploiter directement les trous créés par ses tirs, afin de se repositionner en combat et accroître ses options.
                     
                     Tusk ACT3 possède toujours toutes les capacités et limitations de ACT2.<b>Trou de ver spatial: </b> En tirant sur lui-même avec un ongle influencé par la Rotation dorée, Johnny est capable d’aspirer son corps dans le trou qu’il crée.
                     
                     Le trou créé par le tir, plus précisément le point de rotation ultime à la fin du trou, devient un espace spécial qui, grâce à la proportion infinie de la Rotation de Johnny, se transforme en un trou de ver spatial. Cet espace pourrait représenter la frontière entre les dimensions. Seul Johnny peut entrer dans cet 'endroit', et toute chose étrangère sera découpée. Cette capacité est limitée par la durée à laquelle les trous peuvent subsister.
                     
                     En déplaçant le trou pendant que son corps est à l'intérieur, Johnny peut rapidement repositionner lui-même ou des parties importantes, telles que ses mains, et ainsi attaquer depuis des angles inattendus. Puisque le trou fonctionne comme un trou de ver, tout ce qui y est envoyé sortira par l’autre bout, bien qu'endommagé. Cela inclut les attaques ennemies.
                     
                     Gyro Zeppeli considère cette capacité comme un nouveau niveau de maîtrise de la Rotation auquel même la Famille Zeppeli n'avait jamais accédé grâce aux Boules de fer.
                     
                     Tusk ACT4
                     Première apparition dans le manga : SBR Chapitre 85 : Ball Breaker ③
                     
                     Tusk ACT4 est la plus haute évolution de Tusk, uniquement accessible lorsque Johnny utilise l'énergie de la Rotation d'or parfaite.</p>",
                "Steel Ball Run",
                "Jojo Stand"
                );

$soft_wet= new Stand("portfolioModal7",
                "Soft&Wet",
                "Josuke Higashikata",
                "assets/img/portfolio/soft.jpg", 
                "assets/img/portfolio/soft_&_wet.gif", 
                 "         <p>Crazy Diamond possède une grande puissance brute, qui se rapproche de celle de Star Platinum (dont les coups vont à plus 350km/h , Crazy Diamond allant aux environs de 320km/h ). Il est capable d'envoyer son adversaire dans les airs avec un uppercut bien placé et peut aussi percer la défense de Star Platinum.

                 Jotaro a d'ailleurs lui-même dit qu'il ne savait pas s'il pouvait battre Josuke sans son arrêt du temps.
                 
                 CrazyDiamon restaure du papier.gif
                 Restauration
                 Crazy Diamond est capable de restaurer les objets et les organismes. Il est capable de guérir des blessures, il peut également rendre à un objet son état d'origine s'il possède un morceau qu'il détient et peut déceler les composants d'un objet. Il peut également fusionner deux composants en portant un coup sur eux.
                 
                 Cependant, Crazy Diamond est en incapacité de ressusciter les morts et si la réparation est utilisée lorsque Josuke est de mauvaise humeur (lorsqu'il est par exemple critiqué par rapport à sa coupe de cheveux), alors la restauration est altérée et l'objet reconstruit est déformé</p>",
            "Jojolion",
            "Jojo Stand"
            );         

            $allJojoStands = array($hermit_purple, $star_platinium, $crazy_diamond, $gold_experience, $stone_free, $tusk, $soft_wet);
  
?>