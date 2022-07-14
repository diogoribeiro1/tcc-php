// Button DOM
let btn = document.getElementById("concluir");

// Adding event listener to button
btn.addEventListener("click", () => {

	// Fetching Button value
	let btnValue = btn.value;

	// jQuery Ajax Post Request
	$.post('forum.php', {
		btnValue: btnValue
	}, (response) => {
		// response from PHP back-end
		console.log(response);
	});
});
