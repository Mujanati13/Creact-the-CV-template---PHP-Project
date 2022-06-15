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

const btnSend = document.getElementById('btn-send');
const btnnext = document.getElementById('btn-sends');
const thanks = document.querySelector('.thanks-div');
const secondSearchf = document.querySelector('.B');
 
function btnSendfun(){
	const searchF = document.querySelector('.search-field');
	setTimeout(() => {
		searchF.style.display = 'none';
		secondSearchf.style.display = 'block';
	}, 500);
}

function btnNextStep(){
	setTimeout(() => {
		secondSearchf.style.display = 'none';
		thanks.style.display = 'block';
	}, 500);
}

btnnext.addEventListener('click' , btnNextStep)
btnSend.addEventListener('click' , btnSendfun)
