var gForm = false;
function get(id)
{
	return document.getElementById(id);
}
function writeOp(e)
{
	//var txt = get("uname").value;
	var txt = e.value;
	get("op").innerHTML = txt;
}
function hideDetails()
{
	get("info").style.display="none";
}
function showDetails()
{
	get("info").style.display="block";
}
function turnOn()
{
	get("bulb").src="pic_bulbon.gif";
}
function turnOff()
{
	get("bulb").src="pic_bulboff.gif";
}
function viewGForm()
{
	var g_f = get("g_form");
	var btn_g = get("btn_g");
	if(gform)
	{
		g_f.style.display="name";
		gForm = false;
		btn_g.innerHTML="Login with Google";
	}
	else
	{
		g_f.style.display="block";
		gForm = true;
		btn_g.innerHTML="Hide Google form";
	}
}