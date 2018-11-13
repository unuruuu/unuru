var student =
{
	"dugaar" : [1,2,3,4,5],
	"SiSiID" : ["15b1seas6060", "15b1seas2020", "15b1seas9090", "15b1seas8080", "15b1seas7070"],
	"name" : ["Z.Bat-Ulzii", "T.Batkhuu", "B.Uuganbat", "G.Amarmend", "J.Munkhbat"],
	"hotolbor" : ["Impormation tehnology", "Impormation system", "Network Engineer", "Program Developer", "Impormation tehnology"],
	"uzejKredit" : [21, 15, 12, 18, 15]
};
var lesson =
{
	"dugaar" : [101,102,103,104,105],
	"index" : ["L101", "L102", "L103", "L104", "L105"],
	"lname" : ["Web programming", "Statistic", "Data structure", "English", "Mathematics"],
	"kr" : [3,3,3,3,5],
	"suudal" : [3, 2, 4, 5, 150],
	"uzejba" : [3, 1, 2, 1, 2]
};
var uzejBui =
{
	"indexS" : [  1,   1,   1,   2,   4,   5,   4,   3,   3],
	"indexL" : [101, 102, 103, 101, 105, 104, 103, 101, 105]
};
		
// id barih
var table = document.getElementById("container");
var towch = '<input type="button"  onclick="viewL(this.name)" name="';
var towch1 = '" value=" Хичээл сонгох" getElementsByTagName="show">';
//husnegt zurah
var i,j;
for(i=0, j=1; i < Object.keys(student.dugaar).length;j++, i++)
{
	var row = table.insertRow(j);
	var cell0 = row.insertCell(0);
	var cell1 = row.insertCell(1);
	var cell2 = row.insertCell(2);
	var cell3 = row.insertCell(3);
	var cell4 = row.insertCell(4);
	cell0.innerHTML = student.dugaar[i];
	cell1.innerHTML = student.SiSiID[i];
	cell2.innerHTML = student.name[i];
	cell3.innerHTML = student.hotolbor[i];
	cell4.innerHTML = towch+student.dugaar[i]+towch1;
}
var xA = true;		

function viewL(name)
{
	document.getElementById('json').innerHTML = '';
	

    var oyutan = name;
	var ltable = document.getElementById("hicheel");

	var pick = '<input type="button" class="pick" onclick="updateL(this.name,'+ oyutan + ')" name="';
	var picked = '" value="pick">';
	var rem = '<input type="button" class="remove" onclick="removeL(this.name,'+ oyutan + ')" name="';
	var remove = '" value="remove">';

	var dis = '<input type="button" value="full" disabled>';


	var i, j;
	var tableRows = ltable.getElementsByTagName("tr");
	var rowCount = tableRows.length;
	var too = parseInt(name);
	var bair = uzejBui.indexS.indexOf(too);
	for (var x=rowCount-1; x>=0; x--) 
	{
	   ltable.deleteRow(tableRows[x]);
	}
	for(i=0, j=0; i < Object.keys(lesson.dugaar).length;j++, i++)
	{
		if(j == 0)
		{
			var row = ltable.insertRow(j);
			var cell0 = row.insertCell(0);
			var cell1 = row.insertCell(1);
			var cell2 = row.insertCell(2);
			var cell3 = row.insertCell(3);
			var cell4 = row.insertCell(4);
			var cell5 = row.insertCell(5);
			cell0.innerHTML = "Hicheeliin dugaar";
			cell1.innerHTML = "Hicheeliin index";
			cell2.innerHTML = "Hicheeliin ner";
			cell3.innerHTML = "Hicheeliin kredit";
			cell4.innerHTML = "Hicheeliin suudal";
			cell5.innerHTML = "Songoh";
		}
		else
		{
			var row = ltable.insertRow(j);
			var cell0 = row.insertCell(0);
			var cell1 = row.insertCell(1);
			var cell2 = row.insertCell(2);
			var cell3 = row.insertCell(3);
			var cell4 = row.insertCell(4);
			var cell5 = row.insertCell(5);
			cell0.innerHTML = lesson.dugaar[i];
			cell1.innerHTML = lesson.index[i];
			cell2.innerHTML = lesson.lname[i];
			cell3.innerHTML = lesson.kr[i];
			cell4.innerHTML = lesson.suudal[i];
			
			var check = 0;
			for(var q = bair; q < Object.keys(uzejBui.indexS).length; q++)
			{
				if(uzejBui.indexS[q] == too && uzejBui.indexL[q] == lesson.dugaar[i])
				{
					console.log(uzejBui.indexS[i]+" uzsen "+student.dugaar[i]);	
					cell5.innerHTML = rem+too+" "+ lesson.dugaar[i] +remove;
					check++;
					break;
				}
			}
			if(check == 0)
			{
				if(lesson.uzejba[i] == lesson.suudal[i])
				{
					cell5.innerHTML = dis;
				}
				else
				{
					console.log(too+" uzeegui "+student.dugaar[i]);
					cell5.innerHTML = pick + too + ' ' + lesson.dugaar[i] + picked;
				}
			}
		}
		
	}

	if(xA)
	{
		var verify = document.createElement("input");
		verify.setAttribute('type', 'button');
		verify.setAttribute('id', 'verify');
		verify.setAttribute('name', too);
		verify.setAttribute('value', 'confirm');
		verify.setAttribute('onclick', 'gJson(this.name)');
		verify.style.margin = "15px 0px 0px 0px";
		ltable.appendChild(verify);
		xA = false;	
	}
}
		
