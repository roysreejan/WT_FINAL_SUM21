function get(id)
	{
		return document.getElementById(id);
	}
	function loadDoc()
	{
		var xhr = new XMLHttpRequest();
		xhr.open("Get","checkname.php?name="+e.value,true);
		xhr.onreadystatechange=function()
		{
			if(this.readyState  == 4 && this.status ==200)
			{
				if(this.responseText.trim()=="invalid")
				{
					get("err_name").innerHTML = "Name Exists";
				}
				else
				{
					get("err_name").innerHTML ="";
				}
			}
		};
		xhr.send()
	}