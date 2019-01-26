'use strict';
(function () {
	function zeichne() {
		var element = document.getElementById('canvas');
		if (element.getContext) {
			var context = element.getContext('2d'),
				text = 'GM!';
			context.clearRect(0, 0, element.width, element.height);
			context.fillStyle = '#FFFFFF';
			context.strokeStyle = '#ADA189';
			context.font = 'italic 40px sans-serif';
			context.textAlign = 'left';
			context.textBaseline = 'left';
			context.fillText(text, element.width / 2, element.height / 2);
			context.strokeText(text, element.width / 2, element.height / 2);
		}
	}
	document.addEventListener("DOMContentLoaded", function () {
		zeichne();
	});
}());
