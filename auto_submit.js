window.onload = function() {
// Onload event of Javascript
// Initializing timer variable
	//myTimer();
	var myVar=setInterval(function(){myTimer()},100);
	
};
function myTimer() {
    var d = new Date();
    document.getElementById("clock").innerHTML = d.toLocaleTimeString();
}
function start()
{
	var x = 20;
	var y = document.getElementById("timer");
	// Display count down for 20s
	setInterval(function() {
		if (x <= 21 && x >= 1) {
			x--;
			y.innerHTML = '' + x + '';
			if (x == 1) {
				document.getElementById("form").submit();
			}	
		}
	}, 1000);
}