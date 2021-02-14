<?php
declare(strict_types=1);

require('data_base_stands.php');

class Jojo {
    private $name;
    private $chapitre;
    private $resume;
    private $image;
  
    function __construct( string $name,string $chapitre,string $resume,string $image) {
      $this->name = $name;
      $this->chapitre = $chapitre;
      $this->resume = $resume;
      $this->image = $image;
    }

    function get_name() {
      return $this->name;
    }

    function get_chapitre() {
      return $this->chapitre;
    }

    function get_resume() {
        return $this->resume;
      }

    function get_image() {
        return $this->image;
    }


 


  }
  
$jonathan_young = new JoJo("Jonathan Joestar",
                     "( Phantom Blood )",
                    "ジョナサン・ジョースター Jonasan Jōsutā - 1868-1889) est le protagoniste de Phantom Blood et le premier JoJo de la série.
                    Né fils unique du riche homme d'affaires George Joestar I, Jonathan est un homme honnête, gentil et positif dont la vie est pleine de tragédies après avoir rencontré son frère aîné adoptif - et antagoniste de série - Dio Brando.",
                    "assets/img/about/1er jojo jeune.jpg"
                );

$jonathan_old = new JoJo("Jonathan Joestar",
                "(Maitrise de l'Onde)",
                "Dans sa lutte contre Dio, Jonathan devient un utilisateur de l'Onde sous la tutelle du maître William Antonio Zeppeli. L'Onde (波紋 Hamon), est une énergie utilisée dans la forme antique des arts martiaux, Sendō (仙道, lit. 'Chemin de l'Ermite / Magicien').
                Grâce à une respiration contrôlée, une personne entraînée peut produire une énergie qui se manifeste sous forme d'ondulations dans tout son corps et qui est identique à l'énergie du Soleil, en opposition polaire à l'énergie exercée par les Vampires, les Zombies et les Pillar Men. ",
                "assets/img/about/1er jojo adulte.jpg" 
           );
$joseph_young = new JoJo("Joseph Joestar ",
           "(Battle Tendency)",
           "Joseph Joestar (ジ ョ セ フ ・ ジ ョ ー ス タ ー Josefu Jōsutā) Est le petit-fils de Jonathan Joestar née en 1920 , ainsi que le personnage principal de Battle Tendency. Il est aussi présent dans Stardust Crusaders et Diamond est Unbreakable en tant qu'allié. Joseph est le deuxième JoJo de la série et le plus récurrent après Jôtarô Kujô.
           Joseph est un escroc exubérant. Il a affronté de nombreuses menaces ( les vampires , les Hommes du Pilier et des utilisateurs de Stand ) avec une ingéniosité impressionnante. ",
           "assets/img/about/2eme_jojo.jpg"
      );

$joseph_old = new JoJo("Joseph Joestar",
      "(Stardust Crusaders)",
      "Âgé de 68 ans, ses cheveux et sa barbe sont devenus gris. Il ne semble pas avoir de problème de santé, bien au contraire il a gardé la même musculature que dans sa jeunesse.
      Son stand, Hermit Purple , ressemble à quant à lui a des ronces violettes. Il n'est pas très puissant mais est capable de conduire l' Onde. Il peut également matérialiser des images à longue portée en détruisant un appareil photo.",
      "assets/img/about/2eme_jojo_vieux.jpg"
 );

 $jotaro = new JoJo("Jotaro Kujo",
      "(Stardust Crusaders)",
      "Jotaro Kujo ( japonais :空条承太郎, Hepburn : Kujo Jotaro ) est 
      le protagoniste principal du troisième arc de la série , Stardust Crusaders , Jotaro est décrit comme un délinquant rugueux avec un cœur bienveillant alors qu'il voyage du Japon en Égypte avec son grand-père, Joseph Joestar , et ses alliés pour vaincre Dio Brando.et sauver la vie de sa mère. Il a un pouvoir spirituel (un 'Stand') nommé Star Platinum (星 の 白金ス タ ー プ ラ チ ナ, Sutā Purachina ) , dont la puissance est une force, une vitesse et une précision incroyables. Plus tard, Star Platinum obtient la capacité Star Platinum: The World (ス タ ー プ ラ チ ナ ザ ・ ワ ー ル ド, Sutā Purachina Za Wārudo ) , permettant à Jotaro d'arrêter le temps pendant de brèves périodes.",
      "assets/img/about/3eme_jojo.jpg"
 );

 $josuke = new JoJo("Josuke Higashikata",
 "(Diamond is Unbreakable)",
 "Jôsuke Higashikata (东方 仗 助, Higashikata Jôsuke) (en japonais : 助, 'Suke', peut aussi se lire comme «Jo») est le principal protagoniste de la Partie IV : Diamond is Unbreakable.

 Jôsuke est un étudiant de première année dans la ville de Morioh. Il est le fils illégitime de Joseph Joestar, et l'oncle de Jôtarô Kujô.
 Stardust Crusaders
Pendant les évènements de la troisième partie, Jôsuke est âgé de 4 ans, et, tout comme Holy Kujo, il a une grave poussée de fièvre. Sa mère brave alors une tempête de neige pour l'emmener à l'hôpital, mais, à cause de celle-ci, ils se retrouvent coincés et ne peuvent plus avancer. C'est alors qu'un jeune lycéen avec une coupe Pompadour intervient pour les aider et parvient à les sortir de la neige, permettant à Jôsuke d'être emmené à l'hôpital à temps.

Lorsque Jôtarô vainquit DIO, la maladie s'arrête. Jôsuke, inspiré par le lycéen qui les a sauvés sa mère et lui, décidera de s'habiller et se coiffer comme lui en gage de gratitude. Un peu plus tard, il développera son stand Crazy Diamond.

Diamond is Unbreakable
En 1999, Jôtarô part à Morioh pour chercher un prénommé Jôsuke Higashikata, qui serait le fils illégitime de son grand-père : Joseph Joestar. Il a alors 16 ans et rentre en seconde. Jôtarô fait la rencontre de Koichi Hirose, qui lui aussi, rentre ce jour-là en seconde. Ils sont interrompus dans leur discussion par des élèves de première qui s'en prennent à un adolescent. Ils les regardent. La bande de voyous prennent les papiers de l'adolescent et lisent à voix haute ce qu'ils voient. Ils lisent alors Jôsuke Higashikata, ce qui fait réagir Jôtarô qui lui, se retourne brusquement. Les voyous se moquent de la coupe de Jôsuke, ce qui le pousse à bout et lui fait sortir son stand pour les faire partir. Jôtarô est alors surpris de voir que Jôsuke possède un stand. Il s'avance vers lui et lui explique alors pourquoi est-il venu, s'en suit un combat entre Jôsuke et Jôtarô à cause d'un malentendu, pensant que Jôtarô se moquait de ses cheveux",
 
 
 "assets/img/about/4eme_jojo.png" 
);
 
