	const container = document.querySelector('.container');

	container.addEventListener('click', e => {
		if (
			e.target.classList.contains('seat') &&
			!e.target.classList.contains('booked')
		) {
			e.target.classList.toggle('selected');
		}
	});
