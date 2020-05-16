function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  //document.getElementById("mySidebar").style.display = "";
  document.getElementById("mySidebar").style.marginTop = "100px";
 document.getElementById("main-control").style.marginLeft = "250px";
 document.getElementById("main-control").style.width="80.9%";
 document.getElementByClassName("block1").style.width="27.8%";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("main-control").style.marginLeft = "0";
  document.getElementById("main-control").style.width="99.5%";
  document.getElementByIdClassName("block1").style.width="30.33%";
}
function maincontent()
{
	 document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("main-control").style.marginLeft = "0";
  document.getElementById("main-control").style.width="99.5%";
//  document.getElementByIdClassName("block1").style.width="30.33%";
}