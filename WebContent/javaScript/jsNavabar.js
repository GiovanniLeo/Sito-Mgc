// JavaScript Document
function checkWidth()
{
  "use strict";
  var width= window.innerWidth|| document.documentElement.clientWidth || document.body.clientWidth;
  
  if(width <= 760) 
  {
	 showAndHideElement();
   }
   else
   {
    document.getElementById("toggle").stye.display="none";
   }
}

function  showAndHideElement()
{
   "use strict";
   var menu = document.getElementById("toggle");
   var item2 = document.getElementById("item2");
   var item3 = document.getElementById("item3");
   var item4 = document.getElementById("item4");
   var item5 = document.getElementById("item5");
   
   menu.style.display="inline";
   item2.style.display="none";
   item3.style.display="none";
   item4.style.display="none";
   item5.style.display="none";
   
}