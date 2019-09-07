function loadPanel(x) {
	var n = document.getElementById("panelNotifications");
	var h = document.getElementById("panelHistory");
	var menuN = document.getElementById("menuN");
    var menuH = document.getElementById("menuH");

	if(x == "notifications") {
		h.style.display = "none";
		n.style.display = "block";
		menuN.style.fontWeight = "bold";
        menuH.style.fontWeight = "normal";
	} else {
		n.style.display = "none";
		h.style.display = "block";
        menuH.style.fontWeight = "bold";
        menuN.style.fontWeight = "normal";
    }
}