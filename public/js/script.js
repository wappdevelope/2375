
//when click on what we do, scrolls to the right position
var panel = document.querySelectorAll(".panel");
var item = document.querySelectorAll("#mainNav a");




//switch panel function, onclick
function switchPanel(i){
	var position = panel[i].offsetTop
	window.scroll(0,position);
};

//add highlight function
function addHighlight(i){
	item[i].classList.add("highlight");
}

//remove highlight function+
function removeHighlight(i){
	item[i].classList.remove("highlight");
}
//lead space when scroll
var leadspace = 300;
//scroll highlight the nav item while scrolling to that position
window.addEventListener("scroll", function(){
	if(window.scrollY>=panel[0].offsetTop){
		addHighlight(0);
		removeHighlight(1);
		removeHighlight(2);
		removeHighlight(3);
		removeHighlight(4);

	}
	if(window.scrollY>panel[1].offsetTop-leadspace){
		addHighlight(1);
		removeHighlight(0);
		removeHighlight(2);
		removeHighlight(3);
		removeHighlight(4);

	}
	if(window.scrollY>panel[2].offsetTop-leadspace){
		addHighlight(2);
		removeHighlight(0);
		removeHighlight(1);
		removeHighlight(3);
		removeHighlight(4);


	}
	if(window.scrollY>panel[3].offsetTop-leadspace){
		addHighlight(3);
		removeHighlight(0);
		removeHighlight(1);
		removeHighlight(2);
		removeHighlight(4);
	}
	if(window.scrollY>=panel[4].offsetTop-leadspace){
		addHighlight(4);
		removeHighlight(0);
		removeHighlight(1);
		removeHighlight(2);
		removeHighlight(3);
	}

});


function hideMenu(){
	let menuOpen = document.querySelector('#menu-toggle').checked;

	if(menuOpen = true){
	  document.querySelector('#menu-toggle').checked = false;
	}
}
window.addEventListener("scroll", hideMenu);



