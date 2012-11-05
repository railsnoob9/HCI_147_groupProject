/* Main script for JQM version of DJ PROS(!) */


$("#homebutton").width("60px");
$("#homebutton").height("60px");
$("#settingsbutton").width("60px").height("60px");


console.log("window width:" + $(window).width());
console.log("body height:" + $("body").height());

var windowH = $(window).height();
var windowW = $(window).width();

//console.log("ww" = 
//$("#header").height("" + (windowH * .20) + "px");

//$("#footerbar").height("" + (windowH * .30) + "px");
$("#navbar").height("" + (windowH * .20) + "px");
$("#content").height("" + (windowH * .70) + "px");

//$("[data-role=footer]").fixedtoolbar({ tapToggle: false });

