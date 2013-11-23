<?php
/* il faut demarrer la session*/
session_start();
 
if (empty($_SESSION['id'])) //les membres connectes ne peuvent pas s'inscrire
{
?>
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
		<form action="inscriptionok.php" method="POST">
		   <div class="row-fluid">
            <div class="span12">
          <div class="grid simple transparent">
            <div class="grid-title">
              <h4>Inscription <span class="semi-bold">Utilisateur</span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body ">
              <div class="row-fluid">
                <form id="commentForm" action="inscriptionok.php" method="post">
                  <div class="span12" id="rootwizard">
                    <div class="form-wizard-steps">
                      <ul class="wizard-steps form-wizard">
                        <li data-target="#step1" class="active"> <a data-toggle="tab" href="#tab1"> <span class="step">1</span> <span class="title">Information de connexion</span> </a> </li>
                        <li class="" data-target="#step2"> <a data-toggle="tab" href="#tab2"> <span class="step">2</span> <span class="title">Information Utilisateur</span> </a> </li>
                          </span> </a> </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="tab-content transparent">
                      <div id="tab1" class="tab-pane active"> <br>
                        <h4 class="semi-bold">Step 1 - <span class="light">Information de Connexion</span></h4>
                        <br>
                        <div class="row-fluid">
                          <div class="span12">
                            <input type="text" id="txtFullName" name="pseudo" class="span12 no-boarder " placeholder="Pseudo">
                          </div>
                        </div>
                        <div class="row-fluid">
                          <div class="span12">
                            <input type="password" id="txtFirstName" name="mdp" class="span12 no-boarder " placeholder="Mot de Passe">
                          </div>
                        </div>
                        <div class="row-fluid">
                          <div class="span12">
                            <input type="text" id="txtLastName" name="email" class="span12 no-boarder " placeholder="E-Mail">
                          </div>
                       </div>
                      </div>
                      <div id="tab2" class="tab-pane"> <br>
                        <h4 class="semi-bold">Step 2 - <span class="light">Information sur l'utilisateur</span></h4>
                        <br>
                        <div class="row-fluid">
                          <div class="span6">
                            <input type="text" id="txtCountry" name="nom" class="span12 no-boarder " placeholder="Nom">
                          </div>
                          <div class="span6">
                            <input type="text" id="txtPostalCode" name="prenom" class="span12 no-boarder " placeholder="Prénom">
                          </div>
                        </div>
                        <div class="row-fluid">
                          <div class="span6">
                            <input type="text" id="txtPhoneCode" name="tel_fixe" class="span12 no-boarder " placeholder="Téléphone Fixe">
                          </div>
                          <div class="span6">
                            <input type="text" id="txtPhoneNumber" name="tel_port" class="span12 no-boarder " placeholder="Téléphone Portable">
                          </div>
                        </div>

                        <button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i> Inscription</button>
                      </div>
                      <ul class=" wizard wizard-actions">
                        <li style="display:none;" class="previous first disabled"><a class="btn" href="javascript:;">&nbsp;&nbsp;First&nbsp;&nbsp;</a></li>
                        <li class="previous disabled"><a class="btn" href="javascript:;">&nbsp;&nbsp;Previous&nbsp;&nbsp;</a></li>
                        <li style="display:none;" class="next last"><a class="btn btn-primary" href="javascript:;">&nbsp;&nbsp;Last&nbsp;&nbsp;</a></li>
                        <li class="next"><a class="btn btn-primary" href="javascript:;">&nbsp;&nbsp;Next&nbsp;&nbsp;</a></li>
                      </ul>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>	
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
else
{
echo "Vous n'avez pas le droit d'acceder a cette page";
}
?>
          </form>

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