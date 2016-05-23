<?php 
	require_once 'include/config.php';
?>
<html>
<head>
	<title>Yehjob masterclass</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!--big header starts from here-->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="big_header">
	    <div class="container">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
          		<a href="index.php" class="navbar-brand"><img src="images/logo.png"></a>
	        </div>
	        <div class="collapse navbar-collapse">
	            <ul class="nav navbar-nav pull-left main_cod">
	                <li>
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">All Course<b class="caret"></b></a>
	                    <ul class="dropdown-menu multi-level">
	                        <li class="dropdown-submenu">
	                            <a href="<?php echo WEB_ROOT;?>learn_french.php" class="dropdown-toggle">French</a>
	                            <ul class="dropdown-menu">
	                                <li><a href="<?php echo WEB_ROOT;?>learn_french/french_grammer_description.php">French Grammar</a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_french/french_indepth_description.php">French In-depth Course  </a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_french/french_course_description.php">French course for beginners </a></li>
	                            </ul>
	                        </li>
	                        <li class="dropdown-submenu">
	                            <a href="<?php echo WEB_ROOT;?>learn_webechnologies.php" class="dropdown-toggle">Web Technologies</a>
	                            <ul class="dropdown-menu">
	                                <li><a href="<?php echo WEB_ROOT;?>learn_webechnologies/learn_responsiveweb_description.php">Responsive Web Design</a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_webechnologies/learn_html_description.php">Advanced CSS3 and HTML5 </a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_webechnologies/learn_javascript_description.php">Introduction to JavaScript </a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_webechnologies/learn_wordpress_description.php">Intermediate WordPress Websites</a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_webechnologies/learn_cpanelwordpress_description.php">cPanel For WordPress: How To Use cPanel [Beginners]</a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_webechnologies/learn_webhosting_description.php">Web Hosting 101: Get Your Website Live on the Web</a></li>
	                            </ul>
	                        </li>
	                        <li class="dropdown-submenu">
	                            <a href="<?php echo WEB_ROOT;?>learn_mobileappdevelopment.php" class="dropdown-toggle">Mobile App Development</a>
	                            <ul class="dropdown-menu">
	                                <li><a href="<?php echo WEB_ROOT;?>learn_mobiledevelopment/learn_android_description.php">Android Developer Course - Build 6 Apps</a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_mobiledevelopment/learn_ios_description.php">iOS 9 Developer Course - Build 6 Apps</a></li>
	                            </ul>
	                        </li>
	                        <li class="dropdown-submenu">
	                            <a href="<?php echo WEB_ROOT;?>learn_programminglanguage.php" class="dropdown-toggle"> Programming Languages</a>
	                            <ul class="dropdown-menu">
	                                <li><a href="<?php echo WEB_ROOT;?>learn_programminglanguage/learn_java_description.php">The Complete Java Developer Course</a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_programminglanguage/learn_php_description.php">PHP for Beginners -Become a PHP Master</a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_programminglanguage/learn_csharp_description.php">C# Intermediate Programming</a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_programminglanguage/learn_jquery_description.php">Fundamentals of Jquery Training</a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_programminglanguage/learn_window_description.php">Essentials of Developing Windows Store Apps Using C#</a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_programminglanguage/learn_dotnet_description.php">Microsoft .NET Framework 4 Certification Training - Designing and Developing Web Applications</a></li>
	                            </ul>
	                        </li>
	                        <li class="dropdown-submenu">
	                            <a href="<?php echo WEB_ROOT;?>learn_digitaldesigning.php" class="dropdown-toggle">Digital Designing</a>
	                            <ul class="dropdown-menu">
	                                <li><a href="<?php echo WEB_ROOT;?>learn_digitaldesigning/learn_photoshop_description.php">Introduction to Photoshop </a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_digitaldesigning/learn_illustrator_description.php">Introduction to Illustrator </a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_digitaldesigning/learn_indesign_description.php">Introduction to InDesign</a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_digitaldesigning/learn_flash.php">Intermediate Flash</a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_digitaldesigning/learn_coreldrow_description.php">Coreldrow</a></li>
	                            </ul>
	                        </li>
	                        <li class="dropdown-submenu">
	                            <a href="<?php echo WEB_ROOT;?>learn_digitalmarketing.php" class="dropdown-toggle" >Digital Marketing</a>
	                            <ul class="dropdown-menu">
	                                <li><a href="<?php echo WEB_ROOT;?>learn_digitalmarketing/learn_seo_description.php">SEO Expert Certification </a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_digitalmarketing/learn_smm_description.php">Social Media Marketing (SMM)</a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_digitalmarketing/learn_marketing_description.php">Single Certification Marketing Courses</a></li>
	                                <li><a href="<?php echo WEB_ROOT;?>learn_digitalmarketing/learn_onlinemarketing_description.php">Online Marketing</a></li>
	                            </ul>
	                        </li>
	                    </ul>
	                </li>
	            </ul>
	            <ul class="nav navbar-nav pull-right">
	            	<li>
	          			<a href="<?php echo WEB_ROOT;?>catalog.php">Catalog</a>
	          		</li>
	            </ul>
	        </div>
	    </div>
	</div>
	<!--modal for login starts from here-->
		<div id="login" class="modal fade">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                    <h4 class="modal-title">Login</h4>
	                </div>
	                <div class="modal-body col-xs-12 modal_new">
	                    <div class="col-xs-12 form-group">
	                    	<label class="col-xs-12 col-sm-3">Email id :</label>
	                    	<div class="col-xs-12 col-sm-9">
	                    		<input type="email" placeholder="Enter your email id" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="col-xs-12 form-group">
	                    	<label class="col-xs-12 col-sm-3">Password</label>
	                    	<div class="col-xs-12 col-sm-9">
	                    		<input type="password" placeholder="Enter your password" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="col-xs-12 form-group">
	                    	<label class="col-xs-12 col-sm-3"></label>
	                    	<div class="col-xs-12 col-sm-9">
	                    		<button class="btn_log">Login</button>
	                    		<a class="btn_log" href="#signin" data-toggle="modal" data-dismiss="modal" >Sign</a>
	                    	</div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <div class="col-xs-12 log_in_a">
							<p class="pull-left">
								Forgotten your Password ? 
								<a id="click_password" href="#">Click here</a>
							</p>
							<div id="forget_password" style="display: none;">
								<div class="form-group forget_pas">
									<p>
										Enter the email address you used when you Registered
									</p>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email Address" name="input_email">
										<br>
										<input type="submit" class="btn_log pull-left" value="send" name="send">
									</div>
								</div>
							</div>
						</div>
	                </div>
	            </div>
	        </div>
	    </div>    
		<!--modal for login ends from here-->

		<!--modal for signin starts from here-->
		<div id="signin" class="modal fade">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                    <h4 class="modal-title">Login</h4>
	                </div>
	                <div class="modal-body col-xs-12 modal_new">
	                    <div class="col-xs-12 form-group">
	                    	<label class="col-xs-12 col-sm-3">First Name :</label>
	                    	<div class="col-xs-12 col-sm-9">
	                    		<input type="text" placeholder="Enter your name" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="col-xs-12 form-group">
	                    	<label class="col-xs-12 col-sm-3">Last Name :</label>
	                    	<div class="col-xs-12 col-sm-9">
	                    		<input type="text" placeholder="Enter your last name" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="col-xs-12 form-group">
	                    	<label class="col-xs-12 col-sm-3">Email :</label>
	                    	<div class="col-xs-12 col-sm-9">
	                    		<input type="email" placeholder="Enter your email" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="col-xs-12 form-group">
	                    	<label class="col-xs-12 col-sm-3">Password :</label>
	                    	<div class="col-xs-12 col-sm-9">
	                    		<input type="password" placeholder="Enter your password" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="col-xs-12 form-group">
	                    	<label class="col-xs-12 col-sm-3">Confirm password :</label>
	                    	<div class="col-xs-12 col-sm-9">
	                    		<input type="text" placeholder="Confirm your password" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="col-xs-12 form-group">
	                    	<label class="col-xs-12 col-sm-3"></label>
	                    	<div class="col-xs-12 col-sm-9">
	                    		<button class="btn_log">Sign In</button>
	                    		<a class="btn_log" href="#login" data-toggle="modal" data-dismiss="modal">Login</a>
	                    	</div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                </div>
	            </div>
	        </div>
	    </div>    
		<!--modal for signin ends from here-->
	<!--big header ends from here-->
	<section id="banner">
		<div class="bg-img"></div>
		<div class="container">
			<div class="banner_inner banner_below_outer text-center">
				<h2>What course will your life take?</h2>
				<p>
					 Own your future by learning new skills online 
				</p>
				<div class="search_bar">
					<input type="text" placeholder="Search" class="form-control"><i class="fa fa-search" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</section>	
	<!--Banner section ends from here-->