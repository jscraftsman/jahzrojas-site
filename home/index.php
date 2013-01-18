<?php
	$testimony1 = "Jahz, was very quick and skilled in creating our company social pages. Really great work! Would definitely recommend her to anyone who is looking to get that handled by a professional.";
	$author1 = "~ Nichlas Hansen";
	$website1 = "www.MagnumSalesVideos.com";
	
	$testimony2 = "The best graphic designer ever. I will use her again in the future.";
	$author2 = "~ Christopher Sylvia";
	$website2 = "www.ExADF.com.au";
	
	$testimony3 = "Jahz Rojas has exceed expectations at every turn. She has a good understanding of the social  media  stage  and how they all interlink. Will definately rehire her going forward.";
	$author3 = "~ Sanjay S. Pandaram";
	$website3 = "www.TradieClassifieds.com.au";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Jahz Rojas | Social Media Design Guru</title>
        <link rel="stylesheet" href="../css/home.css" type="text/css" media="all" />
        <script type="text/javascript" src="../js/jquery-1.8.0.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
				$("div.clickable").click( function(e) {
					window.location = $(this).attr("url"); 
					e.preventDefault(); 
				})
            });
        </script>
    </head>
    <body>
        <div class="wrapper">
			<div id="header">
				<ul>
					<li><a href="#" class="header-link" id="service">SERVICES</a></li>
					<li><a href="#" class="header-link" id="folio">FOLIO</a></li>
					<li><a href="/home"><img src="../img/logo.png" id="logo" /></a></li>
					<li><a href="#" class="header-link" id="blog">BLOG</a></li>
					<li><a href="#" class="header-link" id="contact">CONTACT</a></li>
				</ul>
			</div>
			<div id="content">
				<div id="home-body"></div>
				<div class="separator-1"></div>
				<div>
					<p id="quote"> "If you can’t excel with talent, triumph with effort."</p>
					<p id="author">-Dave Weinbaum</p>
				</div>
				<div class="separator-1"></div>
				<div id="features">
					<p><img src="../img/featured.png"/></p>
					<p><a href="#">see more...</a></p>
				</div>
				<div id="about-me">
					<div id="info">
						<p class='summary1'>A LITTLE ABOUT ME:</p>
						<p class='summary1'>"One of the greatest things about being a
							designer with an engineering background
							is that not only can I take part of the 
							aesthetical aspect of a project, but can 
							also fully understand and take care of the 
							highly technical aspects of it."</p>
						<img src="../img/jahz-image.png"/>
						
						<div id='summary-div'>
							<p class="summary2">
								Howdie! I’m Jahz, 19 and a Filipino feelance graphics designer. 
								I’ve lived in Southern Leyte most of my life minus a brief stay in
								Cebu City while chasing down a cool Computer Engineering - 
								Networks degree fom the University of San Carlos.	
							</p>
							
							<p class="summary2">
								I spend more than 12 hours in front of my laptop every day doing
								lots of stuff which includes hopping to different Social Media
								sites and graphics/automobile/health/architecture-related blogs.
								I also read Yahoo News daily. 
							</p>
							
							<p class="summary2">
								Also, you can view and download my résumé on the link below
								and see what I’ve been crazy doing about:
							</p>
							
							<div id="download"><a href="#"><img src="../img/download.png"/></a></div>
						</div>
						
						<div id="site-links">
							<p>You can contact or <strike>stalk</strike> follow me on the following sites:</p>
							<div>
								<div class="left">
									<div id="facebook" class="sn-icon clickable" url="https://www.facebook.com/jrojascollections"></div>
									<div id="twitter" class="sn-icon clickable" url="https://twitter.com/imjahz"></div>
									<div id="pinterest" class="sn-icon clickable" url='#'></div>
									<div id="skype" class="sn-icon clickable" url="#"></div>
									<div id="dribble" class="sn-icon clickable" url="#"></div>
								</div>
								<div class="right">
									<div id="linkedin" class="sn-icon clickable" url="http://ph.linkedin.com/in/imjahz"></div>
									<div id="googleplus" class="sn-icon clickable" url="#"></div>
									<div id="youtube" class="sn-icon clickable" url="#"></div>
									<div id="behance" class="sn-icon clickable" url="#"></div>
									<div id="email" class="sn-icon clickable" url="#"></div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			
				<div id="testimonies">
					<div>
						<p>"<?php echo $testimony1; ?>"</p>
						
						<p class='align-right' style="right: 652px; ; bottom: 50px;"><?php echo $author1; ?></p>
						<p class='align-right' style="right: 652px;"><?php echo $website1; ?></p>
					</div>
					<div>
						<br />
						<p>"<?php echo $testimony2; ?>"</p>
						
						<p class='align-right' style="right: 326px; ; bottom: 50px;"><?php echo $author2; ?></p>
						<p class='align-right' style="right: 326px;"><?php echo $website2; ?></p>
					</div>
					<div>
						<p>"<?php echo $testimony3; ?>"</p>
						
						<p class='align-right' style="right: 0; bottom: 50px;"><?php echo $author3; ?></p>
						<p class='align-right' style="right: 0;"><?php echo $website3; ?></p>
					</div>
				</div>
			</div>
			
			<div id="footer">
				<div id="footer-content">
					<div class="box">
						<p class='sub-title'>Recognitions:</p>
					</div>
					<div class="box">
						<p class='sub-title'>Transacts:</p>
						<div id='transact-options'><img src='../img/transact-options.png'/></div>
					</div>
					<div class="box">
						<p class='sub-title'>Connects:</p>
						<div id="buttons">
							<div id="fb" class="sn-icon clickable" url="https://www.facebook.com/jrojascollections"></div>
							<div id="twitter" class="sn-icon clickable" url="https://twitter.com/imjahz"></div>
							<div id="skype" class="sn-icon clickable" url="skype:imjahz"></div>
							<div id="in" class="sn-icon clickable" url="http://ph.linkedin.com/in/imjahz"></div>
						</div>
						<div id='qrcode' class="right"><img src='../img/qrcode.png'/></div>
						<p class='passage'>I can do all things throught Christ who strengthens me.</p>
						<p class='from'>Philippians 4:13</p>
					</div>

					<div class="separator-3"></div>
					<div id="footer-bottom">
						<div class="left"><p>
							<a href='/home'>Home</a> | 
							<a href='#'>Services</a> | 
							<a href='#'>Folio</a> | 
							<a href='a'>Blog</a> | 
							<a href='a'>Contact</a>
							</p></div>
						<div class="right"><p>Copyright © 2013. Jahz Rojas. All Rights Reserved</p></div>
					</div>
				</div>
			</div>
        </div>
    </body>
</html>