<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Jahz Rojas | Social Media Design Guru</title>
        <link rel="stylesheet" href="css/home.css" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
		<script type="text/javascript" src="js/cookie.js"></script>
        <script type="text/javascript">
			
			function checkVisit(){
				var visitor = getCookie("visitor");
				if (visitor == null && visitor == undefined){
					if(window.name == "" || window.name == undefined){
						window.location.href="/welcome";
					}else{
						setCookie("visitor", window.name, 1);
					}
				}
			}
			
			checkVisit();
			
            $(document).ready(function(){
				
            });
        </script>
    </head>
    <body>
        <div class="wrapper">
			<div id="header">
				<ul>
					<li><a href="#" class="header-link" id="service">SERVICES</a></li>
					<li><a href="#" class="header-link" id="folio">FOLIO</a></li>
					<li><a href="/"><img src="img/logo.png" id="logo" /></a></li>
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
			</div>
			
        </div>
    </body>
</html>