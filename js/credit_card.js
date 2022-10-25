$(() => {
	$(".credit-number > input").mask("9999-9999-9999-9999");
	$(".credit-date > input").mask("99/99");
	$(".credit-cvv > input").mask("999");
	$('.credit-name > input').on("input", function() {
	    $(this).val($(this).val().replace(/[^A-Za-z\s]/, ''));
	    $(this).val($(this).val().toUpperCase());
	});

	let options = {
		prefixes : [
			{
				pattern : /^4/,
				name : "visa",
				img : "1.png",
				color : "#5976c7"
			},
			{
				pattern : /^(51)|^(52)|^(53)|^(54)|^(55)/,
				name : "master card",
				img : "2.png",
				color : "#fab130"
			},
			{
				pattern : /^(50)|^(56)|^(57)|^(58)/,
				name : "maestro",
				img : "3.png",
				color : "#fb3c4d"
			},
			{
				pattern : /^2/,
				name : "mir",
				img : "25.png",
				color : "#4db45f"
			},
		],
	};

	$(".credit-number > input").on("input keyup", () => {
		let found = false;
		let value = $(".credit-number > input").val();
		for (let i in options.prefixes) {
			let obj = options.prefixes[i];
			if (value.match(obj.pattern)) {
				$(".credit-image").css("background-image", `url('/resources/icons/pay_systems/dark_color/${obj.img}')`);
				$(".credit-surface").css("background-color", obj.color);
				found = true;
			}
		}
		if (!found) {
			$(".credit-image").css("background-image", "");
			$(".credit-surface").css("background-color", "var(--default-credit-color)");
		}
	});

	$(".credit-number > input").trigger("input");
}); 