$jotaro_white = new JoJo("Jotaro Kujo",
"(Diamond is Unbreakable)",
"Jotaro, maintenant âgé de 29 ans, arrive dans la ville de Morio à la recherche de son oncle Jôsuke Higashikata pour lui parler de son héritage qu'il recevra à la mort de son père Joseph Joestar et le prévenir qu'un manieur de stand sévi actuellement à Morio. À son arrivé, il bouscule le jeune Koichi Hirose et fait tomber ses affaires,
il utilise alors son stand, Star Platinum ,afin d'empêcher Koichi de tomber. Ils se rendent ensuite au lycée où Josuke et Koichi sont inscrit. Sur le chemin, ils rencontrent un jeune homme qui se rend lui aussi au lycée et qui se fait agresser par une bande de voyous. Celui-ci, qui se révéla être Jôsuke Higashikata , explose le nez d'un d'entre eux grâce à son stand, Crazy Diamond. Jôtaro le reconnait alors et lui explique la raison de sa venue. Josuke se fait ensuite complimenter par une bande de filles qui complimentent notamment sa coupe de cheveux. Jôtarô, énervé, lui dit que l'on s'en fiche de sa coupe de cheveux, ce qui énerve Josuke, qui se met à attaquer Jotarô à l'aide de son stand. Crazy Diamond réussit alors à percer la garde de Star Platinum ce qui oblige Jôtarô à arrêter le temps pour ne pas que l'un d'entre eux ne se retrouve grièvement blessé, pour la première fois depuis son combat contre Dio. Jôtarô donne ensuite une photo d'un criminel recherché par la police et qui pourrait être un manieur de stand à Josuke. Après avoir mis en garde Josuke et Koichi, il retourne à son hôtel, à la périphérie de la ville. Au fil des chapitres, Jotaro jouera le rôle d'agent de la fondation Speedwagon, en rapportant les arcs servant à créer des stands mais aussi en trouvant tous les détenteurs de stands de Morioh ainsi qu'en neutralisant les détenteurs nocifs, ainsi que le rôle de mentor pour Josuke, prenant la place de son père, en lui faisant apprendre comment combattre les détenteurs de stands, contrôler Crazy Diamond, etc...
Au final, il achèvera, sans le faire exprès, Yoshikage Kira en le frappant et l'envoyant, avec Star Platinum, derrière une ambulance faisant marche arrière, ce qui aura pour effet de lui broyer le crâne",
"assets/img/about/3eme_jojo_white.jpg" 
);


