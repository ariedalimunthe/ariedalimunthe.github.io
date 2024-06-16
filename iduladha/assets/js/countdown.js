(function () {
	const second = 1000,
		minute = second * 60,
		hour = minute * 60,
		day = hour * 24;

	//I'm adding this section so I don't have to keep updating this pen every year :-)
	//remove this if you don't need it
	let today = new Date(),
		dd = String(today.getDate()).padStart(2, "0"),
		mm = String(today.getMonth() + 1).padStart(2, "0"),
		yyyy = today.getFullYear(),
		nextYear = yyyy,
		dayMonth = "04/12/",
		birthday = dayMonth + yyyy;

	today = mm + "/" + dd + "/" + yyyy;
	if (today > birthday) {
		birthday = dayMonth + nextYear;
	}
	//end

	const countDown = new Date(birthday).getTime(),
		x = setInterval(function () {

			const now = new Date().getTime(),
				distance = countDown - now;
			const textDay = Math.floor(distance / (day));
			const textHour = Math.floor((distance % (day)) / (hour));
			const textMinute = Math.floor((distance % (hour)) / (minute));
			const textSecond = Math.floor((distance % (minute)) / second);
			document.getElementById("days").innerHTML = textDay;

			document.getElementById("hours").innerHTML = textHour;
			document.getElementById("minutes").innerHTML = textMinute;
			document.getElementById("seconds").innerHTML = textSecond;

			//do something later when date is reached
			if (distance < 0) {
				document.getElementById("headline").innerText = "It's my birthday!";
				document.getElementById("countdown").style.display = "none";
				document.getElementById("content").style.display = "block";
				clearInterval(x);
			}
			//seconds
		}, 0)
}());