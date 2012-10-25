<!DOCTYPE html> 
<html>

<head>
	<title>DJ PROS</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />

	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 

	
<body> 

<!-- Start of first page: #one -->
<div data-role="page" id="one">

	<div data-role="header">
		<h1>DJ PROS</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<center><h2>Welcome To DJ PROS(!)<span id="username"></span></h2></center>
		
		<center><p>insert stuff</p>	</center>

		<h3>                   </h3>	
		<p><a href="#popup" data-role="button" data-rel="dialog" data-transition="pop">Help</a></p>
	</div><!-- /content -->
	
		<?php include('footer.php'); ?>
</div>
	
</div><!-- /page one -->

<!-- Start of third page: #popup -->
<div data-role="page" id="popup">

	<div data-role="header" data-theme="e">
		<h1>HELP</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="d">	
		<h2>Help</h2>
		<center><p>THIS IS AN EXPLANATION OF HOW DJ PROS WORKS OR SOMETHING</p></center>
		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Back</a></p>	
	</div><!-- /content -->
	
		<?php include('footer.php'); ?>
</div>
</div><!-- /page popup -->

<script type="text/javascript">
// This handles all the swiping between each page. You really
// needn't understand it all.
$(document).on('pageshow', 'div:jqmData(role="page")', function(){

     var page = $(this), nextpage, prevpage;
     // check if the page being shown already has a binding
      if ( page.jqmData('bound') != true ){
            // if not, set blocker
            page.jqmData('bound', true)
            // bind
                .on('swipeleft.paginate', function() {
                    console.log("binding to swipe-left on "+page.attr('id'));
                    nextpage = page.next('div[data-role="page"]');
                    if (nextpage.length > 0) {
                       $.mobile.changePage(nextpage,{transition: "slide"}, false, true);
                        }
                    })
                .on('swiperight.paginate', function(){
                    console.log("binding to swipe-right "+page.attr('id'));
                    prevpage = page.prev('div[data-role="page"]');
                    if (prevpage.length > 0) {
                        $.mobile.changePage(prevpage, {transition: "slide",
	reverse: true}, true, true);
                        };
                     });
            }
        });

</script>

</body>
</html>