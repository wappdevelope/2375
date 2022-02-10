//when click on what we do, scrolls to the right position
var panel = document.querySelectorAll(".panel");
var item = document.querySelectorAll("#mainNav a");
console.log(panel[3].offsetTop)



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
console.log(panel[3].offsetTop-leadspace)
//scroll highlight the nav item while scrolling to that position
window.addEventListener("scroll", function(){
	if(window.scrollY>=panel[0].offsetTop){
		addHighlight(0);
		removeHighlight(1);
		removeHighlight(2);
		removeHighlight(3);

	}
	if(window.scrollY>panel[1].offsetTop-leadspace){
		addHighlight(1);
		removeHighlight(0);
		removeHighlight(2);
		removeHighlight(3);

	}
	if(window.scrollY>panel[2].offsetTop-leadspace){
		addHighlight(2);
		removeHighlight(0);
		removeHighlight(1);
		removeHighlight(3);
		console.log(window.scrollY,"aaaa")

	}
	if(window.scrollY>=panel[3].offsetTop-leadspace){
		addHighlight(3);
		removeHighlight(0);
		removeHighlight(1);
		removeHighlight(2);
		console.log(window.scrollY,"fgfgfg")
	}
});





   