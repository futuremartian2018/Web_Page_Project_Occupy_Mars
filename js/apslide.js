
	var n= Math.floor(Math.random()*4)+1;
	
	function hide()
	{
		$("#photo").fadeOut(500);
	}
	
	
	function apslide()
	{
		n++;
		if(n >= 6) n=1;
		
		var images = "<img style=\"width: 97%; border-radius:5px;\" src=\"apollo/A" + n + ".jpg\">";
		document.getElementById("photo").innerHTML = images;
		setTimeout("hide()",4500);
		setTimeout("apslide()",5000);
		$("#photo").fadeIn(500);
	}