function updateL(name, oyutan)
{
	var suragch = parseInt(name.substr(0, 1));
	var lssn = parseInt(name.substr(2, 3));
   
	var e = student.uzejKredit[suragch-1] + lesson.kr[lesson.dugaar.indexOf(lssn)];
	console.log("kredit tootsoh heseg " + student.uzejKredit);
	console.log(e);
	//update
	if(e <=21)
	{
		student.uzejKredit[suragch-1] +=lesson.kr[lesson.dugaar.indexOf(lssn)];
		var text = '<hr>';
		uzejBui.indexS.splice(Object.keys(uzejBui.indexS).length+1, 0, suragch);
		uzejBui.indexL.splice(Object.keys(uzejBui.indexL).length+1, 0, lssn);
		

		//suudal update
		console.log(lssn+ " "+ lesson.uzejba);

		lesson.uzejba[lesson.dugaar.indexOf(lssn)] += 1;

		console.log("inserted element! "+ lesson.uzejba);

		//document.getElementById('text').style.backgroundColor = "green";
		//document.getElementById('text').innerHTML = text + '<br> Амжилттай сонгогдлоо.';
	}
	else
	{
		var text = '<hr>';
		//document.getElementById('text').style.backgroundColor = "red";
		//document.getElementById('text').innerHTML = text + '<br> Уучлааарай 21 кредитээс илүү гарах гэж байна.';

	}
	console.log("kredit tootsoh heseg" + student.uzejKredit);
    viewL(oyutan);
}
        
//hicheel ustgah
function removeL(name, oyutan)
{
	
	var suragch = parseInt(name.substr(0, 1));
	var lssn = parseInt(name.substr(2, 3));
	var check = -1;
	
	for(var i = 0; i < Object.keys(uzejBui.indexL).length; i++)
	{
		if(uzejBui.indexL[i] == lssn && uzejBui.indexS[i] == suragch)
		{
			check = i;
			break;
		}
    }
	if(check != -1)
	{
    	uzejBui.indexS.splice(check, 1);
        uzejBui.indexL.splice(check, 1);
    }
    console.log(lssn+ " "+ lesson.uzejba);
    lesson.uzejba[lesson.dugaar.indexOf(lssn)] -=1;
    console.log(student.uzejKredit + " suragch "+ suragch);
    student.uzejKredit[suragch - 1] -=lesson.kr[lesson.dugaar.indexOf(lssn)];
    console.log(student.uzejKredit + " suragch "+ suragch);
    console.log("deleted element! "+ lesson.uzejba);
    document.getElementById('text').innerHTML = '';
    document.getElementById('text').style.backgroundColor = "white";

    viewL(oyutan);
}

function gJson(name)
{
	var too = parseInt(name);
	var json = document.getElementById('json');
	var text = '"'+student.SiSiID[too-1]+'": { <br>';
	var find = parseInt(countLesson(too));
	var j = 1;
	for(var i = 0; i<Object.keys(uzejBui.indexL).length; i++)
	{
		if(uzejBui.indexS[i] == too)
		{
			text+='\t';
			text+=String(uzejBui.indexL[i]);
			(j == find)? text+='<br>}' : text+=', ';
			j++;
			text+='<br>';
		}
	}
	console.log(find+ " hicheeluud "+ name);
	json.innerHTML = text;
}

function countLesson(too)
{
	var c = 0;
	var useg = parseInt(too);
	for(var i=0; i < Object.keys(uzejBui.indexL).length; i++)
	{
		if(useg == uzejBui.indexS[i])
		{
			c++;
		}
	}
	return c;
}