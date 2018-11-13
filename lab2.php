<html>
     <head>
	     <title>lab-8</title>
		 <meta charset="utf-8">
	     <link href="css/style.css" rel="stylesheet">
		 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	 </head>
	 <body>
		  <nav class="navbar navbar-inverse">
	          <div class="container-fluid">
	             <div class="navbar-header">
	              	<a class="navbar-brand" href="#">МУИС</a>
	             </div>

			    <div class="collapse navbar-collapse" id="topmenu">
				      <ul class="nav navbar-nav">
				             <li class="active"><a href="#home.html">Нүүр <span class="sr-only">(current)</span></a></li>
				            
				      </ul>
			  
          </nav>
     
			<div class="container">
			    <div class="row">
						<h1 id="HJ">Оюутаны жагсаалт</h1>
						<table id="container" class="table table-bordered">
							<tr>
							    <th>№</th>
							    <th>Sisi id</th> 
							    <th>Нэр</th>
							    <th>Хөтөлбөр</th>
							    <th></th>
					  		</tr>
						</table> 
			            <br><br> <br>          		 
					</div>
	 </body>
</html>



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

   
  foreach($students as $hicheel){
	  echo "<tr>";
	  foreach($hicheel as $songolt){
		   echo "<th scope='col'>";
		   echo is_array($songolt) ? '' : $songolt;
		   	   echo "</th>";
	  }
	  
	  	

  }
  
  ?>
  </table>
  </body>
</html>