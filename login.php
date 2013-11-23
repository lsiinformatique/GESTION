<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8" />
<title>GCO - Connexion</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="error-body no-top">
<div class="container">
  <div class="row">
    <div class="login-container span12">
      <div class="row-fluid column-seperation" style="padding:0 10px">
         <div class="span6 offset1">
          <h2>GCO</h2>
          <p>Gestion Commercial Online<br>
            Le Logiciel de Gestion commercial par LSI&CREDIP</p>
          <br>
<!--           <div class="row-fluid">
            <button class="btn btn-block btn-info span10" type="button">
            <div class="pull-left"><i class="icon-facebook"></i></div>
            <span class="bold">Login with Facebook</span> </button>
          </div>
          <br>
          <div class="row-fluid">
            <button class="btn btn-block btn-success span10" type="button">
            <div class="pull-left"><i class="icon-twitter"></i></div>
            <span class="bold">Login with Twitter</span></button>
          </div> -->
        </div> 
        <div class="span5"> <br>
		 <form id="login-form" class="login-form" action="loginok.php" method="post">
		 <div class="row-fluid">
		 <div class="control-group span10">
            <label class="control-label">Username</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="text" name="pseudo" id="txtusername" class="span12">                                 
				</div>
            </div>
          </div>
          </div>
		  <div class="row-fluid">
          <div class="control-group span10">
            <label class="control-label">Password</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="password" name="pass" id="txtpassword" class="span12">                                 
				</div>
            </div>
          </div>
          </div>
		  <div class="row-fluid">
          <div class="control-group  span10">
            <div class="checkbox checkbox check-success"> <a href="#">Trouble login in?</a>&nbsp;&nbsp;
              <input type="checkbox" id="checkbox1" value="1">
              <label for="checkbox1">Keep me reminded </label>
            </div>
          </div>
          </div>
          <div class="row-fluid">
            <div class="span10">
              <button class="btn btn-primary btn-cons pull-right" type="submit">Login</button>
            </div>
          </div>
		  </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/login.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>
</html>