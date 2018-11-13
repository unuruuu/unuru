<!DOCTYPE html>
<!-- index.php -->
<html>
  <head>
   <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link href="css/style.css" rel="stylesheet">
		 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		 <script src="js/jquery-3.1.1.min.js"></script>
		 <script src="bootstrap/js/bootstrap.min.js"></script>
  <body> 
<nav class="navbar navbar-inverse">
	          <div class="container-fluid">
	             <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topmenu" aria-expanded="false">
	                     <span class="sr-only">Toggle navigation</span>
	                     <span class="icon-bar"></span>
	                     <span class="icon-bar"></span>
	                     <span class="icon-bar"></span>
	                </button>
	              	<a class="navbar-brand" href="#">МУИС</a>
	             </div>

			    <div class="collapse navbar-collapse" id="topmenu">
				      <ul class="nav navbar-nav">
				             <li class="active"><a href="home.html">Нүүр <span class="sr-only">(current)</span></a></li>
				           
				      </ul>
          </nav>
     	
					</div>
			</div>
	    <script src="jjs/script.js" ></script>
	    <script type="text/javascript" src="main.js"></script>
 
  <?php
  $students=array(
  array(
  'ovog'=>"Баасанхүү",
  'ner'=>"Өнөрбаясгалант" ,
  'sisi'=>"15B1SEAS0682" ,
  'hutulbur'=>"Мэдээллийн систем" ,
  'songoson hicheel'=>array('hname'=>"web",
  'index'=>"mt4532",
  'kr'=>"3" )
  ),
    array(
  'ovog'=>"Жаргал",
  'ner'=>"Амарсайхан" ,
  'sisi'=>"16B1SEAS1612" ,
  'hutulbur'=>"Програм хангамж" ,
  'songoson hicheel'=>array('hname'=>"web",
  'index'=>"mt4532",
  'kr'=>"3" )
  ),
    array(
  'ovog'=>"Золбаяр",
  'ner'=>"Болормаа" ,
  'sisi'=>"15B1SEAS0102" ,
  'hutulbur'=>"Мэдээллийн технологи" ,
  'songoson hicheel'=>array('hname'=>"web",
  'index'=>"mt4532",
  'kr'=>"3")
  )
  );
 	echo "<tr>";
	foreach($students as $key=>$value)
	{
		echo "<tr>";
		echo is_array($key) ? '' : $key;
		echo "$students[key]";
		echo "</tr>";
	}
	echo "</tr>";
	 
	    	
 echo"<table id='container' class='table table-bordered'>";
							echo "<tr>";
							   echo" <th>№</th>";
							    echo"<th>Нэр</th>";
								echo"<th>Индекс	</th> ";
						   echo" <th>Кридет</th>";  
					  		echo"</tr>";
						echo"</table> ";
			            echo"<br><br> <br> ";        			 
				echo"</div>";
   echo "</table>";
    echo " </thead>";
	echo"</tr>";
	echo "<table border=1>";
	echo "<tr>";
	foreach($students as $key=>$value)
	{
		echo "<tr>";
		echo is_array($key) ? '' : $key;
		echo "$students[key]";
		echo "</tr>";
	}
	echo "</tr>";
  ?>
  </table>
  </body>
</html>