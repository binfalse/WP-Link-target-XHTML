function linkTarget ()
{
	if (!document.getElementsByTagName)
		return;

	var as = document.getElementsByTagName ("a");
	for (var i = 0; i < as.length; i++)
		if (as[i].getAttribute("href") && as[i].getAttribute("rel") == "external")
			as[i].target = "_blank";
}
window.addEventListener ? window.addEventListener ("load", linkTarget, false) : window.attachEvent && window.attachEvent ("onload", linkTarget);
