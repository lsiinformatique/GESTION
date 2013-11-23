<?php
include ('inc/header.php');
?>
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
		<div class="page-title">	
			<h3>Dashboard </h3>		
		</div>
	   <div id="container">
		<div class="row-fluid spacing-bottom 2col">	
			<div class="span3 ">	
				<div class="tiles blue added-margin">
				  <div class="tiles-body">
					<div class="controller">								
						<a href="javascript:;" class="reload"></a>
						<a href="javascript:;" class="remove"></a>		
					</div>		
					<div class="tiles-title">
						Recette du jour
					</div>	
					<div class="heading">
					<span class="animate-number" data-value="<?php echo $donnee_journa_euro[0] ?>" data-animation-duration="1200">0</span>%
											
					</div>
					<div class="progress transparent progress-white progress-small no-radius">
						<div class="bar animate-progress-bar" data-percentage="<?php echo $donnee_journa_euro[0] ?>%"></div>
					</div>					
					<div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 4% higher <span class="blend">than last month</span></span></div>
					</div>	
				</div>
			</div>
			<div class="span3 ">
				<div class="tiles green added-margin">
				 <div class="tiles-body">
					<div class="controller">								
						<a href="javascript:;" class="reload"></a>
						<a href="javascript:;" class="remove"></a>									
					</div>		
					<div class="tiles-title">
						TODAY’S VISITS
					</div>	
					<div class="heading">
						<span class="animate-number" data-value="2545665" data-animation-duration="1000">0</span>	
					</div>
					<div class="progress transparent progress-white progress-small no-radius">
							<div class="bar animate-progress-bar" data-percentage="79%" ></div>
					</div>				
					<div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 2% higher <span class="blend">than last month</span></span></div>	
				 </div>
				</div>
			</div>
			<div class="span3 ">
				<div class="tiles red added-margin">
				<div class="tiles-body">
					<div class="controller">								
							<a href="javascript:;" class="reload"></a>
							<a href="javascript:;" class="remove"></a>										
						</div>	
					<div class="tiles-title">
						TODAY’S SALES
					</div>	
					<div class="heading">
						$ <span class="animate-number" data-value="<?php echo $query_row_journa; ?>" data-animation-duration="1200">0</span>	
					</div>
					<div class="progress transparent progress-white progress-small no-radius">
						<div class="bar animate-progress-bar" data-percentage="45%" ></div>
					</div>
					<div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 5% higher <span class="blend">than last month</span></span></div>	
				</div>
				</div>
		
			</div> 
			<div class="span3">
				<div class="tiles purple added-margin">
				  <div class="tiles-body">
					<div class="controller">								
						<a href="javascript:;" class="reload"></a>
						<a href="javascript:;" class="remove"></a>									
					</div>		
					<div class="tiles-title">
						TODAY’S FEEDBACKS
					</div>	
					<div class="row-fluid">
						<div class="heading">
							<span class="animate-number" data-value="1600" data-animation-duration="700">0</span>	
						</div>
						<div class="progress transparent progress-white progress-small no-radius">
							<div class="bar animate-progress-bar" data-percentage="12%"></div>
						</div>
					</div>
					<div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 3% higher <span class="blend">than last month</span></span></div>
					
				 </div>
				</div>
			</div>			
		</div>  
		<div class="row-fluid spacing-bottom">		
			<div class="span8">
				<div class="row-fluid spacing-bottom">
					<div class="span12 tiles white ">
					  <div class="no-margin-grid">
						<div class="row-fluid">	
						<div class="tile-more-content span4">
							<div class="tiles green">
							 <div class="tiles-body">
								<div class="heading">
									Statistical 
								</div>	
								<p>Status : live</p>					
							 </div>
							 <div class="tile-footer">
								<div class="iconplaceholder"><i class="icon-map-marker"></i></div>258 Countries, 4835 Cities
							 </div>
							</div>
							 <div class="tiles-body" >
							  <ul class="progress-list" >
								<li>
									<div class="details-wrapper">
										<div class="name">Foreign Visits</div>
										<div class="description">Our Overseas visits</div>
									</div>
									<div class="details-status pull-right">
										<span class="animate-number" data-value="89" data-animation-duration="800">0</span>%
									</div>
									<div class="clearfix"></div>
									<div class="progress progress-small no-radius progress-success" >
										<div class="bar animate-progress-bar" data-percentage="89%" ></div>
									</div>
								</li>
								<li>
									<div class="details-wrapper">
										<div class="name">Local Visits</div>
										<div class="description">Our Overseas visits</div>
									</div>
									<div class="details-status pull-right">
									   <span class="animate-number" data-value="45" data-animation-duration="600">0</span>%
									</div>
									<div class="clearfix"></div>
									<div class="progress progress-small no-radius progress-warning">
										<div class="bar animate-progress-bar" data-percentage="45%" ></div>
									</div>
								</li>
								<li>
									<div class="details-wrapper">
										<div class="name">Other Visits</div>
										<div class="description">Our Overseas visits</div>
									</div>
									<div class="details-status pull-right">
										<span class="animate-number" data-value="12" data-animation-duration="200">0</span>%
									</div>
									<div class="clearfix"></div>
									<div class="progress progress-small no-radius progress-danger">
										<div class="bar animate-progress-bar" data-percentage="12%" ></div>
									</div>
								</li>					
							  </ul>
							  
							 </div>
							 </div>
							  <div class="tiles white span8">
							  <div class="tiles-chart">	
									<div class="controller">								
										<a href="javascript:;" class="reload"></a>
										<a href="javascript:;" class="remove"></a>									
									</div>								  
								<div class="tiles-body">									
									<div class="tiles-title">GEO-LOCATIONS</div>
									<div class="heading">
											8,545,654 <i class="icon-map-marker"></i>
									</div>	
								</div>		
								<div id="world-map" style="height:405px"></div>													
								</div>						
								<div class="clearfix"></div>	
							 </div>		
							</div>
							</div>
					</div>
				</div>				
				<div class="row-fluid spacing-bottom">
					<div class="span12 tiles grey ">
					  <div class="no-margin-grid">
						<div class="row-fluid">	
						 <div class="tiles white span8">																	  
								<div class="tiles-body">									
								 <div class="no-margin-grid">
								 <div class="row-fluid">
									<div class="span6">
										<div class="mini-chart-wrapper">
											<div class="chart-details-wrapper">
												<div class="chartname">
												New Orders
												</div>
												<div class="chart-value">
												17,555
												</div>													
											</div>
											<div class="mini-chart">
												<div id="mini-chart-orders"></div>
											</div>
										</div>
									</div>
									<div class="span6">
										<div class="mini-chart-wrapper">
											<div class="chart-details-wrapper">
												<div class="chartname">
												My Balance
												</div>
												<div class="chart-value">
												$17,555
												</div>													
											</div>
											<div class="mini-chart">
												<div id="mini-chart-other" ></div>
											</div>
										</div>
									</div>
									</div>	
									</div>	
										
								</div>	
								<br>
								<div id="ricksaw" ></div>									
												
								<div class="clearfix"></div>	
							 </div>	
							<div class="span4">
							<div class="tiles grey ">
								<div class="tiles white no-margin">
									 <div class="tiles-body">
										<div class="tiles-title blend">
											OVERALL VIEWS		
										</div>
										<div class="heading">
											<span data-animation-duration="1000" data-value="432852" class="animate-number">0</span>	
										</div>	
											44% higher <span class="blend">than last month</span>	
									 </div>
								</div>						
							<div id="legend"></div>
							
						
							 </div>	
							</div>							 
						 </div>
						</div>
					</div>
				</div>
				<div class="row-fluid ">			
				<div class="span8">
					<div class="tiles white">
						  <div class="tiles-body">
							<div class="controller">								
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>									
							</div>
							<div class="tiles-title">
								NOTIFICATIONS
							</div>							
						  </br>
							<div class="notification-messages info">
								<div class="user-profile">
									<img src="assets/img/profiles/c.jpg" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
								</div>
								<div class="message-wrapper">
									<div class="heading">
										David Nester - Commented on your wall
									</div>
									<div class="description">
										Meeting postponed to tomorrow
									</div>
								</div>
								<div class="date pull-right">
								Just now
								</div>
							</div>
							<div class="notification-messages danger">
								<div class="iconholder">
									<i class="icon-warning-sign"></i>
								</div>
								<div class="message-wrapper">
									<div class="heading">
										Server load limited
									</div>
									<div class="description">
										Database server has reached its daily capicity
									</div>
								</div>
								<div class="date pull-right">
								Yesterday
								</div>
							</div>	
							<div class="notification-messages success">
								<div class="user-profile">
									<img src="assets/img/profiles/h.jpg" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
								</div>
								<div class="message-wrapper">
									<div class="heading">
										You have've got 150 messages
									</div>
									<div class="description">
										150 newly unread messages in your inbox
									</div>
								</div>
								<div class="date pull-right">
								Yesterday
								</div>
							</div>								
					    </div>
					</div>					
				</div>	
					<div class="span4">
						<div class="tiles red weather-widget">
							<div class="tiles-body">
									<div class="controller">								
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>									
								</div>	
								<div class="tiles-title">
									TODAY’S WEATHER
								</div>	
								<div class="heading">
									<div class="pull-left">
										Tuesday
									</div>
									<div class="pull-right">
										55
									</div>	
									<div class="clearfix"></div>									
								</div>								
								<div class="big-icon">
									<canvas id="partly-cloudy-day" width="120"  height="120" ></canvas>									
								</div>							
							   <div class="clearfix"></div>
							</div>	
							<div class="tile-footer">
								<div class="pull-left">
									<canvas id="wind" width="32" height="32"></canvas>
									<span class="text-white small-text-description">Windy</span>
								</div>	
								<div class="pull-right">
									<canvas id="rain" width="32" height="32"></canvas>
									<span class="text-white small-text-description">Humidity</span>
								</div>	
								<div class="clearfix"></div>														
							</div>							
						</div>
					</div>
				</div>
			</div>
			<div class="span4">
				<div class="row-fluid spacing-bottom ">
				<div class="span12">				
					<div class="tiles white added-margin">
						  <div class="tiles-body">
							<div class="controller">								
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>									
							</div>
							<div class="tiles-title">
								SERVER LOAD
							</div>	
						<div class="heading text-black ">
						250 GB
						</div>	
						<div class="progress  progress-small no-radius progress-success">
							<div class="bar animate-progress-bar" data-percentage="25%" ></div>
						</div>
						<div class="description">
							<span class="mini-description"><span class="text-black">250GB</span> of <span class="text-black">1,024GB</span> used</span>								
						</div>
						</div>
					</div>
					<div class="tiles white added-margin">
						<div id="chart">								
						</div>
					</div>
				 </div>	
				</div>
				<div class="row-fluid">
					<div class="span12">				
							<div class="widget">
								<div class="widget-title dark">
									<div class="pull-left ">									
									<button class="btn  btn-dark  btn-small" type="button"><i class="icon-plus"></i></button>
									</div>
									Todo list
									<div class="controller">								
										<a href="javascript:;" class="reload"></a>
										<a href="javascript:;" class="remove"></a>									
									</div>
								</div>
								<div class="widget-body">
									
									<div class="row-fluid">
									<input type="text" class="span12 dark ">
									</div>
									<br>
									<div class="row-fluid">
									<div class="checkbox check-success 	">
										<input type="checkbox" value="1" id="chk_todo01" class="todo-list">
											<label for="chk_todo01">Send email to David, new signups</label>
									</div>
								</div>
								<div class="row-fluid">
									<div class="checkbox check-success 	">
										<input type="checkbox" checked="checked" value="1" id="chk_todo02" class="todo-list">
											<label for="chk_todo02" class="done">Call Jane!!</label>
									</div>
								</div>
								<div class="row-fluid">
									<div class="checkbox check-success 	">
										<input type="checkbox"  value="1" id="chk_todo03" class="todo-list">
											<label for="chk_todo03">Server upgrades ASAP</label>
									</div>
								</div>
								<div class="row-fluid">
									<div class="checkbox check-success 	">
										<input type="checkbox" value="1" id="chk_todo04" class="todo-list">
											<label for="chk_todo04">Hello, new task</label>
									</div>
								</div>
								</div>
						</div>
					</div>					
					</div>	
			
		</div>		
		<div class="span4">		
			<br>
			<div class="row-fluid spacing-bottom">
			<div class="span12 white">
			<div class="tiles purple added-margin" style="max-height:345px">
				<div class="tiles-body">
						<div class="controller">								
							<a href="javascript:;" class="reload"></a>
							<a href="javascript:;" class="remove"></a>									
						</div>							
						<h3 class="text-white ">
							<br><br><br>
							<span class="semi-bold">Steve Jobs</span> Time Capsule` is 
							Finally Unearthed on
							<span class="semi-bold">Skyace News</span>
							<div class="blog-post-controls-wrapper">
								<div class="blog-post-control">
									<a class="text-white" href="#"><i class="icon-heart"></i> 47k</a>
								</div>
								<div class="blog-post-control">
									<a class="text-white" href="#"><i class="icon-comment"></i> 1584</a>
								</div>
							</div>						
						</h3>
						<br>
				</div>	
				
			</div>	
			<div class="tiles white added-margin">
				<div class="tiles-body">	
				 <div class="row-fluid">
					<div class="user-comment-wrapper span12">
						<div class="profile-wrapper">
							<img src="assets/img/profiles/d.jpg" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
						</div>
						<div class="comment">
							<div class="user-name">
							David <span class="semi-bold">Cooper</span>
							</div>	
							<div class="preview-wrapper">
								What's the progress on the new project?
							</div>
							<div class="more-details-wrapper">
								<div class="more-details">
								<i class="icon-time"></i> 12 mins ago
								</div>
								<div class="more-details">
								<i class="icon-map-marker"></i> Near Florida	
								</div>
							</div>
						</div>
					</div>					
				</div>						
				</div>				
			</div>				
		</div>			
		</div>
		</div>
		</div>
	</div> 
  </div>  
  <!-- END PAGE --> 
</div>
<!-- BEGIN CHAT --> 
<div id="sidr">
	<div class="chat-window-wrapper">
		<div class="chat-header">	
		<div class="pull-left">
			<input type="text" placeholder="search">
		</div>		
			<div class="pull-right">
				<a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
			</div>			
		</div>	
		<div class="side-widget">
		   <div class="side-widget-title">group chats</div>
		    <div class="side-widget-content">
			 <div id="groups-list">
				<ul class="groups" >
					<li><a href="#"><div class="status-icon green"></div>Office work</a></li>
					<li><a href="#"><div class="status-icon green"></div>Personal vibes</a></li>
				</ul>
			</div>
			</div>
		</div>
		<div class="side-widget">
		   <div class="side-widget-title">favourites</div>
		   <div id="favourites-list">
		    <div class="side-widget-content" >
				<div class="user-details-wrapper active">
					<div class="user-profile">
						<img src="assets/img/profiles/d.jpg" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<span class="badge badge-important">3</span>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper">
					<div class="user-profile">
						<img src="assets/img/profiles/c.jpg" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>					
			</div>
			</div>
		</div>
		<div class="side-widget">
		   <div class="side-widget-title">more friends</div>
			 <div class="side-widget-content" id="friends-list">
				<div class="user-details-wrapper">
					<div class="user-profile">
						<img src="assets/img/profiles/d.jpg" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper">
					<div class="user-profile">
						<img src="assets/img/profiles/h.jpg" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>		
				<div class="user-details-wrapper">
					<div class="user-profile">
						<img src="assets/img/profiles/c.jpg" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper">
					<div class="user-profile">
						<img src="assets/img/profiles/h.jpg" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>				
			</div>		
		</div>
	</div>
</div>
<!-- END CHAT --> 
<!-- END CONTAINER --> 

<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<!-- END CORE JS FRAMEWORK --> 
<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.js"></script>
	<script src="assets/plugins/respond.js"></script>	
	<![endif]--> 

<!-- BEGIN PAGE LEVEL JS --> 
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script> 
<script src="assets/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
<script src="assets/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
<script src="assets/plugins/jquery-morris-chart/js/morris.min.js"></script>
<script src="assets/plugins/jquery-easy-pie-chart/js/jquery.easypiechart.min.js"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script> 	
<script src="assets/plugins/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script> 	
<script src="assets/plugins/jquery-jvectormap/js/jquery-jvectormap-us-lcc-en.js" type="text/javascript"></script> 	
<script src="assets/plugins/jquery-sparkline/jquery-sparkline.js"></script>
<script src="assets/plugins/jquery-flot/jquery.flot.min.js"></script>
<script src="assets/plugins/jquery-flot/jquery.flot.animator.min.js"></script>
<script src="assets/plugins/skycons/skycons.js"></script>
<!-- END PAGE LEVEL PLUGINS --> 	
<!-- PAGE JS --> 	
<script src="assets/js/dashboard.js" type="text/javascript"></script> 
<!-- BEGIN CORE TEMPLATE JS --> 
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS -->
</body>
</html>