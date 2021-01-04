
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>我的主页</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	

  

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body style="background-image: url(images/bg_img.jpg);">
	
	<div id="fh5co-main">
		<div class="fh5co-tab-wrap">
			<ul class="fh5co-tab-menu">
				<li class="active"><a href="#" data-tab="1"><span class="icon icon-glass"></span><span class="menu-text">Profile</span></a></li>
				<li><a href="#" data-tab="2"><span class="icon icon-graduation-cap"></span><span class="menu-text">Education</span></a></li>
				<li><a href="#" data-tab="3"><span class="icon icon-black-tie"></span><span class="menu-text">Experience</span></a></li>
				<li><a href="#" data-tab="4" data-pie="yes"><span class="icon icon-fighter-jet"></span><span class="menu-text">Skills</span></a></li>
			</ul>
			<div class="fh5co-tab-content active" data-content="1">
				<div class="fh5co-content-inner text-center">
					<div class="row row-bottom-padded-sm">
						<div class="col-md-12">
							<figure>
							<?php
							$user_name=$_POST["user_name"];
							$user_pw=$_POST["user_pw"];
							$user_name2=$user_name."\n";
							$user_pw2=$user_pw."\n";
							//登录是否成功标记位：0不成功，1成功
							$tag=0;
							$file=@fopen("user_info.txt","r");
							if($file){
							while(!feof($file)){
							//循环，文件指针下移
							$buffer=fgets($file,4096);
							if($buffer==$user_name2){
							@next($file);
							$buffer=fgets($file,4096);
							if($buffer==$user_pw2){
					
								@next($file);
								$image=fgets($file,4096);
								echo"<img src=".$image." align=middle width=150 height=150 >";
								$tag=1;
							break;
							}
							else{
							@next($file);
							@next($file);
							}	
            
							}
							else{
							@next($file);
							@next($file);
							@next($file);
							}
							}
							if($tag==0){
								echo"<script> alert('您输入的用户名和密码不正确，请重新输入');parent.location.href='login.html'; </script>";
							}
							fclose($file);
							}
							?>
							
								
							</figure>
							<h1>
							<?php
							$user_name=$_POST["user_name"];
							$user_pw=$_POST["user_pw"];
							$user_name2=$user_name."\n";
							$user_pw2=$user_pw."\n";
							//登录是否成功标记位：0不成功，1成功
							$tag=0;
							$file=@fopen("user_info.txt","r");
							if($file){
							while(!feof($file)){
							//循环，文件指针下移
							$buffer=fgets($file,4096);
							if($buffer==$user_name2){
							@next($file);
							$buffer=fgets($file,4096);
							if($buffer==$user_pw2){
								echo"$user_name2";
								@next($file);
								$image=fgets($file,4096);
								$tag=1;
							break;
							}
							else{
							@next($file);
							@next($file);
							}	
            
							}
							else{
							@next($file);
							@next($file);
							@next($file);
							}
							}
							if($tag==0){
								echo"<script> alert('您输入的用户名和密码不正确，请重新输入');parent.location.href='login.html'; </script>";
							}
							fclose($file);
							}
							?>
							</h1>
							<p>I come from the computer school of <a href="http://www.whu.edu.cn/" target="_blank">Wuhan university</a>.I am a student grade 2016.<a href="#"></br>Click here to write more items about your personal information</a> </p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 fh5co-counter">
							<div class="fh5co-number fh5co-left">1</div>
							<div class="fh5co-text">
								<h3 class="border-bottom">Years of experience in Web Design</h3>
								
							</div>
						</div>
					</div>
					<ul class="fh5co-social">
						<li><a href="#"><i class="icon-envelope"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-instagram"></i></a></li>
						<li><a href="#"><i class="icon-google"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="fh5co-tab-content" data-content="2">
				<div class="fh5co-content-inner">
					<div class="row">
						<div class="col-md-12">
							<p>My education history</p>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-graduation-cap"></i>
								</div>
								<div class="fh5co-text">
									<h2>2004-2010</h2>
									<p>My Primary School</p>
								</div>
							</div>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-graduation-cap"></i>
								</div>
								<div class="fh5co-text">
									<h2>2010-2016</h2>
									<p>My Middle School</p>
								</div>
							</div>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-graduation-cap"></i>
								</div>
								<div class="fh5co-text">
									<h2>2016-Present</h2>
									<p>My College</p>
								</div>
							</div>

						</div>
						
					</div>
				</div>
			</div>

			<div class="fh5co-tab-content" data-content="3">
				<div class="fh5co-content-inner">
					<div class="row">
						<div class="col-md-12">

							<p>I have the privilege to work with these cool companies.</p>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-black-tie"></i>
								</div>
								<div class="fh5co-text">
									<h2>20016 - Present</h2>
									<h3>xxx  Inc.</h3>
									<p>The working experience is xxxxxxxxxxx</p>
								</div>
							</div>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-black-tie"></i>
								</div>
								<div class="fh5co-text">
									<h2>2013-2016</h2>
									<h3>xxx  School</h3>
									<p>The working experience is xxxxxxxxxxx</p>
								</div>
							</div>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-black-tie"></i>
								</div>
								<div class="fh5co-text">
									<h2>2010-2013</h2>
									<h3>xxx  School</h3>
									<p>The working experience is xxxxxxxxxxx</p>
								</div>
							</div>

						</div>
						
					</div>
				</div>
			</div>
			<div class="fh5co-tab-content" data-content="4">
				<div class="fh5co-content-inner">
					<div class="row">
						<div class="col-md-12">
							<p>I keep on studying and these are the skills that I have or I will master in the future!</p>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="80"><span><strong>HTML5</strong>80%</span></div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="85"><span><strong>CSS3</strong>85%</span></div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="50"><span><strong>jQuery</strong>50%</span></div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="75"><span><strong>PHP</strong>75%</span></div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="80"><span><strong>MySQL</strong>80%</span></div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="50"><span><strong>AngularJS</strong>50%</span></div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<footer id="fh5co-footer">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<small>
						&copy; 2017 Haus. All Rights Reserved. <span class="fh5co-author">
						
					</small>
				</div>
			</div>
		</footer>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Easy PieChart -->
	<script src="js/jquery.easypiechart.min.js"></script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

