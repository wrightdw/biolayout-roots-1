/* Author: Derek Wright
Prevents JQuery popup going behind YouTube iFrame
*/
window.onload = function() {
    var frames = document.getElementsByTagName("iframe");
    for (var i = 0; i < frames.length; i++) {
		var url = frames[i].src;
		var char = "?";
		if(url.indexOf("?") != -1){
			  var char = "&";
		}
		frames[i].src += char + "wmode=opaque";
    }
}