$joseph_veryold = new JoJo("Joseph Joestar",
      "Diamond is Unbreakable",
      "Durant l'arc Diamond is Unbreakable, on découvre que Joseph est le père naturel de Josuke Higashikata grâce aux révélations de Jotaro. Joseph voudrait partager son héritage avec lui, mais cette nouvelle n'a pas l'air d'enchanter Josuke, qui semble plutôt déconcerté par le chaos engendré par cette histoire d'adultère.",
      "assets/img/about/2eme_jojo_vieux+.jpg"
 );

 $giorno = new JoJo("Giorno Giovana",
      "Golden Wind",
      "Giorno Giovanna (ジョルノ・ジョバァーナ Joruno Jobāna) est le protagoniste de la cinquième partie de JoJo's Bizarre Adventure, Vento Aureo, et le cinquième JoJo de la série.

      Giorno est le fils illégitime de DIO qui possédait le corps de Jonathan Joestar au moment de sa conception. Il est un semi-Japonais vivant en Italie et son nom japonais est Haruno Shiobana (汐華しおばな 初流乃はるの Shiobana Haruno). Le rêve de Giorno est de prendre la tête du puissant gang Passione et de devenir un 'Gang-Star' qui remettra le gang dans le droit chemin.
      
      Giorno est un manieur de Stand né qui manie Gold Experience, un Stand qui donne la vie.",
      "assets/img/about/5eme_jojo.jpg"
 );
 
 $Jolyne = new JoJo("Jolyne Cujoh",
 "(Stone Ocean)",
 "Jolyne Cujoh (空 条 徐 伦 Kujo Jörin) est la protagoniste de la Partie VI : Stone Ocean, ainsi que la sixième JoJo de la série.

 Jolyne est la fille de Jotaro Kujo, et la seule 'JoJo' de sexe féminin à ce jour. Condamnée pour un meurtre qu'elle n'a pas commis, elle est envoyée à la Prison de Green Dolphin Street, où elle va enquêter et affronter le plus proche disciple de DIO, le prêtre Enrico Pucci.
 
 Grâce à une amulette confiée par son père, Jolyne réveille rapidement son Stand basé sur un fil, Stone Free.Jolyne Cujoh est née en 1992. Elle est envoyée en prison après une affaire de meurtre avec son petit copain Roméo. Lors d'un entretien avec son avocat, celui-ci lui donne un talisman qui appartenait à Jotaro Kujo. Elle se coupe avec et le jette, il s'agit en réalité d'un morceau de la Flèche (voir la partie IV : Diamond Is Unbreakable), un puissant artefact qui permet à une personne de développer un Stand si elle est assez forte pour le supporter, dans le cas contraire, la flèche tuera la personne faible. Après quelques jours elle finit par développer un Stand. Au début ,il ne s'agit que de fils sensibles qui permettent de ligoter quelqu'un ou d'entendre des conversations, elle se servira d'ailleurs de ces fils pour tuer son avocat corrompu. Son Stand ne montrera sa vraie forme que lors de son combat contre Goo Goo Dolls. Son stand possède le fameux cri 'ORA ORA ORA', tout comme Star Platinum, le Stand de son père.

 Lors du combat final, elle mourra, les bras complètement découpé par le stand de pucci, Made in Heaven.",
 "assets/img/about/6eme_jojo.jpeg"
);

$Johnny = new JoJo("Johnny joestar",
 "(Steel Ball Run)",
 "Johnny Joestar (ジョニィ・ジョースター Joni Jōsutā), né Jonathan Joestar (ジョナサン・ジョースター Jonasan Jōsutā), est le protagoniste de la 7ème partie de JoJo's Bizarre Adventure, Steel Ball Run, ainsi que le 7ème JoJo de la série. Il apparaît également en tant que personnage posthume de JoJolion.

 Johnny est ancien coureur-hippique prodige devenu paraplégique mais qui participe à laSBR afin de découvrir le secret derrière les Boules métaliques de Jayro Zeppeli qui semblent être les seules choses capables de guérir les jambes de Johnny. A travers le déroulement de la course, Johnny devient à la fois un utilisateur de Rotation ainsi qu'un manieur de Stand au moment où il acquiert Tusk.",
 "assets/img/about/7eme_jojo.jpg"
);

$josuke_8 = new JoJo("Josuke Higashikata","Jojolion",
 "Josuke Higashikata (東方 定助 Higashikata Jōsuke) est le protagoniste de la Partie VIII : Jojolion, ainsi que le huitième JoJo de la série.

 Josuke est un jeune homme atteint d'amnésie rétrograde, dépourvu de toute mémoire avant d'être découvert par Yasuho Hirose près des Murs aux Yeux dans la ville de Morioh. Déterminé à connaitre son passé, il se consacre à la recherche de son ancienne identité et les personnes liées à celle-ci.
 
 Il découvre plus tard son identité originelle, appartenant à Josefumi Kujo (空条 仗世文 Kūjō Josefumi), qui devint une nouvelle personne après avoir fusionné avec Yoshikage Kira (吉良 吉影 Kira Yoshikage).
 
 Josuke est un manieur de Stand, et conserve le Soft & Wet de son identité originelle.",
 "assets/img/about/8eme_jojo.jpg"
);


// echo $josuke_8->get_name();
  

$allJojos = array($jonathan_young, $jonathan_old, $joseph_young, $joseph_old, $jotaro, $josuke, $jotaro_white, $joseph_veryold, $giorno , $Jolyne, $Johnny, $josuke_8);




// foreach ($colors as $value) {
//     echo "$value <br>";
//   }
  

?>
