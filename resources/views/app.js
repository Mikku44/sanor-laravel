document.addEventListener("DOMContentLoaded", function () {
	// make it as accordion for smaller screens
	// if (window.innerWidth > 992) {

	// 	document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {

	// 		everyitem.addEventListener('mouseover', function (e) {

	// 			let el_link = this.querySelector('a[data-bs-toggle]');

	// 			if (el_link != null) {
	// 				let nextEl = el_link.nextElementSibling;
	// 				el_link.classList.add('show');
	// 				nextEl.classList.add('show');
	// 			}

	// 		});
	// 		everyitem.addEventListener('mouseleave', function (e) {
	// 			let el_link = this.querySelector('a[data-bs-toggle]');

	// 			if (el_link != null) {
	// 				let nextEl = el_link.nextElementSibling;
	// 				el_link.classList.remove('show');
	// 				nextEl.classList.remove('show');
	// 			}


	// 		})
	// 	});

	// }
	// end if innerWidth
	//drag and drop
	const slider = document.getElementsByClassName('items');
	if (isNaN(slider)) {
		let isDown = false;
		var startX;
		let scrollLeft;

		for (let i = 0; i < slider.length; i++) {
			slider[i].addEventListener('mousedown', (e) => {
				isDown = true;
				slider[i].classList.add('active');

				startX = e.pageX - slider[i].offsetLeft;
				scrollLeft = slider[i].scrollLeft;
			});
			slider[i].addEventListener('mouseleave', () => {
				isDown = false;
				slider[i].classList.remove('active');
			});
			slider[i].addEventListener('mouseup', () => {
				isDown = false;
				slider[i].classList.remove('active');
			});
			slider[i].addEventListener('mousemove', (e) => {
				if (!isDown) return;
				e.preventDefault();
				const x = e.pageX - slider[i].offsetLeft;
				const walk = (x - startX) * 3; //scroll-fast
				slider[i].scrollLeft = scrollLeft - walk;
				console.log(walk);
			});
		}

	}

		
	
	

	// scroll check
	window.addEventListener('scroll', (x) => {
		if (window.scrollY > 300) {
			if (document.querySelector('#btn-up') != isNaN) {
				(document.querySelector('#btn-up')).classList.remove('opacity-0');
				(document.querySelector('#es-text')).classList.add('d-none');
			}

		} else {
			if (document.querySelector('#btn-up') != isNaN) {
				(document.querySelector('#btn-up')).classList.add('opacity-0');
				(document.querySelector('#es-text')).classList.remove('d-none');
			}

		}
	})
});


function scrollClick(){
	console.log("clicked");
	const slider = document.getElementsByClassName('items');
	let isDown = false;
	let i = 0;
	var startX;
	let scrollLeft;
	const x = pageX - slider[i].offsetLeft;
				const walk = (x - startX) * 3; //scroll-fast
				slider[i].scrollLeft = scrollLeft - walk;
				console.log(walk);
}