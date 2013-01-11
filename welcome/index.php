<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Jahz Rojas | Social Media Design Guru</title>
        <link rel="stylesheet" href="../css/landing.css" type="text/css" media="all" />
        <script type="text/javascript" src="../js/jquery-1.8.0.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
				$("#landingpage-content").css("margin-top", ( ($(window).innerHeight()/2) - ( $("#landingpage-content").height()/2 ) ) );
				
				$("div.clickable").click( function(e) {
					if(this.id == "enter-site") { window.name = "visitor"; }
					window.location = $(this).attr("url"); 
					e.preventDefault(); 
				})
            });
        </script>
    </head>
    <body>
        <div class="wrapper">
			<div id="landingpage-content">
				<div id="avatar"></div>
				<div id="info">
						<div id="title"></div>
						<div class="separator"></div>
						<div id="buttons">
							<div id="fb" class="sn-icon clickable" url="https://www.facebook.com/jrojascollections"></div>
							<div id="twitter" class="sn-icon clickable" url="https://twitter.com/imjahz"></div>
							<div id="in" class="sn-icon clickable" url="http://ph.linkedin.com/in/imjahz"></div>
							
							<div id="enter-site" class="clickable" url="/"></div>
						</div>
						<div class="separator"></div>
						<p id="email">contact@jahzrojas.com</p>
				</div>
			</div>
        </div>
    </body>
</html>