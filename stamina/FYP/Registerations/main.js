
function gotid(e) {
	if (e==1) {
	  var element = document.getElementById(e);
    element.classList.add("active");
   
	}

	function addclass(){
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}}
	*/
}
function insertadmin () {
	var obj= new XMLHttpRequest();


var name=document.getElementById("anamee").value;
var uname=document.getElementById("auname").value;
var password=document.getElementById("apass").value;
var mobile=document.getElementById("amobile").value;
var address=document.getElementById("aAdress").value;
var cnic=document.getElementById("acnic").value;
obj.open("GET","adminaction.php?name="+name+"&uname="+uname+"&password="+password+"&mobile="+mobile+"&address="+address+"&cnic="+cnic,true);
obj.send()
obj.onreadystatechange=function(){


	if (obj.readyState==4 && obj.status==200) {
document.getElementById('result').innerHTML=obj.responseText;

 document.getElementById("anamee").value='';
 document.getElementById("auname").value='';
 document.getElementById("apass").value='';
 document.getElementById("amobile").value='';
 document.getElementById("aAdress").value='';
 document.getElementById("acnic").value='';
	}
}


}



function check(){


var a= new XMLHttpRequest();
	 var uName =document.getElementById("un").value;

a.open("GET","counts.php?j="+uName,true);
a.send();
a.onreadystatechange=function(){


	if (a.readyState==4 && a.status==200) {
		if (a.responseText=="Sorry!This user name has been taken.") {
document.getElementById("mssg").innerHTML=a.responseText;
document.getElementById("regbtn").disabled=true;

		}else{

document.getElementById("regbtn").disabled=false;			
		}
//document.getElementById("mssg").innerHTML= a.responseText;
//document.getElementById("mssg").value=a.responseText;
	}
}

	 
}

function enroll(h){


alert(h);

}