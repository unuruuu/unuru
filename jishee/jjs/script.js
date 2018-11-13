                     /*Tsag*/
var garag = ["Ням", "Даваа","Мягмар","Лхавга","Пүрэв","Баасан","Бямба"
];
	  
function CalculateDate(){
	var ognoo1= new Date();
	var ognoo2= new Date();
	var year= document.getElementById("year").value;
	var month= document.getElementById("month").value;
	var date= document.getElementById("day").value;
	
     ognoo1.setFullYear(year);
	 ognoo1.setMonth(month-1);
	 ognoo1.setDate(date);
	
	   
	 var zoruu= ognoo2.getTime() - ognoo1.getTime(); //millisecond
	 zoruu=zoruu/1000/60/60/24;
	
    document.getElementById("uzeg").innerHTML = zoruu;
	
	
	var udur = ognoo1.getDay();
     document.getElementById("uzeg").innerHTML += " "+garag[udur]+ " гараг";
	
} 
					  /*Төрсөн он сар өдөр*/
var garag = ["Ням", "Даваа","Мягмар","Лхавга","Пүрэв","Баасан","Бямба"
];
	  
function CalculateDate(){
	var ognoo1= new Date();
	var ognoo2= new Date();
	var year= document.getElementById("year").value;
	var month= document.getElementById("month").value;
	var date= document.getElementById("day").value;
	
     ognoo1.setFullYear(year);
	 ognoo1.setMonth(month-1);
	 ognoo1.setDate(date);
	
	   
	 var zoruu= ognoo2.getTime() - ognoo1.getTime(); //millisecond
	 zoruu=zoruu/1000/60/60/24;
	
    document.getElementById("uzeg").innerHTML = zoruu;
	
	
	var udur = ognoo1.getDay();
     document.getElementById("uzg").innerHTML = garag[udur]+ " гараг";
	
}

/*
console.log(ognoo.getFullYear());
console.log(ognoo.getMonth());
console.log(ognoo.getDate());
console.log(ognoo.getDay());
*/


                 /*Хичээлийн жагсаалт*/

var jagsaalt = document.getElementById("lessonList");

document.getElementById("addBtn").onclick = function(){
	var name = document.getElementById("lessonName").value;
	if(name !=""){
		jagsaalt.innerHTML += " <li class='list-group-item'>" +name+ "</li>";
	}
}

document.getElementById("removeBtn").onclick = function(){
	var name = document.getElementById("lessonName").value;
	for(var i=0; i < jagsaalt.getElementsByTagName("li").length; i++){
		if(jagsaalt.getElementsByTagName("li")[i].innerText == name)
		{jagsaalt.removeChild(jagsaalt.getElementsByTagName("li")[i]);}
	}
	
}

document.getElementById("editBtn").onclick = function(){
	var name = document.getElementById("lessonName").value;
	var newname = document.getElementById("newName").value;
	
	for(var i=0; i < jagsaalt.getElementsByTagName("li").length; i++){
		if(jagsaalt.getElementsByTagName("li")[i].innerText == name){jagsaalt.getElementsByTagName("li")[i].innerText = newname;}
	}
	
	
}

                  /*Хүснэгт будах*/

	
var budah = document.getElementById("paint");
var ongo = "white";
var clicked = false;
for (var i = 0; i < budah.getElementsByTagName("td").length; i++)
{
    budah.getElementsByTagName("td")[i].onmouseenter = function(){
        if(clicked == true){
        this.style.backgroundColor = ongo}
    }
};
budah.onmousedown = function(){ clicked = true;}
budah.onmouseup = function(){ clicked = false;}
budah.onmouseleave = function(){ clicked = false;}
                             
for(var i=0; i < document.getElementsByClassName("color").length; i++){
    document.getElementsByClassName("color")[i].onclick=function(){
        ongo = this.style.backgroundColor;
};
};



















































