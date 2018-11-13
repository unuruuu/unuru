<!DOCTYPE html>
<!-- index.php -->
<html>
  <head>
   <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
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
				             <li><a href="hh.html">Хичээл сонголт</a></li>
				      </ul>
			    </div><!-- /.navbar-collapse -->
	          </div><!-- /.container-fluid -->
          </nav>
     
			<div class="container">
			     <div class="row">

						<h1 id="HJ">Хичээл сонголт</h1>
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
								 
					
					<div class="lesson">
						dddd
					</div>
			        <div class="clearfix"></div> 
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
  echo"<style> color: black;10px; border: 5px;</style>";
   echo"<table class='table table-striped'>";
   echo"<thead>";
   echo"<tr>";
   echo"<th scope='col'>Овог</th>";
   echo"<th scope='col'>Нэр</th>";
   echo"<th scope='col'>сиси</th>";
   echo"<th scope='col'>хөтөлбөр</th>";
   echo"<th scope='col'>сонгосон хичээл</th>";
   
  foreach($students as $hicheel){
	  echo "<tr>";
	  foreach($hicheel as $songolt){
		   echo "<th scope='col'>";
		   echo is_array($songolt) ? '' : $songolt;
		   	   echo "</th>";
	  }
	  
	  	
   echo"<th scope='col'>Хичээлийн нэр</th>";
   echo"<th scope='col'>Индекс</th>";
   echo"<th scope='col'>Код</th>";
   echo"<th scope='col'>Кридет</th>";
   echo "<th scope='col'>";
		   echo is_array($bagts) ? '' : $bagts;
		   	   echo "</th>";
  }
   echo "</table>";
    echo " </thead>";
	echo"</tr>";
  ?>
  </body>
</html>