<!DOCTYPE html>
<!-- Code adapted from http://www.codeforest.net/jquery-mobile-tutorial-basics, and footer from CS147 Week 5 lab -->
<!-- URL: http://stanford.edu/~dpitt1/cgi-bin/JQM/ -->
<html>
    <head>
    <title>jQuery Mobile Sandbox</title>
    <meta charset="UTF-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.css" />
	<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.js"></script>

</head>
<body>
<div data-role="page" id="page">
<div id="content">
    	<a href="index.php" data-role="button" id="homebutton" class="topButton"></a>
      	<a href="settings.php" data-role="button" id="settingsbutton" class="topButton"></a>
    	<center><h2>Welcome to the SETTINGS PAGE<br/>Got Bugs?</h2></center>

<div data-role="collapsible">
		   <h3>Validate Venue</h3>
		   		<div data-role="fieldcontain">
		<label for="flip-s">Use GPS to validate venue:</label>
		<select name="flip-s" id="flip-s" data-role="slider">
			<option value="off">No</option>
			<option value="on">Yes</option>
		</select>
	    </div>
				<a href="#" data-role="button" data-icon="star">Validate Now</a>
		</div>
		
		<div data-role="collapsible">
		   <h3>VIP Mode</h3>
		  		   		<div data-role="fieldcontain">
		<label for="flip-s">Turn On Vip Mode</label>
		<select name="flip-s" id="flip-s" data-role="slider">
			<option value="off">No</option>
			<option value="on">Yes</option>
		</select>
	    </div>
		</div>

	<div data-role="footer" data-id="samebar" id="footerbar" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" id="navbar" data-grid="c">
			<ul>
				<li><a href="bedj.php" id="home">BE THE DJ</a></li>
				<li><a href="viewdj.php" id="key">VIEW THE DJ</a></li>
			</ul>
		</div>
	</div><!--Footer-->
</div><!--Content-->
</div>
</body>
    <script src="mainscripts.js"></script>
</html>

