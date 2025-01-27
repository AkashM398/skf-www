<?php

header('Strict-Transport-Security: max-age=16070400; includeSubDomains');
header('X-Frame-Options: deny');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');

?>
<!DOCTYPE html>
<html lang="en">

<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-54883827-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '467164280320951'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=467164280320951&ev=PageView&noscript=1"/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <title>Security Knowledge Framework - Demo</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Ruda' rel='stylesheet' type='text/css'>
	
	<script src="js/modernizr-2.6.2.min.js"></script>
	
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="gradient demo">
	
<script>
  ((window.gitter = {}).chat = {}).options = {
    room: 'Security-Knowledge-Framework/Lobby'
  };
</script>
<script src="https://sidecar.gitter.im/dist/sidecar.v1.js" async defer></script>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
		
            <!-- Brand and toggle get grouped for better mobile display -->
			
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Start guide</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                </button> 
                <a class="navbar-brand" href="#page-top">
					<img src="img/logos/logo.svg" width="35" height="35" />
					<span class="desktop">Security Knowledge Framework</span>
					<span class="mobile">SKF</span>
				</a>
            </div>

            <!-- Navigation -->
			
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="demo.php">Demo</a>
                    </li>
                    <li class="active">
                        <a href="talks.php">Talks</a>
                    </li>
                    <li>
                        <a href="http://skf.readme.io">Documentation</a>
                    </li>
                    <li>
                        <a href="https://github.com/blabla1337/skf-flask">Download</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	
	<!-- News -->
	
	<section id="headline">
		<div class="container">
				<h1>Our talks</h1>
		</div>	
	</section>	

	<!-- Details -->
	
	<section id="demo">
		<div class="container">
			<div class="leftCol">
				<h2>Past, present and future</h2>
				<p>We are active members of the OWASP community in the Netherlands and we are giving presentations about security and the Security Knowledge Framework around the world, are you with a company or an organisation and you have an event where we would be a great fit? Feel free to get in touch!</p>
				<p><a href="https://www.linkedin.com/profile/view?id=140628259" target="_blank">Glenn ten Cate</a> & <a href="https://www.linkedin.com/profile/view?id=288596459" target="_blank">Riccardo ten Cate</a></p>
				<h3>You may know us from ...</h3>
				<p>Since the first release of the framework early 2015 we have given talks at the following companies and events, we've been given amazing feedback motivating us to keep improving and finetuning SKF. We love engaging with the community and spreading the sense of making the web secure, by design.</p>
				
				<!-- Start Events -->
				
				<div id="pastEvents">
					<ul>
								<li>
							<span class="name">Tweakers Dev summit</span>
							<span class="location">Utrecht, NL</span>
							<span class="date">
								<span class="day">15</span>
								<span class="month">02</span>
								<span class="year">2018</span>
							</span>
						</li>
						<li>
							<span class="name">Dutch Cyber Warfare Community</span>
							<span class="location">Diemen, NL</span>
							<span class="date">
								<span class="day">10</span>
								<span class="month">10</span>
								<span class="year">2017</span>
							</span>
						</li>	
						<li>
							<span class="name">OWASP Poland day</span>
							<span class="location">Poland</span>
							<span class="date">
								<span class="day">02</span>
								<span class="month">10</span>
								<span class="year">2017</span>
							</span>
						</li>		
						<li>
							<span class="name">Security Espresso</span>
							<span class="location">Bucharest</span>
							<span class="date">
								<span class="day">28</span>
								<span class="month">09</span>
								<span class="year">2017</span>
							</span>
						</li>		
						<li>
							<span class="name">SWIFT</span>
							<span class="location">Belgium</span>
							<span class="date">
								<span class="day">15</span>
								<span class="month">06</span>
								<span class="year">2017</span>
							</span>
						</li>			
							<li>
							<span class="name">GOTO</span>
							<span class="location">Amsterdam, NL</span>
							<span class="date">
								<span class="day">13</span>
								<span class="month">06</span>
								<span class="year">2017</span>
							</span>
						</li>	
						<li>
							<span class="name">Devoxx</span>
							<span class="location">Belgium</span>
							<span class="date">
								<span class="day">9</span>
								<span class="month">11</span>
								<span class="year">2016</span>
							</span>
						</li>
						<li>
							<span class="name">OWASP NL Chapter meeting</span>
							<span class="location">The Hague University of Applied Sciences, NL</span>
							<span class="date">
								<span class="day">18</span>
								<span class="month">02</span>
								<span class="year">2016</span>
							</span>
						</li>
						<li>
							<span class="name">BlackhatEU, Arsenal</span>
							<span class="location">Amsterdam, NL</span>
							<span class="date">
								<span class="day">12</span>
								<span class="month">10</span>
								<span class="year">2015</span>
							</span>
						</li>
						<li>
							<span class="name">DevSecCon</span>
							<span class="location">London, UK</span>
							<span class="date">
								<span class="day">22</span>
								<span class="month">09</span>
								<span class="year">2015</span>
							</span>
						</li>
						<li>
							<span class="name">OWASP Summit Appsec</span>
							<span class="location">San Francisco, USA</span>
							<span class="date">
								<span class="day">21</span>
								<span class="month">09</span>
								<span class="year">2015</span>
							</span>
						</li>
						<li>
							<span class="name">Holland Web Week</span>
							<span class="location">Groningen, NL</span>
							<span class="date">
								<span class="day">16</span>
								<span class="month">09</span>
								<span class="year">2015</span>
							</span>
						</li>
						<li>
							<span class="name">Hactivity</span>
							<span class="location">Budapest, HU</span>
							<span class="date">
								<span class="day">09</span>
								<span class="month">09</span>
								<span class="year">2015</span>
							</span>
						</li>
						<li>
							<span class="name">HITB / Haxpo</span>
							<span class="location">Amsterdam, NL</span>
							<span class="date">
								<span class="day">26</span>
								<span class="month">08</span>
								<span class="year">2015</span>
							</span>
						</li>
						<li>
							<span class="name">BSides</span>
							<span class="location">Manchester, UK</span>
							<span class="date">
								<span class="day">25</span>
								<span class="month">08</span>
								<span class="year">2015</span>
							</span>
						</li>
						<li>
							<span class="name">Devops</span>
							<span class="location">Amsterdam, NL</span>
							<span class="date">
								<span class="day">24</span>
								<span class="month">06</span>
								<span class="year">2015</span>
							</span>
						</li>
						<li>
							<span class="name">Source Conference</span>
							<span class="location">Dublin, IR</span>
							<span class="date">
								<span class="day">07</span>
								<span class="month">06</span>
								<span class="year">2015</span>
							</span>
						</li>
						<li>
							<span class="name">Confidence</span>
							<span class="location">Krakow, PL</span>
							<span class="date">
								<span class="day">25</span>
								<span class="month">05</span>
								<span class="year">2015</span>
							</span>
						</li>
	
					</ul>
				</div> 
				
				<!-- End Events -->
				
			</div>
			<div class="rightCol">
				<div class="wrap login">
					<h3>Next up:</h3>
					
					<!-- Start Upcoming Event -->
					
					<div id="calendar">
						<div class="event">
							<div class="name">OWASP AppSec 2019</div>
							<div class="row top">
								<div class="left">When:</div>
								<div class="right">
									<span class="day">27</span>
									<span class="month">09</span>
									<span class="year">2019</span>
								</div>
							</div>
							<div class="row">
								<div class="left">Where:</div>
								<div class="right">
									<div class="location">Amsterdam RAI, NL</div>
								</div>
							</div>
							<div class="row web">
								<!-- <a class="btn solid" href="https://www.owasp.org/index.php/BeNeLux_OWASP_Day_2016">more information</a> -->
							</div>
						</div>
					</div>
					
					<!-- End Upcoming Event -->
					
					<div id="shamelessPlug">
						<h3>In-House Workshops</h3>
						<div class="inner">
							<p>We also provide in-house workshops to get the most out of SKF in your teams development workflow.</p>
							<p>If your dev team is interested in learning how to detect and eliminate the many weak spots out of your projects, feel free to get in touch!</p>
						</div>
						<div class="contact">
							<div class="member">
								<div class="avatar">
									<img src="img/team/glenn-ten-cate-hat.jpg" width="300" height="300" alt="Glenn ten Cate" />
								</div>
								<div class="info">
									<p><span class="square"><i class="fa fa-linkedin"></i></span> <a href="https://www.linkedin.com/profile/view?id=140628259" class="linkedin" target="_blank">Glenn ten Cate</a></p>
								</div>
							</div>
							<div class="member">
								<div class="avatar">
									<img src="img/team/riccardo-ten-cate.jpg" width="300" height="300" alt="Riccardo ten Cate" />
								</div>
								<div class="info">
									<p><span class="square"><i class="fa fa-linkedin"></i></span> <a href="https://www.linkedin.com/profile/view?id=288596459" class="linkedin" target="_blank">Riccardo ten Cate</a></p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
		
	<!-- Footer -->
	
	<footer>
		<div class="container top">
			<div class="col licence">
				Security knowledge framework is licensed under the <a href="http://www.gnu.org/licenses/agpl-3.0.html">GNU 3.0 licence</a>
			</div>
			<div class="col links">
				<ul>
					<li><img src="img/logos/owasp-icon-white.svg" width="20" height="20" /><a href="https://www.owasp.org/index.php?title=OWASP_Security_Knowledge_Framework">OWASP Wiki for SKF</a></li>
					<li><i class="fa fa-github"></i> <a href="https://github.com/blabla1337/skf-flask">Github SKF flask python</a></li>
				</ul>
			</div>
		</div>
		<div class="container footer">
			&copy; 2019 Security Knowledge Framework
		</div>
	</footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/freelancer.js"></script>
	
</body>
<!--<img src="img/scrum.png" style="visibility:hidden;" width="1px;"/>-->
</html>
