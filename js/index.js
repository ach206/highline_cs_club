    // Last Edited By: A. Camille Hall
    // Created By: A. Camille Hall
    // Date: 02.16.2019
    // Filename: index.js

		// shows or hides the drawer depending on the navIcon
		$(".fa-bars").click(function(event){
			$("#navLinks").attr("class", "showDrawer");
			$(".menuLinks").attr("class", "showMenuLinks");
			event.stopPropagation();
		});

		$("body").click(function(){
			$("#navLinks").removeClass("showDrawer");
			$(".showMenuLinks").attr("class", "menuLinks");

		});

// --------------function to loop through the images and hide them by default--------
		// let slideIndex = 0;
		// slideshow();

		// function slideshow() {

		// let slide = document.getElementsByClassName("slideImg");
		// let dial = document.getElementsByClassName("dial");
		// for(let i = 0; i < slide.length; i++) {
		// 	// hide slides one by one
		// 	slide[i].style.display = "none";
		// 	}

		// slideIndex++;
		// if (slideIndex > slide.length) {
		// slideIndex = 1
		// }

		// for(let i = 0; i < dial.length; i++) {
		// 	dial[i].className = dial[i].className.replace(" active", "");
		// 	// temporairly disables active styling until loop activates it
		// }

		// 	slide[slideIndex-1].style.display = "block";
		// 	dial[slideIndex-1].className += " active";
		// 	setTimeout(slideshow, 4000); /*Change image every 4 seconds*/
		// }// --------close slideshow function------

		// changes the icon when the drawer opens
		// $("#navIcon").on("click", function switchIcon(){
		// 	$("#navIcon").toggleClass("fa-bars fa-times");
		// });


		// Master DOManipulator v2 ------------------------------------------------------------
const items = document.querySelectorAll('.item'),
controls = document.querySelectorAll('.control'),
headerItems = document.querySelectorAll('.item-header'),
descriptionItems = document.querySelectorAll('.item-description'),
activeDelay = .76,
interval = 5000;

let current = 0;

const slider = {
init: () => {
  controls.forEach(control => control.addEventListener('click', (e) => { slider.clickedControl(e) }));
  controls[current].classList.add('active');
  items[current].classList.add('active');
},
nextSlide: () => { // Increment current slide and add active class
  slider.reset();
  if (current === items.length - 1) current = -1; // Check if current slide is last in array
  current++;
  controls[current].classList.add('active');
  items[current].classList.add('active');
  slider.transitionDelay(headerItems);
  slider.transitionDelay(descriptionItems);
},
clickedControl: (e) => { // Add active class to clicked control and corresponding slide
  slider.reset();
  clearInterval(intervalF);

  const control = e.target,
	dataIndex = Number(control.dataset.index);

  control.classList.add('active');
  items.forEach((item, index) => { 
	if (index === dataIndex) { // Add active class to corresponding slide
	  item.classList.add('active');
	}
  })
  current = dataIndex; // Update current slide
  slider.transitionDelay(headerItems);
  slider.transitionDelay(descriptionItems);
  intervalF = setInterval(slider.nextSlide, interval); // Fire that bad boi back up
},
reset: () => { // Remove active classes
  items.forEach(item => item.classList.remove('active'));
  controls.forEach(control => control.classList.remove('active'));
},
transitionDelay: (items) => { // Set incrementing css transition-delay for .item-header & .item-description, .vertical-part, b elements
  let seconds;
  
  items.forEach(item => {
	const children = item.childNodes; // .vertical-part(s)
	let count = 1,
	  delay;
	
	item.classList.value === 'item-header' ? seconds = .015 : seconds = .007;

	children.forEach(child => { // iterate through .vertical-part(s) and style b element
	  if (child.classList) {
		item.parentNode.classList.contains('active') ? delay = count * seconds + activeDelay : delay = count * seconds;
		child.firstElementChild.style.transitionDelay = `${delay}s`; // b element
		count++;
	  }
	})
  })
},
}

let intervalF = setInterval(slider.nextSlide, interval);
slider.init();