<?php include("sidebar.php"); ?>
<html>
<head>
	<title></title>
	<style type="text/css">



#home .fa{  text-align: center; font-size: 90px; border-radius: 80px; color: #009688;
					margin-right: 25px; padding-top: 20px; 
					display: inline-block; width: 150px; height: 150px;
					border: 5px solid #009688; margin-top: 15px;
				}
	#home a:hover{text-decoration: none;}
	#home .fa-search:hover{color: orange; border: 3px solid orange;}

	#home .fa-plus:hover{color: orange; border: 3px solid orange;}

	#home .fa-pencil-square-o:hover{color: orange; border: 3px solid orange;}
	#home .fa-trash:hover{color: orange; border: 3px solid orange;}

	</style>
</head>
<body>

	

	<div class="container">
		<center>
		
		  <div id="home" >

<br><br><br>
		  	
		  	<h2 style="font-weight:bold; line-height:40px; color:black">Here you can manage all the records of books just click on you desire tab an then you can easily add, 
		  		update, delete, view all records of book </h2>
		  		
	<br><br>

				
				<a href="http://localhost:8080/book-management/ci/manage/addRecord/"><i class="fa fa-plus" aria-hidden="true"> </i>  </a>
				<a href="http://localhost:8080/book-management/ci/manage/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  </a>
				<a href="http://localhost:8080/book-management/ci/manage/viewrecords"><i class="fa fa-search" aria-hidden="true"></i>  </a>
				<a href="http://localhost:8080/book-management/ci/manage/delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
	
	
   </div>


		</center>	

	</div>



</body>
</html>