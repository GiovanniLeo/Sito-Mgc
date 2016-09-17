// JavaScript Document
function showMenu()
{
  "use strict";
  var mainList = document.getElementById('mainList');
  var elementToHide = document.getElementById('elementToHide');
  mainList.classList.toggle("showListonClick");
  elementToHide.classList.toggle("hideElement");
   
}
