<?php include ('inc/header.php');?>
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid"> 
  <!-- BEGIN SIDEBAR -->
<?php include ('inc/sidebar.php'); ?>
  <!-- END SIDEBAR -->
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content"> 
          <ul class="breadcrumb">
        <li>
          <p>Vous êtes Ici ?</p>
        </li>
        <i class="icon-angle-right"></i>
        <li><a href="#" class="active">Inscription Utilisateur</a> </li>
      </ul> 
		<div class="page-title">	
			<h3>Inscription d'un utilisateur </h3>		
		</div>
    <?php
        /* il faut demarrer la session*/
        session_start();
         
        if (empty($_SESSION['id'])) //les membres connectes ne peuvent pas s'inscrire
        {
        /* il faut que toutes les variables du formulaire existent*/
        if(isset($_POST['pseudo']) && isset($_POST['mdp']) && isset($_POST['email']))
        {
        /*il faut que tous les champs soient renseignes*/
        if($_POST['pseudo']!="" && $_POST['mdp']!="" && $_POST['email']!="")
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
         
        /* on teste l'adresse email, si c'est bon, on continue, sinon, on affiche un message d'erreur*/
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}.[a-z]{2,4}$#", $_POST['email']))
        {
        /*on verifie si un membre ne possede pas deja le meme pseudo*/
        $req = $bdd->prepare('SELECT id FROM membre WHERE pseudo = :pseudo');
        $req->execute(array('pseudo'=> $_POST['pseudo']));
        $nb_resultats_recherche_membre=$req->fetch();
         
        if(!$nb_resultats_recherche_membre) /*si il n'y a pas de resultat*/
        {
        /*on crypte le mot de passe*/
        $mdp = sha1($_POST['mdp']);
         
        /*Si le pseudo est libre et l'email valide, alors on enregistre le nouveau membre*/
        $req=$bdd->prepare('INSERT INTO membre(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
        $req->execute(array('pseudo'=>$_POST['pseudo'], 'pass'=>$mdp, 'email'=>$_POST['email']));

         echo "<div class=alert alert-success>
                    <button class=close data-dismiss=alert></button>
                    Success:&nbsp;Inscription prise en compte
                  <meta http-equiv=refresh content=3; URL=index.php>
                  </div>";

          }
          else
          {
          echo "<div class=alert>
                    <button class=close data-dismiss=alert></button>
                    Warning:&nbsp;Un pseudo existe déja pour ce compte.
                    <meta http-equiv=refresh content=3; URL=inscription.php>
                  </div>";
          } 
          }
          else
          {
          echo "<div class=alert>
                    <button class=close data-dismiss=alert></button>
                    Warning:&nbsp;Votre Adresse mail est invalide.
                    <meta http-equiv=refresh content=3; URL=inscription.php>
                  </div>";
          }
          }
          else
          {
          echo "<div class=alert>
                    <button class=close data-dismiss=alert></button>
                    Warning:&nbsp;Il faut remplir tous les champs.
                    <meta http-equiv=refresh content=3; URL=inscription.php>
                  </div>";
          }
          }
          else
          {
          echo "<div class=alert alert-error>
                    <button class=close data-dismiss=alert></button>
                    Warning:&nbsp;Une erreur s'est produite<br>Pour plus d'info contacter le support web GCO ou votre administrateur réseau.
                    <meta http-equiv=refresh content=3; URL=inscription.php>
                  </div>";
          }
          }
          else
          {
          echo "<div class=alert alert-error>
                    <button class=close data-dismiss=alert></button>
                    Warning:&nbsp;Vous n'avez pas le droit d'accedez à cette page.
                    <meta http-equiv=refresh content=3; URL=index.php>
                  </div>";
          }
          ?>
            <center><h1><b>Récapitulatif de formulaire</b></h1></center>
            <table>
              <tr>
                <td>Votre Pseudo:</td>
                <td><?php echo $_POST['pseudo'] ?></td>
              </tr>
              <tr>
                <td>Votre Email:</td>
                <td><?php echo $_POST['email']; ?></td>
              </tr>
            </table>

          <!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>

<!-- END CORE JS FRAMEWORK -->
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-inputmask/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-autonumeric/autoNumeric.js" type="text/javascript"></script>
<script src="assets/plugins/ios-switch/ios7-switch.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script src="assets/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/js/form_elements.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- END JAVASCRIPTS -->
</body>
</html>