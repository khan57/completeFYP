function got (t) {
	
var obj=new XMLHttpRequest();
if (t=="Trainer report") {


obj.open("GET","./actions/trainera.php?ref="+t,true);
obj.send();
obj.onreadystatechange=function(){

		if(obj.readyState==4 && obj.status==200)
		{

			document.getElementById('content').innerHTML=obj.responseText;

		}

	};

	
}else if (t=="user report") {


var obj=new XMLHttpRequest();
obj.open("GET","./actions/usera.php?ref="+t,true);
obj.send();
obj.onreadystatechange=function(){

		if(obj.readyState==4 && obj.status==200)
		{

			document.getElementById('content').innerHTML=obj.responseText;

		}

	};
	
}
else if (t=="package report") {

obj.open("GET","./actions/packager.php?ref="+t,true);
obj.send();
obj.onreadystatechange=function(){

		if(obj.readyState==4 && obj.status==200)
		{

			document.getElementById('content').innerHTML=obj.responseText;

		}

	};
}
else if (t=="shift report") {

obj.open("GET","./actions/shiftr.php?ref="+t,true);
obj.send();
obj.onreadystatechange=function(){

		if(obj.readyState==4 && obj.status==200)
		{

			document.getElementById('content').innerHTML=obj.responseText;

		}

	};

}
else if (t=="Payment") {

obj.open("GET","./actions/paymentr.php?ref="+t,true);
obj.send();
obj.onreadystatechange=function(){

		if(obj.readyState==4 && obj.status==200)
		{

			document.getElementById('content').innerHTML=obj.responseText;

		}

	};
	
}
else if (t=="Speciality report") {

	obj.open("GET","./actions/specialityr.php?ref="+t,true);
obj.send();
obj.onreadystatechange=function(){

		if(obj.readyState==4 && obj.status==200)
		{

			document.getElementById('content').innerHTML=obj.responseText;

		}

	};

	
}
}