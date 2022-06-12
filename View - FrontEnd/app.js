/**
 * This first part about the question field. 
 */
const q1 = document.querySelector(".question1");
const e1 = document.querySelector(".en1");
q1.addEventListener('click', function () {

	if (e1.style.display === "none") {
		e1.style.display = "block";
		q1.innerHTML = "Hide"
	}
	else {
		e1.style.display = "none";
		q1.innerHTML = "How Long you wanna ?";
	}
});
const q2 = document.querySelector(".question2");
const e2 = document.querySelector(".en2");
q2.addEventListener('click', function () {

	if (e2.style.display === "none") {
		e2.style.display = "block";
	}
	else {
		e2.style.display = "none";
	}
});
const q3 = document.querySelector(".question3");
const e3 = document.querySelector(".en3");
q3.addEventListener('click', function () {

	if (e3.style.display === "none") {
		e3.style.display = "block";
	}
	else {
		e3.style.display = "none";
	}
});

/**
 * this about the send msg btn 
 */

/* const btn  = document.querySelector('.search-field button');
const div = document.querySelector('.search-field');
btn.addEventListener('click' ,function(){
	const searchF = document.querySelector('.search-field input');
	btn.innerHTML = "Next";
	searchF.style.display = "none";
	const newE = document.createElement('input');
	newE.setAttribute('class' , 'search-field input');
	btn.style.width = "60px";
	btn.style.height = "30px";
	btn.style.marginTop = "20px";
	div.append(newE);
}); */