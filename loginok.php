    <?php
    /* il faut demarrer la session*/
    session_start();
     
    if (empty($_SESSION['id'])) //les membres connectes ne peuvent pas s'inscrire
    {
    /* il faut que toutes les variables du formulaire existent*/
    if(isset($_POST['pseudo']) && isset($_POST['pass']))
    {
    /*il faut que tous les champs soient renseignes*/
    if($_POST['pseudo']!="" && $_POST['pass']!="")
    {
    /*connexion a la BDD*/
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=gestion', 'root', '1992maxime');
    }
    catch (Exception $e)
    {
    die('Erreur : ' . $e->getMessage());
    }
     
    /*on crypte le mot de passe pour faire le test*/
    $passhache = sha1($_POST['pass']);
     
    /* on verifie qu'un membre a bien ce pseudo et ce mot de passe*/
    $req = $bdd->prepare('SELECT * FROM membre WHERE pseudo = :pseudo AND pass= :pass ');
    $req->execute(array('pseudo'=> $_POST['pseudo'], 'pass'=> $passhache));
    $resultat=$req->fetch();
     
    /*s'il n'y a pas de resultat, on renvoie a la page de connexion*/
    if(!$resultat)
    {
    header('Location: login.php');
    }
    else
    {
    /* on demarre la session */
    session_start();
     
    /* on cree les variables de session du membre qui lui serviront pendant sa session*/
    $_SESSION['id']= $resultat['id'];
    $_SESSION['pseudo']= $pseudo;
    $_SESSION['mail']= $resultat['email'];
     
    /*on renvoie sur la page d'accueil*/
    header('Location: index.php');
    }
    }
    else
    {
    echo "Il faut remplir tous les champs";
    }
    }
    else
    {
    echo "Une erreur s'est produite";
    }
    }
    else
    {
    echo "Vous n'avez pas le droit d'acceder a cette page";
    }
    ?>