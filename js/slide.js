
	var n= Math.floor(Math.random()*3)+1;
	
	
	function slide()
	{
		n++;
		if(n >= 5) n=1;
		
		var images = "<img style=\"width: 97%; border-radius:5px;\" src=\"prez/D" + n + ".jpg\">";
		document.getElementById("photo").innerHTML = images;
		$("#photo").fadeIn(0);
		setTimeout("slide()",10000);
		
	}